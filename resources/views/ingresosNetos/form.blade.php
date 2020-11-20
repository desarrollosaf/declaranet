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
                <td align='right'>$</td>
                <td align='left'>{!! Form::text('celpersonal',null,['class'=>'form-control text-uppercase',  'id' => 'celpersonal']) !!}</td>
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
                <td align='right'>$</td>
                <td align='left'>{!! Form::text('celpersonal',null,['class'=>'form-control text-uppercase',  'id' => 'celpersonal']) !!}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-9">
        <table style="width: 100%;">
            <tr>
                <td width='40%'>&nbsp;&nbsp;&nbsp;&nbsp;Nombre o razón social:</td>
                <td>{!! Form::text('celpersonal',null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. Desarrollo S.A de C.V.',  'id' => 'celpersonal']) !!}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-2"></div>
    <div class="col-md-1"></div>
    <div class="col-md-9">
        <table style="width: 100%;">
            <tr>
                <td width='40%'>&nbsp;&nbsp;&nbsp;&nbsp;Tipo de negocio:</td>
                <td>{!! Form::text('celpersonal',null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. Desarrollo y comercialización de sistemas.',  'id' => 'celpersonal']) !!}</td>
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
                <td align='right'>$</td>
                <td align='left'>{!! Form::text('celpersonal',null,['class'=>'form-control text-uppercase',  'id' => 'celpersonal']) !!}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-9">
        <table style="width: 100%;">
            <tr>
                <td width='40%'>&nbsp;&nbsp;&nbsp;&nbsp;Tipo de instrumento que generó el rendimiento o ganancia:</td>
                <td>{!! Form::text('celpersonal',null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. Desarrollo S.A de C.V.',  'id' => 'celpersonal']) !!}</td>
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
                <td align='right'>$</td>
                <td align='left'>{!! Form::text('celpersonal',null,['class'=>'form-control text-uppercase',  'id' => 'celpersonal']) !!}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-9">
        <table style="width: 100%;">
            <tr>
                <td width='40%'>&nbsp;&nbsp;&nbsp;&nbsp;Tipo de servicio prestado:*</td>
                <td>{!! Form::text('celpersonal',null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. Horas clase.',  'id' => 'celpersonal']) !!}</td>
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
                <td align='right'>$</td>
                <td align='left'>{!! Form::text('celpersonal',null,['class'=>'form-control text-uppercase',  'id' => 'celpersonal']) !!}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-9">
        <table style="width: 100%;">
            <tr>
                <td width='40%'>&nbsp;&nbsp;&nbsp;&nbsp;Especificar tipo de ingreso:*</td>
                <td>{!! Form::text('celpersonal',null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. Horas clase.',  'id' => 'celpersonal']) !!}</td>
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
                <td align='right'>$</td>
                <td align='left'>{!! Form::text('celpersonal',null,['class'=>'form-control text-uppercase',  'id' => 'celpersonal']) !!}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-10">
        <h6>B.INGRESO MENSUAL NETO DE LA PAREJA Y/O DEPENDIENTES ECONÓMICOS:</h6>(Después de impuestos).
    </div>
    <div class="col-md-2"> 
        <table>
            <tr>
                <td align='right'>$</td>
                <td align='left'>{!! Form::text('celpersonal',null,['class'=>'form-control text-uppercase',  'id' => 'celpersonal']) !!}</td>
            </tr>
        </table>
    </div>
    <div class="col-md-10">
        <h6>C. TOTAL DE INGRESOS MENSUALES NETOS PERCIBIDOS POR EL DECLARANTE, PAREJA Y/O DEPENDIENTES ECONÓMICOS:</h6>(Suma de A y B)
    </div>
    <div class="col-md-2"> 
        <table>
            <tr>
                <td align='right'>$</td>
                <td align='left'>{!! Form::text('celpersonal',null,['class'=>'form-control text-uppercase',  'id' => 'celpersonal']) !!}</td>
            </tr>
        </table>
    </div>
      <div class="form-group col-md-12">
          <h6>ACLARACIONES/OBSERVACIONES:</h6>
                    {!! Form::textarea('celpersonal',null,['class'=>'form-control text-uppercase',  'id' => 'celpersonal']) !!}
                      <span class="text-danger" style="font-size:150%"></span>
                </div>
      <div class="col-md-12">
                    <center>
                        <button class="btn btn-submit btn-sm text-light">Ir a la sección anterior</button>
                        <button class="btn btn-submit btn-sm text-light">Ir a la siguiente sección</button>
                    </center>
                </div>
     