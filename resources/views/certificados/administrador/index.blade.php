@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container">
    <div class="row justify-content-center">
        <h1>DESDE CERTIFICADOS</h1>
    </div>
</div>
@stop

@section('content')
<div class="container">
    <div class="row mt-2">
        <div class="col text-start">

            <h4>Cursos</h4>
            <hr>

            <div class="col mt-2">
                @if(session('mensaje'))
                <div class="alert alert-success">
                    {{ session('mensaje')}}
                </div>
                @elseif(session('mensaje2'))
                <div class="alert alert-warning">
                    {{ session('mensaje2')}}
                </div>
                @elseif(session('mensaje3'))
                <div class="alert alert-danger">
                    {{ session('mensaje3')}}
                </div>
                @endif
            </div>

            <div class="col text-right mt-2">
                <a class="btn btn-light border-dark" href="{{ route('vistacrear') }}">Nuevo curso</a>
            </div>

            <div class="d-flex justify-content-center mt-2">
                <table class="table table-striped table-bordered text-start w-100">
                    <thead>
                        <tr class="bg-secondary">
                            <th class="text-center">ID</th>
                            <th class="text-center">Nombre</th>
                            <th class="text-center">Precio (S/.)</th>
                            <th class="text-center">Duración</th>
                            <th class="text-center">Estado Actual</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cursos as $curso)
                        <tr>
                            <th class="text-center">{{ $curso->id }}</th>
                            <td>{{ $curso->nombre }}</td>
                            <td class="text-center">{{ $curso->precio }}</td>
                            <td class="text-center">{{ $curso->duracion }}</td>
                            @if($curso->estado=="0")
                            <td class="text-center"><span class="badge bg-warning p-2">En espera</span></td>
                            @elseif($curso->estado=="1")
                            <td class="text-center"><span class="badge bg-success p-2">En proceso</span></td>
                            @elseif($curso->estado=="2")
                            <td class="text-center"><span class="badge bg-danger p-2">Finalizado</span></td>
                            @elseif($curso->estado=="3")
                            <td class="text-center"><span class="badge bg-secondary p-2">Suspendido</span></td>
                            @endif

                            <td>
                                <div class="d-flex justify-content-center">
                                    <div class="me-1">
                                        <a class="btn btn-success border border-success" href="{{ route('accedercurso',$curso->id) }}">Editar</a>
                                    </div>
                                    <div class="">
                                        <form action="{{ route('eliminarcurso', $curso->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-danger border border-danger">Eliminar</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
@stop
@section('css')
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop
