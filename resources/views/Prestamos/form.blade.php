<div class="card-body">
    <div class="row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('prestamo.relacion_id', 'Tipo de bien en préstamo: *') !!}</strong>
            {!! Form::select('prestamo[relacion_id]',$selectTipoBien, null,['class'=>'form-control alert-danger',  'id' => 'tipo_bien', 'required' => true]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="vehiculo">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"><strong>Tipo de vehículo</strong></label>
                    {!! Form::select('vehiculos[tipoVehiculo_id]', $vehiculo, isset($vehiculos) ? $vehiculos->tipoVehiculo_id : [],['class'=>'form-control alert-danger',  'id' => 'tipoVehiculo_id', 'required' => true]) !!}
                </div>
            </div>

            <div class="col-lg-4" id="combo_otro" style="display: block;">
                <div class="form-group">
                    <label class="control-label" style="text-align:justify"><strong>Especifique</strong></label>
                    {!! Form::text('vehiculos[otroVehiculo]',isset($vehiculos) ? $vehiculos->otroVehiculo :null,['class'=>'form-control', 'placeholder'=>'P. ej. Otro', 'disabled'=>'disabled',  'id' => 'otroVehiculo']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"><strong>Marca</strong>:</label>
                    {!! Form::text('vehiculos[v_marca]', isset($vehiculos) ? $vehiculos->v_marca : null,['class'=>'form-control', 'placeholder'=>'P. ej. Renault',   'id' => 'v_marca']) !!}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="ProcessNum"><strong>Modelo</strong>:</label>
                    {!! Form::text('vehiculos[v_modelo]', isset($vehiculos) ? $vehiculos->v_modelo : null,['class'=>'form-control', 'placeholder'=>'P. ej. Clío',   'id' => 'v_modelo']) !!}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="State"><strong>Año</strong>:</label>
                    {!! Form::text('vehiculos[v_ano]', isset($vehiculos) ? $vehiculos->v_ano : null,['class'=>'form-control', 'placeholder'=>'P. ej. 2006',   'id' => 'v_ano']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"><strong>Número de serie o
                            registro</strong>:</label>
                    {!! Form::text('vehiculos[v_num_serie]', isset($vehiculos) ? $vehiculos->v_num_serie : null,['class'=>'form-control', 'placeholder'=>'P. ej. 1HGCM82633A004352',   'id' => 'v_num_serie']) !!}
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="ProcessNum">¿<strong>Dónde se encuentra
                            registrado?</strong></label>
                    {!! Form::select('vehiculos[lugar_registro]',$registro, isset($vehiculos) ? $vehiculos->lugar_registro : [],['class'=>'form-control', 'id' => 'lugar_registro']) !!}
                </div>
            </div>
            <div class="col-lg-4">

                <div id="lugarRegistroMx" style="display: block;">
                    <div class="form-group">
                        <label class="control-label" for="NumDoc"><strong>Entidad Federativa</strong>:</label>
                        {!! Form::text('vehiculos[v_entidadFederativa]', isset($vehiculos) ? $vehiculos->v_entidadFederativa : null,['class'=>'form-control', 'placeholder'=>'P. ej. México',   'id' => 'v_entidadFederativa', 'disabled' => "disabled"]) !!}
                    </div>
                </div>
                <div id="lugarRegistroEx" style="display: none;">
                    <div class="form-group">
                        <label class="control-label" for="NumDoc"><strong>País</strong>:</label>
                        {!! Form::select('vehiculos[pais_id]',$pais, isset($vehiculos) ? $vehiculos->pais_id : [],['class'=>'form-control', 'placeholder'=>'',  'id' => 'pais_id']) !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="State" style="line-height : 15px !important;">
                        <strong>
                            Relación con el dueño o el títular
                        </strong>
                    </label>
                    {!! Form::select('vehiculos[relacion_id]',$relacion, isset($vehiculos) ? $vehiculos->relacion_id : [],['class'=>'form-control', 'id' => 'relacion_id']) !!}
                </div>
            </div>
        </div>
    </div>
    <div class="inmueble">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <strong>{!! Form::label('tipo_inmueble_id', ' Tipo de inmueble:') !!}</strong>
                    {!! Form::select('bienesinmuebles[tipo_inmueble_id]', $selecttipoInmueble, isset($domicilio) ? $domicilio->tipo_inmueble_id : null,['class'=>'form-control tipo-titular',  'id' => 'tipo_inmueble_id']) !!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <strong>{!! Form::label('tipo_inmueble', ' Especifique: ') !!}</strong>
                    {!! Form::text('bienesinmuebles[tipo_inmueble]',isset($domicilio) ? $domicilio->tipo_inmueble : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. Hacienda',  'id' => 'tipo_inmueble', 'disabled' => 'true' ]) !!}
                </div>
            </div>
            <div class="col-md-4">
                <strong>{!! Form::label('ubicacion_inmueble_id', ' Ubicación del inmueble:') !!}</strong>
                {!! Form::select('bienesinmuebles[ubicacion_inmueble_id]', isset($selectubicacionInmueble) ? $selectubicacionInmueble : [], isset($domicilio) ? $domicilio->ubicacion_inmueble_id : null, ['class'=>'form-control tipo-titular',  'id' => 'ubicacion_inmueble_id']) !!}
            </div>
        </div>
        <div class="domicilio-MXBinmuebles">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <strong>{!! Form::label('calle', 'Calle:') !!}</strong>
                    {!! Form::text('domicilio[calle]',isset($domicilio) ? $domicilio->calle : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. Av. Independencia',  'id' => 'nombre', 'pattern' =>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}", 'title' => "Ingresa la calle" ]) !!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
                <div class="form-group col-md-4">
                    <strong>{!! Form::label('exterior', 'Número exterior:') !!}</strong>
                    {!! Form::number('domicilio[num_ext]',isset($domicilio) ? $domicilio->numext : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p.ej. 102',  'id' => 'exterior', 'pattern' => "[0-9]{1-5}", 'title' => "Ingresa número exterior"]) !!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
                <div class="form-group col-md-4">
                    <strong>{!! Form::label('interior', 'Número interior / Piso: ') !!}</strong>
                    {!! Form::text('domicilio[num_int]',isset($domicilio) ? $domicilio->numint : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. 5',  'id' => 'interior']) !!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <strong>{!! Form::label('colonia', 'Colonia / Localidad:') !!}</strong>
                    {!! Form::text('domicilio[colonia]',isset($domicilio) ? $domicilio->colonia : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. Centro',  'id' => 'colonia']) !!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
                <div class="form-group col-md-4">
                    <strong>{!! Form::label('entidad', 'Municipio / Alcaldía:') !!}</strong>
                    {!! Form::text('domicilio[municipio]',isset($domicilio) ? $domicilio->municipio_provincia : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. Gustavo A. Madero',  'id' => 'municipio']) !!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
                <div class="form-group col-md-4">
                    <strong>{!! Form::label('municipio', 'Entidad Federativa:') !!}</strong>
                    {!! Form::text('domicilio[entidadfederativa]',isset($domicilio) ? $domicilio->entidad_pais : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. CDMX',  'id' => 'entidad_federativa']) !!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <strong>{!! Form::label('colonia', 'Código postal:') !!}</strong>
                    {!! Form::text('domicilio[codigo_postal]',isset($domicilio) ? $domicilio->codigo_postal : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. 50000',  'id' => 'cp', 'pattern' => "[0-9]{5}", 'title' => "Ingresa código postal a 5 dígitos"]) !!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
            </div>
        </div>
        <div class="domicilio-EXBinmuebles">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <strong>{!! Form::label('calle', 'Calle:') !!}</strong>
                    {!! Form::text('domicilio[calleExt]',isset($domicilio) ? $domicilio->calle : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. Av. Independencia',  'id' => 'nombre', 'pattern' =>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}", 'title' => "Ingresa la calle" ]) !!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
                <div class="form-group col-md-4">
                    <strong>{!! Form::label('numextExt', 'Número exterior:') !!}</strong>
                    {!! Form::number('domicilio[numextExt]',isset($domicilio) ? $domicilio->numext : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p.ej. 102',  'id' => 'num_extExt', 'pattern' => "[0-9]{1-5}", 'title' => "Ingresa número exterior"]) !!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
                <div class="form-group col-md-4">
                    <strong>{!! Form::label('numintExt', 'Número interior / Piso: ') !!}</strong>
                    {!! Form::text('domicilio[numintExt]',isset($domicilio) ? $domicilio->numint : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. 5',  'id' => 'numintExt']) !!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <strong>{!! Form::label('coloniaExt', 'Colonia / Localidad:') !!}</strong>
                    {!! Form::text('domicilio[coloniaExt]',isset($domicilio) ? $domicilio->colonia : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. Centro',  'id' => 'colonia_Ext']) !!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
                <div class="form-group col-md-4">
                    <strong>{!! Form::label('estadoprovincia', 'Estado / Provincia:') !!}</strong>
                    {!! Form::text('domicilio[estadoprovincia]',isset($domicilio) ? $domicilio->municipio_provincia : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. México',  'id' => 'estado_provincia']) !!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
                <div class="form-group col-md-4">
                    <strong>{!! Form::label('pais', 'País:') !!}</strong>
                    {!! Form::text('domicilio[pais]',isset($domicilio) ? $domicilio->entidad_pais : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. México',  'id' => 'pais']) !!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <strong>{!! Form::label('codigopostalExt', 'Código postal:') !!}</strong>
                    {!! Form::text('domicilio[codigopostalExt]',isset($domicilio) ? $domicilio->codigo_postal : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. 50000',  'id' => 'codigo_postalExt', 'pattern' => "[0-9]{5}", 'title' => "Ingresa código postal a 5 dígitos"]) !!}
                    <span class="text-danger" style="font-size:150%"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>{!! Form::label('observaciones', ' Aclaraciones/Observaciones: ') !!}</strong>
                {!! Form::textarea('observaciones', isset($domicilio) ? $domicilio->observaciones : null, ['class'=>'form-control alert-danger', 'cols'=>'62', 'rows'=>'5', 'id' => 'observaciones']) !!}
            </div>
        </div>
    </div>
</div>
@section("scripts")
    <script type="text/javascript">
        $(document).ready(function () {
            $(".vehiculo").hide();
            $(".inmueble").hide();
            $(".domicilio-MXBinmuebles").hide();
            $(".domicilio-EXBinmuebles").hide();
            $(".form-control").addClass("alert-danger");
            $("#tipo_bien").change(function () {
                const tipo = parseInt($(this).val());
                if (tipo === 2) {
                    $(".vehiculo").show();
                    $(".inmueble").hide();
                } else {
                    $(".vehiculo").hide();
                    $(".inmueble").show();
                }
            });
        });
    </script>
@endsection

