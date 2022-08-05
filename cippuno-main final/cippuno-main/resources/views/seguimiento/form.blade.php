<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('hora') }}
            {{ Form::text('hora', $seguimiento->hora, ['class' => 'form-control' . ($errors->has('hora') ? ' is-invalid' : ''), 'placeholder' => 'hora']) }}
            {!! $errors->first('hora', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('oficina_origen') }}
            {{ Form::text('oficina_origen', $seguimiento->oficina_origen, ['class' => 'form-control' . ($errors->has('oficina_origen') ? ' is-invalid' : ''), 'placeholder' => 'Origen']) }}
            {!! $errors->first('oficina_origen', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('oficina_destino') }}
            {{ Form::text('oficina_destino', $seguimiento->oficina_destino, ['class' => 'form-control' . ($errors->has('oficina_destino') ? ' is-invalid' : ''), 'placeholder' => 'Destino']) }}
            {!! $errors->first('oficina_destino', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">ACEPTAR</button>
    </div>
</div>