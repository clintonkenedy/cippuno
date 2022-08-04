<?php

namespace App\Http\Controllers;



use App\Models\Concepto;
use App\Models\Pago;
use Illuminate\Http\Request;


use App\Models\Colegiado;
use App\Models\Capitulo;
use App\Models\ConceptoPago;
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
        //$pago_concep = Pago_concepto::all();
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
        dd(request()->all());
//        dd(Colegiado::where('dni',$request->dnia)->get()[0]->id);
//        $pago = new Pago;
//        $pago->numero = '2';
//        $pago->observaciones = $request->observaciones;
//
//        $pago->colegiado_id = Colegiado::where('dni',$request->dnia)->get()[0]->id;
//        $pago->sede_id = '1';
//        $pago->forma_pago_id ='1';
//        $pago->save();
//        $conceptopago = new ConceptoPago;
//        $conceptopago->cantidad='1';
//        $conceptopago->precio='100';
//        $conceptopago->pago_id=$pago->id;
//        $conceptopago->concepto_id=$request->concepto1;
//        $conceptopago->save();
//
//        return redirect()->route('caja.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Colegiado  $colegiado
     * @return \Illuminate\Http\Response
     */
    public function show(Colegiado $colegiado)
    {

    }

    public function buscardni($dni)
    {

        // $colegiado=Colegiado::find($dni);
        $colegiado = Colegiado::where('dni', $dni)->get();
        if (count($colegiado) >= 1) {
            return response()->json([
                'status' => 'ok',
                'data' => $colegiado[0],
            ]);
        }

        return response()->json([
            'status' => 'error',
            'data' => 'Colegiado no encontrado',
        ]);



        // return response()->json([
        //     'status' => 'ok',
        //     'data' => $colegiado,
        // ]);


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
