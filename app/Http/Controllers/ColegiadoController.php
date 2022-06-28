<?php

namespace App\Http\Controllers;



use App\Models\Concepto;
use Illuminate\Http\Request;


use App\Models\Colegiado;
use App\Models\Capitulo;
use App\Models\Pago_concepto;
class ColegiadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $colegiados=Colegiado::all();
        $capitulos =Capitulo::all();
        $pago_concep = Pago_concepto::all();
        dd(Concepto::all()->first()->pago_conceptos);
        return view('tramites.index',compact('colegiados','capitulos'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Colegiado  $colegiado
     * @return \Illuminate\Http\Response
     */
    public function show(Colegiado $colegiado)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Colegiado  $colegiado
     * @return \Illuminate\Http\Response
     */
    public function edit(Colegiado $colegiado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Colegiado  $colegiado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Colegiado $colegiado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Colegiado  $colegiado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Colegiado $colegiado)
    {
        //
    }
}
