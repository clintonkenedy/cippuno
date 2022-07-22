

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
            </thead>
            <tbody>
                @foreach ($oficinas as $oficina)
                <tr>
                    <td>{{ $oficina->id }}</td>
                    <td>{{ $oficina->nombre }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
@stop
@section('css')
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
