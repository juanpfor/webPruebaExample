<?php

use App\Http\Controllers\ColegioController;
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
//ver formulario
Route::get('/registerColegios',[ColegioController::class , 'create'])->name('vitacolegioregister');
//envio de formulario
Route::post('/almacenarcolegio',[ColegioController::class , 'store'])->name('almacenarcolegio');
//listar colegios
Route::get('/listarColegios',[ColegioController::class , 'index'])->name('listcolegios');

Route::get('/detallescolegio/{id}',[ColegioController::class , 'show'])->name('detallescolegio');


