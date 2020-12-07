<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('adeudos.titular_adeudo_id', 'Titular del adeudo:') !!}
        {!! Form::select('adeudos[titular_adeudo_id]', $tipoDeclarante, isset($adeudos) ? $adeudos->titular_adeudo_id : null,['placeholder' => 'SELECCIONE UNA OPCION', 'class'=>'form-control','id' => 'inputSelect', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('adeudos.tipo_adeudo_id', ' Tipo de adeudo: ') !!}
        {!! Form::select('adeudos[tipo_adeudo_id]', $tipoAdeudos, isset($adeudos) ? $adeudos->tipo_adeudo_id : null,['placeholder' => 'SELECCIONE UNA OPCION', 'class'=>'form-control','id' => 'tipo_adeudo', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="myEsp" style="display: none">
        {!! Form::label('adeudos.especifique_adeudo', 'Especifique:') !!}
        {!! Form::text('adeudos[especifique_adeudo]',isset($adeudos) ? $adeudos->especifique_adeudo : null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'carrera']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row" id="mydiv" style="display: none">
    <div class="form-group col-md-4">
        {!! Form::label('adeudos.codeudor_id', 'Codeudor:') !!}
        {!! Form::select('adeudos[codeudor_id]', $tipoPersona, isset($adeudos) ? $adeudos->codeudor_id : null,['placeholder' => 'SELECCIONE UNA OPCION', 'class'=>'form-control','id' => 'codeudor']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('adeudos.nombre_codeudor', 'Nombre del codeudor:', ['id' => 'labelcod']) !!}
        {!! Form::text('adeudos[nombre_codeudor]',isset($adeudos) ? $adeudos->nombre_codeudor : null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'nombre_del_codeudor', 'disabled' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('adeudos.rfc_codeudor', 'RFC:') !!}
        {!! Form::text('adeudos[rfc_codeudor]',isset($adeudos) ? $adeudos->rfc_codeudor : null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'rfc_codeudor', 'disabled' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('adeudos.numero_cuenta', 'Número de cuenta o contrato:') !!}
        {!! Form::text('adeudos[numero_cuenta]',isset($adeudos) ? $adeudos->numero_cuenta : null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'inst_educativa']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('adeudos.fecha_adquisicion', 'Fecha de adquisición del adeudo/pasivo:') !!}
        {!! Form::date('adeudos[fecha_adquisicion]', isset($adeudos) ? $adeudos->fecha_adquisicion : null,['class'=>'form-control tipo-titular', 'id' => 'fecha_adquisicion']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('adeudos.monto_adeudo', 'Monto original del adeudo/pasivo:') !!}
        {!! Form::text('adeudos[monto_adeudo]', isset($adeudos) ? $adeudos->monto_adeudo : null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'carrera']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('adeudos.tipo_moneda', 'Tipo de moneda:') !!}
        {!! Form::text('adeudos[tipo_moneda]', isset($adeudos) ? $adeudos->tipo_moneda : null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'inst_educativa']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('adeudos.saldo_insoluto', 'Saldo insoluto (a la fecha de ingreso):') !!}
        {!! Form::text('adeudos[saldo_insoluto]', isset($adeudos) ? $adeudos->saldo_insoluto : null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'inst_educativa']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('adeudos.tipo_otorgante_id', 'Otorgante del crédito:') !!}
        {!! Form::select('adeudos[tipo_otorgante_id]', $tipoPersona, isset($adeudos) ? $adeudos->tipo_otorgante_id : null,['placeholder' => 'SELECCIONE UNA OPCION', 'class'=>'form-control','id' => 'otorgante_credito', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('adeudos.nombre_otorgante', 'Nombre:', ['id' => 'nom_credito']) !!}
        {!! Form::text('adeudos[nombre_otorgante]', isset($adeudos) ? $adeudos->nombre_otorgante : null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'nomC', 'disabled' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('adeudos.rfc_otorgante', 'RFC:', ['id' => 'rfc_credito']) !!}
        {!! Form::text('adeudos[rfc_otorgante]', isset($adeudos) ? $adeudos->rfc_otorgante : null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'rfC', 'disabled' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('adeudos.ubicacion_adeudo_id', 'Localización del adeudo:') !!}
        {!! Form::select('adeudos[ubicacion_adeudo_id]', $lugarUbicacion, isset($adeudos) ? $adeudos->ubicacion_adeudo_id : null,['placeholder' => 'SELECCIONE UNA OPCION', 'class'=>'form-control','id' => 'localizacion_adeudo', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="entidad" style="display: none">
        {!! Form::label('adeudos.entidad_federativa', 'Entidad federativa:') !!}
        {!! Form::text('adeudos[entidad_federativa]',isset($adeudos) ? $adeudos->entidad_federativa : null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'rfc_codeudor']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="paises" style="display: none">
        {!! Form::label('adeudos.pais_id', 'País dónde se localiza:') !!}
        {!! Form::select('adeudos[pais_id]',$paises, isset($adeudos) ? $adeudos->pais_id : null,['class'=>'form-control', 'placeholder'=>'Seleccione una opcion','id' => 'pais_cuenta']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-12">
        {!! Form::label('adeudos.aclaraciones_observaciones', 'Aclaraciones / Observaciones:') !!}
        {!! Form::textarea('adeudos[aclaraciones_observaciones]',isset($adeudos) ? $adeudos->aclaraciones_observaciones : null,['class'=>'form-control alert-danger']) !!}
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

        $('#inputSelect').change(function () {
           var opt = $(this).val();
           console.log(opt);
           if (opt=="3" || opt=="4" || opt=="6" || opt=="8" || opt=="10" || opt=="13" || opt=="15" || opt=="18" || opt=="19" || opt=="24") {
                $('#mydiv').show();
            } else {
                $('#mydiv').hide();
            }
        });

        $('#tipo_adeudo').change(function () {
           var value = $(this).val();
           console.log(value);
           if (value == "7") {
                $('#myEsp').show();
            } else {
                $('#myEsp').hide();
            }
        });

        $('#codeudor').change(function () {
           var valcod = $(this).val();
           console.log(valcod);
           if (valcod > "1") {
                document.getElementById('labelcod').innerText = 'Denominación o razón social:';
                document.getElementById("nombre_del_codeudor").disabled = false;
                document.getElementById("rfc_codeudor").disabled = false;
            } else {
                document.getElementById('labelcod').innerText = 'Nombre:';
                document.getElementById("nombre_del_codeudor").disabled = false;
                document.getElementById("rfc_codeudor").disabled = false;
            }
           if(valcod == ""){
                document.getElementById("nombre_del_codeudor").disabled = true;
                document.getElementById("rfc_codeudor").disabled = true;
            }
           
        });

        $('#otorgante_credito').change(function () {
           var oto = $(this).val();
           console.log(oto);
           if (oto > "1") {
                document.getElementById('nom_credito').innerText = 'Institución o razón social del otorgante:';
                document.getElementById('rfc_credito').innerText = 'RFC de la Institución o razón social:';
                document.getElementById("nomC").disabled = false;
                document.getElementById("rfC").disabled = false;
            } else {
                document.getElementById('nom_credito').innerText = 'Nombre del otorgante:';
                document.getElementById('rfc_credito').innerText = 'RFC del otorgante:';
                document.getElementById("nomC").disabled = false;
                document.getElementById("rfC").disabled = false;
            }
           if(oto == ""){
                document.getElementById('nom_credito').innerText = 'Nombre:';
                document.getElementById('rfc_credito').innerText = 'RFC:';
                document.getElementById("nomC").disabled = true;
                document.getElementById("rfC").disabled = true;
            }
           
        });

        $('#localizacion_adeudo').change(function () {
           var loc = $(this).val();
           console.log(loc);
           if (loc > "1") {
                $('#paises').show();
                $('#entidad').hide();
            } else {
                $('#entidad').show();
                $('#paises').hide();
            }
           if(loc == ""){
                $('#entidad').hide();
                $('#paises').hide();
           }
        });

   
        @isset($adeudos)
            $('#inputSelect').change();
            $('#tipo_adeudo').change();
            $('#codeudor').change();
            $('#otorgante_credito').change();
            $('#localizacion_adeudo').change();
        @endisset

    });
</script>
@endsection