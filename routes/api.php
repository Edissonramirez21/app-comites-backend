<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\AprendizController;
use App\Http\Controllers\CoordinadorAcademicoController;
use App\Http\Controllers\SolicitudComiteController;
use App\Http\Controllers\HorarioBienestarController;
use App\Http\Controllers\CitacionController;
use App\Http\Controllers\CitacionAIntegranteComiteController;
use App\Http\Controllers\FaltaController;
use App\Http\Controllers\IntegranteComiteController;
use App\Http\Controllers\SolicitudComiteAAprendizController;
use App\Http\Controllers\SolicitudComiteFaltaController;
use App\Http\Controllers\UsuarioLoginController;


//Instructores
Route::get('/instructores', [InstructorController::class, 'index']);
Route::get('/instructores/{id}', [InstructorController::class, 'show']);
Route::post('/instructores', [InstructorController::class, 'store']);
Route::put('/instructores/{id}', [InstructorController::class, 'update']);
Route::delete('/instructores/{id}', [InstructorController::class, 'destroy']);

//Aprendices
Route::get('/aprendices', [AprendizController::class, 'index']);
Route::get('/aprendices/{id}', [AprendizController::class, 'show']);
Route::post('/aprendices', [AprendizController::class, 'store']);
Route::put('/aprendices/{id}', [AprendizController::class, 'update']);
Route::delete('/aprendices/{id}', [AprendizController::class, 'destroy']);

//Coordinadores
Route::get('/coordinadores-academicos', [CoordinadorAcademicoController::class, 'index']);
Route::get('/coordinadores-academicos/{id}', [CoordinadorAcademicoController::class, 'show']);
Route::post('/coordinadores-academicos', [CoordinadorAcademicoController::class, 'store']);
Route::put('/coordinadores-academicos/{id}', [CoordinadorAcademicoController::class, 'update']);
Route::delete('/coordinadores-academicos/{id}', [CoordinadorAcademicoController::class, 'destroy']);

//Solicitudes
Route::get('/solicitudes-comite', [SolicitudComiteController::class, 'index']);
Route::get('/solicitudes-comite/{id}', [SolicitudComiteController::class, 'show']);
Route::post('/solicitudes-comite', [SolicitudComiteController::class, 'store']);
Route::put('/solicitudes-comite/{id}', [SolicitudComiteController::class, 'update']);
Route::delete('/solicitudes-comite/{id}', [SolicitudComiteController::class, 'destroy']);

//Horarios
Route::get('/horarios', [HorarioBienestarController::class, 'index']);
Route::get('/horarios/{id}', [HorarioBienestarController::class, 'show']);
Route::post('/horarios', [HorarioBienestarController::class, 'store']);
Route::put('/horarios/{id}', [HorarioBienestarController::class, 'update']);
Route::delete('/horarios/{id}', [HorarioBienestarController::class, 'destroy']);

//Citaciones
Route::get('/citaciones', [CitacionController::class, 'index']);
Route::get('/citaciones/{id}', [CitacionController::class, 'show']);
Route::post('/citaciones', [CitacionController::class, 'store']);
Route::put('/citaciones/{id}', [CitacionController::class, 'update']);
Route::delete('/citaciones/{id}', [CitacionController::class, 'destroy']);

//Citaciones integrantes del comite
Route::get('/citaciones-integrantes-comite', [CitacionAIntegranteComiteController::class, 'index']);
Route::get('/citaciones-integrantes-comite/{id}', [CitacionAIntegranteComiteController::class, 'show']);
Route::post('/citaciones-integrantes-comite', [CitacionAIntegranteComiteController::class, 'store']);
Route::put('/citaciones-integrantes-comite/{id}', [CitacionAIntegranteComiteController::class, 'update']);
Route::delete('/citaciones-integrantes-comite/{id}', [CitacionAIntegranteComiteController::class, 'destroy']);

//Faltas
Route::get('/faltas', [FaltaController::class, 'index']);
Route::get('/faltas/{id}', [FaltaController::class, 'show']);
Route::post('/faltas', [FaltaController::class, 'store']);
Route::put('/faltas/{id}', [FaltaController::class, 'update']);
Route::delete('/faltas/{id}', [FaltaController::class, 'destroy']);

//Integrantes del comite
Route::get('/integrantes-comite', [IntegranteComiteController::class, 'index']);
Route::get('/integrantes-comite/{id}', [IntegranteComiteController::class, 'show']);
Route::post('/integrantes-comite', [IntegranteComiteController::class, 'store']);
Route::put('/integrantes-comite/{id}', [IntegranteComiteController::class, 'update']);
Route::delete('/integrantes-comite/{id}', [IntegranteComiteController::class, 'destroy']);

//Solicitudes comite a aprendices
Route::get('/solicitudes-comite-aprendices', [SolicitudComiteAAprendizController::class, 'index']);
Route::get('/solicitudes-comite-aprendices/{id}', [SolicitudComiteAAprendizController::class, 'show']);
Route::post('/solicitudes-comite-aprendices', [SolicitudComiteAAprendizController::class, 'store']);
Route::put('/solicitudes-comite-aprendices/{id}', [SolicitudComiteAAprendizController::class, 'update']);
Route::delete('/solicitudes-comite-aprendices/{id}', [SolicitudComiteAAprendizController::class, 'destroy']);

//Solicitudes comite faltas 
Route::get('/solicitudes-comite-faltas', [SolicitudComiteFaltaController::class, 'index']);
Route::get('/solicitudes-comite-faltas/{id}', [SolicitudComiteFaltaController::class, 'show']);
Route::post('/solicitudes-comite-faltas', [SolicitudComiteFaltaController::class, 'store']);
Route::put('/solicitudes-comite-faltas/{id}', [SolicitudComiteFaltaController::class, 'update']);
Route::delete('/solicitudes-comite-faltas/{id}', [SolicitudComiteFaltaController::class, 'destroy']);

//Usuarios login 
Route::get('/usuarios-login', [UsuarioLoginController::class, 'index']);
Route::get('/usuarios-login/{id}', [UsuarioLoginController::class, 'show']);
Route::post('/usuarios-login', [UsuarioLoginController::class, 'store']);
Route::put('/usuarios-login/{id}', [UsuarioLoginController::class, 'update']);
Route::delete('/usuarios-login/{id}', [UsuarioLoginController::class, 'destroy']);

//verificar codigo
Route::post('/login', [AuthController::class, 'login']);
Route::post('/verify-code', [AuthController::class, 'verifyCode']);


//Cors
Route::options('{any}', function(Request $request) {
    return response('', 200)
        ->header('Access-Control-Allow-Origin', '*')
        ->header('Access-Control-Allow-Methods', 'GET, POST, PUT,  PATCH, DELETE, OPTIONS')
        ->header('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type,  Accept, X-Token-Auth, Authorization');
})->where('any', '.*');