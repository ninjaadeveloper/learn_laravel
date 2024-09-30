<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


//named routes
Route::get('/', [UserController::class, 'showUser'])->name('home');
Route::get('/page',[UserController::class,'showPage'])->name('user'); 


Route::get('/getUser/{name}',[UserController::class,'getUser']);