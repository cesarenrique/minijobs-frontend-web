<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministradorController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/administrador/principal',[AdministradorController::class,'principal']);
Route::get('/administrador/administradores',[AdministradorController::class,'administradores'])->name('administrador.administradores');
Route::get('/administrador/encargados',[AdministradorController::class,'encargados'])->name('administrador.encargados');
Route::get('/administrador/reclutadores',[AdministradorController::class,'reclutadores'])->name('administrador.reclutadores');
Route::get('/administrador/profesores',[AdministradorController::class,'profesores'])->name('administrador.profesores');
Route::get('/administrador/alumnos',[AdministradorController::class,'alumnos'])->name('administrador.alumnos');
Route::get('/administrador/sinroles',[AdministradorController::class,'sinroles'])->name('administrador.sinroles');
