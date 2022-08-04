<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColegiadoController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\TramiteController; 
use App\Http\Controllers\TipoTramiteController; 
use App\Http\Controllers\OficinaController;
use App\Http\Controllers\SeguimientoController; 

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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::group(['middleware'=>['auth']],function (){
    //RUTAS PARA TRAMITES
    Route::resource('colegiado',ColegiadoController::class);
    Route::resource('caja', PagoController::class);
    Route::get('/buscar/{dni}', [ColegiadoController::class,'buscardni'])->name('colegiado.buscar');
    //Route::get(Tramite)
    Route::resource('tramites',TramiteController::class);
    Route::resource('tipo-tramite',TipoTramiteController::class);
    Route::get('/tramites.crear', function () {
        return view('tramites.creartrami'); //REDERIZA VISTA
    })->name('tramites.creartrami');
    //
    Route::get('/tramites.mostrar', [TramiteController::class,'show'])->name('tramites.mostrar');
    Route::get('/tramites.requisitos', function () {
        return view('tramites.requisitos'); //REQUISITOS DE TRAMITES.
    })->name('tramites.requisitos');
    Route::get('/tramites.oficinas', function () {
        return view('tramites.oficinas'); //REQUISITOS DE TRAMITES.
    })->name('tramites.oficinas');
    Route::get('/tramites.oficinas', [TramiteController::class,'ofic'])->name('tramites.oficinas');

    Route::get('/tramites.edit', function () {
        return view('tramites.edit'); //REQUISITOS DE TRAMITES.
    })->name('tramites.edit');
    Route::get('/tramites.edit', [TramiteController::class,'edi'])->name('tramites.edit');

    Route::post('/tramites.crearcole', [TramiteController::class,'crecole'])->name('tramites.crearcole');
    Route::post('/tramites.crearperso', [TramiteController::class,'creperso'])->name('tramites.crearperso');
    Route::get('/tramites.crearperso', function () {
        return view('tramites.crearperso'); //REDERIZA VISTA
    })->name('tramites.crearperso');
    Route::get('/tramites.crearcole', function () {
        return view('tramites.crearcole'); //REDERIZA VISTA
    })->name('tramites.crearcole');
    //RUTA DE OFICINA
    Route::resource('oficinas',OficinaController::class);
    //RUTA DE SEGUIMIENTO
    Route::resource('seguimientos',SeguimientoController::class);



    //RUTAS PARA CERTIFICADOS
    Route::get('/certificados', function () {
        return view('certificados.index'); //REDERIZA VISTA
    })->name('certificados.index');

    //RUTAS PARA VENTAS
    // Route::get('/ventas', function () {
    //     return view('ventas.index'); //REDERIZA VISTA
    // })->name('ventas.index');

    Route::get('/dashboard', function () {
        return view('dash.index'); //REDERIZA VISTA
    })->name('dash.index');;
});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
