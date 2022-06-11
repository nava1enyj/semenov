<?php

namespace App\Http\Controllers;

use App\Models\Robot;
use Illuminate\Http\Request;

class RobotsController extends Controller
{
    public function index()
    {
        $robots = Robot::orderBy('created_at' , 'desc')->get();
        return view('robots.index' , ['robots' => $robots]);
    }

}
