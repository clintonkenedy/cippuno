<?php

namespace App\Http\Controllers\Api\v4;

use App\Http\Controllers\Controller;
use App\Models\Colegiado;;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class ColegiadoController extends Controller
{

    public function login(Request $request)
    {
        $colegiado = Colegiado::where('email', $request->email)->first();

        if (!$colegiado || !Hash::check($request->password, $colegiado->password)) {
            return response()->json([
                'message' => 'credenciales incorrectas'
            ], Response::HTTP_UNAUTHORIZED);
        }

        $token = $colegiado->createToken($request->email)->plainTextToken;

        return response()->json([
            'message' => 'user authenticated with sucess',
            'token' => $token
        ], Response::HTTP_OK);
    }

    public function register(Request $request)
    {
        $colegiado = new Colegiado();

        if ($request->password !== $request->confirm) {
            return response()->json([
                'message' => 'las contraseñas no coinciden'
            ], Response::HTTP_BAD_REQUEST);
        }

        $colegiado->email = $request->email;
        $colegiado->password = bcrypt($request->password);
        $colegiado->save();

        $token = $colegiado->createToken($request->email)->plainTextToken;

        return response()->json([
            'message' => 'usuario registrado con exito',
            'token' => $token
        ], Response::HTTP_OK);
    }

    public function logout(Request $request)
    {
        $request->colegiado()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'sesion cerrada'
        ], Response::HTTP_OK);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
