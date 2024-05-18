<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftaranController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Data pendaftaran
Route::get('/pendaftaran', [PendaftaranController::class, 'index']);
Route::get('/pendaftaran/form/', [PendaftaranController::class, 'create'])->middleware('auth');
Route::post('/pendaftaran/store/', [PendaftaranController::class, 'store'])->middleware('auth');
Route::get('/pendaftaran/edit/{id}', [PendaftaranController::class, 'edit'])->middleware('auth');
Route::put('/pendaftaran/{id}', [PendaftaranController::class, 'update'])->middleware('auth');
Route::delete('/pendaftaran/{id}', [PendaftaranController::class, 'destroy'])->middleware('auth');
