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

    public function savePerson(Request $req)
    {

        $person = DB::table('persons')->insert(
            [
                'name' => $req->name,
                'email' => $req->email,
                'salary' => $req->salary,
                'mobile' => $req->mobile,
                'age' => $req->age
            ]
        );

        if ($person) {
            // return 'Data Saved';

            return '<script>window.location.href="/"</script>';
        } else {
            return 'Error';
        }
    }
}
