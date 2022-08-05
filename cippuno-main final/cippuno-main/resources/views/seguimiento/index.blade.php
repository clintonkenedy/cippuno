@extends('adminlte::page')


@section('template_title')
    Seguimiento
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Editar Seguimiento') }}
                            </span>
<!--
                             <div class="float-right">
                                <a href="{{ route('seguimientos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('CREAR SEG') }}
                                </a>
                              </div>
-->
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

                                        <th>Id de trámite</th>

										<th>Hora</th>

                                        <th>Oficina Origen</th>

                                        <th>Oficina Destino</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($seguimientos as $seguimiento)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $seguimiento['tramite-id']}}</td>

                                            <td>{{ $seguimiento->hora }}</td>
                                    
                                            <td>{{ $seguimiento->oficina_origen }}</td>

                                            <td>{{ $seguimiento->oficina_destino }}</td>

                                            <td>
                                                <form action="{{ route('seguimientos.destroy',$seguimiento->id) }}" method="POST">
                                                    
                                                    <a class="btn btn-sm btn-success" href="{{ route('seguimientos.edit',$seguimiento->id) }}"><i class="fa fa-fw fa-edit"></i> EDITAR</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> ELIMINAR</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $seguimientos->links() !!}
            </div>
        </div>
    </div>
@endsection
