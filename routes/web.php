<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZonaArqueologicaController;

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


Route::get('/', [ZonaArqueologicaController::class, 'index']);
Route::resource('zonas-arqueologicas', ZonaArqueologicaController::class);


Route::resource('estados', EstadoController::class);
Route::get('/ruta-cargar-mas', [ZonaArqueologicaController::class, 'cargarMasZonas']);
