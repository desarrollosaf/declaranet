
<div class="card-header bg-info  border-0 py-3 d-flex align-items-center" style="background-color:#F1F1F1 !important;">
    <div>
        <h3 class="card-title mb-0">BIENES MUEBLES</h3>
        <h6>(A la fecha de ingreso)</h6>
    </div>
    <span class="badge badge-success ml-auto px-4" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> AYUDA</span>
</div>
<hr>
<hr>
<div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            <strong> {!! Form::label('titular_bien', 'Titular del bien:') !!}</strong>
            {!! Form::select('titular_bien',$selectTitular, null,['class'=>'form-control text-uppercase', 'id' => 'titular_bien'])!!}
            <span class="text-danger" style="font-size:150%"></span>                                
        </div>
    </div>
<div class="col-lg-4">
    <div class="form-group">
         <strong>{!! Form::label('tipo_bien', 'Tipo de bien:') !!}</strong>
         {!! Form::select('tipo_bien',$selectTipoBien, null,['class'=>'form-control text-uppercase', 'id' => 'tipo_bien'])!!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="col-lg-4" id="combo_otro" style="display: none;">
    <div class="form-group">
         <strong>{!! Form::label('especifique', 'Especifique:') !!}</strong>
         {!! Form::text('especifique', null,['class'=>'form-control text-uppercase', 'id' => 'especifique'])!!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>

    <div class="col-lg-4">
        <div class="form-group">
            <strong>{!! Form::label('descripcion_bien', 'Descripción del bien:') !!}</strong>
            {!! Form::text('descripcion_bien', null,['class'=>'form-control text-uppercase', 'id' => 'descripcion_bien', 'placeholder'=>"p. ej. Descripción", "pattern"=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}"])!!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="container" hidden>
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <strong>{!! Form::label('tipo_tercero', 'Tipo de tercero:') !!}</strong>
                    {!! Form::select('tipo_tercero',$selectTipoTercero, null,['class'=>'form-control text-uppercase', 'id' => 'tipo_tercero'])!!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <strong>{!! Form::label('transmisor_propiedad', 'Transmisor de la propiedad:') !!}</strong>
                    {!! Form::select('transmisor_propiedad',$selectTransmisores, null,['class'=>'form-control text-uppercase', 'id' => 'transmisor_propiedad'])!!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
            </div>
        <div class="col-lg-4">
                <div class="form-group">
                    <strong>{!! Form::label('nombre_transmisor', 'Nombre del transmisor:') !!}</strong>
                    {!! Form::text('nombre_transmisor', null,['class'=>'form-control text-uppercase', 'id' => 'nombre_transmisor', "disabled"=>true, 'placeholder'=>"p. ej. Juan Pérez.", "pattern"=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}"])!!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
        </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <strong>{!! Form::label('rfc', 'RFC:') !!}</strong>
                    {!! Form::text('rfc', null,['class'=>'form-control text-uppercase', 'id' => 'rfc', 'disabled'=>true, 'placeholder'=>"p. ej. XXXX010101", 'pattern'=>"([A-Z]{4}([0-9]{6}[A-Z0-9]{3})"])!!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
            </div>

            <div class="col-lg-4" id="transmisorNombreM" style="display: none;">
                <div class="form-group">
                    <strong>{!! Form::label('denominacion_razon_social', 'Denominacion o razón social del transmisor:') !!}</strong>
                    {!! Form::text('denominacion_razon_social', null,['class'=>'form-control text-uppercase', 'id' => 'denominacion_razon_social', 'placeholder'=>"p. ej. Desarrollo y Redes S.A. de C.V.", "pattern"=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}"])!!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
            </div>

            <div class="col-lg-4" id="transmisorRfcM" style="display: none;">
                <div class="form-group">
                    <label class="control-label" for="ProcessNum">RFC:</label>
                    <input type="text" name="bm_rfc_transmisor_mo" id="bm_rfc_transmisor_mo" class="form-control" placeholder="p. ej. XXXX010101" maxlength="12" pattern="([A-Z]{3}([0-9]{6}[A-Z0-9]{3})" title="Ingresa RFC a 12 dígitos" value="">
                </div>
            </div>
        </div>
    </div>
</div>
<div></div>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <strong>{!! Form::label('relación_transmisor', 'Relación del transmisor del mueble con el titular:') !!}</strong>
                {!! Form::select('relación_transmisor',$selectRelacionTransmisor, null,['class'=>'form-control text-uppercase alert-danger', 'id' => 'relación_transmisor'])!!}
                <span class="text-danger" style="font-size:150%"></span>
                </div>
        </div>
        <div class="col-lg-4" id="propiedad_otro_d" style="display: none;">
            <div class="form-group">
                <strong>{!! Form::label('especifique', 'Especifique:') !!}</strong>
                {!! Form::text('especifique', null,['class'=>'form-control text-uppercase', 'id' => 'especifique'])!!}
                <span class="text-danger" style="font-size:150%"></span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <strong>{!! Form::label('forma_adquisicion', 'Forma de adquisición:') !!}</strong>
                {!! Form::select('forma_adquisicion',$selectFormaAdquisicion, null,['class'=>'form-control text-uppercase', 'id' => 'forma_adquisicion'])!!}
                <span class="text-danger" style="font-size:150%"></span>                    
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <strong>{!! Form::label('forma_pago', 'Forma de pago:') !!}</strong>
                {!! Form::select('forma_pago',$selectFormaPago, null,['class'=>'form-control text-uppercase', 'id' => 'forma_pago'])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <strong>{!! Form::label('valor_adquisicion', 'Valor de adquisición del vehículo:') !!}</strong>
                {!! Form::text('valor_adquisicion', null,['class'=>'form-control text-uppercase', 'id' => 'valor_adquisicion', 'placeholder'=>"p. ej. 100000.00 Mxn", 'pattern'=>"[0-9]{1,7}"])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <strong>{!! Form::label('tipo_moneda', 'Tipo de moneda:') !!}</strong>
                {!! Form::text('tipo_moneda', null,['class'=>'form-control text-uppercase', 'id' => 'tipo_moneda', 'placeholder'=>"p. ej. Peso mexicano", 'pattern'=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}"])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
    <div class="col-lg-4">
        <div class="form-group">
                <strong>{!! Form::label('fecha_adquisicion', 'Fecha de adquisición del vehículo:') !!}</strong>
                {!! Form::date('fecha_adquisicion', null,['class'=>'form-control text-uppercase', 'id' => 'fecha_adquisicion'])!!}
                <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>

    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <strong>{!! Form::label('aclaraciones', 'Aclaraciones/Observaciones:') !!}</strong>
                {!! Form::textarea('aclaraciones', null,['class'=>'form-control text-uppercase alert-danger', 'id' => 'aclaraciones'])!!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <center>
            <br>
            <a href="#" class="btn btn-secondary">Ir a la sección anterior</a>
            <input type="submit" name="submit" class="btn btn-secondary" value="Guardar e ir a la siguiente sección">
        </center>
    </div>
</div>

@section('scripts')
    <script type="text/javascript">
        $(document).ready
    </script>
@endsection