<div class="card-body">
    <div class="row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('prestamo.tipo_bien_id', 'Tipo de bien en préstamo: *') !!}</strong>
            {!! Form::select('prestamo[tipo_bien_id]',$selectTipoBien, null,['class'=>'form-control alert-danger',  'id' => 'tipo_bien']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="vehiculo">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"><strong>Tipo de vehículo</strong></label>
                    {!! Form::select('vehiculos[tipoVehiculo_id]', $vehiculo, isset($vehiculos) ? $vehiculos->tipoVehiculo_id : [],['class'=>'form-control alert-danger',  'id' => 'tipoVehiculo_id']) !!}
                </div>
            </div>
            <div class="col-lg-4" id="combo_otro" style="display: block;">
                <div class="form-group">
                    <label class="control-label" style="text-align:justify"><strong>Especifique</strong></label>
                    {!! Form::text('vehiculos[otroVehiculo]',isset($vehiculos) ? $vehiculos->otroVehiculo :null,['class'=>'form-control', 'placeholder'=>'P. ej. Otro', 'disabled'=>'true',  'id' => 'otroVehiculo']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"><strong>Marca</strong>:</label>
                    {!! Form::text('vehiculos[v_marca]', isset($vehiculos) ? $vehiculos->v_marca : null,['class'=>'form-control', 'placeholder'=>'P. ej. Renault',   'id' => 'v_marca']) !!}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="ProcessNum"><strong>Modelo</strong>:</label>
                    {!! Form::text('vehiculos[v_modelo]', isset($vehiculos) ? $vehiculos->v_modelo : null,['class'=>'form-control', 'placeholder'=>'P. ej. Clío',   'id' => 'v_modelo']) !!}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="State"><strong>Año</strong>:</label>
                    {!! Form::text('vehiculos[v_ano]', isset($vehiculos) ? $vehiculos->v_ano : null,['class'=>'form-control', 'placeholder'=>'P. ej. 2006',   'id' => 'v_ano']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"><strong>Número de serie o
                            registro</strong>:</label>
                    {!! Form::text('vehiculos[v_num_serie]', isset($vehiculos) ? $vehiculos->v_num_serie : null,['class'=>'form-control', 'placeholder'=>'P. ej. 1HGCM82633A004352',   'id' => 'v_num_serie']) !!}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="ProcessNum">¿<strong>Dónde se encuentra
                            registrado?</strong></label>
                    {!! Form::select('vehiculos[lugar_registro]',$registro, isset($vehiculos) ? $vehiculos->lugar_registro : [],['class'=>'form-control', 'id' => 'lugar_registro']) !!}
                </div>
            </div>
            <div class="col-lg-4">

                <div id="lugarRegistroMx" style="display: none;">
                    <div class="form-group">
                        <label class="control-label" for="NumDoc"><strong>Entidad Federativa</strong>:</label>
                        {!! Form::text('vehiculos[v_entidadFederativa]', isset($vehiculos) ? $vehiculos->v_entidadFederativa : null,['class'=>'form-control', 'placeholder'=>'P. ej. México',   'id' => 'v_entidadFederativa']) !!}
                    </div>
                </div>
                <div id="lugarRegistroEx" style="display: none;">
                    <div class="form-group">
                        <label class="control-label" for="NumDoc"><strong>País</strong>:</label>
                        {!! Form::select('vehiculos[pais_id]',$pais, isset($vehiculos) ? $vehiculos->pais_id : [],['class'=>'form-control', 'placeholder'=>'',  'id' => 'pais_id']) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"><strong>Dueño o titular:</strong>:</label>
                    {!! Form::select('vehiculos[tipoDePersona]', $regimen, isset($vehiculos) ? $vehiculos->v_num_serie : null,['class'=>'form-control', 'id' => 'dueno_titular']) !!}
                </div>
            </div>
            <div class="col-lg-4 vehiculo-dueno">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"><strong>Nombre del dueño:</strong>:</label>
                    {!! Form::text('vehiculos[v_nombreFisica]', isset($vehiculos) ? $vehiculos->v_num_serie : null,['class'=>'form-control', 'placeholder'=>'p. ej. Juan Pérez.','id' => 'v-dueno', 'disabled' => true]) !!}
                </div>
            </div>
            <div class="col-lg-4 vehiculo-titular">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"><strong>Nombre del titular:</strong>:</label>
                    {!! Form::text('vehiculos[v_nombreMoral]', isset($vehiculos) ? $vehiculos->v_num_serie : null,['class'=>'form-control', 'placeholder'=>'p. ej. Desarrollo y Redes S.A. de C.V.',   'id' => 'v-titular', 'disabled' => true]) !!}
                </div>
            </div>
            <div class="col-lg-4 fisica">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"><strong>RFC:</strong>:</label>
                    {!! Form::text('vehiculos[v_rfcFisica]', isset($vehiculos) ? $vehiculos->v_num_serie : null,['class'=>'form-control', 'placeholder'=>'P. ej. XXXX010101',   'id' => 'v-rfc-dueno-fisica', 'disabled' => true]) !!}
                </div>
            </div>
            <div class="col-lg-4 moral">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"><strong>RFC:</strong>:</label>
                    {!! Form::text('vehiculos[v_rfcMoral]', isset($vehiculos) ? $vehiculos->v_num_serie : null,['class'=>'form-control', 'placeholder'=>'P. ej. XXXX010101',   'id' => 'v-rfc-dueno-moral', 'disabled' => true]) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="State" style="line-height : 15px !important;">
                        <strong>
                            Relación con el dueño o el títular
                        </strong>
                    </label>
                    {!! Form::select('vehiculos[relacion_dueno_titular_id]',$relacion, isset($vehiculos) ? $vehiculos->relacion_id : [],['class'=>'form-control', 'id' => 'relacion_id']) !!}
                </div>
            </div>
        </div>
    </div>
    <div class="inmueble">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <strong>{!! Form::label('tipo_inmueble_id', ' Tipo de inmueble:') !!}</strong>
                    {!! Form::select('bienesinmuebles[tipo_inmueble_id]', $selecttipoInmueble, isset($domicilio) ? $domicilio->tipo_inmueble_id : null,['class'=>'form-control tipo-titular',  'id' => 'tipo_inmueble_id']) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <strong>{!! Form::label('tipo_inmueble', ' Especifique: ') !!}</strong>
                    {!! Form::text('bienesinmuebles[tipo_inmueble]',isset($domicilio) ? $domicilio->tipo_inmueble : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. Hacienda',  'id' => 'especifique-inmueble', 'disabled' => 'true' ]) !!}
                </div>
            </div>
            <div class="col-md-4">
                <strong>{!! Form::label('ubicacion_inmueble_id', ' Ubicación del inmueble:') !!}</strong>
                {!! Form::select('bienesinmuebles[ubicacion_inmueble_id]', isset($selectubicacionInmueble) ? $selectubicacionInmueble : [], isset($domicilio) ? $domicilio->ubicacion_inmueble_id : null, ['class'=>'form-control tipo-titular lugar-inmueble',  'id' => 'lugar-inmueble']) !!}
            </div>
        </div>
        <div class="domicilio-MXBinmuebles">
            <hr>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <strong>{!! Form::label('domicilio.calle', 'Calle:') !!}</strong>
                    {!! Form::text('domicilio[calle]',isset($domicilio) ? $domicilio->calle : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. Av. Independencia',  'id' => 'nombre', 'pattern' =>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}", 'title' => "Ingresa la calle" ]) !!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
                <div class="form-group col-md-4">
                    <strong>{!! Form::label('exterior', 'Número exterior:') !!}</strong>
                    {!! Form::number('domicilio[num_ext]',isset($domicilio->num_int) ? $domicilio->num_ext : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p.ej. 102',  'id' => 'exterior', 'title' => "Ingresa número exterior"]) !!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
                <div class="form-group col-md-4">
                    <strong>{!! Form::label('interior', 'Número interior / Piso: ') !!}</strong>
                    {!! Form::text('domicilio[num_int]',isset($domicilio->num_int) ? $domicilio->num_int : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. 5',  'id' => 'interior']) !!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <strong>{!! Form::label('domicilio.colonia', 'Colonia / Localidad:') !!}</strong>
                    {!! Form::text('domicilio[colonia]',isset($domicilio) ? $domicilio->colonia : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. Centro',  'id' => 'colonia']) !!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
                <div class="form-group col-md-4">
                    <strong>{!! Form::label('domicilio.id', 'Entidad Federativa:') !!}</strong>
                    {!! Form::select('domicilio[entidad_id]', $selectEntidad,isset($domicilio->entidad_id) ? $domicilio->entidad_id : null,['class'=>'form-control tipo-titular', 'id' => 'entidad_id']) !!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
                <div class="form-group col-md-4">
                    <strong>{!! Form::label('domicilio.municipio_id', 'Municipio / Alcaldía:') !!}</strong>
                    {!! Form::select('domicilio[municipio_id]', isset($selectMunicipio) ? $selectMunicipio : [], isset($domicilio->municipio_id) ? $domicilio->municipio_id : null,['class'=>'form-control', 'id' => 'municipio_id']) !!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <strong>{!! Form::label('domicilio.codigo_postal', 'Código postal:') !!}</strong>
                    {!! Form::text('domicilio[codigo_postal]',isset($domicilio->codigo_postal) ? $domicilio->codigo_postal : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. 50000',  'id' => 'cp']) !!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
            </div>
        </div>

        <div class="domicilio-EXBinmuebles">
            <hr>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <strong>{!! Form::label('domicilioExt.calleExt', 'Calle:') !!}</strong>
                    {!! Form::text('domicilioExt[calleExt]',isset($domicilio) ? $domicilio->calle : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. Av. Independencia',  'id' => 'nombre', 'pattern' =>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}", 'title' => "Ingresa la calle" ]) !!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
                <div class="form-group col-md-4">
                    <strong>{!! Form::label('domicilioExt.numextExt', 'Número exterior:') !!}</strong>
                    {!! Form::number('domicilioExt[numextExt]',isset($domicilio) ? $domicilio->num_ext : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p.ej. 102',  'id' => 'num_extExt', 'pattern' => "[0-9]{1-5}", 'title' => "Ingresa número exterior"]) !!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
                <div class="form-group col-md-4">
                    <strong>{!! Form::label('domicilioExt.numintExt', 'Número interior / Piso: ') !!}</strong>
                    {!! Form::text('domicilioExt[numintExt]',isset($domicilio) ? $domicilio->num_int : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. 5',  'id' => 'numintExt']) !!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <strong>{!! Form::label('domicilioExt.coloniaExt', 'Colonia / Localidad:') !!}</strong>
                    {!! Form::text('domicilioExt[coloniaExt]',isset($domicilio) ? $domicilio->colonia : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. Centro',  'id' => 'colonia_Ext']) !!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
                <div class="form-group col-md-4">
                    <strong>{!! Form::label('domicilio.pais_id', 'País:') !!}</strong>
                    {!! Form::select('domicilio[pais_id]', $pais,isset($domicilio) ? $domicilio->entidad_pais : null,['class'=>'form-control tipo-titular',  'id' => 'pais']) !!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
                <div class="form-group col-md-4">
                    <strong>{!! Form::label('domicilioExt.estadoprovincia', 'Estado / Provincia:') !!}</strong>
                    {!! Form::text('domicilioExt[estadoprovincia]',isset($domicilio) ? $domicilio->municipio_provincia : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. México',  'id' => 'estado_provincia']) !!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <strong>{!! Form::label('domicilioExt.codigopostalExt', 'Código postal:') !!}</strong>
                    {!! Form::text('domicilioExt[codigopostalExt]',isset($domicilio) ? $domicilio->codigo_postal : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. 50000',  'id' => 'codigo_postalExt']) !!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>{!! Form::label('observaciones', ' Aclaraciones/Observaciones: ') !!}</strong>
                {!! Form::textarea('observaciones', isset($domicilio) ? $domicilio->observaciones : null, ['class'=>'form-control alert-danger', 'cols'=>'62', 'rows'=>'5', 'id' => 'observaciones']) !!}
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col">
            {{ Form::button('Ir a la sección anterior', ['type' => 'button', 'class' => 'btn btn-submit text-light float-right'] )}}
        </div>
        <div class="col">
            {{ Form::button('Guardar e ir a la siguiente sección', ['type' => 'submit', 'class' => 'btn btn-submit text-light float-center'] )}}
        </div>
    </div>
</div>
@section("scripts")
    <script type="text/javascript">
        $(document).ready(function () {
            $(".vehiculo").hide();
            $(".inmueble").hide();
            $(".domicilio-MXBinmuebles").hide();
            $(".domicilio-EXBinmuebles").hide();
            $(".fisica").hide();
            $(".moral").hide();
            $(".form-control").addClass("alert-danger");
            $("#tipo_bien").change(function () {
                const tipo = parseInt($(this).val());
                if (tipo === 3) {
                    $(".vehiculo").show();
                    $(".domicilio-MXBinmuebles").hide();
                    $(".domicilio-EXBinmuebles").hide();
                    $(".inmueble").hide();
                    $(".inmueble").find("select").val(0);
                    $(".inmueble").find("input").val("");
                } else {
                    $(".vehiculo").hide();
                    $(".vehiculo").find("select").val(0);
                    $(".vehiculo").find("input").val("");
                    $("#otroVehiculo").prop("disabled", true);
                    $(".inmueble").show();
                }
            });
            $("#tipoVehiculo_id").change(function () {
                const valor = parseInt($(this).val());
                if (valor === 4) {
                    $("#otroVehiculo").prop("disabled", false);
                } else {
                    $("#otroVehiculo").prop("disabled", true);
                }
            });
            $("#lugar_registro").change(function () {
                const valor = parseInt($(this).val());
                if (valor === 1) {
                    $("#lugarRegistroMx").show();
                    $("#lugarRegistroEx").hide();
                    $("#lugarRegistroEx").find("select").val(0);
                    $("#lugarRegistroEx").find("input").val("");
                    $("#lugarRegistroEx").hide();

                } else {
                    $("#lugarRegistroMx").hide();
                    $("#lugarRegistroMx").find("select").val(0);
                    $("#lugarRegistroMx").find("input").val("");
                    $("#lugarRegistroEx").show();
                    $("#pais_id").val(0);
                }
            });
            $("#dueno_titular").change(function () {
                $("#v-rfc-dueno-fisica").prop("disabled", false);
                $("#v-rfc-dueno-moral").prop("disabled", false);
                const valor = parseInt($(this).val());
                if (valor === 1) {
                    $(".vehiculo-dueno").show();
                    $(".vehiculo-titular").hide();
                    $(".vehiculo-dueno").find("text").val("");
                    $("#pais_id").val(0);
                    $("#v-dueno").prop("disabled", false);
                    $("#v-titular").prop("disabled", true).val("");
                    $("#v-rfc-dueno-moral").val("");
                    $(".moral").hide();
                    $(".fisica").show();
                } else {
                    $(".vehiculo-dueno").hide();
                    $(".vehiculo-titular").show();
                    $(".vehiculo-titular").find("text").val("");
                    $("#v-dueno").prop("disabled", true).val("");
                    $("#v-rfc-dueno-fisica").val("");
                    $("#v-titular").prop("disabled", false);
                    $(".fisica").hide();
                    $(".moral").show();
                }
            });
            $('#lugar-inmueble').change(function () {
                if (parseInt($(this).val()) === 1) {
                    $('.domicilio-MXBinmuebles').show();
                    $('.domicilio-EXBinmuebles').hide();
                    $('.domicilio-EXBinmuebles').find("input").val("");
                    $('.domicilio-EXBinmuebles').find("select").val(0);
                } else if (parseInt($(this).val()) === 2) {
                    $('.domicilio-MXBinmuebles').hide();
                    $('.domicilio-EXBinmuebles').show();
                    $('#municipio_id').find("option").remove();
                    $('.domicilio-MXBinmuebles').find("input").val("");
                    $('.domicilio-MXBinmuebles').find("select").val(0);
                } else {
                    $('.domicilio-MXBinmuebles').hide();
                    $('.domicilio-EXBinmuebles').hide();
                    $('.domicilio-EXBinmuebles').find("input").val("");
                    $('.domicilio-EXBinmuebles').find("select").val(0);
                    $('.domicilio-MXBinmuebles').find("input").val("");
                    $('.domicilio-MXBinmuebles').find("select").val(0);
                    $('#municipio_id').find("option").remove();
                }
            });
            $('.lugar-reside-change').change(function () {
                if (parseInt($(this).val()) === 1) {
                    $('.domicilio-EXBinmuebles').find("input").val("");
                    $('.domicilio-EXBinmuebles').find("select").val(0);
                } else if (parseInt($(this).val()) === 2) {
                    $('.domicilio-MXBinmuebles').find("input").val("");
                    $('.domicilio-MXBinmuebles').find("select").val(0);
                } else {
                    $('.domicilio-MXBinmuebles').hide();
                    $('.domicilio-EXBinmuebles').hide();
                    $('.domicilio-EXBinmuebles').find("input").val("");
                    $('.domicilio-EXBinmuebles').find("select").val(0);
                    $('.domicilio-MXBinmuebles').find("input").val("");
                    $('.domicilio-MXBinmuebles').find("select").val(0);
                }
            });
            $("#entidad_id").on('change', function () {
                var idEntidad = $(this).val();
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
                        $("#municipio_id").append('<option value="0">SELECCIONA UNA OPCIÓN</option>');
                        $(response).each(function (i, v) { // indice, valor
                            $("#municipio_id").append('<option value="' + v.id + '">' + v.municipio + '</option>');
                        });
                    }
                });
            });
            $("#habita-domicilio").change(function () {
                const respuesta = parseInt($(this).val());
                if (respuesta !== 2) {
                    $('.domicilio-MXBinmuebles').hide();
                    $('.domicilio-EXBinmuebles').hide();
                    $('.domicilio-EXBinmuebles').find("input").val("");
                    $('.domicilio-EXBinmuebles').find("select").val(0);
                    $('.domicilio-MXBinmuebles').find("input").val("");
                    $('.domicilio-MXBinmuebles').find("select").val(0);
                    $("#lugar-reside").val("0");
                    $(".lugar-reside").hide();
                } else {
                    $(".lugar-reside").show();
                    $("#lugar-reside").change();

                }
            });
            $("#tipo_inmueble_id").change(function () {
                const respuesta = parseInt($(this).val());
                if (respuesta === 9) {
                    $("#especifique-inmueble").prop("disabled", false);
                } else {
                    $("#especifique-inmueble").prop("disabled", true).val("");
                }
            });
        });
    </script>
@endsection

