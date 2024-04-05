<?php
use App\Http\Controllers\ZonasComunController;
use App\Http\Controllers\BloqueController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\PaqueteController;
use App\Http\Controllers\PermisosController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\ResidenteController;
use App\Http\Controllers\TiposViviendaController;
use App\Http\Controllers\ViviendaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['auth'])->group(function () {
    Route::get('/residente', function () {
        return view('residente');
    });
    Route::get('/bloque', function () {
        return view('bloque');
    });
    Route::get('/evento', function () {
        return view('evento');
    });
    Route::get('/paquete', function () {
        return view('paquete');
    });
    Route::get('/permiso', function () {
        return view('permiso');
    });
    Route::get('/reserva', function () {
        return view('reserva');
    });
    Route::get('/tiposvivienda', function () {
        return view('tiposvivienda');
    });
    Route::get('/usuario', function () {
        return view('usuario');
    });
    Route::get('/vivienda', function () {
        return view('vivienda');
    });
    Route::get('/zonascomune', function () {
        return view('zonascomune');
    });
});






Route::get('/', function () {
    if(Auth::check()){
        return redirect('residentes');}
    return view('login');
});

Route::get('/login', function () {
    if(Auth::check()){
        return redirect('residentes');}
    return view('login');
})->name('login');


Route::get('/logout', function () {
    Auth::logout();
    return redirect('residentes');
}); 

Route::get('/register', function(){
    return view('register');
});

Route::post('/register', [LoginController::class, 'register']);
Route::post('/check', [LoginController::class, 'check']);


Route::resource('Bloque', BloqueController::class);
Route::resource('Evento', EventoController::class);
Route::resource('Paquete', PaqueteController::class);
Route::resource('Permisos', PermisosController::class); 
Route::resource('Reserva', ReservaController::class);
Route::resource('Residente', ResidenteController::class);
Route::resource('TiposVivienda', TiposViviendaController::class);
Route::resource('Usuario', UsuarioController::class);
Route::resource('Vivienda', ViviendaController::class);
Route::resource('ZonasComun', ZonasComunController::class);