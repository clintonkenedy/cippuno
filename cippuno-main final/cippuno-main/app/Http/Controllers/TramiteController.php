<?php

namespace App\Http\Controllers;

use App\Models\Tramite;
use Illuminate\Http\Request;
use App\Models\Colegiado;
use App\Models\Pago;
use App\Models\User;
use App\Models\Oficina;
use App\Models\Tipo_tramite;
use App\Models\Persona;
use App\Models\Seguimiento;

class TramiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $colegiados = Colegiado::all();
        $pagos = Pago::all();
        $tramites = Tramite::all();
        $oficinas = Oficina::all();
        $tipo_tramite = Tipo_tramite::all();
        $persona = Persona::all();
        return view('tramites.index', compact('pagos','colegiados','users','tramites','oficinas','tipo_tramixte','persona'));
       // $colegiado->id = $request->get('id');
      //  $colegiado = "holao";
      //  return view('tramites.index');

        return view('tramites.prueba');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function ofic()
    {
        $users = User::all();
        $colegiados = Colegiado::all();
        $pagos = Pago::all();
        $tramites = Tramite::all();
        $oficinas = Oficina::all();
        $tipo_tramites = Tipo_tramite::all();

        $nombre_tramites = Tipo_tramite::get('nombre','id');
        
        return view('tramites.oficinas', compact('pagos','colegiados','users','tramites','oficinas','tipo_tramites','nombre_tramites'));
        
    
    }
    public function store(Request $request)
    {
      
      $tramites = new Tramite();
      $tramites->id = $request->get('id');
      $tramites->tipo_tramite_id = $request->input('tipo_tramite_id');
      $tramites->asunto = $request->input('asunto');
      $tramites->fecha_emi = $request->input('fecha_emi');
      $tramites->fecha_recep = $request->input('fecha_recep');
      $tramites->archivo_1 =$request->input('archivo1');
      $tramites->archivo_2 =$request->input('archivo2');
      $tramites->archivo_3 =$request->input('archivo3');
      $tramites->archivo_4 =$request->input('archivo4');
      //Tramite::insert($tramites)
      $tramites->colegiado_id = $request->get('colegiado_id');
   //   $tramites->persona_id = '2';
      
      //dd($tramites);
      $tramites->save();

      return redirect()->route("tramites.index")->with("success", "Agregado con exito!");
      print_r($_POST);
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    }
    public function crecole(Request $request)
    {
      
      $colegiados = new Colegiado();

      $colegiados->nombres = $request->input('nombres');
      $colegiados->codigo_colegiado = $request->input('codigo_colegiado');
      $colegiados->dni = $request->input('dni');
      $colegiados->a_paterno = $request->input('a_paterno');
      $colegiados->a_materno = $request->input('a_materno');
      $colegiados->direccion = $request->input('direccion');
      $colegiados->capitulo_id = $request->get('capitulo_id');
      $colegiados->ultimo_pago = $request->input('ultimo_pago');
      
      $colegiados->save();

      return redirect()->route("tramites.index")->with("success", "Agregado con exito!");
      print_r($_POST);
    }

    public function creperso(Request $request)
    {
      
      $persona = new Persona();

      $persona->dni = $request->input('dni');
      $persona->nombres = $request->input('nombres');
      $persona->a_paterno = $request->input('a_paterno');
      $persona->a_materno = $request->input('a_materno');
      $persona->email = $request->input('email');
      $persona->direccion = $request->input('direccion');

      $persona->save();

      return redirect()->route("tramites.index")->with("success", "Agregado con exito!");
      
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tramite  $tramite
     * @return \Illuminate\Http\Response
     */
    public function show(Tramite $tramite)
    {
        $users = User::all();
        $colegiados = Colegiado::all();
        $pagos = Pago::all();
        $tramites = Tramite::all();
        $tipo_tramites = Tipo_tramite::all();
  
        return view('tramites.mostrar', compact('pagos','colegiados','users','tramites','tipo_tramites'));
     //   $tramites->tipo_tramite_id = $request->get('tipo_tramite_id');
     //   $tramites->asunto = $request->get('asunto');
      //  $tramites->fecha_emi = $request->get('fecha_emi');
     //   $tramites->fecha_recep = $request->get('fecha_recep');
     //   $tramites->archivo =$request->get('tipo_tramite_id');
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tramite  $tramite
     * @return \Illuminate\Http\Response
     */
    public function edit(Tramite $tramite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tramite  $tramite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tramite $tramite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tramite  $tramite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tramite $tramite)
    {
        //
    }
}
