<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('datosPareja.nombre', 'Nombre (s): *') !!}</strong>
        {!! Form::text('datosPareja[nombre]',(isset($pareja->nombre)) ? $pareja->nombre : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. Carlos',  'id' => 'nombre', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('datosPareja.apellidop', 'Primer apellido: *') !!}</strong>
        {!! Form::text('datosPareja[primer_apellido]',(isset($pareja->primer_apellido)) ? $pareja->primer_apellido : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. Pérez',  'id' => 'apellidop','required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('datosPareja.segundo_apellido', 'Segundo apellido: *') !!}</strong>
        {!! Form::text('datosPareja[segundo_apellido]',(isset($pareja->segundo_apellido)) ? $pareja->segundo_apellido : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. Pérez',  'id' => 'apellidom', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('datosPareja.fecha_nacimiento', 'Fecha de nacimiento: *') !!}</strong>
        {!! Form::date('datosPareja[fecha_nacimiento]',(isset($pareja->fecha_nacimiento)) ? $pareja->fecha_nacimiento : null,['class'=>'form-control alert-danger text-uppercase',  'id' => 'fechanacimiento', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('datosPareja.rfc_pareja', 'RFC: *') !!}</strong>
        {!! Form::text('datosPareja[rfc_pareja]',(isset($pareja->rfc_pareja)) ? $pareja->rfc_pareja : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. XAXX010101XXX',  'id' => 'rfc', 'required' => true, 'pattern' => '([A-Z]{4}[0-9]{6}[A-Z0-9]{3})']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('datosPareja.relacion_id', ' Relación con el Declarante: *') !!}</strong>
        {!! Form::select('datosPareja[relacion_id]', $selectRelacioDeclarante, (isset($pareja->relacion_id)) ? $pareja->relacion_id : null,['class'=>'form-control alert-danger text-uppercase',  'id' => 'relacion', 'required' => true, 'placeholder' => "SELECCIONA UNA OPCIÓN"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('datosPareja.ciudadano_id', '¿Es ciudadano extranjero?: *') !!}</strong>
        {!! Form::select('datosPareja[ciudadano_id]', $selectCiudadano, (isset($pareja->ciudadano_id)) ? $pareja->ciudadano_id : null,['class'=>'form-control text-uppercase',  'id' => 'tipo-ciudadano', 'required' => true, 'placeholder' => "SELECCIONA UNA OPCIÓN"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('datosPareja.curp', 'CURP: *') !!}</strong>
        {!! Form::text('datosPareja[curp]',(isset($pareja->curp)) ? $pareja->curp : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. XAXX010101XAXAXA01',  'id' => 'curp', 'required' => true, "disabled" => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('datosPareja.respuesta_dependiente_id', '¿Es dependiente económico?: *') !!}</strong>
        {!! Form::select('datosPareja[respuesta_dependiente_id]',$selectRespuesta, (isset($pareja->respuesta_dependiente_id)) ? $pareja->respuesta_dependiente_id : null,['class'=>'form-control alert-danger text-uppercase', 'id' => 'dependiente','required' => true, 'placeholder' => "SELECCIONA UNA OPCIÓN"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('datosPareja.respuesta_domicilio_id', '¿Habita en el domicilio del Declarante?: *') !!}</strong>
        {!! Form::select('datosPareja[respuesta_domicilio_id]', $selectRespuesta, (isset($pareja->respuesta_domicilio_id)) ? $pareja->respuesta_domicilio_id : null,['class'=>'form-control alert-danger text-uppercase',  'id' => 'habita-domicilio', 'required' => true, 'placeholder' => "SELECCIONA UNA OPCIÓN"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 lugar-reside">
        <strong>{!! Form::label('datosPareja.lugar_reside_id', 'Lugar donde reside:  *') !!}</strong>
        {!! Form::select('datosPareja[lugar_reside_id]',$selectLugarReside,(isset($pareja->lugar_reside_id)) ? $pareja->lugar_reside_id : null,['class'=>'form-control alert-danger lugar-reside-change text-uppercase',  'id' => 'lugar-reside', 'placeholder' => "SELECCIONA UNA OPCIÓN"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="domicilio-MXBinmuebles">
    <hr>
    <h5> DOMICILIO DE LA PAREJA </h5>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('domicilio.calle', 'Calle:  *') !!}</strong>
            {!! Form::text('domicilio[calle]',isset($domicilio) ? $domicilio->calle : null,['class'=>'form-control tipo-titular text-uppercase', 'placeholder'=>'p. ej. Av. Independencia',  'id' => 'nombre', 'pattern' =>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}", 'title' => "Ingresa la calle" ]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('exterior', 'Número exterior:  *') !!}</strong>
            {!! Form::number('domicilio[num_ext]',isset($domicilio->num_int) ? $domicilio->num_ext : null,['class'=>'form-control tipo-titular text-uppercase', 'placeholder'=>'p.ej. 102',  'id' => 'exterior', 'title' => "Ingresa número exterior"]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('interior', 'Número interior / Piso:  * ') !!}</strong>
            {!! Form::text('domicilio[num_int]',isset($domicilio->num_int) ? $domicilio->num_int : null,['class'=>'form-control tipo-titular text-uppercase', 'placeholder'=>'p. ej. 5',  'id' => 'interior']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('domicilio.colonia', 'Colonia / Localidad:  *') !!}</strong>
            {!! Form::text('domicilio[colonia]',isset($domicilio) ? $domicilio->colonia : null,['class'=>'form-control tipo-titular text-uppercase', 'placeholder'=>'p. ej. Centro',  'id' => 'colonia']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('domicilio.id', 'Entidad Federativa:  *') !!}</strong>
            {!! Form::select('domicilio[entidad_id]', $selectEntidad,isset($domicilio->entidad_id) ? $domicilio->entidad_id : null,['class'=>'form-control tipo-titular text-uppercase', 'id' => 'entidad_id', 'placeholder' => "SELECCIONA UNA OPCIÓN"]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('domicilio.municipio_id', 'Municipio / Alcaldía:  *') !!}</strong>
            {!! Form::select('domicilio[municipio_id]', isset($selectMunicipio) ? $selectMunicipio : [], isset($domicilio->municipio_id) ? $domicilio->municipio_id : null,['class'=>'form-control text-uppercase', 'id' => 'municipio_id']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('domicilio.codigo_postal', 'Código postal:  *') !!}</strong>
            {!! Form::text('domicilio[codigo_postal]',isset($domicilio->codigo_postal) ? $domicilio->codigo_postal : null,['class'=>'form-control tipo-titular text-uppercase', 'placeholder'=>'p. ej. 50000',  'id' => 'cp']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
</div>

<div class="domicilio-EXBinmuebles">
    <hr>
    <h5> DOMICILIO DE LA PAREJA </h5>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('domicilioExt.calleExt', 'Calle:  *') !!}</strong>
            {!! Form::text('domicilioExt[calleExt]',isset($domicilio) ? $domicilio->calle : null,['class'=>'form-control tipo-titular text-uppercase', 'placeholder'=>'p. ej. Av. Independencia',  'id' => 'nombre', 'pattern' =>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}", 'title' => "Ingresa la calle" ]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('domicilioExt.numextExt', 'Número exterior:  *') !!}</strong>
            {!! Form::number('domicilioExt[numextExt]',isset($domicilio) ? $domicilio->num_ext : null,['class'=>'form-control tipo-titular text-uppercase', 'placeholder'=>'p.ej. 102',  'id' => 'num_extExt', 'pattern' => "[0-9]{1-5}", 'title' => "Ingresa número exterior"]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('domicilioExt.numintExt', 'Número interior / Piso:  * ') !!}</strong>
            {!! Form::text('domicilioExt[numintExt]',isset($domicilio) ? $domicilio->num_int : null,['class'=>'form-control tipo-titular text-uppercase', 'placeholder'=>'p. ej. 5',  'id' => 'numintExt']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('domicilioExt.coloniaExt', 'Colonia / Localidad: *') !!}</strong>
            {!! Form::text('domicilioExt[coloniaExt]',isset($domicilio) ? $domicilio->colonia : null,['class'=>'form-control tipo-titular text-uppercase', 'placeholder'=>'p. ej. Centro',  'id' => 'colonia_Ext']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('domicilio.pais_id', 'País: *') !!}</strong>
            {!! Form::select('domicilio[pais_id]', $selectPais,isset($domicilio) ? $domicilio->pais_id : null,['class'=>'form-control tipo-titular text-uppercase',  'id' => 'pais', 'placeholder' => "SELECCIONA UNA OPCIÓN"]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('domicilioExt.estadoprovincia', 'Estado / Provincia: *') !!}</strong>
            {!! Form::text('domicilioExt[estadoprovincia]',isset($domicilio) ? $domicilio->entidad : null,['class'=>'form-control tipo-titular text-uppercase', 'placeholder'=>'p. ej. México',  'id' => 'estado_provincia']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('domicilioExt.codigopostalExt', 'Código postal: *') !!}</strong>
            {!! Form::text('domicilioExt[codigopostalExt]',isset($domicilio) ? $domicilio->codigo_postal : null,['class'=>'form-control tipo-titular text-uppercase', 'placeholder'=>'p. ej. 50000',  'id' => 'codigo_postalExt']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
</div>
<hr>
<h5> ACTIVIDAD LABORAL DE LA PAREJA </h5>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('actividadLaboral.ambito_sector_id', 'Ámbito / Sector :  *') !!}</strong>
        {!! Form::select('actividadLaboral[ambito_sector_id]', $sectores,isset($experienciaLaboral->ambito_sector_id) ? $experienciaLaboral->ambito_sector_id : null,['class'=>'form-control tipo-titular text-uppercase', 'id' => 'ambito-sector', 'placeholder' => "SELECCIONA UNA OPCIÓN", "required" => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="sector-privado-otro">
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('actividadLaboral.nombre_empresa', 'Nombre de la empresa, sociedad o asociación: *') !!}</strong>
            {!! Form::text('actividadLaboral[nombre_empresa]',isset($experienciaLaboral->nombre_empresa) ? $experienciaLaboral->nombre_empresa : null,['class'=>'form-control tipo-titular text-uppercase', 'placeholder'=>'p. ej. Desarrollo S.A de C.V',  'id' => 'codigo_postalExt']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('actividadLaboral.puesto', 'Puesto: *') !!}</strong>
            {!! Form::text('actividadLaboral[puesto]',isset($experienciaLaboral->puesto) ? $experienciaLaboral->puesto : null,['class'=>'form-control tipo-titular text-uppercase', 'placeholder'=>'p.ej. Análista de Sistemas',  'id' => 'codigo_postalExt']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('actividadLaboral.rfc', 'RFC: *') !!}</strong>
            {!! Form::text('actividadLaboral[rfc]',isset($experienciaLaboral->rfc) ? $experienciaLaboral->rfc : null,['class'=>'form-control tipo-titular text-uppercase', 'placeholder'=>'p. ej. XXX0101001010',  'id' => 'codigo_postalExt', 'pattern' => '([A-Z]{3}[0-9]{9})']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('actividadLaboral.fecha_ingreso', 'Fecha de ingreso al empleo: *') !!}</strong>
            {!! Form::date('actividadLaboral[fecha_ingreso]',isset($experienciaLaboral->fecha_ingreso) ? $experienciaLaboral->fecha_ingreso : null,['class'=>'form-control tipo-titular text-uppercase',  'id' => 'codigo_postalExt', ]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('actividadLaboral.sector_id','Sector al que pertenece: *') !!}</strong>
            {!! Form::select('actividadLaboral[sector_id]', $sector, isset($experienciaLaboral->sector_id) ? $experienciaLaboral->sector_id : null,['class'=>'form-control text-uppercase', 'id' => 'sector-privado', 'placeholder' => "SELECCIONA UNA OPCIÓN"]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4 especifique-sector">
            <strong>{!! Form::label('actividadLaboral.especifique_otro_sector', 'Especifique otro sector: *') !!}</strong>
            {!! Form::text('actividadLaboral[especifique_otro_sector]',isset($experienciaLaboral->especifique_otro_sector) ? $experienciaLaboral->codigo_postal : null,['class'=>'form-control tipo-titular text-uppercase', 'placeholder'=>'p. ej. Sector petrolero',  'id' => 'especifique-sector']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('actividadLaboral.salario_mensual_neto','Salario mensual neto: *') !!}</strong>
            {!! Form::number('actividadLaboral[salario_mensual_neto]',isset($experienciaLaboral->salario_mensual_neto) ? $experienciaLaboral->salario_mensual_neto : null,['class'=>'form-control tipo-titular text-uppercase', 'placeholder'=>'p. ej. 50000',  'id' => 'codigo_postalExt']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('actividadLaboral.respuesta_proveedor_id','¿Es proveedor o contratista de gobierno? *') !!}</strong>
            {!! Form::select('actividadLaboral[respuesta_proveedor_id]', $respuesta, isset($experienciaLaboral->respuesta_proveedor_id) ? $experienciaLaboral->respuesta_proveedor_id : null,['class'=>'form-control tipo-titular text-uppercase', 'id' => 'codigo_postalExt', 'placeholder' => "SELECCIONA UNA OPCIÓN"]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
</div>
<div class="sector-publico">
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('nivel_orden_gobierno_id', 'Nivel / Orden de Gobierno: * ') !!}</strong>
            {!! Form::select('actividadLaboral[nivel_orden_gobierno_id]', $nivelOrdenGobierno,isset($experienciaLaboral->nivel_orden_gobierno_id) ? $experienciaLaboral->nivel_orden_gobierno_id : null,['class'=>'form-control tipo-titular text-uppercase', 'id' => 'codigo_postalExt', 'placeholder' => "SELECCIONA UNA OPCIÓN"]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('ambito_publico_id', 'Ámbito Público: *') !!}</strong>
            {!! Form::select('actividadLaboral[ambito_publico_id]', $ambito, isset($experienciaLaboral->ambito_publico_id) ? $experienciaLaboral->ambito_publico_id : null,['class'=>'form-control tipo-titular text-uppercase', 'id' => 'codigo_postalExt', 'placeholder' => "SELECCIONA UNA OPCIÓN"]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('ente_publico', 'Nombre del Ente Público: *') !!}</strong>
            {!! Form::text('actividadLaboral[ente_publico]',isset($experienciaLaboral->ente_publico) ? $experienciaLaboral->ente_publico : null,['class'=>'form-control tipo-titular text-uppercase', 'placeholder'=>'p. ej. Desarrollo de Sistemas S.A de C.V',  'id' => 'codigo_postalExt', 'title' => "Ingresa código postal a 5 dígitos"]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('area_adscripcion', 'Área de adscripción: *') !!}</strong>
            {!! Form::text('actividadLaboral[area_adscripcion]',isset($experienciaLaboral->area_adscripcion) ? $experienciaLaboral->area_adscripcion : null,['class'=>'form-control tipo-titular text-uppercase', 'placeholder'=>'p. ej. Desarrollo de Tecnología',  'id' => 'codigo_postalExt', 'title' => "Ingresa código postal a 5 dígitos"]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('Empleo, cargo o comisión: *') !!}</strong>
            {!! Form::text('actividadLaboral[cargo_comision]',isset($experienciaLaboral->cargo_comision) ? $experienciaLaboral->cargo_comision : null,['class'=>'form-control tipo-titular text-uppercase', 'placeholder'=>'p. ej. Analista de sistemas',  'id' => 'empleo']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('funcion_pricipal', 'Especifique función principal: *') !!}</strong>
            {!! Form::text('actividadLaboral[funcion_pricipal]',isset($experienciaLaboral->funcion_pricipal) ? $experienciaLaboral->funcion_pricipal : null,['class'=>'form-control tipo-titular text-uppercase', 'placeholder'=>'p. ej. Desarrollo de sistemas de información',  'id' => 'funcio']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('actividadLaboral.salario_mensual_neto_publico', 'Salario mensual neto: *') !!}</strong>
            {!! Form::number('actividadLaboral[salario_mensual_neto_publico]',isset($experienciaLaboral->salario_mensual_neto) ? $experienciaLaboral->salario_mensual_neto : null,['class'=>'form-control tipo-titular text-uppercase', 'placeholder'=>'p.ej. $10,000 Mxn',  'id' => 'salario']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('fecha_ingreso_publico', 'Fecha de ingreso al empleo: *') !!}</strong>
            {!! Form::date('actividadLaboral[fecha_ingreso_publico]',isset($experienciaLaboral->fecha_ingreso) ? $experienciaLaboral->fecha_ingreso : null,['class'=>'form-control tipo-titular text-uppercase', 'id' => 'codigo_postalExt']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-12">
        <strong>{!! Form::label('datosPareja.observaciones', 'Aclaraciones / Observaciones:  *') !!}</strong>
        {!! Form::textarea('datosPareja[observaciones]', isset($pareja->observaciones) ? $pareja->observaciones : null, ['class'=>'form-control alert-danger  text-uppercase']) !!}
    </div>
</div>
<div class="text-center">
    {{ Form::button('Ir a la sección anterior', ['type' => 'button', 'class' => 'btn btn-submit text-light'] )}}
    {{ Form::button('Guardar e ir a la siguiente sección', ['type' => 'submit', 'class' => 'btn btn-submit text-light', 'id' => 'datos-pareja-submit'] )}}
</div>

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $(".form-control").addClass("alert-danger")
            $(".domicilio-MXBinmuebles").hide();
            $(".domicilio-EXBinmuebles").hide();
            $(".sector-privado-otro").hide();
            $(".sector-publico").hide();
            $(".lugar-reside").hide();
            $(".especifique-sector").hide();
            $("#tipo-ciudadano").change(function () {
                const valor = parseInt($(this).val());
                if (valor === 1) {
                    $("#curp").prop("disabled", false);
                } else {
                    $("#curp").prop("disabled", true);
                }
            });

            $('#lugar-reside').change(function () {
                if (parseInt($(this).val()) === 1) {
                    $('.domicilio-MXBinmuebles').show();
                    $('.domicilio-MXBinmuebles').find("input").prop("required", true);
                    $('.domicilio-MXBinmuebles').find("select").prop("required", true);
                    $('.domicilio-EXBinmuebles').hide();
                    $('.domicilio-EXBinmuebles').find("input").prop("required", false);
                    $('.domicilio-EXBinmuebles').find("select").prop("required", false);

                } else if (parseInt($(this).val()) === 2) {
                    $('.domicilio-MXBinmuebles').hide();
                    $('.domicilio-EXBinmuebles').show();
                    $('#municipio_id').find("option").remove();
                    $('.domicilio-MXBinmuebles').find("input").prop("required", false);
                    $('.domicilio-MXBinmuebles').find("select").prop("required", false);
                    $('.domicilio-EXBinmuebles').find("input").prop("required", true);
                    $('.domicilio-EXBinmuebles').find("select").prop("required", true);
                } else {
                    $('.domicilio-MXBinmuebles').hide();
                    $('.domicilio-EXBinmuebles').hide();
                    $('.domicilio-EXBinmuebles').find("input").val("");
                    $('.domicilio-EXBinmuebles').find("select").val("");
                    $('.domicilio-MXBinmuebles').find("input").val("");
                    $('.domicilio-MXBinmuebles').find("select").val("");
                    $('#municipio_id').find("option").remove();
                    $('.domicilio-MXBinmuebles').find("input").prop("required", false);
                    $('.domicilio-EXBinmuebles').find("input").prop("required", false);
                    $('.domicilio-EXBinmuebles').find("select").prop("required", false);
                    $('.domicilio-MXBinmuebles').find("select").prop("required", false);
                }
            });
            $('.lugar-reside-change').change(function () {
                if (parseInt($(this).val()) === 1) {
                    $('.domicilio-EXBinmuebles').find("input").val("");
                    $('.domicilio-EXBinmuebles').find("select").val("");
                } else if (parseInt($(this).val()) === 2) {
                    $('.domicilio-MXBinmuebles').find("input").val("");
                    $('.domicilio-MXBinmuebles').find("select").val("");
                } else {
                    $('.domicilio-MXBinmuebles').hide();
                    $('.domicilio-EXBinmuebles').hide();
                    $('.domicilio-EXBinmuebles').find("input").val("");
                    $('.domicilio-EXBinmuebles').find("select").val("");
                    $('.domicilio-MXBinmuebles').find("input").val("");
                    $('.domicilio-MXBinmuebles').find("select").val("");
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
                        $("#municipio_id").append('<option value="0">SELECCIONA UNA OPCIÓN</option>');
                        $(response).each(function (i, v) { // indice, valor
                            $("#municipio_id").append('<option value="' + v.id + '">' + v.municipio + '</option>');
                        });
                    }
                });
            });
            $("#habita-domicilio").change(function () {
                const respuesta = parseInt($(this).val());
                if (respuesta !== 2) {
                    $('.domicilio-MXBinmuebles').hide();
                    $('.domicilio-EXBinmuebles').hide();
                    $('.domicilio-EXBinmuebles').find("input").val("");
                    $('.domicilio-EXBinmuebles').find("select").val("");
                    $('.domicilio-MXBinmuebles').find("input").val("");
                    $('.domicilio-MXBinmuebles').find("select").val("");
                    $("#lugar-reside").val("");
                    $(".lugar-reside").hide();
                    $(".lugar-reside").prop("required", false);
                } else {
                    $(".lugar-reside").show();
                    $(".lugar-reside").prop("required", true);
                    $("#lugar-reside").change();
                }
            });
            $("#ambito-sector").change(function () {
                const sector = parseInt($(this).val());
                if (sector === 1) {
                    $(".sector-privado-otro").hide();
                    $(".sector-privado-otro").find("select").prop("required", false);
                    $(".sector-privado-otro").find("input").prop("required", false);
                    $(".sector-publico").show();
                    $(".sector-publico").find("select").prop("required", true);
                    $(".sector-publico").find("input").prop("required", true);
                    $(".sector-privado-otro").find("select").val("");
                    $(".sector-privado-otro").find("input").val("");
                } else if (sector === 2 || sector === 3) {
                    $(".sector-privado-otro").show();
                    $(".sector-publico").hide();
                    $(".sector-publico").find("input").val("");
                    $(".sector-publico").find("select").val("");
                    $(".sector-privado-otro").find("select").val("");
                    $(".sector-privado-otro").find("input").val("");
                    $(".sector-privado-otro").find("select").prop("required", true);
                    $(".sector-privado-otro").find("input").prop("required", true);
                    $(".sector-publico").find("select").prop("required", false);
                    $(".sector-publico").find("input").prop("required", false);
                }
            });
            $("#sector-privado").change(function () {
                const sector = parseInt($(this).val());
                if (sector === 17) {
                    $(".especifique-sector").show();
                    $("#especifique-sector").prop("required", true);
                } else {
                    $(".especifique-sector").hide();
                    $("#especifique-sector").val("");
                    $("#especifique-sector").prop("required", false);
                }
            });
            @isset($pareja)
            $("#tipo-ciudadano").change();
            $('#lugar-reside').change();
            $("#habita-domicilio").change();
            $("#ambito-sector").change();
            $("#ambito-sector").change();
            $("#sector-privado").change();
            @endisset
        });
    </script>
@endsection
