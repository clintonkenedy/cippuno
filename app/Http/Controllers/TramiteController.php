<?php

namespace App\Http\Controllers;

use App\Models\Tramite;
use Illuminate\Http\Request;
use App\Models\Colegiado;
use App\Models\Pago;
use App\Models\User;


class TramiteController extends Controller


{
    
    public function index()
    {
        $users = User::all();
        $colegiados = Colegiado::all();
        $pagos = Pago::all();
        $tramites = Tramite::all();
        return view('tramites.index', compact('pagos','colegiados','users','tramites'));
       // $colegiado->id = $request->get('id');
      //  $colegiado = "holao";
      //  return view('tramites.index');

    }


    public function create()
    {
        return view("tramites.creartrami");
    }

    public function store(Request $request)
    {
      $tramites = new Tramite();
      $tramites->id = '';     
      $tramites->tipo_tramite_id = $request->input('tipo_tramite_id');
      $tramites->asunto = $request->input('asunto');
      $tramites->fecha_emi = $request->input('fecha_emi');
      $tramites->fecha_recep = $request->input('fecha_recep');
      $tramites->archivo =$request->input('tipo_tramite_id');
      //Tramite::insert($tramites)
   //   $tramites->colegiado_id = '7';
   //   $tramites->persona_id = '2';
      
      //dd($tramites);
      $tramites->save();

      return redirect()->route("tramites.index")->with("success", "Agregado con exito!");
      print_r($_POST);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tramite  $tramite
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $users = User::all();
        $colegiados = Colegiado::all();
        $pagos = Pago::all();
        $tramites = Tramite::all();
        return view('tramites.mostrar', compact('pagos','colegiados','users','tramites'));
     //   $tramites->tipo_tramite_id = $request->get('tipo_tramite_id');
     //   $tramites->asunto = $request->get('asunto');
      //  $tramites->fecha_emi = $request->get('fecha_emi');
     //   $tramites->fecha_recep = $request->get('fecha_recep');
     //   $tramites->archivo =$request->get('tipo_tramite_id');
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
