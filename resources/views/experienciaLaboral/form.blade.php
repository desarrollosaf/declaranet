<div class="row">
    <div class="col-md-5">
        <strong> {!! Form::label('experiencia[ambito_sector_id]', 'Ámbito / Sector en el que laboraste: *') !!}</strong>
    </div>
    <div class="form-group col-md-5">
        {!! Form::select('experiencia[ambito_sector_id]', $ambitos_sectores, isset($experiencia) ? $experiencia->ambito_sector_id : [],['class'=>'form-control text-uppercase','id' => 'ambito_sector_id', 'placeholder' => 'Selecciona una opción', 'required' => true]) !!}
    </div>
</div>
<div class="row" >
    <div class="col-md-5 PRIVADO">
        <strong> {!! Form::label('experiencia[regimen_fiscal_id]', 'Tipo de empleador: *') !!}</strong>
    </div>
    <div class="form-group col-md-5 PRIVADO">
        {!! Form::select('experiencia[regimen_fiscal_id]', $regimenFiscal, isset($experiencia) ? $experiencia->regimen_fiscal_id : [],['class'=>'form-control text-uppercase','id' => 'regimen_fiscal_id', 'placeholder' => 'Selecciona una opción', 'required' => true]) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-md-4  PRIVADO">
        <div id="empleador_fisica">
        <strong>{!! Form::label('empleador_fisica', 'Nombre del empleador: *') !!} </strong>
        </div>
        <div id="empleador_moral" style="display: none;">
        <strong>{!! Form::label('empleador_moral', 'Nombre de la empresa, sociedad o asociación: *') !!} </strong>
        </div>
        {!! Form::text('experiencia[nombre_empresa]',isset($experiencia) ? $experiencia->nombre_empresa : null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. Desarrollo S.A de C.V.','id' => 'nombre_empresa', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 PÚBLICO">
        <strong>{!! Form::label('nivel_orden_gobierno_id', 'Nivel / Orden de Gobierno: *') !!}</strong>
        {!! Form::select('experiencia[nivel_orden_gobierno_id]', $nivelOrdenGobierno,isset($experiencia) ? $experiencia->nivel_orden_gobierno_id : [],['class'=>'form-control text-uppercase','id' => 'nivel_orden_gobierno_id','placeholder' => 'Selecciona una opción', 'required' => true]) !!}
    </div>
    <div class="form-group col-md-4 PRIVADO">
        <div id="empleador_fisica_RFC">
            <strong>{!! Form::label('empleador_fisica', 'RFC: ') !!} </strong>
        </div>
        <div id="empleador_moral_RFC" style="display: none;">
            <strong>{!! Form::label('empleador_moral', 'RFC: *') !!} </strong>
        </div>
        {!! Form::text('experiencia[rfc]',isset($experiencia) ? $experiencia->rfc : null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. XXX01011001010.','id' => 'rfc']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 PÚBLICO">
        <strong>{!! Form::label('celpersonal', 'Ámbito público: *') !!}</strong>
        {!! Form::select('experiencia[ambito_publico_id]',$ambito,isset($experiencia) ? $experiencia->ambito_publico_id : [], ['class'=>'form-control text-uppercase','id' => 'ambito_publico_id' ,'placeholder' => 'Selecciona una opción', 'required' => true]) !!}
    </div>
    <div class="form-group col-md-4 PRIVADO">
        <strong>{!! Form::label('celpersonal', 'Area:  *') !!}</strong>
        {!! Form::text('experiencia[area]',isset($experiencia) ? $experiencia->area : null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. DESARROLLO Y ACTUALIZACIÓN.','id' => 'area', 'required' => true])  !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 PÚBLICO">
        <strong>{!! Form::label('celpersonal', 'Nombre del Ente Público: *') !!}</strong>
        {!! Form::text('experiencia[ente_publico]',isset($experiencia) ? $experiencia->ente_publico : null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. DESARROLLO Y ACTUALIZACIÓN.','id' => 'ente_publico', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 PRIVADO">
        <strong>{!! Form::label('celpersonal', 'Puesto:  *') !!}</strong>
        {!! Form::text('experiencia[puesto]',isset($experiencia) ? $experiencia->puesto : null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. ANÁLISTA EN SISTEMAS.','id' => 'puesto', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 PÚBLICO">
        <strong>{!! Form::label('celpersonal', 'Área de adscripción:  *') !!}</strong>
        {!! Form::text('experiencia[area_adscripcion]',isset($experiencia) ? $experiencia->area_adscripcion : null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. ANÁLISTA EN SISTEMAS.','id' => 'area_adscripcion', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 PRIVADO">
        <strong>{!! Form::label('celpersonal', 'Sector al que pertenece: *') !!}</strong>
        {!! Form::select('experiencia[sector_id]',$sectores,isset($experiencia) ? $experiencia->sector_id : null, ['class'=>'form-control text-uppercase','id' => 'sector_id','placeholder' => 'Selecciona una opción', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>

    <div class="form-group col-md-4 PRIVADO">
        <strong>{!! Form::label('celpersonal', 'Especifique sector al que pertenece: *') !!}</strong>
        {!! Form::text('experiencia[especifique_otro_sector]',isset($experiencia) ? $experiencia->especifique_otro_sector : null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. PETROLERO.','id' => 'especifique_otro_sector', 'required' => true, 'disabled' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>

    <div class="form-group col-md-4 PÚBLICO">
        <strong>{!! Form::label('celpersonal', 'Empleo, Cargo o Comisión:  *') !!}</strong>
        {!! Form::text('experiencia[cargo_comision]',isset($experiencia) ? $experiencia->cargo_comision : null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. ANÁLISTA EN SISTEMAS.','id' => 'cargo_comision', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 PÚBLICO">
        <strong>{!! Form::label('funcion_principal', 'Especifique función principal  *') !!}</strong>
        {!! Form::text('experiencia[funcion_pricipal]',isset($experiencia) ? $experiencia->funcion_pricipal : null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. DESARROLLO DE SISTEMAS DE INFORMACIÓN.','id' => 'funcion_pricipal', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 AMBOS">
        <strong> {!! Form::label('fecha_ingreso', 'Fecha de ingreso al puesto:  *') !!}</strong>
        {!! Form::date('experiencia[fecha_ingreso]',isset($experiencia) ? $experiencia->fecha_ingreso : null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. DD/MM/AAAA.','id' => 'fecha_ingreso', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 AMBOS">
        <strong>{!! Form::label('fecha_egreso', 'Fecha de egreso:  *') !!}</strong>
        {!! Form::date('experiencia[fecha_egreso]',isset($experiencia) ? $experiencia->fecha_egreso : null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. DD/MM/AAAA.','id' => 'fecha_egreso', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 AMBOS">
        <strong> {!! Form::label('lugares_ubicacion', 'Lugar en donde se ubica: *') !!}</strong>
        {!! Form::select('experiencia[lugares_ubicacion_id]',$ubicacion,isset($experiencia) ? $experiencia->lugares_ubicacion_id : null,['class'=>'form-control text-uppercase','id' => 'lugares_ubicacion_id','placeholder' => 'Selecciona una opción', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="row">
    <div class="form-group col-md-12">
        <strong>{!! Form::label('aclaraciones', 'Aclaraciones / Observaciones: ') !!}</strong>
        {!! Form::textarea('experiencia[observaciones]',isset($experiencia) ? $experiencia->observaciones : null,['class'=>'form-control text-uppercase alert-danger', 'id' => 'observaciones']) !!}

        <strong>{!! Form::label('aclaraciones', 'Todos los campos marcados con * son obligatorios.') !!}</strong>
    </div>
</div>

{!! Form::hidden('experiencia[tipoOperacion]',$tipoOperacion,['class'=>'form-control text-uppercase','id' => 'tipoOperacion']) !!}


<div class="all text-center">
        <br>
        <a href="{{route("experiencia_laboral.index")}}" class="btn btn-submit text-light">Ir a la sección anterior</a>
        {{ Form::button('Guardar e ir a la siguiente sección', ['type' => 'submit', 'class' => 'btn btn-submit text-light'] )}}
</div>
