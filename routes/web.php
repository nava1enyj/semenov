<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin',[\App\Http\Controllers\AdminController::class , 'index'])->name('admin')->middleware('auth');
Route::get('/profile' , [ProfileController::class , 'index'])->name('profile')->middleware('auth');
Route::get('/robots' , [\App\Http\Controllers\RobotsController::class , 'index'])->name('robots')->middleware('auth');
Route::get('/robotDescription' , [\App\Http\Controllers\RobotDescriptionController::class , 'index'])->name('robot-description')->middleware('auth');
Route::post('/robotAdd' , [\App\Http\Controllers\AdminController::class , 'addRobot'] )->name('add-robot');



