@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @if(session('mensaje'))
        <div class="alert alert-success">
            {{ session('mensaje')}}
        </div>
        @endif
    </div>
    <div class="row">
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        Obtener certificados
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <form action="{{ route('buscarcertificador') }}" method="POST">
                                @csrf
                                <div class="form-group mb-2 mt-3">
                                    <input type="text" require name="dni" class="form-control" placeholder="INGRESE SU NÚMERO DE DNI" aria-label="Username">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-secondary w-100 mt-2">Buscar</button>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card mt-4" style="width: 18rem;">
                <div class="card" style="width: 18rem;">
                    <div class="card-header">
                        Cursos
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="list-group list-group-flush">
                                <a href="{{ route('cursosycertificados') }}" class="list-group-item list-group-item-action" aria-current="true">Todos</a>
                                <a href="{{ route('cursosycertificadosfiltro',0) }}" class="list-group-item list-group-item-action">Cursos en espera</a>
                                <a href="{{ route('cursosycertificadosfiltro',1) }}" class="list-group-item list-group-item-action">Cursos en proceso</a>
                                <a href="{{ route('cursosycertificadosfiltro',2) }}" class="list-group-item list-group-item-action">Cursos finalizados</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-8">
            @if(!empty($cursos))
            @foreach($cursos as $curso)
            <div class="card w-100 mb-4 ">
                <div class="card-body">
                    <div class="row">
                        <div class="col-9">
                            <h5 class="card-title fw-bold">Curso: {{ $curso->nombre}}</h5>
                            <p class="card-text fst-italic">Descripción: {{ $curso->temario}}</p>
                            <p class="card-text fst-italic">Inicio: {{ $curso->fecha_inicio}}</p>
                            <p class="card-text fst-italic">Fin: {{ $curso->fecha_fin}}</p>
                            @if($curso->estado==0)
                            <a class="card-link"><span class="badge bg-warning p-2">En espera</span></a>
                            @elseif($curso->estado=="1")
                            <td class="text-center"><span class="badge bg-success p-2">En proceso</span></td>
                            @elseif($curso->estado=="2")
                            <td class="text-center"><span class="badge bg-danger p-2">Finalizado</span></td>
                            @endif
                        </div>
                        <div class="col-3 align-self-center">
                            <a href="{{ route('vistamatricular', $curso->id) }}" class="w-100 card-link btn btn-light border-dark">Ingresar</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <p>No hay cursos</p>
            @endif
        </div>
    </div>
</div>
@endsection
