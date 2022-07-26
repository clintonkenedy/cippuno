

<?php
   
   ?>
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>DASHBOARD</h1>
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>DESDE PRUEBA</h1>
        </div>
    </div>
    <table id="tabla" class="table table-striped mt-2">
            <thead>
                <th>Id</th>
                <th>Nombre</th>
                <th>Otro Id</th>

            </thead>
            <tbody>
                @foreach ($oficinas as $oficina)
                <tr>
                    <td>{{ $oficina->id }}</td>
                    <td>{{ $oficina->nombre }}</td>
                    <td>{{ $oficina->nombre }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <table id="tabla" class="table table-striped mt-2">
            <thead>
                <th> Id tramite</th>
                <th>Tipo de tramite</th>
                <th>asunto</th>

            </thead>
            <tbody>
                @foreach ($tramites as $tramite)
                <tr>
                    <td>{{ $tramite->id }}</td>
                    <td>{{ $tramite->tipo_tramite->nombre}}</td>
                    <td>{{ $tramite->asunto }}</td>
                    
                </tr>
                @endforeach
            </tbody>
            <table id="tabla" class="table table-striped mt-2">
            <thead>
                <th>Tipo de tramite</th>
                <th>id de tramite</th>
            </thead>
            @foreach ($nombre_tramites as $tramitess)
                <tr>
                <td>{{ $tramitess->nombre}}</td>
                <td>{{ $tramitess->id}}</td>
                </tr>

                @endforeach
                </table>
        </table>
        
@stop
@section('css')
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
