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
        {!! Form::label('curp', 'Curp:') !!}
        {!! Form::text('curp',null,['class'=>'form-control alert-danger text-uppercase',  'id' => 'curp']) !!}
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
        {!! Form::text('extranjero', $selectRegimenMatrimonial, null,['class'=>'form-control text-uppercase',  'id' => 'extranjero']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('cpersonal', 'Correo personal:') !!}
        {!! Form::text('cpersonal',null,['class'=>'form-control alert-danger', 'placeholder'=>'',  'id' => 'cpersonal']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('telcasa', 'Número telefónico de casa:') !!}
        {!! Form::text('telcasa',null,['class'=>'form-control alert-danger', 'placeholder'=>'',  'id' => 'telcasa']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('celpersonal', 'Número de celular personal:') !!}
        {!! Form::text('celpersonal',null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'celpersonal']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        {!! Form::label('pnacimiento', 'País de nacimiento:') !!}
        {!! Form::text('pnacimiento',null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'pnacimiento']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('nacionalidad', 'Nacionalidad:') !!}
        {!! Form::text('nacionalidad',null,['class'=>'form-control alert-danger', 'placeholder'=>'',  'id' => 'nacionalidad']) !!}
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
