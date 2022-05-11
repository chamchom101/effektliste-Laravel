<?php

namespace App\Http\Controllers;

use App\Models\Felt;
use App\Models\Bruker;
use App\Models\Kategori;
use App\Models\Fremstilling;
use Illuminate\Http\Request;
use Spatie\Activitylog\Models\Activity;

class DokumentController extends Controller
{
    public function index ($id) {
        $Bruker = Bruker::find($id);
        $infoOmBruker = Bruker::get();

        //$getBrukers = Bruker::where('id', $id)->get();
        $getBrukers = Bruker::where('id', $id)->get();

        return view('dokument.preview', compact('Bruker', 'getBrukers'));


    }

    public function view () {

        $ShowBrukers = Bruker::get();

        return view('dokument.view', compact('ShowBrukers'));
    }

    public function printValue (Request $request, $id) {
        $rom = $request->input('rom');
        $getBruker = Bruker::find($id);
        //$printValues = Felt::where('bruker_id', $id)->latest()->take($rom)->get();
        //$date = \Carbon\Carbon::today()->subDays(30);
        $printValues = Felt::where('bruker_id', $id)->latest('updated_at')->take($rom)->get();
        //$printValuesFrem = Fremstilling::where('bruker_id', $id)->take($rom)->get();
        //$printValuesFrem = Felt::with('fremstillings')->where('bruker_id', $id)->get();
        $loggView = Activity::where('causer_id', $id)->get();
        
       // dd($test, $rom);

       return view('dokument.printvalue', compact('printValues', 'getBruker'));


    }

    public function print ($id) {

        $Bruker = Bruker::find($id);
        $getBrukers = Bruker::where('id', $id)->get();

        return view('dokument.print', compact('Bruker', 'getBrukers'));
    }
}
