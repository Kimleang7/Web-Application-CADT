<?php

namespace App\Http\Controllers;

use App\Models\reservation;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Menus;
use App\Models\Team;
use App\Models\Order;
use App\Models\Message;
use App\Models\Contact;

class AdminController extends Controller
{
    public function Admin()
    {
        return view("admin.Admin");
    }
    public function user()
    {
        $data = user::all();
        return view("admin.user",compact("data"));
    }

//    delete user by id
    public function deleteUser($id)
    {
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }
    //menu in admin
    public function foodMenu()
    {
        $data = menus::all();
        return view("admin.foodMenu",compact('data'));
    }
    //add item to menu view page
    public function addMenu(Request $request)
    {
        return view('admin.addMenu');
    }
    //the upload item to menu
    public function upload(Request $request)
    {
        $data = new menus;

        $image = $request->image;

        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->image->move('ImageMenu',$imagename);

        $data->image = $imagename;

        $data->title = $request->title;

        $data->icon = $request->icon;

        $data->price = $request->price;

        $data->description = $request->description;

        $data->save();

        return redirect()->back();

    }
    public function deleteMenu($id)
    {
        $data = menus::find($id);
        $data->delete();
        return redirect()->back();
    }

    //just a view page of update menu
    public function updateView($id)
    {
        $data = menus::find($id);

        return view('admin.updateView',compact('data'));
    }
    //the real update menu class
    public function update(Request $request, $id)
    {
        $data = menus::find($id);

        $image = $request->image;

        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->image->move('ImageMenu',$imagename);

        $data->image = $imagename;

        $data->title = $request->title;

        $data->icon = $request->icon;

        $data->price = $request->price;

        $data->description = $request->description;

        $data->save();

        return redirect()->back();

    }
    //team view
    public function teamView(){
        $data = team::all();
        return view('admin.team.teamView',compact('data'));
    }
    public function addTeam(){
        return view('admin.team.addTeam');
    }
    //add team member
    public function uploadTeam(Request $request)
    {
        $data = new team;

        $image = $request->image;

        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->image->move('ImageTeam',$imagename);

        $data->image = $imagename;

        $data->name = $request->name;

        $data->position = $request->position;

        $data->description = $request->description;

        $data->save();

        return redirect()->back();
    }

    public function deleteTeam($id)
    {
        $data = Team::find($id);
        $data->delete();
        return redirect()->back();
    }

    //just a view page of update team member
    public function updateTeamView($id)
    {
        $data = Team::find($id);

        return view('admin.team.updateTeamView',compact('data'));
    }

    //Update team members
    public function updateTeam(Request $request, $id)
    {
        $data = team::find($id);

        $image = $request->image;

        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->image->move('ImageTeam',$imagename);

        $data->image = $imagename;

        $data->name = $request->name;

        $data->position = $request->position;

        $data->description = $request->description;

        $data->save();

        return redirect()->back();

    }
    //Search in admin side
    //Search for user
    public function searchUser(Request $request){

        $search = $request->searchUser;

        $data = User::WHERE('name','LIKE','%'.$search.'%')->get();

        return view('admin.user',compact('data'));
    }
    //Search for admin
    public function searchMenuAdmin(Request $request){

        $search = $request->searchMenuAdmin;

        $data = menus::WHERE('title','LIKE'.$search.'%')->get();

        return view('admin.foodMenu',compact('data'));
    }

    //message admin
    public function reservation(Request $request)
    {
        $data = new reservation;

        $data->name = $request->name;

        $data->phone = $request->phone;

        $data->booking = $request->booking;

        $data->date = $request->date;

        $data->email = $request->email;

        $data->save();

        return redirect()->back();
    }

    //order in admin management

    public function orderView()
    {
        $data = order::all();
        return view("admin.orderView",compact('data'));
    }


}
