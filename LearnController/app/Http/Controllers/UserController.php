<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function showUser(){
        return '<h1>Hello from Controller</h1>';
    }


    public function showPage(){
        //return '<h1>This is my view page</h1>';
        return view('users.user');
    }

    public function getUser(string $username) {
        // return $username;
        return  view('users.getuser',['myname'=>$username]);
    }

} 
