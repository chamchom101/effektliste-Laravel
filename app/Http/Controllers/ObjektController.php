<?php

namespace App\Http\Controllers;

use App\Models\Objekt;
use App\Models\Felt;
use Illuminate\Http\Request;

class ObjektController extends Controller
{
     public function index () {

        $Objekter = Objekt::get();
        $felt = Felt::get();
        //$tests = Felt::with('Objekt')->get();

        return view('objekt.view', compact('Objekter'));
     }

     public function store (Request $request) {

      $this->validate($request, [

         'objekt' => 'required',
         'betjent' => 'required',
         'max'     => 'required'

      ]);

      $Skjekk = Objekt::where('name', $request->input('objekt'))->exists();
      $msg = 'Objekt ' . $request->input('objekt') . ' eksistere fra før, bruk et annet navn';


       if($Skjekk) {

         return back()->with('status2', $msg);


       } else {

         $createObjekt = Objekt::Create([

            'name' => $request->objekt,
            'max_rom' => $request->max,
            'betjent' => $request->betjent
   
         
         ]);

         $createFelt = Felt::Create([

            


         ]);
         
       }

      

      if ($createObjekt == true) {

         return back()->withSuccessMessage('Nytt Objektlagret uten feil');

      } else {

         return back()->withSuccessMessage('Noe har gått feil under oppretting av et nytt objekt');
      }


     }

     public function edit ($id) {

      $editObjekter = Objekt::find($id);
      $Objekter = Objekt::get();

      return view('objekt.view', compact('editObjekter', 'Objekter'));


     }

     public function update (Request $request, $id) {

      $updateObjekt = Objekt::find($id);
      $updateObjekt->name = $request->input('objekt');
      $updateObjekt->max_rom = $request->input('max');
      $updateObjekt->betjent = $request->input('betjent');
      $updateObjekt->save();


      if($updateObjekt == true) {

         //dd($updateFelt->max_rom);

         return  redirect('/objekt')->withSuccessMessage('Redigering av objekt ' . $updateObjekt->name . ' Gjennomført');
      } else {

         return  redirect('/objekt')->withSuccessMessage('Redigering av kategori ' . $updateObjekt->name . ' Ikke gjennomført');
      }


     }


     public function destroy ($id){

      $SlettObjekt = Objekt::find($id);
      $SlettObjekt->delete();

      if($SlettObjekt == true) {

         return  redirect('/objekt')->withSuccessMessage('Sletting av objekt ' . $SlettObjekt->name . ' Gjennomført');
      } 
      else {

         return  redirect('/objekt')->withSuccessMessage('Sletting av objekt ' . $SlettObjekt->name . ' Ikke gjennomført');

      }

      
     }
}
