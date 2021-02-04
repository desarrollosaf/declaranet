<div class="card-body">
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <strong> {!! Form::label('bienesMuebles.titular_bien_id', 'Titular del bien: *') !!}</strong>
                {!! Form::select('bienesMuebles[titular_bien_id]',$selectTitular, (isset($bienMueble->titular_bien_id)) ? $bienMueble->titular_bien_id : null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'titular_bien', 'placeholder' => 'SELECCIONA UNA OPCIÓN'])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <strong>{!! Form::label('bienesMuebles.tipo_bien_id', 'Tipo de bien: *') !!}</strong>
                {!! Form::select('bienesMuebles[tipo_bien_id]',$selectTipoBien, (isset($bienMueble->tipo_bien_id)) ? $bienMueble->tipo_bien_id : null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'tipo_bien','placeholder' => 'SELECCIONA UNA OPCIÓN'])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group especifique">
                <strong>{!! Form::label('bienesMuebles.especifique', 'Especifique:') !!}</strong>
                {!! Form::text('bienesMuebles[especifique]', (isset($bienMueble->especifique)) ? $bienMueble->especifique : null,['class'=>'form-control text-uppercase tipo-dato' , 'id' => 'especifique', 'placeholder'=>"p. ej . Especifique" ])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
            <div class="form-group descripcion-bien">
                <strong>{!! Form::label('bienesMuebles.descripcion_bien', 'Descripción del bien:') !!}</strong>
                {!! Form::text('bienesMuebles[descripcion_bien]', (isset($bienMueble->descripcion_bien)) ? $bienMueble->descripcion_bien : null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'descripcion_bien', 'placeholder'=>"p. ej. Descripción", "pattern"=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}"])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
    </div>
    <div class="row tipo-tercero">
        <div class="col-lg-4">
            <div class="form-group">
                <strong>{!! Form::label('bienesMuebles.tipo_tercero_id', 'Tipo de tercero:') !!}</strong>
                {!! Form::select('bienesMuebles[tipo_tercero_id]',$selectTipoTercero, (isset($bienMueble->tipo_tercero_id)) ? $bienMueble->tipo_tercero_id : null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'tipo_tercero', 'placeholder' => 'SELECCIONA UNA OPCIÓN'])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group nombre-tercero">
                <strong>{!! Form::label('bienesMuebles.nombre_tercero', 'Nombre del tercero:') !!}</strong>
                {!! Form::text('bienesMuebles[nombre_tercero]', (isset($bienMueble->nombre_tercero)) ? $bienMueble->nombre_tercero : null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'nombre_tercero', 'placeholder'=>"p. ej. Juan Robles Rosas", 'pattern' =>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}"])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
            <div class="form-group denominacion-razon">
                <strong>{!! Form::label('bienesMuebles.denominacion_razon', 'Denominación o razón social:') !!}</strong>
                {!! Form::text('bienesMuebles[denominacion_razon]', (isset($bienMueble->denominacion_razon)) ? $bienMueble->denominacion_razon : null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'denominacion_razon', 'placeholder'=>"p. ej. Desarrollo y Redes S.A DE C.V", 'pattern' =>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}"])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <strong>{!! Form::label('bienesMuebles.rfc_tercero', 'RFC:') !!}</strong>
                {!! Form::text('bienesMuebles[rfc_tercero]', (isset($bienMueble->rfc_tercero)) ? $bienMueble->rfc_tercero : null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'rfc-tercero'])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <strong>{!! Form::label('bienesMuebles.transmisor_propiedad_id', 'Transmisor de la propiedad: *') !!}</strong>
                {!! Form::select('bienesMuebles[transmisor_propiedad_id]',$selectTransmisores, (isset($bienMueble->transmisor_propiedad_id)) ? $bienMueble->transmisor_propiedad_id : null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'transmisor_propiedad','placeholder' => 'SELECCIONA UNA OPCIÓN'])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group nombre-razon">
                <strong>{!! Form::label('bienesMuebles.nombre_transmisor', 'Nombre del transmisor: *') !!}</strong>
                {!! Form::text('bienesMuebles[nombre_transmisor]', (isset($bienMueble->nombre_transmisor)) ? $bienMueble->nombre_transmisor : null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'nombre_transmisor', 'placeholder'=>"p. ej. Juan Pérez.", "pattern"=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}", 'disabled' => true])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
            <div class="form-group denominacion-rs-transmisor">
                <strong>{!! Form::label('bienesMuebles.denominacion_rs_transmisor', 'Denominacion o razón social del transmisor: *') !!}</strong>
                {!! Form::text('bienesMuebles[denominacion_rs_transmisor]', (isset($bienMueble->denominacion_rs_transmisor)) ? $bienMueble->denominacion_rs_transmisor : null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'denominacion_rs_transmisor', 'placeholder '=>"p. ej. Desarrollo y Redes S.A. de C.V.", "pattern"=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}"])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <strong>{!! Form::label('bienesMuebles.rfc_transmisor', 'RFC: *') !!}</strong>
                {!! Form::text('bienesMuebles[rfc_transmisor]', (isset($bienMueble->rfc_transmisor)) ? $bienMueble->rfc_transmisor : null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'rfc-transmisor'])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group relacion-transmisor">
                <strong>{!! Form::label('bienesMuebles.relacion_transmisor_id', 'Relación del transmisor del mueble con el titular: *') !!}</strong>
                {!! Form::select('bienesMuebles[relacion_transmisor_id]', $selectRelacionTransmisor, (isset($bienMueble->relacion_transmisor_id)) ? $bienMueble->relacion_transmisor_id : null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'relacion_transmisor','placeholder' => 'SELECCIONA UNA OPCIÓN'])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group especifique-relacion-transmisor">
                <strong>{!! Form::label('bienesMuebles.especifique_relacion_transmisor', 'Especifique:') !!}</strong>
                {!! Form::text('bienesMuebles[especifique_relacion_transmisor]', (isset($bienMueble->especifique_relacion_transmisor)) ? $bienMueble->especifique_relacion_transmisor : null,['class'=>'form-control text-uppercase tipo-dato' , 'id' => 'especifique_relacion_transmisor', 'placeholder'=>"p. ej . Especifique" ])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <strong>{!! Form::label('bienesMuebles.forma_adquisicion_id', 'Forma de adquisición: *') !!}</strong>
                {!! Form::select('bienesMuebles[forma_adquisicion_id]',$selectFormaAdquisicion, (isset($bienMueble->forma_adquisicion_id)) ? $bienMueble->forma_adquisicion_id : null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'forma_adquisicion','placeholder' => 'SELECCIONA UNA OPCIÓN'])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <strong>{!! Form::label('bienesMuebles.forma_pago_id', 'Forma de pago: *') !!}</strong>
                {!! Form::select('bienesMuebles[forma_pago_id]',$selectFormaPago, (isset($bienMueble->forma_pago_id)) ? $bienMueble->forma_pago_id : null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'forma_pago','placeholder' => 'SELECCIONA UNA OPCIÓN'])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <strong>{!! Form::label('bienesMuebles.valor_adquisicion', 'Valor de adquisición del mueble:') !!}</strong>
                {!! Form::number('bienesMuebles[valor_adquisicion]', (isset($bienMueble->valor_adquisicion)) ? $bienMueble->valor_adquisicion : null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'valor_adquisicion', 'placeholder'=>"p. ej. 100000.00 Mxn"])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <strong>{!! Form::label('bienesMuebles.tipo_moneda_id', 'Tipo de moneda:') !!}</strong>
                {!! Form::select('bienesMuebles[tipo_moneda_id]', $selectTipoMoneda, (isset($bienMueble->tipo_moneda_id)) ? $bienMueble->tipo_moneda_id : 101,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'tipo_moneda','placeholder' => 'SELECCIONA UNA OPCIÓN'])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <strong>{!! Form::label('bienesMuebles.fecha_adquisicion', 'Fecha de adquisición del mueble: *') !!}</strong>
                {!! Form::date('bienesMuebles[fecha_adquisicion]', (isset($bienMueble->fecha_adquisicion)) ? $bienMueble->fecha_adquisicion : null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'fecha_adquisicion', 'max' => date('Y-m-d')])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <strong>{!! Form::label('bienesMuebles.aclaraciones', 'Aclaraciones/Observaciones:') !!}</strong>
                {!! Form::textarea('bienesMuebles[aclaraciones]', (isset($bienMueble->aclaraciones)) ? $bienMueble->aclaraciones : null,['class'=>'form-control text-uppercase alert-danger', 'id' => 'aclaraciones'])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                <br>
                <a href="{{route("vehiculos.index")}}" class="btn btn-submit text-light">Ir a la sección anterior</a>
                <input type="submit" name="submit" class="btn btn-submit text-light"
                       value="Guardar e ir a la siguiente sección">
            </div>
        </div>
    </div>
</div>

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $(".card-body").find("input").prop("required", true);
            $(".card-body").find("select").prop("required", true);
            $(".tipo-tercero").find("input").prop("required", false);
            $(".tipo-tercero").find("select").prop("required", false);
            $(".tipo-tercero").hide();
            $(".especifique").hide();
            $(".denominacion-razon").hide();
            $(".denominacion-rs-transmisor").hide();
            $("#titular_bien").change(function () {
                var tipoTitular = $(this).val();
                if (tipoTitular !== "1" && tipoTitular !== "") {
                    $(".tipo-dato").addClass("alert-danger");
                    if (tipoTitular === "6") {
                        $(".tipo-tercero").show();
                        $(".tipo-tercero").find("input").prop("required", true);
                        $(".tipo-tercero").find("select").prop("required", true);
                    } else {
                        $(".tipo-tercero").hide();
                        $(".tipo-tercero").find("input").prop("required", false);
                        $(".tipo-tercero").find("select").prop("required", false);
                        $("#tipo_tercero").val("");
                        $("#nombre_tercero").val("");
                        $("#denominacion_razon").val("");
                        $("#rfc-tercero").val("");
                    }
                } else {
                    $(".tipo-dato").removeClass("alert-danger");
                }
            });
            $("#tipo_bien").change(function () {
                var tipoBien = parseInt($(this).val());
                if (tipoBien === 6) {
                    $(".descripcion-bien").hide();
                    $(".especifique").show();
                    $("#descripcion_bien").val("");
                    $("#descripcion_bien").prop("required", false);
                    $("#especifique").prop("required", true);
                } else {
                    $(".descripcion-bien").show();
                    $(".especifique").hide();
                    $("#especifique").val("");
                    $("#especifique").prop("required", false);
                    $("#descripcion_bien").prop("required", true);


                }
            });
            $("#tipo_tercero").change(function () {
                var tipoTercero = parseInt($(this).val());
                if (tipoTercero === 2) {
                    $(".nombre-tercero").hide();
                    $("#nombre_tercero").val("");
                    $(".denominacion-razon").show();
                    $("#nombre_tercero").prop("required", false);
                    $("#denominacion_razon").prop("required", true);
                    $("#rfc-tercero").attr("pattern", '([A-Za-z]{3}[0-9]{6}[A-Za-z0-9]{3})');
                    $("#rfc-tercero").attr("placeholder", "p. ej. XXX010101");

                } else if (tipoTercero === 1) {
                    $(".nombre-tercero").show();
                    $(".denominacion-razon").hide();
                    $("#denominacion_razon").val("");
                    $("#nombre_tercero").prop("required", true);
                    $("#denominacion_razon").prop("required", false);
                    $("#rfc-tercero").attr("pattern", '([A-Za-z]{4}[0-9]{6}[A-Za-z0-9]{3})');
                    $("#rfc-tercero").attr("placeholder", "p. ej. XXXX010101");
                }
            })
            $("#transmisor_propiedad").change(function () {
                var transmisorDenominacion = parseInt($(this).val());
                if (transmisorDenominacion === 2) {
                    $(".nombre-razon").hide();
                    $("#nombre_transmisor").val("");
                    $(".denominacion-rs-transmisor").show();
                    $('#rfc-transmisor').attr("pattern", '([A-Za-z]{3}[0-9]{6}[A-Za-z0-9]{3})');
                    $('#rfc-transmisor').attr("placeholder", "p. ej. XAX010101XXX");
                    $("#denominacion_rs_transmisor").prop("required", true);
                    $("#nombre_transmisor").prop("required", false);
                    $("#nombre_transmisor").val("");
                    $('#rfc-transmisor').prop("required", true)
                } else {
                    $(".nombre-razon").show();
                    $("#nombre_transmisor").prop("disabled", false);
                    $("#denominacion_rs_transmisor").val("");
                    $(".denominacion-rs-transmisor").hide();
                    $('#rfc-transmisor').attr("pattern", '([A-Za-z]{4}[0-9]{6}[A-Za-z0-9]{3})');
                    $('#rfc-transmisor').attr("placeholder", "p. ej. XXXX010101");
                    $("#denominacion_rs_transmisor").prop("required", false)
                    $("#nombre_transmisor").prop("required", true)
                    $("#denominacion_rs_transmisor").val("");
                    $('#rfc-transmisor').prop("required", false)
                }
            });

            $("#relacion_transmisor").change(function () {
                var relacionTransmisorMueble = parseInt($(this).val());
                if (relacionTransmisorMueble === 20) {
                    $("#especifique_relacion_transmisor").prop("required", true).prop("readOnly", false);
                } else {
                    $("#especifique_relacion_transmisor").prop("required", false).prop("readOnly", true);
                    $("#especifique_relacion_transmisor").val('')
                }
            });
            @isset($bienMueble)
            $("#titular_bien").change();
            $("#tipo_bien").change();
            $("#tipo_tercero").change();
            $("#transmisor_propiedad").change();
            $("#relacion_transmisor").change();
            @endisset
        });

    </script>
@endsection
