<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('inversiones.tipo_de_inversion_id', 'Tipo de inversión / activo:') !!}</strong>
        {!! Form::select('inversiones[tipo_de_inversion_id]', $tipoInversion, isset($inversiones) ? $inversiones->tipo_de_inversion_id : null,['placeholder' => 'SELECCIONE UNA OPCION', 'class'=>'form-control color-tercero','id' => 'tipo_de_inversion', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('inversiones.descripcion_tipo_inversion_id', 'Fondo de inversión:') !!}</strong>
        {!! Form::select('inversiones[descripcion_tipo_inversion_id]', $subTipoInversion, isset($inversiones) ? $inversiones->descripcion_tipo_inversion_id : null,['placeholder' => 'SELECCIONE UNA OPCION','class'=>'form-control color-tercero', 'id' => 'descripcion_tipo_inversion', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>

    <div class="form-group col-md-4">
        <strong style="line-height : 15px;"> {!! Form::label('inversiones.titular_inversion_id', 'Titular de la inversión, cuenta bancaria y otros tipo de valores:') !!}</strong>
        {!! Form::select('inversiones[titular_inversion_id]', $tipoDeclarante, isset($inversiones) ? $inversiones->titular_inversion_id : null,['placeholder' => 'SELECCIONE UNA OPCION', 'class'=>'form-control color-tercero','id' => 'inputSelect', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>

<div class="form-row" id="mydiv" style="display: none">
    <div class="form-group col-md-4">
        <strong> {!! Form::label('inversiones.tipo_de_tercero_id', 'Tipo de Tercero:') !!}</strong>
        {!! Form::select('inversiones[tipo_de_tercero_id]', $tipoPersona, isset($inversiones) ? $inversiones->tipo_de_tercero_id : null,['placeholder' => 'SELECCIONE UNA OPCION', 'class'=>'form-control color-tercero','id' => 'tipo_de_tercero']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4"  id="mydivNT" style="display: none">
        <strong> {!! Form::label('inversiones.nombre_del_tercero', 'Nombre del Tercero:', ['id' => 'labelter']) !!}</strong>
        {!! Form::text('inversiones[nombre_del_tercero]',isset($inversiones) ? $inversiones->nombre_del_tercero : null,['class'=>'form-control text-uppercase color-tercero', 'placeholder'=>'p.ej. Juan Robles',  'id' => 'nombre_del_tercero']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4"  id="mydivRT" style="display: none">
        <strong>{!! Form::label('inversiones.rfc_tercero', 'RFC Tercero:') !!}</strong>
        {!! Form::text('inversiones[rfc_tercero]',isset($inversiones) ? $inversiones->rfc_tercero : null,['class'=>'form-control text-uppercase color-tercero', 'placeholder'=>'p.ej. XXXX010101',  'id' => 'rfc_tercero']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong style="line-height : 15px;"> {!! Form::label('inversiones.ubicacion_inversion_id', '¿Dónde se localiza la inversión, cuenta bancaria y otro tipo de valores/activos?:') !!}</strong>
        {!! Form::select('inversiones[ubicacion_inversion_id]', $ubicacionInversion, isset($inversiones) ? $inversiones->ubicacion_inversion_id : null,['class'=>'form-control color-tercero','id' => 'localizacion_cuenta', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong> {!! Form::label('inversiones.institucion_razon_social', 'Institución o razón social:') !!}</strong>
        {!! Form::text('inversiones[institucion_razon_social]',isset($inversiones) ? $inversiones->institucion_razon_social : null,['class'=>'form-control text-uppercase color-tercero', 'placeholder'=>'p.ej.Desarrollo y Redes S.A de C.V.',  'id' => 'institucion_razon_social', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="ubicacion_rfc">
        <strong> {!! Form::label('inversiones.rfc_titular', 'RFC:') !!}</strong>
        {!! Form::text('inversiones[rfc_titular]',isset($inversiones) ? $inversiones->rfc_titular : null,['class'=>'form-control text-uppercase color-tercero', 'placeholder'=>'Ingresa RFC',  'id' => 'rfc_titular']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="paises" style="display: none">
        <strong> {!! Form::label('inversiones.pais_ubicacion_cuenta_id', 'País dónde se localiza:') !!}</strong>
        {!! Form::select('inversiones[pais_ubicacion_cuenta_id]',$paises, isset($inversiones) ? $inversiones->pais_ubicacion_cuenta_id : null,['class'=>'form-control text-uppercase color-tercero', 'placeholder'=>'Seleccione una opcion','id' => 'pais_cuenta']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('inversiones.numero_cuenta_poliza', 'Número de cuenta contrato o póliza:') !!}</strong>
        {!! Form::number('inversiones[numero_cuenta_poliza]',isset($inversiones) ? $inversiones->numero_cuenta_poliza : null,['class'=>'form-control text-uppercase color-tercero', 'placeholder'=>'p.ej.01010101',  'id' => 'numero_cuenta_poliza', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('inversiones.tipo_de_moneda_id', 'Tipo de moneda:') !!}</strong>
        {!! Form::select('inversiones[tipo_de_moneda_id]',$tipoMoneda, isset($inversiones) ? $inversiones->tipo_de_moneda_id : null,['class'=>'form-control text-uppercase color-tercero', 'placeholder'=>'Seleccione una opcion','id' => 'tipo_de_moneda', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong> {!! Form::label('inversiones.saldo_a_la_fecha', 'Saldo a la fecha de ingreso:') !!}</strong>
        {!! Form::number('inversiones[saldo_a_la_fecha]',isset($inversiones) ? $inversiones->saldo_a_la_fecha : null,['class'=>'form-control color-tercero', 'placeholder'=>'p.ej.$50000 Mxn',  'id' => 'saldo_a_la_fecha', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-12">
        <strong>{!! Form::label('inversiones.aclaraciones_observaciones', 'Aclaraciones / Observaciones:') !!}</strong>
        {!! Form::textarea('inversiones[aclaraciones_observaciones]',isset($inversiones) ? $inversiones->aclaraciones_observaciones : null,['class'=>'form-control alert-danger',  'id' => 'aclaraciones_observaciones']) !!}
    </div>
</div>

<div class="text-center">
    <br>
    {{ Form::button('Ir a la sección anterior', ['type' => 'button', 'class' => 'btn btn-submit text-light'] )}}
    {{ Form::button('Guardar e ir a la siguiente sección', ['type' => 'submit', 'class' => 'btn btn-submit text-light'] )}}   
</div>


@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){


        $("#tipo_de_inversion").on('change', function (){
            var tipoInversion = $(this).val();
            $.ajax({
                url: "{{asset('getDescripcionInversion')}}/" + tipoInversion,
                type: 'get',
                dataType: 'json',
                success: function (response) {
                    console.log(response);
                    $("#descripcion_tipo_inversion").find('option').remove();
                    $("#descripcion_tipo_inversion").append('<option value="">SELECCIONE UNA OPCION</option>');
                    $(response).each(function (i, v) { // indice, valor
                        $("#descripcion_tipo_inversion").append('<option value="' + v.id + '">' + v.valor + '</option>');
                    });
                }
            });
        });


        $('#inputSelect').change(function () {
           var opt = $(this).val();
           if (opt=="3" || opt=="4" || opt=="6" || opt=="8" || opt=="10" || opt=="13" || opt=="15" || opt=="18" || opt=="19" || opt=="24") {
                $('#mydiv').show();
                $("#tipo_de_tercero").prop("required", true)
                $("#rfc_tercero").prop("required", true)
                $("#nombre_del_tercero").prop("required", true)
                $("#rfc_tercero").prop("required", true)
                $(".color-tercero").addClass("alert-danger");
            } else {
                $('#mydiv').hide();
                $("#tipo_de_tercero").prop("required", false)
                $("#nombre_del_tercero").prop("required", false)
                $("#rfc_tercero").prop("required", false)
                $("#tipo_de_tercero").val("");
                $("#nombre_del_tercero").val("");
                $("#rfc_tercero").val("");
                $(".color-tercero").removeClass("alert-danger");
            }
        });

        $('#localizacion_cuenta').change(function () {
           var value = $(this).val();
            if(value!="1"){
                $('#ubicacion_rfc').hide();
                $('#paises').show();
                $("#pais_cuenta").prop("required", true)
            }else{
                $('#ubicacion_rfc').show();
                $('#paises').hide();
                $("#pais_cuenta").prop("required", false)
            }
        });


        $('#tipo_de_tercero').change(function () {
            var cod = document.getElementById("tipo_de_tercero").value;
            var txt = document.getElementById("labelter").value;
            /* Para obtener el texto */
            var combo = document.getElementById("tipo_de_tercero");
            var selected = combo.options[combo.selectedIndex].value;
            if (selected > "1") {
                $('#mydivNT').show();
                $('#mydivRT').show();
                $('#rfc_tercero').attr("pattern", '[A-Z]{4}[0-9]{6}[A-Z0-9]{2}');
                $('#rfc_tercero').attr("title", 'Ingresa RFC a 12 dígitos');              
                document.getElementById('labelter').innerText = 'Razón social del tercero:';
            } else {
                $('#mydivNT').show();
                $('#mydivRT').show();
                $('#rfc_tercero').attr("pattern", '[A-Z]{4}[0-9]{6}[A-Z0-9]{3}'); 
                $('#rfc_tercero').attr("title", 'Ingresa RFC a 13 dígitos'); 
                document.getElementById('labelter').innerText = 'Nombre del Tercero:';
            }
            if(selected == ""){
                $('#mydivNT').hide();
                $('#mydivRT').hide();
           }
        });

       

        @isset($inversiones)
            $('#inputSelect').change();
            $('#tipo_de_tercero').change();
            $('#localizacion_cuenta').change();
        @endisset

    });
</script>
@endsection

