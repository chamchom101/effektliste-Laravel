<?php

namespace App\Http\Controllers;

use App\Models\Version;
use Illuminate\Http\Request;

class VersionController extends Controller
{
    //

    public function view() {

        $getContent = Version::get();

        return view('version.view', compact('getContent'));
    }
}
