<div class="card-body">
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('nivel', 'Nivel / Orden de gobierno:') !!}</strong>
            {!! Form::select('datos_empleo_declarante[nivel_gobierno_id]',$nivel,isset($DatoEmpleoDeclarante) ? $DatoEmpleoDeclarante->nivel_gobierno_id :null,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'nivel_gobierno_id', 'disabled' => 'disabled']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('ambito', 'Ámbito público:') !!}</strong>
            {!! Form::select('datos_empleo_declarante[ambito_publico_id]',$ambito,isset($DatoEmpleoDeclarante) ? $DatoEmpleoDeclarante->ambito_publico_id :null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'ambito_publico_id', 'disabled' => 'disabled']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('entepublico', 'Nombre del Ente Público:') !!}</strong>
            {!! Form::text('datos_empleo_declarante[nombre_ente_publico]',isset($DatoEmpleoDeclarante) ? $DatoEmpleoDeclarante->nombre_ente_publico :null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'nombre_ente_publico', 'disabled' => 'disabled']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('adscripcion', 'Área de adscripción:') !!}</strong>
            {!! Form::text('datos_empleo_declarante[area_adscripcion]',isset($DatoEmpleoDeclarante) ? $DatoEmpleoDeclarante->area_adscripcion :null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'area_adscripcion', 'disabled' => 'disabled']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('empleo', 'Empleo, cargo o comisión:') !!}</strong>
            {!! Form::text('datos_empleo_declarante[empleo_cargo]',isset($DatoEmpleoDeclarante) ? $DatoEmpleoDeclarante->empleo_cargo :null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'empleo_cargo', 'disabled' => 'disabled']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('honorarios', '¿Está contratado por honorarios?:') !!}</strong>
            {!! Form::text('datos_empleo_declarante[honorarios]',isset($DatoEmpleoDeclarante) ? $DatoEmpleoDeclarante->honorarios :null,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'honorarios', 'disabled' => 'disabled']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('nivelempleo', 'Nivel del empleo, cargo o comisión:') !!}</strong>
            {!! Form::text('datos_empleo_declarante[nivel_empleo]',isset($DatoEmpleoDeclarante) ? $DatoEmpleoDeclarante->nivel_empleo :null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'nivel_empleo', 'disabled' => 'disabled']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('funcion', 'Especifique función principal: *') !!}</strong>
            {!! Form::text('datos_empleo_declarante[funcion_principal]',isset($DatoEmpleoDeclarante) ? $DatoEmpleoDeclarante->funcion_principal :null,['class'=>'form-control', 'placeholder'=>'p. ej. Desarrollo de sistemas',  'id' => 'funcion_principal', 'required' => 'true']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('fecha', 'Fecha de toma de posesión del empleo, cargo o comisión:') !!}</strong>
            {!! Form::date('datos_empleo_declarante[fecha_posecion_empleo]',isset($DatoEmpleoDeclarante) ? $DatoEmpleoDeclarante->fecha_posecion_empleo :null,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'fecha_posecion_empleo', 'disabled' => 'disabled']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong> {!! Form::label('', 'Teléfono de oficina y extensión: *') !!}</strong>
        </div>
        <div class="form-group col-md-4">
            {!! Form::text('datos_empleo_declarante[telefono_oficina]',isset($DatoEmpleoDeclarante) ? $DatoEmpleoDeclarante->telefono_oficina :null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. 5555555555',  'id' => 'telefono_oficina', 'required' => 'true', 'pattern' => "[0-9]{10}",'title' => "Ingresa el número a 10 dígitos"]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::text('datos_empleo_declarante[extension]',isset($DatoEmpleoDeclarante) ? $DatoEmpleoDeclarante->extension :null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. 555',  'id' => 'extension', 'required' => 'true', 'pattern' => "[0-9]{4}",'title' => "Ingresa el número de extensión a 4 dígitos"]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
</div>
<hr>
<div class="card-body">
    <h5> DOMICILIO DEL EMPLEO, CARGO O COMISIÓN</h5>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('calleempleo', 'Calle: *') !!}</strong>
            {!! Form::text('datos_empleo_declarante[calle]',isset($DatoEmpleoDeclarante) ? $DatoEmpleoDeclarante->calle :null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. Av. Independencia',  'id' => 'calle', 'required' => 'true']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('numexterior', 'Número exterior: *') !!}</strong>
            {!! Form::text('datos_empleo_declarante[numero_exterior]',isset($DatoEmpleoDeclarante) ? $DatoEmpleoDeclarante->numero_exterior :null,['class'=>'form-control', 'placeholder'=>'p. ej. 0101',  'id' => 'numero_exterior', 'required' => 'true']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('numinterior', 'Número interior / Piso: *') !!}</strong>
            {!! Form::text('datos_empleo_declarante[numero_interior_piso]',isset($DatoEmpleoDeclarante) ? $DatoEmpleoDeclarante->numero_interior_piso :null,['class'=>'form-control', 'placeholder'=>'p. ej. 02',  'id' => 'numero_interior_piso', 'required' => 'true']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('colonia', 'Colonia / Localidad: *') !!}</strong>
            {!! Form::text('datos_empleo_declarante[colonia_localidad]',isset($DatoEmpleoDeclarante) ? $DatoEmpleoDeclarante->colonia_localidad :null,['class'=>'form-control', 'placeholder'=>'p. ej. Centro',  'id' => 'colonia_localidad', 'required' => 'true' ]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('municipio', 'Municipio: *') !!}</strong>
            {!! Form::text('datos_empleo_declarante[municipio]',isset($DatoEmpleoDeclarante) ? $DatoEmpleoDeclarante->municipio :null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. Toluca',  'id' => 'municipio', 'required' => 'true']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('entidad', 'Entidad Federativa: *') !!}</strong>
            {!! Form::text('datos_empleo_declarante[entidad_federativa]',isset($DatoEmpleoDeclarante) ? $DatoEmpleoDeclarante->entidad_federativa :null,['class'=>'form-control', 'placeholder'=>'p. ej. 0101',  'id' => 'entidad_federativa', 'disabled' => 'disabled', 'required' => 'true']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>

    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('codigo', 'Código Postal: *') !!}</strong>
            {!! Form::text('datos_empleo_declarante[codigo_postal]',isset($DatoEmpleoDeclarante) ? $DatoEmpleoDeclarante->codigo_postal :null,['class'=>'form-control', 'placeholder'=>'p. ej. 50000',  'id' => 'codigo_postal', 'required' => 'true']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <strong>{!! Form::label('aclaraciones', 'Aclaraciones / Observaciones:') !!}</strong>
            {!! Form::textarea('datos_empleo_declarante[aclaraciones]', isset($DatoEmpleoDeclarante) ? $DatoEmpleoDeclarante->aclaraciones :null, ['class'=>'form-control alert-danger',  'id' => 'aclaraciones']) !!}
        </div>
    </div>
    <br>
    <div class="form-row">
        <div class="form-group col-md-12">
            <strong>{!! Form::label('nota', 'Todos los campos marcados con * son obligatorios.') !!}</strong>
        </div>
    </div>
    <div id="edit" style="display: none;">
        <div class="form-row">
            <div class="col">
                {{ Form::button('Guardar', ['type' => 'submit', 'class' => 'btn btn-submit text-light float-right'] )}}
            </div>
        </div>
    </div>
    <div id="crearF" style="display: none;">
        <div class="form-row">
            <div class="col">
                {{ Form::button('Ir a la sección anterior', ['type' => 'button', 'class' => 'btn btn-submit text-light'] )}}
            </div>
            <div class="col">
                {{ Form::button('Guardar e ir a la siguiente sección', ['type' => 'submit', 'class' => 'btn btn-submit text-light float-right'] )}}
            </div>
        </div>
    </div>
    <br>



@section('scripts')
    <script type="text/javascript">
        if($("#accion").val() == "editar"){
            document.getElementById("edit").style.display="block";
        }else if ($("#accion").val() == "crear"){
            document.getElementById("crearF").style.display="block";
        }
    </script>
@endsection
