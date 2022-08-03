@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>DESDE TRAMITES</h1>
            {{-- @foreach($colegiados as $colegiado)
                <p>{{$colegiado->capitulos}}</p>
                <h1>{{$capitulos->last()->colegiados}}</h1>
            @endforeach --}}

        </div>
    </div>
@stop
@section('css')
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop




