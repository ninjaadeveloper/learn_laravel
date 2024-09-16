<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});


Route::view('/contact', 'contact');


Route::get('/userid/{id}', function (int $id) {
    return '<h1>User Id: ' . $id . '</h1>';
});


Route::get('/username/{name}', function (string $name) {
    return '<h1>Good Morning : ' . $name . '</h1>';
});


Route::get('/justnumber/{number}', function (int $number) {
    return '<h1>Number : ' . $number . '</h1>';
})->whereNumber('number');


Route::get('/justalpha/{alphabates}', function (string $alphabates) {
    return '<h1>Name : ' . $alphabates . '</h1>';
})->whereAlpha('alphabates');