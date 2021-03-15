<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CreateKategoriController extends Controller
{
    public function index () {

        $VisKategoris = Kategori::get();

        return view('kategori.create', compact('VisKategoris'));
    }

    public function store (Request $request) {


        $this->validate($request, [

            'kategori' => 'required',
            'betjent'  => 'required'


        ]);

        $lageKate = Kategori::Create([

            'titel' => $request->kategori,
            'betjent' => $request->betjent

        ]);


        if($lageKate == true) {

            return back()->withSuccessMessage('Ny kategori lagret uten feil');

        } else {
        
            return back()->with('status', 'Noe har gått galt under oppretting');

        }
    }

    public function edit($id) {

        $VisKategoris = Kategori::get();
        $EditKategori = Kategori::find($id);

        return view('kategori.create', compact('VisKategoris', 'EditKategori'));
    }

    public function update (Request $request, $id) {

        $UpdateKategoris = Kategori::find($id);
        $UpdateKategoris->titel = $request->input('kategori');
        $UpdateKategoris->betjent = $request->input('betjent');
        $UpdateKategoris->save();

        if($UpdateKategoris == true) {

            return  redirect('/kategori/create')->withSuccessMessage('Redigering av kategori ' . $UpdateKategoris->titel . ' Gjennomført');

        } else {

            return  redirect('/kategori/create')->withSuccessMessage('Redigering av kategori ' . $UpdateKategoris->titel . ' Ikke gjennomført');


        }


    }

    public function destroy ($id){

        $SlettKategori = Kategori::find($id);
        $SlettKategori->delete();

        if($SlettKategori == true) {

            return  redirect('/kategori/create')->withSuccessMessage('Sletting av kategori ' . $SlettKategori->titel . ' Gjennomført');

        } else {
        
            return  redirect('/kategori/create')->withSuccessMessage('Noe har gått galt under Sletting');

        }

    }


}
