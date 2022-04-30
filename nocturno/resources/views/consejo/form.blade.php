<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('animal') }}
            {{ Form::text('animal', $consejo->animal, ['class' => 'form-control' . ($errors->has('animal') ? ' is-invalid' : ''), 'placeholder' => 'Animal']) }}
            {!! $errors->first('animal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('titulo') }}
            {{ Form::text('titulo', $consejo->titulo, ['class' => 'form-control' . ($errors->has('titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
            {!! $errors->first('titulo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('consejo') }}
            {{ Form::text('consejo', $consejo->consejo, ['class' => 'form-control' . ($errors->has('consejo') ? ' is-invalid' : ''), 'placeholder' => 'Consejo']) }}
            {!! $errors->first('consejo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>