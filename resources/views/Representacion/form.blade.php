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
                    {!! Form::select('representacion[titular_id]', isset($selecttitularRepresentacion) ? $selecttitularRepresentacion : [], isset($representacion) ? $representacion -> titular_id : null,['class'=>'form-control titular-repre',  'id' => 'titular_id']) !!}
                </div>
            </div>
            <div class="col-lg-4">
                <strong>{!! Form::label('tipo_representacion_id', ' Tipo de respresentacion: ') !!}</strong>
                {!! Form::select('representacion[tipo_representacion_id]', isset($selecttipoRepresentacion) ? $selecttipoRepresentacion : [], isset($representacion) ? $representacion -> tipo_representacion_id : null,['class'=>'form-control titular-repre',  'id' => 'tipo_representacion_id']) !!}
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <strong>{!! Form::label('fecha_representacion', ' Fecha de inicio de la representación: ') !!}</strong>
                    {!! Form::date('representacion[fecha_representacion]',isset($representacion) ? $representacion->fecha_representacion : null,['class'=>'form-control titular-repre', 'placeholder'=>'p. ej. Consultora S.A. de C.V.',  'id' => 'fecha_representacion']) !!}
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
                    {!! Form::select('representacion[regimen_representante_id]', isset($selectregimenRepresentante) ? $selectregimenRepresentante : [], isset($representacion) ? $representacion -> regimen_representante_id : null,['class'=>'form-control titular-repre',  'id' => 'regimen_representante_id']) !!}
                </div>
            </div>
            <div class="col-lg-4 nombre-representanteF">
                <div class="form-group">
                    <strong>{!! Form::label('nombre_representanteFisica', ' Nombre del representante / representado F: ') !!}</strong>
                    {!! Form::text('representacion[nombre_representanteFisica]',isset($representacion) ? $representacion->nombre_representante : null,['class'=>'form-control titular-repre', 'placeholder'=>'p. ej. Juan Pérez.',  'id' => 'nombre_representanteFisica']) !!}
                </div>
            </div>

            <div class="col-lg-4 rfc-representanteF">
                <div class="form-group">
                    <strong>{!! Form::label('rfc_representanteFisica', ' RFC F: ') !!}</strong>
                    {!! Form::text('representacion[rfc_representanteFisica]',isset($representacion) ? $representacion->rfc_representante : null,['class'=>'form-control titular-repre', 'placeholder'=>'p. ej. XXXX010101',  'id' => 'rfc_representanteFisica']) !!}
                </div>
            </div>


            <div class="col-lg-4 nombre-representanteM">
                <div class="form-group">
                    <strong>{!! Form::label('nombre_representanteMoral', ' Nombre del representante / representado M: ') !!}</strong>
                    {!! Form::text('representacion[nombre_representanteMoral]',isset($representacion) ? $representacion->nombre_representante : null,['class'=>'form-control titular-repre', 'placeholder'=>'p. ej. Juan Pérez.',  'id' => 'nombre_representanteMoral']) !!}    
                </div>
            </div>

            <div class="col-lg-4 rfc-representanteM">
                <div class="form-group">
                    <strong>{!! Form::label('rfc_representanteMoral', ' RFC M: ') !!}</strong>
                    {!! Form::text('representacion[rfc_representanteMoral]',isset($representacion) ? $representacion->rfc_representante : null,['class'=>'form-control titular-repre', 'placeholder'=>'p. ej. XXX010101',  'id' => 'rfc_representanteMoral']) !!}
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
                    {!! Form::select('representacion[respuesta_id]', isset($selecttipoRespuesta) ? $selecttipoRespuesta : [], isset($representacion) ? $representacion -> respuesta_id : null,['class'=>'form-control titular-repre',  'id' => 'respuesta_id']) !!}
                </div>
            </div>

            <div class="col-lg-4">
                <div class="form-group">
                    <strong>{!! Form::label('monto_mensual', ' Monto mensual neto:: ') !!}</strong>
                    {!! Form::text('representacion[monto_mensual]',isset($representacion) ? $representacion->monto_mensual : null,['class'=>'form-control titular-repre', 'placeholder'=>'p. ej. $1,000,000.00 Mxn',  'id' => 'monto_mensual']) !!}
                </div>
            </div>

            <div class="col-lg-4">
                <div class="form-group">
                    <strong>{!! Form::label('tipo_sector_id', ' Sector productivo al que pertenece: ') !!}</strong>
                    {!! Form::select('representacion[tipo_sector_id]', isset($selecttipoSector) ? $selecttipoSector : [], isset($representacion) ? $representacion -> tipo_sector_id : null,['class'=>'form-control titular-repre',  'id' => 'tipo_sector_id']) !!}
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
                    {!! Form::text('representacion[especifique]',isset($representacion) ? $representacion->especifique : null,['class'=>'form-control titular-repre', 'placeholder'=>'p. ej. $1,000,000.00 Mxn',  'id' => 'especifique']) !!}

                </div>
            </div>
            <div class="col-lg-4">
                <strong>{!! Form::label('lugar_ubica_id', ' Lugar donde se ubica: ') !!}</strong>
                {!! Form::select('representacion[lugar_ubica_id]', isset($selectubicacionRepresentacion) ? $selectubicacionRepresentacion : [], isset($representacion) ? $representacion -> lugar_ubica_id : null,['class'=>'form-control titular-repre',  'id' => 'lugar_ubica_id']) !!}
            </div>

            <div class="col-lg-4">
                <div class="form-group">
                    <!-- MX  --> 
                    <div id="dom_mex" style="display: none;">
                        <strong>{!! Form::label('entidad_federativa', ' Entidad federativa: ') !!}</strong>
                        {!! Form::text('representacion[entidad_federativa]',isset($representacion) ? $representacion->entidad_federativa : null,['class'=>'form-control titular-repre', 'placeholder'=>'p. ej. México',  'id' => 'entidad_federativa']) !!}
                    </div>
                    <!-- EX  --> 
                    <div id="dom_ext" style="display: none;">
                        <strong>{!! Form::label('pais_id', ' País donde se localiza: ') !!}</strong>
                        {!! Form::select('representacion[pais_id]', isset($selectubicacionRepresentacion) ? $selectubicacionRepresentacion : [], isset($representacion) ? $representacion -> pais_id : null,['class'=>'form-control titular-repre',  'id' => 'pais_id']) !!}
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
                    {!! Form::textarea('representacion[observaciones]',isset($representacion) ? $representacion->observaciones : null,['class'=>'form-control titular-repre', 'id' => 'observaciones']) !!}
                </div>
            </div>
        </div>
    </div>

    <!-- Botones  --> 
    <div class="row">
        <div class="col-md-12">
            <center>
                <br>
                <a href="#" class="btn btn-sm btn-submit text-light">Ir a la sección anterior</a>
                <input type="submit" name="submit" class="btn btn-sm btn-submit text-light" value="Guardar e ir a la siguiente sección">
                
            </center>
        </div>
    </div>
    <br>
</div>


@section('scripts')
<script>


    $('.nombre-representanteM').hide();
    $('.rfc-representanteM').hide();

    $('#nombre_representanteFisica').prop('disabled', true);
    $('#rfc_representanteFisica').prop('disabled', true);

    $('#nombre_representanteMoral').prop('disabled', true);
    $('#rfc_representanteMoral').prop('disabled', true);

    //CAMBIO DE COLOR TITULAR
    $("#titular_id").change(function () {
        var tipoTitular = $(this).val();
        if (tipoTitular === "0") {
            $(".titular-repre").removeClass("alert-danger");
        } else if (tipoTitular !== "1") {
            $(".titular-repre").addClass("alert-danger");
        } else {
            $(".titular-repre").removeClass("alert-danger");
        }
    });

    //TIPO TRANSMISOR
    $('#regimen_representante_id').change(function () {
        if (parseInt($(this).val()) === 0) {

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

            $('#nombre_representanteFisica').prop('disabled', false);
            $('#rfc_representanteFisica').prop('disabled', false);
        } else {
            $('.nombre-representanteF').hide();
            $('.rfc-representanteF').hide();

            $('.nombre-representanteM').show();
            $('.rfc-representanteM').show();

            $('#nombre_representanteMoral').prop('disabled', false);
            $('#rfc_representanteMoral').prop('disabled', false);
        }
    });
    
    $(document).ready(function(){
        $('#titular_id').change();
        $("#regimen_representante_id").change();
    });


</script>
@endsection