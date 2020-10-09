<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('calle', 'Nivel / Orden de gobierno:') !!}
        {!! Form::text('calle',null,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'nombre']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('exterior', 'Ámbito público:') !!}
        {!! Form::text('exterior',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'exterior']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('interior', 'Nombre del Ente Público:') !!}
        {!! Form::text('interior',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'interior']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('entidad', 'Entidad federativa:') !!}
        {!! Form::text('entidad',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'entidad']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('municipio', 'Municipio / Alcaldía:') !!}
        {!! Form::text('municipio',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'municipio']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('colonia', 'Código postal:') !!}
        {!! Form::text('colonia',null,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'colonia']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-12">
        {!! Form::label('aclaraciones', 'Aclaraciones / Observaciones:') !!}
        {!! Form::textarea('aclaraciones', null, ['class'=>'form-control']) !!}
    </div>
</div>
<div class="form-row">
    <div class="col">
        {{ Form::button('Ir a la sección anterior', ['type' => 'button', 'class' => 'btn btn-submit text-light'] )}}
    </div>
    <div class="col">
        {{ Form::button('Guardar e ir a la siguiente sección', ['type' => 'submit', 'class' => 'btn btn-submit text-light float-right'] )}}
    </div>
</div>
