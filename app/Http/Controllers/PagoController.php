<?php

namespace App\Http\Controllers;

use App\Models\ConceptoPago;
use App\Models\Pago;
use App\Models\Forma_pago;
use App\Models\Sede;
use App\Models\Concepto;
use App\Models\Colegiado;
use Illuminate\Http\Request;


class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pagos = Pago::all();
        $forma_pagos = Forma_pago::all();
        $sedes = Sede::all();
        $pago_conceptos = ConceptoPago::all();
        $conceptos = Concepto::all();



        $conceptos2 = Concepto::find(1);
        //dd($conceptos2->pagos);
        $pagos2 = Pago::find(2);
//        dd($pagos2->conceptos);

        return view('caja.index', compact('pagos', 'forma_pagos', 'sedes', 'pago_conceptos', 'conceptos','pagos2','conceptos2'));
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
        // dd(request()->all());
        // dd($request->concepto[0]);
        //dd(Colegiado::where('dni',$request->dnia)->get()[0]->id);
        $pago = new Pago;
        $pago->numero = substr($request->dnia, 0, 6) . $request->apaterno[0];
        $pago->observaciones = $request->observaciones;

        $pago->colegiado_id = Colegiado::where('dni',$request->dnia)->get()[0]->id;
        $pago->sede_id = '1';
        $pago->forma_pago_id ='1';
        $pago->save();


        if (sizeof($request->concepto)>1) {
            for ($i=0; $i < sizeof($request->concepto); $i++) {
                $conceptopago = new ConceptoPago;
                $conceptopago->cantidad='1';
                $conceptopago->precio='100';
                $conceptopago->pago_id=$pago->id;
                $conceptopago->concepto_id=$request->concepto[$i]+1;
            }
        }
        else {
            $conceptopago = new ConceptoPago;
            $conceptopago->cantidad='1';
            $conceptopago->precio='100';
            $conceptopago->pago_id=$pago->id;
            $conceptopago->concepto_id=$request->concepto[0]+1;
        }
        $conceptopago->save();

        return redirect()->route('caja.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function show(Pago $pago)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function edit(Pago $pago)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pago $pago)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pago $pago)
    {
        //
    }
}
