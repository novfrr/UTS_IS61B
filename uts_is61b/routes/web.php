<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiswaController;
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
//     return view('home');
// });

Auth::routes();

Route::get('/siswa/', [SiswaController::class, 'index'])->middleware('auth');
Route::get('/siswa/form/', [SiswaController::class, 'create'])->middleware('auth');
Route::post('/siswa/store/', [SiswaController::class, 'store'])->middleware('auth');
Route::get('/siswa/edit/{id}', [SiswaController::class, 'edit'])->middleware('auth');
Route::put('/siswa/{id}', [SiswaController::class, 'update'])->middleware('auth');
Route::delete('/siswa/{id}', [SiswaController::class, 'destroy'])->middleware('auth');
