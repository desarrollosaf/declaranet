<div>
    <div class="form-row">
        <div class="form-group col-md-4">
            {!! Form::label('nombre', 'Nombre (s):  *') !!}
            {!! Form::text('nombre',null,['class'=>'form-control alert-danger', 'placeholder'=>'Ingresa el nombre del dependiente económico',  'id' => 'nombre']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('apellidop', 'Primer apellido: *') !!}
            {!! Form::text('apellidop',null,['class'=>'form-control alert-danger', 'placeholder'=>'p. ej. Pérez',  'id' => 'apellidop']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('apellidom', 'Segundo apellido: *') !!}
            {!! Form::text('apellidom',null,['class'=>'form-control alert-danger', 'placeholder'=>'p. ej. Pérez',  'id' => 'apellidom']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
            {!! Form::label('nacimiento', 'Fecha de Nacimiento: *') !!}
            {!! Form::date('nacimiento',null,['class'=>'form-control alert-danger text-uppercase',  'id' => 'nacimiento']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('rfc', 'RFC:') !!}
            {!! Form::text('rfc',null,['class'=>'form-control alert-danger', 'placeholder'=>'p. ej. XAXX010101XXX',  'id' => 'rfc']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-5">
            {!! Form::label('parentesco', 'Parentesco o relación con el Declarante: *') !!}
            {!! Form::select('parentesco',$selectParentesco, null,['class'=>'form-control alert-danger', 'id' => 'parentesco']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            {!! Form::label('especifique', 'Especifique:') !!}
            {!! Form::text('especifique',null,['class'=>'form-control alert-danger', 'placeholder'=>'p. ej. Parentezco',  'id' => 'especifique-parentezco' , 'disabled' => true]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('extranjero', '¿Es ciudadano extranjero? *:') !!}
            {!! Form::select('extranjero', $selectExtranjero, null,['class'=>'form-control alert-danger',  'id' => 'extranjero']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('curp', 'CURP: *') !!}
            {!! Form::text('curp',null,['class'=>'form-control alert-danger', 'placeholder'=>'p. ej. XAXX010101XAXAXA01',  'id' => 'curp']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            {!! Form::label('habita-domicilio', '¿Habita en el domicilio del Declarante?:') !!}
            {!! Form::select('habita-domicilio', $respuestas, null,['class'=>'form-control alert-danger',  'id' => 'habita-domicilio']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>

        <div class="form-group col-md-4"  id='divLugarResidencia' style="display:none;">
            {!! Form::label('residencia', 'Lugar donde reside: *') !!}
            {!! Form::select('residencia', $selectResidencia, null,['class'=>'form-control alert-danger',  'id' => 'residencia']) !!}
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
            {!! Form::text('calle-nacional',null,['class'=>'form-control alert-danger', 'placeholder'=>'p. ej. Av. Independencia',  'id' => 'calle-nacional']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-2">
            {!! Form::label('exterior-nacional', 'Núm. Exterior: *') !!}
            {!! Form::text('exterior-nacional',null,['class'=>'form-control alert-danger', 'placeholder'=>'p. ej. 101',  'id' => 'exterior-nacional']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-2">
            {!! Form::label('interior-nacional', 'Núm. Interior: *') !!}
            {!! Form::text('interior-nacional',null,['class'=>'form-control alert-danger', 'placeholder'=>'p. ej. 1',  'id' => 'interior-nacional']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('interior-nacional', 'Colonia / Localidad: *') !!}
            {!! Form::text('interior-nacional',null,['class'=>'form-control alert-danger', 'placeholder'=>'p. ej. Centro',  'id' => 'interior-nacional']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            {!! Form::label('entidad', 'Entidad federativa:') !!}
            {!! Form::text('entidad',null,['class'=>'form-control alert-danger', 'placeholder'=>'p. ej. CDMX',  'id' => 'entidad']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('municipio', 'Municipio / Alcaldía:') !!}
            {!! Form::text('municipio',null,['class'=>'form-control alert-danger', 'placeholder'=>'p. ej. Gustavo A. Madero',  'id' => 'municipio']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('colonia', 'Código postal:') !!}
            {!! Form::text('colonia',null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. 50000',  'id' => 'colonia']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
</div>
<div id="domicilio-extranjero">
    <div class="form-row">
        <div class="form-group col-md-4">
            {!! Form::label('calle-extranjero', 'Calle: *') !!}
            {!! Form::text('calle-extranjero',null,['class'=>'form-control alert-danger', 'placeholder'=>'p. ej. Av. Independencia',  'id' => 'calle-extranjero']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-2">
            {!! Form::label('exterior-extranjero', 'Núm. Exterior: *') !!}
            {!! Form::text('exterior-extranjero',null,['class'=>'form-control alert-danger', 'placeholder'=>'p. ej. 101',  'id' => 'exterior-extranjero']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-2">
            {!! Form::label('interior-extranjero', 'Núm. Interior: *') !!}
            {!! Form::text('interior-extranjero',null,['class'=>'form-control alert-danger', 'placeholder'=>'p. ej. 1',  'id' => 'interior-extranjero']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('ciudad-extranjero', 'Ciudad / Localidad: *') !!}
            {!! Form::text('ciudad-extranjero',null,['class'=>'form-control alert-danger', 'placeholder'=>'p. ej. Toluca',  'id' => 'ciudad-extranjero']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            {!! Form::label('pais', 'País: *') !!}
            {!! Form::text('pais',null,['class'=>'form-control alert-danger', 'placeholder'=>'p. ej. México',  'id' => 'pais']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('municipio', 'Estado / Provincia:/ :') !!}
            {!! Form::text('municipio',null,['class'=>'form-control alert-danger', 'placeholder'=>'p. ej. México',  'id' => 'municipio']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('cp-extranjero', 'Código postal:') !!}
            {!! Form::text('cp-extranjero',null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. 50000',  'id' => 'cp-extranjero']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
</div>
<hr>
<h4>ACTIVIDAD LABORAL DEL DEPENDIENTE ECONÓMICO</h4>
<div class="form-group col-md-4">
    {!! Form::label('sector', 'Sector laboral:') !!}
    {!! Form::select('sector', $selectSector, null,['class'=>'form-control alert-danger',  'id' => 'sector']) !!}
    <span class="text-danger" style="font-size:150%"></span>
</div>
<div class="actividad-privada">
    <div class="form-row">
        <div class="form-group col-md-4 PRIVADO">
            {!! Form::label('empresa', 'Nombre de la empresa, sociedad o asociación: *') !!}
            {!! Form::text('empresa',null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. Desarrollo S.A de C.V',  'id' => 'empresa']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4 PRIVADO">
            {!! Form::label('rfc', 'RFC: *') !!}
            {!! Form::text('rfc',null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. XXX0101001010',  'id' => 'rfc']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4 PRIVADO">
            {!! Form::label('rfc', 'Empleo o cargo: *') !!}
            {!! Form::text('rfc',null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. Analista de sistemas',  'id' => 'rfc']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4 PRIVADO">
            {!! Form::label('fechaingreso', 'Fecha de ingreso al empleo: *') !!}
            {!! Form::text('fechaingreso',null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'fechaingreso']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4 PRIVADO">
            {!! Form::label('sector', 'Sector al que pertenece: *') !!}
            {!! Form::text('sector',null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'sector']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4 PRIVADO">
            {!! Form::label('especificar', 'Especifique: *') !!}
            {!! Form::text('especificar',null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. Parentezco',  'id' => 'especificar']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4 PRIVADO">
            {!! Form::label('salario', 'Salario mensual neto: *') !!}
            {!! Form::text('salario',null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p.ej. $10,000 Mxn',  'id' => 'salario']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
      
    </div>
</div>
<div class="actividad-publica">
    <div class="form-row">
        <div class="form-group col-md-4 PÚBLICO">
            {!! Form::label('nivel', 'Nivel / Orden de gobierno: *') !!}
            {!! Form::text('nivel',null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'nivel']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4 PÚBLICO">
            {!! Form::label('ambito', 'Ámbito público: *') !!}
            {!! Form::text('ambito',null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'ambito']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4 PÚBLICO">
            {!! Form::label('ente', 'Nombre del Ente Público: *') !!}
            {!! Form::text('ente',null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'ente']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4 PÚBLICO">
            {!! Form::label('area', 'Área de adscripción: *') !!}
            {!! Form::text('area',null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'area']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4 PÚBLICO">
            {!! Form::label('cargo', 'Empleo cargo o comisión: *') !!}
            {!! Form::text('cargo',null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'cargo']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4 PÚBLICO">
            {!! Form::label('funcion', 'Especifique función principal: *') !!}
            {!! Form::text('funcion',null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'funcion']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4 PÚBLICO">
            {!! Form::label('funcion', 'Salario mensual neto: *') !!}
            {!! Form::text('funcion',null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'funcion']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
          <div class="form-group col-md-4 PRIVADO">
            {!! Form::label('proveedor', '¿Es proveedor o contratista del gobierno?:') !!}
            {!! Form::select('habita-domicilio', $respuestas, null,['class'=>'form-control alert-danger',  'id' => 'proveedor']) !!}
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
