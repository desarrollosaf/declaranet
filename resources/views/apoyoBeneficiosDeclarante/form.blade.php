<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('apoyo.titular_apoyo_id', 'Titular del apoyo o beneficio:') !!}
        {!! Form::select('apoyo[titular_apoyo_id]', $parentesco, [],['class'=>'form-control', 'placeholder'=>'SELECCIONE UNA OPCION','id' => 'titular_apoyo', 'required' => 'true', 'onchange' => 'seleccionado()']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('apoyo.especifique_titular', 'Especifique otro:') !!}
        {!! Form::text('apoyo[especifique_titular]',isset($inversiones) ? $inversiones->numero_cuenta_poliza : null,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'especifique_otro', 'disabled' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>

    <div class="form-group col-md-4">
        {!! Form::label('apoyo.nombre_programa', 'Nombre del programa:') !!}
        {!! Form::text('apoyo[nombre_programa]',isset($inversiones) ? $inversiones->numero_cuenta_poliza : null,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'nombre_programa']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('apoyo.nombre_institucion', 'Institución que otorga el apoyo:') !!}
        {!! Form::text('apoyo[nombre_institucion]',isset($inversiones) ? $inversiones->numero_cuenta_poliza : null,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'nombre_institucion']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('apoyo.nivel_orden_gobierno_id', 'Nivel u orden de Gobierno:') !!}
        {!! Form::select('apoyo[nivel_orden_gobierno_id]', $nivelGobierno, [],['class'=>'form-control', 'placeholder'=>'SELECCIONE UNA OPCION','id' => 'nivel_orden_gobierno_id', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="tipo_apoyo_id">
        {!! Form::label('apoyo.tipo_apoyo_id', 'Tipo de apoyo:') !!}
        {!! Form::select('apoyo[tipo_apoyo_id]', $tipoApoyo, [],['class'=>'form-control', 'placeholder'=>'SELECCIONE UNA OPCION','id' => 'tipo_apoyo', 'required' => 'true', 'onchange' => 'apoyo()']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('apoyo.especifique_apoyo', 'Especifique otro:') !!}
        {!! Form::text('apoyo[especifique_apoyo]',isset($inversiones) ? $inversiones->numero_cuenta_poliza : null,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'especifique_apoyo', 'disabled' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('apoyo.forma_recepcion_id', 'Forma de recepción del beneficio:') !!}
        {!! Form::select('apoyo[forma_recepcion_id]', $formaRecepcion, [],['class'=>'form-control', 'placeholder'=>'SELECCIONE UNA OPCION','id' => 'forma_recepcion', 'required' => 'true', 'onchange' => 'recepcion()']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="moneda" style="display: none">
        {!! Form::label('apoyo.tipo_de_moneda_id', 'Tipo de moneda:') !!}
        {!! Form::select('apoyo[tipo_de_moneda_id]', $tipoMoneda, [],['class'=>'form-control', 'placeholder'=>'SELECCIONE UNA OPCION','id' => 'tipo_de_moneda_id', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="esp" style="display: none">
        {!! Form::label('apoyo.especifique_especie', 'Especifique especie:') !!}
        {!! Form::text('apoyo[especifique_especie]',isset($inversiones) ? $inversiones->saldo_a_la_fecha : null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'especifique_especie']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="espRep" >
        {!! Form::label('apoyo.saldo_a_la_fecha', 'Especifique forma de recepción') !!}
        {!! Form::text('apoyo[saldo_a_la_fecha]',isset($inversiones) ? $inversiones->saldo_a_la_fecha : null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'saldo_a_la_fecha', 'disabled' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('apoyo.monto_mensual', 'Monto mensual aproximado del beneficio') !!}
        {!! Form::text('apoyo[monto_mensual]',isset($inversiones) ? $inversiones->numero_cuenta_poliza : null,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'monto_mensual']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-12">
        {!! Form::label('apoyo.aclaraciones_observaciones', 'Aclaraciones / Observaciones:') !!}
        {!! Form::textarea('apoyo[aclaraciones_observaciones]',isset($inversiones) ? $inversiones->aclaraciones_observaciones : null,['class'=>'form-control alert-danger',  'id' => 'aclaraciones_observaciones']) !!}
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
        var opt = $('#titular_apoyo').val();
        if(opt == "23"){
            document.getElementById("especifique_otro").disabled = false;
        }else{
            document.getElementById("especifique_otro").disabled = true;
        }
    }

    function apoyo(){
        var opt = $('#tipo_apoyo').val();
        if(opt == "4"){
            document.getElementById("especifique_apoyo").disabled = false;
        }else{
            document.getElementById("especifique_apoyo").disabled = true;
        }
    }

    function recepcion(){
        var option = $('#forma_recepcion').val();

        if(option!="1"){
            $('#moneda').hide();
            $('#esp').show();
            $('#espRep').hide();
        }else{
            $('#moneda').show();
            $('#esp').hide();
            $('#espRep').hide();
        }
        if(option == ""){
            $('#moneda').hide();
            $('#esp').hide();
            $('#espRep').show();
        }

    }

</script>

