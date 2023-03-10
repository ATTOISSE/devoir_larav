<?php

use App\Http\Controllers\EtudiantController;
use App\Models\Etudiant;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [EtudiantController::class, 'index'])->name('ajout');
Route::get('/liste', [EtudiantController::class, 'create'])->name('create');
Route::post('/liste', [EtudiantController::class, 'store'])->name('liste');