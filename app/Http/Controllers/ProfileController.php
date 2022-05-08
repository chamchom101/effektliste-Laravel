<?php

namespace App\Http\Controllers;

use App\Models\Felt;
use App\Models\Logg;
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

       



       $profiles = Bruker::with('felt')->find($id);
       $brukers = Bruker::find($id)->felt;
       $enkeltBruker = Bruker::get();
       
       //$kategoris = Felt::find($id)->kategori;

       // Vise kategoriene i profilsiden.
       $kategoris = Kategori::get();
       
       //HasManyThrough relasjon Bruker->Felt->kategori.
       //Se \App\Models\Bruker->Felt->Kategori
       $tests = Bruker::with('felt', 'kategori')->where('id', $id)->get();
       //$tests = Felt::with('bruker')->where('id', $id)->paginate(5);
       $objekters = Objekt::get();
       //$obbb = Objekt::where('felt')->where('objekt_id', 'id')->get();
       $obj = Objekt::get();
       //$objektAntall =  

       $users = Felt::with('objekt.kategori')->where('id', $id)->get();



        return view('bruker.profile', compact('profiles', 'brukers', 'kategoris', 'tests', 'objekters', 'obj', 'users', 'enkeltBruker'));

    
    } 

    public function store (Request $request, $id) {

        $this->validate($request, [

            'title' => 'required',
            'image' => 'nullable'

        ]);

        

        
            $msg = 'Det er ikke tillatt å bruke objekter som ikke er registret., <a href="'. url('/objekt') . '"> Klikk her  </a>  og opprett ønsket objekt </br> Mulig dada';
            $msg2 = 'Større enn nødvedig';
            $ff = Objekt::where('name', $request->input('maxCreate2'))->exists();
            $tt = Objekt::where('max_rom', '<=',  $request->input('rom'))->get()->first();
            //$newTest = DB::table('objekts')->select('max_rom')->where('max_rom', '<=', $request->input('rom'))->get()->first();
            $new = DB::table('objekts')->where([
                ['name', '=', $request->input('title')],
                ['max_rom', ">=", $request->input('rom')],
            ])->get()
            ->first();
            // Først skjekk om objektet eksisterer i databasen.
            // Dersom den eksisterer la brukeren gjennomføre.
            // Eksisterer ikke objektet i Objekter tabelen, stopp lagring, og gi en feilmelding.

             //if(!$new) {

                //dd($new, $request->input('rom'). "Over");

           // } else {

                 //dd($new, $request->input('rom') . "Under");
           // }


            if(!$ff) {

                return back()->with('status', $msg);
                
                
                } else {
                
                $LagreObjekt = Felt::Create([
                
                    //'title' => $request->title,
                    'kategori_id' => $request->kategori,
                    'bruker_id'    => $request->bruker_id,
                    'info'  => $request->info,
                    'antall_rom'   => $request->rom,
                    'antall_lager' => $request->lager,
                    'tillatt'      => $request->tillatt,
                    'title'     => $request->maxCreate2,
                    'max_rom' => $request->maxCreate,
                    'pin'     => $request->viktig
                    //'max_rom'      => $request->max_rom
                    //'image' => $request->image->move('public/images/', $imageName)
                
                    ]);

                    Logg::create([

                        
                        'new' => $request->maxCreate2,
                        'name' => 'Opprettet',
                        'txt' => 'Hassan Cherry',
                        'bruker_id' => $request->bruker_id
            
            
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
            //dd($request->maxCreate. $request->maxCreate2);

        } else {

            //dd($LagreObjekt);

            return back()->with('status', 'Noe har gått galt under registrering');


        }
        //$lagreKategori = Kategori::


    }

    public function edit ($id) {

        $editObjekt = Felt::find($id);
        $getKatName = Kategori::where('id', '=',  5);
        $getObjekt = Felt::where('id', $id)->get();
        $katObjekt = Kategori::get();
        $headerObjekt = Kategori::find($id);

        return view('bruker.edit', compact('editObjekt', 'katObjekt', 'headerObjekt', 'getObjekt', 'getKatName'));


    }

    public function update (Request $request, Activity $activity, $id) {

        $feltUpdate = Felt::find($id);
        $feltUpdate->bruker_id = $request->input('bruker_id');
        $feltUpdate->title = $request->input('objekt');
        $feltUpdate->antall_rom = $request->input('rom');
        $feltUpdate->antall_lager = $request->input('lager');
        $feltUpdate->info = $request->input('info');
        $feltUpdate->kategori_id = $request->input('kategori');
        $feltUpdate->tillatt = $request->input('tillatt');
        $feltUpdate->pin = $request->input('viktig');

        if($request->hasFile('image')) {
           
            $filename = $request->image->getClientOriginalname();
            $request->image->StoreAs('images', $filename, 'public');
            $feltUpdate->image = $filename;
            //$imageID = Felt::all()->last()->id;
            //Felt::find($imageID)->update(['image' => $filename]);

            } 
        //$activity->causer_id = $request->input('bruker_id');
        //$activity->description = $request->input('objekt');


        // Loggsystem -> Henter data før endring
        $getOldData = $feltUpdate->getOriginal('title');
        $getOldDataRom = $feltUpdate->getOriginal('antall_rom');
        $getOldDataLager = $feltUpdate->getOriginal('antall_lager');
        $getOldDataInfo = $feltUpdate->getOriginal('info');



       // dd($request->all());
        $feltUpdate->save();


         // Loggsystem -> Lagrer data når vi redigerer
        if($feltUpdate->wasChanged('title')) {
            //$getOldData = $feltUpdate->getRawOriginal('title');
            
            Logg::create([

              'old' => $getOldData,
              'new' => $feltUpdate->title,
              'name' => 'Redigert',
              'txt' => 'Hassan Cherry',
              'bruker_id' => $feltUpdate->bruker_id
  
  
          ]);


 
      } 
      
       if ($feltUpdate->wasChanged('antall_rom')) {


        Logg::create([

            'old' => $getOldDataRom,
            'new' => $feltUpdate->antall_rom,
            'name' => 'Redigertrom',
            'txt' => $feltUpdate->title,
            'bruker_id' => $feltUpdate->bruker_id


        ]);


      }

      if ($feltUpdate->wasChanged('antall_lager')) {


        Logg::create([

            'old' => $getOldDataLager,
            'new' => $feltUpdate->antall_lager,
            'name' => 'Redigertlager',
            'txt' => $feltUpdate->title,
            'bruker_id' => $feltUpdate->bruker_id


        ]);


      }

      if ($feltUpdate->wasChanged('info')) {


        Logg::create([

            'old' => $getOldDataInfo,
            'new' => $feltUpdate->info,
            'name' => 'info',
            'txt' => $feltUpdate->title,
            'bruker_id' => $feltUpdate->bruker_id


        ]);


      }

      
        //$activity->save();

        // $lastId =  DB::table('activity_log')->latest('id')->first();
        // $loggUpdate = Activity::find($id);
        // $loggUpdate->causer_id = $request->input('bruker_id');
        // $loggUpdate->save();

       





        if($feltUpdate == true) {

           // dd($getOldData);


            return  redirect('/profile/' . $feltUpdate->bruker_id)->withSuccessMessage('Redigering gjennomført uten feil');
           

        } else {

            return  redirect('/profile/' . $feltUpdate->bruker_id)->with('status', 'Noe har gått galt under redigering');
        
            

        }
        
        



    }

    public function destroy (Request $request, $id) {

        $deleteFelt = Felt::find($id);
        $hentBrukerId = $deleteFelt->bruker_id;
        $hentBrukerTitle = $deleteFelt->title;
        $deleteFelt->delete(); 


        if($deleteFelt == true) {

            $loggFor = Logg::create([

                'new' => $hentBrukerTitle,
                'name' => 'Slettet',
                'txt' => 'Hassan Cherry',
                'bruker_id' => $hentBrukerId,
    
    
            ]);

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


    public function over ($id) {

        $hentBruker = Bruker::with('felt')->find($id);

        return view('bruker.over', compact('hentBruker'));
    }
}
