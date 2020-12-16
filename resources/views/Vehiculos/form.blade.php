<div class="card">

    <!-- Cuerpo del documento -->
    <div class="card-body">
        <div class="alert alert-danger" role="alert" style="line-height : 23px !important;">
            Todos los datos de vehículos declarados a nombre de la pareja, dependientes económicos y/o terceros o que
            sean en copropiedad con el declarante no serán públicos.<br>
        </div>

        <hr>

        <!-- Primera fila  -->
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="control-label" for="NumDoc"><strong>Tipo de vehículo</strong></label>
                        {!! Form::select('vehiculos[tipoVehiculo_id]', $vehiculo, isset($vehiculos) ? $vehiculos->tipoVehiculo_id : [],['class'=>'form-control',  'id' => 'tipoVehiculo_id', 'required' => true, 'placeholder' => 'SELECCIONA UNA OPCION']) !!}
                    </div>
                </div>

                <div class="col-lg-4" id="combo_otro" style="display: block;">
                    <div class="form-group">
                        <label class="control-label" style="text-align:justify"><strong>Especifique</strong></label>
                        {!! Form::text('vehiculos[otroVehiculo]',isset($vehiculos) ? $vehiculos->otroVehiculo :null,['class'=>'form-control', 'placeholder'=>'P. ej. Otro', 'disabled'=>'disabled',  'id' => 'otroVehiculo']) !!}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="control-label" for="ProcessNum"><strong>Titular del vehículo</strong></label>
                        {!! Form::select('vehiculos[titular_id]', $titular, isset($vehiculos) ? $vehiculos->titular_id : [],['class'=>'form-control', 'placeholder' => 'SELECCIONA UNA OPCION',  'id' => 'titular_id', 'required' => true]) !!}

                    </div>

                    <div class="col-lg-4">
                    </div>
                </div>
            </div>

            <div id="difDec">
                <div id="titular_tercero" style="display: none;">
                    <hr>
                    <!-- SEGUNDA  fila  TERCERO-->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="control-label" for="NumDoc"><strong>Tipo de Tercero</strong></label>
                                    {!! Form::select('vehiculos[tipoPersonaTercero]', $regimen, isset($vehiculos) ? $vehiculos->tipoPersonaTercero : [],['class'=>'form-control',  'id' => 'tipoPersonaTercero', 'placeholder' => 'SELECCIONA UNA OPCION', 'required' => true]) !!}
                                </div>
                            </div>

                            <div class="col-lg-4" id="disabledNombre">
                                <div class="form-group">
                                    <label class="control-label" for="NumDoc"><strong>Nombre del tercero</strong></label>
                                    <input type="text" class="form-control" placeholder="p. ej. Juan Robles Rosas" title="Ingresa nombre completo">
                                </div>
                            </div>

                            <div class="col-lg-4" id="disabledRFC">
                                <div class="form-group">
                                    <label class="control-label" for="NumDoc"><strong>RFC</strong> </label>
                                    <input type="text" class="form-control" disabled="" placeholder="p. ej. Juan Robles Rosas" title="Ingresa nombre completo" id="rfcTransmisor">
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div id="pFisica" style="display: none;">
                                    <div class="form-group">
                                        <label class="control-label" for="NumDoc"><strong>Nombre del tercero</strong></label>
                                        {!! Form::text('vehiculos[bieniTerceroNombreF]',isset($vehiculos) ? $vehiculos->bieniTerceroNombreF :null,['class'=>'form-control', 'placeholder'=>'P. ej. Juan Robles Rosas',   'id' => 'bieniTerceroNombreF', 'pattern'=> "[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.-]{2,50}", "title" => "Ingresa nombre completo", 'required' => true ]) !!}
                                    </div>
                                </div>
                                <div id="pMoral" style="display: none;">
                                    <div class="form-group">
                                        <label class="control-label" for="NumDoc"><strong>Razón social</strong></label>
                                        {!! Form::text('vehiculos[bieniTerceroNombreM]',isset($vehiculos) ? $vehiculos->bieniTerceroNombreM : null,['class'=>'form-control', 'placeholder'=>'P. ej. Juan Robles Rosas',   'id' => 'bieniTerceroNombreM', 'pattern'=> "[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.-]{2,50}", "title" => "Ingresa nombre completo", 'required' => true ]) !!}

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div id="pFisicaRfc" style="display: none;">
                                    <div class="form-group">
                                        <label class="control-label" for="ProcessNum"><strong>RFC</strong> </label>
                                        {!! Form::text('vehiculos[bieniTerceroRfcF]', isset($vehiculos) ? $vehiculos->bieniTerceroRfcF : null,['class'=>'form-control', 'placeholder'=>'P. ej. XXXX010101XXX',   'id' => 'bieniTerceroRfcF','size' => '13', 'maxlength'=>"13", 'pattern' => "([A-Z]{4}([0-9]{6}[A-Z0-9]{3})", 'title' => "Ingresa RFC a 13 dígitos", 'required' => true]) !!}
                                    </div>
                                </div>
                                <div id="pMoralRfc" style="display: none;">
                                    <div class="form-group">
                                        <label class="control-label" for="ProcessNum"><strong>RFC</strong></label>
                                        {!! Form::text('vehiculos[bieniTerceroRfcM]', isset($vehiculos) ? $vehiculos->bieniTerceroRfcM : null,['class'=>'form-control', 'placeholder'=>'P. ej. XXXX010101XX',   'id' => 'bieniTerceroRfcM', 'size' => '12', 'maxlength'=>"12", 'pattern' => "([A-Z]{4}([0-9]{6}[A-Z0-9]{2})", 'title' => "Ingresa RFC a 12 dígitos", 'required' => true ]) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <hr>
                    <div class="row">

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="control-label" for="ProcessNum"><strong>Tipo de transmisor</strong></label>
                                {!! Form::select('vehiculos[tipoDePersona]', $regimen, isset($vehiculos) ? $vehiculos->tipoDePersona : [],['class'=>'form-control',  'id' => 'tipoDePersona', 'placeholder' => 'SELECCIONA UNA OPCION', 'required' => true]) !!}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <div id="terceroNombreFisica" style="display: block;">
                                    <label class="control-label" for="NumDoc"><strong>Nombre del transmisor de la
                                            propiedad:</strong></label>
                                    {!! Form::text('vehiculos[v_nombreFisica]', isset($vehiculos) ? $vehiculos->v_nombreFisica : null,['class'=>'form-control alert-danger', 'placeholder'=>'P. ej. Carlos Pérez Pérez',   'id' => 'v_nombreFisica', 'disabled' => 'disabled' ]) !!}
                                </div>
                                <div id="terceroNombreMoral" style="display: none;">
                                    <label class="control-label" for="NumDoc"><strong>Razón social del transmisor:</strong></label>
                                    {!! Form::text('vehiculos[v_nombreMoral]', isset($vehiculos) ? $vehiculos->v_nombreMoral : null,['class'=>'form-control alert-danger', 'placeholder'=>'P. ej. Carlos Pérez Pérez',   'id' => 'v_nombreMoral']) !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <div id="terceroFisicaTra" style="display: block;">
                                    <label class="control-label" for="ProcessNum"><strong>RFC: </strong></label>
                                    {!! Form::text('vehiculos[v_rfcFisica]', isset($vehiculos) ? $vehiculos->v_rfcFisica : null,['class'=>'form-control alert-danger', 'placeholder'=>'P. ej. XAXX010101XAXAXA01',   'id' => 'v_rfcFisica', 'maxlength'=>"13", 'pattern' => "([A-Z]{4}([0-9]{6}[A-Z0-9]{3})", 'title' => "Ingresa RFC a 13 dígitos", 'disabled' => "disabled"  ]) !!}
                                </div>
                                <div id="terceroMoralTra" style="display: none;">
                                    <label class="control-label" for="ProcessNum"><strong>RFC: </strong></label>
                                    {!! Form::text('vehiculos[v_rfcMoral]', isset($vehiculos) ? $vehiculos->v_rfcMoral : null,['class'=>'form-control alert-danger', 'placeholder'=>'P. ej. XXX010101X0X',   'id' => 'v_rfcMoral', 'maxlength'=>"13", 'pattern' => "([A-Z]{4}([0-9]{6}[A-Z0-9]{3})", 'title' => "Ingresa RFC a 12 dígitos"]) !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="control-label" for="State" style="line-height : 15px !important;"><strong>Relación
                                        del transmisor del vehículo con el titular:</strong></label>
                                {!! Form::select('vehiculos[relacion_id]',$relacion, isset($vehiculos) ? $vehiculos->relacion_id : [],['class'=>'form-control',  'id' => 'relacion_id', 'placeholder' => 'SELECCIONA UNA OPCION','required' => true]) !!}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SEPTIMA fila  -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="control-label" for="NumDoc"><strong>Marca</strong>:</label>
                                {!! Form::text('vehiculos[v_marca]', isset($vehiculos) ? $vehiculos->v_marca : null,['class'=>'form-control', 'placeholder'=>'P. ej. Renault',   'id' => 'v_marca','required' => true]) !!}
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="control-label" for="ProcessNum"><strong>Modelo</strong>:</label>
                                {!! Form::text('vehiculos[v_modelo]', isset($vehiculos) ? $vehiculos->v_modelo : null,['class'=>'form-control', 'placeholder'=>'P. ej. Clío',   'id' => 'v_modelo','required' => true]) !!}
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="control-label" for="State"><strong>Año</strong>:</label>
                                {!! Form::text('vehiculos[v_ano]', isset($vehiculos) ? $vehiculos->v_ano : null,['class'=>'form-control', 'placeholder'=>'P. ej. 2006',   'id' => 'v_ano','required' => true]) !!}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SEPTIMA fila  -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="control-label" for="NumDoc"><strong>Número de serie o
                                        registro</strong>:</label>
                                {!! Form::text('vehiculos[v_num_serie]', isset($vehiculos) ? $vehiculos->v_num_serie : null,['class'=>'form-control', 'placeholder'=>'P. ej. 1HGCM82633A004352',   'id' => 'v_num_serie' ,'required' => true]) !!}
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="control-label" for="ProcessNum">¿<strong>Dónde se encuentra
                                        registrado?</strong></label>
                                {!! Form::select('vehiculos[lugar_registro]',$registro, isset($vehiculos) ? $vehiculos->lugar_registro : [],['class'=>'form-control', 'placeholder' => 'SELECCIONA UNA OPCION',  'id' => 'lugar_registro' ,'required' => true]) !!}
                            </div>
                        </div>
                        <div class="col-lg-4">

                            <div id="lugarRegistroMx" style="display: block;">
                                <div class="form-group">
                                    <label class="control-label" for="NumDoc"><strong>Entidad
                                            Federativa</strong>:</label>
                                    {!! Form::select('vehiculos[entidades_id]',$entidad, isset($vehiculos) ? $vehiculos->entidades_id : [],['class'=>'form-control', 'placeholder' => 'SELECCIONA UNA OPCION',  'id' => 'entidades_id','required' => true]) !!}
                                </div>
                            </div>
                            <div id="lugarRegistroEx" style="display: none;">
                                <div class="form-group">
                                    <label class="control-label" for="NumDoc"><strong>País</strong>:</label>
                                    {!! Form::select('vehiculos[pais_id]',$pais, isset($vehiculos) ? $vehiculos->pais_id : [],['class'=>'form-control', 'placeholder' => 'SELECCIONA UNA OPCION',  'id' => 'pais_id','required' => true]) !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SEPTIMA fila  -->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="control-label" for="NumDoc"><strong>Forma de adquisición</strong>:</label>
                                {!! Form::select('vehiculos[tipo_adquisicion_id]',$tipoAdquisicion, isset($vehiculos) ? $vehiculos->tipo_adquisicion_id : [],['class'=>'form-control', 'placeholder' => 'SELECCIONA UNA OPCION',  'id' => 'tipo_adquisicion_id','required' => true]) !!}
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="control-label" for="ProcessNum"><strong>Forma de pago</strong>:</label>
                                {!! Form::select('vehiculos[pago_id]',$pago, isset($vehiculos) ? $vehiculos->pago_id : [],['class'=>'form-control', 'placeholder' => 'SELECCIONA UNA OPCION',  'id' => 'pago_id','required' => true]) !!}
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="control-label" for="State"><strong>Valor de adquisición del vehículo</strong>:</label>
                                {!! Form::text('vehiculos[v_valor]', isset($vehiculos) ? $vehiculos->v_valor : null,['class'=>'form-control', 'placeholder'=>'P. ej. 100000.00 Mxn',   'id' => 'v_valor','required' => true]) !!}
                            </div>
                        </div>
                    </div>
                    <!-- SEPTIMA fila  -->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="control-label" for="NumDoc"><strong>Tipo de moneda</strong>:</label>
                                {!! Form::select('vehiculos[tipo_monedas_id]',$moneda, isset($vehiculos) ? $vehiculos->tipo_monedas_id : [],['class'=>'form-control', 'placeholder' => 'SELECCIONA UNA OPCION',  'id' => 'tipo_monedas_id','required' => true]) !!}
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="control-label" for="ProcessNum"><strong>Fecha de adquisición del vehículo</strong>:</label>
                                {!! Form::date('vehiculos[v_fecha]', isset($vehiculos) ? $vehiculos->v_fecha : null,['class'=>'form-control', 'placeholder'=>'P. ej. Peso mexicano',   'id' => 'v_fecha','required' => true]) !!}
                            </div>
                        </div>

                    </div>
                </div>
                <!-- SEPTIMA fila  -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <strong>Aclaraciones/Observaciones</strong>:</label>
                                {!! Form::textarea('vehiculos[v_aclaraciones]', isset($vehiculos) ? $vehiculos->v_aclaraciones : null,['class'=>'form-control alert-danger',  'id' => 'v_aclaraciones']) !!}
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Botones  -->
                <div id="edit" style="display: none;">
                    <div class="form-row">
                        <div class="col">
                            {{ Form::button('Guardar', ['type' => 'submit', 'class' => 'btn btn-submit text-light float-right'] )}}
                        </div>
                    </div>
                </div>
                <div id="crearF"  style="display: none;">
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
            </div>
        </div>


        @section('scripts')
            <script type="text/javascript">
                $("#tipoVehiculo_id").on("change", function () {
                    var tipoVehiculo_id = document.getElementById("tipoVehiculo_id").value
                    if (tipoVehiculo_id == 4) {
                        $("#otroVehiculo").prop("disabled", false);
                        $("#otroVehiculo").prop("required",true);
                    } else {
                        $("#otroVehiculo").prop("disabled", true);
                        $("#otroVehiculo").val("");
                        $("#otroVehiculo").prop("required",false);
                    }
                });
                $("#tipoDePersona").on("change", function () {
                    var tipoDePersona = document.getElementById("tipoDePersona").value
                    if (tipoDePersona == 1) {
                        $("#v_nombreFisica").prop("disabled", false);
                        $("#v_rfcFisica").prop("disabled", false);
                        document.getElementById("terceroNombreFisica").style.display = "block";
                        document.getElementById("terceroNombreMoral").style.display = "none";
                        document.getElementById("terceroFisicaTra").style.display = "block";
                        document.getElementById("terceroMoralTra").style.display = "none";
                        $("#v_nombreMoral").val("");
                        $("#v_nombreMoral").prop("required",false);
                        $("#v_rfcMoral").val("");
                        $("#v_rfcMoral").prop("required",false);
                    } else if (tipoDePersona == 2) {
                        $("#v_nombreFisica").prop("disabled", true);
                        $("#v_rfcFisica").prop("disabled", true);
                        $("#v_nombreFisica").val("");
                        $("#v_rfcFisica").val("");
                        document.getElementById("terceroNombreFisica").style.display = "none";
                        document.getElementById("terceroNombreMoral").style.display = "block";
                        document.getElementById("terceroFisicaTra").style.display = "none";
                        document.getElementById("terceroMoralTra").style.display = "block";
                        $("#v_nombreFisica").val("");
                        $("#v_nombreFisica").prop("required",false);
                        $("#v_rfcFisica").val("");
                        $("#v_rfcFisica").prop("required",false);
                    } else {
                        $("#v_nombreFisica").prop("disabled", true);
                        $("#v_rfcFisica").prop("disabled", true);
                        document.getElementById("terceroNombreFisica").style.display = "block";
                        document.getElementById("terceroNombreMoral").style.display = "none";
                        document.getElementById("terceroFisicaTra").style.display = "block";
                        document.getElementById("terceroMoralTra").style.display = "none";
                        $("#v_nombreMoral").val("");
                        $("#v_nombreMoral").prop("required",false);
                        $("#v_rfcMoral").val("");
                        $("#v_rfcMoral").prop("required",false);
                    }
                });
                $("#lugar_registro").on("change", function () {
                    var dsp_D_extranjero = document.getElementById("lugar_registro").value
                    if (dsp_D_extranjero == 1) {
                        $("#entidades_id").prop("disabled", false);
                        document.getElementById("lugarRegistroMx").style.display = "block";
                        document.getElementById("lugarRegistroEx").style.display = "none";
                    } else if (dsp_D_extranjero == 2) {
                        $("#entidades_id").prop("disabled", true);
                        $("#entidades_id").val("");
                        document.getElementById("lugarRegistroEx").style.display = "block";
                        document.getElementById("lugarRegistroMx").style.display = "none";
                    }
                });

                $("#titular_id").on("change", function () {
                    var dsp_D_titular = document.getElementById("titular_id").value
                    if (dsp_D_titular != 1) {
                        $("#difDec").find("select").prop("class", "form-control alert-danger");
                        $("#difDec").find("input").prop("class", "form-control alert-danger");
                        $("#submit").prop("class", "btn btn-secondary");

                    } else {
                        $("#difDec").find("select").prop("class", "form-control");
                        $("#difDec").find("input").prop("class", "form-control");
                        $("#submit").prop("class", "btn btn-secondary");
                        $("#tipoDePersona").on("change", function () {
                            var tipoDePersona = document.getElementById("tipoDePersona").value
                            if (tipoDePersona == 1) {
                                $("#v_nombreFisica").prop("class", "form-control alert-danger");
                                $("#v_rfcFisica").prop("class", "form-control alert-danger");
                                $("#relacion_id").prop("class", "form-control alert-danger");
                                $("#submit").prop("class", "btn btn-secondary");
                            }
                        });
                    }
                    var op = dsp_D_titular;
                    if (op == 3 || op == 4 || op == "DCCCT" || op == 6 || op == 8 || op == 10 || op == 13 || op == 15 || op == 18 || op == 19) {
                        document.getElementById("titular_tercero").style.display = "block";
                    } else {
                        document.getElementById("titular_tercero").style.display = "none";
                        $("#tipoPersonaTercero").val("");
                        $("#bieniTerceroNombreF").val("");
                        $("#bieniTerceroNombreM").val("");
                        $("#bieniTerceroRfcF").val("");
                        $("#bieniTerceroRfcM").val("");

                        $("#tipoPersonaTercero").prop("required", false);
                        $("#bieniTerceroNombreF").prop("required", false);
                        $("#bieniTerceroNombreM").prop("required", false);
                        $("#bieniTerceroRfcF").prop("required", false);
                        $("#bieniTerceroRfcM").prop("required", false);
                    }
                });

                $("#tipoPersonaTercero").on("change", function () {
                    var tipoPersonaTercero = document.getElementById("tipoPersonaTercero").value
                    if (tipoPersonaTercero == "1") {
                        document.getElementById("pFisica").style.display = "block";
                        document.getElementById("pFisicaRfc").style.display = "block";
                        document.getElementById("pMoral").style.display = "none";
                        document.getElementById("pMoralRfc").style.display = "none";
                        document.getElementById("disabledNombre").style.display = "none";
                        document.getElementById("disabledRFC").style.display = "none";
                        $("#bieniTerceroNombreM").val("");
                        $("#bieniTerceroRfcM").val("");
                    } else {
                        document.getElementById("pMoral").style.display = "block";
                        document.getElementById("pMoralRfc").style.display = "block";
                        document.getElementById("pFisica").style.display = "none";
                        document.getElementById("pFisicaRfc").style.display = "none";
                        document.getElementById("disabledNombre").style.display = "none";
                        document.getElementById("disabledRFC").style.display = "none";
                        $("#bieniTerceroNombreF").val("");
                        $("#bieniTerceroRfcF").val("");
                    }
                });
                if ($("#accion").val() == "editar") {
                    $("#tipoDePersona").change();
                    $("#tipoVehiculo_id").change();
                    $("#lugar_registro").change();
                    $("#titular_id").change();
                    $("#tipoPersonaTercero").change();
                    document.getElementById("edit").style.display = "block";
                } else {
                    document.getElementById("crearF").style.display = "block";
                }

                $('.btn-ninguno').on('click', function (e) {
                    let that = this;
                    e.preventDefault();
                    Swal.fire({
                        title: '¿Esta seguro que no desea registrar la información solicitada en este apartado?',
                        icon: 'warning',
                        showCancelButton: true,
                        cancelButtonText: 'Cancelar'
                    }).then((result) => {
                        if (result.isConfirmed){
                            Swal.fire({
                                text: 'No se registró información en este apartado. Si desea registrar Experiencia Laboral del Declarante pulse: Agregar, de lo contrario vaya al siguiente apartado.',
                                icon: 'warning',
                                cancelButtonText: 'Aceptar'
                            });
                        }
                    });
                });
            </script>
@endsection
