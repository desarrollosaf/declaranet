<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('nivel', 'Nivel:') !!}
        {!! Form::select('nivel',$nivelesSelect, null,['class'=>'form-control text-uppercase', 'id' => 'nivel']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('inst_educativa', 'Institución educativa:') !!}
        {!! Form::text('inst_educativa',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'inst_educativa']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('carrera', 'Carrera o área de conocimiento:') !!}
        {!! Form::text('carrera',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'carrera']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        {!! Form::label('estatus', 'Estatus:') !!}
        {!! Form::text('estatus',null,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'estatus']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('documento', 'Documento obtenido:') !!}
        {!! Form::text('documento',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'documento']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        {!! Form::label('fechadocumento', 'Fecha de obtención de documento:') !!}
        {!! Form::text('fechadocumento',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'fechadocumento']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('lugarubicacion', 'Lugar donde se ubica:') !!}
        {!! Form::text('lugarubicacion',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'lugarubicacion']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-12">
        {!! Form::label('aclaraciones', 'Aclaraciones / Observaciones:') !!}
        {!! Form::textarea('aclaraciones', null, ['class'=>'form-control alert-danger']) !!}
    </div>
</div>
<div class="form-row text-center">
    <div class="col">
        {{ Form::button('Envíar', ['type' => 'submit', 'class' => 'btn btn-submit text-light'] )}}
    </div>
</div>
