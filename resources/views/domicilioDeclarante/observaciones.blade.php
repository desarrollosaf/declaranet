<div class="form-row">
    <div class="form-group col-md-12">
        {!! Form::label('aclaraciones', 'Aclaraciones / Observaciones:') !!}
        {!! Form::textarea('domicilio[observaciones]', isset($domicilio) ? $domicilio->observaciones : null, ['class'=>'form-control alert-danger']) !!}
        <label><strong>Todos los campos marcados con * son  obligatorios.</strong> </label>
    </div>
</div>
