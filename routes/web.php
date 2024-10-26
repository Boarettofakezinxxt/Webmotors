<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CarroController;
use App\Http\Controllers\VendedorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FabricanteController;

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

Route::get('/', function () {
    return view('welcome');
});

// Rota para a página inicial que lista os carros
Route::get('/', [CarroController::class, 'index'])->name('carros.index');

Route::resource('carros', CarroController::class)->except(['index']);
Route::resource('fabricantes', FabricanteController::class);
Route::resource('vendedores', VendedorController::class);
