@extends('adminlte::page')


@section('template_title')
    Update Oficina
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">EDITAR OFICINA</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('oficinas.update', $oficina->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('oficina.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
