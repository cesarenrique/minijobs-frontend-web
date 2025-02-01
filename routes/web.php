<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\EncargadoController;
use App\Http\Controllers\ReclutadorController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PanelControlController;

Route::get('/',[HomeController::class,'home'])->name("home");
Route::get('/home/administrador',[HomeController::class,'homeAdministrador'])->name("home.administrador");
Route::get('/home/encargado',[HomeController::class,'homeEncargado'])->name("home.encargado");
Route::get('/home/reclutador',[HomeController::class,'homeReclutador'])->name("home.reclutador");
Route::get('/home/sinrol',[HomeController::class,'homeSinRol'])->name("home.sinrol");

Route::get('/usuario/{username}/rolchoice',[UsuarioController::class,'rolchoice']);
Route::get('/usuario/{id}/updateUltimoRol',[UsuarioController::class,'rolchoice3']);
Route::get('/usuario/{id}/rolchoice2',[UsuarioController::class,'rolchoice2']);
Route::get('/usuario/rolchoice/alumno/{id}',[UsuarioController::class,'rolchoiceAlumno']);
Route::get('/usuario/rolchoice/profesor/{id}',[UsuarioController::class,'rolchoiceProfesor']);
Route::get('/usuario/rolchoice/reclutador/{id}',[UsuarioController::class,'rolchoiceReclutador']);
Route::get('/usuario/rolchoice/encargado/{id}',[UsuarioController::class,'rolchoiceEncargado']);
Route::get('/usuario/rolchoice/administrador/{id}',[UsuarioController::class,'rolchoiceAdministrador']);

Route::get('/encargado/{idEncargado}/empresa/{idEmpresa}/crearCargo',[EncargadoController::class,'crearCargo']);
Route::get('/encargado/{idEncargado}/crearEmpresa',[EncargadoController::class,'crearEmpresa']);
Route::get('/encargado/{idEncargado}/empresa',[EncargadoController::class,'empresas']);
Route::get('/encargado/{idEncargado}/empresa/{idEmpresa}',[EncargadoController::class,'empresaEncargado']);
Route::get('/encargado/{idEncargado}/crear',[EncargadoController::class,'crear']);
Route::get('/encargado/{idEncargado}/empresa/{idEmpresa}/cargos',[EncargadoController::class,'encargadoEmpresaCargosEscoger']);
Route::get('/encargado/{idEncargado}/empresa/{idEmpresa}/cargo/{idCargo}',[EncargadoController::class,'encargadoEmpresaCargoEscoger']);

Route::get('/reclutador/{idReclutador}/encargado/{idEncargado}/empresa/{idEmpresa}',[ReclutadorController::class,'empresaReclutadorEscoger']);
Route::get('/reclutador/{idReclutador}/encargado/{idEncargado}/empresa/{idEmpresa}/cargo/{idCargo}',[ReclutadorController::class,'reclutadorEmpresaCargoEscoger']);
Route::get('/reclutador/{idReclutador}/encargado/{idEncargado}/empresa/{idEmpresa}/cargo/{idCargo}/crearAnuncio',[ReclutadorController::class,'crearAnuncio']);
Route::get('/reclutador/{idEncargado}/empresa',[ReclutadorController::class,'empresas']);

Route::get('/anuncio/{idAnuncio}',[ReclutadorController::class,'anuncio']);

Route::get('/empresa/{idEmpresa}/anuncio',[EncargadoController::class,'anunciosEmpresa']);
Route::get('/empresa/{idEmpresa}/cargo',[EncargadoController::class,'cargosEmpresa']);
Route::get('/empresa/{idEmpresa}',[EncargadoController::class,'empresa']);

Route::get('/cargo/{idCargo}',[EncargadoController::class,'cargo']);

Route::get('/user/anonimo',[UsuarioController::class,'anonimo'])->name('usuario.anonimo');
Route::get('/user/{id}',[UsuarioController::class,'usuario']);

Route::get('/cargo',[EncargadoController::class,'cargos'])->name('cargos');
Route::get('/anuncio',[AlumnoController::class,'anuncios'])->name('anuncios');
Route::get('/usuarios',[UsuarioController::class,'usuarios'])->name('usuarios');
Route::get('/empresas',[AdministradorController::class,'empresas'])->name('empresas');
Route::get('/encargados',[AdministradorController::class,'encargados'])->name('encargados');
Route::get('/reclutadores',[AdministradorController::class,'reclutadores'])->name('reclutadores');
Route::get('/profesores',[AdministradorController::class,'profesores'])->name('profesores');
Route::get('/alumnos',[AdministradorController::class,'alumnos'])->name('alumnos');
Route::get('/busquedas',[AdministradorController::class,'busquedas'])->name('busquedas');

Route::get('/panelcontrol/reclutador',[PanelControlController::class,'panelcontrolReclutador'])->name('panelcontrol.reclutador');
Route::get('/panelcontrol/encargado',[PanelControlController::class,'panelcontrolEncargado'])->name('panelcontrol.encargado');
Route::get('/panelcontrol/administrador',[PanelControlController::class,'panelcontrolAdministrador'])->name('panelcontrol.administrador');
Route::get('/panelcontrol/anonimo',[PanelControlController::class,'panelcontrolAnonimo'])->name('panelcontrol.anonimo');
Route::get('/panelcontrol/sinrol',[PanelControlController::class,'panelcontrolSinRol'])->name('panelcontrol.sinrol');

Route::get('/administrador/sinroles',[AdministradorController::class,'sinroles'])->name('administrador.sinroles');
Route::get('/administrador/administradores',[AdministradorController::class,'administradores'])->name('administrador.administradores');
Route::get('/administrador/crear',[AdministradorController::class,'crear'])->name('administrador.crear');

Route::get('/registro',[RegistroController::class,'registro'])->name('registro');
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
