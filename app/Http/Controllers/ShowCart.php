<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowCart extends Controller
{
    public function showCart(Request $request,$id)
    {
        return view('showCart');
    }
}
