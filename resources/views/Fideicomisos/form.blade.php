<div class="card-body">
    <span style="text-align: justify !important; margin-left:15px"> Se manifiestará el beneficio o ganancia directa del Declarante, si supera al mes 250 Unidades de Medida y Actualización (UMA).</span><br><br>
    <div class="alert alert-danger" role="alert" style="background-color:#E8CECF">
        Todos los datos de clientes de la pareja o dependientes económicos no serán públicos.<br>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="form-group">
                    <br>
                    <label class="control-label" for="NumDoc">¿Realiza alguna actividad lucrativa independiente al empleo, cargo o comisión?</label>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <br>
                    {!! Form::select('principales_actividad_Lucrativa', $selectPrincipalesActividadLucrativa, null,['class'=>'form-control alert-danger',  'id' => 'PrincipalesActividadLucrativa']) !!}
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div id="contenedores" style="display:none;">
        <!-- Primera fila  -->
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        {!! Form::label('Títular de la actividad lucrativa', 'Títular de la actividad lucrativa:') !!}
                        {!! Form::text('títular_actividad_lucrativa',null,['class'=>'form-control alert-danger',   'id' => 'títular_actividad_lucrativa']) !!}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        {!! Form::label('Nombre de la empresa o del servicio que proporciona', 'Nombre de la empresa o del servicio que proporciona:') !!}
                        {!! Form::text('nombreempresa',null,['class'=>'form-control alert-danger',   'id' => 'nombreempresa']) !!}
                    </div>
                </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label class="control-label" for="NumDoc"><strong>Tipo de cliente principal:</strong></label>
                        <select name="tipoDePersona" id="tipoDePersona" class="form-control" onchange="tipoPersonaTra();D_tipoRelacionColor();" required="">
                            <option value="">Seleccione una opción</option>                                                        <option value="FI">Persona Física</option>
                            <option value="MO">Persona Moral</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-4" id="terceroFdisabled">
                    <div class="form-group">
                        <label class="control-label" for="NumDoc"><strong>Nombre del cliente principal:</strong></label>
                        <input type="text" class="form-control" disabled="" placeholder="p. ej. Juan Pérez." title="Ingresa nombre" value="">
                    </div>
                </div>
                <div class="col-lg-4" id="terceroMdisabled">
                    <div class="form-group">
                        <label class="control-label" for="ProcessNum"><strong>RFC:</strong></label>
                        <input type="text" class="form-control" disabled="" placeholder="p. ej. XXXX010101" value="">
                    </div>
                </div>
                <div class="col-lg-4" id="terceroFisicaTraNombre" style="display: none;">
                    <div class="form-group">
                        <label class="control-label" for="NumDoc"><strong>Nombre del cliente principal:</strong></label>
                        <input type="text" name="c_princialesNombreF" id="c_princialesNombreF" class="form-control" placeholder="p. ej. Juan Pérez." pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}" title="Ingresa nombre" value="">
                    </div>
                </div>
                <div class="col-lg-4" id="terceroFisicaTraRFC" style="display: none;">
                    <div class="form-group">
                        <label class="control-label" for="ProcessNum"><strong>RFC:</strong></label>
                        <input type="text" name="c_princialesRfcF" id="c_princialesRfcF" class="form-control" placeholder="p. ej. XXXX010101" maxlength="13" pattern="([A-Z]{4}([0-9]{6}[A-Z0-9]{3})" title="Ingresa RFC a 13 dígitos" value="">
                    </div>
                </div>
                <div class="col-lg-4" id="terceroMoralTraDeno" style="display: none;">
                    <div class="form-group">
                        <label class="control-label" for="NumDoc"><strong>Razón social del cliente principal:</strong></label>
                        <input type="text" name="c_princialesNombreM" id="c_princialesNombreM" class="form-control" placeholder="p. ej. Desarrollo y Redes S.A. de C.V." pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}" title="Ingresa nombre" value="">
                    </div>
                </div>
                <div class="col-lg-4" id="terceroMoralTraRFC" style="display: none;">
                    <div class="form-group">
                        <label class="control-label" for="ProcessNum"><strong>RFC:</strong></label>
                        <input type="text" name="c_princialesRfcM" id="c_princialesRfcM" class="form-control" placeholder="p. ej. XXX010101" maxlength="12" pattern="([A-Z]{3}([0-9]{6}[A-Z0-9]{3})" title="Ingresa RFC a 12 dígitos" value="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        {!! Form::label('Sector productivo al que pertenece', 'Sector productivo al que pertenece:') !!}
                        {!! Form::text('sectorproductivo',null,['class'=>'form-control alert-danger',   'id' => 'sectorproductivo']) !!}
                <div class="col-lg-4" id="otro_Disabled">
                    <div class="form-group">
                        {!! Form::label('Especifique', 'Especifique:') !!}
                        {!! Form::text('especifique',null,['class'=>'form-control alert-danger',   'id' => 'especifique']) !!}
                    </div>
                </div>
                <div class="col-lg-4" id="otro" style="display: none;">
                    <div class="form-group">
                        {!! Form::label('Especifique', 'Especifique:') !!}
                        {!! Form::text('especifique',null,['class'=>'form-control alert-danger', 'placeholder="p. ej. Depto. de Informática' 'id' => 'especifique']) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        {!! Form::label('Monto aproximado del beneficio o ganancia mensual que obtiene del cliente principal', 'Monto aproximado del beneficio o ganancia mensual que obtiene del cliente principal:') !!}
                        {!! Form::text('monto_beneficio',null,['class'=>'form-control alert-danger', 'placeholder="p. eje. 10,000.00 Mxn' 'id' => 'monto_beneficio']) !!}
                    </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        {!! Form::select('LugarDondeSeUbica', $selectLugarDondeSeUbica, null,['class'=>'form-control alert-danger',  'id' => 'LugarDondeSeUbica']) !!}
                    </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <!-- MX  -->
                        <div id="dom_mex" style="display: none;">
                            {!! Form::label('País donde se localiza', 'País donde se localiza:') !!}
                            {!! Form::text('entidad_federativa',null,['class'=>'form-control alert-danger', 'placeholder=" P.eje.Mexico' 'id' => 'entidad_federativa']) !!}
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                            {!! Form::select('PaísDondeSeLocaliza', $selectPaísDondeSeLocaliza, null,['class'=>'form-control alert-danger',  'id' => 'PaísDondeSeLocaliza']) !!}
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        {!! Form::label('Aclaraciones / Observaciones', 'Aclaraciones / Observaciones:') !!}
                        {!! Form::text('aclaraciones_observaciones',null,['class'=>'form-control alert-danger', 'placeholder=" P.eje.Mexico' 'id' => 'aclaraciones_observaciones']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <center>
        <br>
        <a href="#" class="btn btn-secondary">Ir a la sección anterior</a>
        <input type="submit" name="submit" class="btn btn-secondary" value="Guardar e ir a la siguiente sección">
    </center>
</div>
