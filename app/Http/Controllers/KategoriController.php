<?php

namespace App\Http\Controllers;

use App\Models\Felt;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(Request $request) {

        $kategoris = Felt::get();

        return view('kategori', compact('kategoris'));

        //$kategoris = Kategori::get();

       // return view('kategori', [

            //'kategoris' => $kategoris


       // ]);

    }

    public function hent(Request $request) {

        if($request->submit == "Save")
        {
        dd('ddd');
        }
        else if($request->submit == "Update")
        {
        dd('ddddddddd');
        }
    

    }
}
