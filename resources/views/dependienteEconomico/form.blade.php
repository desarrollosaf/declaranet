<div>
    <div class="form-row ">
        <div class="form-group col-md-4">
            {!! Form::label('nombre', 'Nombre (s):  *',["style" => "font-weight: bold;"]) !!}
            {!! Form::text('declarante[nombre]',isset($dependiente) ? $dependiente->nombre : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'P.EJ.CARLOS',  'id' => 'nombre','required' => true,'pattern'=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('apellidop', 'Primer apellido: *',["style" => "font-weight: bold;"]) !!}
            {!! Form::text('declarante[primer_apellido]',isset($dependiente) ? $dependiente->primer_apellido : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. Pérez',  'id' => 'apellidop','required' => true,'pattern'=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('apellidom', 'Segundo apellido: ',["style" => "font-weight: bold;"]) !!}
            {!! Form::text('declarante[segundo_apellido]',isset($dependiente) ? $dependiente->segundo_apellido : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. Pérez',  'id' => 'apellidom','pattern'=>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            {!! Form::label('nacimiento', 'Fecha de Nacimiento: *',["style" => "font-weight: bold;"]) !!}
            {!! Form::date('declarante[fecha_nacimiento]',isset($dependiente) ? $dependiente->fecha_nacimiento : null,['class'=>'form-control alert-danger text-uppercase',  'id' => 'nacimiento','required' => true,'max' => date('Y-m-d')]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('rfc', 'RFC:',["style" => "font-weight: bold;"]) !!}
            {!! Form::text('declarante[rfc]',isset($dependiente) ? $dependiente->rfc : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. XAXX010101XXX',  'id' => 'rfc','pattern'=>'([A-Z]{4}[0-9]{6}[A-Z0-9]{0,3})']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('parentesco', 'Parentesco o relación con el Declarante: *',["style" => "font-weight: bold;"]) !!}
            {!! Form::select('declarante[relacion_transmisor_id]',$selectParentesco, isset($dependiente) ? $dependiente->relacion_transmisor_id : null,['class'=>'form-control alert-danger', 'id' => 'parentesco','required' => true]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            {!! Form::label('especifique', 'Especifique:',["style" => "font-weight: bold;"]) !!}
            {!! Form::text('declarante[relacion_transmisor]',isset($dependiente) ? $dependiente->relacion_transmisor : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. Parentezco',  'id' => 'especifique-parentezco' , 'disabled' => true]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('extranjero', '¿Es ciudadano extranjero? :*',["style" => "font-weight: bold;"]) !!}
            {!! Form::select('declarante[lugar_ubicacion_id]', $selectExtranjero, isset($dependiente) ? $dependiente->lugar_ubicacion_id : null,['class'=>'form-control alert-danger',  'id' => 'extranjero','required' => true]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('curp', 'CURP: *',["style" => "font-weight: bold;"]) !!}
            {!! Form::text('declarante[curp]',isset($dependiente) ? $dependiente->curp : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. XAXX010101XAXAXA01',  'id' => 'curp','required' => true,'pattern'=>"([A-Z]{4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[HM](AS|BC|BS|CC|CL|CM|CS|CH|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[A-Z]{3}[0-9A-Z]\d)"]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            {!! Form::label('habita-domicilio', '¿Habita en el domicilio del Declarante?:',["style" => "font-weight: bold;"]) !!}
            {!! Form::select('declarante[respuesta_id]', $respuestas, isset($dependiente) ? $dependiente->respuesta_id : null,['class'=>'form-control alert-danger  text-uppercase', 'placeholder' => 'selecciona una opción', 'id' => 'habita-domicilio','required' => true]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>

        <div class="form-group col-md-4"  id='divLugarResidencia' style="display:none;">
            {!! Form::label('residencia', 'Lugar donde reside: *',["style" => "font-weight: bold;"]) !!}
            {!! Form::select('declarante[lugar_residencia_id]', $selectResidencia, isset($dependiente) ? $dependiente->lugar_residencia_id : null,['class'=>'form-control alert-danger',  'id' => 'residencia','required' => true]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
</div>
<div id="domicilio-mexico" style="display: none;">
    <hr>
    <h4>DOMICILIO DEL DEPENDIENTE ECONÓMICO</h4>
    <div class="form-row">
        <div class="form-group col-md-4 ">
            {!! Form::label('calle-nacional', 'Calle: *',["style" => "font-weight: bold;"]) !!}
            {!! Form::text('nacional[calle]',isset($domicilio) ? $domicilio->calle : null,['class'=>'form-control alert-danger nacional text-uppercase', 'placeholder'=>'P.EJ.AV.INDEPENDENCIA',  'id' => 'calle-nacional']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-2">
            {!! Form::label('exterior-nacional', 'Núm. Exterior: *',["style" => "font-weight: bold;"]) !!}
            {!! Form::text('nacional[num_ext]',isset($domicilio) ? $domicilio->num_ext : null,['class'=>'form-control alert-danger nacional ', 'placeholder'=>'P.EJ. 101',  'id' => 'exterior-nacional','pattern'=>"[A-Za-z0-9-]{1,8}"]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-2">
            {!! Form::label('interior-nacional', 'Núm. Interior: ',["style" => "font-weight: bold;"]) !!}
            {!! Form::text('nacional[num_int]',isset($domicilio) ? $domicilio->num_int : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'P.EJ. 1',  'id' => 'interior-nacional']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('entidad_id', 'Entidad federativa: *',["style" => "font-weight: bold;"]) !!}
            {!! Form::select('nacional[entidad_id]',$entidades ,isset($domicilio) ? $domicilio->entidad_id : null,['class'=>'form-control alert-danger nacional text-uppercase', 'placeholder' => 'Selecciona una opción' , 'id' => 'entidad_id']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            {!! Form::label('municipio', 'Municipio / Alcaldía: *',["style" => "font-weight: bold;"]) !!}
            {!! Form::select('nacional[municipio_id]',isset($domicilio) ? $municipios : [],isset($domicilio) ? $domicilio->municipio_id : null,['class'=>'form-control alert-danger nacional text-uppercase',  'id' => 'municipio_id']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('interior-nacional', 'Colonia / Localidad: *',["style" => "font-weight: bold;"]) !!}
            {!! Form::text('nacional[colonia]',isset($domicilio) ? $domicilio->colonia : null,['class'=>'form-control alert-danger nacional', 'placeholder'=>'P.EJ.CENTRO',  'id' => 'interior-nacional']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('colonia', 'Código postal*:',["style" => "font-weight: bold;"]) !!}
            {!! Form::text('nacional[codigo_postal]',isset($domicilio) ? $domicilio->codigo_postal : null,['class'=>'form-control alert-danger text-uppercase nacional ', 'placeholder'=>'p. ej. 50000',  'id' => 'colonia','pattern'=>"[0-9]{5}"]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
</div>
<div id="domicilio-extranjero" style="display: none;">
    <hr>
    <h4>DOMICILIO DEL DEPENDIENTE ECONÓMICO</h4>
    <div class="form-row">
        <div class="form-group col-md-4">
            {!! Form::label('calle-extranjero', 'Calle: *',["style" => "font-weight: bold;"]) !!}
            {!! Form::text('extranjero[calle]',isset($domicilio) ? $domicilio->calle : null,['class'=>'form-control alert-danger extranjero text-uppercase', 'placeholder'=>'p. ej. Av. Independencia',  'id' => 'calle-extranjero']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-2">
            {!! Form::label('exterior-extranjero', 'Núm. Exterior: *',["style" => "font-weight: bold;"]) !!}
            {!! Form::text('extranjero[num_ext]',isset($domicilio) ? $domicilio->num_ext : null,['class'=>'form-control alert-danger extranjero text-uppercase', 'placeholder'=>'p. ej. 101',  'id' => 'exterior-extranjero']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-2">
            {!! Form::label('interior-extranjero', 'Núm. Interior: *',["style" => "font-weight: bold;"]) !!}
            {!! Form::text('extranjero[num_int]',isset($domicilio) ? $domicilio->num_int : null,['class'=>'form-control alert-danger extranjero text-uppercase', 'placeholder'=>'p. ej. 1',  'id' => 'interior-extranjero']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('ciudad-extranjero', 'Ciudad / Localidad: *',["style" => "font-weight: bold;"]) !!}
            {!! Form::text('extranjero[colonia]',isset($domicilio) ? $domicilio->colonia : null,['class'=>'form-control alert-danger extranjero text-uppercase', 'placeholder'=>'p. ej. Toluca',  'id' => 'ciudad-extranjero']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            {!! Form::label('pais', 'País: *',["style" => "font-weight: bold;"]) !!}
            {!! Form::text('extranjero[pais]', isset($domicilio) ? $domicilio->pais : null,['class'=>'form-control alert-danger extranjero text-uppercase', 'id' => 'pais','placeholder' => 'p. ej. Estados Unidos']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('municipio', 'Estado / Provincia:/ :',["style" => "font-weight: bold;"]) !!}
            {!! Form::text('extranjero[entidad]',isset($domicilio) ? $domicilio->entidad : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. México',  'id' => 'municipio']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('cp-extranjero', 'Código postal*:',["style" => "font-weight: bold;"]) !!}
            {!! Form::text('extranjero[codigo_postal]',isset($domicilio) ? $domicilio->codigo_postal : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. 50000',  'id' => 'cp-extranjero','pattern'=>"[A-za-z0-9]{5}"]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
</div>
<hr>

<h4>ACTIVIDAD LABORAL DEL DEPENDIENTE ECONÓMICO</h4>
<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('sector', 'Sector laboral:',["style" => "font-weight: bold;"]) !!}
        {!! Form::select('laboral[ambito_sector_id]', $selectSector, isset($dato_laboral) ? $dato_laboral->ambito_sector_id : null ,['class'=>'form-control alert-danger laboral text-uppercase','placeholder' => 'Selecciona una opción',  'id' => 'sector','required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>

    <div class="form-group col-md-4 PRIVADO" >
        {!! Form::label('empleador', 'Tipo de empleador:',["style" => "font-weight: bold;"]) !!}
        {!! Form::select('laboral[regimen_fiscal_id]', $regimenFiscal, isset($dato_laboral) ? $dato_laboral->regimen_fiscal_id : null ,['class'=>'form-control alert-danger laboral text-uppercase','placeholder' => 'Selecciona una opción',  'id' => 'regimen_fiscal_id','required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="actividad-privada">
    <div class="form-row">
        <div class="form-group col-md-4 PRIVADO">
            <div id="empleador_fisica">
                <strong>{!! Form::label('empleador_fisica', 'Nombre del empleador: *') !!} </strong>
            </div>
            <div id="empleador_moral" style="display: none;">
                <strong>{!! Form::label('empleador_moral', 'Nombre de la empresa, sociedad o asociación: *') !!} </strong>
            </div>
            {!! Form::text('privado[nombre_empresa]', isset($dato_laboral) ? $dato_laboral->nombre_empresa : null,['class'=>'form-control alert-danger text-uppercase privado', 'placeholder'=>'p. ej. Desarrollo S.A de C.V',  'id' => 'empresa']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4 PRIVADO">
            <div id="empleador_fisica_RFC">
                <strong>{!! Form::label('empleador_fisica', 'RFC: ') !!} </strong>
            </div>
            <div id="empleador_moral_RFC" style="display: none;">
                <strong>{!! Form::label('empleador_moral', 'RFC: *') !!} </strong>
            </div>
            {!! Form::text('privado[rfc]', isset($dato_laboral) ? $dato_laboral->rfc : null,['class'=>'form-control alert-danger text-uppercase privado',  'id' => 'rfcpriv']) !!}
            <span class="text-danger" style="font-size:150%"></span>

        </div>
        <div class="form-group col-md-4 PRIVADO">
            {!! Form::label('rfc', 'Empleo o cargo: *',["style" => "font-weight: bold;"]) !!}
            {!! Form::text('privado[puesto]', isset($dato_laboral) ? $dato_laboral->puesto : null,['class'=>'form-control alert-danger text-uppercase privado', 'placeholder'=>'p. ej. Analista de sistemas',  'id' => 'rfc']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4 PRIVADO">
            {!! Form::label('fechaingreso', 'Fecha de ingreso al empleo: *',["style" => "font-weight: bold;"]) !!}
            {!! Form::date('privado[fecha_ingreso]', isset($dato_laboral) ? $dato_laboral->fecha_ingreso : null,['class'=>'form-control alert-danger text-uppercase privado', 'placeholder'=>'',  'id' => 'fechaingreso','max' => date('Y-m-d')]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4 PRIVADO">
            {!! Form::label('sector', 'Sector al que pertenece: *',["style" => "font-weight: bold;"]) !!}
            {!! Form::select('privado[sector_id]',$sectores, isset($dato_laboral) ? $dato_laboral->sector_id : null,['class'=>'form-control alert-danger text-uppercase privado','id' => 'sector_pertenece']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4 PRIVADO">
            {!! Form::label('especificar', 'Especifique: *',["style" => "font-weight: bold;"]) !!}
            {!! Form::text('privado[sector]', isset($dato_laboral) ? $dato_laboral->sector : null,['class'=>'form-control alert-danger text-uppercase privado', 'placeholder'=>'p. ej. Parentesco', 'disabled' => true, 'id' => 'sector_especificar']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4 PRIVADO">
            {!! Form::label('salario', 'Salario mensual neto: *',["style" => "font-weight: bold;"]) !!}
            {!! Form::text('privado[salario_mensual_neto]', isset($dato_laboral) ? $dato_laboral->salario_mensual_neto : null,['class'=>'form-control alert-danger text-uppercase privado', 'placeholder'=>'P.EJ. $10,000 MXN',  'id' => 'salario']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4 PRIVADO">
            {!! Form::label('proveedor', '¿Es proveedor o contratista del gobierno?:',["style" => "font-weight: bold;"]) !!}
            {!! Form::select('privado[proveedor_gobierno]',$contratista_gobierno, isset($dato_laboral) ? $dato_laboral->proveedor_gobierno : null,['class'=>'form-control alert-danger text-uppercase privado','id' => 'sector_pertenece','placeholder' => 'SELECCIONE UNA OPCIÓN']) !!}

            <!-- {!! Form::checkbox('privado[proveedor_gobierno]', true, isset($dato_laboral) ? $dato_laboral->proveedor_gobierno : null) !!} -->

            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
</div>
<div class="actividad-publica">
    <div class="form-row">
        <div class="form-group col-md-4 PÚBLICO">
            {!! Form::label('nivel', 'Nivel / Orden de gobierno: *',["style" => "font-weight: bold;"]) !!}
            {!! Form::select('publico[nivel_orden_gobierno_id]',$nivel, isset($dato_laboral) ? $dato_laboral->nivel_orden_gobierno_id : null,['class'=>'form-control alert-danger text-uppercase publico', 'placeholder'=>'Selecciona una opción',  'id' => 'nivel']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4 PÚBLICO">
            {!! Form::label('ambito', 'Ámbito público: *',["style" => "font-weight: bold;"]) !!}
            {!! Form::select('publico[ambito_publico_id]',$ambito, isset($dato_laboral) ? $dato_laboral->ambito_publico_id : null,['class'=>'form-control alert-danger text-uppercase publico', 'placeholder'=>'Selecciona una opción',  'id' => 'ambito']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4 PÚBLICO">
            {!! Form::label('ente', 'Nombre del Ente Público: *',["style" => "font-weight: bold;"]) !!}
            {!! Form::text('publico[ente_publico]', isset($dato_laboral) ? $dato_laboral->ente_publico : null,['class'=>'form-control alert-danger text-uppercase publico', 'placeholder'=>'P.EJ.Desarrollo S.A de C.V',  'id' => 'ente']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4 PÚBLICO">
            {!! Form::label('area', 'Área de adscripción: *',["style" => "font-weight: bold;"]) !!}
            {!! Form::text('publico[area_adscripcion]', isset($dato_laboral) ? $dato_laboral->area_adscripcion : null,['class'=>'form-control alert-danger text-uppercase publico', 'placeholder'=>' P.EJ.Desarrollo y actualización ',  'id' => 'area']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4 PÚBLICO">
            {!! Form::label('cargo', 'Empleo cargo o comisión: *',["style" => "font-weight: bold;"]) !!}
            {!! Form::text('publico[cargo_comision]', isset($dato_laboral) ? $dato_laboral->cargo_comision : null,['class'=>'form-control alert-danger text-uppercase publico', 'placeholder'=>' P.EJ.Analista en sistemas',  'id' => 'cargo']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4 PÚBLICO">
            {!! Form::label('funcion', 'Especifique función principal: *',["style" => "font-weight: bold;"]) !!}
            {!! Form::text('publico[funcion_pricipal]', isset($dato_laboral) ? $dato_laboral->funcion_pricipal : null,['class'=>'form-control alert-danger text-uppercase publico', 'placeholder'=>'P.EJ. Analista de sistemas',  'id' => 'funcion']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4 PÚBLICO">
            {!! Form::label('funcion', 'Salario mensual neto: *',["style" => "font-weight: bold;"]) !!}
            {!! Form::text('publico[salario_mensual_neto]', isset($dato_laboral) ? $dato_laboral->salario_mensual_neto : null,['class'=>'form-control alert-danger text-uppercase publico', 'placeholder'=>'P.EJ. $10,000 MXN',  'id' => 'salario_publico']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4 PÚBLICO">
            {!! Form::label('funcion', 'Fecha de ingreso al empleo: *',["style" => "font-weight: bold;"]) !!}
            {!! Form::date('publico[fecha_ingreso]', isset($dato_laboral) ? $dato_laboral->fecha_ingreso : null,['class'=>'form-control alert-danger text-uppercase publico', 'placeholder'=>'',  'id' => 'funcion','max' => date('Y-m-d')]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-12">
        {!! Form::label('observaciones', 'Aclaraciones / Observaciones:',["style" => "font-weight: bold;"]) !!}
        {!! Form::textarea('declarante[observaciones]', isset($dependiente) ? $dependiente->observaciones : null, ['class'=>'form-control alert-danger']) !!}
        <strong>{!! Form::label('aclaraciones', 'Todos los campos marcados con * son obligatorios.') !!}</strong>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="text-center">
            <br>
            <a href="{{route("datos_dependiente_declarante.index")}}" class="btn btn-submit text-light">Ir a la sección anterior</a>
            <input type="submit" name="submit" class="btn btn-submit text-light"
                   value="Guardar e ir a la siguiente sección">
        </div>
    </div>
</div>

