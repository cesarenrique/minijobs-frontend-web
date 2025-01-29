<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/usuario/{username}/rolchoice',[UsuarioController::class,'rolchoice']);
Route::get('/usuario/rolchoice/alumno/{id}',[UsuarioController::class,'rolchoiceAlumno']);
Route::get('/usuario/rolchoice/profesor/{id}',[UsuarioController::class,'rolchoiceProfesor']);
Route::get('/usuario/rolchoice/reclutador/{id}',[UsuarioController::class,'rolchoiceReclutador']);
Route::get('/usuario/rolchoice/encargado/{id}',[UsuarioController::class,'rolchoiceEncargado']);

Route::get('/administrador/principal',[AdministradorController::class,'principal'])->name('administrador.principal');
Route::get('/administrador/administradores',[AdministradorController::class,'administradores'])->name('administrador.administradores');
Route::get('/administrador/encargados',[AdministradorController::class,'encargados'])->name('administrador.encargados');
Route::get('/administrador/reclutadores',[AdministradorController::class,'reclutadores'])->name('administrador.reclutadores');
Route::get('/administrador/profesores',[AdministradorController::class,'profesores'])->name('administrador.profesores');
Route::get('/administrador/alumnos',[AdministradorController::class,'alumnos'])->name('administrador.alumnos');
Route::get('/administrador/sinroles',[AdministradorController::class,'sinroles'])->name('administrador.sinroles');

Route::get('/registro',[RegistroController::class,'registro'])->name('registro');
