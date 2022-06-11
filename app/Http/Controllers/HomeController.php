<?php

namespace App\Http\Controllers;

use App\Models\Robot;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
       $robots = Robot::orderBy('created_at' , 'desc')->take(6)->get();
        return view('home' , ['robots' => $robots]);
    }
}
