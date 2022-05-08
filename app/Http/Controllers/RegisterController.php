<?php

namespace App\Http\Controllers;

use App\Models\Felt;
use App\Models\Logg;
use App\Models\Bruker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function index () {

        return view('bruker.register');
    } 

    public function store (Request $request) {

       $this->validate($request, [

            'innsatt_nummer' => 'required',
            'navn'           => 'required',
            'hylle'          => 'required',
            'signatur'       => 'required',

        ]);

        

        $lagre = Bruker::create([

            'innsatt_nummer'           => $request->innsatt_nummer,
            'navn'                     => $request->navn,
            'hylle'                    => $request->hylle,
            'betjent_navn'             => $request->signatur
        

        ]);

    

        if($request->hasFile('image')) {
           
            $filename = $request->image->getClientOriginalname();
            $request->image->StoreAs('images', $filename, 'public');
            //$filename = time().'.'.$request->image->extension();
            //$request->image->move(public_path('images'), $filename);
            $imageID = Bruker::all()->last()->id;
            Bruker::find($imageID)->update(['image' => $filename]);

            
     
     
            } 


            if($lagre == true) {

                return back()->with('status', 'Bruker opprettet uten feil');
    
            
    
            } else {
            
                return back()->with('status', 'Noe har gått galt under registrering');
    
            }
     
        


    }

    public function destroy (Request $request, $id){

       

        $bruker = Bruker::find($id);
        $bruker->delete();

        $loggFor = Logg::create([

            'name' => 'Slettet',
            'txt' => 'Slettet Av Hassan Cherry',
            'bruker_id' => $id


        ]);
        

        //Sletter alle effekter som tilhører bruker
        DB::table('felts')->where('bruker_id', $id)->delete();


        if($bruker == true) {

            return redirect("/")->withSuccessMessage('Bruker slettet uten feil');

        } else {
        
            return back()->with('status', 'Noe har gått galt under Sletting');

        }

    }

    public function edit ($id) {

        $editBruker = Bruker::find($id);



        return view('register.edit', compact('editBruker'));


    }


    public function update (Request $request, $id) {


        $updateBruker = Bruker::find($id);
        $updateBruker->navn = $request->input('navn');
        $updateBruker->hylle = $request->input('hylle');
        $updateBruker->betjent_navn = $request->input('signatur');
        $updateBruker->innsatt_nummer = $request->input('innsatt_nummer');

        $updateBruker->save();


        if($request->hasFile('image')) {
           
            $filename = $request->image->getClientOriginalname();
            $request->image->StoreAs('images', $filename, 'public');
            //$filename = time().'.'.$request->image->extension();
            //$request->image->move(public_path('images'), $filename);
            $imageID = Bruker::all()->last()->id;
            Bruker::find($imageID)->update(['image' => $filename]);

            
     
     
            } 

        if($updateBruker == true) {

            return  redirect('/profile/' . $updateBruker->id)->withSuccessMessage('Redigering gjennomført uten feil');

        } else {

            return  redirect('/profile/' . $updateBruker->id)->with('status', 'Noe har gått galt under redigering');
        }
    }
}
