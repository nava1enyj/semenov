<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.index');
    }

    public function changePassword(Request $request)
    {
        $user = User::find(Auth::id());
        if ($request->password) {
            $request->validate([
                'password' => 'required|min:8|confirmed',
            ]);
            $user->password = Hash::make($request->password);


            $user->save();
        }

        return redirect()->back()->with('success' , 'Данные успешно изменены');
    }
}

