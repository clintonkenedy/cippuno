<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColegiadoController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\ConceptoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\MatriculaController;
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

//RUTAS PARA CERTIFICADOS
//usuario
Route::get('/cursosycertificados', [MatriculaController::class, 'index'])->name('cursosycertificados');
Route::get('/cursosycertificados/{id}', [MatriculaController::class, 'indexfilter'])->name('cursosycertificadosfiltro');
Route::get('/cursosycertificados/matricular/{id}', [MatriculaController::class, 'searchcourse'])->name('vistamatricular');
Route::post('/cursosycertificados/matricular/{id}', [MatriculaController::class, 'create'])->name('matricularparticipante');
Route::post('/cursosycertificados/matricular/nuevamatricula/{id}', [MatriculaController::class, 'createnew'])->name('matricularnuevo');
Route::post('/cursosycertificados/miscertificados', [MatriculaController::class, 'miscertificados'])->name('buscarcertificador');
Route::get('/certificado/pdf/{idcurso}/{idcolegiado}', [MatriculaController::class, 'certificadoPDF'])->name('certificadopdf');

Auth::routes();

Route::group(['middleware'=>['auth']],function (){
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
    //Admin
    Route::get('/certificados', [CursoController::class, 'index'])->name('certificados.index');
    Route::get('/certificados/crear', function () {
        return view('certificados.administrador.crearcurso');
    })->name('vistacrear');
    Route::post('/certificados/crear', [CursoController::class, 'create'])->name('crearcurso');
    Route::get('/certificados/editar/{id}', [CursoController::class, 'edit'])->name('editarcurso');
    Route::put('/certificados/editar/{id}', [CursoController::class, 'update'])->name('actualizarcurso');
    Route::delete('/certificados/{id}', [CursoController::class, 'destroy'])->name('eliminarcurso');
    Route::get('/certificados/acceder/{id}', [MatriculaController::class, 'show'])->name('accedercurso');
    Route::get('/certificados/acceder/matriculas/{id}', [MatriculaController::class, 'showcompetitors'])->name('mostrarparticipantes');
    Route::get('/certificados/acceder/ponentes/{id}', [MatriculaController::class, 'showspeakers'])->name('mostrarponentes');
    Route::put('/certificados/acceder/matriculas/{id}', [MatriculaController::class, 'assignedspeaker'])->name('asignarponente');
    Route::delete('/certificados/acceder/matriculas/{id}', [MatriculaController::class, 'destroy'])->name('eliminarparticipante');

    //RUTAS PARA VENTAS
    // Route::get('/ventas', function () {
    //     return view('ventas.index'); //REDERIZA VISTA
    // })->name('ventas.index');

    Route::get('/dashboard', function () {
        return view('dash.index'); //REDERIZA VISTA
    })->name('dash.index');;
});
