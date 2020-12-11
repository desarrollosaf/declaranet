<h5>ÚLTIMO GRADO DE ESTUDIOS</h5>
<hr>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong> {!! Form::label('curriculares[nivel_id]', 'Nivel: *',['class' => 'validar']) !!}</strong>
        {!! Form::select('curriculares[nivel_id]',$nivelesSelect, isset($curricular) ? $curricular->nivel_id : null ,['class'=>'form-control text-uppercase', 'id' => 'nivel_id']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>  {!! Form::label('curriculares[institucion_educativa]', 'Institución educativa: *',['class' => 'validar']) !!}</strong>
        {!! Form::text('curriculares[institucion_educativa]',isset($curricular) ? $curricular->institucion_educativa : null,['class'=>'form-control', 'placeholder'=>'', 'id' => 'institucion_educativa']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('curriculares[carrera_area]', 'Carrera o área de conocimiento: *',['class' => 'validar']) !!}</strong>
        {!! Form::text('curriculares[carrera_area]',isset($curricular) ? $curricular->carrera_area : null,['class'=>'form-control', 'placeholder'=>'', 'id' => 'carrera_area']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong> {!! Form::label('curriculares[estatus_id]', 'Estatus: *',['class' => 'validar']) !!}</strong>
        {!! Form::select('curriculares[estatus_id]',$estatusSelect, isset($curricular) ? $curricular->estatus_id : null,['class'=>'form-control text-uppercase', 'id' => 'estatus_id']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('curriculares[documento_id]', 'Documento obtenido: *',['class' => 'validar']) !!}</strong>
        {!! Form::select('curriculares[documento_id]',$documentoSelect, isset($curricular) ? $curricular->documento_id : null,['class'=>'form-control text-uppercase', 'id' => 'documento_id']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong> {!! Form::label('curriculares[fecha_documento]', 'Fecha de obtención de documento: *',['class' => 'validar']) !!}</strong>
        {!! Form::date('curriculares[fecha_documento]',isset($curricular) ? $curricular->fecha_documento : null,['class'=>'form-control', 'placeholder'=>'', 'id' => 'fecha_documento']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">

    <div class="form-group col-md-4">
        <strong> {!! Form::label('curriculares[lugar_ubicacion_id]', 'Lugar donde se ubica: *',['class' => 'validar']) !!}</strong>
        {!! Form::select('curriculares[lugar_ubicacion_id]',$lugaresSelect, isset($curricular) ? $curricular->lugar_ubicacion_id : null,['class'=>'form-control text-uppercase', 'id' => 'lugar_ubicacion_id']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-12">
        <strong>{!! Form::label('curriculares[observaciones]', 'Aclaraciones / Observaciones: *') !!}</strong>
        {!! Form::textarea('curriculares[observaciones]', isset($curricular) ? $curricular->observaciones : null, ['class'=>'form-control alert-danger', 'id' => 'observaciones']) !!}
        <label class="requerido">&nbsp;Todos los campos marcados con * son obligatorios. </label>
    </div>
</div>
