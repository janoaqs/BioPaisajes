<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\TrabajosController;

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

Route::get('/',InicioController::class)->name('Inicio');
Route::get('trabajos',TrabajosController::class)->name('Trabajos');
Route::get('servicios',ServiciosController::class)->name('Servicios');
Route::get('clientes',ClientesController::class)->name('Clientes');
Route::get('contacto',ContactoController::class)->name('Contacto');

