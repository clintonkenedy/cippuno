@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>DESDE TRAMITES</h1>
            <p>holaaaa</p>
            <p>{{$colegiados->capitulo}}</p>
        </div>
    </div>
@stop
@section('css')
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop




