<div class="row">
    <div class="col-md-12">
        <h5> EMPLEO, CARGO O COMISIÓN / PUESTO</h5>
    </div>
    <hr>
    <div class="col-md-4"><strong>ÁMBITO / SECTOR EN EL QUE LABORASTE:</strong></div>
    <div class="form-group col-md-4">
        {!! Form::select('experiencia[ambito_sector_id]', $ambitos_sectores, [],['class'=>'form-control','id' => 'ambito']) !!}
    </div>
    <div class="col-md-4"></div>
    <div class="form-group col-md-4 PRIVADO">
        {!! Form::label('nombre_empresa', 'NOMBRE DE LA EMPRESA,SOCIEDAD O ASOCIACIÓN:  *') !!}
        {!! Form::text('experiencia[nombre_empresa]',isset($experiencia) ? $experiencia->nombre_empresa : null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. Desarrollo S.A de C.V.','id' => 'nombre_empresa']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 PÚBLICO">
        {!! Form::label('nivel_orden_gobierno_id', 'NIVEL/ORDEN DE GOBIERNO: *') !!}
        {!! Form::select('experiencia[nivel_orden_gobierno_id]', $nivelOrdenGobierno,isset($experiencia) ? $experiencia->nivel_orden_gobierno_id : [],['class'=>'form-control','id' => 'nivel_orden_gobierno_id']) !!}
    </div>
    <div class="form-group col-md-4 PRIVADO">
        {!! Form::label('celpersonal', 'RFC:  *') !!}
        {!! Form::text('experiencia[rfc]',isset($experiencia) ? $experiencia->rfc : null,['class'=>'form-control text-uppercase', 'placeholder'=>'P.ej.XXX01011001010.','id' => 'rfc']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 PÚBLICO">
        {!! Form::label('celpersonal', 'ÁMBITO PÚBLICO: *') !!}
        {!! Form::select('experiencia[ambito_publico_id]',$ambito,isset($experiencia) ? $experiencia->ambito_publico_id : [], ['class'=>'form-control','id' => 'ambito_publico_id']) !!}
    </div>
    <div class="form-group col-md-4 PRIVADO">
        {!! Form::label('celpersonal', 'AREA:  *') !!}
        {!! Form::text('experiencia[area]',isset($experiencia) ? $experiencia->area : null,['class'=>'form-control text-uppercase', 'placeholder'=>'P.ej.DESARROLLO Y ACTUALIZACIÓN.','id' => 'area'])  !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 PÚBLICO">
        {!! Form::label('celpersonal', 'NOMBRE DEL ENTE PUBLICO: *') !!}
        {!! Form::text('experiencia[ente_publico]',isset($experiencia) ? $experiencia->ente_publico : null,['class'=>'form-control text-uppercase', 'placeholder'=>'P.ej.DESARROLLO Y ACTUALIZACIÓN.','id' => 'ente_publico']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 PRIVADO">
        {!! Form::label('celpersonal', 'PUESTO:  *') !!}
        {!! Form::text('experiencia[puesto]',isset($experiencia) ? $experiencia->puesto : null,['class'=>'form-control text-uppercase', 'placeholder'=>'P.ej.ANÁLISTA EN SISTEMAS.','id' => 'puesto']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 PÚBLICO">
        {!! Form::label('celpersonal', 'ÁREA DE ADSCRIPCIÓN:  *') !!}
        {!! Form::text('experiencia[area_adscripcion]',isset($experiencia) ? $experiencia->area_adscripcion : null,['class'=>'form-control text-uppercase', 'placeholder'=>'P.ej.ANÁLISTA EN SISTEMAS.','id' => 'sector_id']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 PRIVADO">
        {!! Form::label('celpersonal', 'SECTOR AL QUE PERTENECE: *') !!}
        {!! Form::select('experiencia[sector_id]',$sectores,isset($experiencia) ? $experiencia->sector_id : null, ['class'=>'form-control','id' => 'sector_id']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 PÚBLICO">
        {!! Form::label('celpersonal', 'EMPLEO, CARGO O COMISIÓN:  *') !!}
        {!! Form::text('experiencia[cargo_comision]',isset($experiencia) ? $experiencia->cargo_comision : null,['class'=>'form-control text-uppercase', 'placeholder'=>'P.ej.ANÁLISTA EN SISTEMAS.','id' => 'cargo_comision']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 PRIVADO">
        {!! Form::label('funcion_principal', 'ESPECIFIQUE FUNCIÓN PRINCIPAL:  *') !!}
        {!! Form::text('experiencia[funcion_principal]',isset($experiencia) ? $experiencia->funcion_principal : null,['class'=>'form-control text-uppercase', 'placeholder'=>'P.ej.DESARROLLO DE SISTEMAS DE INFORMACIÓN.','id' => 'funcion_principal']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 AMBOS">
        {!! Form::label('fecha_ingreso', 'FECHA DE INGRESO AL PUESTO:  *') !!}
        {!! Form::text('experiencia[fecha_ingreso]',isset($experiencia) ? $experiencia->fecha_ingreso : null,['class'=>'form-control text-uppercase', 'placeholder'=>'P.ej.DD/MM/AAAA.','id' => 'fecha_ingreso']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 AMBOS">
        {!! Form::label('fecha_egreso', 'FECHA DE EGRESO:  *') !!}
        {!! Form::text('experiencia[fecha_egreso]',isset($experiencia) ? $experiencia->fecha_egreso : null,['class'=>'form-control text-uppercase', 'placeholder'=>'P.ej.DD/MM/AAAA.','id' => 'fecha_egreso']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 PÚBLICO">
        {!! Form::label('lugares_ubicacion', 'LUGAR DONDE SE UBICA: *') !!}
        {!! Form::select('experiencia[lugares_ubicacion]',$ubicacion,isset($experiencia) ? $experiencia->lugares_ubicacion : null,['class'=>'form-control','id' => 'lugares_ubicacion']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-12 AMBOS">
        {!! Form::label('observaciones', 'ACLARACIONES/OBSERVACIONES: *') !!}
        {!! Form::textarea('experiencia[observaciones]',isset($experiencia) ? $experiencia->observaciones : null,['class'=>'form-control text-uppercase','id' => 'observaciones']) !!}
    </div>
</div>
