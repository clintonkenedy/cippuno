<?php

namespace App\Http\Controllers;

use App\Models\Tipo_tramite;
use Illuminate\Http\Request;

/**
 * Class TipoTramiteController
 * @package App\Http\Controllers
 */
class TipoTramiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoTramites = Tipo_tramite::paginate();

        return view('tipo-tramite.index', compact('tipoTramites'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoTramites->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoTramite = new Tipo_tramite();
        return view('tipo-tramite.create', compact('tipoTramite'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tipo_tramite::$rules);

        $tipoTramite = Tipo_tramite::create($request->all());

        return redirect()->route('tipo-tramite.index')
            ->with('success', 'TipoTramite creado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoTramite = Tipo_tramite::find($id);

        return view('tipo-tramite.show', compact('tipoTramite'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoTramite = Tipo_tramite::find($id);

        return view('tipo-tramite.edit', compact('tipoTramite'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tipo_tramite $tipoTramite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipo_Tramite $tipoTramite)
    {
        request()->validate(Tipo_tramite::$rules);

        $tipoTramite->update($request->all());

        return redirect()->route('tipo-tramite.index')
            ->with('success', 'TipoTramite actualizado satisfactoriamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoTramite = Tipo_tramite::find($id)->delete();

        return redirect()->route('tipo-tramite.index')
            ->with('success', 'TipoTramite borrado satisfactoriamente');
    }
}
