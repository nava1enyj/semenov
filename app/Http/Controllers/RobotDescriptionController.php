<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RobotDescriptionController extends Controller
{

    public function index(){
        return view('robots.robot-description');
    }

}
