<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});


Route::view('/shop','pages.shop');
Route::view('/shopdetail','pages.shopdetail');