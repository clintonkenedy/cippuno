<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Concepto;

class ConceptoController extends Controller
{
    public function index()
    {
        $conceptos = Concepto::all();
        return view('conceptos.index', compact('conceptos'));
    }

    public function edit($id)
    {
        $concepto = Concepto::find($id);
        // dd($concepto);
        return view('conceptos.edit', compact('concepto'));
    }

    public function update(Request $request, $id)
    {
        // dd($request);
        $concepto = Concepto::find($id);

        $concepto->nombre = $request->input('nombre');
        $concepto->precio = $request->input('precio');
        $concepto->save();

        return redirect()->route('conceptos.index');
    }

    public function store(Request $request)
    {

        $request->validate(
            [
                'nombre'=> 'required',
                'precio'=> 'required',
            ]
        );

        $input = $request->all();
        // dd($request->all());
        $nombre = $request->input('nombre');
        $precio = $request->input('precio');

        // dd($pass);

        $concepto = new Concepto;

        $concepto->nombre = $nombre;
        $concepto->precio = $precio;


        $concepto->save();

        return redirect()->route('conceptos.index');
    }

    public function destroy($id)
    {
        Concepto::find($id)->delete();
        return redirect()->route('conceptos.index');
    }
}
