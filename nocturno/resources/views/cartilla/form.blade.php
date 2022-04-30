<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('animales_id') }}
            {{ Form::select('animales_id',$animales, $cartilla->animales_id, ['class' => 'form-control' . ($errors->has('animales_id') ? ' is-invalid' : ''), 'placeholder' => 'Animales Id']) }}
            {!! $errors->first('animales_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $cartilla->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nacimiento') }}
            {{ Form::text('nacimiento', $cartilla->nacimiento, ['class' => 'form-control' . ($errors->has('nacimiento') ? ' is-invalid' : ''), 'placeholder' => 'Nacimiento']) }}
            {!! $errors->first('nacimiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('peso') }}
            {{ Form::text('peso', $cartilla->peso, ['class' => 'form-control' . ($errors->has('peso') ? ' is-invalid' : ''), 'placeholder' => 'Peso']) }}
            {!! $errors->first('peso', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>