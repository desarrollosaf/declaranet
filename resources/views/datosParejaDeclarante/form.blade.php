<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('datosPareja.nombre', 'Nombre (s):') !!}</strong>
        {!! Form::text('datosPareja[nombre]',null,['class'=>'form-control alert-danger', 'placeholder'=>'p. ej. Carlos',  'id' => 'nombre', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('datosPareja.apellidop', 'Primer apellido:') !!}</strong>
        {!! Form::text('datosPareja[primer_apellido]',null,['class'=>'form-control alert-danger', 'placeholder'=>'p. ej. Pérez',  'id' => 'apellidop','required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('datosPareja.segundo_apellido', 'Segundo apellido:') !!}</strong>
        {!! Form::text('datosPareja[segundo_apellido]',null,['class'=>'form-control alert-danger', 'placeholder'=>'p. ej. Pérez',  'id' => 'apellidom', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('datosPareja.fecha_nacimiento', 'Fecha de nacimiento:') !!}</strong>
        {!! Form::date('datosPareja[fecha_nacimiento]',null,['class'=>'form-control alert-danger',  'id' => 'fechanacimiento', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('datosPareja.rfc_pareja', 'RFC:') !!}</strong>
        {!! Form::text('datosPareja[rfc_pareja]',null,['class'=>'form-control alert-danger', 'placeholder'=>'p. ej. XAXX010101XXX',  'id' => 'rfc', 'required' => true, 'pattern' => '([A-Z]{4}[0-9]{6}[A-Z0-9]{3})']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('datosPareja.relacion_id', ' Relación con el Declarante: * :') !!}
        {!! Form::select('datosPareja[relacion_id]', $selectRelacioDeclarante, null,['class'=>'form-control alert-danger',  'id' => 'relacion', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('datosPareja.ciudadano_id', '¿Es ciudadano extranjero? * :') !!}</strong>
        {!! Form::select('datosPareja[ciudadano_id]', $selectCiudadano, null,['class'=>'form-control',  'id' => 'tipo-ciudadano']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('datosPareja.curp', 'CURP:') !!}</strong>
        {!! Form::text('datosPareja[curp]',null,['class'=>'form-control alert-danger', 'placeholder'=>'p. ej. XAXX010101XAXAXA01',  'id' => 'curp']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('datosPareja.respuesta_dependiente_id', '¿Es dependiente económico?:') !!}</strong>
        {!! Form::select('datosPareja[respuesta_dependiente_id]',$selectRespuesta, null,['class'=>'form-control alert-danger', 'id' => 'dependiente']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <strong>{!! Form::label('datosPareja.respuesta_domicilio_id', '¿Habita en el domicilio del Declarante?:') !!}</strong>
        {!! Form::select('datosPareja[respuesta_domicilio_id]', $selectRespuesta, null,['class'=>'form-control alert-danger',  'id' => 'habita-domicilio']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-6 lugar-reside">
        <strong>{!! Form::label('datosPareja.lugar_reside_id', 'Lugar donde reside:') !!}</strong>
        {!! Form::select('datosPareja[lugar_reside_id]',$selectLugarReside,null,['class'=>'form-control alert-danger',  'id' => 'lugar-reside']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="domicilio-MXBinmuebles">
    <hr>
    <h5> DOMICILIO DE LA PAREJA </h5>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('domicilio.calle', 'Calle:') !!}</strong>
            {!! Form::text('domicilio[calle]',isset($domicilio) ? $domicilio->calle : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. Av. Independencia',  'id' => 'nombre', 'pattern' =>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}", 'title' => "Ingresa la calle" ]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('exterior', 'Número exterior:') !!}</strong>
            {!! Form::number('domicilio[num_ext]',isset($domicilio) ? $domicilio->numext : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p.ej. 102',  'id' => 'exterior', 'title' => "Ingresa número exterior"]) !!}
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
            <strong>{!! Form::label('domicilio.colonia', 'Colonia / Localidad:') !!}</strong>
            {!! Form::text('domicilio[colonia]',isset($domicilio) ? $domicilio->colonia : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. Centro',  'id' => 'colonia']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('domicilio.entidad_id', 'Entidad Federativa:') !!}</strong>
            {!! Form::select('domicilio[entidad_id]', $selectEntidad,isset($domicilio) ? $domicilio->entidad_pais : null,['class'=>'form-control tipo-titular', 'id' => 'entidad_id']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('domicilio.municipio_id', 'Municipio / Alcaldía:') !!}</strong>
            {!! Form::select('domicilio[municipio_id]', isset($domicilio) ? $selectMunicipio : [], isset($domicilio) ? $domicilio->municipio_id : null,['class'=>'form-control', 'id' => 'municipio_id']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('domicilio.codigo_postal', 'Código postal:') !!}</strong>
            {!! Form::text('domicilio[codigo_postal]',isset($domicilio) ? $domicilio->codigo_postal : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. 50000',  'id' => 'cp']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
</div>

<div class="domicilio-EXBinmuebles">
    <hr>
    <h5> DOMICILIO DE LA PAREJA </h5>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('domicilio.calleExt', 'Calle:') !!}</strong>
            {!! Form::text('domicilio[calleExt]',isset($domicilio) ? $domicilio->calle : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. Av. Independencia',  'id' => 'nombre', 'pattern' =>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}", 'title' => "Ingresa la calle" ]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('domicilio.numextExt', 'Número exterior:') !!}</strong>
            {!! Form::number('domicilio[numextExt]',isset($domicilio) ? $domicilio->numext : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p.ej. 102',  'id' => 'num_extExt', 'pattern' => "[0-9]{1-5}", 'title' => "Ingresa número exterior"]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('domicilio.numintExt', 'Número interior / Piso: ') !!}</strong>
            {!! Form::text('domicilio[numintExt]',isset($domicilio) ? $domicilio->numint : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. 5',  'id' => 'numintExt']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('domicilio.coloniaExt', 'Colonia / Localidad:') !!}</strong>
            {!! Form::text('domicilio[coloniaExt]',isset($domicilio) ? $domicilio->colonia : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. Centro',  'id' => 'colonia_Ext']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('domicilio.pais_id', 'País:') !!}</strong>
            {!! Form::select('domicilio[pais_id]', $selectPais,isset($domicilio) ? $domicilio->entidad_pais : null,['class'=>'form-control tipo-titular',  'id' => 'pais']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('domicilio.estadoprovincia', 'Estado / Provincia:') !!}</strong>
            {!! Form::text('domicilio[estadoprovincia]',isset($domicilio) ? $domicilio->municipio_provincia : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. México',  'id' => 'estado_provincia']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('domicilio.codigopostalExt', 'Código postal:') !!}</strong>
            {!! Form::text('domicilio[codigopostalExt]',isset($domicilio) ? $domicilio->codigo_postal : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. 50000',  'id' => 'codigo_postalExt']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
</div>
<hr>
<h5> ACTIVIDAD LABORAL DE LA PAREJA </h5>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('actividadLaboral.sector_id', 'Ámbito / Sector :  *') !!}</strong>
        {!! Form::select('actividadLaboral[sector_id]', $sectores,isset($domicilio) ? $domicilio->entidad_pais : null,['class'=>'form-control tipo-titular', 'id' => 'ambito-sector']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="sector-privado-otro">
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('actividadLaboral.nombre_empresa', 'Nombre de la empresa, sociedad o asociación:*') !!}</strong>
            {!! Form::text('actividadLaboral[nombre_empresa]',isset($actividadLaboral) ? $actividadLaboral->codigo_postal : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. Desarrollo S.A de C.V',  'id' => 'codigo_postalExt']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('actividadLaboral.puesto', 'Puesto:  *') !!}</strong>
            {!! Form::text('actividadLaboral[puesto]',isset($actividadLaboral) ? $actividadLaboral->codigo_postal : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p.ej. Análista de Sistemas',  'id' => 'codigo_postalExt']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('actividadLaboral.rfc', 'RFC:  *') !!}</strong>
            {!! Form::text('actividadLaboral[rfc]',isset($actividadLaboral) ? $actividadLaboral->codigo_postal : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. XXX0101001010',  'id' => 'codigo_postalExt']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('actividadLaboral.fecha_ingreso', 'Fecha de ingreso al empleo:  *') !!}</strong>
            {!! Form::date('actividadLaboral[fecha_ingreso]',isset($actividadLaboral) ? $actividadLaboral->codigo_postal : null,['class'=>'form-control tipo-titular',  'id' => 'codigo_postalExt', ]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('actividadLaboral.sector_id','Sector al que pertenece:  *') !!}</strong>
            {!! Form::select('actividadLaboral[sector_id]', $sector, isset($actividadLaboral) ? $actividadLaboral->codigo_postal : null,['class'=>'form-control', 'id' => 'sector-privado']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4 especifique-sector">
            <strong>{!! Form::label('actividadLaboral.especifique_otro_sector', 'Especifique otro sector:  *') !!}</strong>
            {!! Form::text('actividadLaboral[especifique_otro_sector]',isset($actividadLaboral) ? $actividadLaboral->codigo_postal : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. Sector petrolero',  'id' => 'especifique-sector']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('actividadLaboral.salario_mensual_neto','Salario mensual neto: *') !!}</strong>
            {!! Form::number('actividadLaboral[salario_mensual_neto]',isset($actividadLaboral) ? $actividadLaboral->codigo_postal : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. 50000',  'id' => 'codigo_postalExt']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('actividadLaboral.respuesta_proveedor_id','¿Es proveedor o contratista de gobierno?  *') !!}</strong>
            {!! Form::select('actividadLaboral[respuesta_proveedor_id]', $respuesta, isset($actividadLaboral) ? $actividadLaboral->codigo_postal : null,['class'=>'form-control tipo-titular', 'id' => 'codigo_postalExt']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
</div>
<div class="sector-publico">
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('nivel_orden_gobierno_id', 'Nivel / Orden de Gobierno:  * ') !!}</strong>
            {!! Form::select('actividadLaboral[nivel_orden_gobierno_id]', $nivelOrdenGobierno,isset($actividadLaboral) ? $actividadLaboral->codigo_postal : null,['class'=>'form-control tipo-titular', 'id' => 'codigo_postalExt']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('ambito_publico_id', 'Ámbito Público:  *') !!}</strong>
            {!! Form::select('actividadLaboral[ambito_publico_id]', $ambito, isset($actividadLaboral) ? $actividadLaboral->codigo_postal : null,['class'=>'form-control tipo-titular', 'id' => 'codigo_postalExt']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('ente_publico', 'Nombre del Ente Público:  *') !!}</strong>
            {!! Form::text('actividadLaboral[ente_publico]',isset($actividadLaboral) ? $actividadLaboral->codigo_postal : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. Desarrollo de Sistemas S.A de C.V',  'id' => 'codigo_postalExt', 'title' => "Ingresa código postal a 5 dígitos"]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('area_adscripcion', 'Área de adscripción:  *') !!}</strong>
            {!! Form::text('actividadLaboral[area_adscripcion]',isset($actividadLaboral) ? $actividadLaboral->codigo_postal : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. Desarrollo de Tecnología',  'id' => 'codigo_postalExt', 'title' => "Ingresa código postal a 5 dígitos"]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('Empleo, cargo o comisión:  *') !!}</strong>
            {!! Form::text('actividadLaboral[cargo_comision]',isset($actividadLaboral) ? $actividadLaboral->codigo_postal : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. Analista de sistemas',  'id' => 'empleo']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('funcion_pricipal', 'Especifique función principal:  ') !!}</strong>
            {!! Form::text('actividadLaboral[funcion_pricipal]',isset($actividadLaboral) ? $actividadLaboral->codigo_postal : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. Desarrollo de sistemas de información',  'id' => 'funcio']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('actividadLaboral.salario_mensual_neto', 'Salario mensual neto:  *') !!}</strong>
            {!! Form::number('actividadLaboral[salario_mensual_neto_publico]',isset($actividadLaboral) ? $actividadLaboral->codigo_postal : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p.ej. $10,000 Mxn',  'id' => 'salario']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('fecha_ingreso', 'Fecha de ingreso al empleo:  *') !!}</strong>
            {!! Form::date('actividadLaboral[fecha_ingreso_publico]',isset($actividadLaboral) ? $actividadLaboral->codigo_postal : null,['class'=>'form-control tipo-titular', 'id' => 'codigo_postalExt']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-12">
        <strong>{!! Form::label('datosPareja.observaciones', 'Aclaraciones / Observaciones:') !!}</strong>
        {!! Form::textarea('datosPareja{observaciones}', null, ['class'=>'form-control alert-danger']) !!}
    </div>
</div>
<div class="form-row">
    <div class="col">
        {{ Form::button('Ir a la sección anterior', ['type' => 'button', 'class' => 'btn btn-submit text-light'] )}}
    </div>
    <div class="col">
        {{ Form::button('Guardar e ir a la siguiente sección', ['type' => 'submit', 'class' => 'btn btn-submit text-light float-right'] )}}
    </div>
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
                    $('.domicilio-EXBinmuebles').hide();
                } else if (parseInt($(this).val()) === 2) {
                    $('.domicilio-MXBinmuebles').hide();
                    $('.domicilio-EXBinmuebles').show();
                } else {
                    $('.domicilio-MXBinmuebles').hide();
                    $('.domicilio-EXBinmuebles').hide();
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
                        $("#municipio_id").append('<option value="">SELECCIONA UNA OPCIÓN</option>');
                        $(response).each(function (i, v) { // indice, valor
                            $("#municipio_id").append('<option value="' + v.id + '">' + v.municipio + '</option>');
                        });
                    }
                });
            });
            $("#habita-domicilio").change(function () {
                const respuesta = parseInt($(this).val());
                if (respuesta !== 2) {
                    $(".domicilio-MXBinmuebles").hide();
                    $(".domicilio-EXBinmuebles").hide();
                    $("#lugar-reside").prop("disabled", true);
                    $(".lugar-reside").hide();
                } else {
                    $("#lugar-reside").prop("disabled", false);
                    $(".lugar-reside").show();
                    $("#lugar-reside").change();

                }
            });
            $("#ambito-sector").change(function () {
                const sector = parseInt($(this).val());
                if (sector === 1) {
                    $(".sector-privado-otro").hide();
                    $(".sector-publico").show();
                } else if(sector === 2 || sector === 3){
                    $(".sector-privado-otro").show();
                    $(".sector-publico").hide();
                }
            });
            $("#sector-privado").change(function () {
                const sector = parseInt($(this).val());
                if (sector === 17) {
                    $(".especifique-sector").show();
                } else {
                    $(".especifique-sector").hide();
                    $("#especifique-sector").val("");
                }
            });
        });
    </script>
@endsection
