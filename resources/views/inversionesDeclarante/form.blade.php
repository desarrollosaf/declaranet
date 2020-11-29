<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('inversiones.tipo_de_inversion', 'Tipo de inversión / activo:') !!}
        {!! Form::select('inversiones[tipo_de_inversion]', isset($inveriones) ? $tipoInversion : [], isset($inversiones) ? $inversiones->tipo_de_inversion : null,['placeholder' => 'SELECCIONE UNA OPCION', 'class'=>'form-control','id' => 'tipo_de_inversion', 'onchange' => 'tipoInversion()']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('inversiones.descripcion_tipo_de_inversion', 'Fondo de inversión:') !!}
        {!! Form::select('inversiones[descripcion_tipo_de_inversion]', $subTipoInversion, [],['class'=>'form-control', 'id' => 'descripcion_tipo_de_inversion', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>

    <div class="form-group col-md-4">
        {!! Form::label('inversiones.titular_inversion', 'Titular de la inversión, cuenta bancaria y otros tipo de valores:') !!}
        {!! Form::select('inversiones[titular_inversion]', $tipoDeclarante, [],['placeholder' => 'SELECCIONE UNA OPCION', 'class'=>'form-control','id' => 'inputSelect', 'onchange' => 'seleccionado()']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>

<div class="form-row" id="mydiv" style="display: none">
    <div class="form-group col-md-4">
        {!! Form::label('inversiones.tipo_de_tercero', 'Tipo de Tercero:') !!}
        {!! Form::text('inversiones[tipo_de_tercero]',isset($inversiones) ? $inversiones->tipo_de_tercero : null,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'tipo_de_tercero']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('inversiones.nombre_del_tercero', 'Nombre del Tercero:') !!}
        {!! Form::text('inversiones[nombre_del_tercero]',isset($inversiones) ? $inversiones->nombre_del_tercero : null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'nombre_del_tercero']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('inversiones.rfc_tercero', 'RFC Tercero:') !!}
        {!! Form::text('inversiones[rfc_tercero]',isset($inversiones) ? $inversiones->rfc_tercero : null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'rfc_tercero']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('inversiones.ubicacion_inversion', '¿Dónde se localiza la inversión, cuenta bancaria y otro tipo de valores/activos?:') !!}
        {!! Form::select('inversiones[descripcion_tipo_de_inversion]', $subTipoInversion, [],['class'=>'form-control','id' => 'localizacion_cuenta', 'onchange' => 'pais()', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('inversiones.institucion_razon_social', 'Institución o razón social:') !!}
        {!! Form::text('inversiones[institucion_razon_social]',isset($inversiones) ? $inversiones->institucion_razon_social : null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'institucion_razon_social']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="ubicacion_rfc">
        {!! Form::label('inversiones.rfc_titular', 'RFC:') !!}
        {!! Form::text('inversiones[rfc_titular]',isset($inversiones) ? $inversiones->rfc_titular : null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'rfc_titular']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="paises" style="display: none">
        {!! Form::label('inversiones.pais_ubicacion_cuenta', 'País dónde se localiza:') !!}
        {!! Form::select('inversiones[pais_ubicacion_cuenta]',$paises, [],['class'=>'form-control', 'placeholder'=>'Seleccione una opcion','id' => 'pais_cuenta']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('inversiones.numero_cuenta_poliza', 'Número de cuenta contrato o póliza:') !!}
        {!! Form::text('inversiones[numero_cuenta_poliza]',isset($inversiones) ? $inversiones->numero_cuenta_poliza : null,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'numero_cuenta_poliza']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('inversiones.tipo_de_moneda', 'Tipo de moneda:') !!}
        {!! Form::text('inversiones[tipo_de_moneda]',isset($inversiones) ? $inversiones->tipo_de_moneda : null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'tipo_de_moneda']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('inversiones.saldo_a_la_fecha', 'Saldo a la fecha de ingreso:') !!}
        {!! Form::text('inversiones[saldo_a_la_fecha]',isset($inversiones) ? $inversiones->saldo_a_la_fecha : null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'saldo_a_la_fecha']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-12">
        {!! Form::label('inversiones.aclaraciones_observaciones', 'Aclaraciones / Observaciones:') !!}
        {!! Form::textarea('inversiones[aclaraciones_observaciones]',isset($inversiones) ? $inversiones->aclaraciones_observaciones : null,['class'=>'form-control alert-danger',  'id' => 'aclaraciones_observaciones']) !!}
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
        if(opt=="1"){
            $('#mydiv').hide();
        }else{
            if(opt=="3"){
                $('#mydiv').show();
            }else{
                $('#mydiv').hide(); 
            }
            
    
        }

    }

    function pais(){
        var option = $('#localizacion_cuenta').val();
        
        // alert(opt);
        if(option!="1"){
            $('#ubicacion_rfc').hide();
            $('#paises').show();
        }else{
            $('#ubicacion_rfc').show();
            $('#paises').hide();
        }

    }
</script>
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){

        });
        $("#tipo_de_inversion").on('change', function (){
            var tipoInversion = $(this).val();
            console.log(tipoInversion);
            $.ajax({
                url: "{{asset('getDescripcionInversion')}}/" + tipoInversion,
                type: 'get',
                dataType: 'json',
                success: function (response) {
                    console.log(response);
                    $("#descripcion_tipo_de_inversion").find('option').remove();
                    $("#descripcion_tipo_de_inversion").append('<option value="">-- Selecciona tipo inversion</option>');
                    $(response).each(function (i, v) { // indice, valor
                        $("#descripcion_tipo_de_inversion").append('<option value="' + v.id + '">' + v.valor + '</option>');
                    });
                }
            });
        });
    </script>
@endsection

