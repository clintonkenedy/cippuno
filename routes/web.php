<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColegiadoController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\ConceptoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RolController;

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
    //RUTAS PARA USUARIOS
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('roles', RolController::class);

    //RUTAS PARA TRAMITES
    Route::resource('colegiado',ColegiadoController::class);
    Route::resource('caja', PagoController::class);
    Route::get('/concepto', [ConceptoController::class,'index'])->name('conceptos.index');
    Route::get('/concepto/edit/{id}', [ConceptoController::class,'edit'])->name('conceptos.edit');
    Route::put('/concepto/update/{id}', [ConceptoController::class,'update'])->name('conceptos.update');
    Route::post('/nuevoconcepto', [ConceptoController::class,'store'])->name('conceptos.store');
    Route::delete('/concepto/destroy/{id}', [ConceptoController::class,'destroy'])->name('conceptos.destroy');
    Route::get('/buscar/{dni}', [ColegiadoController::class,'buscardni'])->name('colegiado.buscar');

    Route::get('/tramites', function () {
        return view('tramites.index'); //REDERIZA VISTA
    })->name('tramites.index');

    Route::get('/tramites/prueba', function () {
        return view('tramites.prueba'); //REDERIZA VISTA
    })->name('tramites.prueba');


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
