<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Denomination') }}
            {{ Form::text('den', $category->den, ['class' => 'form-control' . ($errors->has('den') ? ' is-invalid' : ''), 'placeholder' => 'Denomination']) }}
            {!! $errors->first('den', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>