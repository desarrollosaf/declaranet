

<div class="container">
    <div class="row">
        <div class="col-lg-2">
            <div class="form-group">
                <div class="text-center">
                    {!! Form::radio('ingreso[fue_servidor_publico]', "1", (isset($ingreso) && $ingreso->fue_servidor_publico == 1) ? true : false, ["class" => "form-check-input", "id" => "fue-servido-si"]) !!}
                    <label class="form-check-label" for="fue-servido-si">Si</label>
                </div>

            </div>
        </div>
        <div class="col-lg-2">
            <div class="form-group">
                <div class="text-center">
                    {!! Form::radio('ingreso[fue_servidor_publico]', "0", (isset($ingreso) && $ingreso->fue_servidor_publico == 0) ? false : true, ["class" => "form-check-input", "id" => "fue-servido-no"]) !!}
                    <label class="form-check-label" for="fue-servido-no">No</label>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="form-group">
            </div>
        </div>
    </div>
</div>
<hr>
<!-- Primera fila  -->
<div class="si-fue-servidor">
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <strong>{!! Form::label('ingreso.fecha_inicio', 'Fecha de inicio') !!}</strong>
                {!! Form::date('ingreso[fecha_inicio]',(isset($ingreso->fecha_inicio)) ? $ingreso->fecha_inicio : null,['class'=>'form-control text-uppercase', 'id' => 'fecha_inicio']) !!}
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <div class="form-group">
                    <strong>  {!! Form::label('ingreso.fecha_conclusion', 'Fecha de inicio') !!}</strong>
                    {!! Form::date('ingreso[fecha_conclusion]',(isset($ingreso->fecha_conclusion)) ? $ingreso->fecha_conclusion : null,['class'=>'form-control text-uppercase', 'id' => 'fecha_conclusion']) !!}
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="form-group col-md-12">
            <div>
                <strong>Capturar cantidades libres de impuestos, sin comas, puntos, centavos y ceros a la izquierda</strong>
            </div>
        </div>
        <div class="col-md-10">
            <span style="font-weight: bold; color:#640223;">I. REMUNERACIÓN MENSUAL NETA DEL DECLARANTE POR SU CARGO PÚBLICO (POR CONCEPTO DE SUELDOS, HONORARIOS,
            COMPENSACIONES, BONOS Y OTRAS PRESTACIONES)</span><br> <label>(Cantidades netas después de impuestos).</label>
            &nbsp;
        </div>
        <div class="col-md-2">
            <table>
                <tr>
                    <td class="text-right">{!! Form::label('ingreso.remuneracion_neta', '$') !!}</td>
                    <td class="text-left">{!! Form::text('ingreso[remuneracion_neta]',(isset($ingreso->remuneracion_neta)) ? $ingreso->remuneracion_neta : null,['class'=>'form-control text-uppercase cantidad', 'placeholder'=>'p. ej. $1000', 'id' => 'remuneracion_neta']) !!}</td>
                </tr>
            </table>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
        <div class="col-md-10">

            <span style="font-weight: bold; color:#640223;">II. OTROS INGRESOS DEL DECLARANTE (SUMA DEL II.1 AL II.4) </span>
        </div>
        <div class="col-md-2">

            <table>
                <tr>
                    <td class="text-right">{!! Form::label('ingreso.otros_ingresos_total', '$') !!}</td>
                    <td class="text-left">{!! Form::text('ingreso[otros_ingresos_total]',(isset($ingreso->otros_ingresos_total)) ? $ingreso->otros_ingresos_total : null,['class'=>'form-control text-uppercase cantidad',  'placeholder'=>'0', 'id' => 'otros_ingresos', "readOnly"=>true]) !!}</td>
                </tr>
            </table>
        </div>
        <br>
        <br>
        <div class="col-md-1">

        </div>
        <div class="col-md-9">
            <span style="font-weight: bold;">II.1. Por actividad industrial, comercial y / o empresarial:</span><br>
            &nbsp;&nbsp;&nbsp;&nbsp;<label>(Después de impuestos).</label>
        </div>
        <div class="col-md-2">
            <table>
                <tr>
                    <td class="text-right" >{!! Form::label('ingreso.ingreso_por_actividad_ice', '$') !!}</td>
                    <td class="text-left">{!! Form::text('ingreso[ingreso_por_actividad_ice]',(isset($ingreso->ingreso_por_actividad_ice)) ? $ingreso->ingreso_por_actividad_ice : null,['class'=>'form-control text-uppercase cantidad cantidad-otros', 'placeholder'=>'p. ej. $1000', 'id' => 'ingreso_por_actividad_ice']) !!}</td>
                </tr>
            </table>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-9">
            <table style="width: 100%;">
                <tr>
                    <td width='40%'>
                        &nbsp;&nbsp;&nbsp;<strong>{!! Form::label('ingreso.nombre_razon_social', 'Nombre o razón social') !!}</strong></td>
                    <td>{!! Form::text('ingreso[nombre_razon_social]',(isset($ingreso->nombre_razon_social)) ? $ingreso->nombre_razon_social : null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. Desarrollo S.A de C.V.',  'id' => 'nombre_razon_social']) !!}</td>
                </tr>
            </table>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-1"></div>
        <div class="col-md-9">
            <table style="width: 100%;">
                <tr>
                    <td width='40%'>
                        &nbsp;&nbsp;&nbsp;&nbsp;<strong>{!! Form::label('ingreso.tipo_de_negocio', 'Tipo de negocio:') !!}</strong></td>
                    <td>{!! Form::text('ingreso[tipo_de_negocio]',(isset($ingreso->tipo_de_negocio)) ? $ingreso->tipo_de_negocio : null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. Desarrollo y comercialización de sistemas.',  'id' => 'tipo_de_negocio']) !!}</td>
                </tr>
            </table>
        </div>
        <div class="col-md-2"></div>
        <br>
        <div class="col-md-1"></div>
        <div class="col-md-9">
            <span style="font-weight: bold;"  >II.2 Por actividad financiera (rendimientos o ganancias:</span><br>
            &nbsp;&nbsp;&nbsp;&nbsp;<label>(Después de impuestos).</label>
        </div>
        <div class="col-md-2">
            <table>
                <tr>
                    <td class="text-right">{!! Form::label('ingreso.ingreso_por_actividad_financiera', '$') !!}</td>
                    <td class="text-left">{!! Form::text('ingreso[ingreso_por_actividad_financiera]',(isset($ingreso->ingreso_por_actividad_financiera)) ? $ingreso->ingreso_por_actividad_financiera : null,['class'=>'form-control text-uppercase cantidad cantidad-otros',  'placeholder'=>'p. ej. $1000','id' => 'ingreso_por_actividad_financiera']) !!}</td>
                </tr>
            </table>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-9">
            <table style="width: 100%;">
                <tr>
                    <td width='40%'>
                        <strong>{!! Form::label('ingreso.tipo_de_instrumento_id', 'Tipo de instrumento que generó el rendimiento o ganancia:') !!}</strong></td>
                    <td>{!! Form::select('ingreso[tipo_de_instrumento_id]',$selectInsrumentos,(isset($ingreso->tipo_de_instrumento_id)) ? $ingreso->tipo_de_instrumento_id : null,['class'=>'form-control select', 'id' => 'tipo_de_instrumento_id']) !!}</td>
                </tr>
                <tr class="especifique-instrumento">
                    <td width='40%'>
                        {!! Form::label('ingreso.especifique_instrumento', 'Especifique:') !!}</td>
                    <td>{!! Form::text('ingreso[especifique_instrumento]',(isset($ingreso->especifique_instrumento)) ? $ingreso->especifique_instrumento : null,['class'=>'form-control text-uppercase', 'id' => 'tipo_de_instrumento_id']) !!}</td>
                </tr>
            </table>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-1"></div>
        <div class="col-md-9">
            <span style="font-weight: bold;">II.3 Por servicios profesionales, consejos, consultorias y/o asesorias:</span><br>
            &nbsp;&nbsp;&nbsp;&nbsp;<label>(Después de impuestos).</label>
        </div>
        <div class="col-md-2">
            <table>
                <tr>
                    <td class="text-right">{!! Form::label('ingreso.ingreso_por_servicios_profesionales', '$') !!}</td>
                    <td class="text-left">{!! Form::text('ingreso[ingreso_por_servicios_profesionales]',(isset($ingreso->ingreso_por_servicios_profesionales)) ? $ingreso->ingreso_por_servicios_profesionales : null,['class'=>'form-control text-uppercase cantidad cantidad-otros','placeholder'=>'p. ej. $1000',  'id' => 'ingreso_por_servicios_profesionales']) !!}</td>
                </tr>
            </table>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-9">
            <table style="width: 100%;">
                <tr>
                    <td width='40%'>
                        &nbsp;&nbsp;&nbsp;<strong>{!! Form::label('ingreso.tipo_de_servicio', 'Tipo de servicio prestado:*') !!}</strong></td>
                    <td>{!! Form::text('ingreso[tipo_de_servicio]',(isset($ingreso->tipo_de_servicio)) ? $ingreso->tipo_de_servicio : null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. Horas clase.',  'id' => 'tipo_de_servicio']) !!}</td>
                </tr>
            </table>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-1"></div>
        <div class="col-md-9">
            <span style="font-weight: bold;">II.4 Por enajenación de bienes:</span><br>
            &nbsp;&nbsp;&nbsp;&nbsp;<label>(Después de impuestos).</label>
        </div>
        <div class="col-md-2">
            <table>
                <tr>
                    <td class="text-right">{!! Form::label('ingreso.ingreso_por_enajenacion_bienes', '$') !!}</td>
                    <td class="text-left">{!! Form::text('ingreso[ingreso_por_enajenacion_bienes]',(isset($ingreso->ingreso_por_servicios_profesionales)) ? $ingreso->ingreso_por_servicios_profesionales : null,['class'=>'form-control cantidad cantidad-otros',  'placeholder'=>'p. ej. $1000','id' => 'ingreso_por_servicios_profesionales']) !!}</td>
                </tr>
            </table>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-9">
            <table style="width: 100%;">
                <tr>
                    <td width='40%'>
                        &nbsp;&nbsp;&nbsp;<strong>{!! Form::label('ingreso.tipo_de_bien_id', 'Tipo de bien enajenado:*') !!}</strong></td>
                    <td>{!! Form::select('ingreso[tipo_de_bien_id]', $selectBienes,(isset($ingreso->tipo_de_bien_id)) ? $ingreso->tipo_de_bien_id : null,['class'=>'form-control text-uppercase select', 'id' => 'tipo_de_servicio']) !!}</td>
                </tr>
            </table>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-1"></div>
        <div class="col-md-9">
            <span style="font-weight: bold;">II.5 Otros ingresos no considerados a los anteriores:</span><br>
            &nbsp;&nbsp;&nbsp;&nbsp;<label>(Después de impuestos).</label>
        </div>
        <div class="col-md-2">
            <table>
                <tr>
                    <td class="text-right">{!! Form::label('ingreso.ingreso_otros_no_considerados', '$') !!}</td>
                    <td class="text-left">{!! Form::text('ingreso[ingreso_otros_no_considerados]',(isset($ingreso->ingreso_otros_no_considerados)) ? $ingreso->ingreso_otros_no_considerados : null,['class'=>'form-control cantidad cantidad-otros', 'placeholder'=>'p. ej. $1000', 'id' => 'ingreso_otros_no_considerados']) !!}</td>
                </tr>
            </table>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-9">
            <table style="width: 100%;">
                <tr>
                    <td width='40%'>
                        &nbsp;&nbsp;&nbsp;<strong>{!! Form::label('ingreso.tipo_de_ingreso_no_considerado', 'Especificar tipo de ingreso:*') !!}</strong></td>
                    <td>{!! Form::text('ingreso[tipo_de_ingreso_no_considerado]',(isset($ingreso->tipo_de_ingreso_no_considerado)) ? $ingreso->tipo_de_ingreso_no_considerado : null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. Horas clase.',  'id' => 'tipo_de_ingreso_no_considerado']) !!}</td>
                </tr>
            </table>
        </div>
        <hr>
        <div class="col-md-2"></div>

        <div class="col-md-12">
        <hr>
        </div>
        <div class="col-md-10">
            <span style="font-weight: bold; color:#640223;">A.INGRESO NETO DEL DECLARANTE RECIBIDO DURANTE EL AÑO INMEDIATO ANTERIOR:</span><br>
            <label>(Suma del I y II)</label>
        </div>
        <div class="col-md-2">
            <table>
                <tr>
                    <td class="text-right">{!! Form::label('ingreso.ingreso_neto', '$') !!}</td>
                    <td class="text-left">{!! Form::text('ingreso[ingreso_neto]',(isset($ingreso->ingreso_neto)) ? $ingreso->ingreso_neto: null,['class'=>'form-control cantidad text-uppercase', 'placeholder'=>'0', 'id' => 'ingreso_neto', "readOnly"=> true]) !!}</td>
                </tr>
            </table>
        </div>
        <div class="col-md-10">
            <span style="font-weight: bold; color:#640223;">B.INGRESO NETO DE LA PAREJA Y/O DEPENDIENTES ECONÓMICOS RECIBIDO DURANTE EL AÑO INMEDIATO ANTERIOR:</span>
            <label>(Después de impuestos).</label><br>
        </div>
        <div class="col-md-2">
            <table>
                <tr>
                    <td class="text-right">{!! Form::label('ingreso.ingreso_neto_pareja', '$') !!}</td>
                    <td class="text-left">{!! Form::text('ingreso[ingreso_neto_pareja]',(isset($ingreso->ingreso_neto_pareja)) ? $ingreso->ingreso_neto_pareja : null,['class'=>'form-control cantidad text-uppercase', 'placeholder'=>'p. ej. $1000', 'id' => 'ingreso_neto_pareja']) !!}</td>
                </tr>
            </table>
        </div>
        <div class="col-md-10">
            <span style="font-weight: bold; color:#640223;">C. TOTAL DE INGRESOS NETOS PERCIBIDOS POR EL DECLARANTE, PAREJA Y/O DEPENDIENTES
                ECONÓMICOS EL AÑO INMEDIATO ANTERIOR:</span><br>
            <label>(Suma de A y B)</label>
        </div>
        <div class="col-md-2">
            <table>
                <tr>
                    <td class="text-right">{!! Form::label('ingreso.total_ingresos_declarante_pareja', '$') !!}</td>
                    <td class="text-left">{!! Form::text('ingreso[total_ingresos_declarante_pareja]',(isset($ingreso->total_ingresos_declarante_pareja)) ? $ingreso->total_ingresos_declarante_pareja : null,['class'=>'form-control cantidad text-uppercase',  'placeholder'=>'0','id' => 'total_ingresos_declarante_pareja', "readOnly"=> true]) !!}</td>
                </tr>
            </table>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="text-center">
        <a href="{{route("ingreso_neto.index")}}" class="btn btn-submit btn-sm text-light">Ir a la sección
            anterior</a>
        {{ Form::button('Ir a la siguiente sección', ['type' => 'submit', 'class' => 'btn btn-submit btn-sm text-light'] )}}
    </div>
</div>
@section("scripts")
    <script>
        $(document).ready(function () {
            $(".si-fue-servidor").hide();
            $(".especifique-instrumento").hide();
            // $(".cantidad").val("0.00");
            $("input[name='ingreso[fue_servidor_publico]']").change(function () {
                const valor = $("input[name='ingreso[fue_servidor_publico]']:checked").val();
                if (valor === "1") {
                    $(".si-fue-servidor").show();
                } else {
                    $(".si-fue-servidor").hide();
                    $(".si-fue-servidor").find("input").val("");
                    $(".select").val("0");
                }
            });
            $("#tipo_de_instrumento_id").change(function () {
                const valor = parseInt($(this).val());
                if (valor === 7) {
                    $(".especifique-instrumento").show();
                } else {
                    $(".especifique-instrumento").hide();
                    $(".especifique-instrumento").find("input").val("");
                }
            });
            // $(".cantidad").click(function () {
            //     if ($(this).val() === "0.00") {
            //         $(this).val("");
            //     }
            // });

            $(".cantidad-otros").keyup(function () {
                let otrosIngresosTotal = 0.00;
                $(".cantidad-otros").each(function () {
                    let valor = parseFloat($(this).val());
                    if (isNaN(valor)) {
                        valor = 0.00;
                    }
                    otrosIngresosTotal = otrosIngresosTotal + valor;
                });
                $("#otros_ingresos").val(otrosIngresosTotal.toFixed(2));
                $("#ingreso_neto").blur();
                $("#total_ingresos_declarante_pareja").blur();
            });
            $("#remuneracion_neta").keyup(function () {
                $("#ingreso_neto").blur();
                $("#total_ingresos_declarante_pareja").blur();
            });
            $("#ingreso_neto").blur(function () {
                let otros = parseFloat($("#otros_ingresos").val());
                let ingresos = parseFloat($("#remuneracion_neta").val());
                if (isNaN(ingresos)) {
                    ingresos = 0.00;
                }
                if (isNaN(otros)) {
                    otros = 0.00;
                }
                let total = ingresos + otros;
                $("#ingreso_neto").val(total.toFixed(2));
                $("#total_ingresos_declarante_pareja").blur();
            });
            $("#ingreso_neto_pareja").keyup(function () {
                $("#total_ingresos_declarante_pareja").blur();
            });

            $("#total_ingresos_declarante_pareja").blur(function () {
                let ingresoNeto = parseFloat($("#ingreso_neto").val());
                let ingresoPareja = parseFloat($("#ingreso_neto_pareja").val());
                if (isNaN(ingresoPareja)) {
                    ingresoPareja = 0.00;
                }
                if (isNaN(ingresoNeto)) {
                    ingresoNeto = 0.00;
                }
                let totalIngresos = ingresoNeto + ingresoPareja;
                $("#total_ingresos_declarante_pareja").val(totalIngresos.toFixed(2));
            });
            @if(isset($ingreso) && $ingreso->fue_servidor_publico == true)
            $("#fue-servido-si").prop("checked", true);
            $("input[name='ingreso[fue_servidor_publico]']").change()
            @else
            $("#fue-servido-no").prop("checked", true);
            $("input[name='ingreso[fue_servidor_publico]']").change()
            @endif
        });
    </script>
@endsection
