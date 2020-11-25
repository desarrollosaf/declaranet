<div class="row">
    <div class="form-group col-md-12">
        <center>
            {!! Form::label('Capturar cantidades libres de impuestos, sin comas, puntos, centavos y ceros a la izquierda:') !!}
        </center>
    </div>
    <div class="col-md-10">
        <h6>I. REMUNERACIÓN MENSUAL NETA DEL DECLARANTE POR SU CARGO PÚBLICO (POR CONCEPTO DE SUELDOS, HONORARIOS, COMPENSACIONES, BONOS Y OTRAS PRESTACIONES)</h6>
        &nbsp;&nbsp;&nbsp;(Cantidades netas después de impuestos).
    </div>
    <div class="col-md-2">
        <table>
            <tr>
                <td align='right'>{!! Form::label('ingresoMensual.ingreso_mensual_publico', '$') !!}</td>
                <td align='left'>{!! Form::text('ingresoMensual[ingreso_mensual_publico]',null,['class'=>'form-control text-uppercase',  'id' => 'ingreso_mensual_publico']) !!}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-12">
        <h6>II. OTROS INGRESOS DEL DECLARANTE (SUMA DEL II.1 AL II.4 </h6>
    </div>
    <br>
    <br>
    <div class="col-md-1"></div>
    <div class="col-md-9">
        <h6>II.1. Por actividad industrial, comercial y / o empresarial:</h6>
        &nbsp;&nbsp;&nbsp;&nbsp;(Después de impuestos).
    </div>
    <div class="col-md-2"> 
        <table>
            <tr>
                <td align='right'>{!! Form::label('ingresoMensual.ingreso_por_actividad_ice', '$') !!}</td>
                <td align='left'>{!! Form::text('ingresoMensual[ingreso_por_actividad_ice]',null,['class'=>'form-control text-uppercase',  'id' => 'ingreso_por_actividad_ice']) !!}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-9">
        <table style="width: 100%;">
            <tr>
                <td width='40%'>&nbsp;&nbsp;&nbsp;&nbsp;{!! Form::label('ingresoMensual.nombre_razon_social', 'Nombre o razón social') !!}</td>
                <td>{!! Form::text('ingresoMensual[nombre_razon_social]',null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. Desarrollo S.A de C.V.',  'id' => 'nombre_razon_social']) !!}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-1"></div>
    <div class="col-md-9">
        <table style="width: 100%;">
            <tr>
                <td width='40%'>&nbsp;&nbsp;&nbsp;&nbsp;{!! Form::label('ingresoMensual.tipo_de_negocio', 'Tipo de negocio:') !!}</td>
                <td>{!! Form::text('ingresoMensual[tipo_de_negocio]',null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. Desarrollo y comercialización de sistemas.',  'id' => 'tipo_de_negocio']) !!}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-2"></div>
    <br> 
    <div class="col-md-1"></div>
    <div class="col-md-9">
        <h6>II.2 Por actividad financiera (rendimientos o ganancias:</h6>
        &nbsp;&nbsp;&nbsp;&nbsp;(Después de impuestos).
    </div>
    <div class="col-md-2"> 
        <table>
            <tr>
                <td align='right'>{!! Form::label('ingresoMensual.ingreso_por_actividad_financiera', '$') !!}</td>
                <td align='left'>{!! Form::text('ingresoMensual[ingreso_por_actividad_financiera]',null,['class'=>'form-control text-uppercase',  'id' => 'ingreso_por_actividad_financiera']) !!}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-9">
        <table style="width: 100%;">
            <tr>
                <td width='40%'>&nbsp;&nbsp;&nbsp;&nbsp;{!! Form::label('ingresoMensual.tipo_de_instrumento', 'Tipo de instrumento que generó el rendimiento o ganancia:') !!}</td>
                <td>{!! Form::text('ingresoMensual[tipo_de_instrumento]',null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. Desarrollo S.A de C.V.',  'id' => 'tipo_de_instrumento']) !!}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-1"></div>
    <div class="col-md-9">
        <h6>II.3 Por servicios profesionales, consejos, consultorias y/o asesorias:</h6>
        &nbsp;&nbsp;&nbsp;&nbsp;(Después de impuestos).
    </div>
    <div class="col-md-2"> 
        <table>
            <tr>
                <td align='right'>{!! Form::label('ingresoMensual.ingreso_por_servicios_profesionales', '$') !!}</td>
                <td align='left'>{!! Form::text('ingresoMensual[ingreso_por_servicios_profesionales]',null,['class'=>'form-control text-uppercase',  'id' => 'ingreso_por_servicios_profesionales']) !!}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-9">
        <table style="width: 100%;">
            <tr>
                <td width='40%'>&nbsp;&nbsp;&nbsp;&nbsp;{!! Form::label('ingresoMensual.tipo_de_servicio', 'Tipo de servicio prestado:*') !!}</td>
                <td>{!! Form::text('ingresoMensual[tipo_de_servicio]',null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. Horas clase.',  'id' => 'tipo_de_servicio']) !!}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-1"></div>
    <div class="col-md-9">
        <h6>II.4 Otros ingresos no considerados a los anteriores:</h6>
        &nbsp;&nbsp;&nbsp;&nbsp;(Después de impuestos).
    </div>
    <div class="col-md-2"> 
        <table>
            <tr>
                <td align='right'>{!! Form::label('ingresoMensual.ingreso_otros', '$') !!}</td>
                <td align='left'>{!! Form::text('ingresoMensual[ingreso_otros]',null,['class'=>'form-control text-uppercase',  'id' => 'ingreso_otros']) !!}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-9">
        <table style="width: 100%;">
            <tr>
                <td width='40%'>&nbsp;&nbsp;&nbsp;&nbsp;{!! Form::label('ingresoMensual.tipo_de_ingreso', 'Especificar tipo de ingreso:*') !!}</td>
                <td>{!! Form::text('ingresoMensual[tipo_de_ingreso]',null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. Horas clase.',  'id' => 'tipo_de_ingreso']) !!}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-10">
        <h6>A.INGRESO MENSUAL NETO DEL DECLARANTE:</h6>(Suma del I y II)
    </div>
    <div class="col-md-2"> 
        <table>
            <tr>
                <td align='right'>{!! Form::label('ingresoMensual.ingreso_mensual_neto', '$') !!}</td>
                <td align='left'>{!! Form::text('ingresoMensual[ingreso_mensual_neto]',null,['class'=>'form-control text-uppercase',  'id' => 'ingreso_mensual_neto']) !!}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-10">
        <h6>B.INGRESO MENSUAL NETO DE LA PAREJA Y/O DEPENDIENTES ECONÓMICOS:</h6>(Después de impuestos).
    </div>
    <div class="col-md-2"> 
        <table>
            <tr>
                <td align='right'>{!! Form::label('ingresoMensual.ingreso_mensual_neto_pareja', '$') !!}</td>
                <td align='left'>{!! Form::text('ingresoMensual[ingreso_mensual_neto_pareja]',null,['class'=>'form-control text-uppercase',  'id' => 'ingreso_mensual_neto_pareja']) !!}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-10">
        <h6>C. TOTAL DE INGRESOS MENSUALES NETOS PERCIBIDOS POR EL DECLARANTE, PAREJA Y/O DEPENDIENTES ECONÓMICOS:</h6>(Suma de A y B)
    </div>
    <div class="col-md-2"> 
        <table>
            <tr>
                <td align='right'>{!! Form::label('ingresoMensual.total_ingresos_declarante_pareja', '$') !!}</td>
                <td align='left'>{!! Form::text('ingresoMensual[total_ingresos_declarante_pareja]',null,['class'=>'form-control text-uppercase',  'id' => 'total_ingresos_declarante_pareja']) !!}</td>
            </tr>
        </table>
    </div>
      <div class="form-group col-md-12">
          <h6>ACLARACIONES/OBSERVACIONES:</h6>
                    {!! Form::textarea('ingresoMensual[aclaraciones_observaciones]',null,['class'=>'form-control text-uppercase',  'id' => 'aclaraciones_observaciones']) !!}
                      <span class="text-danger" style="font-size:150%"></span>
                </div>
      <div class="col-md-12">
                    <center>
                        {{ Form::button('Ir a la sección anterior', ['type' => 'submit', 'class' => 'btn btn-submit btn-sm text-light'] )}}
                        {{ Form::button('Ir a la siguiente sección', ['type' => 'submit', 'class' => 'btn btn-submit btn-sm text-light'] )}}
                    </center>
        </div>
     