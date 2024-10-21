<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\personController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [personController::class, 'showPerson'])->name('home');

Route::post('/save', [personController::class, 'savePerson'])->name('save');



Route::view('/addUser', 'person.form')->name('add');
// Route::view('/edit/{id}', 'person.editUser')->name('edit');

Route::get('/edit/{id}', [personController::class, 'editPerson'])->name('edit');

Route::get('/update', [personController::class, 'updatePerson'])->name('update');

Route::get('delete/{id}', [personController::class, 'deletePerson'])->name('delete');
