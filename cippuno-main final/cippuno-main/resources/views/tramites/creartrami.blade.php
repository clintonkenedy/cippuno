<?php
   $DateAndTime = date('d-m-Y ');
   echo  $DateAndTime;

            ?>

{{ date('Y-m-d',time()) }}
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
<h5 class="card-title text-center">NUEVO TRAMITE</h5>


<div>"" </div>

<form action="{{route('tramites.store')}}" method="POST"  >
  @csrf
  <label for="floatingSelect">Tipo de Tramite</label>
  <div class="form-floating">
  <select class="form-select" id="tipo_tramite_id" name="tipo_tramite_id" aria-label="Floating label select example">
    <option selected>Opciones de Tramites</option>
    <option value="1">Colegiatura</option>
    <option value="2">Certificado Habilidad</option>
    <option value="3">Duplicado de Carnet</option>
    <option value="4">Cambio de Sede</option>
    <option value="5">Certificado Obras Publicas</option>
  </select>
</div>

  <label for="">Id colegiado</label>
  <td><input type="text"  name="nombre_apellido" id="colegiado_id" value="{{ auth()->id(); }}"disabled></td><br>
  <label for="">Asunto</label>
  <textarea class="form-control" rows="3" name="asunto" placeholder="asunto" ></textarea>
  <label for="">Fecha Emision</label>
  <input id="fecha_emi" type="date" name="fecha_emi" placeholder="Fecha Emision" value="{{ date('d/m/Y') }}"><br>
  <label for="">Fecha Recepcion</label>
  <input id="fecha_recep" type="date" name="fecha_recep" placeholder="Fecha Recepcion"><br>
  <label for="formFile" class="form-label">Adjuntar Archivos Necesarios 1</label>
  <input class="form-control" type="file" name="archivo1" id="formFileMultiple" multiple>
  <label for="formFile" class="form-label">Adjuntar Archivos Necesarios 2</label>
  <input class="form-control" type="file" name="archivo2" id="formFileMultiple" multiple>
  <label for="formFile" class="form-label">Adjuntar Archivos Necesarios 3</label>
  <input class="form-control" type="file" name="archivo3" id="formFileMultiple" multiple>
  <label for="formFile" class="form-label">Adjuntar Archivos Necesarios 4</label>
  <input class="form-control" type="file" name="archivo4" id="formFileMultiple" multiple>
  <button class="btn btn-primary" type="submit">Enviar</button>
</form>
@stop
@section('css')
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop




