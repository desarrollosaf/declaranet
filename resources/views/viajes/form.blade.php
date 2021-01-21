<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('tipoResponsable', 'Responsable del posible conflicto de interés : *') !!}</strong>
        {!! Form::select("viajes[tipo]",$tipoResponsable, (isset($viajes->tipo_donativos_id)) ? $donativo->tipo_donativos_id : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'SELECCIONA UNA OPCIÓN',  'id' => 'tipoResponsable']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('otroEspecifique', 'Especifique : *') !!}</strong>
        {!! Form::text("viajes[otro]", (isset($viajes->tipo_donativos_id)) ? $donativo->tipo_donativos_id : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'ESPECIFIQUE',  'id' => 'otroEspecifique']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('nombreTercero', 'Nombre del tercero o terceros : *') !!}</strong>
        {!! Form::text("viajes[nombre]", (isset($viajes->tipo_donativos_id)) ? $donativo->tipo_donativos_id : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'nombreTercero']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('tipoTercero', 'Tipo del tercero : *') !!}</strong>
        {!! Form::select("viajes[tipo]",$tipoTercero, (isset($viajes->tipo_donativos_id)) ? $donativo->tipo_donativos_id : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'SELECCIONA UNA OPCIÓN',  'id' => 'tipoTercero']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('rfcTercero', 'RFC del tercero o terceros : *') !!}</strong>
        {!! Form::text("viajes[rfc]", (isset($viajes->tipo_donativos_id)) ? $donativo->tipo_donativos_id : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'rfcTercero']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('montoViaje', 'Monto del viaje : *') !!}</strong>
        {!! Form::text("viajes[monto]", (isset($viajes->tipo_donativos_id)) ? $donativo->tipo_donativos_id : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>' $000.000',  'id' => 'montoViaje']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('tipoMoneda', 'Tipo moneda : *') !!}</strong>
        {!! Form::select("viajes[tipo]", $tipoMoneda, (isset($viajes->tipo_donativos_id)) ? $donativo->tipo_donativos_id : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'SELECCIONA UNA OPCIÓN',  'id' => 'tipoMoneda']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('lugarViaje', 'Lugar del viaje : *') !!}</strong>
        {!! Form::select("viajes[lugar]", $lugarViaje, (isset($viajes->tipo_donativos_id)) ? $donativo->tipo_donativos_id : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'SELECCIONA UNA OPCIÓN',  'id' => 'lugarViaje']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('motivoViaje', 'Motivo del viaje : *') !!}</strong>
        {!! Form::select("viajes[motivo]", $motivoViaje, (isset($viajes->tipo_donativos_id)) ? $donativo->tipo_donativos_id : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'SELECCIONE UNA OPCIÓN',  'id' => 'motivoViaje']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('otroEspecifique', 'Especifique : *') !!}</strong>
        {!! Form::text("viajes[otro]", (isset($viajes->tipo_donativos_id)) ? $donativo->tipo_donativos_id : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'ESPECIFIQUE',  'id' => 'otroEspecifique']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
<div class="form-group col-md-12">
        <strong>{!! Form::label('declaracion.observaciones', 'Aclaraciones / Observaciones:') !!}</strong>
        {!! Form::textarea('declaracion[observaciones]', (isset($viajes->tipo_donativos_id)) ? $donativo->tipo_donativos_id : null, ['class'=>'form-control alert-danger']) !!}
  </div>
</div>