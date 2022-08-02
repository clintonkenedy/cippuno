<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Matricula;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();
        return view('certificados.administrador.index', compact('cursos'));
    }

    public function create(Request $request)
    {
        $fecha_f = Carbon::parse($request->fecha_fin);
        $fecha_i = Carbon::parse($request->fecha_inicio);

        $curso = new Curso;
        $curso->nombre = $request->nombre;
        $curso->precio = $request->precio;
        $curso->enlace = $request->enlace;
        $curso->duracion = strval($fecha_f->diffInDays($fecha_i));
        $curso->fecha_inicio = $request->fecha_inicio;
        $curso->fecha_fin = $request->fecha_fin;
        $curso->temario = $request->temario;
        $curso->ponentes = $request->ponentes;
        $curso->modelo_certificado = $request->modelo_certificado;
        $curso->estado = $request->estado;

        $curso->save();

        return redirect('/certificados')->with('mensaje', 'Nuevo curso creado exitosamente');
    }

    public function store(Request $request)
    {
        //
    }

    public function show()
    {
        //
    }

    public function edit($id)
    {
        $curso = Curso::find($id);
        return view('certificados.administrador.editarcurso', compact('curso'));
    }

    public function update($id, Request $request)
    {
        $fecha_f = Carbon::parse($request->fecha_fin);
        $fecha_i = Carbon::parse($request->fecha_inicio);

        $curso = Curso::find($id);
        $curso->nombre = $request->nombre;
        $curso->precio = $request->precio;
        $curso->enlace = $request->enlace;
        $curso->duracion = strval($fecha_f->diffInDays($fecha_i));
        $curso->fecha_inicio = $request->fecha_inicio;
        $curso->fecha_fin = $request->fecha_fin;
        $curso->temario = $request->temario;
        $curso->ponentes = $request->ponentes;
        $curso->modelo_certificado = $request->modelo_certificado;
        $curso->estado = $request->estado;
        $curso->save();

        return redirect('/certificados')->with('mensaje2', 'Actualización exitosa, curso actualizado.');
    }

    public function destroy($id)
    {
        Curso::destroy($id);
        return redirect('/certificados')->with('mensaje3', 'Eliminación exitosa, curso eliminado.');
    }
}
