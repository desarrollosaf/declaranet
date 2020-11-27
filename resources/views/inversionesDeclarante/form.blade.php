<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('inversiones.tipo_de_inversion', 'Tipo de inversión / activo:') !!}
        {!! Form::text('inversiones[tipo_de_inversion]',null,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'tipo_de_inversion']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('inversiones.descripcion_tipo_de_inversion', 'Fondo de inversión:') !!}
        {!! Form::text('inversiones[descripcion_tipo_de_inversion]',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'descripcion_tipo_de_inversion']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('inversiones.titular_inversion', 'Titular de la inversión, cuenta bancaria y otros tipo de valores:') !!}
        {!! Form::select('inversiones[titular_inversion]', ['1' => 'DECLARANTE', '2' => 'DECLARANTE CON PROPIEDAD DE TERCEROS'], null, ['placeholder' => 'SELECCIONE UNA OPCION',  'id' => 'inputSelect', 'onchange' => 'seleccionado()'])!!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row" id="mydiv" style="display: none">
    <div class="form-group col-md-4">
        {!! Form::label('inversiones.tipo_de_tercero', 'Tipo de Tercero:') !!}
        {!! Form::text('inversiones[tipo_de_tercero]',null,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'tipo_de_tercero']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('inversiones.nombre_del_tercero', 'Nombre del Tercero:') !!}
        {!! Form::text('inversiones[nombre_del_tercero]',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'nombre_del_tercero']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('inversiones.rfc_tercero', 'RFC Tercero:') !!}
        {!! Form::text('inversiones[rfc_tercero]',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'rfc_tercero']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('inversiones.ubicacion_inversion', '¿Dónde se localiza la inversión, cuenta bancaria y otro tipo de valores/activos?:') !!}
        {!! Form::text('inversiones[ubicacion_inversion]',null,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'ubicacion_inversion']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('inversiones.institucion_razon_social', 'Institución o razón social:') !!}
        {!! Form::text('inversiones[institucion_razon_social]',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'institucion_razon_social']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('inversiones.rfc_titular', 'RFC:') !!}
        {!! Form::text('inversiones[rfc_titular]',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'rfc_titular']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('inversiones.numero_cuenta_poliza', 'Número de cuenta contrato o póliza:') !!}
        {!! Form::text('inversiones[numero_cuenta_poliza]',null,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'numero_cuenta_poliza']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('inversiones.tipo_de_moneda', 'Tipo de moneda:') !!}
        {!! Form::text('inversiones[tipo_de_moneda]',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'tipo_de_moneda']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('inversiones.saldo_a_la_fecha', 'Saldo a la fecha de ingreso:') !!}
        {!! Form::text('inversiones[saldo_a_la_fecha]',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'saldo_a_la_fecha']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-12">
        {!! Form::label('inversiones.aclaraciones_observaciones', 'Aclaraciones / Observaciones:') !!}
        {!! Form::textarea('inversiones[aclaraciones_observaciones]', null, ['class'=>'form-control alert-danger',  'id' => 'aclaraciones_observaciones']) !!}
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

<script>
  function seleccionado(){
    var opt = $('#inputSelect').val();
    
   // alert(opt);
    if(opt=="1"){
        $('#mydiv').hide();
    }else{
        if(opt=="2"){
            $('#mydiv').show();
        }else{
            $('#mydiv').hide(); 
        }
        
   
    }
}
</script>
