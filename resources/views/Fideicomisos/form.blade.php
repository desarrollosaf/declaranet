<div class="card-body" id="color">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"><strong>Titular de la participación:</strong></label>
                    {!! Form::select('fideicomisos[tipo_relaciones_id]', $participacion, isset($fideicomisos) ? $fideicomisos->tipo_relaciones_id : [],['class'=>'form-control',  'id' => 'tipo_relaciones_id', 'required' => true]) !!}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="ProcessNum"><strong>Tipo de fideicomiso:</strong></label>
                    {!! Form::select('fideicomisos[tipo_fideicomisos_id]', $fideicomiso, isset($fideicomisos) ? $fideicomisos->tipo_fideicomisos_id : [],['class'=>'form-control',  'id' => 'tipo_fideicomisos_id', 'required' => true]) !!}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="State"><strong>Tipo de participación:</strong></label>
                    {!! Form::select('fideicomisos[tipo_participacion_fideicomisos_id]', $tipoPfideicomiso, isset($fideicomisos) ? $fideicomisos->tipo_participacion_fideicomisos_id : [],['class'=>'form-control',  'id' => 'tipo_participacion_fideicomisos_id', 'required' => true]) !!}
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"><strong>Tipo de persona del fideicomiso:</strong></label>
                    {!! Form::select('fideicomisos[tipo_persona_fideicomiso]', $tipoPersonaFideicomiso, isset($fideicomisos) ? $fideicomisos->tipo_persona_fideicomiso : [],['class'=>'form-control',  'id' => 'tipo_persona_fideicomiso', 'required' => true]) !!}
                </div>
            </div>
            <div class="col-lg-4" id="fisica_fideicomiso">
                <div class="form-group">
                    <label class="control-label" for="ProcessNum"><strong>Nombre de la persona fisica:</strong></label>
                    {!! Form::text('fideicomisos[nombre_persona_fisica]', isset($fideicomisos) ? $fideicomisos->nombre_persona_fisica : null,['class'=>'form-control', 'placeholder'=>'P. ej. Juan Hernandez.',   'id' => 'nombre_persona_fisica']) !!}
                </div>
            </div>
            <div class="col-lg-4" id="fisica_fideicomiso">
                <div class="form-group">
                    <label class="control-label" for="State"><strong>RFC de la persona fisica:</strong></label>
                    {!! Form::text('fideicomisos[rfc_persona_fisica]', isset($fideicomisos) ? $fideicomisos->rfc_persona_fisica : null,['class'=>'form-control', 'placeholder'=>'P. ej. XAXA010101XAX',   'id' => 'rfc_persona_fisica']) !!}
                </div>
            </div>

            <div class="col-lg-4" id="moral_fideicomiso" style="display: none;">
                <div class="form-group">
                    <label class="control-label" for="ProcessNum"><strong>Razón social de la persona moral:</strong></label>
                    {!! Form::text('fideicomisos[nombre_persona_moral]', isset($fideicomisos) ? $fideicomisos->nombre_persona_moral : null,['class'=>'form-control', 'placeholder'=>'P. ej. MAE S.A. de C.V.',   'id' => 'nombre_persona_moral']) !!}
                </div>
            </div>
            <div class="col-lg-4" id="moral_fideicomiso" style="display: none;">
                <div class="form-group">
                    <label class="control-label" for="State"><strong>RFC de la persona moral:</strong></label>
                    {!! Form::text('fideicomisos[rfc_persona_moral]', isset($fideicomisos) ? $fideicomisos->rfc_persona_moral : null,['class'=>'form-control', 'placeholder'=>'P. ej. XAXA010101XAX',   'id' => 'rfc_persona_moral']) !!}
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"><strong>Fideicomitente:</strong></label>
                    {!! Form::select('fideicomisos[tipo_persona_fideicomitente]', $tipoPersonaFideicomisoD, isset($fideicomisos) ? $fideicomisos->tipo_persona_fideicomitente : [],['class'=>'form-control',  'id' => 'tipo_persona_fideicomitente', 'required' => true]) !!}
                </div>
            </div>
            <div class="col-lg-4" id="fisica_Fideicomitente">
                <div class="form-group">
                    <label class="control-label" for="ProcessNum"><strong>Nombre del fideicomitente:</strong></label>
                    {!! Form::text('fideicomisos[nombre_fideicomitente_fisica]', isset($fideicomisos) ? $fideicomisos->nombre_fideicomitente_fisica : null,['class'=>'form-control', 'placeholder'=>'P. ej. Juan Perez',   'id' => 'nombre_fideicomitente_fisica']) !!}
                </div>
            </div>
            <div class="col-lg-4" id="fisica_Fideicomitente">
                <div class="form-group">
                    <label class="control-label" for="State"><strong>RFC del fideicomitente:</strong></label>
                    {!! Form::text('fideicomisos[rfc_fideicomitente_fisica]', isset($fideicomisos) ? $fideicomisos->rfc_fideicomitente_fisica : null,['class'=>'form-control', 'placeholder'=>'P. ej. XAXA010101XAX',   'id' => 'rfc_fideicomitente_fisica']) !!}
                </div>
            </div>

            <div class="col-lg-4" id="moral_Fideicomitente" style="display: none;">
                <div class="form-group">
                    <label class="control-label" for="ProcessNum"><strong>Razón social del fideicomitente:</strong></label>
                    {!! Form::text('fideicomisos[nombre_fideicomitente_moral]', isset($fideicomisos) ? $fideicomisos->nombre_fideicomitente_moral : null,['class'=>'form-control', 'placeholder'=>'P. ej. MAE S.A. de C.V.',   'id' => 'nombre_fideicomitente_moral']) !!}
                </div>
            </div>
            <div class="col-lg-4" id="moral_Fideicomitente" style="display: none;">
                <div class="form-group">
                    <label class="control-label" for="State"><strong>RFC del fideicomitente:</strong></label>
                    {!! Form::text('fideicomisos[rfc_fideicomitente_moral]', isset($fideicomisos) ? $fideicomisos->rfc_fideicomitente_moral : null,['class'=>'form-control', 'placeholder'=>'P. ej. XAXA010101XAX',   'id' => 'rfc_fideicomitente_moral']) !!}
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"><strong>Fiduciario:</strong></label>
                    {!! Form::select('fideicomisos[tipo_persona_fiduciario]', $tipoPersonaFideicomiso, isset($fideicomisos) ? $fideicomisos->tipo_persona_fiduciario : [],['class'=>'form-control',  'id' => 'tipo_persona_fiduciario', 'required' => true]) !!}
                </div>
            </div>
            <div class="col-lg-4" id="fisica_Fiduciario">
                <div class="form-group">
                    <label class="control-label" for="ProcessNum"><strong>Nombre del fiduciario:</strong></label>
                    {!! Form::text('fideicomisos[nombre_fiduciario_fisica]', isset($fideicomisos) ? $fideicomisos->nombre_fiduciario_fisica : null,['class'=>'form-control', 'placeholder'=>'P. ej. Juan Perez',   'id' => 'nombre_fiduciario_fisica']) !!}
                </div>
            </div>
            <div class="col-lg-4" id="fisica_Fiduciario">
                <div class="form-group">
                    <label class="control-label" for="State"><strong>RFC del fiduciario:</strong></label>
                    {!! Form::text('fideicomisos[rfc_fiduciario_fisica]', isset($fideicomisos) ? $fideicomisos->rfc_fiduciario_fisica : null,['class'=>'form-control', 'placeholder'=>'P. ej. XAXA010101XAX',   'id' => 'rfc_fiduciario_fisica']) !!}
                </div>
            </div>

            <div class="col-lg-4" id="moral_Fiduciario" style="display: none;">
                <div class="form-group">
                    <label class="control-label" for="ProcessNum"><strong>Razón social del fiduciario:</strong></label>
                    {!! Form::text('fideicomisos[nombre_fiduciario_moral]', isset($fideicomisos) ? $fideicomisos->nombre_fiduciario_moral : null,['class'=>'form-control', 'placeholder'=>'P. ej. MAE S.A. de C.V.',   'id' => 'nombre_fiduciario_moral']) !!}
                </div>
            </div>
            <div class="col-lg-4" id="moral_Fiduciario" style="display: none;">
                <div class="form-group">
                    <label class="control-label" for="State"><strong>RFC del fiduciario:</strong></label>
                    {!! Form::text('fideicomisos[rfc_fiduciario_moral]', isset($fideicomisos) ? $fideicomisos->rfc_fiduciario_moral : null,['class'=>'form-control', 'placeholder'=>'P. ej. XAXA010101XAX',   'id' => 'rfc_fiduciario_moral']) !!}
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"><strong>Fideicomisario:</strong></label>
                    {!! Form::select('fideicomisos[tipo_persona_fideicomisario]', $tipoPersonaFideicomisoD, isset($fideicomisos) ? $fideicomisos->tipo_persona_fideicomisario : [],['class'=>'form-control',  'id' => 'tipo_persona_fideicomisario', 'required' => true]) !!}
                </div>
            </div>
            <div class="col-lg-4" id="fisica_Fideicomisario">
                <div class="form-group">
                    <label class="control-label" for="ProcessNum"><strong>Nombre del fideicomisario:</strong></label>
                    {!! Form::text('fideicomisos[nombre_fideicomisario_fisica]', isset($fideicomisos) ? $fideicomisos->nombre_fideicomisario_fisica : null,['class'=>'form-control', 'placeholder'=>'P. ej. Juan Perez',   'id' => 'nombre_fideicomisario_fisica']) !!}
                </div>
            </div>
            <div class="col-lg-4" id="fisica_Fideicomisario">
                <div class="form-group">
                    <label class="control-label" for="State"><strong>RFC del fideicomisario:</strong></label>
                    {!! Form::text('fideicomisos[rfc_fideicomisario_fisica]', isset($fideicomisos) ? $fideicomisos->rfc_fideicomisario_fisica : null,['class'=>'form-control', 'placeholder'=>'P. ej. XAXA010101XAX',   'id' => 'rfc_fideicomisario_fisica']) !!}
                </div>
            </div>

            <div class="col-lg-4" id="moral_Fideicomisario" style="display: none;">
                <div class="form-group">
                    <label class="control-label" for="ProcessNum"><strong>Razón social del fideicomisario:</strong></label>
                    {!! Form::text('fideicomisos[nombre_fideicomisario_moral]', isset($fideicomisos) ? $fideicomisos->nombre_fideicomisario_moral : null,['class'=>'form-control', 'placeholder'=>'P. ej. MAE S.A. de C.V.',   'id' => 'nombre_fideicomisario_moral']) !!}
                </div>
            </div>
            <div class="col-lg-4" id="moral_Fideicomisario" style="display: none;">
                <div class="form-group">
                    <label class="control-label" for="State"><strong>RFC del fideicomisario:</strong></label>
                    {!! Form::text('fideicomisos[rfc_fideicomisario_moral]', isset($fideicomisos) ? $fideicomisos->rfc_fideicomisario_moral : null,['class'=>'form-control', 'placeholder'=>'P. ej. XAXA010101XAX',   'id' => 'rfc_fideicomisario_moral']) !!}
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"><strong>Sector al que pertenece:</strong></label>
                    {!! Form::select('fideicomisos[sectores_id]', $sector, isset($fideicomisos) ? $fideicomisos->sectores_id : [],['class'=>'form-control',  'id' => 'sectores_id', 'required' => true]) !!}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="ProcessNum"><strong>Especifique:</strong></label>
                    {!! Form::text('fideicomisos[especifique_sector]', isset($fideicomisos) ? $fideicomisos->especifique_sector : null,['class'=>'form-control', 'placeholder'=>'P. ej. XAXA010101XAX',   'id' => 'especifique_sector', 'disabled' => 'disabled']) !!}

                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="State"><strong>¿Dónde se localiza el fideicomiso?</strong></label>
                    {!! Form::select('fideicomisos[lugares_ubicacion_id]', $lugar, isset($fideicomisos) ? $fideicomisos->lugares_ubicacion_id : [],['class'=>'form-control',  'id' => 'lugares_ubicacion_id', 'required' => true]) !!}
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4" id="mx">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"><strong>Entidad federativa:</strong></label>
                    {!! Form::select('fideicomisos[entidades_id]', $entidad, isset($fideicomisos) ? $fideicomisos->entidades_id : [],['class'=>'form-control',  'id' => 'entidades_id', 'placeholder' => 'SELECCIONA UNA OPCIÓN']) !!}
                </div>
            </div>
            <div class="col-lg-4" id="ex" style="display: none;">
                <div class="form-group">
                    <label class="control-label" for="ProcessNum"><strong>País donde se localiza:</strong></label>
                    {!! Form::select('fideicomisos[paises_id]', $pais, isset($fideicomisos) ? $fideicomisos->paises_id : [],['class'=>'form-control',  'id' => 'paises_id']) !!}
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <strong>Aclaraciones/Observaciones</strong>:</label>
                    {!! Form::textarea('fideicomisos[aclaraciones]', isset($fideicomisos) ? $fideicomisos->aclaraciones : null,['class'=>'form-control alert-danger',  'id' => 'aclaraciones']) !!}
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
                <a href="{{route("beneficios_privados.index")}}" class="btn btn-sm btn-submit text-light">Ir a la sección anterior</a>
            </div>
            <div class="col">
                {{ Form::button('Guardar e ir a la siguiente sección', ['type' => 'submit', 'class' => 'btn btn-submit text-light float-right'] )}}
            </div>
        </div>
    </div>
</div>


<br>

@section('scripts')
    <script type="text/javascript">
        $("#tipo_persona_fideicomiso").on("change",function(){
            var tipo_persona_fideicomiso = document.getElementById("tipo_persona_fideicomiso").value
            if(tipo_persona_fideicomiso == '1'){
                document.getElementById('fisica_fideicomiso').style.display="block";
                document.getElementById("moral_fideicomiso").style.display="none";
            }else{
                document.getElementById('fisica_fideicomiso').style.display="none";
                document.getElementById("moral_fideicomiso").style.display="block";
            }
        });

        $("#tipo_persona_fiduciario").on("change",function(){
            var tipo_persona_fiduciario = document.getElementById("tipo_persona_fiduciario").value
            if(tipo_persona_fiduciario == '1'){
                document.getElementById('fisica_Fiduciario').style.display="block";
                document.getElementById("moral_Fiduciario").style.display="none";
            }else{
                document.getElementById('fisica_Fiduciario').style.display="none";
                document.getElementById("moral_Fiduciario").style.display="block";
            }
        });

        $("#sectores_id").on("change",function(){
            var sectores_id = document.getElementById("sectores_id").value
            if(sectores_id == '17'){
                $("#especifique_sector").prop("disabled",false);
            }else{
                $("#especifique_sector").prop("disabled",true);
            }
        });

        $("#lugares_ubicacion_id").on("change",function(){
            var lugares_ubicacion_id = document.getElementById("lugares_ubicacion_id").value
            if(lugares_ubicacion_id == '1'){
                document.getElementById('mx').style.display="block";
                document.getElementById("ex").style.display="none";
                $("#entidad_federativa").prop("disabled",false);
            }else if(lugares_ubicacion_id == '2'){
                document.getElementById('mx').style.display="none";
                document.getElementById("ex").style.display="block";
                $("#entidad_federativa").prop("disabled",true);
            }else{
                document.getElementById('mx').style.display="block";
                document.getElementById("ex").style.display="none";
                $("#entidad_federativa").prop("disabled",true);
            }
        });

        $("#tipo_persona_fideicomitente").on("change",function(){
            var tipo_persona_fideicomitente = document.getElementById("tipo_persona_fideicomitente").value
            if(tipo_persona_fideicomitente == '1'){
                document.getElementById('fisica_Fideicomitente').style.display="block";
                document.getElementById("moral_Fideicomitente").style.display="none";
            }else if(tipo_persona_fideicomitente == '2'){
                document.getElementById('fisica_Fideicomitente').style.display="none";
                document.getElementById("moral_Fideicomitente").style.display="block";
            }else{
                document.getElementById('fisica_Fideicomitente').style.display="block";
                document.getElementById("moral_Fideicomitente").style.display="none";
            }
        });


        $("#tipo_persona_fideicomisario").on("change",function(){
            var tipo_persona_fideicomisario = document.getElementById("tipo_persona_fideicomisario").value
            if(tipo_persona_fideicomisario == '1'){
                document.getElementById('fisica_Fideicomisario').style.display="block";
                document.getElementById("moral_Fideicomisario").style.display="none";
            }else if(tipo_persona_fideicomisario == '2'){
                document.getElementById('fisica_Fideicomisario').style.display="none";
                document.getElementById("moral_Fideicomisario").style.display="block";
            }else{
                document.getElementById('fisica_Fideicomisario').style.display="block";
                document.getElementById("moral_Fideicomisario").style.display="none";
            }
        });

        $("#tipo_relaciones_id").on("change",function(){
            var tipo_relaciones_id = document.getElementById("tipo_relaciones_id").value
            if(tipo_relaciones_id == '1') {
                $("#color").find("select").prop("class","form-control");
                $("#color").find("input").prop("class","form-control");
                $("#tipo_persona_fideicomitente").on("change", function () {
                    var tipo_persona_fideicomitente = document.getElementById("tipo_persona_fideicomitente").value
                    if (tipo_persona_fideicomitente == '1') {
                        $("#nombre_fideicomitente_fisica").prop("class", "form-control alert-danger");
                        $("#rfc_fideicomitente_fisica").prop("class", "form-control alert-danger");
                    }else{
                        $("#nombre_fideicomitente_fisica").prop("class", "form-control");
                        $("#rfc_fideicomitente_fisica").prop("class", "form-control");
                    }
                });
                $("#tipo_persona_fiduciario").on("change", function () {
                    var tipo_persona_fiduciario = document.getElementById("tipo_persona_fiduciario").value
                    if (tipo_persona_fiduciario == '1') {
                        $("#nombre_fiduciario_fisica").prop("class", "form-control alert-danger");
                        $("#rfc_fiduciario_fisica").prop("class", "form-control alert-danger");
                    }else{
                        $("#nombre_fiduciario_fisica").prop("class", "form-control");
                        $("#rfc_fiduciario_fisica").prop("class", "form-control");
                    }
                });

                $("#tipo_persona_fideicomisario").on("change", function () {
                    var tipo_persona_fideicomisario = document.getElementById("tipo_persona_fideicomisario").value
                    if (tipo_persona_fideicomisario == '1') {
                        $("#nombre_fideicomisario_fisica").prop("class", "form-control alert-danger");
                        $("#rfc_fideicomisario_fisica").prop("class", "form-control alert-danger");
                    }else{
                        $("#nombre_fideicomisario_fisica").prop("class", "form-control");
                        $("#rfc_fideicomisario_fisica").prop("class", "form-control");
                    }
                });
            }else{
                $("#color").find("select").prop("class","form-control alert-danger");
                $("#color").find("input").prop("class","form-control alert-danger");
                $("#submit").prop("class","btn btn-secondary");
            }
        });


        if($("#accion").val() == "editar"){
            $("#tipo_persona_fideicomiso").change();
            $("#tipo_persona_fiduciario").change();
            $("#sectores_id").change();
            $("#lugares_ubicacion_id").change();
            $("#tipo_persona_fideicomitente").change();
            $("#tipo_persona_fideicomisario").change();
            $("#tipo_relaciones_id").change();
            document.getElementById("edit").style.display="block";
            document.getElementById("crearF").style.display="none";
        }else if($("#accion").val() == "crear"){
            document.getElementById("crearF").style.display="block";
            document.getElementById("edit").style.display="none";
        }
    </script>
@endsection
