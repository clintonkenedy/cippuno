<?php

namespace App\Http\Controllers;

use App\Models\Matricula;
use App\Models\Curso;
use App\Models\Colegiado;
use App\Models\Persona;
use Illuminate\Http\Request;
use PDF;
class MatriculaController extends Controller
{

    public function index()
    {
        $cursos = Curso::all();
        return view('certificados.usuarios.index', compact('cursos'));
    }

    public function indexfilter($id)
    {
        $cursos = Curso::where('estado', $id)->get();
        return view('certificados.usuarios.index', compact('cursos'));
    }

    public function searchcourse($id)
    {
        $curso = Curso::find($id);
        return view('certificados.usuarios.matricular', compact('curso'));
    }

    public function miscertificados(Request $request)
    {
        // Solo esta para colegiado
        $colegiado = Colegiado::where('dni',$request->dni)->get();
        if(empty($colegiado)){
            $colegiado = Persona::where('dni',$request->dni)->get();
        }
        $cursosmatriculados = Matricula::where('colegiado_id', $colegiado[0]->id)->get();
        $cursos = Curso::where('id', $cursosmatriculados[0]->curso_id)->get();
        //--------------------------------------
        //$cursosmatriculados = Matricula::all();
        return view('certificados.usuarios.miscertificados', compact('colegiado', 'cursos'));
    }

    public function certificadoPDF($idcurso, $idcolegiado){
        //Recuperar todos los productos de la db
        $colegiado = Colegiado::find($idcolegiado);
        if(empty($colegiado)){
            $colegiado = Persona::find($idcolegiado);
        }
        $curso = Curso::find($idcurso);
        //--------------
        $pdf = PDF::loadView('certificados.usuarios.certificadopdf', compact('colegiado', 'curso'))->setPaper('a4', 'landscape');
        return $pdf->download($curso->nombre.'-'.$colegiado->nombres.'.pdf');
    }

    public function create($id, Request $request)
    {
        $participante = "0";
        $curso = Curso::find($id);

        if ($participante == "0") {
            $colegiado = Colegiado::where('dni', $request->dni)->first();

            if (!empty($colegiado)) {
                $matriculadoc = Matricula::where('colegiado_id', $colegiado->id)->first();

                if (empty($matriculadoc)) {

                    $participante = "1";
                    $matricula = new Matricula;
                    $matricula->colegiado_id = $colegiado->id;
                    $matricula->curso_id = $curso->id;
                    $matricula->pago_id = 1;
                    $matricula->rol = "0";

                    $matricula->save();
                    return redirect('/cursosycertificados')->with('mensaje', 'Inscripción exitosa, colegiado registrado intente ingresar de nuevo al curso.');
                } else {
                    return redirect($curso->enlace);
                }
            }
        }

        if ($participante == "0") {
            $persona = Persona::where('dni', $request->dni)->first();

            if (!empty($persona)) {
                $matriculadop = Matricula::where('persona_id', $persona->id)->first();

                if (empty($matriculadop)) {

                    $participante = "1";
                    $matricula = new Matricula;
                    $matricula->curso_id = $curso->id;
                    $matricula->pago_id = 1;
                    $matricula->persona_id = $persona->id;
                    $matricula->rol = "0";

                    $matricula->save();
                    return redirect('/cursosycertificados')->with('mensaje', 'Inscripción exitosa, persona registrada intente ingresar de nuevo al curso.');
                } else {
                    return redirect($curso->enlace);
                }
            }
        }

        if ($participante == "0") {
            return view('certificados.usuarios.nuevamatricula', compact('curso'));
        }
    }

    public function createnew($id, Request $request)
    {
        $curso = Curso::find($id);

        $persona = new Persona;
        $persona->dni = $request->dni;
        $persona->nombres = $request->nombres;
        $persona->a_paterno = $request->a_paterno;
        $persona->a_materno = $request->a_materno;
        $persona->email = $request->email;
        $persona->direccion = $request->direccion;

        $persona->save();

        $personab = Persona::where('dni', $request->dni)->first();

        if (!empty($personab)) {
            $matricula = new Matricula;
            $matricula->curso_id = $curso->id;
            $matricula->pago_id = 1;
            $matricula->persona_id = $personab->id;
            $matricula->rol = "0";

            $matricula->save();
            return redirect('/cursosycertificados')->with('mensaje', 'Inscripción exitosa, persona registrada intente ingresar de nuevo al curso.');
        }
    }


    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $curso = Curso::find($id);

        return view('certificados.administrador.accedercurso', compact('curso'));
    }

    public function showcompetitors($id)
    {
        $curso = Curso::find($id);

        $colegiados = Matricula::join('colegiados', 'matriculas.colegiado_id', '=', 'colegiados.id')
            ->select('matriculas.id AS id_matricula', 'colegiados.id', 'colegiados.dni', 'colegiados.nombres', 'colegiados.a_paterno', 'colegiados.a_materno', 'matriculas.rol')
            ->where('matriculas.curso_id', $id)
            ->get();

        $personas = Matricula::join('personas', 'matriculas.persona_id', '=', 'personas.id')
            ->select('matriculas.id AS id_matricula', 'personas.id', 'personas.dni', 'personas.nombres', 'personas.a_paterno', 'personas.a_materno', 'matriculas.rol')
            ->where('matriculas.curso_id', $id)
            ->get();

        return view('certificados.administrador.matriculas', compact('curso', 'colegiados', 'personas'));
    }

    public function showspeakers($id)
    {
        $curso = Curso::find($id);

        $colegiados = Matricula::join('colegiados', 'matriculas.colegiado_id', '=', 'colegiados.id')
            ->select('matriculas.id AS id_matricula', 'colegiados.id', 'colegiados.dni', 'colegiados.nombres', 'colegiados.a_paterno', 'colegiados.a_materno', 'matriculas.rol')
            ->where('matriculas.curso_id', $id)
            ->where('matriculas.rol', '1')
            ->get();

        $personas = Matricula::join('personas', 'matriculas.persona_id', '=', 'personas.id')
            ->select('matriculas.id AS id_matricula', 'personas.id', 'personas.dni', 'personas.nombres', 'personas.a_paterno', 'personas.a_materno', 'matriculas.rol')
            ->where('matriculas.curso_id', $id)
            ->where('matriculas.rol', '1')
            ->get();

        return view('certificados.administrador.ponentes', compact('curso', 'colegiados', 'personas'));
    }

    public function assignedspeaker(Request $request, $id)
    {
        $curso = Curso::find($id);
        $matricula = Matricula::find($request->id_matricula);

        $matricula->curso_id = $matricula->curso_id;
        $matricula->colegiado_id = $matricula->colegiado_id;
        $matricula->pago_id = $matricula->pago_id;
        $matricula->persona_id = $matricula->persona_id;

        if ($request->condicion == "0") {
            $matricula->rol = "1";
        } else {
            $matricula->rol = "0";
        }

        $matricula->save();

        return back()->with('mensaje2', 'Actualiación exitosa, ponente asignado.', compact('curso'));
    }

    public function edit(Matricula $matricula)
    {
        //
    }

    public function update(Request $request, Matricula $matricula)
    {
        //
    }

    public function destroy($id)
    {
        Matricula::destroy($id);
        return back()->with('mensaje3', 'Eliminación exitosa, curso eliminado.');
    }
}
