<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('apoyo.titular_apoyo_id', 'Titular del apoyo o beneficio:') !!}</strong>
        {!! Form::select('apoyo[titular_apoyo_id]', $parentesco, isset($apoyo) ? $apoyo->titular_apoyo_id : null,['class'=>'form-control', 'placeholder'=>'SELECCIONE UNA OPCION','id' => 'titular_apoyo', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('apoyo.especifique_titular', 'Especifique otro:') !!}</strong>
        {!! Form::text('apoyo[especifique_titular]',isset($apoyo) ? $apoyo->especifique_titular : null,['class'=>'form-control', 'placeholder'=>'p.ej.Concuño',  'id' => 'especifique_otro', 'disabled' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>

    <div class="form-group col-md-4">
        <strong> {!! Form::label('apoyo.nombre_programa', 'Nombre del programa:') !!}</strong>
        {!! Form::text('apoyo[nombre_programa]',isset($apoyo) ? $apoyo->nombre_programa : null,['class'=>'form-control', 'placeholder'=>'p.ej.Pensión para Adultos Mayores',  'id' => 'nombre_programa', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong> {!! Form::label('apoyo.nombre_institucion', 'Institución que otorga el apoyo:') !!}</strong>
        {!! Form::text('apoyo[nombre_institucion]',isset($apoyo) ? $apoyo->nombre_institucion : null,['class'=>'form-control', 'placeholder'=>'p.ej.SEDESOL',  'id' => 'nombre_institucion', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong> {!! Form::label('apoyo.nivel_orden_gobierno_id', 'Nivel u orden de Gobierno:') !!}</strong>
        {!! Form::select('apoyo[nivel_orden_gobierno_id]', $nivelGobierno, isset($apoyo) ? $apoyo->nivel_orden_gobierno_id : null,['class'=>'form-control', 'placeholder'=>'SELECCIONE UNA OPCION','id' => 'nivel_orden_gobierno_id', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="tipo_apoyo_id">
        <strong> {!! Form::label('apoyo.tipo_apoyo_id', 'Tipo de apoyo:') !!}</strong>
        {!! Form::select('apoyo[tipo_apoyo_id]', $tipoApoyo, isset($apoyo) ? $apoyo->tipo_apoyo_id : null,['class'=>'form-control', 'placeholder'=>'SELECCIONE UNA OPCION','id' => 'tipo_apoyo', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong> {!! Form::label('apoyo.especifique_apoyo', 'Especifique otro:') !!}</strong>
        {!! Form::text('apoyo[especifique_apoyo]',isset($apoyo) ? $apoyo->especifique_apoyo : null,['class'=>'form-control', 'placeholder'=>'p.ej.Donación',  'id' => 'especifique_apoyo', 'disabled' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('apoyo.forma_recepcion_id', 'Forma de recepción del beneficio:') !!}</strong>
        {!! Form::select('apoyo[forma_recepcion_id]', $formaRecepcion, isset($apoyo) ? $apoyo->forma_recepcion_id : null,['class'=>'form-control', 'placeholder'=>'SELECCIONE UNA OPCION','id' => 'forma_recepcion', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="moneda" style="display: none">
        <strong>{!! Form::label('apoyo.tipo_de_moneda_id', 'Tipo de moneda:') !!}</strong>
        {!! Form::select('apoyo[tipo_de_moneda_id]', $tipoMoneda, isset($apoyo) ? $apoyo->tipo_de_moneda_id : null,['class'=>'form-control', 'placeholder'=>'SELECCIONE UNA OPCION','id' => 'tipo_de_moneda_id', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="esp" style="display: none">
        <strong>{!! Form::label('apoyo.especifique_especie', 'Especifique especie:') !!}</strong>
        {!! Form::text('apoyo[especifique_especie]',isset($apoyo) ? $apoyo->especifique_especie : null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'especifique_especie']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="espRep" >
        <strong>{!! Form::label('apoyo.saldo_a_la_fecha', 'Especifique forma de recepción') !!}</strong>
        {!! Form::text('apoyo[saldo_a_la_fecha]',isset($apoyo) ? $apoyo->saldo_a_la_fecha : null,['class'=>'form-control', 'placeholder'=>'p.ej.Cheque',  'id' => 'saldo_a_la_fecha', 'disabled' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('apoyo.monto_mensual', 'Monto mensual aproximado del beneficio') !!}</strong>
        {!! Form::text('apoyo[monto_mensual]',isset($apoyo) ? $apoyo->monto_mensual : null,['class'=>'form-control', 'placeholder'=>'p.ej.$10,000 Mxn',  'id' => 'monto_mensual', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-12">
        <strong>{!! Form::label('apoyo.aclaraciones_observaciones', 'Aclaraciones / Observaciones:') !!}</strong>
        {!! Form::textarea('apoyo[aclaraciones_observaciones]',isset($apoyo) ? $apoyo->aclaraciones_observaciones : null,['class'=>'form-control alert-danger',  'id' => 'aclaraciones_observaciones']) !!}
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
    $(document).ready(function(){


        $('#titular_apoyo').change(function () {
           var opt = $(this).val();
           if(opt == "23"){
            document.getElementById("especifique_otro").disabled = false;
           }else{
            document.getElementById("especifique_otro").disabled = true;
           }
        });

        $('#tipo_apoyo').change(function () {
            var value = $(this).val();
            if(value == "4"){
                document.getElementById("especifique_apoyo").disabled = false;
            }else{
                document.getElementById("especifique_apoyo").disabled = true;
            }
        });


        $('#forma_recepcion').change(function () {
            var val = $(this).val();
            if(val!="1"){
                $('#moneda').hide();
                $('#esp').show();
                $('#espRep').hide();
            }else{
                $('#moneda').show();
                $('#esp').hide();
                $('#espRep').hide();
            }
            if(val == ""){
                $('#moneda').hide();
                $('#esp').hide();
                $('#espRep').show();
            }
        });

        @isset($apoyo)
            $('#titular_apoyo').change();
            $('#tipo_apoyo').change();
            $('#forma_recepcion').change();
        @endisset

    });
</script>
@endsection



