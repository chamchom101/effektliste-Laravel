<?php

namespace App\Http\Controllers;

use App\Models\Felt;
use App\Models\Bruker;
use App\Models\Objekt;
use App\Models\Profile;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Models\Activity;
use Symfony\Component\Console\Input\Input;

class ProfileController extends Controller
{
    public function index ($id) {

       $profiles = Bruker::with('felt')->find($id);
       $brukers = Bruker::find($id)->felt;
       //$kategoris = Felt::find($id)->kategori;

       // Vise kategoriene i profilsiden.
       $kategoris = Kategori::get();
       
       //HasManyThrough relasjon Bruker->Felt->kategori.
       //Se \App\Models\Bruker->Felt->Kategori
       $tests = Bruker::with('felt')->where('id', $id)->get();
       //$tests = Felt::with('bruker')->where('id', $id)->paginate(5);
       $objekters = Objekt::get();
       

     

        return view('bruker.profile', compact('profiles', 'brukers', 'kategoris', 'tests', 'objekters'));

    
    }

    public function store (Request $request) {

        $this->validate($request, [

            'title' => 'required',
            'image' => 'nullable'

        ]);

        $LagreObjekt = Felt::Create([

            'title' => $request->title,
            'kategori_id' => $request->kategori,
            'bruker_id'    => $request->bruker_id,
            'info'  => $request->info,
            'antall_rom'   => $request->rom,
            'antall_lager' => $request->lager,
            //'image' => $request->image->move('public/images/', $imageName)

            ]);

           

        //dd($request->input('kategori'), $request->input('title'), $request->input('bruker_id'));
        //$imageName = time(). '.' .$request->image->extensions();

       if($request->hasFile('image')) {
           
       $filename = $request->image->getClientOriginalname();
       $request->image->StoreAs('images', $filename, 'public');
       $imageID = Felt::all()->last()->id;
       Felt::find($imageID)->update(['image' => $filename]);


       }

        if($LagreObjekt == true) {

            return back()->with('status', 'Objekt opprettet uten feil');

        } else {

            return back()->with('status', 'Noe har gått galt under registrering');


        }
        //$lagreKategori = Kategori::


    }

    public function edit ($id) {

        $editObjekt = Felt::find($id);
        $katObjekt = Kategori::get();
        $headerObjekt = Kategori::find($id);

        return view('bruker.edit', compact('editObjekt', 'katObjekt', 'headerObjekt'));


    }

    public function update (Request $request, Activity $activity, $id) {

        $feltUpdate = Felt::find($id);
        $feltUpdate->bruker_id = $request->input('bruker_id');
        $feltUpdate->title = $request->input('objekt');
        $feltUpdate->antall_rom = $request->input('rom');
        $feltUpdate->antall_lager = $request->input('lager');
        $feltUpdate->info = $request->input('info');
        $feltUpdate->kategori_id = $request->input('kategori');
        //$activity->causer_id = $request->input('bruker_id');
        //$activity->description = $request->input('objekt');


        



       // dd($request->all());
        $feltUpdate->save();
        //$activity->save();

        // $lastId =  DB::table('activity_log')->latest('id')->first();
        // $loggUpdate = Activity::find($id);
        // $loggUpdate->causer_id = $request->input('bruker_id');
        // $loggUpdate->save();





        if($feltUpdate == true) {

            return  redirect('/profile/' . $feltUpdate->bruker_id)->with('status', 'Redigering gjennomført uten feil');


        } else {

            return  redirect('/profile/' . $feltUpdate->bruker_id)->with('status', 'Noe har gått galt under redigering');
        
            

        }
        
        



    }

    public function destroy ($id) {

        $deleteFelt = Felt::find($id);
        $deleteFelt->delete();

        if($deleteFelt == true) {

            return  back()->with('status', 'Sletting av objekt ' . $deleteFelt->title . ' gjennomført uten feil');


        } else {

            return  back()->with('status', 'Noe har gått galt under Sletting');
        
            

        }
        


    }
}
