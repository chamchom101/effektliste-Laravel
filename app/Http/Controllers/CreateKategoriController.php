<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class CreateKategoriController extends Controller
{
    public function index () {

        $VisKategoris = Kategori::get();

        return view('kategori.create', compact('VisKategoris'));
    }

    public function store (Request $request) {


        $this->validate($request, [

            'kategori' => 'required',
            'betjent'  => 'required'


        ]);

        $lageKate = Kategori::Create([

            'titel' => $request->kategori,
            'betjent' => $request->betjent

        ]);


        if($lageKate == true) {

            return back()->with('status', 'Kategori opprettet uten feil');

        } else {
        
            return back()->with('status', 'Noe har gått galt under oppretting');

        }
    }


}
