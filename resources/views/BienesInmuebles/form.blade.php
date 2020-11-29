<div class="alert alert-danger" role="alert" style="line-height:23px !important;">Todos los datos de bienes declarados a nombre de la pareja, dependientes económicos y/o terceros o que sean en copropiedad con el Declarante no serán públicos.</div>
<h5>BIENES DEL DECLARANTE, PAREJA Y/O DEPENDIENTES ECONÓMICOS</h5>
<hr>
<!-- PRIMER SECCION -->
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('tipo_inmueble_id', ' Tipo de inmueble:') !!}</strong>
                {!! Form::select('bienesinmuebles[tipo_inmueble_id]', isset($selecttipoInmueble) ? $selecttipoInmueble : [], isset($domicilio) ? $domicilio->tipo_inmueble_id : null,['class'=>'form-control tipo-titular',  'id' => 'tipo_inmueble_id']) !!} 
            </div>
        </div>
        <div class="col-md-4" id="combo_otro_Disabled">
            <div class="form-group">
                <strong>{!! Form::label('tipo_inmueble', ' Especifique: ') !!}</strong>
                {!! Form::text('bienesinmuebles[tipo_inmueble]',isset($domicilio) ? $domicilio->tipo_inmueble : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. Hacienda',  'id' => 'tipo_inmueble', 'disabled' => 'true' ]) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('titular_id', ' Titular del inmueble:') !!}</strong>
                {!! Form::select('bienesinmuebles[titular_id]', isset($selecttitularInmueble) ? $selecttitularInmueble : [], isset($domicilio) ? $domicilio->titular_id : null,['class'=>'form-control tipo-titular',  'id' => 'titular_id']) !!}            
            </div>
        </div>
    </div>
</div>

<!-- APARECE SI SE SELCCIONA TERCERO -->
<div class="container terceros">
    <hr>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('tipo_tercero_id', ' Tipo de tercero: ') !!}</strong>
                {!! Form::select('bienesinmuebles[tipo_tercero_id]', isset($selectRegimenFiscal) ? $selectRegimenFiscal : [], isset($domicilio) ? $domicilio->tipo_tercero_id : null, ['class'=>'form-control tipo-titular',  'id' => 'tipo_tercero_id']) !!}
            </div>
        </div>
        <div class="col-md-4 tercero_fisica">
            <div class="form-group ">
                <strong>{!! Form::label('nombre_razon_tercero_fisica', ' Nombre del tercero: ') !!}</strong>
                {!! Form::text('bienesinmuebles[nombre_razon_tercero_fisica]', isset($domicilio) ? $domicilio->nombre_razon_tercero : null, ['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. Hacienda',  'id' => 'nombre_razon_tercero_fisica']) !!}
            </div>
        </div>

        <div class="col-md-4 tercero_moral">
            <div class="form-group">
                <strong>{!! Form::label('nombre_razon_tercero_moral', ' Razón social: ') !!}</strong>
                {!! Form::text('bienesinmuebles[nombre_razon_tercero_moral]', isset($domicilio) ? $domicilio->nombre_razon_tercero : null, ['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. Hacienda',  'id' => 'nombre_razon_tercero_moral']) !!}
            </div>
        </div>

        <div class="col-md-4 tercero_fisica">
            <div class="form-group ">
                <strong>{!! Form::label('rfc_tercero_fisica', ' RFC: ') !!}</strong>
                {!! Form::text('bienesinmuebles[rfc_tercero_fisica]', isset($domicilio) ? $domicilio->rfc_tercero : null, ['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. Hacienda',  'id' => 'rfc_tercero_fisica']) !!}
            </div>
        </div>

        <div class="col-md-4 tercero_moral">
            <div class="form-group ">
                <strong>{!! Form::label('rfc_tercero_moral', ' RFC: ') !!}</strong>
                {!! Form::text('bienesinmuebles[rfc_tercero_moral]', isset($domicilio) ? $domicilio->rfc_tercero : null, ['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. Hacienda',  'id' => 'rfc_tercero_moral']) !!}
            </div>
        </div>

    </div>
</div>

<hr>
<!-- 2DA SECCION -->
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">                
                <strong>{!! Form::label('porcentaje_propiedad', ' Porcentaje de propiedad del Declarante conforme a escrituración o contrato: ') !!}</strong>
                {!! Form::text('bienesinmuebles[porcentaje_propiedad]', isset($domicilio) ? $domicilio->porcentaje_propiedad : null, ['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. 10%',  'id' => 'porcentaje_propiedad']) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">                
                <strong>{!! Form::label('superficieTerreno', ' Superficie del terreno: ') !!}</strong>
                {!! Form::text('bienesinmuebles[superficie_terreno]', isset($domicilio) ? $domicilio->superficie_terreno : null, ['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. 30m',  'id' => 'superficie_terreno']) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('superficie_construccion', ' Superficie de construcción: ') !!}</strong>
                {!! Form::text('bienesinmuebles[superficie_construccion]', isset($domicilio) ? $domicilio->superficie_construccion : null, ['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. 30m',  'id' => 'superficie_construccion']) !!}
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <strong>{!! Form::label('forma_adquisicion_id', ' Forma de adquisición:') !!}</strong>
            {!! Form::select('bienesinmuebles[forma_adquisicion_id]', isset($selectformaAdquisicion) ? $selectformaAdquisicion : [], isset($domicilio) ? $domicilio->forma_adquisicion_id : null,['class'=>'form-control tipo-titular',  'id' => 'forma_adquisicion_id']) !!}            
        </div>
        <div class="col-md-4">
            <strong>{!! Form::label('forma_pago_id', ' Forma de pago:') !!}</strong>
            {!! Form::select('bienesinmuebles[forma_pago_id]', isset($selectformaPago) ? $selectformaPago : [], isset($domicilio) ? $domicilio->forma_pago_id : null, ['class'=>'form-control tipo-titular',  'id' => 'forma_pago_id']) !!}
        </div>
        <div class="col-md-4">
            <div class="form-group">
            </div>
        </div>
    </div>
</div>
<hr>
<!-- 3ER SECCION -->
<!-- seccion tipo transmisor -->
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('tipo_transmisor_id', ' Tipo de transmisor de la propiedad:') !!}</strong>
                {!! Form::select('bienesinmuebles[tipo_transmisor_id]', isset($selectRegimenFiscal) ? $selectRegimenFiscal : [], isset($domicilio) ? $domicilio->tipo_transmisor_id : null,['class'=>'form-control tipo-titular',  'id' => 'tipo_transmisor_id']) !!}
            </div>
        </div>
        <div class="col-md-4 nombre-Ftransmisor">
            <div class="form-group">
                <strong>{!! Form::label('nombreTransmisorF', ' Nombre del transmisor: ') !!}</strong>
                {!! Form::text('bienesinmuebles[nombreTransmisorF]', isset($domicilio) ? $domicilio->nombre_razon_transmisor : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. Juan Robles Rosas',  'id' => 'nombre_TransmisorF']) !!}
            </div>
        </div>
        <div class="col-md-4 rfc-Ftransmisor">
            <div class="form-group">
                <strong>{!! Form::label('rfcTransmisorF', ' RFC del transmisor: ') !!}</strong>
                {!! Form::text('bienesinmuebles[rfcTransmisorF]', isset($domicilio) ? $domicilio->rfc_transmisor : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. XXXX010101XXX', 'pattern'=>'([A-Z]{4}[0-9]{6}[A-Z0-9]{3})', 'maxlength'=>'13', 'id' => 'rfc_TransmisorF']) !!}

            </div>
        </div>

        <div class="col-md-4 nombre-Mtransmisor">
            <div class="form-group">                    
                <strong>{!! Form::label('nombreTransmisorM', ' Nombre del transmisor: ') !!}</strong>
                {!! Form::text('bienesinmuebles[nombreTransmisorM]', isset($domicilio) ? $domicilio->nombre_razon_transmisor : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. Empresa S.A. de C.V.',  'id' => 'nombre_TransmisorM']) !!}                    
            </div>
        </div>
        <div class="col-md-4 rfc-Mtransmisor">
            <div class="form-group">
                <strong>{!! Form::label('rfcTransmisorM', ' RFC del transmisor: ') !!}</strong>
                {!! Form::text('bienesinmuebles[rfcTransmisorM]', isset($domicilio) ? $domicilio->rfc_transmisor : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. XXXX010101XX', 'maxlength'=>'12', 'pattern'=>'([A-Z]{3}[0-9]{9})', 'id' => 'rfc_TransmisorM']) !!}
            </div>
        </div>

    </div>
</div>

<hr>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('relacion_transmisor_id', ' Relación del transmisor de la propiedad con el titular:') !!}</strong>
                {!! Form::select('bienesinmuebles[relacion_transmisor_id]', isset($selectRelacionTransmisor) ? $selectRelacionTransmisor : [], isset($domicilio) ? $domicilio->relacion_transmisor_id : null,['class'=>'form-control tipo-titular',  'id' => 'relacion_transmisor_id']) !!}

            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('valor_adquisicion', ' Valor de adquisición: ') !!}</strong>
                {!! Form::text('bienesinmuebles[valor_adquisicion]', isset($domicilio) ? $domicilio->valor_adquisicion : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. 100000.0 Mxn', 'id' => 'valor_adquisicion']) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('valor_conforme_id', ' El valor es conforme a:') !!}</strong>
                {!! Form::select('bienesinmuebles[valor_conforme_id]', isset($selectvalorConforme) ? $selectvalorConforme : [], isset($domicilio) ? $domicilio->valor_conforme_id : null, ['class'=>'form-control tipo-titular',  'id' => 'valor_conforme_id']) !!}
            </div>
        </div>

    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('tipo_moneda', ' Tipo de moneda: ') !!}</strong>
                {!! Form::text('bienesinmuebles[tipo_moneda]', isset($domicilio) ? $domicilio->tipo_moneda : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. Peso mexicano', 'id' => 'tipo_moneda']) !!}
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('fecha_adquisicion', ' Fecha de adquisición del inmueble: ') !!}</strong>
                {!! Form::date('bienesinmuebles[fecha_adquisicion]', isset($domicilio) ? $domicilio->fecha_adquisicion : null,['class'=>'form-control tipo-titular', 'id' => 'fecha_adquisicion']) !!}                
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('datos_registro', ' Datos del registro público de la propiedad, folio real u otro dato que permita su identificación: ') !!}</strong>
                {!! Form::text('bienesinmuebles[datos_registro]', isset($domicilio) ? $domicilio->datos_registro : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. 10101010', 'id' => 'datos_registro']) !!}                
            </div>
        </div>

    </div>
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <strong>{!! Form::label('ubicacion_inmueble_id', ' Ubicación del inmueble:') !!}</strong>
            {!! Form::select('bienesinmuebles[ubicacion_inmueble_id]', isset($selectubicacionInmueble) ? $selectubicacionInmueble : [], isset($domicilio) ? $domicilio->ubicacion_inmueble_id : null, ['class'=>'form-control tipo-titular',  'id' => 'ubicacion_inmueble_id']) !!}
        </div>
        <div class="col-md-8">
            <div class="form-group">
            </div>
        </div>
    </div>
</div>
<br>
<div class="container domicilio-MXBinmuebles">
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

<div class="container domicilio-EXBinmuebles">
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


<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>{!! Form::label('observaciones', ' Aclaraciones/Observaciones: ') !!}</strong>
                {!! Form::textarea('observaciones', isset($domicilio) ? $domicilio->observaciones : null, ['class'=>'form-control tipo-titular', 'cols'=>'62', 'rows'=>'5', 'id' => 'observaciones']) !!}                
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
    $(document).ready(function () {
        //TIPO TERCERO
        $(".tipo-tercero").hide();
        $(".especifique").hide();
        $(".terceros").hide();
        $(".rs-tercero").hide();

        //Tipo TERCERO
        $('.tercero_fisica').hide();
        $('.tercero_moral').hide();

        //TIPO TRANSMISOR
        $(".rs-nombre-RazonSocial").hide();
        $(".rfcM-tercero").hide();
        $(".nombre-Mtransmisor").hide();
        $(".rfc-Mtransmisor").hide();

        //TIPO TERCERO
        $('.nombre-tercero').hide();
        $('.rfcF-tercero').hide();
        $('.rs-nombre-RazonSocial').hide();
        $('.rfcM-tercero').hide();

        //TIPO TRANSMISOR
        $('.nombre-Ftransmisor').hide();
        $('.rfc-Ftransmisor').hide();
        $('.nombre-Mtransmisor').hide();
        $('.rfc-Mtransmisor').hide();

        //DOMICILIO DECLARANTE
        $(".domicilio-MXBinmuebles").hide();
        $(".domicilio-EXBinmuebles").hide();



        //HABILITAR CAJA DE TEXTO OTROS
        $('#tipo_inmueble_id').change(function () {
            if (parseInt($(this).val()) === 9) {
                $('#tipo_inmueble').prop('disabled', false);
            } else {
                $('#tipo_inmueble').prop('disabled', true);
            }
        });

        //CAMBIO DE COLOR TERCEROS
        $("#titular_id").change(function () {
            var tipoTitular = $(this).val();
            if (tipoTitular === "0") {
                $(".tipo-titular").removeClass("alert-danger");
            } else if (tipoTitular !== "1") {
                $(".tipo-titular").addClass("alert-danger");

            } else {
                $(".tipo-titular").removeClass("alert-danger");
            }
        });

        //AGRGAR CAMPOS DATOS TERCEROS
        $('#titular_id').change(function () {
            var value = parseInt($(this).val());
            if (value === 0) {
                $(".terceros").hide();
            } else if (value === 3 || value === 4 || value === 8 || value === 10 || value === 13 || value === 15 || value === 18 || value === 19 || value === 24) {
                $(".terceros").show();
            } else {
                $(".terceros").hide();
            }
        });

        //TIPO TERCERO
        $('#tipo_tercero_id').change(function () {
            console.log($(this).val());
            if (parseInt($(this).val()) === 0) {
                $('.tercero_fisica').hide();
                $('.tercero_moral').hide();

            } else if (parseInt($(this).val()) === 1) {
                $('.tercero_fisica').show();
                $('.tercero_moral').hide();

            } else {
                $('.tercero_fisica').hide();
                $('.tercero_moral').show();
            }
        });

        //TIPO TRANSMISOR
        $('#tipo_transmisor_id').change(function () {
            if (parseInt($(this).val()) === 0) {
                $('.nombre-Ftransmisor').hide();
                $('.rfc-Ftransmisor').hide();

                $('.nombre-Mtransmisor').hide();
                $('.rfc-Mtransmisor').hide();
            } else if (parseInt($(this).val()) === 1) {
                $('.nombre-Ftransmisor').show();
                $('.rfc-Ftransmisor').show();

                $('.nombre-Mtransmisor').hide();
                $('.rfc-Mtransmisor').hide();
            } else {
                $('.nombre-Ftransmisor').hide();
                $('.rfc-Ftransmisor').hide();

                $('.nombre-Mtransmisor').show();
                $('.rfc-Mtransmisor').show();
            }
        });

        //UBICACIÓN DEL INMUEBLE
        $('#ubicacion_inmueble_id').change(function () {
            if (parseInt($(this).val()) === 1) {
                $('.domicilio-MXBinmuebles').show();
                $('.domicilio-EXBinmuebles').hide();
            } else if (parseInt($(this).val()) === 2) {
                $('.domicilio-MXBinmuebles').hide();
                $('.domicilio-EXBinmuebles').show();
            } else {
                $('.domicilio-MXBinmuebles').hide();
                $('.domicilio-EXBinmuebles').hide();
            }
        });

    });
</script>
@endsection
