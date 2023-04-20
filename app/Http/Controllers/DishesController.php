<?php

namespace App\Http\Controllers;

use App\Models\Dishes;
use Illuminate\Http\Request;

class DishesController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('Dishes');
    }
}
