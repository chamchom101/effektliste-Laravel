<?php

namespace App\Http\Controllers;

use App\Models\Felt;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class LogController extends Controller
{
    public function index ($id) {

        $loggView = Activity::where('causer_id', $id)->get();

        
        

        return view('log.view', compact('loggView'));


    }

}
