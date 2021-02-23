<?php

namespace App\Http\Controllers;

use App\Models\Felt;
use App\Models\Bruker;
use App\Models\Profile;
use Illuminate\Http\Request;

class BrukerController extends Controller
{

    public function index() {

        $felts = Felt::get();

        return view('welcome', [
            
            'felts' => $felts
            
            ]);

        //$brukers = Felt::all();
    }

    public function profile ($id) {

        $profile = Profile::find($id);

        return view('profile', [
            
            'profiles' => $profile

        ]);


    }


    public function store() {

        //$brukers = Felt::all();
        //$gg = $brukers->find('1');
        //$test = "Hello";

        //return view('bruker', compact('gg'));

       
        //dd($brukers->find('1')->bruker());
    }
}
