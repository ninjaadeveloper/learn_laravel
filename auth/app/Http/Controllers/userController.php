<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function saveUser(Request $req)
    {
        $user = DB::table('myusers')->insert(
            [
                'name' => $req->name,
                'email' => $req->email,
                'password' => Hash::make($req->password),
            ]
        );

        if ($user) {
            return redirect()->route('login');
        }

        // return 'Hello World';
    }

    public function loginUser(Request $req)
    {


        $cred = $req->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $login = Auth::attempt($cred);

        return view('user.index');
    }
    public function logoutUser(Request $req)
    {

        Auth::logout();

        return view('welcome');
    }
}
