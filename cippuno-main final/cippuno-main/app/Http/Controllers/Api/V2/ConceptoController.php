<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use App\Http\Resources\V2\ConceptoCollection;
use App\Http\Resources\V2\ConceptoResource;
use App\Models\Concepto;
use Illuminate\Http\Request;

class ConceptoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return new ConceptoCollection(Concepto::latest()->paginate());
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
     * @param  \App\Models\Concepto  $concepto
     * @return \Illuminate\Http\Response
     */
    public function show(Concepto $concepto)
    {
        //
        return new ConceptoResource($concepto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Concepto  $concepto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Concepto $concepto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Concepto  $concepto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Concepto $concepto)
    {
        //
    }
}
