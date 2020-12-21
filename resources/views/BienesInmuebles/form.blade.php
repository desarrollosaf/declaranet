<div class="alert alert-danger" role="alert" style="line-height:23px !important;">Todos los datos de bienes declarados a nombre de la pareja, dependientes económicos y/o terceros o que sean en copropiedad con el Declarante no serán públicos.</div>
<h5>BIENES DEL DECLARANTE, PAREJA Y/O DEPENDIENTES ECONÓMICOS</h5>
<hr>
<!-- PRIMER SECCION -->
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('tipo_inmueble_id', ' Tipo de inmueble: *') !!}</strong>
                {!! Form::select('bienesinmuebles[tipo_inmueble_id]', isset($selecttipoInmueble) ? $selecttipoInmueble : [], isset($bien) ? $bien->tipo_inmueble_id : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder' => 'Selecciona una opción' ,  'id' => 'tipo_inmueble_id', 'required' => 'true']) !!}
            </div>
        </div>
        <div class="col-md-4" id="combo_otro_Disabled">
            <div class="form-group">
                <strong>{!! Form::label('tipo_inmueble', ' Especifique: ') !!}</strong>
                {!! Form::text('bienesinmuebles[tipo_inmueble]',isset($bien) ? $bien->tipo_inmueble : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. Hacienda',  'id' => 'tipo_inmueble', 'pattern' => '[A-Za-z]{0,300}', 'disabled' => 'true' ]) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('titular_id', ' Titular del inmueble: *') !!}</strong>
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
                <strong>{!! Form::label('tipo_tercero_id', ' Tipo de tercero: ') !!}</strong>
                {!! Form::select('bienesinmuebles[tipo_tercero_id]', isset($selectRegimenFiscal) ? $selectRegimenFiscal : [], isset($bien) ? $bien->tipo_tercero_id : null, ['class'=>'form-control text-uppercase  tipo-titular', 'placeholder' => 'Selecciona una opción',  'id' => 'tipo_tercero_id']) !!}
            </div>
        </div>
        <div class="col-md-4 tercero_fisica">
            <div class="form-group ">
                <strong>{!! Form::label('nombre_razon_tercero_fisica', ' Nombre del tercero: ') !!}</strong>
                {!! Form::text('bienesinmuebles[nombre_razon_tercero_fisica]', isset($bien) ? $bien->nombre_razon_tercero : null, ['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. Juan Perez',  'id' => 'nombre_razon_tercero_fisica']) !!}
            </div>
        </div>

        <div class="col-md-4 tercero_moral">
            <div class="form-group">
                <strong>{!! Form::label('nombre_razon_tercero_moral', ' Razón social: ') !!}</strong>
                {!! Form::text('bienesinmuebles[nombre_razon_tercero_moral]', isset($bien) ? $bien->nombre_razon_tercero : null, ['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. Empresa S.A. de C.V.',  'id' => 'nombre_razon_tercero_moral']) !!}
            </div>
        </div>

        <div class="col-md-4 tercero_fisica">
            <div class="form-group ">
                <!--YJZ-->
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
                {!! Form::number('bienesinmuebles[porcentaje_propiedad]', isset($bien) ? $bien->porcentaje_propiedad : null, ['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. 10%',  'id' => 'porcentaje_propiedad', 'maxlength'=>'3', 'min'=>'1', 'max'=>'100', 'pattern' => '[0-9]{0,3}', 'required' => 'true']) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('superficieTerreno', ' Superficie del terreno: *') !!}</strong>
                {!! Form::number('bienesinmuebles[superficie_terreno]', isset($bien) ? $bien->superficie_terreno : null, ['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. 30m', 'min'=>'1', 'id' => 'superficie_terreno', 'pattern' => '[0-9]{0,50}', 'required' => 'true']) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('superficie_construccion', ' Superficie de construcción: * ') !!}</strong>
                {!! Form::number('bienesinmuebles[superficie_construccion]', isset($bien) ? $bien->superficie_construccion : null, ['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. 30m', 'min'=>'1', 'id' => 'superficie_construccion', 'pattern' => '[0-9]{0,50}', 'required' => 'true']) !!}
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
        <!--yjz-->
        <div class="col-md-4" id="combo_otro_Disabled">
            <div class="form-group">
                <strong>{!! Form::label('relacion_transmisor', ' Especifique: ') !!}</strong>
                {!! Form::text('bienesinmuebles[relacion_transmisor]',isset($bien) ? $bien->relacion_transmisor : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'Relación transmisor',  'id' => 'relacion_transmisor', 'pattern' => '[A-Za-z]{0,300}', 'disabled' => 'true' ]) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('valor_adquisicion', ' Valor de adquisición: * ') !!}</strong>
                {!! Form::number('bienesinmuebles[valor_adquisicion]', isset($bien) ? $bien->valor_adquisicion : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. 100000.0 Mxn','min'=>'1', 'id' => 'valor_adquisicion','pattern' => '[0-9]{0,50}', 'required' => 'true']) !!}
            </div>
        </div>

    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('valor_conforme_id', ' El valor es conforme a: *') !!}</strong>
                {!! Form::select('bienesinmuebles[valor_conforme_id]', isset($selectvalorConforme) ? $selectvalorConforme : [], isset($bien) ? $bien->valor_conforme_id : null, ['class'=>'form-control text-uppercase  tipo-titular', 'placeholder' => 'Selecciona una opción', 'id' => 'valor_conforme_id', 'required' => 'true']) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('tipo_moneda_id', ' Tipo de moneda: *') !!}</strong>
                {!! Form::select('bienesinmuebles[tipo_moneda_id]', isset($selectMoneda) ? $selectMoneda : [], isset($bien) ? $bien->tipo_moneda_id : null, ['class'=>'form-control text-uppercase  tipo-titular', 'placeholder' => 'Selecciona una opción', 'id' => 'tipo_moneda_id', 'required' => 'true']) !!}
                <!--{!! Form::text('bienesinmuebles[tipo_moneda]', isset($bien) ? $bien->tipo_moneda : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. Peso mexicano', 'id' => 'tipo_moneda', 'required' => 'true']) !!}-->
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('fecha_adquisicion', ' Fecha de adquisición del inmueble: *') !!}</strong>
                {!! Form::date('bienesinmuebles[fecha_adquisicion]', isset($bien) ? $bien->fecha_adquisicion : null,['class'=>'form-control text-uppercase  tipo-titular', 'id' => 'fecha_adquisicion', 'required' => 'true', 'max'=>date("Y-m-d")]) !!}
            </div>
        </div>

    </div>
</div>

<div class="container">
    <div class="row">
         <div class="col-md-4">
            <div class="form-group">
                <strong style="line-height: 15px;">{!! Form::label('datos_registro', ' Datos del registro público de la propiedad, folio real u otro dato que permita su identificación: *') !!}</strong>
                {!! Form::text('bienesinmuebles[datos_registro]', isset($bien) ? $bien->datos_registro : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. 10101010', 'id' => 'datos_registro', 'required' => 'true']) !!}
            </div>
        </div>
        <div class="col-md-8">
            <div class="form-group">
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
            {!! Form::text('domicilio[num_ext]',isset($domicilio) ? $domicilio->num_ext : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p.ej. 102',  'id' => 'num_ext', 'pattern' => "[A-Za-z0-9-]{1,5}", 'title' => "Ingresa número exterior"]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('num_int', 'Número interior / Piso: *') !!}</strong>
            {!! Form::text('domicilio[num_int]',isset($domicilio) ? $domicilio->num_int : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. 5', 'pattern' => "[A-Za-z0-9-]{1,5}", 'id' => 'interior']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('entidad_id', 'Entidad Federativa: *') !!}</strong>
            {!! Form::select('domicilio[entidad_id]', isset($selectEntidad) ? $selectEntidad : [], isset($bien) ? $bien->entidad_id : null, ['class'=>'form-control text-uppercase  tipo-titular',  'placeholder' => 'Selecciona una opción', 'id' => 'entidad_id', 'required' => 'true']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('municipio_id', 'Municipio / Alcaldía: *') !!}</strong>
            {!! Form::select('domicilio[municipio_id]', isset($selectMunicipio) ? $selectMunicipio : [], isset($bien) ? $bien->municipio_id : null, ['class'=>'form-control text-uppercase  tipo-titular', 'placeholder' => 'Seleccione  una opción',  'id' => 'municipio_id', 'required' => 'true']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('colonia', 'Colonia / Localidad: *') !!}</strong>
            {!! Form::text('domicilio[colonia]',isset($domicilio) ? $domicilio->colonia : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. Centro',  'id' => 'colonia']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>


    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('codigo_postal', 'Código postal: *') !!}</strong>
            {!! Form::text('domicilio[codigo_postal]',isset($domicilio) ? $domicilio->codigo_postal : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. 50000', 'maxlength'=>'5', 'id' => 'codigo_postal', 'pattern' => "[0-9]{5}", 'title' => "Ingresa código postal a 5 dígitos"]) !!}
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
            {!! Form::number('domicilio[num_extExt]',isset($domicilio) ? $domicilio->num_ext : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p.ej. 102',  'id' => 'num_extExt', 'pattern' => "[A-Za-z0-9-]{1,5}", 'title' => "Ingresa número exterior"]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('numintExt', 'Número interior / Piso: *') !!}</strong>
            {!! Form::text('domicilio[numintExt]',isset($domicilio) ? $domicilio->num_int : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. 5', 'pattern' => "[A-Za-z0-9-]{1,5}",  'id' => 'numintExt']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('pais', 'País: *') !!}</strong>
            {!! Form::text('domicilio[pais]',isset($domicilio) ? $domicilio->pais : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. México',  'id' => 'pais']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('entidadExt', 'Estado / Provincia: *') !!}</strong>
            {!! Form::text('domicilio[entidadExt]',isset($domicilio) ? $domicilio->entidad : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. México',  'id' => 'entidadExt']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('colonia_Ext', 'Colonia / Localidad: *') !!}</strong>
            {!! Form::text('domicilio[colonia_Ext]',isset($domicilio) ? $domicilio->colonia : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. Centro',  'id' => 'colonia_Ext']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('codigo_postalExt', 'Código postal: *') !!}</strong>
            {!! Form::text('domicilio[codigo_postalExt]',isset($domicilio) ? $domicilio->codigo_postal : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. 50000', 'maxlength'=>'5', 'pattern' => "[A-Za-z0-9]{5}", 'id' => 'codigo_postalExt', 'pattern' => "[A-Z\d]",  'title' => "Ingresa código postal a 5 dígitos"]) !!}
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
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>{!! Form::label('texto', 'Todos los campos marcados con * son obligatorios. ') !!}</strong>
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

        $('.fisica').hide();
        $('.moral').hide();

        //HABILITAR CAJA DE TEXTO OTROS
        $('#tipo_inmueble_id').change(function () {
            if (parseInt($(this).val()) === 9) {
                $('#tipo_inmueble').prop('disabled', false);
                $('#tipo_inmueble').prop('required', true);
            } else {
                $('#tipo_inmueble').prop('value', '');
                $('#tipo_inmueble').prop('disabled', true);
                $('#tipo_inmueble').prop('required', false);
            }
        });

        //HABILITAR CAJA DE TEXTO OTROS
        $('#relacion_transmisor_id').change(function () {
//            alert('entra');
            if (parseInt($(this).val()) === 20) {
                $('#relacion_transmisor').prop('disabled', false);
                $('#relacion_transmisor').prop('required', true);
            } else {
                $('#relacion_transmisor').prop('value', '');
                $('#relacion_transmisor').prop('disabled', true);
                $('#relacion_transmisor').prop('required', false);
            }
        });


        //CAMBIO DE COLOR TERCEROS
        $("#titular_id").change(function () {
            console.log($(this).val());
            //alert('entra');
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
//                alert('vacio');
                $(".terceros").hide();
                $('#tipo_tercero_id').prop('required', false);
                
                
            } else if (value === 3 || value === 4 || value === 8 || value === 10 || value === 13 || value === 15 || value === 18 || value === 19 || value === 24) {
//                alert('Terceros');
                $(".terceros").show();
                $('#tipo_tercero_id').prop('required', true);
                
            } else {
//                alert('otros');
                $(".terceros").hide();
                $('#tipo_tercero_id').prop('required', false);
                
            }
        });

        //TIPO TERCERO
        $('#tipo_tercero_id').change(function () {
            console.log($(this).val());
            if ($(this).val() === "") {
//                alert('vacio');
                $('.tercero_fisica').hide();
                $('.tercero_moral').hide();

                $('#nombre_razon_tercero_fisica').removeAttr('required');
                $('#rfc_tercero_fisica').removeAttr('required');
                $('#rfc_tercero_fisica').removeAttr('pattern');

                $('#nombre_razon_tercero_moral').removeAttr('required');
                $('#rfc_tercero_moral').removeAttr('required');
                $('#rfc_tercero_moral').removeAttr('pattern');

                

            } else if (parseInt($(this).val()) === 1) {
//                alert('fisica');
                $('.tercero_fisica').show();
                $('.tercero_moral').hide();
//YJZ
                $('#nombre_razon_tercero_fisica').prop('required', true);
                $('#rfc_tercero_fisica').prop('required', true);

                $('#nombre_razon_tercero_moral').removeAttr('required');
                $('#rfc_tercero_moral').removeAttr('required');
                $('#rfc_tercero_moral').removeAttr('pattern');

                

            } else {
//                alert('moral');
                $('.tercero_fisica').hide();
                $('.tercero_moral').show();

                $('#nombre_razon_tercero_fisica').removeAttr('required');

                $('#rfc_tercero_fisica').removeAttr('required');
                $('#rfc_tercero_fisica').removeAttr('pattern');
                
                $('#nombre_razon_tercero_moral').prop('required', true);
                $('#rfc_tercero_moral').prop('required', true);

            }
        });

        //TIPO TRANSMISOR
        $('#tipo_transmisor_id').change(function () {

            if ($(this).val() === '') {
                $('.fisica').hide();
                $('.moral').hide();

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
                $('#num_ext').prop('required', true);
                $('#colonia').prop('required', true);
                $('#municipio').prop('required', true);
                $('#entidad').prop('required', true);
                $('#codigo_postal').prop('required', true);

                $('#calleExt').prop('required', false);
                $('#num_extExt').prop('required', false);
                $('#colonia_Ext').prop('required', false);
                $('#colonia_Ext').prop('required', false);
                $('#pais').prop('required', false);

                $('#codigo_postalExt').removeAttr('required');
                $('#codigo_postalExt').removeAttr('pattern');
                

            } else if (parseInt($(this).val()) === 2) {
                $('.domicilio-MXBinmuebles').hide();
                $('.domicilio-EXBinmuebles').show();

                $('#calle').prop('required', false);
                $('#exterior').prop('required', false);
                $('#colonia').prop('required', false);
                $('#municipio').prop('required', false);
                $('#entidad').prop('required', false);
                $('#codigo_postal').prop('required', false);

                $('#calleExt').prop('required', true);
                $('#num_extExt').prop('required', true);
                $('#colonia_Ext').prop('required', true);
                $('#colonia_Ext').prop('required', true);
                $('#pais').prop('required', true);
                $('#codigo_postalExt').prop('required', true);


            } else {
                $('.domicilio-MXBinmuebles').hide();
                $('.domicilio-EXBinmuebles').hide();

                $('#calle').prop('required', false);
                $('#exterior').prop('required', false);
                $('#colonia').prop('required', false);
                $('#municipio').prop('required', false);
                $('#entidad').prop('required', false);
                $('#codigo_postal').prop('required', false);

                $('#calleExt').prop('required', false);
                $('#num_extExt').prop('required', false);
                $('#colonia_Ext').prop('required', false);
                $('#colonia_Ext').prop('required', false);
                $('#pais').prop('required', false);
                $('#codigo_postalExt').prop('required', false);
                
                $('#codigo_postalExt').removeAttr('required');
                $('#codigo_postalExt').removeAttr('pattern');
                
            }
        });
        
        
        $("#entidad_id").on('change', function () {
            var idEntidad = $(this).val();
            if (parseInt(idEntidad) === 15) {
                $(".foraneo").hide();
            }
            $.ajax({
                url: "{{asset('getMunicipiosDomicilio')}}/" + idEntidad,
                type: 'get',
                dataType: 'json',
                success: function (response) {
                    console.log(response);
                    $("#municipio_id").find('option').remove();
                    $("#municipio_id").append('<option value="">SELECCIONE UNA OPCIÓN</option>');
                    $(response).each(function (i, v) { // indice, valor
                        $("#municipio_id").append('<option value="' + v.id + '">' + v.municipio + '</option>');
                    });
                }
            });
        });


        @if (isset($bien))
        $('#tipo_inmueble_id').change();
        $("#titular_id").change();
        $('#tipo_tercero_id').change();
        $('#tipo_transmisor_id').change();
        $('#ubicacion_inmueble_id').change();
        $('#relacion_transmisor_id').change();        

        @endif
    });
    

</script>
@endsection
