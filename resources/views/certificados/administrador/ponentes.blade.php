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

            <h4>Cursos: {{ $curso->nombre }} </h4>
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
                            <a class="nav-link" href="{{ route('accedercurso', $curso->id) }}">General</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('mostrarponentes', $curso->id) }}">Ponentes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route( 'mostrarparticipantes', $curso->id ) }}">Inscripciones</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    Colegiados:
                    <hr>
                    <table class="table table-striped table-bordered text-start w-100 mb-4">
                        <thead>
                            <tr class="bg-secondary">
                                <th scope="col" class="text-center">ID</th>
                                <th scope="col" class="text-center">DNI</th>
                                <th scope="col" class="text-center">Nombres</th>
                                <th scope="col" class="text-center">Apellido Paterno</th>
                                <th scope="col" class="text-center">Apellido Materno</th>
                                <th scope="col" class="text-center">Rol</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($colegiados as $colegiado)
                            <tr>
                                <th class="text-center">{{ $colegiado->id }}</th>
                                <td>{{ $colegiado->dni }}</td>
                                <td class="text-center">{{ $colegiado->nombres }}</td>
                                <td class="text-center">{{ $colegiado->a_paterno }}</td>
                                <td class="text-center">{{ $colegiado->a_materno }}</td>
                                @if($colegiado->rol=="0")
                                <td class="text-center"><span class="badge bg-secondary p-2">Participante</span></td>
                                @else
                                <td class="text-center"><span class="badge bg-success p-2">Ponente</span></td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    Personas:
                    <hr>
                    <table class="table table-striped table-bordered text-start w-100 mb-2">
                        <thead>
                            <tr class="bg-secondary">
                                <th scope="col" class="text-center">ID</th>
                                <th scope="col" class="text-center">DNI</th>
                                <th scope="col" class="text-center">Nombres</th>
                                <th scope="col" class="text-center">Apellido Paterno</th>
                                <th scope="col" class="text-center">Apellido Materno</th>
                                <th scope="col" class="text-center">Rol</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($personas as $persona)
                            <tr>
                                <th class="text-center">{{ $persona->id }}</th>
                                <td>{{ $persona->dni }}</td>
                                <td class="text-center">{{ $persona->nombres }}</td>
                                <td class="text-center">{{ $persona->a_paterno }}</td>
                                <td class="text-center">{{ $persona->a_materno }}</td>
                                @if($persona->rol=="0")
                                <td class="text-center"><span class="badge bg-secondary p-2">Participante</span></td>
                                @else
                                <td class="text-center"><span class="badge bg-success p-2">Ponente</span></td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('css')
@stop
