<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\personController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [personController::class, 'showPerson']);

Route::get('/save', [personController::class, 'savePerson'])->name('save');



Route::view('/addUser', 'person.form')->name('add');
