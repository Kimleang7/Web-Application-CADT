<?php

namespace App\Http\Controllers;

use App\Models\Menus;
use App\Models\Order;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){

        $data = menus::all();

        return view('Menu',compact('data',));

    }
    //search menu for user
    public function searchMenu(Request $request){

        $search = $request->searchMenu;

        $data = Menus::Where('title','LIKE','%'.$search.'%')->get();

        return view('Menu',compact('data'));
    }
    public function orderNow(Request $request){

        foreach($request->foodName as $key => $foodName){

            $data = new order;

            $data->foodName = $foodName;
            $data->price = $request->price[$key];
            $data->quantity = $request->quantity[$key];

            $data->name = $request->name;
            $data->phone = $request->phone;
            $data->address = $request->address;

            $data->save();

        }
        return redirect()->back();

    }

    public function addCart(Request $request,$id){

        if(Auth::id()){

            $user_id = Auth::id(); //user id is equal to auth id, it will take user id

            $food_id = $id;

            $quantity = $request->quantity;

            $cart = new cart;

            $cart->user_id = $user_id;
            $cart->food_id = $food_id;
            $cart->quantity= $quantity;

            $cart->save();

            return redirect()->back();
        }
        else{
            return redirect('/login');
        }
    }

//    show cart
    public function showCart(Request $request,$id){

        $data=cart::where('user_id',$id)->join('menuses','carts.food_id', '=','menuses.id')->get();

        $data2=cart::select('*')->where('user_id', '=',$id)->get();

        return view('showCart',compact('data','data2'));
    }

    //delete
    public function deleteCart($id)
    {
        $data = cart::find($id);
        $data->delete();
        return redirect()->back();
    }

}
