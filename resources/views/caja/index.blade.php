@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>DESDE VENTAS</h1>
        </div>
        <div class="row justify-content-end">
            <button class="btn btn-primary">Nueva Venta</button>
        </div>
        <table id="caja" class="table table-striped mt-2">
            <thead>
                <th>Id</th>
                <th>Numero</th>
                <th>Obs</th>
                <th>Sede</th>
                <th>Forma de Pago</th>
                <th>Tipo de Persona</th>
                <th>Nombres</th>
            </thead>
            <tbody>
                @foreach ($pagos as $pago)
                <tr>
                    <td>{{ $pago->id }}</td>
                    <td>{{ $pago->numero }}</td>
                    <td>{{ $pago->observaciones }}</td>
                    <td>{{ $pago->sede_id }}</td>
                    <td>{{ $pago->forma_pago_id }}</td>
                    @if ($pago->persona_id)
                        <td> <span class="badge bg-warning">Persona Natural</span></td>
                    @else
                    <td> <span class="badge bg-danger">Colegiado</span></td>
                    @endif
                    <td>{{ $pago->persona->nombres ?? $pago->colegiado->nombres ?? 'No Existe registro'}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <h2>Concepto Pago</h2>
        <p>Concepto: {{$conceptos2->nombre}}</p>
        <table id="caja" class="table table-striped mt-2">
            <thead>
            <th>Id</th>
            <th>Numero</th>
            <th>Obs</th>
            <th>Sede</th>
            <th>Forma de Pago</th>
            <th>Tipo de Persona</th>
            <th>Nombres</th>
            </thead>
            <tbody>
            @foreach ($conceptos2->pagos as $pago)
                <tr>
                    <td>{{ $pago->id }}</td>
                    <td>{{ $pago->numero }}</td>
                    <td>{{ $pago->observaciones }}</td>
                    <td>{{ $pago->sede_id }}</td>
                    <td>{{ $pago->forma_pago_id }}</td>
                    @if ($pago->persona_id)
                        <td> <span class="badge bg-warning">Persona Natural</span></td>
                    @else
                        <td> <span class="badge bg-danger">Colegiado</span></td>
                    @endif
                    <td>{{ $pago->persona->nombres ?? $pago->colegiado->nombres ?? 'No Existe registro'}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop
@section('css')
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop




