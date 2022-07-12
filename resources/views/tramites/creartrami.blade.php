@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
<h5 class="card-title text-center">NUEVO TRAMITE</h5>


<div>"" </div>

<form action="{{route('tramites.store')}}" method="POST"  >
  @csrf
  <label for="">Tipo de tramite</label>
  <input id="tipo_tramite_id" type="number"name="tipo_tramite_id" placeholder="tipo de tramite"><br>
  <label for="">Asunto</label>
  <input id="asunto" class="form-label" name="asunto" placeholder="asunto"><br>
  <label for="">Fecha Emision</label>
  <input id="fecha_emi" type="date" name="fecha_emi" placeholder="Fecha Emision"><br>
  <label for="">Fecha Recepcion</label>
  <input id="fecha_recep" type="date" name="fecha_recep" placeholder="Fecha Recepcion"><br>
  <button class="btn btn-primary" type="submit">Enviar</button>
</form>
@stop
@section('css')
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop




