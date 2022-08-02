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

    <div class="row mt-2">
        <div class="col text-start">

            <h4>Cursos:</h4>
            <hr>

            <div class="row mt-2">
                <div class="col text-right">
                    <a class="btn btn-secondary" href="{{ route('certificados.index') }}">Volver</a>
                </div>
            </div>

            <div class="card mt-2">
                <div class="card-header">
                    Nuevo curso
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('crearcurso') }}" class="col-12">
                        @csrf
                        <div class="row mb-2">
                            <div class="form-group col-9">
                                <label for="nombre">Nombre:</label>
                                <input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control">
                            </div>
                            <div class="form-group col-3">
                                <label for="precio">Precio (S/.):</label>
                                <input type="number" name="precio" id="precio" placeholder="Precio (S/.)" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="form-group col-6">
                                <label for="enlace">Enlace:</label>
                                <input type="text" name="enlace" id="enlace" placeholder="Enlace o link" class="form-control">
                            </div>
                            <div class="form-group col-3">
                                <label for="fecha inicio">Inicio:</label>
                                <input type="date" name="fecha_inicio" id="fecha_inicio" class="form-control">
                            </div>
                            <div class="form-group col-3">
                                <label for="fecha_fin">Fin:</label>
                                <input type="date" name="fecha_fin" id="fecha_fin" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="form-group col-6">
                                <label for="temario">Temario:</label>
                                <input type="text" name="temario" id="temario" placeholder="temario" class="form-control">
                            </div>
                            <div class="form-group col-6">
                                <label for="ponentes">Ponentes:</label>
                                <input type="text" name="ponentes" id="ponentes" placeholder="ponentes" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="form-group mb-2 col-6">
                                <label for="modelo_certificado">Modelo del Certificado:</label>
                                <input type="text" name="modelo_certificado" id="modelo_certificado" placeholder="modelo certificado" class="form-control">
                            </div>
                            <div class="form-group mb-2 col-6">
                                <label for="estado">Estado:</label>
                                <select class="custom-select" name="estado" id="estado">
                                    <option selected value="0">En espera</option>
                                    <option value="1">En proceso</option>
                                    <option value="2">Finalizado</option>
                                    <option value="3">Cancelado</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <button class="btn btn-light border-dark" type="submit">Crear curso</button>
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
