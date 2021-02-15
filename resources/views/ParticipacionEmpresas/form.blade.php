<div class="card-body">
    <div class="alert alert-danger" role="alert">
        Todos los datos de la participación en empresas, sociedadeS, asociación civil, organizaciones, consejos y consultorías del declarante, cónyuge, concubina, concubinario, familiares consanguíneos hasta el cuarto grado por afinidad o civil y/o dependientes económicos, no serán públicos.
    </div>
    <hr>
    <!-- Primera fila  -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <strong>{!! Form::label('titular_operacion_id', ' Titular de la participación: * ') !!}</strong>
                    {!! Form::select('empresas[relacion_transmisores_id]', isset($RelacionTransmisor) ? $RelacionTransmisor : [], isset($empresas) ? $empresas->relacion_transmisores_id : null,['class'=>'form-control text-uppercase tipo-titular', 'placeholder' => 'Selecciona una opción', 'id' => 'relacion_transmisores_id', 'required' => 'true']) !!}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <strong style="line-height : 15px;">{!! Form::label('nombre_empresa', ' Nombre de la empresa, sociedad, asociación civil, organizaciones, consejos y consultorías: * ') !!}</strong>
                    {!! Form::text('empresas[nombre_empresa]',isset($empresas) ? $empresas->nombre_empresa : null,['class'=>'form-control text-uppercase tipo-titular', 'placeholder'=>'p. ej. Consultora S.A. de C.V.',  'id' => 'nombre_empresa', 'required' => 'true']) !!}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <strong>{!! Form::label('rfc_empresa', ' RFC: * ') !!}</strong>
                    {!! Form::text('empresas[rfc_empresa]',isset($empresas) ? $empresas->rfc_empresa : null,['class'=>'form-control text-uppercase tipo-titular', 'placeholder'=>'P. EJ. XAX010101010',  'id' => 'rfc_empresa', 'maxlength'=>'12', 'pattern'=>'([A-Z]{3}[0-9]{6}[A-Z0-9]{3})', 'required' => 'true', 'title' => 'El formato de RFC es a 12 dígitos']) !!}
                </div>
            </div>
        </div>
    </div>
    <!-- Segunda fila  -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <strong style="line-height : 15px;">{!! Form::label('porcentaje', ' Porcentaje de participación de acuerdo a escrituras, en el capital, partes sociales, servicios profesionales o de bienes muebles o inmuebles: * ') !!}</strong>
                    {!! Form::number('empresas[porcentaje]',isset($empresas) ? $empresas->porcentaje : null,['class'=>'form-control text-uppercase tipo-titular', 'placeholder'=>'p. ej. 10%',  'id' => 'porcentaje', 'maxlength'=>'3', 'min'=>'1', 'max'=>'100', 'pattern' => '[0-9]{0,3}', 'required' => 'true']) !!}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <strong>{!! Form::label('tipo_participacion_id', ' Tipo de participación: * ') !!}</strong>
                    {!! Form::select('empresas[tipo_participacion_id]', isset($selecttipoParticipacion) ? $selecttipoParticipacion : [], isset($empresas) ? $empresas->tipo_participacion_id : null,['class'=>'form-control text-uppercase tipo-titular', 'placeholder'=>'Selecciona una opción', 'required' => 'true', 'id' => 'tipo_participacion_id']) !!}
                </div>
            </div>
            <div class="col-lg-4" id="otro_Disabled">
                <div class="form-group">
                    <strong>{!! Form::label('participacion_otro', ' Especifique: ') !!}</strong>
                    {!! Form::text('empresas[participacion_otro]',isset($empresas) ? $empresas->participacion_otro : null,['class'=>'form-control text-uppercase tipo-titular', 'placeholder'=>'p. ej. 10%',  'id' => 'participacion_otro', 'disabled' => 'true' ]) !!}
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <strong>{!! Form::label('tipo_sociedad_id', ' Tipo de sociedad: * ') !!}</strong>
                    {!! Form::select('empresas[tipo_sociedad_id]', isset($tipoSociedad) ? $tipoSociedad : [], isset($empresas) ? $empresas->tipo_sociedad_id : null,['class'=>'form-control text-uppercase tipo-titular', 'placeholder'=>'Selecciona una opción', 'id' => 'tipo_sociedad_id', 'required' => 'true' ]) !!}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <strong>{!! Form::label('tipo_respuesta_id', 'Especifique sociedad: * ') !!}</strong>
                    {!! Form::text('empresas[especifique_sociedad]', isset($empresas) ? $empresas->especifique_sociedad : null,['class'=>'form-control text-uppercase tipo-titular', 'placeholder'=>'p. ej. ', 'id' => 'especifique_sociedad', 'required' => 'true' ]) !!}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <strong>{!! Form::label('tipo_modalidad_id', ' Modalidad de la participación: * ') !!}</strong>
                    {!! Form::select('empresas[tipo_modalidad_id]', isset($tipoModalidad) ? $tipoModalidad : [], isset($empresas) ? $empresas->tipo_modalidad_id : null,['class'=>'form-control text-uppercase tipo-titular', 'placeholder'=>'Selecciona una opción', 'id' => 'tipo_modalidad_id', 'required' => 'true' ]) !!}
                </div>
            </div>
        </div>
    </div>

    <!-- Tercer fila  -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <strong>{!! Form::label('tipo_respuesta_id', ' ¿Recibe remuneración por su participación?* ') !!}</strong>
                    {!! Form::select('empresas[tipo_respuesta_id]', isset($selecttipoRespuesta) ? $selecttipoRespuesta : [], isset($empresas) ? $empresas->tipo_respuesta_id : null,['class'=>'form-control text-uppercase tipo-titular', 'placeholder'=>'Selecciona una opción', 'id' => 'tipo_respuesta_id', 'required' => 'true' ]) !!}
                </div>
            </div>

            <div class="col-lg-4">
                <div class="form-group">
                    <strong>{!! Form::label('monto_mensual', ' Monto mensual neto: ') !!}</strong>
                    {!! Form::number('empresas[monto_mensual]',isset($empresas) ? $empresas->monto_mensual : null,['class'=>'form-control text-uppercase tipo-titular', 'placeholder'=>'p. ej. $1,000,000.00 MXn',  'id' => 'monto_mensual', 'min'=>'1', 'disabled' => 'true' ]) !!}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <strong>{!! Form::label('part_ubicacion_id', ' Lugar donde se ubica: * ') !!}</strong>
                    {!! Form::select('empresas[part_ubicacion_id]', isset($selectubicacionParticipacion) ? $selectubicacionParticipacion : [], isset($empresas) ? $empresas->part_ubicacion_id : null,['class'=>'form-control text-uppercase tipo-titular', 'placeholder'=>'Selecciona una opción', 'id' => 'part_ubicacion_id', 'required' => 'true']) !!}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <strong>{!! Form::label('sector_productivo_id', ' Sector productivo al que pertenece: * ') !!}</strong>
                    {!! Form::select('empresas[sector_productivo_id]', isset($selectsectorProductivo) ? $selectsectorProductivo : [], isset($empresas) ? $empresas->sector_productivo_id : null,['class'=>'form-control text-uppercase tipo-titular',  'id' => 'sector_productivo_id', 'placeholder'=>'Selecciona una opción', 'required' => 'true']) !!}
                </div>
            </div>
            <div class="col-lg-4" id="otro_Disabled_sector">
                <div class="form-group">
                    <strong>{!! Form::label('espec_sector', ' Especifique: ') !!}</strong>
                    {!! Form::text('empresas[espec_sector]',isset($empresas) ? $empresas->espec_sector : null,['class'=>'form-control text-uppercase tipo-titular', 'placeholder'=>'p. ej. Sector petrolero',  'id' => 'espec_sector', 'disabled' => 'true' ]) !!}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <div id="dom_mex">
                        <strong>{!! Form::label('entidad_id', ' Entidad Federativa: ') !!}</strong>
                        {!! Form::select('empresas[entidad_id]', isset($selectEntidad) ? $selectEntidad : [], isset($empresas) ? $empresas->entidad_id : null,['class'=>'form-control text-uppercase tipo-titular',  'id' => 'entidad_id', 'placeholder'=>'Selecciona una opción',]) !!}

                    </div>
                    <!-- EX  -->
                    <div id="dom_ext" >
                        <strong>{!! Form::label('pais_id', ' País donde se localiza: ') !!}</strong>
                        {!! Form::select('empresas[pais_id]', isset($selectpais) ? $selectpais : [], isset($empresas) ? $empresas->pais_id : null,['class'=>'form-control text-uppercase tipo-titular',  'id' => 'pais_id', 'placeholder'=>'Selecciona una opción',]) !!}
                    </div>


                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <strong>{!! Form::label('obsercaciones', ' Especifique: ') !!}</strong>
                    {!! Form::textarea('empresas[observaciones]', isset($empresas) ? $empresas->observaciones : null, ['class'=>'form-control tipo-titular', 'cols'=>'62', 'rows'=>'5', 'id' => 'observaciones']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <strong>{!! Form::label('obsercaciones', ' Todos los campos marcados con * son obligatorios. ') !!}</strong>
                </div>
            </div>
        </div>
    </div>

    <center>
        <br>
        <a href="{{route('participacion_empresas.index')}}" class="btn btn-sm btn-submit text-light">Ir a la sección anterior</a>
        <input type="submit" name="submit" class="btn btn-sm btn-submit text-light" value="Guardar e ir a la siguiente sección">
    </center>
</div>

@section('scripts')
<script>

    $("#dom_mex").hide();
    $("#dom_ext").hide();

    //CAMBIO DE COLOR TITULAR
    $("#titular_operacion_id").change(function () {
        var tipoTitular = $(this).val();
        if (tipoTitular === "0") {
            $(".tipo-titular").removeClass("alert-danger");
        } else if (tipoTitular !== "1") {
            $(".tipo-titular").addClass("alert-danger");
        } else {
            $(".tipo-titular").removeClass("alert-danger");
        }
    });

    //HABILITAR CAJA DE TEXTO OTROS TIPO PARTICIPACION
    $('#tipo_participacion_id').change(function () {
        if (parseInt($(this).val()) === 8) {
//            $('#participacion_otro').prop('disabled', false);

            $('#participacion_otro').prop('disabled', false);
            $('#participacion_otro').prop('required', true);

        } else {
//            $('#participacion_otro').prop('disabled', true);

            $('#participacion_otro').prop('disabled', true);
            $('#participacion_otro').prop('required', false);
            $('#participacion_otro').prop('value', '');
        }
    });

    //HABILITAR CAJA DE TEXTO OTROS RECIBE REMUNERACIÓN
    $('#tipo_respuesta_id').change(function () {
        if (parseInt($(this).val()) === 1) {
//            $('#monto_mensual').prop('disabled', false);

            $('#monto_mensual').prop('disabled', false);
            $('#monto_mensual').prop('required', true);

        } else {
//            $('#monto_mensual').prop('disabled', true);

            $('#monto_mensual').prop('disabled', true);
            $('#monto_mensual').prop('required', false);
            $('#monto_mensual').prop('value', '');
        }
    });

    //HABILITAR CAJA DE TEXTO OTROS RECIBE REMUNERACIÓN
    $('#sector_productivo_id').change(function () {
        if (parseInt($(this).val()) === 17) {
//            $('#espec_sector').prop('disabled', false);

            $('#espec_sector').prop('disabled', false);
            $('#espec_sector').prop('required', true);

        } else {
//            $('#espec_sector').prop('disabled', true);

            $('#espec_sector').prop('disabled', true);
            $('#espec_sector').prop('required', false);
            $('#espec_sector').prop('value', '');
        }
    });

    //HABILITAR CAJA DE TEXTO OTROS RECIBE REMUNERACIÓN
    $('#part_ubicacion_id').change(function () {
        if (parseInt($(this).val()) === 1) {
            $("#dom_mex").show();
            $("#dom_ext").hide();
        } else {
            $("#dom_mex").hide();
            $("#dom_ext").show();
        }
    });

    @isset($empresas)
    $('#titular_operacion_id').change();
    $("#tipo_participacion_id").change();
    $('#tipo_respuesta_id').change();
    $('#sector_productivo_id').change();
    $('#part_ubicacion_id').change();

    @endisset



</script>
@endsection
