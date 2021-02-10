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
                        <label class="control-label" for="NumDoc"><strong>TIPO DE VEHÍCULO: *</strong></label>
                        {!! Form::select('vehiculos[tipoVehiculo_id]', $vehiculo, isset($vehiculos) ? $vehiculos->tipoVehiculo_id : [],['class'=>'form-control text-uppercase',  'id' => 'tipoVehiculo_id', 'required' => true, 'placeholder' => 'SELECCIONA UNA OPCIÓN']) !!}
                    </div>
                </div>

                <div class="col-lg-4" id="combo_otro" style="display: block;">
                    <div class="form-group">
                        <label class="control-label" style="text-align:justify"><strong>ESPECIFIQUE: *</strong></label>
                        {!! Form::text('vehiculos[otroVehiculo]',isset($vehiculos) ? $vehiculos->otroVehiculo :null,['class'=>'form-control text-uppercase', 'placeholder'=>'P. ej. Otro', 'disabled'=>'disabled',  'id' => 'otroVehiculo']) !!}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="control-label" for="ProcessNum"><strong>TITULAR DEL VEHÍCULO: *</strong></label>
                        {!! Form::select('vehiculos[titular_id]', $titular, isset($vehiculos) ? $vehiculos->titular_id : [],['class'=>'form-control text-uppercase', 'placeholder' => 'SELECCIONA UNA OPCIÓN',  'id' => 'titular_id', 'required' => true]) !!}

                    </div>

                    <div class="col-lg-4">
                    </div>
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
                                    <label class="control-label" for="NumDoc"><strong>TIPO DE TERCERO: *</strong></label>
                                    {!! Form::select('vehiculos[tipoPersonaTercero]', $regimen, isset($vehiculos) ? $vehiculos->tipoPersonaTercero : [],['class'=>'form-control text-uppercase',  'id' => 'tipoPersonaTercero', 'placeholder' => 'SELECCIONA UNA OPCIÓN', 'required' => true]) !!}
                                </div>
                            </div>

                            <div class="col-lg-4" id="disabledNombre">
                                <div class="form-group">
                                    <label class="control-label" for="NumDoc"><strong>NOMBRE DEL TERCERO: *</strong></label>
                                    <input type="text" class="form-control text-uppercase" placeholder="p. ej. Juan Robles Rosas" title="Ingresa nombre completo">
                                </div>
                            </div>

                            <div class="col-lg-4" id="disabledRFC">
                                <div class="form-group">
                                    <label class="control-label" for="NumDoc"><strong>RFC: *</strong> </label>
                                    <input type="text" class="form-control text-uppercase" disabled="" placeholder="p. ej. Juan Robles Rosas" title="Ingresa nombre completo" id="rfcTransmisor">
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div id="pFisica" style="display: none;">
                                    <div class="form-group">
                                        <label class="control-label" for="NumDoc"><strong>NOMBRE DEL TERCERO: *</strong></label>
                                        {!! Form::text('vehiculos[bieniTerceroNombreF]',isset($vehiculos) ? $vehiculos->bieniTerceroNombreF :null,['class'=>'form-control text-uppercase', 'placeholder'=>'P. ej. Juan Robles Rosas',   'id' => 'bieniTerceroNombreF', 'pattern'=> "[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.-]{2,50}", "title" => "Ingresa nombre completo", 'required' => true ]) !!}
                                    </div>
                                </div>
                                <div id="pMoral" style="display: none;">
                                    <div class="form-group">
                                        <label class="control-label" for="NumDoc"><strong>RAZÓN SOCIAL: *</strong></label>
                                        {!! Form::text('vehiculos[bieniTerceroNombreM]',isset($vehiculos) ? $vehiculos->bieniTerceroNombreM : null,['class'=>'form-control text-uppercase', 'placeholder'=>'P. ej. Juan Robles Rosas',   'id' => 'bieniTerceroNombreM', 'pattern'=> "[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.-]{2,50}", "title" => "Ingresa nombre completo", 'required' => true ]) !!}

                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div id="pFisicaRfc" style="display: none;">
                                    <div class="form-group">
                                        <label class="control-label" for="ProcessNum"><strong>RFC: *</strong> </label>
                                        {!! Form::text('vehiculos[bieniTerceroRfcF]', isset($vehiculos) ? $vehiculos->bieniTerceroRfcF : null,['class'=>'form-control text-uppercase', 'placeholder'=>'P. ej. XXXX010101XXX',   'id' => 'bieniTerceroRfcF','required' => true, 'pattern' => "([A-Z]{4}[0-9]{6}[A-Z0-9]{3})",'title' => "Ingresa RFC a 13 dígitos", 'size'=>"13", 'maxlength'=>"13"]) !!}
                                    </div>
                                </div>
                                <div id="pMoralRfc" style="display: none;">
                                    <div class="form-group">
                                        <label class="control-label" for="ProcessNum"><strong>RFC: *</strong></label>
                                        {!! Form::text('vehiculos[bieniTerceroRfcM]', isset($vehiculos) ? $vehiculos->bieniTerceroRfcM : null,['class'=>'form-control text-uppercase' , 'placeholder'=>'P. ej. XXXX010101XX',   'id' => 'bieniTerceroRfcM', 'size' => '12', 'maxlength'=>"12", 'pattern' => "([A-Z]{4}[0-9]{6}[A-Z0-9]{2})", 'title' => "Ingresa RFC a 12 dígitos", 'required' => true ]) !!}
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
                                <label class="control-label" for="ProcessNum"><strong>TIPO DE TRANSMISOR: *</strong></label>
                                {!! Form::select('vehiculos[tipoDePersona]', $regimen, isset($vehiculos) ? $vehiculos->tipoDePersona : [],['class'=>'form-control text-uppercase',  'id' => 'tipoDePersona', 'placeholder' => 'SELECCIONA UNA OPCIÓN', 'required' => true]) !!}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <div id="terceroNombreFisica" style="display: block;">
                                    <label class="control-label" for="NumDoc"><strong>NOMBRE DEL TRANSMISOR DE LA PROPIEDAD: *</strong></label>
                                    {!! Form::text('vehiculos[v_nombreFisica]', isset($vehiculos) ? $vehiculos->v_nombreFisica : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'P. ej. Carlos Pérez Pérez',   'id' => 'v_nombreFisica', 'disabled' => 'disabled', 'required' => true ]) !!}
                                </div>
                                <div id="terceroNombreMoral" style="display: none;">
                                    <label class="control-label" for="NumDoc"><strong>RAZÓN SOCIAL DEL TRANSMISOR: *</strong></label>
                                    {!! Form::text('vehiculos[v_nombreMoral]', isset($vehiculos) ? $vehiculos->v_nombreMoral : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'P. ej. Carlos Pérez Pérez',   'id' => 'v_nombreMoral', 'required' => true]) !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <div id="terceroFisicaTra" style="display: block;">
                                    <label class="control-label" for="ProcessNum"><strong>RFC: </strong></label>
                                    {!! Form::text('vehiculos[v_rfcFisica]', isset($vehiculos) ? $vehiculos->v_rfcFisica : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'P. ej. XAXA010101XAX',   'id' => 'v_rfcFisica', 'maxlength'=>"13", 'pattern' => "([A-Z]{4}[0-9]{6}[A-Z0-9]{3})", 'title' => "Ingresa RFC a 10 o 13 dígitos", 'disabled' => "disabled" ]) !!}
                                </div>
                                <div id="terceroMoralTra" style="display: none;">
                                    <label class="control-label" for="ProcessNum"><strong>RFC: * </strong></label>
                                    {!! Form::text('vehiculos[v_rfcMoral]', isset($vehiculos) ? $vehiculos->v_rfcMoral : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'P. ej. XXX010101X0X',   'id' => 'v_rfcMoral', 'maxlength'=>"12", 'pattern' => "([A-Z]{3}[0-9]{6}[A-Z0-9]{3})", 'title' => "Ingresa RFC a 12 dígitos", 'required' => true]) !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="control-label" for="State" style="line-height : 15px !important;"><strong>RELACIÓN DEL TRANMISOR DEL VEHÍCULO CON EL TITULAR: *</strong></label>
                                {!! Form::select('vehiculos[relacion_id]',$relacion, isset($vehiculos) ? $vehiculos->relacion_id : [],['class'=>'form-control text-uppercase',  'id' => 'relacion_id', 'placeholder' => 'SELECCIONA UNA OPCIÓN','required' => true]) !!}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SEPTIMA fila  -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="control-label" for="NumDoc"><strong>ESPECIFIQUE OTRO TIPO DE RELACIÓN DEL TRANSMISOR: *</strong></label>
                                {!! Form::text('vehiculos[relacion_id_otro]', isset($vehiculos) ? $vehiculos->relacion_id_otro : null,['class'=>'form-control text-uppercase', 'placeholder'=>'P. ej. Conocido',   'id' => 'relacion_id_otro','required' => true, 'disabled' => true]) !!}
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="control-label" for="NumDoc"><strong>MARCA: *</strong></label>
                                {!! Form::text('vehiculos[v_marca]', isset($vehiculos) ? $vehiculos->v_marca : null,['class'=>'form-control text-uppercase', 'placeholder'=>'P. ej. Renault',   'id' => 'v_marca','required' => true]) !!}
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="control-label" for="ProcessNum"><strong>MODELO: *</strong></label>
                                {!! Form::text('vehiculos[v_modelo]', isset($vehiculos) ? $vehiculos->v_modelo : null,['class'=>'form-control text-uppercase', 'placeholder'=>'P. ej. Clío',   'id' => 'v_modelo','required' => true]) !!}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SEPTIMA fila  -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="control-label" for="State"><strong>AÑO: *</strong></label>
                                {!! Form::text('vehiculos[v_ano]', isset($vehiculos) ? $vehiculos->v_ano : null,['class'=>'form-control text-uppercase', 'placeholder'=>'P. ej. 2006',   'id' => 'v_ano','required' => true, 'pattern' => "[0-9]{4}",'title' => "Ingresa el año a 4 dígitos", 'size'=>"4", 'maxlength'=>"4"]) !!}
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="control-label" for="NumDoc"><strong>NÚMERO DE SERIE O REGISTRO: *</strong></label>
                                {!! Form::text('vehiculos[v_num_serie]', isset($vehiculos) ? $vehiculos->v_num_serie : null,['class'=>'form-control text-uppercase', 'placeholder'=>'P. ej. 1HGCM82633A004352',   'id' => 'v_num_serie' ,'required' => true, 'maxlength' => '17']) !!}
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="control-label" for="ProcessNum">¿<strong>DÓNDE SE ENCUENTRA REGISTRADO?: *</strong></label>
                                {!! Form::select('vehiculos[lugar_registro]',$registro, isset($vehiculos) ? $vehiculos->lugar_registro : [],['class'=>'form-control text-uppercase', 'placeholder' => 'SELECCIONA UNA OPCIÓN',  'id' => 'lugar_registro' ,'required' => true]) !!}
                            </div>
                        </div>

                    </div>

                    <!-- SEPTIMA fila  -->
                    <div class="row">
                        <div class="col-lg-4">

                            <div id="lugarRegistroMx" style="display: block;">
                                <div class="form-group">
                                    <label class="control-label" for="NumDoc"><strong>ENTIDAD FEDERATIVA: *</strong></label>
                                    {!! Form::select('vehiculos[entidades_id]',$entidad, isset($vehiculos) ? $vehiculos->entidades_id : [],['class'=>'form-control text-uppercase', 'placeholder' => 'SELECCIONA UNA OPCIÓN',  'id' => 'entidades_id','required' => true]) !!}
                                </div>
                            </div>
                            <div id="lugarRegistroEx" style="display: none;">
                                <div class="form-group">
                                    <label class="control-label" for="NumDoc"><strong>PAÍS: *</strong></label>
                                    {!! Form::select('vehiculos[pais_id]',$pais, isset($vehiculos) ? $vehiculos->pais_id : [],['class'=>'form-control text-uppercase', 'placeholder' => 'SELECCIONA UNA OPCIÓN',  'id' => 'pais_id','required' => true]) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="control-label" for="NumDoc"><strong>FORMA DE ADQUISICIÓN: *</strong></label>
                                {!! Form::select('vehiculos[tipo_adquisicion_id]',$tipoAdquisicion, isset($vehiculos) ? $vehiculos->tipo_adquisicion_id : [],['class'=>'form-control text-uppercase', 'placeholder' => 'SELECCIONA UNA OPCIÓN',  'id' => 'tipo_adquisicion_id','required' => true]) !!}
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="control-label" for="ProcessNum"><strong>FORMA DE PAGO: *</strong></label>
                                {!! Form::select('vehiculos[pago_id]',$pago, isset($vehiculos) ? $vehiculos->pago_id : [],['class'=>'form-control text-uppercase', 'placeholder' => 'SELECCIONA UNA OPCIÓN',  'id' => 'pago_id','required' => true]) !!}
                            </div>
                        </div>

                    </div>
                    <!-- SEPTIMA fila  -->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="control-label" for="State"><strong>VALOR DE ADQUISICIÓN DEL VEHÍCULO: *</strong></label>
                                {!! Form::text('vehiculos[v_valor]', isset($vehiculos) ? $vehiculos->v_valor : null,['class'=>'form-control text-uppercase', 'placeholder'=>'P. ej. 100000.00 Mxn',   'id' => 'v_valor','required' => true, 'pattern' => "[0-9]{1,8}",'title' => "Ingresa el valor en dígitos", 'size'=>"8", 'maxlength'=>"8"]) !!}
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="control-label" for="NumDoc"><strong>TIPO DE MONEDA: *</strong></label>
                                {!! Form::select('vehiculos[tipo_monedas_id]',$moneda, isset($vehiculos) ? $vehiculos->tipo_monedas_id : [],['class'=>'form-control text-uppercase', 'placeholder' => 'SELECCIONA UNA OPCIÓN',  'id' => 'tipo_monedas_id','required' => true]) !!}
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="control-label" for="ProcessNum"><strong>FECHA DE ADQUISICIÓN DEL VEHÍCULO: *</strong></label>
                                {!! Form::date('vehiculos[v_fecha]', isset($vehiculos) ? $vehiculos->v_fecha : null,['class'=>'form-control text-uppercase', 'placeholder'=>'P. ej. Peso mexicano',   'id' => 'v_fecha','required' => true]) !!}
                            </div>
                        </div>

                    </div>
                </div>
                <!-- SEPTIMA fila  -->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <strong>ACLARACIONES/OBSERVACIONES: </strong></label>
                                {!! Form::textarea('vehiculos[v_aclaraciones]', isset($vehiculos) ? $vehiculos->v_aclaraciones : null,['class'=>'form-control alert-danger text-uppercase',  'id' => 'v_aclaraciones']) !!}
                            </div>
                        </div>

                    </div>
                </div>
            {!! Form::hidden('vehiculos[tipoOperacion]',$tipoOperacion,['class'=>'form-control text-uppercase','id' => 'tipoOperacion']) !!}
                <!-- Botones  -->
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
                        <a href="{{route("vehiculos.index")}}" class="btn btn-submit text-light">Ir a la sección anterior</a>
                            {{ Form::button('Guardar e ir a la siguiente sección', ['type' => 'submit', 'class' => 'btn btn-submit text-light'] )}}
                    </div>
                </div>
                <br>
            </div>
        </div>

        @section('scripts')
            <script type="text/javascript">
                $(document).ready(function(){
                    $("#tipoDePersona").change();
                    $("#tipoVehiculo_id").change();
                    $("#lugar_registro").change();
                    $("#titular_id").change();
                    $("#tipoPersonaTercero").change();
                    $("#relacion_id").change();
                    $("#tipo_adquisicion_id").change();
                });
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
                        $("#pais_id").val("");
                        $("#pais_id").prop("required",false);

                    } else if (dsp_D_extranjero == 2) {
                        $("#entidades_id").prop("disabled", true);
                        $("#entidades_id").val("");
                        document.getElementById("lugarRegistroEx").style.display = "block";
                        document.getElementById("lugarRegistroMx").style.display = "none";
                        $("#entidades_id").val("");
                        $("#entidades_id").prop("required",false);
                    }else{

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
                        $("#bieniTerceroNombreM").prop("required", false);
                        $("#bieniTerceroRfcM").prop("required", false);
                    } else {
                        document.getElementById("pMoral").style.display = "block";
                        document.getElementById("pMoralRfc").style.display = "block";
                        document.getElementById("pFisica").style.display = "none";
                        document.getElementById("pFisicaRfc").style.display = "none";
                        document.getElementById("disabledNombre").style.display = "none";
                        document.getElementById("disabledRFC").style.display = "none";
                        $("#bieniTerceroNombreF").val("");
                        $("#bieniTerceroRfcF").val("");
                        $("#bieniTerceroNombreF").prop("required", false);
                        $("#bieniTerceroRfcF").prop("required", false);
                    }
                });

                $("#relacion_id").on("change", function () {
                    var relacion_id = document.getElementById("relacion_id").value
                    if (relacion_id == "20") {
                        $("#relacion_id_otro").prop("disabled", false);
                    } else {
                        $("#relacion_id_otro").prop("disabled", true);
                        $("#relacion_id_otro").prop("required", false);
                        $("#relacion_id_otro").val("");
                    }
                });

                if ($("#accion").val() == "editar") {
                    $("#tipoDePersona").change();
                    $("#tipoVehiculo_id").change();
                    $("#lugar_registro").change();
                    $("#titular_id").change();
                    $("#tipoPersonaTercero").change();
                    $("#relacion_id").change();
                    $("#tipo_adquisicion_id").change();
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

                $('#tipo_adquisicion_id').change(function () {
                //    alert("aw");
                    var tipo_adquisicion_id = document.getElementById('tipo_adquisicion_id').value;
                    alert(tipo_adquisicion_id);
                    if(tipo_adquisicion_id == 3 || tipo_adquisicion_id == 4 || tipo_adquisicion_id == 5){
                        $('#pago_id').prop('required', false);
                        $('#pago_id').prop('disabled', true);
                        $('#v_valor').prop('required', false);
                        $('#v_valor').prop('disabled', true);
                        $('#tipo_monedas_id').prop('required', false);
                        $('#tipo_monedas_id').prop('disabled', true);

                        $('#tipo_monedas_id').prop('value', '');
                        $('#v_valor').prop('value', '');
                        $('#pago_id').prop('value', '');

                        $("#tipo_monedas_id").val("");
                        $("#v_valor").val("");
                        $("#pago_id").val("");
                    }else{
                        $('#pago_id').prop('required', true);
                        $('#pago_id').prop('disabled', false);
                        $('#v_valor').prop('required', true);
                        $('#v_valor').prop('disabled', false);
                        $('#tipo_monedas_id').prop('required', true);
                        $('#tipo_monedas_id').prop('disabled', false);
                    }
                });


                $("#v_fecha").on("blur", function () {
                    var fecha = document.getElementById("v_fecha").value;
                    var today = new Date();
                    var dd = today.getDate();
                    var mm = today.getMonth() + 1;
                    var yyyy = today.getFullYear();
                    if (dd < 10) {
                        dd = '0' + dd;
                    }
                    if (mm < 10) {
                        mm = '0' + mm;
                    }
                    today = yyyy + '-' + mm + '-' + dd;
                    if (fecha > today) {
                        alert("La fecha es mayor a la fecha de registro, favor de comprobar");
                        var fechaB = document.getElementById("v_fecha").value = '00/00/0000';
                    }
                });


            </script>
@endsection
