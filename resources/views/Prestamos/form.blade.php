<div class="card-body">
    <div class="row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('prestamo.tipo_bien_id', 'Tipo de bien en préstamo: *') !!}</strong>
            {!! Form::select('prestamo[tipo_bien_id]',$selectTipoBien, (isset($prestamo->tipo_bien_id)) ? $prestamo->tipo_bien_id : null,['class'=>'form-control alert-danger',  'id' => 'tipo_bien', 'required' => true, 'placeholder' => 'SELECCIONA UNA OPCIÓN']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="vehiculo">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"><strong>Tipo de vehículo: *</strong></label>
                    {!! Form::select('vehiculos[tipoVehiculo_id]', $vehiculo, isset($vehiculos) ? $vehiculos->tipoVehiculo_id : [],['class'=>'form-control alert-danger',  'id' => 'tipoVehiculo_id', 'placeholder' => 'SELECCIONA UNA OPCIÓN']) !!}
                </div>
            </div>
            <div class="col-lg-4 especifique-otro" id="combo_otro">
                <div class="form-group">
                    <label class="control-label" style="text-align:justify"><strong>Especifique:</strong></label>
                    {!! Form::text('vehiculos[otroVehiculo]',isset($vehiculos) ? $vehiculos->otroVehiculo :null,['class'=>'form-control', 'placeholder'=>'P. ej. Otro',  'id' => 'otroVehiculo']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"><strong>Marca: *</strong></label>
                    {!! Form::text('vehiculos[v_marca]', isset($vehiculos) ? $vehiculos->v_marca : null,['class'=>'form-control', 'placeholder'=>'P. ej. Renault',   'id' => 'v_marca', 'pattern'=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"]) !!}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="ProcessNum"><strong>Modelo: *</strong></label>
                    {!! Form::text('vehiculos[v_modelo]', isset($vehiculos) ? $vehiculos->v_modelo : null,['class'=>'form-control', 'placeholder'=>'P. ej. Clío',   'id' => 'v_modelo', 'pattern' => "[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð0-9-.]{2,48}"]) !!}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="State"><strong>Año: *</strong></label>
                    {!! Form::number('vehiculos[v_ano]', isset($vehiculos) ? $vehiculos->v_ano : null,['class'=>'form-control', 'placeholder'=>'P. ej. 2006',   'id' => 'v_ano', 'max' => date('Y') + 1]) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"><strong>Número de serie o
                            registro: *</strong></label>
                    {!! Form::text('vehiculos[v_num_serie]', isset($vehiculos) ? $vehiculos->v_num_serie : null,['class'=>'form-control', 'placeholder'=>'P. ej. 1HGCM82633A004352',   'id' => 'v_num_serie', 'pattern' => "[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð0-9-.]{2,48}"]) !!}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="ProcessNum"><strong>¿Dónde se encuentra
                            registrado?: *</strong></label>
                    {!! Form::select('vehiculos[lugar_registro]',$registro, isset($vehiculos) ? $vehiculos->lugar_registro : [],['class'=>'form-control', 'id' => 'lugar_registro', 'placeholder' => 'SELECCIONA UNA OPCIÓN']) !!}
                </div>
            </div>
            <div class="col-lg-4">

                <div id="lugarRegistroMx" style="display: none;">
                    <div class="form-group">
                        <label class="control-label" for="NumDoc"><strong>Entidad Federativa: *</strong></label>
                        {!! Form::select('vehiculos[entidades_id]', $selectEntidad, isset($vehiculos) ? $vehiculos->entidades_id : null,['class'=>'form-control', 'placeholder'=>'SELECCIONA UNA OPCIÓN', 'id' => 'entidades_id']) !!}
                    </div>
                </div>
                <div id="lugarRegistroEx" style="display: none;">
                    <div class="form-group">
                        <label class="control-label" for="NumDoc"><strong>País: *</strong></label>
                        {!! Form::select('vehiculos[pais_id]',$pais, isset($vehiculos->pais_id) ? $vehiculos->pais_id : null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'pais_id', 'placeholder' => 'SELECCIONA UNA OPCIÓN']) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"><strong>Dueño o titular: *</strong></label>
                    {!! Form::select('vehiculos[tipoDePersona]', $regimen, isset($vehiculos) ? $vehiculos->tipoDePersona : null,['class'=>'form-control', 'id' => 'dueno_titular', 'placeholder' => 'SELECCIONA UNA OPCIÓN']) !!}
                </div>
            </div>
            <div class="col-lg-4 vehiculo-dueno">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"><strong>Nombre del dueño: *</strong></label>
                    {!! Form::text('vehiculos[v_nombreFisica]', isset($vehiculos) ? $vehiculos->v_nombreFisica : null,['class'=>'form-control', 'placeholder'=>'p. ej. Juan Pérez.','id' => 'v-dueno', 'readOnly' => true]) !!}
                </div>
            </div>
            <div class="col-lg-4 vehiculo-titular">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"><strong>Nombre del titular: *</strong></label>
                    {!! Form::text('vehiculos[v_nombreMoral]', isset($vehiculos) ? $vehiculos->v_nombreMoral : null,['class'=>'form-control', 'placeholder'=>'p. ej. Desarrollo y Redes S.A. de C.V.',   'id' => 'v-titular']) !!}
                </div>
            </div>
            <div class="col-lg-4 fisica">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"><strong>RFC: *</strong></label>
                    {!! Form::text('vehiculos[v_rfcFisica]', isset($vehiculos) ? $vehiculos->v_rfcFisica : null,['class'=>'form-control', 'placeholder'=>'P. ej. XXXX010101',   'id' => 'v-rfc-dueno-fisica', 'pattern' => '([A-Za-z]{4}[0-9]{6}[A-Za-z0-9]{3})' , 'readOnly' => true]) !!}
                </div>
            </div>
            <div class="col-lg-4 moral">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"><strong>RFC: *</strong></label>
                    {!! Form::text('vehiculos[v_rfcMoral]', isset($vehiculos) ? $vehiculos->v_rfcMoral : null,['class'=>'form-control', 'placeholder'=>'P. ej. XXXX010101',   'id' => 'v-rfc-dueno-moral', 'pattern' => '([A-Za-z]{3}[0-9]{6}[A-Za-z0-9]{3})']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="State" style="line-height : 15px !important;">
                        <strong>
                            Relación con el dueño o el títular: *
                        </strong>
                    </label>
                    {!! Form::select('vehiculos[relacion_dueno_titular_id]',$relacion, isset($vehiculos) ? $vehiculos->relacion_dueno_titular_id : [],['class'=>'form-control', 'id' => 'relacion_id', 'placeholder' => 'SELECCIONA UNA OPCIÓN']) !!}
                </div>
            </div>
            <div class="col-lg-4 especifique-relacion">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"><strong>Especifique:</strong></label>
                    {!! Form::text('vehiculos[especifique_relacion_titular]', isset($vehiculos) ? $vehiculos->especifique_relacion_titular : null,['class'=>'form-control', 'placeholder'=>'P. ej. CONOCIDO',   'id' => 'especifique_relacion_titular']) !!}
                </div>
            </div>
        </div>
    </div>
    <div class="inmueble">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <strong>{!! Form::label('especifique', 'Tipo de inmueble: *') !!}</strong>
                    {!! Form::select('bienesinmuebles[tipo_inmueble_id]', $selecttipoInmueble, isset($bienesinmuebles->tipo_inmueble_id) ? $bienesinmuebles->tipo_inmueble_id : null,['class'=>'form-control tipo-titular',  'id' => 'tipo_inmueble_id', 'placeholder' => 'SELECCIONA UNA OPCIÓN', "pattern"=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}"]) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <strong>{!! Form::label('tipo_inmueble', ' Especifique:') !!}</strong>
                    {!! Form::text('bienesinmuebles[tipo_inmueble]',isset($domicilio) ? $domicilio->tipo_inmueble : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. Hacienda',  'id' => 'especifique-inmueble', 'readOnly'  ]) !!}
                </div>
            </div>
            <div class="col-md-4">
                <strong>{!! Form::label('ubicacion_inmueble_id', ' Ubicación del inmueble: *') !!}</strong>
                {!! Form::select('bienesinmuebles[ubicacion_inmueble_id]', isset($selectubicacionInmueble) ? $selectubicacionInmueble : [], isset($bienesinmuebles->ubicacion_inmueble_id) ? $bienesinmuebles->ubicacion_inmueble_id : null, ['class'=>'form-control tipo-titular lugar-inmueble',  'id' => 'lugar-inmueble', 'placeholder' => 'SELECCIONA UNA OPCIÓN']) !!}
            </div>
        </div>
        <div class="domicilio-MXBinmuebles">
            <hr>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <strong>{!! Form::label('domicilio.calle', 'Calle: *') !!}</strong>
                    {!! Form::text('domicilio[calle]',isset($domicilio) ? $domicilio->calle : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. Av. Independencia',  'id' => 'nombre', 'pattern' =>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}", 'title' => "Ingresa la calle" ]) !!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
                <div class="form-group col-md-4">
                    <strong>{!! Form::label('exterior', 'Número exterior: *') !!}</strong>
                    {!! Form::text('domicilio[num_ext]',isset($domicilio->num_int) ? $domicilio->num_ext : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p.ej. 102',  'id' => 'exterior', 'title' => "Ingresa número exterior" ,'pattern' => '[A-Za-z0-9-]{1,8}']) !!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
                <div class="form-group col-md-4">
                    <strong>{!! Form::label('interior', 'Número interior / Piso: *') !!}</strong>
                    {!! Form::text('domicilio[num_int]',isset($domicilio->num_int) ? $domicilio->num_int : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. 5',  'id' => 'interior','pattern' => '[A-Za-z0-9-]{1,8}']) !!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <strong>{!! Form::label('domicilio.colonia', 'Colonia / Localidad: *') !!}</strong>
                    {!! Form::text('domicilio[colonia]',isset($domicilio) ? $domicilio->colonia : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. Centro',  'id' => 'colonia']) !!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
                <div class="form-group col-md-4">
                    <strong>{!! Form::label('domicilio.entidad_id', 'Entidad Federativa: *') !!}</strong>
                    {!! Form::select('domicilio[entidad_id]', $selectEntidad,isset($domicilio->entidad_id) ? $domicilio->entidad_id : null,['class'=>'form-control tipo-titular', 'id' => 'entidad_id', 'placeholder' => 'SELECCIONA UNA OPCIÓN']) !!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
                <div class="form-group col-md-4">
                    <strong>{!! Form::label('domicilio.municipio_id', 'Municipio / Alcaldía: *') !!}</strong>
                    {!! Form::select('domicilio[municipio_id]', isset($selectMunicipio) ? $selectMunicipio : [], isset($domicilio->municipio_id) ? $domicilio->municipio_id : null,['class'=>'form-control', 'id' => 'municipio_id']) !!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <strong>{!! Form::label('domicilio.codigo_postal', 'Código postal: *') !!}</strong>
                    {!! Form::text('domicilio[codigo_postal]',isset($domicilio->codigo_postal) ? $domicilio->codigo_postal : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. 50000',  'id' => 'cp', 'pattern' => '[0-9]{5}']) !!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
            </div>
        </div>

        <div class="domicilio-EXBinmuebles">
            <hr>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <strong>{!! Form::label('domicilioExt.calleExt', 'Calle: *') !!}</strong>
                    {!! Form::text('domicilioExt[calleExt]',isset($domicilio) ? $domicilio->calle : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. Av. Independencia',  'id' => 'nombre', 'pattern' =>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}", 'title' => "Ingresa la calle" ]) !!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
                <div class="form-group col-md-4">
                    <strong>{!! Form::label('domicilioExt.numextExt', 'Número exterior: *') !!}</strong>
                    {!! Form::text('domicilioExt[numextExt]',isset($domicilio) ? $domicilio->num_ext : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p.ej. 102',  'id' => 'num_extExt', 'pattern' => "[A-Za-z0-9-]{1,8}", 'title' => "Ingresa número exterior"]) !!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
                <div class="form-group col-md-4">
                    <strong>{!! Form::label('domicilioExt.numintExt', 'Número interior / Piso: *') !!}</strong>
                    {!! Form::text('domicilioExt[numintExt]',isset($domicilio) ? $domicilio->num_int : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. 5',  'id' => 'numintExt', 'pattern' => "[A-Za-z0-9-]{1,8}"]) !!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <strong>{!! Form::label('domicilioExt.coloniaExt', 'Colonia / Localidad: *') !!}</strong>
                    {!! Form::text('domicilioExt[coloniaExt]',isset($domicilio) ? $domicilio->colonia : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. Centro',  'id' => 'colonia_Ext']) !!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
                <div class="form-group col-md-4">
                    <strong>{!! Form::label('domicilio.pais_id', 'País: *') !!}</strong>
                    {!! Form::select('domicilio[pais_id]', $pais,isset($domicilio) ? $domicilio->pais_id : null,['class'=>'form-control tipo-titular',  'id' => 'pais', 'placeholder' => 'SELECCIONA UNA OPCIÓN']) !!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
                <div class="form-group col-md-4">
                    <strong>{!! Form::label('domicilioExt.estadoprovincia', 'Estado / Provincia: *') !!}</strong>
                    {!! Form::text('domicilioExt[estadoprovincia]',isset($domicilio) ? $domicilio->entidad : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. México',  'id' => 'estado_provincia']) !!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <strong>{!! Form::label('domicilioExt.codigopostalExt', 'Código postal: *') !!}</strong>
                    {!! Form::text('domicilioExt[codigopostalExt]',isset($domicilio) ? $domicilio->codigo_postal : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. 50000',  'id' => 'codigo_postalExt' , 'pattern' => '[A-za-z0-9]{5}']) !!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>{!! Form::label('prestamo.observaciones', ' Aclaraciones/Observaciones: ') !!}</strong>
                {!! Form::textarea('prestamo[observaciones]', isset($prestamo) ? $prestamo->observaciones : null, ['class'=>'form-control alert-danger', 'cols'=>'62', 'rows'=>'5', 'id' => 'observaciones']) !!}
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col">
            <a class="btn btn-submit text-light float-center float-right btn-sm" href="{{route("adeudos.index")}}">Ir a
                la sección anterior</a>
        </div>
        <div class="col">
            {{ Form::button('Guardar e ir a la siguiente sección', ['type' => 'submit', 'class' => 'btn btn-submit text-light float-center btn-sm'] )}}
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
            $(".moral").hide();
            $(".vehiculo-titular").hide();
            $(".form-control").addClass("alert-danger text-uppercase");
            $("#tipo_bien").change(function () {
                const tipo = parseInt($(this).val());
                if (tipo === 3) {
                    $(".vehiculo").show();
                    $(".domicilio-MXBinmuebles").hide();
                    $(".domicilio-EXBinmuebles").hide();
                    $(".inmueble").hide();
                    $(".inmueble").find("select").val("");
                    $(".inmueble").find("input").val("");
                    $(".vehiculo").find("select").prop("required", true);
                    $(".vehiculo").find("input").prop("required", true);
                    $(".inmueble").find("select").prop("required", false);
                    $(".inmueble").find("input").prop("required", false);

                } else if (tipo === 2) {
                    $(".vehiculo").hide();
                    $(".vehiculo").find("select").val("");
                    $(".vehiculo").find("input").val("");
                    $(".inmueble").find("select").prop("required", true);
                    $(".inmueble").find("input").prop("required", true);
                    $(".vehiculo").find("select").prop("required", false);
                    $(".vehiculo").find("input").prop("required", false);
                    $(".inmueble").show();
                }
            });
            $("#tipoVehiculo_id").change(function () {
                const valor = parseInt($(this).val());
                if (valor === 4) {
                    $("#otroVehiculo").prop("required", true);
                    $("#otroVehiculo").prop("readonly", false);
                } else {
                    $("#otroVehiculo").val("");
                    $("#otroVehiculo").prop("required", false);
                    $("#otroVehiculo").prop("readonly", true);
                }
            });
            $("#lugar_registro").change(function () {
                const valor = parseInt($(this).val());
                if (valor === 1) {
                    $("#lugarRegistroMx").show();
                    $("#lugarRegistroEx").hide();
                    $("#lugarRegistroEx").find("select").val("");
                    $("#lugarRegistroEx").find("input").val("");
                    $("#lugarRegistroEx").hide();
                    $("#lugarRegistroMx").find("select").prop("required", true);
                    $("#lugarRegistroEx").find("select").prop("required", false);

                } else if (valor === 2) {
                    $("#lugarRegistroMx").hide();
                    $("#lugarRegistroMx").find("select").val("");
                    $("#lugarRegistroMx").find("input").val("");
                    $("#lugarRegistroEx").show();
                    $("#lugarRegistroMx").find("select").prop("required", false);
                    $("#lugarRegistroEx").find("select").prop("required", true);
                }
            });
            $("#dueno_titular").change(function () {
                const valor = parseInt($(this).val());
                if (valor === 1) {
                    $(".vehiculo-dueno").show();
                    $(".vehiculo-titular").hide();
                    $(".vehiculo-dueno").find("text").val("");
                    $("#v-rfc-dueno-moral").val("");
                    $(".moral").hide();
                    $(".moral").find("text").val("");
                    $(".fisica").show();
                    $(".fisica").find("input").prop("required", true).prop("readonly", false);
                    $(".vehiculo-dueno").find("input").prop("required", true).prop("readonly", false);
                    $(".vehiculo-titular").find("input").prop("required", false);
                    $(".moral").find("input").prop("required", false);
                } else if (!isNaN(valor)) {
                    $(".vehiculo-dueno").hide();
                    $(".vehiculo-titular").show();
                    $(".vehiculo-titular").find("text").val("");
                    $("#v-rfc-dueno-fisica").val("");
                    $(".fisica").hide();
                    $(".moral").show();
                    $(".vehiculo-titular").find("input").prop("required", true);
                    $(".moral").find("input").prop("required", true);
                    $(".fisica").find("input").prop("required", false);
                    $(".vehiculo-dueno").find("input").prop("required", false);
                }
            });
            $('#lugar-inmueble').change(function () {
                if (parseInt($(this).val()) === 1) {
                    $('.domicilio-MXBinmuebles').show();
                    $('.domicilio-EXBinmuebles').hide();
                    $('.domicilio-EXBinmuebles').find("input").val("");
                    $('.domicilio-EXBinmuebles').find("select").val("");
                    $('.domicilio-MXBinmuebles').find("input").prop("required", true);
                    $('.domicilio-MXBinmuebles').find("select").prop("required", true);
                    $('.domicilio-EXBinmuebles').find("input").prop("required", false);
                    $('.domicilio-EXBinmuebles').find("select").prop("required", false);
                } else if (parseInt($(this).val()) === 2) {
                    $('.domicilio-MXBinmuebles').hide();
                    $('.domicilio-EXBinmuebles').show();
                    $('#municipio_id').find("option").remove();
                    $('.domicilio-MXBinmuebles').find("input").val("");
                    $('.domicilio-MXBinmuebles').find("select").val("");
                    $('.domicilio-MXBinmuebles').find("input").prop("required", false);
                    $('.domicilio-MXBinmuebles').find("select").prop("required", false);
                    $('.domicilio-EXBinmuebles').find("input").prop("required", true);
                    $('.domicilio-EXBinmuebles').find("select").prop("required", true);
                } else {
                    $('.domicilio-MXBinmuebles').hide();
                    $('.domicilio-EXBinmuebles').hide();
                    $('.domicilio-EXBinmuebles').find("input").val("");
                    $('.domicilio-EXBinmuebles').find("select").val("");
                    $('.domicilio-MXBinmuebles').find("input").val("");
                    $('.domicilio-MXBinmuebles').find("select").val("");
                    $('#municipio_id').find("option").remove();
                }
            });
            $('.lugar-reside-change').change(function () {
                if (parseInt($(this).val()) === 1) {
                    $('.domicilio-EXBinmuebles').find("input").val("");
                    $('.domicilio-EXBinmuebles').find("select").val("");
                } else if (parseInt($(this).val()) === 2) {
                    $('.domicilio-MXBinmuebles').find("input").val("");
                    $('.domicilio-MXBinmuebles').find("select").val("");
                } else {
                    $('.domicilio-MXBinmuebles').hide();
                    $('.domicilio-EXBinmuebles').hide();
                    $('.domicilio-EXBinmuebles').find("input").val("");
                    $('.domicilio-EXBinmuebles').find("select").val("");
                    $('.domicilio-MXBinmuebles').find("input").val("");
                    $('.domicilio-MXBinmuebles').find("select").val("");
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
                        $("#municipio_id").find('option').remove();
                        $("#municipio_id").append('<option value="">SELECCIONA UNA OPCIÓN</option>');
                        $(response).each(function (i, v) { // indice, valor
                            $("#municipio_id").append('<option value="' + v.id + '">' + v.municipio + '</option>');
                        });
                        $("#municipio_id").prop("required", true);
                    }
                });
            });
            $("#habita-domicilio").change(function () {
                const respuesta = parseInt($(this).val());
                if (respuesta !== 2) {
                    $('.domicilio-MXBinmuebles').hide();
                    $('.domicilio-EXBinmuebles').hide();
                    $('.domicilio-EXBinmuebles').find("input").val("");
                    $('.domicilio-EXBinmuebles').find("select").val("");
                    $('.domicilio-MXBinmuebles').find("input").val("");
                    $('.domicilio-MXBinmuebles').find("select").val("");
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
                    $("#especifique-inmueble").prop("readOnly", false);
                    $("#especifique-inmueble").prop("required", true);
                } else {
                    $("#especifique-inmueble").prop("readonly", true).val("");
                    $("#especifique-inmueble").prop("required", false);

                }
            });

            $("#relacion_id").change(function () {
                let valor = parseInt($(this).val());
                if (valor === 20) {
                    $(".especifique-relacion").find("input").prop("required", true).prop("readOnly", false);
                } else {
                    $(".especifique-relacion").find("input").prop("required", false).prop("readOnly", true).val("");
                }
            });

            @isset($prestamo)
            $("#tipo_bien").change();
            $("#tipoVehiculo_id").change();
            $("#lugar_registro").change();
            $("#dueno_titular").change();
            $('#lugar-inmueble').change();
            $("#habita-domicilio").change();
            $("#tipo_inmueble_id").change();
            $("#relacion_id").change();
            @endisset

        });
    </script>
@endsection

