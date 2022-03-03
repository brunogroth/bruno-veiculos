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
    return redirect()->route('veiculo.index');
});

Route::get('/veiculo',  [App\Http\Controllers\VeiculoController::class, 'index'])->name('veiculo.index');

Route::get('/veiculo/create', [App\Http\Controllers\VeiculoController::class, 'create'])->name('veiculo.create');

Route::post('/veiculo/store', [App\Http\Controllers\VeiculoController::class, 'store'])->name('veiculo.store');

Route::get('/veiculo/{id}/edit',  [App\Http\Controllers\VeiculoController::class, 'edit'])->name('veiculo.edit');

Route::post('/veiculo/{id}/update', [App\Http\Controllers\VeiculoController::class, 'update'])->name('veiculo.update');

Route::delete('veiculo/{id}/destroy', [App\Http\Controllers\VeiculoController::class, 'destroy'])->name('veiculo.destroy');