<?php

namespace App\Http\Controllers;

use App\Models\Logg;
use App\Models\Bruker;
use Illuminate\Http\Request;

class LoggController extends Controller
{
    public function index($id){

        $getData = Logg::where('bruker_id', $id)->get();
        $getName = Bruker::find($id);

        return view('logg.view', compact('getData', 'getName'));
    }
}
