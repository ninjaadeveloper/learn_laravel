<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

Route::get('/', function () {
    return view('welcome');
});


Route::post('/save', [userController::class, 'saveUser']);

Route::view('/login', 'user.login')->name('login');
Route::view('/index', 'user.index')->name('index');

Route::post('/loginuser', [userController::class, 'loginUser']);




Route::post('/logout', [userController::class, 'logoutUser']);
