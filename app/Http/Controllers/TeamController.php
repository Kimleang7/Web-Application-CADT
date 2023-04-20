<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
class TeamController extends Controller
{
    public function team()
    {
        $data = team::all();
        return view('Team',compact('data'));
    }
}
