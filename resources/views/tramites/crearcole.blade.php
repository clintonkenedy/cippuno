@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
<h5 class="card-title text-center">NUEVO PERSONA NATURAL</h5>


<div>"" </div>

<form action="{{route('tramites.crearcole')}}" method="POST"  >
  @csrf
  <label for="">Nombres</label>
  <input id="nombres" type="text"name="nombres" ><br>
  <label for="">DNI</label>
  <input id="dni" type="text"name="dni" ><br>
  <label for="">Codigo Colegiado</label>
  <input class="number" name="codigo_colegiado" placeholder="codigo colegiado" ><br>
  <label for="">Capitulo Id</label>
  <input class="number" name="capitulo_id" placeholder="Capitulo Id" ><br>
  <label for="">Apellido Paterno</label>
  <input id="a_paterno" type="text" name="a_paterno" placeholder="Apellido Paterno"><br>
  <label for="">Apellido Materno</label>
  <input id="a_materno" type="text" name="a_materno" placeholder="Apellido Materno"><br>
  <label for="">Ultimo Pago</label>
  <input id="ultimo_pago" type="date" name="ultimo_pago" placeholder="ultimo pago"><br>
  <label for="">Direccion</label>
  <input id="direccion" type="text" name="direccion" placeholder="direccion"><br>
  <button class="btn btn-primary" type="submit">Enviar</button>
</form>
@stop
@section('css')
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

