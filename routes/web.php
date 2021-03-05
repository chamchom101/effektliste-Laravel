<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrukerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DokumentController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\RegisterController;

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

/* Kategori (Blir ikke brukt) */
Route::get('kategori', [KategoriController::class, 'index'])->name('kategori');
Route::post('kategori', [KategoriController::class, 'hent']);

/* Registrering av nye brukere */
Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'store']);
Route::get('register/{id}', [RegisterController::class, 'destroy'])->name('register.destroy');


/* Profil routes  */
Route::get('profile/{id}', [ProfileController::class, 'index'])->name('profile');
Route::post('profile/{id}', [ProfileController::class, 'store']);
Route::get('profile/{id}/edit', [ProfileController::class, 'edit'])->name('bruker.edit');
Route::put('/profile/{id}', [ProfileController::class, 'update']);
Route::get('profile/delete/{id}', [ProfileController::class, 'destroy']);



Route::get('dokument/{id}', [DokumentController::class, 'index'])->name('dokument.preview');
Route::get('dokument/print/{id}', [DokumentController::class, 'print'])->name('dokument.print');
