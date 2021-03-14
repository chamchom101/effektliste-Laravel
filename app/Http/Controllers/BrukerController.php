<?php

namespace App\Http\Controllers;

use App\Models\Felt;
use App\Models\Bruker;
use App\Models\Profile;
use Illuminate\Http\Request;

class BrukerController extends Controller
{

    public function index() {

        $brukers = Bruker::paginate(2);
        $countFelt = Felt::where('bruker_id', 1)->count(); //Tell hvormange objekter hver enkelt bruker har.

        return view('welcome', compact('brukers', 'countFelt'));

        //$brukers = Felt::all();
    }

    public function profile ($id) {

        $profiles = Bruker::find($id);

        return view('profile', compact('profiles'));

        // return view('profile', [
            
        //     'profiles' => $profiles

        // ]);


    }


    public function store() {

        //$brukers = Felt::all();
        //$gg = $brukers->find('1');
        //$test = "Hello";

        //return view('bruker', compact('gg'));

       
        //dd($brukers->find('1')->bruker());
    }
}
