<?php

namespace App\Http\Controllers;

use App\Models\Felt;
use App\Models\Bruker;
use App\Models\Kategori;
use App\Models\Objekt;
use App\Models\Profile;
use Illuminate\Http\Request;

class BrukerController extends Controller
{

    public function index() {

        $brukers = Bruker::paginate(10);
        $enkeltBruker = Bruker::all()->count();
        $brukerUt = Bruker::where('is_active', '=', '1')->get()->count();
        $countFelt = Felt::where('bruker_id', 1)->count(); //Tell hvor mange objekter hver enkelt bruker har.
        $countObjekter = Objekt::all()->count();
        $countKategori = Kategori::all()->count();

        return view('welcome', compact('brukers', 'countFelt', 'enkeltBruker', 'brukerUt', 'countObjekter', 'countKategori'));

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
