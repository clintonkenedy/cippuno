@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container">
    <div class="row">
        <div class="col text-center mt-2">
            <h1>CURSOS Y CERTIFICADOS</h1>
        </div>
    </div>
</div>
@stop

@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="col text-start">

            <h4>Cursos: {{ $curso->nombre }}</h4>
            <hr>

            <div class="row mt-2">
                <div class="col text-right">
                    <a class="btn btn-secondary" href="{{ route('certificados.index') }}">Volver</a>
                </div>
            </div>

            <div class="card mt-2">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('accedercurso', $curso->id) }}">General</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('mostrarponentes', $curso->id) }}">Ponentes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route( 'mostrarparticipantes', $curso->id ) }}">Inscripciones</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('actualizarcurso', $curso->id) }}" class="col-12">
                        @csrf
                        @method('PUT')
                        <div class="row mb-2">
                            <div class="form-group col-9">
                                <label for="nombre">Nombre:</label>
                                <input type="text" value="{{$curso->nombre}}" name="nombre" id="nombre" placeholder="Nombre" class="form-control">
                            </div>
                            <div class="form-group col-3">
                                <label for="precio">Precio (S/.):</label>
                                <input type="number" value="{{$curso->precio}}" name="precio" id="precio" placeholder="Precio (S/.)" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="form-group col-6">
                                <label for="enlace">Enlace:</label>
                                <input type="text" value="{{ $curso->enlace }}" name="enlace" id="enlace" placeholder="Enlace o link" class="form-control">
                            </div>
                            <div class="form-group col-3">
                                <label for="fecha inicio">Inicio:</label>
                                <input type="date" value="{{$curso->fecha_inicio}}" name="fecha_inicio" id="fecha_inicio" class="form-control">
                            </div>
                            <div class="form-group col-3">
                                <label for="fecha_fin">Fin:</label>
                                <input type="date" value="{{$curso->fecha_fin}}" name="fecha_fin" id="fecha_fin" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="form-group col-6">
                                <label for="temario">Temario:</label>
                                <input type="text" value="{{$curso->temario}}" name="temario" id="temario" placeholder="temario" class="form-control">
                            </div>
                            <div class="form-group col-6">
                                <label for="ponentes">Ponentes:</label>
                                <input type="text" value="{{$curso->ponentes}}" name="ponentes" id="ponentes" placeholder="ponentes" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="form-group mb-2 col-6">
                                <label for="modelo_certificado">Modelo del Certificado:</label>
                                <input type="text" value="{{$curso->modelo_certificado}}" name="modelo_certificado" id="modelo_certificado" placeholder="modelo certificado" class="form-control">
                            </div>
                            <div class="form-group mb-2 col-6">
                                <label for="estado">Estado:</label>
                                <select class="custom-select" name="estado" id="estado">
                                    @if($curso->estado == 0)
                                    <option selected value="0">En espera</option>
                                    @else
                                    <option value="0">En espera</option>
                                    @endif
                                    @if($curso->estado == 1)
                                    <option selected value="1">En proceso</option>
                                    @else
                                    <option value="1">En proceso</option>
                                    @endif
                                    @if($curso->estado == 2)
                                    <option selected value="2">Finalizado</option>
                                    @else
                                    <option value="2">Finalizado</option>
                                    @endif
                                    @if($curso->estado == 3)
                                    <option selected value="3">Cancelado</option>
                                    @else
                                    <option value="3">Cancelado</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <button class="btn btn-light border-dark" type="submit">Editar Curso</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('css')
@stop
