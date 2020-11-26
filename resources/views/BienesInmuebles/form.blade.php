<div class="alert alert-danger" role="alert" style="line-height:23px !important;">Todos los datos de bienes declarados a nombre de la pareja, dependientes económicos y/o terceros o que sean en copropiedad con el Declarante no serán públicos.</div>
<h5>BIENES DEL DECLARANTE, PAREJA Y/O DEPENDIENTES ECONÓMICOS</h5>
<hr>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <strong>{!! Form::label('tipoInmueble', ' Tipo de inmueble: *') !!}</strong>
                {!! Form::select('tipo_inmueble', $selecttipoInmueble, null,['class'=>'form-control alert-danger',  'id' => 'tipo_inmueble']) !!}            
            </div>
        </div>
        <div class="col-lg-4" id="combo_otro_Disabled" style="display: block;">
            <div class="form-group">
                <strong>{!! Form::label('especifique', ' Especifique: ') !!}</strong>
                {!! Form::text('especifique',null,['class'=>'form-control', 'placeholder'=>'p. ej. Hacienda',  'id' => 'especifique', 'disabled' => 'true' ]) !!}
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <strong>{!! Form::label('titularInmueble', ' Titular del inmueble:') !!}</strong>
                {!! Form::select('titular_inmueble', $selecttitularInmueble, null,['class'=>'form-control alert-danger',  'id' => 'titutlar_inmueble']) !!}            
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">                
                <strong>{!! Form::label('porcentajePropiedad', ' Porcentaje de propiedad del Declarante conforme a escrituración o contrato: ') !!}</strong>
                {!! Form::text('porcentajePropiedad',null,['class'=>'form-control', 'placeholder'=>'p. ej. 10%',  'id' => 'porcentaje_Propiedad']) !!}
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">                
                <strong>{!! Form::label('superficieTerreno', ' Superficie del terreno: ') !!}</strong>
                {!! Form::text('superficieTerreno',null,['class'=>'form-control', 'placeholder'=>'p. ej. 30m',  'id' => 'superficie_terreno']) !!}
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <strong>{!! Form::label('superficieConstruccion', ' Superficie de construcción: ') !!}</strong>
                {!! Form::text('superficieConstruccion',null,['class'=>'form-control', 'placeholder'=>'p. ej. 30m',  'id' => 'superficie_construccion']) !!}
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <strong>{!! Form::label('formaAdquisicion', ' Forma de adquisición:') !!}</strong>
            {!! Form::select('formaAdquisicion', $selectformaAdquisicion, null,['class'=>'form-control alert-danger',  'id' => 'forma_Adquisicion']) !!}            
        </div>
        <div class="col-lg-4">
            <strong>{!! Form::label('formaPago', ' Forma de pago:') !!}</strong>
            {!! Form::select('formaPago', $selectformaPago, null,['class'=>'form-control alert-danger',  'id' => 'forma_Pago']) !!}            
        </div>
        <div class="col-lg-4">
            <div class="form-group">
            </div>
        </div>
    </div>
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <strong>{!! Form::label('tipoTransmisor', ' Tipo de transmisor de la propiedad:') !!}</strong>
                {!! Form::select('tipoTransmisor', $selectTipoTransmisores, null,['class'=>'form-control alert-danger',  'id' => 'tipo_Transmisor']) !!}
            </div>
        </div>
        <div class="col-lg-4" id="disabledNombretransmisor">
            <div class="form-group">
                <strong>{!! Form::label('nombreTransmisor', ' Tipo de transmisor de la propiedad: ') !!}</strong>
                {!! Form::text('nombreTransmisor',null,['class'=>'form-control', 'placeholder'=>'p. ej. Juan Robles Rosas',  'id' => 'nombre_Transmisor']) !!}
            </div>
        </div>
        <div class="col-lg-4" id="disabledRFCtransmisor">
            <div class="form-group">
                <strong>{!! Form::label('rfcTransmisor', ' RFC del transmisor: ') !!}</strong>
                {!! Form::text('rfcTransmisor',null,['class'=>'form-control', 'placeholder'=>'p. ej. XXXX010101',  'id' => 'rfc_Transmisor']) !!}
            </div>
        </div>
        <div class="col-lg-4">
            <div id="pFisicatransmisor" style="display: none;">
                <div class="form-group">
                    <strong>{!! Form::label('nombreTransmisorF', ' Nombre del transmisor: ') !!}</strong>
                    {!! Form::text('nombreTransmisorF',null,['class'=>'form-control', 'placeholder'=>'p. ej. Juan Robles Rosas',  'id' => 'nombre_TransmisorF']) !!}
                </div>
            </div>
            <div id="pMoraltransmisor" style="display: none;">
                <div class="form-group">                    
                    <strong>{!! Form::label('nombreTransmisorM', ' Nombre del transmisor: ') !!}</strong>
                    {!! Form::text('nombreTransmisorM',null,['class'=>'form-control', 'placeholder'=>'p. ej. Juan Robles Rosas',  'id' => 'nombre_TransmisorM']) !!}                    
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div id="pFisicaRfctransmisor" style="display: none;">
                <div class="form-group">
                    <strong>{!! Form::label('rfcTransmisorF', ' RFC del transmisor: ') !!}</strong>
                    {!! Form::text('rfcTransmisorF',null,['class'=>'form-control', 'placeholder'=>'p. ej. XXXX010101', 'pattern'=>'([A-Z]{4}[0-9]{6}[A-Z0-9]{3})', 'maxlength'=>'13', 'id' => 'rfc_TransmisorF']) !!}

                </div>
            </div>
            <div id="pMoralRfctransmisor" style="display: none;">
                <div class="form-group">
                    <strong>{!! Form::label('rfcTransmisorM', ' RFC del transmisor: ') !!}</strong>
                    {!! Form::text('rfcTransmisorM',null,['class'=>'form-control', 'placeholder'=>'p. ej. XXXX010101', 'maxlength'=>'12', 'pattern'=>'([A-Z]{3}[0-9]{9})', 'id' => 'nombre_TransmisorM']) !!}
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <strong>{!! Form::label('relacionTransmisor', ' Relación del transmisor de la propiedad con el titular:') !!}</strong>
                {!! Form::select('relacionTransmisor', $selectRelacionTransmisor, null,['class'=>'form-control alert-danger',  'id' => 'relacion_Transmisor']) !!}

            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <strong>{!! Form::label('valorAdquisicion', ' Valor de adquisición: ') !!}</strong>
                {!! Form::text('valorAdquisicion',null,['class'=>'form-control', 'placeholder'=>'p. ej. 100000.0 Mxn', 'id' => 'valor_Adquisicion']) !!}
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <strong>{!! Form::label('valorConforme', ' El valor es conforme a:') !!}</strong>
                {!! Form::select('valorConforme', $selectvalorConforme, null,['class'=>'form-control alert-danger',  'id' => 'valor_Conforme']) !!}
            </div>
        </div>

    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <strong>{!! Form::label('tipoMoneda', ' Tipo de moneda: ') !!}</strong>
                {!! Form::text('tipoMoneda',null,['class'=>'form-control', 'placeholder'=>'p. ej. Peso mexicano', 'id' => 'tipo_Moneda']) !!}
            </div>
        </div>

        <div class="col-lg-4">
            <div class="form-group">
                <strong>{!! Form::label('fechaAdquisicion', ' Fecha de adquisición del inmueble: ') !!}</strong>
                {!! Form::date('fechaAdquisicion',null,['class'=>'form-control', 'id' => 'fecha_Adquisicion']) !!}                
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <strong>{!! Form::label('datosRegistro', ' Datos del registro público de la propiedad, folio real u otro dato que permita su identificación: ') !!}</strong>
                {!! Form::text('datosRegistro',null,['class'=>'form-control', 'placeholder'=>'p. ej. 10101010', 'id' => 'datos_Registro']) !!}                
            </div>
        </div>

    </div>
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <strong>{!! Form::label('ubicacionInmueble', ' Ubicación del inmueble:') !!}</strong>
            {!! Form::select('ubicacionInmueble', $selectubicacionInmueble, null,['class'=>'form-control alert-danger',  'id' => 'ubicacion_Inmueble']) !!}
        </div>

        <div class="col-lg-8">
            <div class="form-group">
            </div>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <strong>{!! Form::label('aclaObservaciones', ' Aclaraciones/Observaciones: ') !!}</strong>
                {!! Form::textarea('aclaObservaciones',null,['class'=>'form-control', 'cols'=>'62', 'rows'=>'5', 'id' => 'acla_Observaciones']) !!}                
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <center>
            <br>
            <a href="#" class="btn btn-sm btn-submit text-light">Ir a la sección anterior</a>
            <input type="submit" name="submit" class="btn btn-sm btn-submit text-light" value="Guardar e ir a la siguiente sección">
        </center>
    </div>
</div>


@section('scripts')
<script>
    $(document).ready(function(){
        $('#tipo_inmueble').change(function(){
            if(parseInt($(this).val())== 9){
                $('#especifique').prop('disabled',false);
            }else{
                $('#especifique').prop('disabled',true);
            }
        });
    });
</script>
@endsection
