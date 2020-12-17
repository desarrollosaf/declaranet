<div class="alert alert-danger" role="alert" style="line-height:23px !important;">Todos los datos de bienes declarados a nombre de la pareja, dependientes económicos y/o terceros o que sean en copropiedad con el Declarante no serán públicos.</div>
<h5>BIENES DEL DECLARANTE, PAREJA Y/O DEPENDIENTES ECONÓMICOS</h5>
<hr>
<!-- PRIMER SECCION -->
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('tipo_inmueble_id', ' Tipo de inmueble: *', ['class' => 'labelValidate']) !!}</strong>

                {!! Form::select('bienesinmuebles[tipo_inmueble_id]', isset($selecttipoInmueble) ? $selecttipoInmueble : [], isset($bien) ? $bien->tipo_inmueble_id : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder' => 'Selecciona una opción' ,  'id' => 'tipo_inmueble_id', 'required' => 'true']) !!}
            </div>
        </div>
        <div class="col-md-4" id="combo_otro_Disabled">
            <div class="form-group">
                <strong>{!! Form::label('tipo_inmueble', ' Especifique: ', ['class' => 'labelValidate']) !!}</strong>
                {!! Form::text('bienesinmuebles[tipo_inmueble]',isset($bien) ? $bien->tipo_inmueble : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. Hacienda',  'id' => 'tipo_inmueble', 'disabled' => 'true' ]) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('titular_id', ' Titular del inmueble: *', ['class' => 'labelValidate']) !!}</strong>
                {!! Form::select('bienesinmuebles[titular_id]', isset($selecttitularInmueble) ? $selecttitularInmueble : [], isset($bien) ? $bien -> titular_id : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder' => 'Selecciona una opción' ,  'id' => 'titular_id', 'required' => 'true']) !!}
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
                <strong>{!! Form::label('tipo_tercero_id', ' Tipo de tercero: ', ['class' => 'labelValidate']) !!}</strong>
                {!! Form::select('bienesinmuebles[tipo_tercero_id]', isset($selectRegimenFiscal) ? $selectRegimenFiscal : [], isset($bien) ? $bien->tipo_tercero_id : null, ['class'=>'form-control text-uppercase  tipo-titular', 'placeholder' => 'Selecciona una opción',  'id' => 'tipo_tercero_id']) !!}
            </div>
        </div>
        <div class="col-md-4 tercero_fisica">
            <div class="form-group ">
                <strong>{!! Form::label('nombre_razon_tercero_fisica', ' Nombre del tercero: ') !!}</strong>
                {!! Form::text('bienesinmuebles[nombre_razon_tercero_fisica]', isset($bien) ? $bien->nombre_razon_tercero : null, ['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. Hacienda',  'id' => 'nombre_razon_tercero_fisica']) !!}
            </div>
        </div>

        <div class="col-md-4 tercero_moral">
            <div class="form-group">
                <strong>{!! Form::label('nombre_razon_tercero_moral', ' Razón social: ') !!}</strong>
                {!! Form::text('bienesinmuebles[nombre_razon_tercero_moral]', isset($bien) ? $bien->nombre_razon_tercero : null, ['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. Hacienda',  'id' => 'nombre_razon_tercero_moral']) !!}
            </div>
        </div>

        <div class="col-md-4 tercero_fisica">
            <div class="form-group ">
                <strong>{!! Form::label('rfc_tercero_fisica', ' RFC: ') !!}</strong>
                {!! Form::text('bienesinmuebles[rfc_tercero_fisica]', isset($bien) ? $bien->rfc_tercero : null, ['class'=>'form-control text-uppercase  tipo-titular', 'maxlength'=>'13', 'placeholder'=>'p. ej. XXXx010101X0X',  'id' => 'rfc_tercero_fisica', 'pattern'=>'([A-ZÑ&]{4}\d{6}[A-Z\d]{3})', 'title' => 'El formato RFC es a 13 digitos' ]) !!}
            </div>
        </div>

        <div class="col-md-4 tercero_moral">
            <div class="form-group ">
                <strong>{!! Form::label('rfc_tercero_moral', ' RFC: ') !!}</strong>
                {!! Form::text('bienesinmuebles[rfc_tercero_moral]', isset($bien) ? $bien->rfc_tercero : null, ['class'=>'form-control text-uppercase  tipo-titular', 'maxlength'=>'12', 'placeholder'=>'p. ej. XXX010101X0X',  'id' => 'rfc_tercero_moral', 'pattern'=>'([A-ZÑ&]{3}\d{6}[A-Z\d]{3})', 'title' => 'El formato RFC es a 12 digitos']) !!}
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
                <strong style="line-height: 15px;">{!! Form::label('porcentaje_propiedad', ' Porcentaje de propiedad del Declarante conforme a escrituración o contrato: * ') !!}</strong>
                {!! Form::text('bienesinmuebles[porcentaje_propiedad]', isset($bien) ? $bien->porcentaje_propiedad : null, ['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. 10%',  'id' => 'porcentaje_propiedad', 'required' => 'true']) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('superficieTerreno', ' Superficie del terreno: *') !!}</strong>
                {!! Form::text('bienesinmuebles[superficie_terreno]', isset($bien) ? $bien->superficie_terreno : null, ['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. 30m',  'id' => 'superficie_terreno', 'required' => 'true']) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('superficie_construccion', ' Superficie de construcción: * ') !!}</strong>
                {!! Form::text('bienesinmuebles[superficie_construccion]', isset($bien) ? $bien->superficie_construccion : null, ['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. 30m',  'id' => 'superficie_construccion', 'required' => 'true']) !!}
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <strong>{!! Form::label('forma_adquisicion_id', ' Forma de adquisición: *') !!}</strong>
            {!! Form::select('bienesinmuebles[forma_adquisicion_id]', isset($selectformaAdquisicion) ? $selectformaAdquisicion : [], isset($bien) ? $bien->forma_adquisicion_id : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder' => 'Selecciona una opción', 'id' => 'forma_adquisicion_id', 'required' => 'true']) !!}
        </div>
        <div class="col-md-4">
            <strong>{!! Form::label('forma_pago_id', ' Forma de pago: *') !!}</strong>
            {!! Form::select('bienesinmuebles[forma_pago_id]', isset($selectformaPago) ? $selectformaPago : [], isset($bien) ? $bien->forma_pago_id : null, ['class'=>'form-control text-uppercase  tipo-titular', 'placeholder' => 'Selecciona una opción', 'id' => 'forma_pago_id', 'required' => 'true']) !!}
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
                <strong>{!! Form::label('tipo_transmisor_id', ' Tipo de transmisor de la propiedad: *') !!}</strong>
                {!! Form::select('bienesinmuebles[tipo_transmisor_id]', isset($selectRegimenFiscal) ? $selectRegimenFiscal : [], isset($bien) ? $bien->tipo_transmisor_id : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder' => 'Selecciona una opción', 'id' => 'tipo_transmisor_id', 'required' => 'true']) !!}
            </div>
        </div>
        <div class="col-md-4 fisica">
            <div class="form-group">
                <strong>{!! Form::label('nombreTransmisorF', ' Nombre del transmisor: * ') !!}</strong>
                {!! Form::text('bienesinmuebles[nombreTransmisorF]', isset($bien) ? $bien->nombre_razon_transmisor : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. Juan Robles Rosas',  'id' => 'nombreTransmisorF']) !!}
            </div>
        </div>
        <div class="col-md-4 fisica">
            <div class="form-group">
                <strong>{!! Form::label('rfcTransmisorF', ' RFC del transmisor: * ') !!}</strong>
                {!! Form::text('bienesinmuebles[rfcTransmisorF]', isset($bien) ? $bien->rfc_transmisor : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. XXXX010101XXX', 'maxlength'=>'13', 'id' => 'rfcTransmisorF', 'pattern'=>'([A-ZÑ&]{4}\d{6}[A-Z\d]{3})','title' => 'El formato RFC es a 13 digitos']) !!}
            </div>
        </div>

        <div class="col-md-4 moral">
            <div class="form-group">
                <strong>{!! Form::label('nombreTransmisorM', ' Nombre del transmisor: * ') !!}</strong>
                {!! Form::text('bienesinmuebles[nombreTransmisorM]', isset($bien) ? $bien->nombre_razon_transmisor : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. Empresa S.A. de C.V.',  'id' => 'nombreTransmisorM']) !!}
            </div>
        </div>
        <div class="col-md-4 moral">
            <div class="form-group">
                <strong>{!! Form::label('rfcTransmisorM', ' RFC del transmisor: *') !!}</strong>
                {!! Form::text('bienesinmuebles[rfcTransmisorM]', isset($bien) ? $bien->rfc_transmisor : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. XXXX010101XX', 'maxlength'=>'12', 'id' => 'rfcTransmisorM', 'pattern'=>'([A-ZÑ&]{3}\d{6}[A-Z\d]{3})','title' => 'El formato RFC es a 12 digitos']) !!}
            </div>
        </div>

    </div>
</div>

<hr>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <strong style="line-height: 15px;">{!! Form::label('relacion_transmisor_id', ' Relación del transmisor de la propiedad con el titular: *') !!}</strong>
                {!! Form::select('bienesinmuebles[relacion_transmisor_id]', isset($selectRelacionTransmisor) ? $selectRelacionTransmisor : [], isset($bien) ? $bien->relacion_transmisor_id : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder' => 'Selecciona una opción', 'id' => 'relacion_transmisor_id', 'required' => 'true', 'required' => 'true']) !!}

            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('valor_adquisicion', ' Valor de adquisición: * ') !!}</strong>
                {!! Form::text('bienesinmuebles[valor_adquisicion]', isset($bien) ? $bien->valor_adquisicion : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. 100000.0 Mxn', 'id' => 'valor_adquisicion', 'required' => 'true']) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('valor_conforme_id', ' El valor es conforme a: *') !!}</strong>
                {!! Form::select('bienesinmuebles[valor_conforme_id]', isset($selectvalorConforme) ? $selectvalorConforme : [], isset($bien) ? $bien->valor_conforme_id : null, ['class'=>'form-control text-uppercase  tipo-titular', 'placeholder' => 'Selecciona una opción', 'id' => 'valor_conforme_id', 'required' => 'true']) !!}
            </div>
        </div>

    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('tipo_moneda', ' Tipo de moneda: *') !!}</strong>
                {!! Form::text('bienesinmuebles[tipo_moneda]', isset($bien) ? $bien->tipo_moneda : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. Peso mexicano', 'id' => 'tipo_moneda', 'required' => 'true']) !!}
            </div>
        </div>

        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('fecha_adquisicion', ' Fecha de adquisición del inmueble: *') !!}</strong>
                {!! Form::date('bienesinmuebles[fecha_adquisicion]', isset($bien) ? $bien->fecha_adquisicion : null,['class'=>'form-control text-uppercase  tipo-titular', 'id' => 'fecha_adquisicion', 'required' => 'true']) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <strong style="line-height: 15px;">{!! Form::label('datos_registro', ' Datos del registro público de la propiedad, folio real u otro dato que permita su identificación: *') !!}</strong>
                {!! Form::text('bienesinmuebles[datos_registro]', isset($bien) ? $bien->datos_registro : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. 10101010', 'id' => 'datos_registro', 'required' => 'true']) !!}
            </div>
        </div>

    </div>
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <strong>{!! Form::label('ubicacion_inmueble_id', ' Ubicación del inmueble: *') !!}</strong>
            {!! Form::select('bienesinmuebles[ubicacion_inmueble_id]', isset($selectubicacionInmueble) ? $selectubicacionInmueble : [], isset($bien) ? $bien->ubicacion_inmueble_id : null, ['class'=>'form-control text-uppercase  tipo-titular',  'placeholder' => 'Selecciona una opción', 'id' => 'ubicacion_inmueble_id', 'required' => 'true']) !!}
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
            <strong>{!! Form::label('calle', 'Calle: *') !!}</strong>
            {!! Form::text('domicilio[calle]',isset($domicilio) ? $domicilio->calle : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. Av. Independencia',  'id' => 'calle', 'pattern' =>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}", 'title' => "Ingresa la calle" ]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('num_ext', 'Número exterior: *') !!}</strong>
            {!! Form::number('domicilio[num_ext]',isset($domicilio) ? $domicilio->num_ext : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p.ej. 102',  'id' => 'num_ext', 'pattern' => "[0-9]{1-5}", 'title' => "Ingresa número exterior"]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('num_int', 'Número interior / Piso: *') !!}</strong>
            {!! Form::text('domicilio[num_int]',isset($domicilio) ? $domicilio->num_int : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. 5',  'id' => 'interior']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('colonia', 'Colonia / Localidad: *') !!}</strong>
            {!! Form::text('domicilio[colonia]',isset($domicilio) ? $domicilio->colonia : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. Centro',  'id' => 'colonia']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('municipio', 'Municipio / Alcaldía: *') !!}</strong>
            {!! Form::text('domicilio[municipio]',isset($domicilio) ? $domicilio->municipio : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. Gustavo A. Madero',  'id' => 'municipio']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('entidad', 'Entidad Federativa: *') !!}</strong>
            {!! Form::text('domicilio[entidad]',isset($domicilio) ? $domicilio->entidad : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. CDMX',  'id' => 'entidad']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('codigo_postal', 'Código postal: *') !!}</strong>
            {!! Form::text('domicilio[codigo_postal]',isset($domicilio) ? $domicilio->codigo_postal : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. 50000',  'id' => 'codigo_postal', 'pattern' => "[0-9]{5}", 'title' => "Ingresa código postal a 5 dígitos"]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
</div>

<div class="container domicilio-EXBinmuebles">
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('calleExt', 'Calle: *') !!}</strong>
            {!! Form::text('domicilio[calleExt]',isset($domicilio) ? $domicilio->calle : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. Av. Independencia',  'id' => 'calleExt', 'title' => "Ingresa la calle" ]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('num_extExt', 'Número exterior: *') !!}</strong>
            {!! Form::number('domicilio[num_extExt]',isset($domicilio) ? $domicilio->num_ext : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p.ej. 102',  'id' => 'num_extExt', 'pattern' => "[0-9]{1-5}", 'title' => "Ingresa número exterior"]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('numintExt', 'Número interior / Piso: *') !!}</strong>
            {!! Form::text('domicilio[numintExt]',isset($domicilio) ? $domicilio->num_int : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. 5',  'id' => 'numintExt']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('colonia_Ext', 'Colonia / Localidad: *') !!}</strong>
            {!! Form::text('domicilio[colonia_Ext]',isset($domicilio) ? $domicilio->colonia : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. Centro',  'id' => 'colonia_Ext']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('entidadExt', 'Estado / Provincia: *') !!}</strong>
            {!! Form::text('domicilio[entidadExt]',isset($domicilio) ? $domicilio->entidad : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. México',  'id' => 'entidadExt']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('pais', 'País: *') !!}</strong>
            {!! Form::text('domicilio[pais]',isset($domicilio) ? $domicilio->pais : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. México',  'id' => 'pais']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('codigo_postalExt', 'Código postal: *') !!}</strong>
            {!! Form::text('domicilio[codigo_postalExt]',isset($domicilio) ? $domicilio->codigo_postal : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. 50000',  'id' => 'codigo_postalExt', 'pattern' => "[0-9]{5}", 'title' => "Ingresa código postal a 5 dígitos"]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
</div>



<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>{!! Form::label('observaciones', ' Aclaraciones/Observaciones: ') !!}</strong>
                {!! Form::textarea('bienesinmuebles[observaciones]', isset($bien) ? $bien->observaciones : null, ['class'=>'form-control text-uppercase  tipo-titular', 'cols'=>'62', 'rows'=>'5', 'id' => 'observaciones']) !!}
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


        //DOMICILIO DECLARANTE
        $(".domicilio-MXBinmuebles").hide();
        $(".domicilio-EXBinmuebles").hide();



        //HABILITAR CAJA DE TEXTO OTROS
        $('#tipo_inmueble_id').change(function () {
            if (parseInt($(this).val()) === 9) {
                $('#tipo_inmueble').prop('disabled', false);
                $('#tipo_inmueble').prop('required', true);
            } else {
                $('#tipo_inmueble').prop('disabled', true);
                $('#tipo_inmueble').prop('required', false);
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
                $('#tipo_tercero_id').prop('required', false);
            } else if (value === 3 || value === 4 || value === 8 || value === 10 || value === 13 || value === 15 || value === 18 || value === 19 || value === 24) {
                $(".terceros").show();
                $('#tipo_tercero_id').prop('required', true);
            } else {
                $(".terceros").hide();
                $('#tipo_tercero_id').prop('required', false);
            }
        });

        //TIPO TERCERO
        $('#tipo_tercero_id').change(function () {
            console.log($(this).val());
            if ($(this).val() === "") {
                $('.tercero_fisica').hide();
                $('.tercero_moral').hide();

                $('#nombre_razon_tercero_fisica').prop('required', false);
                $('#rfc_tercero_fisica').prop('required', false);

                $('#nombre_razon_tercero_moral').prop('required', false);
                $('#rfc_tercero_moral').prop('required', false);


            } else if (parseInt($(this).val()) === 1) {
                $('.tercero_fisica').show();
                $('.tercero_moral').hide();

                $('#nombre_razon_tercero_fisica').prop('required', true);
                $('#rfc_tercero_fisica').prop('required', true);

                $('#nombre_razon_tercero_moral').prop('required', false);
                $('#rfc_tercero_moral').prop('required', false);


            } else {
                $('.tercero_fisica').hide();
                $('.tercero_moral').show();

                $('#nombre_razon_tercero_fisica').prop('required', false);
                $('#rfc_tercero_fisica').prop('required', false);

                $('#nombre_razon_tercero_moral').prop('required', true);
                $('#rfc_tercero_moral').prop('required', true);

            }
        });

        //TIPO TRANSMISOR
        $('#tipo_transmisor_id').change(function () {

            
            if ($(this).val() === '') {
                $('.fisica').hide();
                $('.moral').hide();

//                $('#nombreTransmisorF').prop('required', false);
//                $('#rfcTransmisorF').prop('required', false);
                $('#nombreTransmisorF').removeAttr('required');
                $('#rfcTransmisorF').removeAttr('required');
                $('#nombreTransmisorF').removeAttr('pattern');
                $('#rfcTransmisorF').removeAttr('pattern');
                
                $('#nombreTransmisorM').removeAttr('required');
                $('#rfcTransmisorM').removeAttr('required');
                $('#nombreTransmisorM').removeAttr('pattern');
                $('#rfcTransmisorM').removeAttr('pattern');



            } else if (parseInt($(this).val()) === 1) {
                console.log($(this).val());
                $('.fisica').show();
                $('.moral').hide();

                $('#nombreTransmisorF').prop('required', true);
                $('#rfcTransmisorF').prop('required', true);

                $('#nombreTransmisorM').removeAttr('required');
                $('#rfcTransmisorM').removeAttr('required');
                $('#nombreTransmisorM').removeAttr('pattern');
                $('#rfcTransmisorM').removeAttr('pattern');

            } else if (parseInt($(this).val()) === 2) {
                $('.fisica').hide();
                $('.moral').show();
                
                $('#nombreTransmisorF').removeAttr('required');
                $('#rfcTransmisorF').removeAttr('required');
                $('#nombreTransmisorF').removeAttr('pattern');
                $('#rfcTransmisorF').removeAttr('pattern');
                

                $('#nombreTransmisorM').prop('required', true);
                $('#rfcTransmisorM').prop('required', true);

            }
        });

        //UBICACIÓN DEL INMUEBLE
        $('#ubicacion_inmueble_id').change(function () {
            if (parseInt($(this).val()) === 1) {
                $('.domicilio-MXBinmuebles').show();
                $('.domicilio-EXBinmuebles').hide();

                $('#calle').prop('required', true);
                $('#exterior').prop('required', true);
//                $('#interior').prop('required', true);
                $('#colonia').prop('required', true);
                $('#municipio').prop('required', true);
                $('#entidad').prop('required', true);
                $('#codigo_postal').prop('required', true);

                $('#calleExt').prop('required', false);
                $('#num_extExt').prop('required', false);
//                $('#numintExt').prop('required', false);
                $('#colonia_Ext').prop('required', false);
                $('#colonia_Ext').prop('required', false);
                $('#pais').prop('required', false);
                $('#codigo_postalExt').prop('required', false);

            } else if (parseInt($(this).val()) === 2) {
                $('.domicilio-MXBinmuebles').hide();
                $('.domicilio-EXBinmuebles').show();

                $('#calle').prop('required', false);
                $('#exterior').prop('required', false);
//                $('#interior').prop('required', false);
                $('#colonia').prop('required', false);
                $('#municipio').prop('required', false);
                $('#entidad').prop('required', false);
                $('#codigo_postal').prop('required', false);

                $('#calleExt').prop('required', true);
                $('#num_extExt').prop('required', true);
//                $('#numintExt').prop('required', true);
                $('#colonia_Ext').prop('required', true);
                $('#colonia_Ext').prop('required', true);
                $('#pais').prop('required', true);
                $('#codigo_postalExt').prop('required', true);


            } else {
                $('.domicilio-MXBinmuebles').hide();
                $('.domicilio-EXBinmuebles').hide();

                $('#calle').prop('required', false);
                $('#exterior').prop('required', false);
//                $('#interior').prop('required', false);
                $('#colonia').prop('required', false);
                $('#municipio').prop('required', false);
                $('#entidad').prop('required', false);
                $('#codigo_postal').prop('required', false);

                $('#calleExt').prop('required', false);
                $('#num_extExt').prop('required', false);
//                $('#numintExt').prop('required', false);
                $('#colonia_Ext').prop('required', false);
                $('#colonia_Ext').prop('required', false);
                $('#pais').prop('required', false);
                $('#codigo_postalExt').prop('required', false);

            }
        });


        @if(isset($bien))
            $('#tipo_inmueble_id').change();
            $("#titular_id").change();
            $('#tipo_tercero_id').change();
            $('#tipo_transmisor_id').change();
            $('#ubicacion_inmueble_id').change();
        
        @endif
    });
//    $("#frm_BienesInmuebles").on("submit", function (e) {
//        e.preventDefault();
//        if (!validarFormulario()) {
//            //$("#frm_BienesInmuebles").submit();
//        } else {
//            Swal.fire({
//                title: 'Error',
//                text: 'llena todos los campos obligatorios',
//                icon: 'error'
//            });
//        }
//    });

//    function validarFormulario() {
//        var error = false;
//        $(".labelValidate").css("color", "");
//        if ($("#tipo_inmueble_id").val() == "") {
//            error = true;
//            $("#tipo_inmueble_id").prev().children().css("color", "red");
//        } else {
//            if ($("#tipo_inmueble_id").val() == 9 && $("#tipo_inmueble").val() == "") {
//                error = true;
//                $("#tipo_inmueble").prev().children().css("color", "red");
//            }
//        }
//
//
//        if ($("#titular_id").val() == "") {
//            error = true;
//            $("#titular_id").prev().children().css("color", "red");
//        } else {
//            var value = parseInt($("#titular_id").val());
//            if ((value === 3 || value === 4 || value === 8 || value === 10 || value === 13 || value === 15 || value === 18 || value === 19 || value === 24) && $("#tipo_tercero_id").val() == "") {
//                error = true;
//                $("#tipo_tercero_id").prev().children().css("color", "red");
//            }
//        }
//
//
////tipo_tercero_id
//
//
//        return error;
//    }

</script>
@endsection
