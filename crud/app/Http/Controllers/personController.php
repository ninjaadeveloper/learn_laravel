<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class personController extends Controller
{
    public function showPerson()
    {
        $personData =  DB::table('persons')->get();
        // return $personData;
        return view('person.index', ["data" => $personData]);
    }
}
