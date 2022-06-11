<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddMessageRequest;
use App\Models\Message;
use App\Models\Robot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RobotDescriptionController extends Controller
{

    public function index($id){
        $robot = Robot::find($id);
        $messages = Message::where('robot_id' , $id)->orderBy('created_at' , 'desc')->get();
        return view('robots.robot-description' , ['data' => $robot , 'messages' => $messages]);
    }
    public function addMessage(AddMessageRequest $request){
        Message::create([
           'user_id' => Auth::user()->id,
           'robot_id' => $request->idPost,
           'message' => $request->message
        ]);

        return redirect()->back()->with('success' , 'Коментарий успешно добавлен');
    }

    public function deleteMessage(Request $request){

        $message = Message::find($request->id);
        if ($message->user_id == Auth::user()->id or Auth::user()->admin == 1){

            $message->delete();
            return redirect()->back()->with('success' , 'Коментарий успешно удален');
        }
        else{
            return redirect()->back()->with('success' , 'ОШИБКА');
        }
    }
}
