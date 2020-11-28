<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('curriculares[nivel_id]', 'Nivel:',['class' => 'validar']) !!}
        {!! Form::select('curriculares[nivel_id]',$nivelesSelect, null,['class'=>'form-control text-uppercase', 'id' => 'nivel_id']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('curriculares[institucion_educativa]', 'Institución educativa:',['class' => 'validar']) !!}
        {!! Form::text('curriculares[institucion_educativa]',null,['class'=>'form-control', 'placeholder'=>'', 'id' => 'institucion_educativa']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('curriculares[carrera_area]', 'Carrera o área de conocimiento:',['class' => 'validar']) !!}
        {!! Form::text('curriculares[carrera_area]',null,['class'=>'form-control', 'placeholder'=>'', 'id' => 'carrera_area']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        {!! Form::label('curriculares[estatus_id]', 'Estatus:',['class' => 'validar']) !!}
        {!! Form::select('curriculares[estatus_id]',$estatusSelect, null,['class'=>'form-control text-uppercase', 'id' => 'estatus_id']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('curriculares[documento_id]', 'Documento obtenido:',['class' => 'validar']) !!}
        {!! Form::select('curriculares[documento_id]',$documentoSelect, null,['class'=>'form-control text-uppercase', 'id' => 'documento_id']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        {!! Form::label('curriculares[fecha_documento]', 'Fecha de obtención de documento:',['class' => 'validar']) !!}
        {!! Form::text('curriculares[fecha_documento]',null,['class'=>'form-control', 'placeholder'=>'', 'id' => 'fecha_documento']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('curriculares[lugar_ubicacion_id]', 'Lugar donde se ubica:',['class' => 'validar']) !!}
        {!! Form::select('curriculares[lugar_ubicacion_id]',$lugaresSelect, null,['class'=>'form-control text-uppercase', 'id' => 'lugar_ubicacion_id']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-12">
        {!! Form::label('curriculares[observaciones]', 'Aclaraciones / Observaciones:') !!}
        {!! Form::textarea('curriculares[observaciones]', null, ['class'=>'form-control alert-danger', 'id' => 'observaciones']) !!}
    </div>
</div>
