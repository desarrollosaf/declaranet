<div class="card-header bg-info  border-0 py-3 d-flex align-items-center" style="background-color:#F1F1F1 !important;">
    <div>
        <h3 class="card-title mb-0">BIENES MUEBLES</h3>
        <h6>(A la fecha de ingreso)</h6>
    </div>
    <span class="badge badge-success ml-auto px-4" data-toggle="collapse" data-target="#collapseThree"
          aria-expanded="false" aria-controls="collapseThree"> AYUDA</span>
</div>
<div class="card-body">
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <strong> {!! Form::label('titular_bien_id', 'Titular del bien:') !!}</strong>
                {!! Form::select('titular_bien_id',$selectTitular, null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'titular_bien'])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <strong>{!! Form::label('tipo_bien_id', 'Tipo de bien:') !!}</strong>
                {!! Form::select('tipo_bien_id',$selectTipoBien, null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'tipo_bien'])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group especifique">
                <strong>{!! Form::label('especifique', 'Especifique:') !!}</strong>
                {!! Form::text('especifique', null,['class'=>'form-control text-uppercase tipo-dato' , 'id' => 'especifique', 'placeholder'=>"p. ej . Especifique" ])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
            <div class="form-group descripcion-bien">
                <strong>{!! Form::label('descripcion_bien', 'Descripción del bien:') !!}</strong>
                {!! Form::text('descripcion_bien', null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'descripcion_bien', 'placeholder'=>"p. ej. Descripción", "pattern"=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}"])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
    </div>
    <div class="row tipo-tercero">
        <div class="col-lg-4">
            <div class="form-group">
                <strong>{!! Form::label('tipo_tercero_id', 'Tipo de tercero:') !!}</strong>
                {!! Form::select('tipo_tercero_id',$selectTipoTercero, null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'tipo_tercero'])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group nombre-tercero">
                <strong>{!! Form::label('nombre_tercero', 'Nombre del tercero:') !!}</strong>
                {!! Form::text('nombre_tercero', null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'nombre_tercero', 'placeholder'=>"p. ej. Juan Robles Rosas"])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
            <div class="form-group denominacion-razon">
                <strong>{!! Form::label('denominacion_razon', 'Denominación o razón social:') !!}</strong>
                {!! Form::text('denominacion_razon', null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'denominacion_razon', 'placeholder'=>"p. ej. Desarrollo y Redes S.A DE C.V"])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <strong>{!! Form::label('rfc_tercero', 'RFC:') !!}</strong>
                {!! Form::text('rfc_tercero', null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'rfc', 'placeholder'=>"p. ej. xxxx010101"])!!}
                <span class="text-danger" style="font-size:150%"></span>
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <strong>{!! Form::label('transmisor_propiedad_id', 'Transmisor de la propiedad:') !!}</strong>
                {!! Form::select('transmisor_propiedad_id',$selectTransmisores, null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'transmisor_propiedad'])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group nombre-razon">
                <strong>{!! Form::label('nombre_transmisor', 'Nombre del transmisor:') !!}</strong>
                {!! Form::text('nombre_transmisor', null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'nombre_transmisor', 'placeholder'=>"p. ej. Juan Pérez.", "pattern"=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}"])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
            <div class="form-group denominacion-rs-transmisor">
                <strong>{!! Form::label('denominacion_rs_transmisor', 'Denominacion o razón social del transmisor:') !!}</strong>
                {!! Form::text('denominacion_rs_transmisor', null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'denominacion_rs_transmisor', 'placeholder '=>"p. ej. Desarrollo y Redes S.A. de C.V.", "pattern"=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}"])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <strong>{!! Form::label('rfc_transmisor', 'RFC:') !!}</strong>
                {!! Form::text('rfc_transmisor', null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'rfc', 'placeholder'=>"p. ej. XXXX010101", 'pattern'=>"([A-Z]{4}([0-9]{6}[A-Z0-9]{3})"])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group relacion-transmisor">
                <strong>{!! Form::label('relacion_transmisor_id', 'Relación del transmisor del mueble con el titular:') !!}</strong>
                {!! Form::select('relacion_transmisor_id', $selectRelacionTransmisor, null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'relacion_transmisor'])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group especifique-relacion-transmisor">
                <strong>{!! Form::label('especifique_relacion_transmisor', 'Especifique:') !!}</strong>
                {!! Form::text('especifique_relacion_transmisor', null,['class'=>'form-control text-uppercase tipo-dato' , 'id' => 'especifique_relacion_transmisor', 'placeholder'=>"p. ej . Especifique" ])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <strong>{!! Form::label('forma_adquisicion_id', 'Forma de adquisición:') !!}</strong>
                {!! Form::select('forma_adquisicion_id',$selectFormaAdquisicion, null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'forma_adquisicion'])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <strong>{!! Form::label('forma_pago_id', 'Forma de pago:') !!}</strong>
                {!! Form::select('forma_pago_id',$selectFormaPago, null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'forma_pago'])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <strong>{!! Form::label('valor_adquisicion', 'Valor de adquisición del mueble:') !!}</strong>
                {!! Form::text('valor_adquisicion', null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'valor_adquisicion', 'placeholder'=>"p. ej. 100000.00 Mxn", 'pattern'=>"[0-9]{1,7}"])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <strong>{!! Form::label('tipo_moneda_id', 'Tipo de moneda:') !!}</strong>
                {!! Form::select('tipo_moneda_id', $selectTipoMoneda, null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'tipo_moneda'])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <strong>{!! Form::label('fecha_adquisicion', 'Fecha de adquisición del mueble:') !!}</strong>
                {!! Form::date('fecha_adquisicion', null,['class'=>'form-control text-uppercase tipo-dato', 'id' => 'fecha_adquisicion'])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <strong>{!! Form::label('aclaraciones', 'Aclaraciones/Observaciones:') !!}</strong>
                {!! Form::textarea('aclaraciones', null,['class'=>'form-control text-uppercase alert-danger', 'id' => 'aclaraciones'])!!}
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
                    } else {
                        $(".tipo-tercero").hide();
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
                } else {
                    $(".descripcion-bien").show();
                    $(".especifique").hide();
                }
            });
            $("#tipo_tercero").change(function () {
                var tipoTercero = parseInt($(this).val());
                if (tipoTercero === 2) {
                    $(".nombre-tercero").hide();
                    $(".denominacion-razon").show();
                } else {
                    $(".nombre-tercero").show();
                    $(".denominacion-razon").hide();
                }
            })
            $("#transmisor_propiedad").change(function(){
                var transmisorDenominacion = parseInt($(this).val());
                if (transmisorDenominacion === 2){
                    $(".nombre-razon").hide();
                    $(".denominacion-rs-transmisor").show();
                } else{
                    $(".nombre-razon").show();
                    $(".denominacion-rs-transmisor").hide();
                }
            });
            $("#relacion_transmisor").change(function(){
                var relacionTransmisorMueble = parseInt($(this).val());
                if (relacionTransmisorMueble === 20){
                    $(".especifique-relacion-transmisor"). show();
                } else {
                    $(".especifique-relacion-transmisor").hide();
                }
                });
        });

    </script>
@endsection
