<div class="card-body">

    <div class="alert alert-danger" role="alert" style="background-color:#E8CECF">
        <strong> Todos los datos de representación de la pareja o dependientes económicos no serán públicos</strong>
    </div>

    <!-- Primera fila  -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <strong>{!! Form::label('titular_id', ' Titular de la representación: ') !!}</strong>
                    {!! Form::select('representacion[titular_id]', isset($selecttitularRepresentacion) ? $selecttitularRepresentacion : [], isset($representacion) ? $representacion -> titular_id : null,['class'=>'form-control text-uppercase titular-repre', 'placeholder' => 'Selecciona una opción', 'id' => 'titular_id', 'required' => 'true']) !!}
                </div>
            </div>
            <div class="col-lg-4">
                <strong>{!! Form::label('tipo_representacion_id', ' Tipo de respresentacion: ') !!}</strong>
                {!! Form::select('representacion[tipo_representacion_id]', isset($selecttipoRepresentacion) ? $selecttipoRepresentacion : [], isset($representacion) ? $representacion -> tipo_representacion_id : null,['class'=>'form-control text-uppercase titular-repre', 'placeholder' => 'Selecciona una opción', 'id' => 'tipo_representacion_id', 'required' => 'true']) !!}
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <strong>{!! Form::label('fecha_representacion', ' Fecha de inicio de la representación: ') !!}</strong>
                    {!! Form::date('representacion[fecha_representacion]',isset($representacion) ? $representacion->fecha_representacion : null,['class'=>'form-control text-uppercase titular-repre', 'placeholder'=>'p. ej. Consultora S.A. de C.V.',  'id' => 'fecha_representacion', 'max'=>date("Y-m-d"), 'required' => 'true']) !!}
                </div>
            </div>
        </div>
    </div>

    <!-- Segunda fila  -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <strong>{!! Form::label('regimen_representante_id', ' Representante / Representado: ') !!}</strong>
                    {!! Form::select('representacion[regimen_representante_id]', isset($selectregimenRepresentante) ? $selectregimenRepresentante : [], isset($representacion) ? $representacion -> regimen_representante_id : null,['class'=>'form-control text-uppercase titular-repre', 'placeholder' => 'Selecciona una opción', 'id' => 'regimen_representante_id', 'required' => 'true']) !!}
                </div>
            </div>
            <div class="col-lg-4 nombre-representanteF">
                <div class="form-group">
                    <strong>{!! Form::label('nombre_representanteFisica', ' Nombre del representante / representado: ') !!}</strong>
                    {!! Form::text('representacion[nombre_representanteFisica]',isset($representacion) ? $representacion->nombre_representante : null,['class'=>'form-control text-uppercase titular-repre', 'placeholder'=>'p. ej. Juan Pérez.',  'id' => 'nombre_representanteFisica']) !!}
                </div>
            </div>

            <div class="col-lg-4 rfc-representanteF">
                <div class="form-group">
                    <strong>{!! Form::label('rfc_representanteFisica', ' RFC: ') !!}</strong>
                    {!! Form::text('representacion[rfc_representanteFisica]',isset($representacion) ? $representacion->rfc_representante : null,['class'=>'form-control text-uppercase titular-repre', 'placeholder'=>'p. ej. XXXX010101XAX', 'pattern'=>'([A-Z]{4}[0-9]{6}[A-Z0-9]{0,3})', 'id' => 'rfc_representanteFisica', 'title' => 'El formato RFC es a 10 o 13 dígitos']) !!}
                </div>
            </div>


            <div class="col-lg-4 nombre-representanteM">
                <div class="form-group">
                    <strong>{!! Form::label('nombre_representanteMoral', ' Razón social del representante/representado: ') !!}</strong>
                    {!! Form::text('representacion[nombre_representanteMoral]',isset($representacion) ? $representacion->nombre_representante : null,['class'=>'form-control text-uppercase titular-repre', 'placeholder'=>'p. ej. Juan Pérez.',  'id' => 'nombre_representanteMoral']) !!}
                </div>
            </div>

            <div class="col-lg-4 rfc-representanteM">
                <div class="form-group">
                    <strong>{!! Form::label('rfc_representanteMoral', ' RFC: ') !!}</strong>
                    {!! Form::text('representacion[rfc_representanteMoral]',isset($representacion) ? $representacion->rfc_representante : null,['class'=>'form-control text-uppercase titular-repre', 'placeholder'=>'p. ej. XXX010101XXX', 'pattern'=>'([A-Z]{3}[0-9]{6}[A-Z0-9]{3})',  'id' => 'rfc_representanteMoral', 'title' => 'El formato RFC es a 12 dígitos']) !!}
                </div>
            </div>
        </div>
    </div>

    <!-- Tercer fila  -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <strong>{!! Form::label('respuesta_id', ' ¿Recibe remuneración por su participación? ') !!}</strong>
                    {!! Form::select('representacion[respuesta_id]', isset($selecttipoRespuesta) ? $selecttipoRespuesta : [], isset($representacion) ? $representacion -> respuesta_id : null,['class'=>'form-control text-uppercase titular-repre', 'placeholder' => 'Selecciona una opción', 'id' => 'respuesta_id', 'required' => 'true']) !!}
                </div>
            </div>

            <div class="col-lg-4">
                <div class="form-group">
                    <strong>{!! Form::label('monto_mensual', ' Monto mensual neto:: ') !!}</strong>
                    {!! Form::number('representacion[monto_mensual]',isset($representacion) ? $representacion->monto_mensual : null,['class'=>'form-control text-uppercase titular-repre', 'placeholder'=>'p. ej. $1,000,000.00 Mxn', 'min' => '1', 'id' => 'monto_mensual', 'disabled'=>'true']) !!}
                </div>
            </div>

            <div class="col-lg-4">
                <div class="form-group">
                    <strong>{!! Form::label('tipo_sector_id', ' Sector productivo al que pertenece: ') !!}</strong>
                    {!! Form::select('representacion[tipo_sector_id]', isset($selecttipoSector) ? $selecttipoSector : [], isset($representacion) ? $representacion -> tipo_sector_id : null,['class'=>'form-control text-uppercase titular-repre', 'placeholder' => 'Selecciona una opción', 'id' => 'tipo_sector_id', 'required' => 'true']) !!}
                </div>
            </div>
        </div>
    </div>

    <!-- Quinta fila  -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4" id="otro_Disabled">
                <div class="form-group">
                    <strong>{!! Form::label('especifique', ' Especifique: ') !!}</strong>
                    {!! Form::text('representacion[especifique]',isset($representacion) ? $representacion->especifique : null,['class'=>'form-control text-uppercase titular-repre', 'placeholder'=>'p. ej. Petrolero',  'id' => 'especifique', 'disabled'=>'true']) !!}

                </div>
            </div>
            <div class="col-lg-4">
                <strong>{!! Form::label('lugar_ubica_id', ' Lugar donde se ubica: ') !!}</strong>
                {!! Form::select('representacion[lugar_ubica_id]', isset($selectubicacionRepresentacion) ? $selectubicacionRepresentacion : [], isset($representacion) ? $representacion -> lugar_ubica_id : null,['class'=>'form-control text-uppercase titular-repre', 'placeholder' => 'Selecciona una opción', 'id' => 'lugar_ubica_id', 'required' => 'true']) !!}
            </div>

            <div class="col-lg-4">
                <div class="form-group">
                    <!-- MX  -->
                    <div id="dom_mex" style="display: none;">
                        <strong>{!! Form::label('entidad_id', ' Entidad federativa: ') !!}</strong>
                        {!! Form::select('representacion[entidad_id]', isset($selectEntidad) ? $selectEntidad : [], isset($representacion) ? $representacion -> entidad_id : null,['class'=>'form-control text-uppercase titular-repre', 'placeholder' => 'Selecciona una opción', 'id' => 'entidad_id']) !!}
                    </div>
                    <!-- EX  -->
                    <div id="dom_ext" style="display: none;">
                        <strong>{!! Form::label('pais_id', ' País donde se localiza: ') !!}</strong>
                        {!! Form::select('representacion[pais_id]', isset($selectpaises) ? $selectpaises : [], isset($representacion) ? $representacion -> pais_id : null,['class'=>'form-control text-uppercase titular-repre', 'placeholder' => 'Selecciona una opción', 'id' => 'pais_id']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sexta fila  -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <strong>{!! Form::label('observaciones', ' Aclaraciones/Observaciones: ') !!}</strong>
                    {!! Form::textarea('representacion[observaciones]',isset($representacion) ? $representacion->observaciones : null,['class'=>'form-control text-uppercase titular-repre', 'id' => 'observaciones']) !!}
                </div>
            </div>
        </div>
    </div>

    <!-- Botones  -->
    <div class="row">
        <div class="col-md-12">
            <center>
                <br>
                <a href="{{route('representacion.index')}}" class="btn btn-sm btn-submit text-light">Ir a la sección anterior</a>
                <input type="submit" name="submit" class="btn btn-sm btn-submit text-light" value="Guardar e ir a la siguiente sección">

            </center>
        </div>
    </div>
    <br>
</div>


@section('scripts')
<script>

    $("#dom_mex").hide();
    $("#dom_ext").hide();

    $('.nombre-representanteM').hide();
    $('.rfc-representanteM').hide();

    $('#nombre_representanteFisica').prop('disabled', true);
    $('#rfc_representanteFisica').prop('disabled', true);

    $('#nombre_representanteMoral').prop('disabled', true);
    $('#rfc_representanteMoral').prop('disabled', true);

    //CAMBIO DE COLOR TITULAR
    $("#titular_id").change(function () {
        var tipoTitular = $(this).val();
        if (tipoTitular === "") {
            $(".titular-repre").removeClass("alert-danger");
        } else if (tipoTitular !== "1") {
            $(".titular-repre").addClass("alert-danger");
        } else {
            $(".titular-repre").removeClass("alert-danger");
        }
    });

    //TIPO TRANSMISOR
    $('#regimen_representante_id').change(function () {
        if ($(this).val() === "") {

            $('.nombre-representanteF').show();
            $('.rfc-representanteF').show();

            $('.nombre-representanteM').hide();
            $('.rfc-representanteM').hide();

            $('#nombre_representanteFisica').prop('disabled', true);
            $('#rfc_representanteFisica').prop('disabled', true);

        } else if (parseInt($(this).val()) === 1) {
            $('.nombre-representanteF').show();
            $('.rfc-representanteF').show();

            $('.nombre-representanteM').hide();
            $('.rfc-representanteM').hide();

            $('#nombre_representanteFisica').removeAttr('disabled');
            $('#rfc_representanteFisica').removeAttr('disabled');
            $('#rfc_representanteFisica').prop('required', 'true');
        } else {
            $('.nombre-representanteF').hide();
            $('.rfc-representanteF').hide();

            $('.nombre-representanteM').show();
            $('.rfc-representanteM').show();

            $('#nombre_representanteMoral').removeAttr('disabled');
            $('#rfc_representanteMoral').removeAttr('disabled');
            $('#rfc_representanteMoral').prop('required', 'true');
        }
    });

    //TIPO TRANSMISOR
    $('#respuesta_id').change(function () {
        if (parseInt($(this).val()) === 1) {
            console.log($(this).val());
            $('#monto_mensual').prop('disabled', false);
            $('#monto_mensual').prop('required', true);
        } else {
            $('#monto_mensual').prop('disabled', true);
            $('#monto_mensual').removeAttr('required');
        }
    });

    //TIPO TRANSMISOR
    $('#tipo_sector_id').change(function () {
        if (parseInt($(this).val()) === 17) {
            console.log($(this).val());
            $('#especifique').prop('disabled', false);
            $('#especifique').prop('required', true);
        } else {
            $('#especifique').prop('disabled', true);
            $('#especifique').removeAttr('required');
        }
    });


    //HABILITAR CAJA DE TEXTO OTROS RECIBE REMUNERACIÓN
    $('#lugar_ubica_id').change(function () {
        if ($(this).val() === '') {
            $("#dom_mex").hide();
            $('#entidad_id').removeAttr('required');

            $("#dom_ext").hide();
            $('#pais_id').removeAttr('required');

        } else if (parseInt($(this).val()) === 1) {
            $("#dom_mex").show();
            $('#entidad_id').prop('required', true);

            $("#dom_ext").hide();
            $('#pais_id').removeAttr('required');

        } else {
            $("#dom_mex").hide();
            $('#entidad_id').removeAttr('required');

            $("#dom_ext").show();
            $('#pais_id').prop('required', true);
        }
    });



    $(document).ready(function () {
        $('#titular_id').change();
        $("#regimen_representante_id").change();
        $("#respuesta_id").change();
        $("#tipo_sector_id").change();
        $("#lugar_ubica_id").change();
    });


</script>
@endsection
