<div class="card-body">
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('nivel', 'Nivel / Orden de gobierno:') !!}</strong>
            {!! Form::select('datos_empleo_declarante[nivel_gobierno_id]',$nivel,isset($DatoEmpleoDeclarante) ? $DatoEmpleoDeclarante->nivel_gobierno_id :null,['class'=>'form-control text-uppercase',  'id' => 'nivel_gobierno_id', 'disabled' => 'disabled']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('ambito', 'Ámbito público:') !!}</strong>
            {!! Form::select('datos_empleo_declarante[ambito_publico_id]',$ambito,isset($DatoEmpleoDeclarante) ? $DatoEmpleoDeclarante->ambito_publico_id:null,['class'=>'form-control text-uppercase',  'id' => 'ambito_publico_id', 'disabled' => 'disabled']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('entepublico', 'Nombre del Ente Público:') !!}</strong>
            {!! Form::text('datos_empleo_declarante[nombre_ente_publico]',$nombre_entre,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'nombre_ente_publico', 'disabled' => 'disabled']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('adscripcion', 'Área de adscripción:') !!}</strong>
            {!! Form::text('datos_empleo_declarante[area_adscripcion]',$dependencia,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'area_adscripcion', 'disabled' => 'disabled']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('empleo', 'Empleo, cargo o comisión:') !!}</strong>
            {!! Form::text('datos_empleo_declarante[empleo_cargo]',$servidor->cargo,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'empleo_cargo', 'disabled' => 'disabled']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('honorarios', '¿Está contratado por honorarios?:') !!}</strong>
            {!! Form::text('datos_empleo_declarante[honorarios]',$honorarios,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'honorarios', 'disabled' => 'disabled']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('nivelempleo', 'Nivel del empleo, cargo o comisión:') !!}</strong>
            {!! Form::text('datos_empleo_declarante[nivel_empleo]',$servidor->nivel_cargo,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'nivel_empleo', 'disabled' => 'disabled']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('funcion', 'Especifique función principal: *') !!}</strong>
            {!! Form::text('datos_empleo_declarante[funcion_principal]',isset($DatoEmpleoDeclarante) ? $DatoEmpleoDeclarante->funcion_principal :null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. Desarrollo de sistemas',  'id' => 'funcion_principal', 'required' => 'true']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('fecha', 'Fecha de toma de posesión del empleo, cargo o comisión:') !!}</strong>
            {!! Form::date('datos_empleo_declarante[fecha_posecion_empleo]',$fechaInicio,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'fecha_posecion_empleo', 'disabled' => 'disabled']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong> {!! Form::label('', 'Teléfono de oficina y extensión: *') !!}</strong>
        </div>
        <div class="form-group col-md-4">
            {!! Form::text('datos_empleo_declarante[telefono_oficina]',isset($DatoEmpleoDeclarante) ? $DatoEmpleoDeclarante->telefono_oficina :null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. 5555555555',  'id' => 'telefono_oficina', 'required' => 'true', 'pattern' => "[0-9]{10}",'title' => "Ingresa el número a 10 dígitos", 'size'=>"10", 'maxlength'=>"10"]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::text('datos_empleo_declarante[extension]',isset($DatoEmpleoDeclarante) ? $DatoEmpleoDeclarante->extension :null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. 555',  'id' => 'extension', 'required' => 'true', 'pattern' => "[0-9]{4}",'title' => "Ingresa el número de extensión a 4 dígitos", 'size'=>"4", 'maxlength'=>"4"]) !!}
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
            {!! Form::text('datos_empleo_declarante[numero_exterior]',isset($DatoEmpleoDeclarante) ? $DatoEmpleoDeclarante->numero_exterior :null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. 0101',  'id' => 'numero_exterior', 'required' => 'true']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('numinterior', 'Número interior / Piso: ') !!}</strong>
            {!! Form::text('datos_empleo_declarante[numero_interior_piso]',isset($DatoEmpleoDeclarante) ? $DatoEmpleoDeclarante->numero_interior_piso :null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. 02',  'id' => 'numero_interior_piso']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('entidad', 'Entidad Federativa: *') !!}</strong>
            {!! Form::select('datos_empleo_declarante[entidad_federativa_id]',$entidad,isset($DatoEmpleoDeclarante) ? $DatoEmpleoDeclarante->entidad_federativa_id :null,['class'=>'form-control text-uppercase',  'id' => 'entidad_federativa_id',  'required' => 'true']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('municipio', 'Municipio: *') !!}</strong>
            {!! Form::select('datos_empleo_declarante[municipio_id]', isset($DatoEmpleoDeclarante) ?  $selectMunicipio : [], isset($DatoEmpleoDeclarante) ? $DatoEmpleoDeclarante->municipio_id :null,['class'=>'form-control text-uppercase',  'id' => 'municipio_id', 'required' => 'true']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('colonia', 'Colonia / Localidad: *') !!}</strong>
            {!! Form::text('datos_empleo_declarante[colonia_localidad]',isset($DatoEmpleoDeclarante) ? $DatoEmpleoDeclarante->colonia_localidad :null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. Centro',  'id' => 'colonia_localidad', 'required' => 'true' ]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('codigo', 'Código Postal: *') !!}</strong>
            {!! Form::text('datos_empleo_declarante[codigo_postal]',isset($DatoEmpleoDeclarante) ? $DatoEmpleoDeclarante->codigo_postal :null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. 50000',  'id' => 'codigo_postal', 'required' => 'true', 'pattern' => "[0-9]{5}",'title' => "Ingresa el código postal a 5 dígitos", 'size'=>"5", 'maxlength'=>"5"]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <strong>{!! Form::label('aclaraciones', 'Aclaraciones / Observaciones:') !!}</strong>
            {!! Form::textarea('datos_empleo_declarante[aclaraciones]', isset($DatoEmpleoDeclarante) ? $DatoEmpleoDeclarante->aclaraciones :null, ['class'=>'form-control alert-danger',  'id' => 'aclaraciones']) !!}
            <strong>{!! Form::label('nota', 'Todos los campos marcados con * son obligatorios.') !!}</strong>
        </div>
    </div>
    <br>
    {!! Form::hidden('datos_empleo_declarante[tipoOperacion]',$tipoOperacion,['class'=>'form-control text-uppercase','id' => 'tipoOperacion']) !!}


    <div class="all text-center">
            <br>
            <a href="{{route("datos_curriculares_declarante.index")}}" class="btn btn-submit text-light">Ir a la sección anterior</a>
            {{ Form::button('Guardar e ir a la siguiente sección', ['type' => 'submit', 'class' => 'btn btn-submit text-light'] )}}


    </div>
    <br>



@section('scripts')
    <script type="text/javascript">
        if($("#accion").val() == "editar"){
            document.getElementById("edit").style.display="block";
        }else if ($("#accion").val() == "crear"){
            document.getElementById("crearF").style.display="block";
        }

        $("#entidad_federativa_id").on('change', function () {
            alert("entra");
            var idEntidad =document.getElementById("entidad_federativa_id").val;
            alert('funcion '+idEntidad);

            if (parseInt(idEntidad) === 15) {
                $(".foraneo").hide();
            }
            $.ajax({
                url: "{{asset('getMunicipiosDomicilio')}}/" + idEntidad,
                type: 'get',
                dataType: 'json',
                success: function (response) {
                    console.log(response);
                    $("#municipio_id").find('option').remove();
                    $("#municipio_id").append('<option value="">SELECCIONE UNA OPCIÓN</option>');
                    $(response).each(function (i, v) { // indice, valor
                        $("#municipio_id").append('<option value="' + v.id + '">' + v.municipio + '</option>');
                    });
                }
            });
        });
    </script>
@endsection
