<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\AprendizController;
use App\Http\Controllers\InstructorController;
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
use \resources\views\login;

Route::resource('instructores', InstructorController::class,);
Route::resource('aprendices', AprendizController::class);
Route::resource('coordinadores', CoordinadorAcademicoController::class);
Route::resource('solicitudes-comite', SolicitudComiteController::class);
Route::resource('horarios', HorarioBienestarController::class);
Route::resource('citaciones', CitacionController::class);
Route::resource('citaciones-integrantes-comite', CitacionAIntegranteComiteController::class);
Route::resource('faltas', FaltaController::class);
Route::resource('integrantes-comite', IntegranteComiteController::class);
Route::resource('solicitudes-comite-aprendices', SolicitudComiteAAprendizController::class);
Route::resource('solicitudes-comite-faltas', SolicitudComiteFaltaController::class);
Route::resource('usuarios-login', UsuarioLoginController::class);


//Cors
Route::options('{any}', function(Request $request) {
    return response('', 200)
        ->header('Access-Control-Allow-Origin', '*')
        ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, PATCH, DELETE, OPTIONS')
        ->header('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type,  Accept, X-Token-Auth, Authorization');
})->where('any', '.*');


Route::get('/', function () {
    return view('welcome');
});



/* Route::get('/inicial', function () {
    return view('inicial');
})->name('inicial'); */

Route::post('/login', [AuthController::class, 'login']);

