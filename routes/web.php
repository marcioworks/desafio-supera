<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\ManutencaoController::class, 'index'])->name('home');
Route::get('/carro', [App\Http\Controllers\CarroController::class, 'index'])->name('carro');
Route::post('/carro', [App\Http\Controllers\CarroController::class, 'store'])->name('carro');
Route::get('/marca', [App\Http\Controllers\MarcaController::class, 'index'])->name('marca');
Route::post('/marca', [App\Http\Controllers\MarcaController::class, 'store'])->name('marca');
Route::get('/manutencao', [App\Http\Controllers\ManutencaoController::class, 'agendar'])->name('manutencao');
Route::post('/manutencao', [App\Http\Controllers\ManutencaoController::class, 'store'])->name('manutencao');
Route::get('/modelo', [App\Http\Controllers\ModeloController::class, 'index'])->name('modelo');
Route::post('/modelo', [App\Http\Controllers\ModeloController::class, 'store'])->name('modelo');
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
