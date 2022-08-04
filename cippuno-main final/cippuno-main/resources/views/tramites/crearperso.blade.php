@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
<h5 class="card-title text-center">NUEVO PERSONA NATURAL</h5>


<div>"" </div>

<form action="{{route('tramites.crearperso')}}" method="POST"  >
  @csrf

  <label for="">DNI</label>
  <input id="dni" type="text"name="dni" ><br>
  <label for="">Nombres</label>
  <textarea class="form-control" rows="3" name="nombres" placeholder="nombres" ></textarea>
  <label for="">Apellido Paterno</label>
  <input id="a_paterno" type="text" name="a_paterno" placeholder="Apellido Paterno"><br>
  <label for="">Apellido Materno</label>
  <input id="a_materno" type="text" name="a_materno" placeholder="Apellido Materno"><br>
  <label for="">Email</label>
  <input id="email" type="text" name="email" placeholder="email"><br>
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




