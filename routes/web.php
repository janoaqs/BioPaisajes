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

Route::view('/','inicio')->name('Inicio');
Route::view('trabajos','trabajos')->name('Trabajos');
Route::view('servicios', 'servicios')->name('Servicios');
Route::view('clientes', 'clientes')->name('Clientes');
Route::view('contacto', 'contacto')->name('Contacto');







/*
Route::get('/', function () {
    return view('home');
});
*/

/* Parametro obligatorio
Route::get('saludo/{nombre}', function ($nombre) {
    return "Saludos ".$nombre;
});
*/

/* Parametro predeterminado
Route::get('saludo/{nombre?}', function ($nombre="invitado") {
    return "Saludos ".$nombre;
});
*/

/*Ruta con nombre
Route::get('Contactos', function () {
    return "Sección de contacto";
})->name("Contacto");

Route::get('/', function () {
    echo "<a href='".route('Contacto')."'>Contactos</a><br>";  
});
*/

