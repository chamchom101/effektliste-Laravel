<?php

namespace App\Http\Controllers;

use App\Models\Felt;
use App\Models\Bruker;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index ($id) {

       $profiles = Bruker::with('felt')->find($id);
       $brukers = Bruker::find($id)->felt;

        return view('bruker.profile', compact('profiles', 'brukers'));

    
    }
}
