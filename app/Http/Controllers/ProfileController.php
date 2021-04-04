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
use RealRashid\SweetAlert\Facades\Alert;
use Symfony\Component\Console\Input\Input;

class ProfileController extends Controller
{
    public function index ($id) {

       
     $JoinFelt = 


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
       $obj = Objekt::get();

        return view('bruker.profile', compact('profiles', 'brukers', 'kategoris', 'tests', 'objekters', 'obj'));

    
    }

    public function store (Request $request, $id) {

        $this->validate($request, [

            'title' => 'required',
            'image' => 'nullable'

        ]);

        

        
            $msg = 'Det er ikke tillatt å bruke objekter som ikke er registret., <a href="'. url('/objekt') . '"> Klikk her  </a>  og opprett ønsket objekt </br> Mulig dada';
            $msg2 = 'Større enn nødvedig';
            $ff = Objekt::where('name', $request->input('title'))->exists();
            $tt = Objekt::where('max_rom', '<=',  $request->input('rom'))->get()->first();
            //$new = DB::table('objekts')->select('max_rom')->where('max_rom', '<=', $request->input('rom'))->get()->first();
            $new = DB::table('objekts')->where([
                ['name', '=', $request->input('title')],
                ['max_rom', ">=", $request->input('rom')],
            ])->get()
            ->first();
            // Først skjekk om objektet eksisterer i databasen.
            // Dersom den eksisterer la brukeren gjennomføre.
            // Eksisterer ikke objektet i Objekter tabelen, stopp lagring, og gi en feilmelding.

            // if(!$new) {

            //     dd($new, $request->input('rom'));
            // } else {

            //     dd($new, $request->input('rom'));
            // }


            if(!$ff) {

                return back()->with('status', $msg);
                
                
                } else {
                
                $LagreObjekt = Felt::Create([
                
                    'title' => $request->title,
                    'kategori_id' => $request->kategori,
                    'bruker_id'    => $request->bruker_id,
                    'info'  => $request->info,
                    'antall_rom'   => $request->rom,
                    'antall_lager' => $request->lager,
                    //'image' => $request->image->move('public/images/', $imageName)
                
                    ]);
                
                
                
                
                } 
           


           
            
            
           
       
                


        //dd($request->input('kategori'), $request->input('title'), $request->input('bruker_id'));
        //$imageName = time(). '.' .$request->image->extensions();

       if($request->hasFile('image')) {
           
       $filename = $request->image->getClientOriginalname();
       $request->image->StoreAs('images', $filename, 'public');
       $imageID = Felt::all()->last()->id;
       Felt::find($imageID)->update(['image' => $filename]);


       } 

        if($LagreObjekt == true) {

            return back()->withSuccessMessage('Nytt Objekt lagret uten feil');

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

            return  redirect('/profile/' . $feltUpdate->bruker_id)->withSuccessMessage('Redigering gjennomført uten feil');


        } else {

            return  redirect('/profile/' . $feltUpdate->bruker_id)->with('status', 'Noe har gått galt under redigering');
        
            

        }
        
        



    }

    public function destroy ($id) {

        $deleteFelt = Felt::find($id);
        $deleteFelt->delete(); 

            

        if($deleteFelt == true) {

            return  back()->withSuccessMessage('' . $deleteFelt->title . ' Slettet uten feil');


        } else {

            return  back()->with('status', 'Noe har gått galt under Sletting');
        
            

        }
        


    }

    public function felt ($id) {

        $profiles = Bruker::with('felt')->find($id);
        $objekters = Objekt::get();
        $kategoris = Kategori::get();
        $obj = Objekt::get();
        $tests = Bruker::with('felt')->where('id', $id)->get();

        return view('bruker.profile', compact('profiles', 'objekters', 'kategoris', 'obj', 'tests'));


    }
}
