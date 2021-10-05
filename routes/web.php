<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\DireccionController;
use App\Http\Controllers\BancariosController;
use App\Http\Controllers\ChecadorsController;
use App\Http\Controllers\HorariosController;
use App\Http\Controllers\NominasController;

Route::get('/', function () {
    return view('home');
})->middleware('auth');

 //rutas de el registro de usuarios y ingreso de usuarios de la carpeta auth
Route::get('/register',[RegisterController::class,'create'])
    ->middleware('guest')
    ->name('register.index');
Route::post('/register',[RegisterController::class,'store'])
    ->name('register.store');
Route::get('/login',[SessionsController::class,'create'])
    ->middleware('guest')
    ->name('login.index');
Route::post('/login',[SessionsController::class,'store'])
    ->name('login.store');
Route::get('/logout',[SessionsController::class,'destroy'])
    ->middleware('auth')
    ->name('login.destroy');
    Route::get('/asistencias',[ChecadorsController::class,'index'])
    ->name('asistencias.index');

 //rutas de el CRUD de empleados de la carpeta empleados( datos personales de los empleados)
Route::get('/empleados',[EmpleadoController::class,'index'])
    ->name('empleados.index');
Route::post('/empleados/create',[EmpleadoController::class,'store'])
    ->name('empleados.store');
Route::resource('empleados',EmpleadoController::class);

 //rutas de el CRUD de empleados de la carpeta de direcciones( direcciones de los empleados )
Route::get('/direccions',[DireccionController::class,'index'])
    ->name('direccions.index');
Route::post('/direccions/create',[DireccionController::class,'store'])
    ->name('direccions.store');
Route::resource('direccions',DireccionController::class);

 //rutas de el CRUD de empleados de la carpeta bancarios (datos bancarios dde los empleados)
 Route::get('/bancarios',[BancariosController::class,'index'])
    ->name('bancarios.index');
Route::post('/bancarios',[BancariosController::class,'store'])
    ->name('bancarios.store');
Route::resource('bancarios',BancariosController::class);

 //rutas de el CRUD de Horarios de los empleados (hoarios de los empleados)
Route::get('/horario',[HorariosController::class,'index'])
    ->name('horario.index');
Route::post('/horario',[HorariosController::class,'store'])
    ->name('horario.store');
Route::resource('horario',HorariosController::class);

 //rutas de el CRUD de Horarios de los empleados (hoarios de los empleados)
 Route::get('/nominas',[NominasController::class,'index'])
 ->name('nominas.index');
Route::post('/nominas',[NominasController::class,'store'])
 ->name('nominas.store');
Route::resource('nominas',NominasController::class);