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
                    <div class="card-header">
                        Inscripción al curso: {{$curso->nombre}}
                    </div>
                    <div class="card-body">
                        <form action="{{ route('matricularnuevo',$curso->id) }}" method="POST">
                            @csrf
                            <div class="form-group mb-2">
                                <label for="dni">Número de DNI:</label>
                                <input type="text" required name="dni" id="dni" placeholder="INGRESE SU DNI (8 DIGITOS)" class="form-control" maxlength="8">
                            </div>
                            <div class="form-group mb-2">
                                <label for="nombres">Nombre:</label>
                                <input type="text" required name="nombres" id="nombres" placeholder="Ingrese su nombre completo" class="form-control">
                            </div>
                            <div class="row">
                                <div class="form-group mb-2 col-6">
                                    <label for="a_paterno">Apellido Paterno:</label>
                                    <input type="text" required name="a_paterno" id="a_paterno" placeholder="Ingrese su apellido paterno" class="form-control">
                                </div>
                                <div class="form-group mb-2 col-6">
                                    <label for="a_materno">Apellido Materno:</label>
                                    <input type="text" required name="a_materno" id="a_materno" placeholder="Ingrese su apellido materno" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group mb-2 col-6">
                                    <label for="email">Email:</label>
                                    <input type="text" required name="email" id="email" placeholder="Ingrese su email o correo electrónico" class="form-control">
                                </div>
                                <div class="form-group mb-2 col-6">
                                    <label for="direccion">Dirección:</label>
                                    <input type="text" required name="direccion" id="direccion" placeholder="Ingrese su dirección actual" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-light border-dark">Inscribirse</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
