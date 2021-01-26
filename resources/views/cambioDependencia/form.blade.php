<div class="card">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <h6><strong>I)DATOS GENERALES DEL DECLARANTE</strong></h6><br><hr>
                </div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('declaracion.nombre', 'Nombre (s): *') !!}</strong>
            {!! Form::text('cambio[nombre]',$servidor->nombre,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'nombre', 'readonly' => true]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('declaracion.apellidop', 'Primer apellido: *') !!}</strong>
            {!! Form::text('cambio[apellidop]',$servidor->primer_apellido,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'apellidop', 'readonly' => true]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('declaracion.apellidom', 'Segundo apellido:') !!}</strong>
            {!! Form::text('cambio[apellidom]',$servidor->segundo_apellido,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'apellidom', 'readonly' => true]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('declaracion.curp', 'CURP:') !!}</strong>
            {!! Form::text('cambio[curp]',$servidor->curp,['class'=>'form-control text-uppercase',  'id' => 'curp', 'readonly' => true]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('declaracion.rfc', 'RFC:') !!}</strong>
            {!! Form::text('cambio[rfc]',$servidor->rfc,['class'=>'form-control  text-uppercase', 'placeholder'=>'',  'id' => 'rfc', 'readonly' => true]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('declaracion.homoclave', 'Homoclave:') !!}</strong>
            {!! Form::text('cambio[homoclave]',$servidor->homoclave,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'homoclave' , 'readonly' => true]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <strong>{!! Form::label('correo_institucional', 'Correo electrónico laboral:') !!}</strong>
            {!! Form::email('cambio[correo_institucional]',isset($cambio) ? $cambio->correo_institucional: null,['class'=>'form-control text-uppercase', 'placeholder'=>'P. EJ. carlosperez@cddiputados.gob.mx',  'id' => 'correo_institucional','required' => true]) !!}

            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-6">
            <strong>{!! Form::label('declaracion.correo_personal', 'Correo electrónico personal: *') !!}</strong>
            {!! Form::email('cambio[correo_personal]',isset($cambio) ? $cambio->correo_personal: null,['class'=>'form-control text-uppercase', 'placeholder'=>'P. EJ. carlosperez@hotmail.com',  'id' => 'correo_personal','required' => true]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('numero_oficina', 'Número de oficina:') !!}</strong>
            {!! Form::number('cambio[numero_oficina]',isset($cambio) ? $cambio->numero_oficina: null,['class'=>'form-control text-uppercase', 'placeholder'=>'P. EJ. 7222952928',  'id' => 'numero_oficina','required' => true]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('correo_institucional', 'Ext:') !!}</strong>
            {!! Form::number('cambio[ext]',isset($cambio) ? $cambio->ext: null,['class'=>'form-control text-uppercase', 'placeholder'=>'P. EJ. 5005',  'id' => 'ext','required' => true]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('declaracion.correo_personal', 'Número de celular: *') !!}</strong>
            {!! Form::number('cambio[numero_celular]',isset($cambio) ? $cambio->numero_celular: null,['class'=>'form-control text-uppercase', 'placeholder'=>'P. EJ. 7222952928',  'id' => 'numero_celular','required' => true]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>
                {!! Form::label('cambio.situacion_personal_id', 'Estado civil / Situación personal: *') !!}
            </strong>
            {!! Form::select('cambio[situacion_personal_id]', $selectSituacionPersonal,isset($cambio) ? $cambio->situacion_personal_id: [], ['class'=>'form-control', 'id' => 'situacion_personal_id', 'placeholder' => 'SELECCIONA UNA OPCIÓN','required' => true]) !!}
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('declaracion.regimen_matrimonial_id', 'Régimen matrimonial: *') !!}</strong>
            {!! Form::select('cambio[regimen_matrimonial_id]', $selectRegimenMatrimonial,isset($cambio) ? $cambio->regimen_matrimonial_id: [], ['class'=>'form-control', 'id' => 'regimen_matrimonial_id', 'placeholder' => 'SELECCIONA UNA OPCIÓN','required' => true]) !!}
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('declaracion.nacionalidad', 'Nacionalidad: *') !!}</strong>
            {!! Form::text('cambio[nacionalidad]',isset($cambio) ? $cambio->nacionalidad: null,['class'=>'form-control alert-danger', 'placeholder'=>'SELECCIONA UNA OPCIÓN',  'id' => 'nacionalidad','required' => true]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>


    <div id="edit" style="display: none;" class="all text-center">
        <div class="form-row">
            <div class="col">
                {{ Form::button('Guardar', ['type' => 'submit', 'class' => 'btn btn-submit text-light'] )}}
            </div>
        </div>
    </div>
    <div id="crearF"  style="display: none;">
        <div class="text-center">
            <br>
            {{ Form::button('Ir a la sección anterior', ['type' => 'button', 'class' => 'btn btn-submit text-light'] )}}
            {{ Form::button('Guardar e ir a la siguiente sección', ['type' => 'submit', 'class' => 'btn btn-submit text-light'] )}}
        </div>
    </div>

</div>

@section('scripts')
    <script type="text/javascript">
        if ($("#accion").val() == "editar") {
        document.getElementById("edit").style.display = "block";
        document.getElementById("crearF").style.display = "none"
        } else {
        document.getElementById("crearF").style.display = "block";
        document.getElementById("edit").style.display = "none";
        }
    </script>
@endsection
