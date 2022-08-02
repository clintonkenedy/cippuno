@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3 mt-4">
            <div class="card border-dark">
                <h4 class="card-header border-dark bg bg-primary">EDITAR RESERVA</h4>
                <div class="card-body">
                    <form action="{{route('conceptos.update', $concepto)}}" class=""  url="javascript:void(0)" method="POST">
                        @method('PUT')
                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="nombre" class="form-label">
                                    Nombre:
                                <span style="color: red;">*</span>
                                </label>
                                <input type="text" name="nombre" id="nombre" class="form-control" value="{{$concepto->nombre}}">
                                <div id="errorEvento" class=""></div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="precio" class="form-label">
                                    Precio:
                                <span style="color: red;">*</span>
                                </label>
                                <input type="text" name="precio" id="precio" class="form-control" value="{{$concepto->precio}}">
                                <div id="errorPrecio" class=""></div>
                            </div>
                        </div>
                        <center>
                            <a href="/concepto" class="btn btn-danger" data-dismiss="modal">Cancelar</a>
                            <button type="submit" class="btn btn-primary">Confirmar</button>
                        </center>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('css')
@stop
