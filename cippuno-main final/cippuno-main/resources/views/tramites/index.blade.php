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
    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col">
        <a href="tramites.crear">
          <div class="card card-cover h-100 overflow-hidden text-white bg-red rounded-4 shadow-lg">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Crear nuevo tramite</h2>
              <ul class="d-flex list-unstyled mt-auto">
                </li>
              </ul>
            </div>
          </div>
        </a>
        
      </div>
      <div class="col">
        <a href="tramites.mostrar">
          <div class="card card-cover h-100 overflow-hidden text-white bg-yellow rounded-4 shadow-lg" >
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Ver tus tramites</h2>
              <ul class="d-flex list-unstyled mt-auto">
                </li>
              </ul>
            </div>
          </div>
        </a>
        
      </div>
     
      <div class="col">
        <a href="tramites.oficinas">
          <div class="card card-cover h-100 overflow-hidden text-white bg-green rounded-4 shadow-lg" >
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Seguimiento de tramites</h2>
              <ul class="d-flex list-unstyled mt-auto">
                </li>
              </ul>
            </div>
          </div>
        </a>
        
      </div>
      <div class="col">
        <a href="tramites.crearcole">
          <div class="card card-cover h-100 overflow-hidden text-white bg-blue rounded-4 shadow-lg" >
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Agregar Colegiado</h2>
              <ul class="d-flex list-unstyled mt-auto">
                </li>
              </ul>
            </div>
          </div>
        </a>
        
      </div>
      <div class="col">
        <a href="tramites.crearperso">
          <div class="card card-cover h-100 overflow-hidden text-white bg-orange rounded-4 shadow-lg" >
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Agregar Persona</h2>
              <ul class="d-flex list-unstyled mt-auto">
                </li>
              </ul>
            </div>
          </div>
        </a>
        
      </div>
      <div class="col">
        <a href="tipo-tramite">
          <div class="card card-cover h-100 overflow-hidden text-white bg-red rounded-4 shadow-lg">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Tipos de Tramite</h2>
              <ul class="d-flex list-unstyled mt-auto">
                </li>
              </ul>
            </div>
          </div>
        </a>
        
      </div>
      <div class="col">
        <a href="oficinas">
          <div class="card card-cover h-100 overflow-hidden text-white bg-yellow rounded-4 shadow-lg" >
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Oficinas</h2>
              <ul class="d-flex list-unstyled mt-auto">
                </li>
              </ul>
            </div>
          </div>
        </a>
        
      </div>
      <div class="col">
        <a href="seguimientos">
          <div class="card card-cover h-100 overflow-hidden text-white bg-yellow rounded-4 shadow-lg" >
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Seguimiento</h2>
              <ul class="d-flex list-unstyled mt-auto">
                </li>
              </ul>
            </div>
          </div>
        </a>
        
      </div>

        </div>
    </div>
    
@stop
@section('css')
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop




