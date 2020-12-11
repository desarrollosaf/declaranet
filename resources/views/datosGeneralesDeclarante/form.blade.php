<div class="alert alert-danger" role="alert" style="line-height : 23px !important;">
    Los datos de terceros, siempre y cuando sean personas físicas, y los datos resaltados,
    no serán públicos.
</div>

<hr>


<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('declaracion.nombre', 'Nombre (s): *') !!}</strong>
        {!! Form::text('declaracion.[nombre]',$servidor->nombre,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'nombre', 'readonly' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('declaracion.apellidop', 'Primer apellido: *') !!}</strong>
        {!! Form::text('declaracion.[apellidop]',$servidor->primer_apellido,['class'=>'form-control', 'placeholder'=>'',  'id' => 'apellidop', 'readonly' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('declaracion.apellidom', 'Segundo apellido:') !!}</strong>
        {!! Form::text('declaracion.[apellidom]',$servidor->segundo_apellido,['class'=>'form-control', 'placeholder'=>'',  'id' => 'apellidom', 'readonly' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('declaracion.curp', 'Curp:') !!}</strong>
        {!! Form::text('declaracion.[curp]',$servidor->curp,['class'=>'form-control alert-danger text-uppercase',  'id' => 'curp', 'readonly' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('declaracion.rfc', 'RFC:') !!}</strong>
        {!! Form::text('declaracion[rfc]',$servidor->rfc,['class'=>'form-control alert-danger', 'placeholder'=>'',  'id' => 'rfc', 'readonly' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('declaracion.homoclave', 'Homoclave:') !!}</strong>
        {!! Form::text('declaracion[homoclave]',$servidor->homoclave,['class'=>'form-control alert-danger', 'placeholder'=>'',  'id' => 'homoclave' , 'readonly' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('correo_institucional', 'Correo institucional:') !!}</strong>
        {!! Form::email('declaracion[correo_institucional]',$declaracion->correo_institucional,['class'=>'form-control', 'placeholder'=>'',  'id' => 'c_institucional','required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('declaracion.correo_personal', 'Correo personal: *') !!}</strong>
        {!! Form::email('declaracion[correo_personal]',$declaracion->correo_personal,['class'=>'form-control alert-danger', 'placeholder'=>'',  'id' => 'cpersonal','required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('declaracion.telefono_casa', 'Número telefónico de casa: *') !!}</strong>
        {!! Form::text('declaracion[telefono_casa]',$declaracion->telefono_casa,['class'=>'form-control alert-danger', 'placeholder'=>'',  'id' => 'telcasa','required' => true , 'pattern'=>'[0-9]{10}']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('declaracion.telefono_personal', 'Número de celular personal: *') !!}</strong>
        {!! Form::text('declaracion[telefono_personal]',$declaracion->telefono_personal,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'celpersonal','required' => true , 'pattern'=>'[0-9]{10}']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>
            {!! Form::label('declaracion.situacion_personal_id', 'Estado civil / Situación personal: *') !!}
        </strong>
        {!! Form::select('declaracion[situacion_personal_id]', $selectSituacionPersonal, $declaracion->situacion_personal_id, ['class'=>'form-control alert-danger', 'id' => 'situcion']) !!}
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('declaracion.regimen_matrimonial_id', 'Régimen matrimonial: *') !!}</strong>
        {!! Form::select('declaracion[regimen_matrimonial_id]', $selectRegimenMatrimonial, $declaracion->regimen_matrimonial_id, ['class'=>'form-control alert-danger', 'id' => 'regimen', 'disabled' => 'true']) !!}
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <strong>{!! Form::label('declaracion.pais_id', 'País de nacimiento: *') !!}</strong>
        {!! Form::select('declaracion[pais_id]', $paises, $declaracion->pais_id, ['class'=>'form-control alert-danger']) !!}
    </div>

    <div class="form-group col-md-6">
        <strong>{!! Form::label('declaracion.nacionalidad', 'Nacionalidad: *') !!}</strong>
        {!! Form::text('declaracion[nacionalidad]',$declaracion->nacionalidad,['class'=>'form-control alert-danger', 'placeholder'=>'',  'id' => 'nacionalidad','required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-12">
        <strong>{!! Form::label('declaracion.observaciones', 'Aclaraciones / Observaciones:') !!}</strong>
        {!! Form::textarea('declaracion[observaciones]', $declaracion->observaciones, ['class'=>'form-control alert-danger']) !!}
    </div>
</div>
<label><strong>Todos los campos marcados con * son  obligatorios.</strong> </label>
<div class="form-row text-center">
    <div class="col">
        {{ Form::button('Guardar e ir a la siguiente sección', ['type' => 'submit', 'class' => 'btn btn-submit text-light'] )}}
    </div>
</div>
@section("scripts")
    <script type="text/javascript">
        $(document).ready(function(){
            function(){
                if(parseInt($(this).val()) == 2){
                    $("#regimen").prop("disabled", false);
                } else {
                    $("#regimen").prop("disabled", true);
                }
            }
            $("#situcion").change();
        });
    </script>
@endsection
