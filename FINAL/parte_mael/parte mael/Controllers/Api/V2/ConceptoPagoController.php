<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use App\Http\Resources\V2\ConceptoPagoCollection;
use App\Http\Resources\V2\ConceptoPagoResource;
use App\Models\ConceptoPago;
use Illuminate\Http\Request;

class ConceptoPagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return new ConceptoPagoCollection(ConceptoPago::latest()->paginate());
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
     * @param  \App\Models\ConceptoPago  $conceptopago
     * @return \Illuminate\Http\Response
     */
    public function show(ConceptoPago $conceptopago)
    {
        //
        return new ConceptoPagoResource($conceptopago);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ConceptoPago  $conceptoPago
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ConceptoPago $conceptoPago)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ConceptoPago  $conceptoPago
     * @return \Illuminate\Http\Response
     */
    public function destroy(ConceptoPago $conceptoPago)
    {
        //
    }
}
