<?php

namespace App\Http\Controllers;


use App\Http\Requests\AddRobotRequest;
use App\Models\Robot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class AdminController extends Controller
{
    public function index(){
       if(\Auth::user()->admin==1){
          return view('admin.index');
        }
       else{
           return redirect(route('profile'));
       }
    }

    public function addRobot(AddRobotRequest $request){


        $path = '';

        if(request()->file('image')){
            $path = request()->file('image')->store('uploads/robots','public');
        }

        Robot::create([
            'name' => $request['name'],
            'image' => $path,
            'description' => $request['description']
        ]);

        return redirect()->back()->with('success' , 'Робот успешно был добавлен');
    }
    public function deleteRobot(Request $request){
        $robot = Robot::find($request->id);
        $robot->delete();
        return redirect()->back()->with('success' , 'Робот успешно был удален');
    }
}
