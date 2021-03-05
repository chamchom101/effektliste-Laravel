<?php

namespace App\Http\Controllers;

use App\Models\Bruker;
use App\Models\Kategori;
use Illuminate\Http\Request;

class DokumentController extends Controller
{
    public function index ($id) {
        $Bruker = Bruker::find($id);
        $infoOmBruker = Bruker::get();

        //$getBrukers = Bruker::where('id', $id)->get();
        $getBrukers = Bruker::where('id', $id)->get();

        return view('dokument.preview', compact('Bruker', 'getBrukers'));


    }

    public function print ($id) {

        $Bruker = Bruker::find($id);

        return view('dokument.print', compact('Bruker'));
    }
}
