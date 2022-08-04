@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col col-4">
            <div class="card" class="" style="width: 18rem;">
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
                                <a href="{{ route('cursosycertificadosfiltro',3) }}" class="list-group-item list-group-item-action">Cursos cancelados</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col bor">
            <div class="card" class="" style="width: 100%;">
                <div class="card" style="width: 100%;">
                    @if(!empty($cursos))
                    <div class="card-header">
                        Lista de cetificados de {{$colegiado[0]->nombres}}
                    </div>
                    <div class="card-body">
                        @foreach($cursos as $curso)
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-center">
                                <div class="list-group list-group-flush">{{$curso->nombre}}</div>
                                <div class="ms-5"><a href="{{route('certificadopdf', [$curso->id, $colegiado[0]->id])}}">Descargar certificado</a></div>
                            </li>
                        </ul>
                        @endforeach
                    </div>
                    @else
                    <div class="card-header">
                        No tiene certificados
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
