<?php

namespace App\Http\Controllers;

use App\Models\Objekt;
use Illuminate\Http\Request;

class ObjektController extends Controller
{
     public function index () {

        $Objekter = Objekt::get();

        return view('objekt.view', compact('Objekter'));
     }
}
