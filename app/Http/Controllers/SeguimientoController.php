<?php

namespace App\Http\Controllers;

use App\Models\Seguimiento;
use Illuminate\Http\Request;


class SeguimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seguimientos = Seguimiento::paginate();

        return view('seguimiento.index', compact('seguimientos'))
            ->with('i', (request()->input('page', 1) - 1) * $seguimientos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $seguimiento = new Seguimiento();
        return view('seguimiento.create', compact('seguimiento'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Seguimiento::$rules);

        $seguimiento = Seguimiento::create($request->all());

        return redirect()->route('seguimientos.index')
            ->with('success', 'Oficina creada satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $seguimiento = Seguimiento::find($id);

        return view('seguimiento.show', compact('seguimiento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $seguimiento = Seguimiento::find($id);

        return view('seguimiento.edit', compact('seguimiento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Seguimiento $oficina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seguimiento $seguimiento)
    {
        request()->validate(Seguimiento::$rules);

        $seguimiento->update($request->all());

        return redirect()->route('seguimientos.index')
            ->with('success', 'Editada satisfactoriamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $seguimiento = Seguimiento::find($id)->delete();

        return redirect()->route('seguimientos.index')
            ->with('success', 'Seguimiento borrada satisfactoriamente');
    }
}