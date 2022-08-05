<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use App\Http\Resources\V2\ColegiadoCollection;
use App\Http\Resources\V2\ColegiadoResource;
use App\Http\Resources\V2\PagoResource;
use App\Models\Colegiado;
use Illuminate\Http\Request;

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
        return new ColegiadoCollection(Colegiado::latest()->paginate());
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
        return new ColegiadoResource($colegiado);
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
