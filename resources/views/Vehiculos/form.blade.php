<div class="card">
                                <div class="card-header bg-info  border-0 py-3 d-flex align-items-center" style="background-color:#F1F1F1 !important;">
                                    <div>
                                        <h3 class="card-title mb-0">VEHÍCULOS</h3>
                                        <h5 class="card-subtitle">(A la fecha de ingreso)</h5>
                                    </div>
                                    <span class="badge badge-success ml-auto px-4" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> AYUDA</span>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ol>
                                            <li><strong>Tipo de vehículo.</strong> Seleccionar el tipo de vehículo del listado desplegable: automóvil/motocicleta, aeronave, barco/yate, otro, especifique.</li>
                                            <li><strong>Titular del vehículo.</strong> Seleccionar alguna de las opciones del catálogo desplegable.</li>
                                            <li><strong>Tipo de tercero.</strong> En caso de copropiedad con un tercero, seleccionar si es persona física o persona moral.</li>
                                            <li><strong>Nombre del tercero.</strong> En caso de copropiedad, escribir el nombre o nombres completos, así como apellidos completos sin abreviaturas y sin acentos ni signos especiales. Si se trata de persona moral deberá proporcionar la denominación o razón social de la institución tal y como se encuentra en el documento con el que se acredita la adquisición.</li>
                                            <li><strong>RFC.</strong> En caso de personas físicas proporcionar los trece dígitos. En caso de personas morales establecer los doce dígitos.</li>
                                            <li><strong>Tipo de transmisor de la propiedad.</strong> Seleccionar si es persona física o persona moral.</li>
                                            <li><strong>Nombre o razón social del transmisor.</strong> Escribir el nombre o nombres completos, así como apellidos completos sin abreviaturas y sin acentos ni signos especiales. Si se trata de persona moral deberá proporcionar la denominación o razón social de la institución tal y como se encuentra en el documento con el que se acredita la adquisición.</li>
                                            <li><strong>RFC.</strong> En caso de personas físicas proporcionar los trece dígitos. En caso de personas morales establecer los doce dígitos.</li>
                                            <li><strong>Relación del transmisor del vehículo con el titular.</strong> Elegir del catálogo qué relación tiene el titular del vehículo con el transmisor.</li>
                                            <li><strong>Marca.</strong> Señalar la marca del vehículo.</li>
                                            <li><strong>Modelo.</strong> Señalar el modelo del vehículo, de acuerdo a la marca. (Ejemplo; marca Renault, modelo Clío).</li>
                                            <li><strong>Año.</strong> Indicar el año del vehículo.</li>
                                            <li><strong>Número de serie o registro.</strong> Proporcionar el número de serie o registro que aparece en la factura y/o en su caso, tarjeta de circulación.</li>
                                            <li><strong>Donde se encuentra registrado.</strong> Indicar si se encuentra registrado en México o en el extranjero. Señalando la entidad federativa o país según corresponda.</li>
                                            <li><strong>Forma de adquisición.</strong> Seleccionar alguna de las opciones del catálogo.</li>
                                            <li><strong>Forma de pago.</strong> Seleccionar la forma en que realizó el pago para adquirir el vehículo, en caso de que no haya pagado por el mismo, indicará no aplica.</li>
                                            <li><strong>Valor de adquisición del vehículo.</strong> Proporcionar el monto de adquisición, conforme al documento con el que se acredita la propiedad.</li>
                                            <li><strong>Tipo de moneda.</strong> Seleccionar la moneda relativa al valor de adquisición.</li>
                                            <li><strong>Fecha de adquisición del vehículo.</strong> Señalar la fecha de adquisición del vehículo, conforme al documento con el que se acredita la propiedad.</li>

                                        </ol>

                                        <strong>Aclaraciones/observaciones.</strong> En este espacio podrá realizar las aclaraciones u observaciones que considere pertinentes respecto de alguno o algunos de los incisos de este apartado.<br><br>
                                    </div>
                                </div>

                                <!-- Cuerpo del documento -->
                                <div class="card-body">
                                    <div class="alert alert-danger" role="alert" style="line-height : 23px !important;">
                                        Todos los datos de vehículos declarados a nombre de la pareja, dependientes económicos y/o terceros o que sean en copropiedad con el declarante no serán públicos.<br>
                                    </div>

                                    <hr>

                                    <!-- Primera fila  -->
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="control-label" for="NumDoc"><strong>Tipo de vehículo</strong></label>
                                                    {!! Form::select('vehiculos[tipoVehiculo_id]', $vehiculo, isset($vehiculos) ? $vehiculos->tipoVehiculo_id : [],['class'=>'form-control alert-danger',  'id' => 'tipoVehiculo_id', 'required' => true]) !!}
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
                                                {!! Form::select('vehiculos[titular_id]', $titular, isset($vehiculos) ? $vehiculos->titular_id : [],['class'=>'form-control',  'id' => 'titular_id', 'required' => true]) !!}

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
                                                        {!! Form::select('vehiculos[tipoPersonaTercero]', $regimen, isset($vehiculos) ? $vehiculos->tipoPersonaTercero : [],['class'=>'form-control',  'id' => 'tipoPersonaTercero']) !!}
                                                    </div>
                                                </div>

                                                <div class="col-lg-4" id="disabledNombre">
                                                    <div class="form-group">
                                                        <label class="control-label" for="NumDoc"><strong>Nombre del tercero</strong></label>
                                                        <input type="text" class="form-control" disabled="" placeholder="p. ej. Juan Robles Rosas" title="Ingresa nombre completo">
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
                                                            {!! Form::text('vehiculos[bieniTerceroNombreF]',isset($vehiculos) ? $vehiculos->bieniTerceroNombreF :null,['class'=>'form-control', 'placeholder'=>'P. ej. Juan Robles Rosas',   'id' => 'bieniTerceroNombreF', 'pattern'=> "[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.-]{2,50}", "title" => "Ingresa nombre completo" ]) !!}
                                                        </div>
                                                    </div>
                                                    <div id="pMoral" style="display: none;">
                                                        <div class="form-group">
                                                            <label class="control-label" for="NumDoc"><strong>Razón social</strong></label>
                                                            {!! Form::text('vehiculos[bieniTerceroNombreM]',isset($vehiculos) ? $vehiculos->bieniTerceroNombreM : null,['class'=>'form-control', 'placeholder'=>'P. ej. Juan Robles Rosas',   'id' => 'bieniTerceroNombreM', 'pattern'=> "[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.-]{2,50}", "title" => "Ingresa nombre completo" ]) !!}

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-4">
                                                    <div id="pFisicaRfc" style="display: none;">
                                                        <div class="form-group">
                                                            <label class="control-label" for="ProcessNum"><strong>RFC</strong> </label>
                                                            {!! Form::text('vehiculos[bieniTerceroRfcF]', isset($vehiculos) ? $vehiculos->bieniTerceroRfcF : null,['class'=>'form-control', 'placeholder'=>'P. ej. Juan Robles Rosas',   'id' => 'bieniTerceroRfcF', 'maxlength'=>"13", 'pattern' => "([A-Z]{4}([0-9]{6}[A-Z0-9]{3})", 'title' => "Ingresa RFC a 13 dígitos"]) !!}
                                                        </div>
                                                    </div>
                                                    <div id="pMoralRfc" style="display: none;">
                                                        <div class="form-group">
                                                            <label class="control-label" for="ProcessNum"><strong>RFC</strong></label>
                                                            {!! Form::text('vehiculos[bieniTerceroRfcM]', isset($vehiculos) ? $vehiculos->bieniTerceroRfcM : null,['class'=>'form-control', 'placeholder'=>'P. ej. XXXX010101',   'id' => 'bieniTerceroRfcM', 'maxlength'=>"13", 'pattern' => "([A-Z]{4}([0-9]{6}[A-Z0-9]{3})", 'title' => "Ingresa RFC a 12 dígitos" ]) !!}
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
                                                    {!! Form::select('vehiculos[tipoDePersona]', $regimen, isset($vehiculos) ? $vehiculos->tipoDePersona : [],['class'=>'form-control',  'id' => 'tipoDePersona', 'required' => true]) !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <div id="terceroNombreFisica" style="display: block;">
                                                        <label class="control-label" for="NumDoc"><strong>Nombre del transmisor de la propiedad:</strong></label>
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
                                                    <label class="control-label" for="State" style="line-height : 15px !important;"><strong>Relación del transmisor del vehículo con el titular:</strong></label>
                                                    {!! Form::select('vehiculos[relacion_id]',$relacion, isset($vehiculos) ? $vehiculos->relacion_id : [],['class'=>'form-control', 'placeholder'=>'',  'id' => 'relacion_id']) !!}

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
                                    </div>

                                    <!-- SEPTIMA fila  -->
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="control-label" for="NumDoc"><strong>Número de serie o registro</strong>:</label>
                                                    {!! Form::text('vehiculos[v_num_serie]', isset($vehiculos) ? $vehiculos->v_num_serie : null,['class'=>'form-control', 'placeholder'=>'P. ej. 1HGCM82633A004352',   'id' => 'v_num_serie']) !!}
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="control-label" for="ProcessNum">¿<strong>Dónde se encuentra registrado?</strong></label>
                                                    {!! Form::select('vehiculos[lugar_registro]',$registro, isset($vehiculos) ? $vehiculos->lugar_registro : [],['class'=>'form-control', 'placeholder'=>'',  'id' => 'lugar_registro']) !!}
                                                </div>
                                            </div>
                                            <div class="col-lg-4">

                                                <div id="lugarRegistroMx" style="display: block;">
                                                    <div class="form-group">
                                                        <label class="control-label" for="NumDoc"><strong>Entidad Federativa</strong>:</label>
                                                        {!! Form::text('vehiculos[v_entidadFederativa]', isset($vehiculos) ? $vehiculos->v_entidadFederativa : null,['class'=>'form-control', 'placeholder'=>'P. ej. México',   'id' => 'v_entidadFederativa', 'disabled' => "disabled"]) !!}
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

                                    <!-- SEPTIMA fila  -->
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="control-label" for="NumDoc"><strong>Forma de adquisición</strong>:</label>
                                                    {!! Form::select('vehiculos[tipo_adquisicion_id]',$tipoAdquisicion, isset($vehiculos) ? $vehiculos->tipo_adquisicion_id : [],['class'=>'form-control', 'placeholder'=>'',  'id' => 'tipo_adquisicion_id']) !!}
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="control-label" for="ProcessNum"><strong>Forma de pago</strong>:</label>
                                                    {!! Form::select('vehiculos[pago_id]',$pago, isset($vehiculos) ? $vehiculos->pago_id : [],['class'=>'form-control', 'placeholder'=>'',  'id' => 'pago_id']) !!}
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="control-label" for="State"><strong>Valor de adquisición del vehículo</strong>:</label>
                                                    {!! Form::text('vehiculos[v_valor]', isset($vehiculos) ? $vehiculos->v_valor : null,['class'=>'form-control', 'placeholder'=>'P. ej. 100000.00 Mxn',   'id' => 'v_valor']) !!}
                                                </div>
                                            </div>
                                        </div>
                                    <!-- SEPTIMA fila  -->
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="control-label" for="NumDoc"><strong>Tipo de moneda</strong>:</label>
                                                    {!! Form::text('vehiculos[v_moneda]', isset($vehiculos) ? $vehiculos->v_moneda : null,['class'=>'form-control', 'placeholder'=>'P. ej. Peso mexicano',   'id' => 'v_moneda']) !!}
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="control-label" for="ProcessNum"><strong>Fecha de adquisición del vehículo</strong>:</label>
                                                    {!! Form::date('vehiculos[v_fecha]', isset($vehiculos) ? $vehiculos->v_fecha : null,['class'=>'form-control', 'placeholder'=>'P. ej. Peso mexicano',   'id' => 'v_fecha']) !!}
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
                                </div>
                            </div>



@section('scripts')
    <script type="text/javascript">
        $("#tipoVehiculo_id").on("change",function(){
            var tipoVehiculo_id = document.getElementById("tipoVehiculo_id").value
            if(tipoVehiculo_id == 4){
                $("#otroVehiculo").prop("disabled", false);
            }else{
                $("#otroVehiculo").prop("disabled", true);
                $("#otroVehiculo").val("");
            }
        });
        $("#tipoDePersona").on("change",function(){
            var tipoDePersona = document.getElementById("tipoDePersona").value
            if(tipoDePersona == 1){
                $("#v_nombreFisica").prop("disabled", false);
                $("#v_rfcFisica").prop("disabled", false);
                document.getElementById("terceroNombreFisica").style.display="block";
                document.getElementById("terceroNombreMoral").style.display="none";
                document.getElementById("terceroFisicaTra").style.display="block";
                document.getElementById("terceroMoralTra").style.display="none";
            }else if(tipoDePersona == 2){
                $("#v_nombreFisica").prop("disabled", true);
                $("#v_rfcFisica").prop("disabled", true);
                $("#v_nombreFisica").val("");
                $("#v_rfcFisica").val("");
                document.getElementById("terceroNombreFisica").style.display="none";
                document.getElementById("terceroNombreMoral").style.display="block";
                document.getElementById("terceroFisicaTra").style.display="none";
                document.getElementById("terceroMoralTra").style.display="block";
            }else{
                $("#v_nombreFisica").prop("disabled", true);
                $("#v_rfcFisica").prop("disabled", true);
                document.getElementById("terceroNombreFisica").style.display="block";
                document.getElementById("terceroNombreMoral").style.display="none";
                document.getElementById("terceroFisicaTra").style.display="block";
                document.getElementById("terceroMoralTra").style.display="none";
            }
        });
        $("#lugar_registro").on("change",function(){
            var dsp_D_extranjero = document.getElementById("lugar_registro").value
            if(dsp_D_extranjero == 1){
                $("#v_entidadFederativa").prop("disabled", false);
                document.getElementById("lugarRegistroMx").style.display="block";
                document.getElementById("lugarRegistroEx").style.display="none";
            }else if(dsp_D_extranjero == 2){
                $("#v_entidadFederativa").prop("disabled", true);
                $("#v_entidadFederativa").val("");
                document.getElementById("lugarRegistroEx").style.display="block";
                document.getElementById("lugarRegistroMx").style.display="none";
            }
        });

        $("#titular_id").on("change",function(){
            var dsp_D_titular = document.getElementById("titular_id").value
            if(dsp_D_titular != 1){
                $("#difDec").find("select").prop("class","form-control alert-danger");
                $("#difDec").find("input").prop("class","form-control alert-danger");
                $("#submit").prop("class","btn btn-secondary");

            }else{
                $("#difDec").find("select").prop("class","form-control");
                $("#difDec").find("input").prop("class","form-control");
                $("#submit").prop("class","btn btn-secondary");
                $("#tipoDePersona").on("change",function(){
                var tipoDePersona = document.getElementById("tipoDePersona").value
                if(tipoDePersona == 1){
                    $("#v_nombreFisica").prop("class","form-control alert-danger");
                    $("#v_rfcFisica").prop("class","form-control alert-danger");
                    $("#relacion_id").prop("class","form-control alert-danger");
                    $("#submit").prop("class","btn btn-secondary");
                }
                });
            }
            var op = dsp_D_titular;
            if (op == 3 || op == 4 || op == "DCCCT" || op == 6 || op == 8 || op == 10 || op == 13 || op == 15 || op == 18 || op == 19) {
                document.getElementById("titular_tercero").style.display="block";
            }else{
                document.getElementById("titular_tercero").style.display="none";
            }
        });

        $("#tipoPersonaTercero").on("change",function(){
            var tipoPersonaTercero = document.getElementById("tipoPersonaTercero").value
            if(tipoPersonaTercero == "1") {
                document.getElementById("pFisica").style.display="block";
                document.getElementById("pFisicaRfc").style.display="block";
                document.getElementById("pMoral").style.display="none";
                document.getElementById("pMoralRfc").style.display="none";
                document.getElementById("disabledNombre").style.display="none";
                document.getElementById("disabledRFC").style.display="none";
            }else{
                document.getElementById("pMoral").style.display="block";
                document.getElementById("pMoralRfc").style.display="block";
                document.getElementById("pFisica").style.display="none";
                document.getElementById("pFisicaRfc").style.display="none";
                document.getElementById("disabledNombre").style.display="none";
                document.getElementById("disabledRFC").style.display="none";
            }
        });
        if($("#accion").val() == "editar"){
            $("#tipoDePersona").change();
            $("#tipoVehiculo_id").change();
            $("#lugar_registro").change();
            $("#titular_id").change();
            $("#tipoPersonaTercero").change();
            document.getElementById("edit").style.display="block";
        }else{
            document.getElementById("crearF").style.display="block";
        }
    </script>
@endsection
