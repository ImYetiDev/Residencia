<?php
use App\Http\Controllers\ZonasComunController;
use App\Http\Controllers\BloqueController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\PaqueteController;
use App\Http\Controllers\PermisoController;
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

Route::post('/register', [LoginController::class, 'register']);
Route::post('/check', [LoginController::class, 'check']);


Route::resource('Bloque', BloqueController::class);
Route::resource('Evento', EventoController::class);
Route::resource('Paquete', PaqueteController::class);
Route::resource('Permiso', PermisoController::class);
Route::resource('Reserva', ReservaController::class);
Route::resource('Residente', ResidenteController::class);
Route::resource('TiposVivienda', TiposViviendaController::class);
Route::resource('Usuario', UsuarioController::class);
Route::resource('Vivienda', ViviendaController::class);
Route::resource('ZonasComun', ZonasComunController::class);


Route::middleware(['auth'])->group(function () {
    Route::get('/residentes', function () {
        return view('residentes');
    });
    Route::get('/bloques', function () {
        return view('bloques');
    });
    Route::get('/eventos', function () {
        return view('eventos');
    });
    Route::get('/paquetes', function () {
        return view('paquetes');
    });
    Route::get('/permisos', function () {
        return view('permisos');
    });
    Route::get('/reservas', function () {
        return view('reservas');
    });
    Route::get('/tiposvivienda', function () {
        return view('tiposvivienda');
    });
    Route::get('/usuarios', function () {
        return view('usuarios');
    });
    Route::get('/viviendas', function () {
        return view('viviendas');
    });
    Route::get('/zonascomunes', function () {
        return view('zonascomunes');
    });
});