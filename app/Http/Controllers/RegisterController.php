<?php

namespace App\Http\Controllers;

use App\Models\Bruker;
use Illuminate\Http\Request;

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
     
        if($lagre == true) {

            return back()->with('status', 'Bruker opprettet uten feil');

        } else {
        
            return back()->with('status', 'Noe har gått galt under registrering');

        }


    }

    public function destroy ($id){

        $bruker = Bruker::find($id);
        $bruker->delete();

        if($bruker == true) {

            return back()->with('status', 'Sletting gjennomført uten feil');

        } else {
        
            return back()->with('status', 'Noe har gått galt under Sletting');

        }

    }
}
