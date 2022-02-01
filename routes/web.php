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
use App\Http\Controllers\InsetosController;
use App\Http\Controllers\CulturaController;





Route::get('/welcome', [InsetosController::class, 'index']);
Route::get('/', [InsetosController::class, 'index']);

Route::get('/dashboard', [InsetosController::class, 'dashboard'])->middleware('auth')->name('dashboard');
Route::get('/insetos/dashboard', [InsetosController::class, 'dashboard'])->middleware('auth')->name('dashboard');

Route::get('/insetos/cadastro_insetos', [InsetosController::class, 'create'])->name('cadastro_insetos');
Route::post('/insetos/cadastro_insetos', [InsetosController::class, 'store'])->middleware('auth');
Route::get('/insetos/cadastro_cultura', [CulturaController::class, 'create'])->name('cadastro_cultura');
Route::post('/insetos/cadastro_cultura', [CulturaController::class, 'store'])->middleware('auth');

Route::get('/insetos/editinsetos/{id}', [InsetosController::class, 'edit'])->middleware('auth');
Route::post('/insetos/update/{id}', [InsetosController::class, 'update'])->middleware('auth');
Route::delete('/insetos/{id}', [InsetosController::class, 'destroy'])->middleware('auth');

Route::get('/insetos/editcultura/{id}', [CulturaController::class, 'edit'])->middleware('auth');
Route::post('/insetos/cultura/update/{id}', [CulturaController::class, 'update'])->middleware('auth');
Route::delete('/insetos/cultura/{id}', [CulturaController::class, 'destroy'])->middleware('auth');


