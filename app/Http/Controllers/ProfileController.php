<?php

namespace App\Http\Controllers;

use App\Models\Felt;
use App\Models\Bruker;
use App\Models\Profile;
use App\Models\Kategori;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index ($id) {

       $profiles = Bruker::with('felt')->find($id);
       $brukers = Bruker::find($id)->felt;
       //$kategoris = Felt::find($id)->kategori;
       $kategoris = Bruker::with('kategori.felt')->get();

       $tests = Bruker::where('id', $id)->get();
       

     

        return view('bruker.profile', compact('profiles', 'brukers', 'kategoris', 'tests'));

    
    }
}
