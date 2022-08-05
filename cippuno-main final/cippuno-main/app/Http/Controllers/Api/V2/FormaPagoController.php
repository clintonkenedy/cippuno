<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use App\Http\Resources\V2\FormaPagoCollection;
use App\Http\Resources\V2\FormaPagoResource;
use App\Models\Forma_pago;
use Illuminate\Http\Request;

class FormaPagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return new FormaPagoCollection(Forma_pago::latest()->paginate());
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
     * @param  \App\Models\Forma_pago  $formapago
     * @return \Illuminate\Http\Response
     */
    public function show(Forma_pago $formapago)
    {
        //
        return new FormaPagoResource($formapago);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Forma_pago  $forma_pago
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Forma_pago $forma_pago)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Forma_pago  $forma_pago
     * @return \Illuminate\Http\Response
     */
    public function destroy(Forma_pago $forma_pago)
    {
        //
    }
}
