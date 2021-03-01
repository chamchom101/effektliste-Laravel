<?php

namespace App\Http\Controllers;

use App\Models\Felt;
use App\Models\Bruker;
use App\Models\Profile;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class ProfileController extends Controller
{
    public function index ($id) {

       $profiles = Bruker::with('felt')->find($id);
       $brukers = Bruker::find($id)->felt;
       //$kategoris = Felt::find($id)->kategori;

       // Vise kategoriene i profilsiden.
       $kategoris = Kategori::get();
       
       //HasManyThrough relasjon Bruker->Felt->kategori.
       //Se \App\Models\Bruker->Felt->Kategori
       $tests = Bruker::where('id', $id)->get();
       

     

        return view('bruker.profile', compact('profiles', 'brukers', 'kategoris', 'tests'));

    
    }

    public function store (Request $request) {

        $this->validate($request, [

            'title' => 'required'

        ]);

        //dd($request->input('kategori'), $request->input('title'), $request->input('bruker_id'));
        

        $LagreObjekt = Felt::Create([

            'title' => $request->title,
            'kategori_id' => $request->kategori,
            'bruker_id'    => $request->bruker_id,
            'info'  => $request->info,
            'antall_rom'   => $request->rom,
            'antall_lager' => $request->lager,
            
            
           

        ]);
         

        if($LagreObjekt == false) {

            dd($LagreObjekt);

        } else {

            dd('Noe har gått galt');


        }
        //$lagreKategori = Kategori::


    }
}
