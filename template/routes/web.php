<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});


Route::view('/about','pages.about');

Route::view('/contact','pages.contact');

Route::view('/service','pages.service');


// Laravel goto view