<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentContoller;


//named routes
Route::get('/', [UserController::class, 'showUser'])->name('home');
Route::get('/page',[UserController::class,'showPage'])->name('user'); 


Route::get('/getUser/{name}',[UserController::class,'getUser']);

Route::get('/single',StudentContoller::class);