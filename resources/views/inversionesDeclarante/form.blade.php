<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('inversiones.tipo_de_inversion_id', 'Tipo de inversión / activo:') !!}
        {!! Form::select('inversiones[tipo_de_inversion_id]', $tipoInversion, isset($inversiones) ? $inversiones->tipo_de_inversion_id : null,['placeholder' => 'SELECCIONE UNA OPCION', 'class'=>'form-control','id' => 'tipo_de_inversion', 'onchange' => 'tipoInversion()', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('inversiones.descripcion_tipo_inversion_id', 'Fondo de inversión:') !!}
        {!! Form::select('inversiones[descripcion_tipo_inversion_id]', $subTipoInversion, isset($inversiones) ? $inversiones->descripcion_tipo_inversion_id : null,['placeholder' => 'SELECCIONE UNA OPCION','class'=>'form-control', 'id' => 'descripcion_tipo_inversion', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>

    <div class="form-group col-md-4">
        {!! Form::label('inversiones.titular_inversion_id', 'Titular de la inversión, cuenta bancaria y otros tipo de valores:') !!}
        {!! Form::select('inversiones[titular_inversion_id]', $tipoDeclarante, isset($inversiones) ? $inversiones->titular_inversion_id : null,['placeholder' => 'SELECCIONE UNA OPCION', 'class'=>'form-control','id' => 'inputSelect', 'onchange' => 'seleccionado()', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>

<div class="form-row" id="mydiv" style="display: none">
    <div class="form-group col-md-4">
        {!! Form::label('inversiones.tipo_de_tercero_id', 'Tipo de Tercero:') !!}
        {!! Form::select('inversiones[tipo_de_tercero_id]', $tipoPersona, isset($inversiones) ? $inversiones->tipo_de_tercero_id : null,['placeholder' => 'SELECCIONE UNA OPCION', 'class'=>'form-control','id' => 'tipo_de_tercero', 'onchange' => 'ShowSelected()']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('inversiones.nombre_del_tercero', 'Nombre del Tercero:', ['id' => 'labelter']) !!}
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
        {!! Form::label('inversiones.ubicacion_inversion_id', '¿Dónde se localiza la inversión, cuenta bancaria y otro tipo de valores/activos?:') !!}
        {!! Form::select('inversiones[ubicacion_inversion_id]', $ubicacionInversion, isset($inversiones) ? $inversiones->ubicacion_inversion_id : null,['class'=>'form-control','id' => 'localizacion_cuenta', 'onchange' => 'pais()', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('inversiones.institucion_razon_social', 'Institución o razón social:') !!}
        {!! Form::text('inversiones[institucion_razon_social]',isset($inversiones) ? $inversiones->institucion_razon_social : null,['class'=>'form-control', 'placeholder'=>'p.ej.Desarrollo y Redes S.A de C.V.',  'id' => 'institucion_razon_social', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="ubicacion_rfc">
        {!! Form::label('inversiones.rfc_titular', 'RFC:') !!}
        {!! Form::text('inversiones[rfc_titular]',isset($inversiones) ? $inversiones->rfc_titular : null,['class'=>'form-control', 'placeholder'=>'Ingresa RFC',  'id' => 'rfc_titular']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="paises" style="display: none">
        {!! Form::label('inversiones.pais_ubicacion_cuenta_id', 'País dónde se localiza:') !!}
        {!! Form::select('inversiones[pais_ubicacion_cuenta_id]',$paises, isset($inversiones) ? $inversiones->pais_ubicacion_cuenta_id : null,['class'=>'form-control', 'placeholder'=>'Seleccione una opcion','id' => 'pais_cuenta']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('inversiones.numero_cuenta_poliza', 'Número de cuenta contrato o póliza:') !!}
        {!! Form::text('inversiones[numero_cuenta_poliza]',isset($inversiones) ? $inversiones->numero_cuenta_poliza : null,['class'=>'form-control text-uppercase', 'placeholder'=>'p.ej.01010101',  'id' => 'numero_cuenta_poliza', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('inversiones.tipo_de_moneda_id', 'Tipo de moneda:') !!}
        {!! Form::select('inversiones[tipo_de_moneda_id]',$tipoMoneda, isset($inversiones) ? $inversiones->tipo_de_moneda_id : null,['class'=>'form-control', 'placeholder'=>'Seleccione una opcion','id' => 'tipo_de_moneda', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('inversiones.saldo_a_la_fecha', 'Saldo a la fecha de ingreso:') !!}
        {!! Form::text('inversiones[saldo_a_la_fecha]',isset($inversiones) ? $inversiones->saldo_a_la_fecha : null,['class'=>'form-control', 'placeholder'=>'p.ej.$50000 Mxn',  'id' => 'saldo_a_la_fecha', 'required' => 'true']) !!}
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
   
        if(opt=="3" || opt=="4" || opt=="6" || opt=="8" || opt=="10" || opt=="13" || opt=="15" || opt=="18" || opt=="19" || opt=="24"){
            $('#mydiv').show();
        }else{
            $('#mydiv').hide(); 
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

    function ShowSelected() { 
        var cod = document.getElementById("tipo_de_tercero").value;
        var txt = document.getElementById("labelter").value;  
        /* Para obtener el texto */
        var combo = document.getElementById("tipo_de_tercero");
        var selected = combo.options[combo.selectedIndex].value;  
        if (selected > "1") {
            document.getElementById('labelter').innerText = 'Razón social del tercero:';
        } else {
            document.getElementById('labelter').innerText = 'Nombre del Tercero:';
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
                    $("#descripcion_tipo_inversion").find('option').remove();
                    $("#descripcion_tipo_inversion").append('<option value="">-- Selecciona tipo inversion</option>');
                    $(response).each(function (i, v) { // indice, valor
                        $("#descripcion_tipo_inversion").append('<option value="' + v.id + '">' + v.valor + '</option>');
                    });
                }
            });
        });
    </script>
@endsection

