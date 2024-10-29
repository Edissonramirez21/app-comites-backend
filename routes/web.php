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
use App\Http\Controllers\EmailController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\RegistroController;
use Illuminate\Support\Facades\Auth;



// Remove incorrect use statement
// use \resources\views\login;

// Resource Routes
Route::resource('instructores', InstructorController::class);
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

// CORS Options Route (if necessary)
Route::options('{any}', function (Request $request) {
    return response('', 200)
        ->header('Access-Control-Allow-Origin', '*')
        ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, PATCH, DELETE, OPTIONS')
        ->header('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, X-Token-Auth, Authorization');
})->where('any', '.*');

// Static Pages
Route::view('/', 'inicial')->name('inicial');
Route::view('/welcome', 'welcome')->name('welcome');
Route::view('/lista-espera', 'lista_espera')->name('lista.espera');
Route::view('/registro', 'register')->name('registro');

// Authentication Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login'); // Renamed to 'login'
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Registration Routes
Route::get('/register', [RegistroController::class, 'showForm'])->name('registro.form');
Route::post('/register', [RegistroController::class, 'submitForm'])->name('registro.post');

// Home Route (after login)
Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');

// Role-Based Routes
Route::middleware(['auth', 'rol', 'check.codigo'])->group(function () {
    Route::get('/dashboard', [RolController::class, 'dashboard'])->name('roles.dashboard');
    Route::get('/opcion1', [RolController::class, 'opcion1'])->name('roles.opcion1');
});

// Session Expired Route
Route::view('/sesion-expirada', 'sesion_expirada')->name('sesion.expirada');

// Email Code Route
Route::post('/enviar-codigo', [EmailController::class, 'enviarCodigo']);

// Remove duplicate or conflicting routes
// Ensure that the routes for '/login' and '/logout' are only defined once.




