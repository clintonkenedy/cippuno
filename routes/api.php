<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\PagoController as PagoV1;
use App\Http\Controllers\Api\V2\PagoController as PagoV2;
use App\Http\Controllers\Api\V2\ColegiadoController;
use App\Http\Controllers\Api\V2\ConceptoController;
use App\Http\Controllers\Api\V2\FormaPagoController;
use App\Http\Controllers\Api\V2\ConceptoPagoController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\V3\UsersController;
use App\Http\Controllers\Api\v4\ColegiadoController as V4ColegiadoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/
Route::apiResource('v2/conceptopagos',ConceptoPagoController::class)
    ->middleware('auth:sanctum');

Route::apiResource('v2/formapagos',FormaPagoController::class)
    ->middleware('auth:sanctum');

Route::apiResource('v2/conceptos',ConceptoController::class)
    ->middleware('auth:sanctum');

Route::apiResource('v2/colegiados',ColegiadoController::class)
    ->middleware('auth:sanctum');

Route::apiResource('v1/pagos',PagoV1::class)
    ->middleware('auth:sanctum');

Route::apiResource('v2/pagos',PagoV2::class)
    ->middleware('auth:sanctum');

Route::post('login',[LoginController::class,'login']);


Route::post('/v3/login', [UsersController::class, 'login']);
Route::post('/v3/register', [UsersController::class, 'register']);


// add routes for api - app mobile
Route::post('v4/login', [V4ColegiadoController::class, 'login']);
Route::post('v4/register', [V4ColegiadoController::class, 'register']);
