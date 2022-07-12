<?php

namespace App\Http\Controllers;

use App\Models\Tramite;
use Illuminate\Http\Request;

class TramiteController extends Controller
{

    public function index()
    {
        return view('tramites.index');
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
    public function show(Tramite $tramite)
    {
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
