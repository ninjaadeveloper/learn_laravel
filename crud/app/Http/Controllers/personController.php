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

            // return '<script>window.location.href="/"</script>';
            return redirect()->route('home');
        } else {
            return 'Error';
        }
    }

    public function editPerson(Request $req)
    {
        $singlePerson = DB::table('persons')->where('id', $req->id)->get();

        // return $singlePerson;
        return view('person.editUser', ["data" => $singlePerson]);
    }

    public function updatePerson(Request $req)
    {

        $updateUser = DB::table('persons')->where('id', $req->id)->update(
            [
                'name' => $req->name,
                'email' => $req->email,
                'salary' => $req->salary,
                'mobile' => $req->mobile,
                'age' => $req->age
            ]
        );

        if ($updateUser) {
            return redirect()->route('home');
        } else {
            return 'Error'; 
        }
    }
}
