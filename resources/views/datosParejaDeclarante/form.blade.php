<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('nombre', 'Nombre (s):') !!}
        {!! Form::text('nombre',null,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'nombre']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('apellidop', 'Primer apellido:') !!}
        {!! Form::text('apellidop',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'apellidop']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('apellidom', 'Segundo apellido:') !!}
        {!! Form::text('apellidom',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'apellidom']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('fechanacimiento', 'Fecha de nacimiento:') !!}
        {!! Form::text('fechanacimiento',null,['class'=>'form-control alert-danger text-uppercase',  'id' => 'fechanacimiento']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('rfc', 'RFC:') !!}
        {!! Form::text('rfc',null,['class'=>'form-control alert-danger', 'placeholder'=>'',  'id' => 'rfc']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('relacion', ' Relación con el Declarante: * :') !!}
        {!! Form::select('relacion', $selectRelacioDeclarante, null,['class'=>'form-control alert-danger',  'id' => 'relacion']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('extranjero', '¿Es ciudadano extranjero? * :') !!}
        {!! Form::select('extranjero', $selectCiudadano, null,['class'=>'form-control text-uppercase',  'id' => 'extranjero']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('curp', 'CURP:') !!}
        {!! Form::text('curp',null,['class'=>'form-control alert-danger', 'placeholder'=>'',  'id' => 'curp']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('dependiente', '¿Es dependiente económico?:') !!}
        {!! Form::text('dependiente',null,['class'=>'form-control alert-danger', 'placeholder'=>'',  'id' => 'dependiente']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        {!! Form::label('habitadomicilio', '¿Habita en el domicilio del Declarante?:') !!}
        {!! Form::text('habitadomicilio',null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'habitadomicilio']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('reside', 'Lugar donde reside:') !!}
        {!! Form::text('reside',null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'reside']) !!}
        <span class="text-danger" style="font-size:150%"></span>
     </div>
</div>
<hr>
<div class="card-body">
    <h5> DOMICILIO DE LA PAREJA </h5>
    <div class="form-row">
        <div class="form-group col-md-3">
            {!! Form::label('calleempleo', 'Calle:') !!}
            {!! Form::text('calleempleo',null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'calleempleo']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-3">
            {!! Form::label('numexterior', 'Número exterior:') !!}
            {!! Form::text('numexterior',null,['class'=>'form-control alert-danger', 'placeholder'=>'',  'id' => 'numexterior']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-3">
            {!! Form::label('numinterior', 'Número interior / Piso:') !!}
            {!! Form::text('numinterior',null,['class'=>'form-control alert-danger', 'placeholder'=>'',  'id' => 'numinterior']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-3">
            {!! Form::label('colonia', 'Colonia / Localidad:') !!}
            {!! Form::text('colonia',null,['class'=>'form-control alert-danger', 'placeholder'=>'',  'id' => 'colonia']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-5">
            {!! Form::label('estado', 'Estado / Provincia: :') !!}
            {!! Form::text('estado',null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'estado']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-5">
            {!! Form::label('pais', 'País::') !!}
            {!! Form::text('pais',null,['class'=>'form-control alert-danger', 'placeholder'=>'',  'id' => 'pais']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-2">
            {!! Form::label('codigo', 'Código Postal:') !!}
            {!! Form::text('codigo',null,['class'=>'form-control alert-danger', 'placeholder'=>'',  'id' => 'codigo']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    </div>
<hr>
<div class="card-body">
    <h5> ACTIVIDAD LABORAL DE LA PAREJA </h5>
    <div class="form-row">
        <div class="form-group col-md-4">
            {!! Form::label('ambito', 'Ámbito / Sector :') !!}
            {!! Form::text('ambito', null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'ambito']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('nivel', 'Nivel / Orden de Gobierno:') !!}
            {!! Form::text('nivel',null,['class'=>'form-control alert-danger', 'placeholder'=>'',  'id' => 'nivel']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('ambitopublico', 'Ámbito Público:') !!}
            {!! Form::text('ambitopublico',null,['class'=>'form-control alert-danger', 'placeholder'=>'',  'id' => 'ambitopublico']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
            {!! Form::label('entepublico', 'Nombre del Ente Público:') !!}
            {!! Form::text('entepublico',null,['class'=>'form-control alert-danger', 'placeholder'=>'',  'id' => 'entepublico']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-3">
            {!! Form::label('area', 'Área de adscripción:') !!}
            {!! Form::text('area',null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'area']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-3">
            {!! Form::label('empleo', 'Empleo, cargo o comisión:') !!}
            {!! Form::text('empleo',null,['class'=>'form-control alert-danger', 'placeholder'=>'',  'id' => 'empleo']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            {!! Form::label('funcion', 'Especifique función principal:') !!}
            {!! Form::text('funcion',null,['class'=>'form-control alert-danger', 'placeholder'=>'',  'id' => 'funcion']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('salario', 'Salario mensual neto:') !!}
            {!! Form::text('salario',null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'salario']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('fechaempleo', 'Fecha de ingreso al empleo:') !!}
            {!! Form::text('fechaempleo',null,['class'=>'form-control alert-danger', 'placeholder'=>'',  'id' => 'fechaempleo']) !!}
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