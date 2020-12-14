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
                <td align='left'>{!! Form::text('ingresoMensual[ingreso_mensual_publico]',(isset($ingresoMensual->ingreso_mensual_publico)) ? $ingresoMensual->ingreso_mensual_publico : null,['class'=>'form-control text-uppercase','placeholder'=>'SUBTOTAL I',  'id' => 'ingreso_mensual_publico', 'required' => 'true']) !!}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-12">
        <span style="font-weight: bold; color:#640223;">II. OTROS INGRESOS DEL DECLARANTE (SUMA DEL II.1 AL II.4 </span>
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
                <td align='left'>{!! Form::text('ingresoMensual[ingreso_por_actividad_ice]',(isset($ingresoMensual->ingreso_por_actividad_ice)) ? $ingresoMensual->ingreso_por_actividad_ice : null,['class'=>'form-control text-uppercase', 'placeholder'=>'P. ej. $1000', 'id' => 'ingreso_por_actividad_ice']) !!}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-9">
        <table style="width: 100%;">
            <tr>
                <td width='40%'>
                    <strong>{!! Form::label('ingresoMensual.nombre_razon_social', 'Nombre o razón social:') !!}<strong></td>
                <td>{!! Form::text('ingresoMensual[nombre_razon_social]',(isset($ingresoMensual->nombre_razon_social)) ? $ingresoMensual->nombre_razon_social : null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. Desarrollo S.A de C.V.',  'id' => 'nombre_razon_social']) !!}</td>
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
                <td>{!! Form::text('ingresoMensual[tipo_de_negocio]',(isset($ingresoMensual->tipo_de_negocio)) ? $ingresoMensual->tipo_de_negocio : null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. Desarrollo y comercialización de sistemas.',  'id' => 'tipo_de_negocio']) !!}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-2"></div>
    <br>
    <div class="col-md-1"></div>
    <div class="col-md-9">
        <span style="font-weight: bold;">II.2 Por actividad financiera (rendimientos o ganancias:</span><br>
        <label>(Después de impuestos).</label>
    </div>
    <div class="col-md-2">
        <table>
            <tr>
                <td align='right'>{!! Form::label('ingresoMensual.ingreso_por_actividad_financiera', '$') !!}</td>
                <td align='left'>{!! Form::text('ingresoMensual[ingreso_por_actividad_financiera]',(isset($ingresoMensual->ingreso_por_actividad_financiera)) ? $ingresoMensual->ingreso_por_actividad_financiera : null,['class'=>'form-control text-uppercase',  'placeholder'=>'P. ej. $1000', 'id' => 'ingreso_por_actividad_financiera']) !!}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-9">
        <table style="width: 100%;">
            <tr>
                <td width='40%'>
                    <strong>{!! Form::label('ingresoMensual.tipo_de_instrumento', 'Tipo de instrumento que generó el rendimiento o ganancia:') !!}</strong></td>
                <td>{!! Form::text('ingresoMensual[tipo_de_instrumento]',(isset($ingresoMensual->tipo_de_instrumento)) ? $ingresoMensual->tipo_de_instrumento : null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. Desarrollo S.A de C.V.',  'id' => 'tipo_de_instrumento']) !!}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-1"></div>
    <div class="col-md-9">
        <span style="font-weight: bold;">II.3 Por servicios profesionales, consejos, consultorias y/o asesorias:</span><br>
        <label>(Después de impuestos).</label>
    </div>
    <div class="col-md-2">
        <table>
            <tr>
                <td align='right'>{!! Form::label('ingresoMensual.ingreso_por_servicios_profesionales', '$') !!}</td>
                <td align='left'>{!! Form::text('ingresoMensual[ingreso_por_servicios_profesionales]',(isset($ingresoMensual->ingreso_por_servicios_profesionales)) ? $ingresoMensual->ingreso_por_servicios_profesionales : null,['class'=>'form-control text-uppercase',  'placeholder'=>'P. ej. $1000', 'id' => 'ingreso_por_servicios_profesionales']) !!}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-9">
        <table style="width: 100%;">
            <tr>
                <td width='40%'>
                    <strong>{!! Form::label('ingresoMensual.tipo_de_servicio', 'Tipo de servicio prestado:*') !!}<strong></td>
                <td>{!! Form::text('ingresoMensual[tipo_de_servicio]',(isset($ingresoMensual->tipo_de_servicio)) ? $ingresoMensual->tipo_de_servicio : null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. Horas clase.',  'id' => 'tipo_de_servicio']) !!}</td>
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
                <td align='left'>{!! Form::text('ingresoMensual[ingreso_otros]',(isset($ingresoMensual->ingreso_otros)) ? $ingresoMensual->ingreso_otros : null,['class'=>'form-control text-uppercase',  'placeholder'=>'P. ej. $1000', 'id' => 'ingreso_otros']) !!}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-9">
        <table style="width: 100%;">
            <tr>
                <td width='40%'>
                    <strong>{!! Form::label('ingresoMensual.tipo_de_ingreso', 'Especificar tipo de ingreso:*') !!}</strong></td>
                <td>{!! Form::text('ingresoMensual[tipo_de_ingreso]',(isset($ingresoMensual->tipo_de_ingreso)) ? $ingresoMensual->tipo_de_ingreso : null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. Horas clase.',  'id' => 'tipo_de_ingreso']) !!}</td>
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
                <td align='left'>{!! Form::text('ingresoMensual[ingreso_mensual_neto]',(isset($ingresoMensual->ingreso_mensual_neto)) ? $ingresoMensual->ingreso_mensual_neto: null,['class'=>'form-control text-uppercase',  'placeholder'=>'P. ej. $1000', 'id' => 'ingreso_mensual_neto', 'required' => 'true']) !!}</td>
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
                <td align='left'>{!! Form::text('ingresoMensual[ingreso_mensual_neto_pareja]',(isset($ingresoMensual->ingreso_mensual_neto_pareja)) ? $ingresoMensual->ingreso_mensual_neto_pareja : null,['class'=>'form-control text-uppercase', 'placeholder'=>'P. ej. $1000',  'id' => 'ingreso_mensual_neto_pareja']) !!}</td>
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
                <td align='left'>{!! Form::text('ingresoMensual[total_ingresos_declarante_pareja]',(isset($ingresoMensual->total_ingresos_declarante_pareja)) ? $ingresoMensual->total_ingresos_declarante_pareja : null,['class'=>'form-control text-uppercase', 'placeholder'=>'P. ej. $1000',  'id' => 'total_ingresos_declarante_pareja', 'required' => 'true']) !!}</td>
            </tr>
        </table>
    </div>
    <div class="form-group col-md-12">
        <hr>
        <strong>{!! Form::label('Aclaraciones / Observaciones:') !!}</strong>
        {!! Form::textarea('ingresoMensual[aclaraciones_observaciones]',(isset($ingresoMensual->aclaraciones_observaciones)) ? $ingresoMensual->aclaraciones_observaciones : null,['class'=>'form-control text-uppercase', 'placeholder'=>'P. ej. $1000',  'id' => 'aclaraciones_observaciones']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="col-md-12">
        <center>
            {{ Form::button('Ir a la sección anterior', ['type' => 'submit', 'class' => 'btn btn-submit btn-sm text-light'] )}}
            {{ Form::button('Ir a la siguiente sección', ['type' => 'submit', 'class' => 'btn btn-submit btn-sm text-light'] )}}
        </center>
    </div>
