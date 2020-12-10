<div class="card-header bg-info  border-0 py-3 d-flex align-items-center" style="background-color:#F1F1F1 !important;">
    <div>
        <h3 class="card-title mb-0">BIENES MUEBLES</h3>
        <h6>(A la fecha de ingreso)</h6>
    </div>
    <span class="badge badge-success ml-auto px-4" data-toggle="collapse" data-target="#collapseMuebles"
          aria-expanded="false" aria-controls="collapseThree"> AYUDA</span>
          
</div>
<div class="collapse" id="collapseMuebles">
    <div class="card card-body">               
        Se refiere a la información que el Declarante reportará sobre bienes que conforme a la normatividad aplicable se consideran muebles, que por su naturaleza de manera individual o en conjunto representan una parte considerable del patrimonio del servidor público de acuerdo con su situación socioeconómica y que para efectos de referencia el monto de su valor comercial sea mayor a 1200 Unidades de Medida y Actualización (UMA) por lo que se refiere al conjunto de menaje. En el caso de los demás bienes dicho valor será en lo individual.
                <br>
                <br>
                <strong>BIENES DEL DECLARANTE, PAREJA Y/O DEPENDIENTES ECONÓMICOS</strong>
                <br>
                <ol>
                    <li><strong>Titular del bien.</strong> Seleccionar alguna de las opciones del catálogo desplegable. En caso de señalar copropiedad deberá indicar el nombre del tercero o terceros.</li>
                    <li><strong>Tipo de bien.</strong> Seleccionar de la lista desplegable: menaje de casa (muebles y accesorios de casa), aparatos electrónicos y electrodomésticos, joyas, colecciones, obras de arte y otros, especifique.</li>
                    <li><strong>Descripción general del bien.</strong> Referir brevemente el bien reportado.</li>
                    <li><strong>Tercero.</strong> En caso de copropiedad con un tercero, seleccionar si es persona física o persona moral.</li>
                    <li><strong>Nombre del tercero.</strong> En caso de señalar copropiedad, escribir el nombre o nombres completos, así como apellidos completos sin abreviaturas y sin acentos ni signos especiales. Si se trata de persona moral deberá proporcionar la denominación o razón social de la institución tal y como se encuentra en el documento con el que se acredita la adquisición.</li>
                    <li><strong>RFC.</strong> En caso de personas físicas proporcionar los trece dígitos. En caso de personas morales establecer los doce dígitos. </li>
                    <li><strong>Transmisor de la propiedad.</strong> Seleccionar si es persona física o persona moral.</li>
                    <li><strong>Nombre o razón social del transmisor.</strong> Escribir el nombre o nombres completos, así como apellidos completos sin abreviaturas y sin acentos ni signos especiales, como se encuentra en el documento con el que se acredita la propiedad.</li>
                    <li><strong>RFC.</strong> En caso de personas físicas proporcionar los trece dígitos. En caso de personas morales establecer los doce dígitos.</li>
                    <li><strong>Relación del transmisor del mueble con el titular.</strong> Elegir del catálogo qué relación tiene el titular del mueble con el transmisor.</li>
                    <li><strong>Forma de adquisición.</strong> Seleccionar alguna de las opciones del catálogo.</li>
                    <li><strong>Forma de pago.</strong> Seleccionar la forma en que realizó el pago para adquirir el bien mueble, en caso de que no haya pagado por el mismo, indicará no aplica.</li>
                    <li><strong>Valor de adquisición del mueble.</strong> Proporcionar el monto de adquisición.</li>
                    <li><strong>Tipo de moneda.</strong> Seleccionar la moneda relativa al valor de adquisición.</li>
                    <li><strong>Fecha de adquisición.</strong> Señalar la fecha de adquisición del mueble.</li>
                </ol>
                <strong>Aclaraciones/observaciones.</strong> En este espacio podrá realizar las aclaraciones u observaciones que considere pertinentes respecto de alguno o algunos de los incisos de este apartado.

  </div>
</div>
<div class="card-body">
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <strong> {!! Form::label('bienesMuebles.titular_bien_id', 'Titular del bien:') !!}</strong>
                {!! Form::select('bienesMuebles[titular_bien_id]',$selectTitular, (isset($bienMueble->titular_bien_id)) ? $bienMueble->titular_bien_id : null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'titular_bien'])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <strong>{!! Form::label('bienesMuebles.tipo_bien_id', 'Tipo de bien:') !!}</strong>
                {!! Form::select('bienesMuebles[tipo_bien_id]',$selectTipoBien, (isset($bienMueble->tipo_bien_id)) ? $bienMueble->tipo_bien_id : null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'tipo_bien'])!!}
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
                {!! Form::select('bienesMuebles[tipo_tercero_id]',$selectTipoTercero, (isset($bienMueble->tipo_tercero_id)) ? $bienMueble->tipo_tercero_id : null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'tipo_tercero', 'disabled' => true])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group nombre-tercero">
                <strong>{!! Form::label('bienesMuebles.nombre_tercero', 'Nombre del tercero:') !!}</strong>
                {!! Form::text('bienesMuebles[nombre_tercero]', (isset($bienMueble->nombre_tercero)) ? $bienMueble->nombre_tercero : null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'nombre_tercero', 'placeholder'=>"p. ej. Juan Robles Rosas"])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
            <div class="form-group denominacion-razon">
                <strong>{!! Form::label('bienesMuebles.denominacion_razon', 'Denominación o razón social:') !!}</strong>
                {!! Form::text('bienesMuebles[denominacion_razon]', (isset($bienMueble->denominacion_razon)) ? $bienMueble->denominacion_razon : null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'denominacion_razon', 'placeholder'=>"p. ej. Desarrollo y Redes S.A DE C.V"])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <strong>{!! Form::label('bienesMuebles.rfc_tercero', 'RFC:') !!}</strong>
                {!! Form::text('bienesMuebles[rfc_tercero]', (isset($bienMueble->rfc_tercero)) ? $bienMueble->rfc_tercero : null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'rfc-tercero', 'placeholder'=>"p. ej. xxxx010101"])!!}
                <span class="text-danger" style="font-size:150%"></span>
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <strong>{!! Form::label('bienesMuebles.transmisor_propiedad_id', 'Transmisor de la propiedad:') !!}</strong>
                {!! Form::select('bienesMuebles[transmisor_propiedad_id]',$selectTransmisores, (isset($bienMueble->transmisor_propiedad_id)) ? $bienMueble->transmisor_propiedad_id : null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'transmisor_propiedad'])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group nombre-razon">
                <strong>{!! Form::label('bienesMuebles.nombre_transmisor', 'Nombre del transmisor:') !!}</strong>
                {!! Form::text('bienesMuebles[nombre_transmisor]', (isset($bienMueble->nombre_transmisor)) ? $bienMueble->nombre_transmisor : null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'nombre_transmisor', 'placeholder'=>"p. ej. Juan Pérez.", "pattern"=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}"])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
            <div class="form-group denominacion-rs-transmisor">
                <strong>{!! Form::label('bienesMuebles.denominacion_rs_transmisor', 'Denominacion o razón social del transmisor:') !!}</strong>
                {!! Form::text('bienesMuebles[denominacion_rs_transmisor]', (isset($bienMueble->denominacion_rs_transmisor)) ? $bienMueble->denominacion_rs_transmisor : null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'denominacion_rs_transmisor', 'placeholder '=>"p. ej. Desarrollo y Redes S.A. de C.V.", "pattern"=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}"])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <strong>{!! Form::label('bienesMuebles.rfc_transmisor', 'RFC:') !!}</strong>
                {!! Form::text('bienesMuebles[rfc_transmisor]', (isset($bienMueble->rfc_transmisor)) ? $bienMueble->rfc_transmisor : null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'rfc-transmisor', 'placeholder'=>"p. ej. XXXX010101", 'pattern'=>"([A-Z]{4}([0-9]{6}[A-Z0-9]{3})"])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group relacion-transmisor">
                <strong>{!! Form::label('bienesMuebles.relacion_transmisor_id', 'Relación del transmisor del mueble con el titular:') !!}</strong>
                {!! Form::select('bienesMuebles[relacion_transmisor_id]', $selectRelacionTransmisor, (isset($bienMueble->relacion_transmisor_id)) ? $bienMueble->relacion_transmisor_id : null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'relacion_transmisor'])!!}
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
                <strong>{!! Form::label('bienesMuebles.forma_adquisicion_id', 'Forma de adquisición:') !!}</strong>
                {!! Form::select('bienesMuebles[forma_adquisicion_id]',$selectFormaAdquisicion, null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'forma_adquisicion'])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <strong>{!! Form::label('bienesMuebles.forma_pago_id', 'Forma de pago:') !!}</strong>
                {!! Form::select('bienesMuebles[forma_pago_id]',$selectFormaPago, (isset($bienMueble->forma_pago_id)) ? $bienMueble->forma_pago_id : null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'forma_pago'])!!}
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
                {!! Form::select('bienesMuebles[tipo_moneda_id]', $selectTipoMoneda, (isset($bienMueble->tipo_moneda_id)) ? $bienMueble->tipo_moneda_id : null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'tipo_moneda'])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <strong>{!! Form::label('bienesMuebles.fecha_adquisicion', 'Fecha de adquisición del mueble:') !!}</strong>
                {!! Form::date('bienesMuebles[fecha_adquisicion]', (isset($bienMueble->fecha_adquisicion)) ? $bienMueble->fecha_adquisicion : null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'fecha_adquisicion'])!!}
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
            <center>
                <br>
                <a href="#" class="btn btn-secondary">Ir a la sección anterior</a>
                <input type="submit" name="submit" class="btn btn-secondary"
                       value="Guardar e ir a la siguiente sección">
            </center>
        </div>
    </div>
</div>

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $(".tipo-tercero").hide();
            $(".especifique").hide();
            $(".denominacion-razon").hide();
            $(".denominacion-rs-transmisor").hide();
            $(".especifique-relacion-transmisor").hide();
            $("#titular_bien").change(function () {
                var tipoTitular = $(this).val();
                if (tipoTitular !== "1") {
                    $(".tipo-dato").addClass("alert-danger");
                    if (tipoTitular === "6") {
                        $(".tipo-tercero").show();
                        $("#tipo_tercero").prop("disabled", false);
                    } else {
                        $(".tipo-tercero").hide();
                        $("#tipo_tercero").prop("disabled", true);
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
                } else {
                    $(".descripcion-bien").show();
                    $(".especifique").hide();
                    $("#especifique").val("");
                }
            });
            $("#tipo_tercero").change(function () {
                var tipoTercero = parseInt($(this).val());
                if (tipoTercero === 2) {
                    $(".nombre-tercero").hide();
                    $("#nombre_tercero").val("");
                    $(".denominacion-razon").show();
                } else {
                    $(".nombre-tercero").show();
                    $(".denominacion-razon").hide();
                    $("#denominacion_razon").val("");
                }
            })
            $("#transmisor_propiedad").change(function () {
                var transmisorDenominacion = parseInt($(this).val());
                if (transmisorDenominacion === 2) {
                    $(".nombre-razon").hide();
                    $("#nombre_transmisor").val("");
                    $(".denominacion-rs-transmisor").show();
                } else {
                    $(".nombre-razon").show();
                    $("#denominacion_rs_transmisor").val("");
                    $(".denominacion-rs-transmisor").hide();
                }
            });
            $("#relacion_transmisor").change(function () {
                var relacionTransmisorMueble = parseInt($(this).val());
                if (relacionTransmisorMueble === 20) {
                    $(".especifique-relacion-transmisor").show();
                } else {
                    $(".especifique-relacion-transmisor").hide();
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
