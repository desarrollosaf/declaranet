<div class="card-body">
    <span style="text-align: justify !important; margin-left:15px"> Se manifiestará el beneficio o ganancia directa del Declarante, si supera al mes 250 Unidades de Medida y Actualización (UMA).</span><br><br>
    <div class="alert alert-danger" role="alert" style="background-color:#E8CECF">
        Todos los datos de clientes de la pareja o dependientes económicos no serán públicos.<br>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                  <strong>¿Realiza alguna actividad lucrativa independiente al empleo, cargo o comisión?:</strong>
            </div>
            <div class="col-lg-4">
                {!! Form::select('clientes[respuestas_id]', $selectRespuestas, isset($clientes) ? $clientes->respuestas_id : [],['class'=>'form-control',  'id' => 'respuestas_id']) !!}
            </div>
        </div>
    </div><br>
<div id="si" style="display: none;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"><strong>Títular de la actividad lucrativa:</strong></label>
                    {!! Form::select('clientes[tipo_relaciones_id]', $titular, isset($clientes) ? $clientes->tipo_relaciones_id : [],['class'=>'form-control',  'id' => 'tipo_relaciones_id']) !!}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="ProcessNum"><strong>Nombre de la empresa o del servicio que proporciona:</strong></label>
                    {!! Form::text('clientes[nombre_empresa]', isset($clientes) ? $clientes->nombre_empresa : null,['class'=>'form-control', 'placeholder'=>'P. ej. MAE S.A. de C.V.',   'id' => 'nombre_empresa']) !!}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="State"><strong>RFC:</strong></label>
                    {!! Form::text('clientes[rfc]', isset($clientes) ? $clientes->rfc : null,['class'=>'form-control', 'placeholder'=>'P. ej. XAXA010101XAX',   'id' => 'rfc', 'pattern' => "([A-Z]{4}([0-9]{6}[A-Z0-9]{3})", 'title' => "Ingresa RFC a 13 dígitos"]) !!}
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"><strong>Tipo de cliente principal:</strong></label>
                    {!! Form::select('clientes[regimen_fiscal_id]', $regimen, isset($clientes) ? $clientes->regimen_fiscal_id : [],['class'=>'form-control',  'id' => 'regimen_fiscal_id']) !!}
                </div>
            </div>
            <div class="col-lg-4" id="fisica">
                    <div class="form-group">
                        <label class="control-label" for="ProcessNum"><strong>Nombre del cliente principal:</strong></label>
                        {!! Form::text('clientes[nombre_cliente]', isset($clientes) ? $clientes->nombre_cliente : null,['class'=>'form-control', 'placeholder'=>'P. ej. Juan Perez',   'id' => 'nombre_cliente']) !!}
                    </div>
            </div>
            <div class="col-lg-4" id="fisica">
                    <div class="form-group">
                        <label class="control-label" for="State"><strong>RFC:</strong></label>
                        {!! Form::text('clientes[rfc_cliente]', isset($clientes) ? $clientes->rfc_cliente : null,['class'=>'form-control', 'placeholder'=>'P. ej. XAXA010101XAX',   'id' => 'rfc_cliente', 'pattern' => "([A-Z]{4}([0-9]{6}[A-Z0-9]{3})", 'title' => "Ingresa RFC a 13 dígitos"]) !!}
                    </div>
            </div>
            <div class="col-lg-4" id="moral" style="display: none;">
                <div class="form-group">
                    <label class="control-label" for="ProcessNum"><strong>Razón social del cliente principal:</strong></label>
                    {!! Form::text('clientes[nombre_cliente_moral]', isset($clientes) ? $clientes->nombre_cliente_moral : null,['class'=>'form-control', 'placeholder'=>'P. ej. Desarrollo y Redes S.A. de C.V.',   'id' => 'nombre_cliente_moral']) !!}
                </div>
            </div>
            <div class="col-lg-4" id="moral" style="display: none;">
                <div class="form-group">
                    <label class="control-label" for="State"><strong>RFC:</strong></label>
                    {!! Form::text('clientes[rfc_cliente_moral]', isset($clientes) ? $clientes->rfc_cliente_moral : null,['class'=>'form-control', 'placeholder'=>'P. ej. XAXA010101XAX',   'id' => 'rfc_cliente_moral', 'pattern' => "([A-Z]{4}([0-9]{6}[A-Z0-9]{3})", 'title' => "Ingresa RFC a 13 dígitos"]) !!}
                </div>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"><strong>Sector productivo al que pertenece:</strong></label>
                    {!! Form::select('clientes[sectores_id]', $sector, isset($clientes) ? $clientes->sectores_id : [],['class'=>'form-control',  'id' => 'sectores_id']) !!}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="ProcessNum"><strong>Especifique:</strong></label>
                    {!! Form::text('clientes[sector_especifique]', isset($clientes) ? $clientes->sector_especifique : null,['class'=>'form-control', 'placeholder'=>'P. ej. Sector Petrolero',   'id' => 'sector_especifique', 'disabled' => 'disabled']) !!}
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="ProcessNum"><strong>Monto aproximado del beneficio o ganancia mensual que obtiene del cliente principal:</strong></label>
                    {!! Form::text('clientes[monto_beneficio]', isset($clientes) ? $clientes->monto_beneficio : null,['class'=>'form-control', 'placeholder'=>'P. ej. 10,000 MxN',   'id' => 'monto_beneficio']) !!}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"><strong>Lugar donde se ubica:</strong></label>
                    {!! Form::select('clientes[lugar_donde_resides_id]', $lugar, isset($clientes) ? $clientes->lugar_donde_resides_id : [],['class'=>'form-control',  'id' => 'lugar_donde_resides_id']) !!}
                </div>
            </div>
            <div class="col-lg-4" id="mx">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"><strong>Entidad federativa:</strong></label>
                    {!! Form::text('clientes[entidad_federativa]', isset($clientes) ? $clientes->entidad_federativa : null,['class'=>'form-control', 'placeholder'=>'P. ej. México',   'id' => 'entidad_federativa', 'disabled'=> 'disabled']) !!}
                </div>
            </div>
            <div class="col-lg-4" id="ex" style="display: none;">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"><strong>País donde se localiza:</strong></label>
                    {!! Form::select('clientes[paises_id]', $Pais, isset($clientes) ? $clientes->paises_id : [],['class'=>'form-control',  'id' => 'paises_id']) !!}
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <strong>Aclaraciones/Observaciones</strong>:</label>
                    {!! Form::textarea('clientes[aclaraciones]', isset($clientes) ? $clientes->aclaraciones : null,['class'=>'form-control alert-danger',  'id' => 'aclaraciones']) !!}
                </div>
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

@section('scripts')
    <script type="text/javascript">
        $("#respuestas_id").on("click",function(){
            var actividad_lucrativa = document.getElementById("respuestas_id").value
            if(actividad_lucrativa == '1'){
                document.getElementById("si").style.display="block";
            }else{
                document.getElementById("si").style.display="none";
                $("#tipo_relaciones_id").val("");
                $("#nombre_empresa").val("");
                $("#rfc").val("");
                $("#regimen_fiscal_id").val("");

                $("#nombre_cliente").val("");
                $("#rfc_cliente").val("");
                $("#nombre_cliente_moral").val("");
                $("#rfc_cliente_moral").val("");

                $("#sectores_id").val("");
                $("#sector_especifique").val("");
                $("#monto_beneficio").val("");
                $("#lugar_donde_resides_id").val("");
                $("#entidad_federativa").val("");
                $("#paises_id").val("");
            }
        });

        $("#tipo_relaciones_id").on("change",function(){
            var tipo_relaciones_id = document.getElementById("tipo_relaciones_id").value
            if(tipo_relaciones_id == '2' || tipo_relaciones_id == '3'){
                $("#si").find("select").prop("class","form-control alert-danger");
                $("#si").find("input").prop("class","form-control alert-danger");
                $("#submit").prop("class","btn btn-secondary");
            }else if(tipo_relaciones_id == '1') {
                $("#si").find("select").prop("class","form-control");
                $("#si").find("input").prop("class","form-control");
                $("#submit").prop("class","btn btn-secondary");
            }
        });

        $("#regimen_fiscal_id").on("change",function(){
            var regimen_fiscal_id = document.getElementById("regimen_fiscal_id").value
            if(regimen_fiscal_id == '1'){
                document.getElementById("fisica").style.display="block";
                document.getElementById("moral").style.display="none";
                $("#nombre_cliente").prop("class","form-control alert-danger");
                $("#rfc_cliente").prop("class","form-control alert-danger");

            }else{
                document.getElementById("fisica").style.display="none";
                document.getElementById("moral").style.display="block";
                $("#nombre_cliente_moral").prop("class","form-control");
                $("#rfc_cliente_moral").prop("class","form-control");
            }
        });

        $("#sectores_id").on("change",function(){
            var sectores_id = document.getElementById("sectores_id").value
            if(sectores_id == '17'){
                $("#sector_especifique").prop("disabled",false);
            }else{
                $("#sector_especifique").prop("disabled",true);            }
        });

        $("#lugar_donde_resides_id").on("change",function(){
            var lugar_donde_resides_id = document.getElementById("lugar_donde_resides_id").value
            if(lugar_donde_resides_id == '1'){
                document.getElementById("mx").style.display="block";
                document.getElementById("ex").style.display="none";
                $("#entidad_federativa").prop("disabled", false);
            }else if(lugar_donde_resides_id == '2'){
                document.getElementById("mx").style.display="none";
                document.getElementById("ex").style.display="block";
            }else{
                document.getElementById("mx").style.display="block";
                document.getElementById("ex").style.display="none";
                $("#entidad_federativa").prop("disabled", true);
            }
        });
        if($("#accion").val() == "editar"){
            $("#actividad_lucrativa").change();
            $("#tipo_relaciones_id").change();
            $("#regimen_fiscal_id").change();
            $("#sectores_id").change();
            $("#lugar_donde_resides_id").change();
            document.getElementById("edit").style.display="block";
        }else{
            document.getElementById("crearF").style.display="block";
        }

        @isset($clientes)
        var actividad_lucrativa = document.getElementById("respuestas_id").value
        if(actividad_lucrativa == '1'){
            document.getElementById("si").style.display="block";
        }else{
            document.getElementById("si").style.display="none";
        }
        @endisset

    </script>
@endsection
