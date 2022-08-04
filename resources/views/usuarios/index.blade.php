@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>USUARIOS</h1>
        </div>
        <div class="row justify-content-end">
            <button class="btn btn-primary mb-2" data-toggle="modal" data-target="#staticBackdrop">Nueva Pago</button>
        </div>
        <div class="table-responsive-md">
            <p>{{$usuarios}}</p>
            <table id="caja" class="table table-striped mt-2">
                <thead>
                <th>Id</th>
                <th>Nombre</th>
                <th>Email</th>
                </thead>
                <tbody>

                @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->id }}</td>
                        <td>{{ $usuario->name }}</td>
                        <td>{{ $usuario->email }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">NUEVO USUARIO</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('usuarios.store')}}">
                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="dni">
                                    Nombre
                                    <span style="color: red;">*</span>
                                </label>
                                <input type="text" name="nombre" class="form-control xd" placeholder="Ingrese Nombre" aria-label="Ingrese Nombre" id="nombre">

                                <label for="dni">
                                    Email
                                    <span style="color: red;">*</span>
                                </label>
                                <input type="text" name="nombre" class="form-control xd" placeholder="Ingrese Nombre" aria-label="Ingrese Nombre" id="nombre">

                                <label for="dni">
                                    Contraseña
                                    <span style="color: red;">*</span>
                                </label>
                                <input type="text" name="nombre" class="form-control xd" placeholder="Ingrese Nombre" aria-label="Ingrese Nombre" id="nombre">

                                <label for="dni">
                                    Confirmar contraseña
                                    <span style="color: red;">*</span>
                                </label>
                                <input type="text" name="nombre" class="form-control xd" placeholder="Ingrese Nombre" aria-label="Ingrese Nombre" id="nombre">


                            </div>
                        </div>
                    </form>
                </div>
                {{--<div class="modal-body">
                    <form action="{{route('caja.store')}}" id="crearPago" name="crearPago" class=""  url="javascript:void(0)" method="POST">
                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="dni">
                                    DNI
                                    <span style="color: red;">*</span>
                                </label>
                                <div class="input-group">
                                    --}}{{-- <form action=" {{ route("colegiado.buscar", '64694794') }} " method="get"> --}}{{--
                                    <input type="text" class="form-control xd" placeholder="Ingrese DNI" aria-label="Ingrese DNI" id="dni">
                                    <input type="text" name="dnia" id="dnia" class="form-control" hidden>
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button" id="buscarDNI" onclick="buscar(dni)">Buscar</button>
                                    </div>
                                </div>
                                <div id="messageEvento" style="color:salmon" hidden>
                                    Ingrese caracteres validos.
                                </div>
                                <div id="noEncontrado" style="color:salmon" hidden>
                                    Usuario no encontrado
                                </div>
                                <div id="errorEvento" class=""></div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="apaterno" class="form-label">
                                    Apellido Paterno:
                                    <span style="color: red;">*</span>
                                </label>
                                --}}{{-- {!! Form::text('evento',null,array('id'=>'evento', 'class'=>'form-control '.($errors->has('evento') ? 'is-invalid':''), 'onkeyup'=>'validarEvento()','onblur'=>'validarEvento()')) !!} --}}{{--
                                <input type="text" name="apaterno" id="apaterno" class="form-control" readonly>
                                --}}{{-- @error('evento')
                            <span class="invalid-feedback">
                                <strong> {{$message}} </strong>
                            </span>
                            @enderror --}}{{--
                                <div id="errorEvento" class=""></div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="amaterno" class="form-label">
                                    Apellido Materno:
                                    <span style="color: red;">*</span>
                                </label>
                                <input type="text" name="amaterno" id="amaterno" class="form-control" readonly>
                                <div id="errorEvento" class=""></div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="nombres" class="form-label">
                                    Nombres:
                                    <span style="color: red;">*</span>
                                </label>
                                <input type="text" name="nombres" id="nombres" class="form-control" readonly>
                                <div id="errorEvento" class=""></div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="evento" class="form-label">
                                    Observaciones:
                                    <span style="color: red;">*</span>
                                </label>
                                <textarea type="text" name="observaciones" id="observaciones" class="form-control" placeholder="Ingrese Observaciones"></textarea>
                                --}}{{-- @error('evento')
                            <span class="invalid-feedback">
                                <strong> {{$message}} </strong>
                            </span>
                            @enderror --}}{{--
                                <div id="errorEvento" class=""></div>
                            </div>
                            <div class="col-md-12">
                                <label for="" class="form-label">
                                    Concepto de Pago:
                                    <span style="color: red;">*</span>
                                </label>
                                <div class="row" id="divpagos" onchange="sumatotal()">
                                    <div class="col-9 input-group" id="divconceptos1" onchange="cambioPago(this)">
                                        <select class="col-9 custom-select mb-2" name="concepto[]">
                                            <option value="-1" selected>Selección concepto de pago</option>
                                            @foreach ($conceptos as $concepto)
                                                <option value="{{$concepto->id}}">{{$concepto->nombre}}</option>
                                            @endforeach
                                        </select>
                                        <input type="text" class="col-2 form-control" name="stotal" readonly>
                                        <button type="button" class="col-1 close form-control" aria-label="Close" onclick="prueba(this)">
                                            <span aria-hidden="true" class="text-danger">&times;</span>
                                        </button>
                                    </div>
                                    <div class="col">
                                        <button class="btn btn-warning float-right" type="button" onclick="addConcepto()">Agregar</button>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text text-success"><b>TOTAL: </b></span>
                                                <span class="input-group-text text-success">S/.</span>
                                            </div>
                                            <input type="text" class="form-control text-success text-center" id="total" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>--}}


                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@stop
@section('css')
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
