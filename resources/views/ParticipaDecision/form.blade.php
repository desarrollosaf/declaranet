<div class="card-body">
    <div class="alert alert-danger" role="alert" style="background-color:#E8CECF">
        <strong> Todos los datos de la participación en alguna de estas instituciones de la pareja o dependientes económicos no serán públicos</strong>
    </div>

    <hr>
    <!-- Primera fila  -->
    <div id="color">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"> <strong>Titular de la participación: </strong></label>
                    {!! Form::select('participaciones[tipo_relaciones_id]', $participacion, isset($participaciones) ? $participaciones->tipo_relaciones_id : [],['class'=>'form-control',  'id' => 'tipo_relaciones_id', 'required' => true]) !!}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="ProcessNum"> <strong>Tipo de Institución: </strong></label>
                {!! Form::select('participaciones[tipo_instituciones_id]', $institucion, isset($participaciones) ? $participaciones->tipo_instituciones_id : [],['class'=>'form-control',  'id' => 'tipo_instituciones_id', 'required' => true]) !!}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" style="text-align:justify"> <strong>Especifique: </strong></label>
                    {!! Form::text('participaciones[especifique_institucion]',isset($participaciones) ? $participaciones->especifique_institucion :null,['class'=>'form-control', 'placeholder'=>'P. ej. No gubernamental', 'disabled'=>'disabled',  'id' => 'especifique_institucion']) !!}
                </div>
            </div>
        </div>
    </div>

    <!-- Segunda fila  -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="State"> <strong>Nombre de la Institución: </strong></label>
                    {!! Form::text('participaciones[nombre_institucion]',isset($participaciones) ? $participaciones->nombre_institucion :null,['class'=>'form-control', 'placeholder'=>'P. ej. Ayuda Canica A.C.',  'id' => 'nombre_institucion']) !!}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="State"> <strong>RFC: </strong></label>
                    {!! Form::text('participaciones[rfc]',isset($participaciones) ? $participaciones->rfc :null,['class'=>'form-control', 'placeholder'=>'P. ej. XAX010101010',  'id' => 'rfc', 'pattern' => "([A-Z]{4}[0-9]{6})"]) !!}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="ProcessNum"> <strong>Puesto / rol: </strong></label>
                    {!! Form::text('participaciones[puesto_rol]',isset($participaciones) ? $participaciones->puesto_rol :null,['class'=>'form-control', 'placeholder'=>'P. ej. Analista de sistemas',  'id' => 'puesto_rol', 'pattern' => "[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}"]) !!}
                </div>
            </div>

        </div>
    </div>


    <!-- Tercer fila  -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" style="line-height : 13px;"> <strong>Fecha de inicio de participación dentro de la institución: </strong></label>
                    {!! Form::date('participaciones[fecha_inicio]',isset($participaciones) ? $participaciones->fecha_inicio :null,['class'=>'form-control',   'id' => 'fecha_inicio']) !!}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" style="line-height : 13px;"> <strong>¿Recibe remuneración por su participación? </strong></label>
                    {!! Form::select('participaciones[remuneracion]', $remuneracion, isset($participaciones) ? $participaciones->remuneracion : [],['class'=>'form-control',  'id' => 'remuneracion', 'required' => true]) !!}
                </div>
            </div>


            <div class="col-lg-4" >
                <div class="form-group">
                    <label class="control-label" for="NumDoc"> <strong>Monto mensual neto:</strong></label>
                    {!! Form::text('participaciones[monto_mensual]',isset($participaciones) ? $participaciones->monto_mensual :null,['class'=>'form-control', 'placeholder'=>'P. ej. $1,000,000.00 Mxn',  'id' => 'monto_mensual', 'disabled' => 'disabled']) !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <label class="control-label" for="ProcessNum"> <strong>Lugar donde se ubica: </strong></label>
                {!! Form::select('participaciones[lugares_ubicacion_id]', $lugar, isset($participaciones) ? $participaciones->lugares_ubicacion_id : [],['class'=>'form-control',  'id' => 'lugares_ubicacion_id', 'required' => true]) !!}
            </div>

            <div class="col-lg-4">
                <div class="form-group">
                    <div id="mx">
                        <label class="form-check-label" for="inlineCheckbox1"> <strong>Entidad federativa: </strong></label>
                        {!! Form::text('participaciones[entidad_federativa]',isset($participaciones) ? $participaciones->entidad_federativa :null,['class'=>'form-control', 'placeholder'=>'P. ej. México',  'id' => 'entidad_federativa', 'disabled' => 'disabled']) !!}
                    </div>
                    <div id="ex" style="display: none;">
                        <label class="form-check-label" for="inlineCheckbox1"> <strong>País donde se localiza: </strong></label>
                        {!! Form::select('participaciones[paises_id]', $pais, isset($participaciones) ? $participaciones->paises_id : [],['class'=>'form-control',  'id' => 'paises_id']) !!}
                    </div>
                </div>
            </div>

        </div>
    </div>

    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"> <strong>Aclaraciones / Observaciones:</strong></label>
                    {!! Form::textarea('participaciones[aclaraciones]',isset($participaciones) ? $participaciones->aclaraciones :null,['class'=>'form-control alert-danger', 'placeholder'=>'',  'id' => 'aclaraciones']) !!}

                </div>
            </div>
        </div>
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

</div>

@section('scripts')
    <script type="text/javascript">
        $("#tipo_instituciones_id").on("change",function(){
            var tipo_instituciones_id = document.getElementById("tipo_instituciones_id").value
            if(tipo_instituciones_id == 5){
                $("#especifique_institucion").prop("disabled", false);
            }else{
                $("#especifique_institucion").prop("disabled", true);
                $("#especifique_institucion").val("");
            }
        });

        $("#remuneracion").on("change",function(){
            var remuneracion = document.getElementById("remuneracion").value
            if(remuneracion == 1){
                $("#monto_mensual").prop("disabled", false);
            }else{
                $("#monto_mensual").prop("disabled", true);
                $("#monto_mensual").val("");
            }
        });

        $("#lugares_ubicacion_id").on("change",function(){
            var lugares_ubicacion_id = document.getElementById("lugares_ubicacion_id").value
            if(lugares_ubicacion_id == 1){
                $("#entidad_federativa").prop("disabled", false);
                document.getElementById("mx").style.display="block";
                document.getElementById("ex").style.display="none";

            }else{
                $("#entidad_federativa").val("");
                document.getElementById("mx").style.display="none";
                document.getElementById("ex").style.display="block";
            }
        });

        if($("#accion").val() == "editar"){
            $("#tipo_instituciones_id").change();
            $("#remuneracion").change();
            $("#lugares_ubicacion_id").change();
            document.getElementById("edit").style.display="block";
        }else{
            document.getElementById("crearF").style.display="block";
        }

        $("#tipo_relaciones_id").on("change",function(){
            var tipo_relaciones_id = document.getElementById("tipo_relaciones_id").value
            if(tipo_relaciones_id != 1){
                $("#color").find("select").prop("class","form-control alert-danger");
                $("#color").find("input").prop("class","form-control alert-danger");
                $("#submit").prop("class","btn btn-secondary");

            }else{
                $("#color").find("select").prop("class","form-control");
                $("#color").find("input").prop("class","form-control");
                $("#submit").prop("class","btn btn-secondary");
            }
        });
    </script>
@endsection
