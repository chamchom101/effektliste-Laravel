<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrukerController;
use App\Http\Controllers\ProfileController;
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

Route::get('kategori', [KategoriController::class, 'index'])->name('kategori');
Route::post('kategori', [KategoriController::class, 'hent']);

Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'store']);



Route::get('profile/{id}', [ProfileController::class, 'index'])->name('profile');
Route::post('profile/{id}', [ProfileController::class, 'store']);
Route::get('profile/{id}/edit', [ProfileController::class, 'edit'])->name('bruker.edit');
Route::put('/profile/{id}', [ProfileController::class, 'update']);
