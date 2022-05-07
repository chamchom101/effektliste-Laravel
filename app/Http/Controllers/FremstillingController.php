<?php

namespace App\Http\Controllers;

use App\Models\Felt;
use App\Models\Bruker;
use App\Models\Fremstilling;
use Illuminate\Http\Request;

class FremstillingController extends Controller
{
    public function index () {
        $InnUtFremstilling = Bruker::with('fremstilling')->where('is_active', 1)->get();

        return view('innut.view', compact('InnUtFremstilling'));


    }

    public function edit (Request $request, $id) {

        $FeltID = $request->input('felt_id');


        $InnUtEdit = Felt::find($id);
       // $FinnBrukerId = Felt::where('')
        
        //$frem = Fremstilling::find(14);
        


        return view('innut.edit', compact('InnUtEdit'));


    }

    public function update (Request $request, $id) {


        $Bruker = $request->input('bruker_id');
        $Skjekk = Fremstilling::where('felt_id', $request->input('felt_id'))->exists();


        if($Skjekk){

            
            return  redirect('/profile/'. $Bruker)->with('error_message', 'Objekt ' . $request->input('name') . ' eksisterer i (InnUt).');
           
           

        } else {


            $this->validate($request, [

                'info' => 'nullable'
            ]);

            $FlyttData = Fremstilling::Create([

                'name' => $request->objekt,
                'rom'  => $request->rom,
                'lager' => $request->lager, 
                'info' => $request->info,
                'felt_id' => $request->felt_id,
                'bruker_id' => $request->bruker_id
    
            ]);

            $FeltID = $request->input('felt_id');
            $BrukerID = $request->input('bruker_id');

            $OppdaterFeltID = Fremstilling::all()->last()->id;
            $OppdaterTall = Fremstilling::find($OppdaterFeltID);
            //$OppdaterBruker = Bruker::find($);
            $updateFelt = Felt::find($id);
            $updateFelt->fremstilling_id = $OppdaterFeltID;
            $updateFelt->antall_rom = $updateFelt->antall_rom - $OppdaterTall->rom;
            $updateFelt->antall_lager = $updateFelt->antall_lager - $OppdaterTall->lager;
            $updateFelt->save();

            $OppdaterBruker = Bruker::find($BrukerID);
            $OppdaterBruker->is_active = 1;
            $OppdaterBruker->save();

            return  redirect('/fremstilling')->withSuccessMessage('Objektet lagret i (InnUt) uten feil');

        

        }

        
    }

    public function tilbake (Request $request, $id) {

        //$FindValueFromFelt = Felt::

        $FeltID = $request->input('felt_id');
        $FreID = $request->input('frem_id');
        $FinnBruker = $request->input('bruker_id');
        $FinnFeltID = Fremstilling::where('id',$id)->find($id);
        $OppdaterID = Felt::find($FeltID);
        $OppdaterID->antall_rom = $request->input('rom') + $OppdaterID->antall_rom;
        $OppdaterID->antall_lager = $request->input('lager') + $OppdaterID->antall_lager;
        $OppdaterID->save();

        $FinnFeltID->delete();

        $Skjekk = Fremstilling::where('bruker_id', $FinnBruker)->exists();

        if(!$Skjekk) {

            $OppdaterBruker = Bruker::find($FinnBruker);
            $OppdaterBruker->is_active = 0;
            $OppdaterBruker->save();

        } else {

            return  redirect('/fremstilling')->withSuccessMessage('Objektet lagret i (InnUt) uten feil');
        }


        //$FeltOppdatering = Felt::find($id);


        //$OppdaterFelt->rom;
        

        return  redirect('/fremstilling')->withSuccessMessage('Oppdatert uten feil');
        //$FindValueFromFelt = Felt::where()




        


    }

    public function print(Request $request, $id) {

        $rom = $request->input('rom');

        $fremstillingPrint = Bruker::find($id);
        //$printValues = Felt::where('bruker_id', $id)->latest('updated_at')->take($rom)->get();
        $printValues = Felt::where('bruker_id', $id)->WhereNotNull('fremstilling_id')->latest('updated_at')->take($rom)->get();

        return view('innut.print', compact('fremstillingPrint', 'printValues'));
    }
}
