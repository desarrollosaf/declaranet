<div class="row">

    <div class="col-md-10">
        <span style="font-weight: bold; color:#640223;">I. REMUNERACIÓN MENSUAL NETA DEL DECLARANTE POR SU CARGO PÚBLICO (POR CONCEPTO DE SUELDOS, HONORARIOS,
            COMPENSACIONES, BONOS Y OTRAS PRESTACIONES)</span><br>
        <label>(Cantidades netas después de impuestos).</label>
        <hr>
    </div>
    <div class="col-md-2">
        <table>
            <tr>
                <td align='right'>{!! Form::label('ingresoMensual.ingreso_mensual_publico', '$') !!}</td>
                <td align='left'>{!! Form::number('ingresoMensual[ingreso_mensual_publico]',(isset($ingresoMensual->ingreso_mensual_publico)) ? $ingresoMensual->ingreso_mensual_publico : null,['class'=>'form-control text-uppercase','placeholder'=>'SUBTOTAL I',  'id' => 'ingreso_mensual_publico', 'required' => 'true', 'onchange' => 'sumar()' ]) !!}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-12">
        <span style="font-weight: bold; color:#640223;">II. OTROS INGRESOS DEL DECLARANTE (SUMA DEL II.1 AL II.4) </span>
    </div>
    <br>
    <br>
    <div class="col-md-1"></div>
    <div class="col-md-9">
        <span style="font-weight: bold;">II.1. Por actividad industrial, comercial y / o empresarial:</span>
        <br>
        <label>(Después de impuestos).</label>
    </div>
    <div class="col-md-2">
        <table>
            <tr>
                <td align='right'>{!! Form::label('ingresoMensual.ingreso_por_actividad_ice', '$') !!}</td>
                <td align='left'>{!! Form::number('ingresoMensual[ingreso_por_actividad_ice]',(isset($ingresoMensual->ingreso_por_actividad_ice)) ? $ingresoMensual->ingreso_por_actividad_ice : null,['class'=>'form-control text-uppercase', 'placeholder'=>'P. ej. $1000', 'id' => 'ingreso_por_actividad_ice', 'onchange' => 'sumar()' ]) !!}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-9">
        <table style="width: 100%;">
            <tr>
                <td width='40%'>
                    <strong>{!! Form::label('ingresoMensual.nombre_razon_social', 'Nombre o razón social:') !!}<strong></td>
                <td>{!! Form::text('ingresoMensual[nombre_razon_social]',(isset($ingresoMensual->nombre_razon_social)) ? $ingresoMensual->nombre_razon_social : null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. Desarrollo S.A de C.V.',  'id' => 'nombre_razon_social', 'disabled' => true]) !!}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-1"></div>
    <div class="col-md-9">
        <table style="width: 100%;">
            <tr>
                <td width='40%'>
                    <strong>{!! Form::label('ingresoMensual.tipo_de_negocio', 'Tipo de negocio:') !!}</strong></td>
                <td>{!! Form::text('ingresoMensual[tipo_de_negocio]',(isset($ingresoMensual->tipo_de_negocio)) ? $ingresoMensual->tipo_de_negocio : null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. Desarrollo y comercialización de sistemas.',  'id' => 'tipo_de_negocio', 'disabled' => true]) !!}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-2"></div>
    <br>
    <div class="col-md-1"></div>
    <div class="col-md-9">
        <span style="font-weight: bold;">II.2 Por actividad financiera (rendimientos o ganancias):</span><br>
        <label>(Después de impuestos).</label>
    </div>
    <div class="col-md-2">
        <table>
            <tr>
                <td align='right'>{!! Form::label('ingresoMensual.ingreso_por_actividad_financiera', '$') !!}</td>
                <td align='left'>{!! Form::number('ingresoMensual[ingreso_por_actividad_financiera]',(isset($ingresoMensual->ingreso_por_actividad_financiera)) ? $ingresoMensual->ingreso_por_actividad_financiera : null,['class'=>'form-control text-uppercase',  'placeholder'=>'P. ej. $1000', 'id' => 'ingreso_por_actividad_financiera', 'onchange' => 'sumar()']) !!}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-9">
        <table style="width: 100%;">
            <tr>
                <td width='40%'>
                    <strong>{!! Form::label('ingresoMensual.tipo_de_instrumento', 'Tipo de instrumento que generó el rendimiento o ganancia:') !!}</strong></td>
                <td>{!! Form::select('ingresoMensual[tipo_de_instrumento]', $tipoInstrumento, isset($ingresoMensual) ? $ingresoMensual->tipo_de_instrumento : null,['placeholder' => 'SELECCIONE UNA OPCION','class'=>'form-control text-uppercase', 'id' => 'tipo_de_instrumento', 'disabled' => true]) !!}</td>
            </tr>
            <tr class="especifique-instrumento" style="display: none">
                <td width='40%'>
                    {!! Form::label('ingresoMensual.especifique_instrumento', 'Especifique:') !!}</td>
                <td>{!! Form::text('ingresoMensual[especifique_instrumento]',(isset($ingresoMensual->especifique_instrumento)) ? $ingresoMensual->especifique_instrumento : null,['class'=>'form-control text-uppercase', 'id' => 'especifique_instrumento']) !!}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-1"></div>
    <div class="col-md-9">
        <span style="font-weight: bold;">II.3 Por servicios profesionales, consejos, consultorías y/o asesorías:</span><br>
        <label>(Después de impuestos).</label>
    </div>
    <div class="col-md-2">
        <table>
            <tr>
                <td align='right'>{!! Form::label('ingresoMensual.ingreso_por_servicios_profesionales', '$') !!}</td>
                <td align='left'>{!! Form::number('ingresoMensual[ingreso_por_servicios_profesionales]',(isset($ingresoMensual->ingreso_por_servicios_profesionales)) ? $ingresoMensual->ingreso_por_servicios_profesionales : null,['class'=>'form-control text-uppercase',  'placeholder'=>'P. ej. $1000', 'id' => 'ingreso_por_servicios_profesionales', 'onchange' => 'sumar()']) !!}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-9">
        <table style="width: 100%;">
            <tr>
                <td width='40%'>
                    <strong>{!! Form::label('ingresoMensual.tipo_de_servicio', 'Tipo de servicio prestado: *') !!}<strong></td>
                <td>{!! Form::text('ingresoMensual[tipo_de_servicio]',(isset($ingresoMensual->tipo_de_servicio)) ? $ingresoMensual->tipo_de_servicio : null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. Horas clase.',  'id' => 'tipo_de_servicio', 'disabled' => true]) !!}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-1"></div>
    <div class="col-md-9">
        <span style="font-weight: bold;">II.4 Otros ingresos no considerados a los anteriores:</span><br>
        <label>(Después de impuestos).</label>
    </div>
    <div class="col-md-2">
        <table>
            <tr>
                <td align='right'>{!! Form::label('ingresoMensual.ingreso_otros', '$') !!}</td>
                <td align='left'>{!! Form::number('ingresoMensual[ingreso_otros]',(isset($ingresoMensual->ingreso_otros)) ? $ingresoMensual->ingreso_otros : null,['class'=>'form-control text-uppercase',  'placeholder'=>'P. ej. $1000', 'id' => 'ingreso_otros', 'onchange' => 'sumar()']) !!}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-9">
        <table style="width: 100%;">
            <tr>
                <td width='40%'>
                    <strong>{!! Form::label('ingresoMensual.tipo_de_ingreso', 'Especificar tipo de ingreso:*') !!}</strong></td>
                <td>{!! Form::text('ingresoMensual[tipo_de_ingreso]',(isset($ingresoMensual->tipo_de_ingreso)) ? $ingresoMensual->tipo_de_ingreso : null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. Horas clase.',  'id' => 'tipo_de_ingreso', 'disabled' => true]) !!}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-2"></div>

    <div class="col-md-10">
        <hr>
        <span style="font-weight: bold; color:#640223;">A.INGRESO MENSUAL NETO DEL DECLARANTE:</span><br>
        <label>(Suma del I y II)</label>
    </div>
    <div class="col-md-2">
        <hr>
        <table>
            <tr>
                <td align='right'>{!! Form::label('ingresoMensual.ingreso_mensual_neto', '$') !!}</td>
                <td align='left'>{!! Form::number('ingresoMensual[ingreso_mensual_neto]',(isset($ingresoMensual->ingreso_mensual_neto)) ? $ingresoMensual->ingreso_mensual_neto: null,['class'=>'form-control text-uppercase',  'placeholder'=>'P. ej. $1000', 'id' => 'ingreso_mensual_neto', 'required' => 'true', "readOnly"=> true, 'value' => '30']) !!}</td>

            </tr>
            <tr>
                <td align='right'>{!! Form::label('ingresoMensual.ingreso_mensual_suma', '$') !!}</td>
                <td align='left'>{!! Form::number('ingresoMensual[ingreso_mensual_suma]',(isset($ingresoMensual->ingreso_mensual_suma)) ? $ingresoMensual->ingreso_mensual_suma: null,['class'=>'form-control text-uppercase',  'placeholder'=>'P. ej. $1000', 'id' => 'ingreso_mensual_suma', 'required' => 'true', "readOnly"=> true]) !!}</td>

            </tr>
        </table>
    </div>
    <div class="col-md-10">
        <span style="font-weight: bold; color:#640223;">B.INGRESO MENSUAL NETO DE LA PAREJA Y/O DEPENDIENTES ECONÓMICOS:</span><br>
        <label>(Después de impuestos).</label>
    </div>
    <div class="col-md-2">
        <table>
            <tr>
                <td align='right'>{!! Form::label('ingresoMensual.ingreso_mensual_neto_pareja', '$') !!}</td>
                <td align='left'>{!! Form::number('ingresoMensual[ingreso_mensual_neto_pareja]',(isset($ingresoMensual->ingreso_mensual_neto_pareja)) ? $ingresoMensual->ingreso_mensual_neto_pareja : null,['class'=>'form-control text-uppercase', 'placeholder'=>'P. ej. $1000',  'id' => 'ingreso_mensual_neto_pareja', 'onchange' => 'sumar()']) !!}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-10">
        <span style="font-weight: bold; color:#640223;">C. TOTAL DE INGRESOS MENSUALES NETOS PERCIBIDOS POR EL DECLARANTE, PAREJA Y/O DEPENDIENTES ECONÓMICOS:</span>
        <br>
        <label> (Suma de A y B)</label>
    </div>
    <div class="col-md-2">
        <table>
            <tr>
                <td align='right'>{!! Form::label('ingresoMensual.total_ingresos_declarante_pareja', '$') !!}</td>
                <td align='left'>{!! Form::number('ingresoMensual[total_ingresos_declarante_pareja]',(isset($ingresoMensual->total_ingresos_declarante_pareja)) ? $ingresoMensual->total_ingresos_declarante_pareja : null,['class'=>'form-control text-uppercase', 'placeholder'=>'P. ej. $1000',  'id' => 'total_ingresos_declarante_pareja', 'required' => 'true', "readOnly" => true]) !!}</td>
            </tr>
        </table>
    </div>
        <div class="form-group col-md-12">
            {!! Form::label('observaciones', 'Aclaraciones / Observaciones:',["style" => "font-weight: bold;"]) !!}
            {!! Form::textarea('declarante[observaciones]', isset($dependiente) ? $dependiente->observaciones : null, ['class'=>'form-control alert-danger']) !!}
            <strong>{!! Form::label('aclaraciones', 'Todos los campos marcados con * son obligatorios.') !!}</strong>
        </div>
    </div>
    <div class="col-md-12">
        <center>
            <a href="{{route("datos_dependiente_declarante.index")}}" class="btn btn-submit btn-sm text-light"> Ir a la sección anterior</a>

            {{ Form::button('Guardar e rr a la siguiente sección', ['type' => 'submit', 'class' => 'btn btn-submit btn-sm text-light'] )}}
        </center>
    </div>


    @section('scripts')
    <script type="text/javascript">
        function sumar(){

            neto = document.forms["frmIngresosNetos"].elements;

            var n1 = Number(neto["ingreso_mensual_publico"].value);
            var n2 = Number(neto["ingreso_por_actividad_ice"].value);
            var n3 = Number(neto["ingreso_por_actividad_financiera"].value);
            var n4 = Number(neto["ingreso_por_servicios_profesionales"].value);
            var n5 = Number(neto["ingreso_otros"].value);
            var n6 = Number(neto["ingreso_mensual_neto_pareja"].value);
            var to = n1 + n2 + n3 + n4 + n5;
            var toDecl = n2 + n3 + n4 + n5;
            var toDP = to + n6;
            var total = to.toFixed(2);
            var totalDecl = toDecl.toFixed(2);
            var totalDP = toDP.toFixed(2);

            if (!isNaN(total)) {
                neto["ingreso_mensual_neto"].value = total;
            }
            if (!isNaN(totalDecl)) {
                neto["ingreso_mensual_suma"].value = totalDecl;
            }
            if (!isNaN(totalDP)) {
                neto["total_ingresos_declarante_pareja"].value = totalDP;
            }

        }

        $("#tipo_de_instrumento").change(function () {
                const valor = parseInt($(this).val());
                if (valor === 7) {
                    $(".especifique-instrumento").show();
                    $("#especifique_instrumento").prop("required", true);
                } else {
                    $(".especifique-instrumento").hide();
                    $("#especifique_instrumento").prop("required", false);
                    $(".especifique-instrumento").find("input").val("");
                }

                if ($(this).val() === "") {
                    $("#ingreso_por_actividad_financiera").prop("required", false);
                } else {
                    $("#ingreso_por_actividad_financiera").prop("required", true)
                }
        });

        $("#ingreso_por_actividad_ice").keyup(function () {
                if ($(this).val() === "") {
                    $("#nombre_razon_social").prop("required", false);
                    $("#tipo_de_negocio").prop("required", false);
                    $("#nombre_razon_social").val("");
                    $("#tipo_de_negocio").val("");
                    $("#nombre_razon_social").prop("disabled", true);
                    $("#tipo_de_negocio").prop("disabled", true);
                } else {
                    $("#nombre_razon_social").prop("required", true);
                    $("#tipo_de_negocio").prop("required", true) ;
                    $("#nombre_razon_social").prop("disabled", false);
                    $("#tipo_de_negocio").prop("disabled", false);
                }
        });

        $("#nombre_razon_social").keyup(function () {
                if ($(this).val() === "") {
                    $("#ingreso_por_actividad_ice").prop("required", false);
                    $("#tipo_de_negocio").prop("required", false);
                    $("#ingreso_por_actividad_ice").prop("disabled", true);
                    $("#tipo_de_negocio").prop("disabled", true);
                } else {
                    $("#ingreso_por_actividad_ice").prop("required", true);
                    $("#tipo_de_negocio").prop("required", true) ;
                    $("#ingreso_por_actividad_ice").prop("disabled", false);
                    $("#tipo_de_negocio").prop("disabled", false);
                }
        });

        $("#ingreso_por_actividad_financiera").keyup(function () {
                if ($(this).val() === "") {
                    $("#tipo_de_instrumento").prop("required", false);
                    $("#tipo_de_instrumento").val("");
                    $("#tipo_de_instrumento").prop("disabled", true);
                } else {
                    $("#tipo_de_instrumento").prop("required", true);
                    $("#tipo_de_instrumento").prop("disabled", false);
                }
        });


        $("#ingreso_por_servicios_profesionales").keyup(function () {
                if ($(this).val() === "") {
                    $("#tipo_de_servicio").prop("required", false);
                    $("#tipo_de_servicio").val("");
                    $("#tipo_de_servicio").prop("disabled", true);
                } else {
                    $("#tipo_de_servicio").prop("required", true);
                    $("#tipo_de_servicio").prop("disabled", false);
                }
        });

        $("#tipo_de_servicio").keyup(function () {
                if ($(this).val() === "") {
                    $("#ingreso_por_servicios_profesionales").prop("required", false);
                    $("#ingreso_por_servicios_profesionales").val("");
                } else {
                    $("#ingreso_por_servicios_profesionales").prop("required", true)
                }
        });

        $("#ingreso_otros").keyup(function () {
                if ($(this).val() === "") {
                    $("#tipo_de_ingreso").prop("required", false);
                    $("#tipo_de_ingreso").val("");
                    $("#tipo_de_ingreso").prop("disabled", true);
                } else {
                    $("#tipo_de_ingreso").prop("required", true);
                    $("#tipo_de_ingreso").prop("disabled", false);
                }
        });

        $("#tipo_de_ingreso").keyup(function () {
                if ($(this).val() === "") {
                    $("#ingreso_otros").prop("required", false);
                    $("#ingreso_otros").val("");
                } else {
                    $("#ingreso_otros").prop("required", true)
                }
        });

    </script>
    @endsection

