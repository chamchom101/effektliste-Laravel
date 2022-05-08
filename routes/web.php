<?php

use App\Models\Felt;
use App\Models\Fremstilling;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;
use App\Http\Controllers\LoggController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\BrukerController;
use App\Http\Controllers\ObjektController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VersionController;
use App\Http\Controllers\DokumentController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FremstillingController;
use App\Http\Controllers\admin\SettingsController;
use App\Http\Controllers\CreateKategoriController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Route::get('bruker', [BrukerController::class, 'store'])->name('bruker');

Route::get('/', [BrukerController::class, 'index'])->name('welcome');

//Route::get('profile/{id}', [BrukerController::class, 'profile'])->name('profile');

/* Kategori->name (Blir ikke brukt) */
Route::get('kategori', [KategoriController::class, 'index'])->name('kategori');
Route::post('kategori', [KategoriController::class, 'hent']);

Route::get('kategori/create', [CreateKategoriController::class, 'index'])->name('kategori.create');
Route::post('kategori', [CreateKategoriController::class, 'store']);
Route::get('kategori/{id}/edit', [CreateKategoriController::class, 'edit'])->name('kategori.edit');
Route::put('kategori/{id}', [CreateKategoriController::class, 'update']);
Route::get('kategori/{id}', [CreateKategoriController::class, 'destroy'])->name('kategori.destroy');


/* Objekter Vise->lage->Redigere->slette */
Route::get('objekt', [ObjektController::class, 'index'])->name('objekt.view');
Route::post('objekt', [ObjektController::class, 'store']);
Route::get('objekt/{id}/edit', [ObjektController::class, 'edit'])->name('objekt.edit');
Route::put('objekt/{id}', [ObjektController::class, 'update']);
Route::get('objekt/{id}', [ObjektController::class, 'destroy'])->name('objekt.destroy');


/* Registrering/Sletting av nye brukere */
Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'store']);
Route::get('register/{id}/edit', [RegisterController::class, 'edit'])->name('register.edit');
Route::put('register/{id}', [RegisterController::class, 'update']);
Route::get('register/{id}', [RegisterController::class, 'destroy'])->name('register.destroy');

/* Fremstilling Route */ 
Route::get('fremstilling', [FremstillingController::class, 'index'])->name('innut');
Route::get('fremstilling/{id}/edit', [FremstillingController::class, 'edit'])->name('innut.edit');
Route::post('fremstilling/{id}', [FremstillingController::class, 'update']);
Route::post('fremstilling/{id}/tilbake', [FremstillingController::class, 'tilbake']);
Route::get('fremstilling/print/{id}', [FremstillingController::class, 'print'])->name('innut.print');


/* Profil routes  */
Route::get('profile/{id}', [ProfileController::class, 'index'])->name('profile');
Route::post('profile/{id}', [ProfileController::class, 'store']);
Route::get('profile/{id}/edit', [ProfileController::class, 'edit'])->name('bruker.edit');
Route::get('profile/dokument/over/{id}', [ProfileController::class, 'over'])->name('bruker.over');
Route::put('/profile/{id}', [ProfileController::class, 'update']);
Route::get('profile/delete/{id}', [ProfileController::class, 'destroy']);


Route::get('dokument/view', [DokumentController::class, 'view'])->name('dokument.view');
Route::get('dokument/{id}', [DokumentController::class, 'index'])->name('dokument.preview');
Route::get('dokument/print/{id}', [DokumentController::class, 'print'])->name('dokument.print');
Route::post('dokument/print/bruker/{id}', [DokumentController::class, 'printValue'])->name('dokument.printvalue');

/* Version View */
Route::get('version', [VersionController::class, 'view'])->name('version.view');

/*Admin Routes */
Route::get('admin', [AdminController::class, 'view'])->name('admin');
Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard')->middleware('auth');
Route::post('admin', [AdminController::class, 'login'])->name('login');
Route::get('admin/settings', [SettingsController::class, 'index'])->name('admin.settings')->middleware('auth');


/* Video Route */
Route::get('video', [VideoController::class, 'index'])->name('video.view');

Route::get('logg/bruker/{id}', [LoggController::class, 'index'])->name('logg.view');




Route::get('/log/{id}', [LogController::class, 'index'])->name('log.view');



Route::get('test', [TestController::class, 'index'])->name('test');


Route::get('dev/{id}', function() {

    //users = Felt::with('objekt.kategori')->where('id', $id)->get();



});
