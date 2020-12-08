<div>
    <div class="form-row">
        <div class="form-group col-md-4">
            {!! Form::label('nombre', 'Nombre (s):  *') !!}
            {!! Form::text('declarante[nombre]',isset($dependiente) ? $dependiente->nombre : null,['class'=>'form-control alert-danger', 'placeholder'=>'Ingresa el nombre del dependiente económico',  'id' => 'nombre']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('apellidop', 'Primer apellido: *') !!}
            {!! Form::text('declarante[primer_apellido]',isset($dependiente) ? $dependiente->primer_apellido : null,['class'=>'form-control alert-danger', 'placeholder'=>'p. ej. Pérez',  'id' => 'apellidop']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('apellidom', 'Segundo apellido: *') !!}
            {!! Form::text('declarante[segundo_apellido]',isset($dependiente) ? $dependiente->segundo_apellido : null,['class'=>'form-control alert-danger', 'placeholder'=>'p. ej. Pérez',  'id' => 'apellidom']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
            {!! Form::label('nacimiento', 'Fecha de Nacimiento: *') !!}
            {!! Form::date('declarante[fecha_nacimiento]',isset($dependiente) ? $dependiente->fecha_nacimiento : null,['class'=>'form-control alert-danger text-uppercase',  'id' => 'nacimiento']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('rfc', 'RFC:') !!}
            {!! Form::text('declarante[rfc]',isset($dependiente) ? $dependiente->rfc : null,['class'=>'form-control alert-danger', 'placeholder'=>'p. ej. XAXX010101XXX',  'id' => 'rfc']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-5">
            {!! Form::label('parentesco', 'Parentesco o relación con el Declarante: *') !!}
            {!! Form::select('declarante[relacion_transmisor_id]',$selectParentesco, isset($dependiente) ? $dependiente->relacion_transmisor_id : null,['class'=>'form-control alert-danger', 'id' => 'parentesco']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            {!! Form::label('especifique', 'Especifique:') !!}
            {!! Form::text('declarante[relacion_transmisor]',isset($dependiente) ? $dependiente->nombre : relacion_transmisor,['class'=>'form-control alert-danger', 'placeholder'=>'p. ej. Parentezco',  'id' => 'especifique-parentezco' , 'disabled' => true]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('extranjero', '¿Es ciudadano extranjero? *:') !!}
            {!! Form::select('declarante[lugar_ubicacion_id]', $selectExtranjero, isset($dependiente) ? $dependiente->lugar_ubicacion_id : null,['class'=>'form-control alert-danger',  'id' => 'extranjero']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('curp', 'CURP: *') !!}
            {!! Form::text('declarante[curp]',isset($dependiente) ? $dependiente->curp : null,['class'=>'form-control alert-danger', 'placeholder'=>'p. ej. XAXX010101XAXAXA01',  'id' => 'curp']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            {!! Form::label('habita-domicilio', '¿Habita en el domicilio del Declarante?:') !!}
            {!! Form::select('declarante[respuesta_id]', $respuestas, isset($dependiente) ? $dependiente->respuesta_id : null,['class'=>'form-control alert-danger',  'id' => 'habita-domicilio']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>

        <div class="form-group col-md-4"  id='divLugarResidencia' style="display:none;">
            {!! Form::label('residencia', 'Lugar donde reside: *') !!}
            {!! Form::select('declarante[lugar_residencia_id]', $selectResidencia, isset($dependiente) ? $dependiente->lugar_residencia_id : null,['class'=>'form-control alert-danger',  'id' => 'residencia']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
</div>
<hr>
<h4>DOMICILIO DEL DEPENDIENTE ECONÓMICO</h4>
<div id="domicilio-mexico">
    <div class="form-row">
        <div class="form-group col-md-4 ">
            {!! Form::label('calle-nacional', 'Calle: *') !!}
            {!! Form::text('nacional[calle]',isset($domicilio) ? $domicilio->calle : null,['class'=>'form-control alert-danger', 'placeholder'=>'p. ej. Av. Independencia',  'id' => 'calle-nacional']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-2">
            {!! Form::label('exterior-nacional', 'Núm. Exterior: *') !!}
            {!! Form::text('nacional[num_ext]',isset($domicilio) ? $domicilio->num_ext : null,['class'=>'form-control alert-danger', 'placeholder'=>'p. ej. 101',  'id' => 'exterior-nacional']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-2">
            {!! Form::label('interior-nacional', 'Núm. Interior: *') !!}
            {!! Form::text('nacional[num_int]',isset($domicilio) ? $domicilio->num_int : null,['class'=>'form-control alert-danger', 'placeholder'=>'p. ej. 1',  'id' => 'interior-nacional']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('interior-nacional', 'Colonia / Localidad: *') !!}
            {!! Form::text('nacional[colonia]',isset($domicilio) ? $domicilio->colonia : null,['class'=>'form-control alert-danger', 'placeholder'=>'p. ej. Centro',  'id' => 'interior-nacional']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            {!! Form::label('entidad', 'Entidad federativa:') !!}
            {!! Form::select('nacional[entidad_id]',$entidades ,isset($domicilio) ? $domicilio->entidad_id : null,['class'=>'form-control alert-danger',  'id' => 'entidad_id']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('municipio', 'Municipio / Alcaldía:') !!}
            {!! Form::select('nacional[municipio_id]',$municipios,isset($domicilio) ? $domicilio->municipio_id : null,['class'=>'form-control alert-danger',  'id' => 'municipio_id']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('colonia', 'Código postal:') !!}
            {!! Form::text('nacional[codigo_postal]',isset($domicilio) ? $domicilio->codigo_postal : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. 50000',  'id' => 'colonia']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
</div>
<div id="domicilio-extranjero">
    <div class="form-row">
        <div class="form-group col-md-4">
            {!! Form::label('calle-extranjero', 'Calle: *') !!}
            {!! Form::text('extranjero[calle]',null,['class'=>'form-control alert-danger', 'placeholder'=>'p. ej. Av. Independencia',  'id' => 'calle-extranjero']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-2">
            {!! Form::label('exterior-extranjero', 'Núm. Exterior: *') !!}
            {!! Form::text('extranjero[num_ext]',null,['class'=>'form-control alert-danger', 'placeholder'=>'p. ej. 101',  'id' => 'exterior-extranjero']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-2">
            {!! Form::label('interior-extranjero', 'Núm. Interior: *') !!}
            {!! Form::text('extranjero[num_int]',null,['class'=>'form-control alert-danger', 'placeholder'=>'p. ej. 1',  'id' => 'interior-extranjero']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('ciudad-extranjero', 'Ciudad / Localidad: *') !!}
            {!! Form::text('extranjero[colonia]',null,['class'=>'form-control alert-danger', 'placeholder'=>'p. ej. Toluca',  'id' => 'ciudad-extranjero']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            {!! Form::label('pais', 'País: *') !!}
            {!! Form::select('extranjero[pais_id]',$paises,null,['class'=>'form-control alert-danger', 'id' => 'pais']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('municipio', 'Estado / Provincia:/ :') !!}
            {!! Form::text('extranjero[estado]',null,['class'=>'form-control alert-danger', 'placeholder'=>'p. ej. México',  'id' => 'municipio']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('cp-extranjero', 'Código postal:') !!}
            {!! Form::text('extranjero[codigo_postal]',null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. 50000',  'id' => 'cp-extranjero']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
</div>
<hr>
<h4>ACTIVIDAD LABORAL DEL DEPENDIENTE ECONÓMICO</h4>
<div class="form-group col-md-4">
    {!! Form::label('sector', 'Sector laboral:') !!}
    {!! Form::select('laboral[ambito_sector_id]', $selectSector, isset($dato_laboral) ? $dato_laboral->ambito_sector_id : null ,['class'=>'form-control alert-danger',  'id' => 'sector']) !!}
    <span class="text-danger" style="font-size:150%"></span>
</div>
<div class="actividad-privada">
    <div class="form-row">
        <div class="form-group col-md-4 PRIVADO">
            {!! Form::label('empresa', 'Nombre de la empresa, sociedad o asociación: *') !!}
            {!! Form::text('privado[nombre_empresa]', isset($dato_laboral) ? $dato_laboral->nombre_empresa : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. Desarrollo S.A de C.V',  'id' => 'empresa']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4 PRIVADO">
            {!! Form::label('rfc', 'RFC: *') !!}
            {!! Form::text('privado[rfc]', isset($dato_laboral) ? $dato_laboral->rfc : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. XXX0101001010',  'id' => 'rfc']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4 PRIVADO">
            {!! Form::label('rfc', 'Empleo o cargo: *') !!}
            {!! Form::text('privado[puesto]', isset($dato_laboral) ? $dato_laboral->puesto : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. Analista de sistemas',  'id' => 'rfc']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4 PRIVADO">
            {!! Form::label('fechaingreso', 'Fecha de ingreso al empleo: *') !!}
            {!! Form::text('privado[fecha_ingreso]', isset($dato_laboral) ? $dato_laboral->fecha_ingreso : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'fechaingreso']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4 PRIVADO">
            {!! Form::label('sector', 'Sector al que pertenece: *') !!}
            {!! Form::select('privado[sector_id]',$sectores, isset($dato_laboral) ? $dato_laboral->sector_id : null,['class'=>'form-control alert-danger text-uppercase','id' => 'sector']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4 PRIVADO">
            {!! Form::label('especificar', 'Especifique: *') !!}
            {!! Form::text('privado[sector]', isset($dato_laboral) ? $dato_laboral->sector : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. Parentezco',  'id' => 'especificar']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4 PRIVADO">
            {!! Form::label('salario', 'Salario mensual neto: *') !!}
            {!! Form::text('privado[salario_mensual_neto]', isset($dato_laboral) ? $dato_laboral->salario_mensual_neto : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p.ej. $10,000 Mxn',  'id' => 'salario']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4 PRIVADO">
            {!! Form::label('proveedor', '¿Es proveedor o contratista del gobierno?:') !!}
            {!! Form::checkbox('privado[proveedor_gobierno]', 'value', isset($dato_laboral) ? $dato_laboral->proveedor_gobierno : null) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
</div>
<div class="actividad-publica">
    <div class="form-row">
        <div class="form-group col-md-4 PÚBLICO">
            {!! Form::label('nivel', 'Nivel / Orden de gobierno: *') !!}
            {!! Form::select('publico[nivel_orden_gobierno_id]',$nivel, isset($dato_laboral) ? $dato_laboral->nivel_orden_gobierno_id : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'nivel']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4 PÚBLICO">
            {!! Form::label('ambito', 'Ámbito público: *') !!}
            {!! Form::select('publico[ambito_publico_id]',$ambito, isset($dato_laboral) ? $dato_laboral->ambito_publico_id : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'ambito']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4 PÚBLICO">
            {!! Form::label('ente', 'Nombre del Ente Público: *') !!}
            {!! Form::text('publico[ente_publico]', isset($dato_laboral) ? $dato_laboral->ente_publico : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'ente']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4 PÚBLICO">
            {!! Form::label('area', 'Área de adscripción: *') !!}
            {!! Form::text('publico[area_adscripcion]', isset($dato_laboral) ? $dato_laboral->area_adscripcion : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'area']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4 PÚBLICO">
            {!! Form::label('cargo', 'Empleo cargo o comisión: *') !!}
            {!! Form::text('publico[cargo_comision]', isset($dato_laboral) ? $dato_laboral->cargo_comision : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'cargo']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4 PÚBLICO">
            {!! Form::label('funcion', 'Especifique función principal: *') !!}
            {!! Form::text('publico[funcion_pricipal]', isset($dato_laboral) ? $dato_laboral->funcion_pricipal : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'funcion']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4 PÚBLICO">
            {!! Form::label('funcion', 'Salario mensual neto: *') !!}
            {!! Form::text('publico[salario_mensual_neto]', isset($dato_laboral) ? $dato_laboral->salario_mensual_neto : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'funcion']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4 PÚBLICO">
            {!! Form::label('funcion', 'Fecha de ingreso al empleo: *') !!}
            {!! Form::date('publico[fecha_ingreso]', isset($dato_laboral) ? $dato_laboral->fecha_ingreso : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'funcion']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-12">
        {!! Form::label('aclaraciones', 'Aclaraciones / Observaciones:') !!}
        {!! Form::textarea('aclaraciones', null, ['class'=>'form-control alert-danger']) !!}
    </div>
</div>
<div class="form-row text-center">
    <div class="col">
        {{ Form::button('Envíar', ['type' => 'submit', 'class' => 'btn btn-submit text-light'] )}}
    </div>
</div>
