<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Menus;
use App\Models\Cart;


class HomeController extends Controller
{
    public function index(){
        return view('index');

    }
    public function redirects(){
        $username = Auth::user()->name;

        if($username == 'admin'){
            return view('admin.Admin');
        }
        else{
            $user_id = Auth::id();

            $count = cart::where('user_id',$user_id)->count(); //count number item add to cart

            return view('index',compact('count'));
        }

    }
}
