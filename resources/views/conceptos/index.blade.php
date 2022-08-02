@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>CONCEPTOS CIP PUNO</h1>
        </div>
        <div class="row justify-content-end">
            <button class="btn btn-success mb-2" data-toggle="modal" data-target="#staticBackdrop">Nuevo Pago</button>
        </div>
        <div class="table-responsive-md">
            <table id="concepto" class="table table-striped mt-2 text-center">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($conceptos as $concepto)
                    <tr>
                        <th scope="row">{{ $concepto->id }}</td>
                        <td>{{ $concepto->nombre }}</td>
                        <td>{{ $concepto->precio}}</td>
                        <td>

                            <a href="{{ route('conceptos.edit', $concepto)}}" class="btn btn-primary">Editar</a>
                            {{-- <a href="#" class="btn btn-info">Detalle</a> --}}

                            <form method="POST" action="{{route('conceptos.destroy', $concepto->id)}}" style="display:inline">
                            @csrf
                            @method('delete')
                                <button type="submit" class="btn btn-danger">Borrar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg bg-success">
            <h5 class="modal-title" id="staticBackdropLabel">NUEVO CONCEPTO</h5>
            </div>
            <div class="modal-body">
                <form action="{{route('conceptos.store')}}" id="crearPago" name="crearPago" class=""  url="javascript:void(0)" method="POST">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="nombre" class="form-label">
                            Nombre:
                        <span style="color: red;">*</span>
                        </label>
                        <input type="text" name="nombre" id="nombre" class="form-control">
                        <div id="errorEvento" class=""></div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="precio" class="form-label">
                            Precio:
                        <span style="color: red;">*</span>
                        </label>
                        <input type="text" name="precio" id="precio" class="form-control">
                        <div id="errorPrecio" class=""></div>
                    </div>
                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-success">Crear</button>
            </div>
            </form>
            </div>
        </div>
    </div>
@stop
@section('css')
@stop
