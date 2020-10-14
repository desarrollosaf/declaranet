<div class="card-body">
    <div class="form-row">
        <div class="form-group col-md-4">
            {!! Form::label('nivel', 'Nivel / Orden de gobierno:') !!}
            {!! Form::text('nivel',null,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'nivel']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('ambito', 'Ámbito público:') !!}
            {!! Form::text('ambito',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'ambito']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('entepublico', 'Nombre del Ente Público:') !!}
            {!! Form::text('entepublico',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'entepublico']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            {!! Form::label('adscripcion', 'Área de adscripción:') !!}
            {!! Form::text('adscripcion',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'adscripcion']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('empleo', 'Empleo, cargo o comisión:') !!}
            {!! Form::text('empleo',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'empleo']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('honorarios', '¿Está contratado por honorarios?:') !!}
            {!! Form::text('honorarios',null,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'honorarios']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            {!! Form::label('nivelempleo', 'Nivel del empleo, cargo o comisión:') !!}
            {!! Form::text('nivelempleo',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'nivelempleo']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-6">
            {!! Form::label('funcion', 'Especifique función principal:') !!}
            {!! Form::text('funcion',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'funcion']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            {!! Form::label('fecha', 'Fecha de toma de posesión del empleo, cargo o comisión:') !!}
            {!! Form::text('fecha',null,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'fecha']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('telefono', 'Teléfono de oficina:  *:') !!}
            {!! Form::text('telefono',null,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'telefono']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-2">
            {!! Form::label('ext', 'Extensión:  *:') !!}
            {!! Form::text('ext',null,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'ext']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
</div>
<hr>
<div class="card-body">
    <h5> DOMICILIO DEL EMPLEO, CARGO O COMISIÓN</h5>
    <div class="form-row">
        <div class="form-group col-md-3">
            {!! Form::label('calleempleo', 'Calle:') !!}
            {!! Form::text('calleempleo',null,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'calleempleo']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-3">
            {!! Form::label('numexterior', 'Número exterior:') !!}
            {!! Form::text('numexterior',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'numexterior']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-3">
            {!! Form::label('numinterior', 'Número interior / Piso:') !!}
            {!! Form::text('numinterior',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'numinterior']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-3">
            {!! Form::label('colonia', 'Colonia / Localidad:') !!}
            {!! Form::text('colonia',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'colonia']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-5">
            {!! Form::label('municipio', 'Municipio:') !!}
            {!! Form::text('municipio',null,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'municipio']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-5">
            {!! Form::label('entidad', 'Entidad Federativa:') !!}
            {!! Form::text('entidad',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'entidad']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-2">
            {!! Form::label('codigo', 'Código Postal:') !!}
            {!! Form::text('codigo',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'codigo']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            {!! Form::label('aclaraciones', 'Aclaraciones / Observaciones:') !!}
            {!! Form::textarea('aclaraciones', null, ['class'=>'form-control alert-danger']) !!}
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
</div>
