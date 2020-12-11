<div class="row">
    <div class="col-md-12">
        <h5> EMPLEO, CARGO O COMISIÓN / PUESTO</h5>
        <hr>
    </div>
    <hr>
    <div class="col-md-5"><strong>Ámbito / Sector en el que laboraste: *</strong></div>
    <div class="form-group col-md-5">
        {!! Form::select('experiencia[ambito_sector_id]', $ambitos_sectores, isset($experiencia) ? $experiencia->ambito_sector_id : null,['class'=>'form-control','id' => 'ambito_sector_id','placeholder' => 'Selecciona una opción']) !!}
    </div>
</div>
<div class="row">
    <div class="form-group col-md-4 PRIVADO">
        <strong>{!! Form::label('nombre_empresa', 'Nombre de la empresa, sociedad o asociación: *') !!} </strong>
        {!! Form::text('experiencia[nombre_empresa]',isset($experiencia) ? $experiencia->nombre_empresa : null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. Desarrollo S.A de C.V.','id' => 'nombre_empresa']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 PÚBLICO">
        <strong>{!! Form::label('nivel_orden_gobierno_id', 'Nivel / Orden de Gobierno: *') !!}</strong>
        {!! Form::select('experiencia[nivel_orden_gobierno_id]', $nivelOrdenGobierno,isset($experiencia) ? $experiencia->nivel_orden_gobierno_id : [],['class'=>'form-control','id' => 'nivel_orden_gobierno_id','placeholder' => 'Selecciona una opción']) !!}
    </div>
    <div class="form-group col-md-4 PRIVADO">
        <strong>{!! Form::label('celpersonal', 'RFC:  *') !!}</strong>
        {!! Form::text('experiencia[rfc]',isset($experiencia) ? $experiencia->rfc : null,['class'=>'form-control text-uppercase', 'placeholder'=>'P.ej.XXX01011001010.','id' => 'rfc']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 PÚBLICO">
        <strong>{!! Form::label('celpersonal', 'Ámbito público: *') !!}</strong>
        {!! Form::select('experiencia[ambito_publico_id]',$ambito,isset($experiencia) ? $experiencia->ambito_publico_id : [], ['class'=>'form-control','id' => 'ambito_publico_id' ,'placeholder' => 'Selecciona una opción']) !!}
    </div>
    <div class="form-group col-md-4 PRIVADO">
        <strong>{!! Form::label('celpersonal', 'Area:  *') !!}</strong>
        {!! Form::text('experiencia[area]',isset($experiencia) ? $experiencia->area : null,['class'=>'form-control text-uppercase', 'placeholder'=>'P.ej.DESARROLLO Y ACTUALIZACIÓN.','id' => 'area'])  !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 PÚBLICO">
        <strong>{!! Form::label('celpersonal', 'Nombre del Ente Público: *') !!}</strong>
        {!! Form::text('experiencia[ente_publico]',isset($experiencia) ? $experiencia->ente_publico : null,['class'=>'form-control text-uppercase', 'placeholder'=>'P.ej.DESARROLLO Y ACTUALIZACIÓN.','id' => 'ente_publico']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 PRIVADO">
        <strong>{!! Form::label('celpersonal', 'Puesto:  *') !!}</strong>
        {!! Form::text('experiencia[puesto]',isset($experiencia) ? $experiencia->puesto : null,['class'=>'form-control text-uppercase', 'placeholder'=>'P.ej.ANÁLISTA EN SISTEMAS.','id' => 'puesto']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 PÚBLICO">
        <strong>{!! Form::label('celpersonal', 'Área de adscripción:  *') !!}</strong>
        {!! Form::text('experiencia[area_adscripcion]',isset($experiencia) ? $experiencia->area_adscripcion : null,['class'=>'form-control text-uppercase', 'placeholder'=>'P.ej.ANÁLISTA EN SISTEMAS.','id' => 'sector_id']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 PRIVADO">
        <strong>{!! Form::label('celpersonal', 'Sector al que pertenece: *') !!}</strong>
        {!! Form::select('experiencia[sector_id]',$sectores,isset($experiencia) ? $experiencia->sector_id : null, ['class'=>'form-control','id' => 'sector_id','placeholder' => 'Selecciona una opción']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 PÚBLICO">
        <strong>{!! Form::label('celpersonal', 'Empleo, Cargo o Comisión:  *') !!}</strong>
        {!! Form::text('experiencia[cargo_comision]',isset($experiencia) ? $experiencia->cargo_comision : null,['class'=>'form-control text-uppercase', 'placeholder'=>'P.ej.ANÁLISTA EN SISTEMAS.','id' => 'cargo_comision']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 PÚBLICO">
        <strong>{!! Form::label('funcion_principal', 'Especifique función principal  *') !!}</strong>
        {!! Form::text('experiencia[funcion_principal]',isset($experiencia) ? $experiencia->funcion_principal : null,['class'=>'form-control text-uppercase', 'placeholder'=>'P.ej.DESARROLLO DE SISTEMAS DE INFORMACIÓN.','id' => 'funcion_principal']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 AMBOS">
        <strong> {!! Form::label('fecha_ingreso', 'Fecha de ingreso al puesto:  *') !!}</strong>
        {!! Form::date('experiencia[fecha_ingreso]',isset($experiencia) ? $experiencia->fecha_ingreso : null,['class'=>'form-control text-uppercase', 'placeholder'=>'P.ej.DD/MM/AAAA.','id' => 'fecha_ingreso']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 AMBOS">
        <strong>{!! Form::label('fecha_egreso', 'Fecha de egreso:  *') !!}</strong>
        {!! Form::date('experiencia[fecha_egreso]',isset($experiencia) ? $experiencia->fecha_egreso : null,['class'=>'form-control text-uppercase', 'placeholder'=>'P.ej.DD/MM/AAAA.','id' => 'fecha_egreso']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 AMBOS">
        <strong> {!! Form::label('lugares_ubicacion', 'Lugar en donde se ubica: *') !!}</strong>
        {!! Form::select('experiencia[lugares_ubicacion]',$ubicacion,isset($experiencia) ? $experiencia->lugares_ubicacion : null,['class'=>'form-control','id' => 'lugares_ubicacion','placeholder' => 'Selecciona una opción']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="row">
    <div class="form-group col-md-12">
        <strong>{!! Form::label('aclaraciones', 'Aclaraciones / Observaciones: ') !!}</strong>
        {!! Form::textarea('experiencia[observaciones]',isset($experiencia) ? $experiencia->observaciones : null,['class'=>'form-control text-uppercase alert-danger', 'placeholder'=>'','id' => 'observaciones']) !!}

        <strong>{!! Form::label('aclaraciones', 'Todos los campos marcados con * son obligatorios.') !!}</strong>
    </div>
</div>


