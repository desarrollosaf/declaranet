<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('declaracion.nombre', 'Nombre (s):') !!}
        {!! Form::text('declaracion.[nombre]',$servidor->nombre,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'nombre']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('declaracion.apellidop', 'Primer apellido:') !!}
        {!! Form::text('declaracion.[apellidop]',$servidor->primer_apellido,['class'=>'form-control', 'placeholder'=>'',  'id' => 'apellidop']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('declaracion.apellidom', 'Segundo apellido:') !!}
        {!! Form::text('declaracion.[apellidom]',$servidor->segundo_apellido,['class'=>'form-control', 'placeholder'=>'',  'id' => 'apellidom']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('declaracion.curp', 'Curp:') !!}
        {!! Form::text('declaracion.[curp]',$servidor->curp,['class'=>'form-control alert-danger text-uppercase',  'id' => 'curp']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('declaracion.rfc', 'RFC:') !!}
        {!! Form::text('declaracion[rfc]',$servidor->rfc,['class'=>'form-control alert-danger', 'placeholder'=>'',  'id' => 'rfc']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('declaracion.homoclave', 'Homoclave:') !!}
        {!! Form::text('declaracion[homoclave]',$servidor->homoclave,['class'=>'form-control alert-danger', 'placeholder'=>'',  'id' => 'homoclave']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('correo_institucional', 'Correo institucional:') !!}
        {!! Form::text('declaracion[correo_institucional]',$declaracion->correo_institucional,['class'=>'form-control', 'placeholder'=>'',  'id' => 'c_institucional']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('declaracion.correo_personal', 'Correo personal:') !!}
        {!! Form::text('declaracion[correo_personal]',$declaracion->correo_personal,['class'=>'form-control alert-danger', 'placeholder'=>'',  'id' => 'cpersonal']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('declaracion.telefono_casa', 'Número telefónico de casa:') !!}
        {!! Form::text('declaracion[telefono_casa]',$declaracion->telefono_casa,['class'=>'form-control alert-danger', 'placeholder'=>'',  'id' => 'telcasa']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('declaracion.telefono_personal', 'Número de celular personal:') !!}
        {!! Form::text('declaracion[telefono_personal]',$declaracion->telefono_personal,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'celpersonal']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('declaracion.situacion_personal_id', 'Estado civil / Situación personal:') !!}
        {!! Form::select('declaracion[situacion_personal_id]', $selectSituacionPersonal, $declaracion->situacion_personal_id, ['class'=>'form-control alert-danger']) !!}
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('declaracion.regimen_matrimonial_id', 'Régimen matrimonial:') !!}
        {!! Form::select('declaracion[regimen_matrimonial_id]', $selectRegimenMatrimonial, $declaracion->regimen_matrimonial_id, ['class'=>'form-control alert-danger']) !!}
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        {!! Form::label('declaracion.pais_id', 'País de nacimiento:') !!}
        {!! Form::select('declaracion[pais_id]', $paises, $declaracion->pais_id, ['class'=>'form-control alert-danger']) !!}
    </div>
    
    <div class="form-group col-md-6">
        {!! Form::label('declaracion.nacionalidad', 'Nacionalidad:') !!}
        {!! Form::text('declaracion[nacionalidad]',$declaracion->nacionalidad,['class'=>'form-control alert-danger', 'placeholder'=>'',  'id' => 'nacionalidad']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-12">
        {!! Form::label('declaracion.observaciones', 'Aclaraciones / Observaciones:') !!}
        {!! Form::textarea('declaracion[observaciones]', $declaracion->observaciones, ['class'=>'form-control alert-danger']) !!}
    </div>
</div>
<div class="form-row text-center">
    <div class="col">
        {{ Form::button('Envíar', ['type' => 'submit', 'class' => 'btn btn-submit text-light'] )}}
    </div>
</div>