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
    return redirect('/login');
});

//Veiculo

Route::get('/veiculo',  [App\Http\Controllers\VeiculoController::class, 'index'])->middleware(['auth'])->name('veiculo.index');

Route::get('/veiculo/create', [App\Http\Controllers\VeiculoController::class, 'create'])->middleware(['auth'])->name('veiculo.create');

Route::post('/veiculo/store', [App\Http\Controllers\VeiculoController::class, 'store'])->middleware(['auth'])->name('veiculo.store');

Route::get('/veiculo/{id}/edit',  [App\Http\Controllers\VeiculoController::class, 'edit'])->middleware(['auth'])->name('veiculo.edit');

Route::post('/veiculo/{id}/update', [App\Http\Controllers\VeiculoController::class, 'update'])->middleware(['auth'])->name('veiculo.update');

Route::delete('veiculo/{id}/destroy', [App\Http\Controllers\VeiculoController::class, 'destroy'])->middleware(['auth'])->name('veiculo.destroy');

//Marcas

Route::get('/marca', [App\Http\Controllers\MarcaController::class, 'index'])->middleware('auth')->name('marca.index');

Route::get('/marca/create', [App\Http\Controllers\MarcaController::class, 'create'])->middleware('auth')->name('marca.create');

Route::post('/marca/store', [App\Http\Controllers\MarcaController::class, 'store'])->middleware(['auth'])->name('marca.store');

Route::get('/marca/{id}/edit',  [App\Http\Controllers\MarcaController::class, 'edit'])->middleware(['auth'])->name('marca.edit');

Route::post('/marca/{id}/update', [App\Http\Controllers\MarcaController::class, 'update'])->middleware(['auth'])->name('marca.update');

Route::delete('marca/{id}/destroy', [App\Http\Controllers\MarcaController::class, 'destroy'])->middleware(['auth'])->name('marca.destroy');

//Modelo

Route::get('/modelo', [App\Http\Controllers\ModeloController::class, 'index'])->middleware('auth')->name('modelo.index');

Route::get('/modelo/create', [App\Http\Controllers\ModeloController::class, 'create'])->middleware('auth')->name('modelo.create');

Route::post('/modelo/store', [App\Http\Controllers\ModeloController::class, 'store'])->middleware(['auth'])->name('modelo.store');

//

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';