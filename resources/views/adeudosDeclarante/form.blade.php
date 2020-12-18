<div class="form-row">
    <div class="form-group col-md-4">
       <strong>{!! Form::label('adeudos.titular_adeudo_id', 'Titular del adeudo:') !!}</strong>
        {!! Form::select('adeudos[titular_adeudo_id]', $tipoDeclarante, isset($adeudos) ? $adeudos->titular_adeudo_id : null,['placeholder' => 'SELECCIONE UNA OPCION', 'class'=>'form-control text-uppercase ','id' => 'inputSelect', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong> {!! Form::label('adeudos.tipo_adeudo_id', ' Tipo de adeudo: ') !!}</strong>
        {!! Form::select('adeudos[tipo_adeudo_id]', $tipoAdeudos, isset($adeudos) ? $adeudos->tipo_adeudo_id : null,['placeholder' => 'SELECCIONE UNA OPCION', 'class'=>'form-control text-uppercase ','id' => 'tipo_adeudo', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="myEsp" style="display: none">
        <strong> {!! Form::label('adeudos.especifique_adeudo', 'Especifique:') !!}</strong>
        {!! Form::text('adeudos[especifique_adeudo]',isset($adeudos) ? $adeudos->especifique_adeudo : null,['class'=>'form-control text-uppercase ', 'placeholder'=>'p.ej. Tipo de Adeudo',  'id' => 'carrera']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row" id="mydiv" style="display: none">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('adeudos.codeudor_id', 'Codeudor:') !!}</strong>
        {!! Form::select('adeudos[codeudor_id]', $tipoPersona, isset($adeudos) ? $adeudos->codeudor_id : null,['placeholder' => 'SELECCIONE UNA OPCION', 'class'=>'form-control text-uppercase ','id' => 'codeudor']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong> {!! Form::label('adeudos.nombre_codeudor', 'Nombre del codeudor:', ['id' => 'labelcod']) !!}</strong>
        {!! Form::text('adeudos[nombre_codeudor]',isset($adeudos) ? $adeudos->nombre_codeudor : null,['class'=>'form-control text-uppercase ', 'placeholder'=>'',  'id' => 'nombre_del_codeudor', 'disabled' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong> {!! Form::label('adeudos.rfc_codeudor', 'RFC:') !!}</strong>
        {!! Form::text('adeudos[rfc_codeudor]',isset($adeudos) ? $adeudos->rfc_codeudor : null,['class'=>'form-control text-uppercase ', 'placeholder'=>'',  'id' => 'rfc_codeudor', 'disabled' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong> {!! Form::label('adeudos.numero_cuenta', 'Número de cuenta o contrato:') !!}</strong>
        {!! Form::text('adeudos[numero_cuenta]',isset($adeudos) ? $adeudos->numero_cuenta : null,['class'=>'form-control text-uppercase ', 'placeholder'=>'p.ej. 01010101',  'id' => 'inst_educativa']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="date">
        <strong>{!! Form::label('adeudos.fecha_adquisicion', 'Fecha de adquisición del adeudo/pasivo:') !!}</strong>
        {!! Form::date('adeudos[fecha_adquisicion]', isset($adeudos) ? $adeudos->fecha_adquisicion : null,['class'=>'form-control text-uppercase  tipo-titular', 'id' => 'fecha_adquisicion']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>  {!! Form::label('adeudos.monto_adeudo', 'Monto original del adeudo/pasivo:') !!}</strong>
        {!! Form::text('adeudos[monto_adeudo]', isset($adeudos) ? $adeudos->monto_adeudo : null,['class'=>'form-control text-uppercase ', 'placeholder'=>'p.ej. $1000.00 Mxn',  'id' => 'carrera']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong> {!! Form::label('adeudos.tipo_moneda', 'Tipo de moneda:') !!}</strong>
        {!! Form::text('adeudos[tipo_moneda]', isset($adeudos) ? $adeudos->tipo_moneda : null,['class'=>'form-control text-uppercase ', 'placeholder'=>'p.ej. Peso Mexicano',  'id' => 'inst_educativa']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong> {!! Form::label('adeudos.saldo_insoluto', 'Saldo insoluto (a la fecha de ingreso):') !!}</strong>
        {!! Form::text('adeudos[saldo_insoluto]', isset($adeudos) ? $adeudos->saldo_insoluto : null,['class'=>'form-control text-uppercase ', 'placeholder'=>'p.ej. $1000.00 Mxn',  'id' => 'inst_educativa']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong> {!! Form::label('adeudos.tipo_otorgante_id', 'Otorgante del crédito:') !!}</strong>
        {!! Form::select('adeudos[tipo_otorgante_id]', $tipoPersona, isset($adeudos) ? $adeudos->tipo_otorgante_id : null,['placeholder' => 'SELECCIONE UNA OPCION', 'class'=>'form-control text-uppercase ','id' => 'otorgante_credito', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong> {!! Form::label('adeudos.nombre_otorgante', 'Nombre:', ['id' => 'nom_credito']) !!}</strong>
        {!! Form::text('adeudos[nombre_otorgante]', isset($adeudos) ? $adeudos->nombre_otorgante : null,['class'=>'form-control text-uppercase ', 'placeholder'=>'',  'id' => 'nomC', 'disabled' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong> {!! Form::label('adeudos.rfc_otorgante', 'RFC:', ['id' => 'rfc_credito']) !!}</strong>
        {!! Form::text('adeudos[rfc_otorgante]', isset($adeudos) ? $adeudos->rfc_otorgante : null,['class'=>'form-control text-uppercase ', 'placeholder'=>'',  'id' => 'rfC', 'disabled' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('adeudos.ubicacion_adeudo_id', 'Localización del adeudo:') !!}</strong>
        {!! Form::select('adeudos[ubicacion_adeudo_id]', $lugarUbicacion, isset($adeudos) ? $adeudos->ubicacion_adeudo_id : null,['placeholder' => 'SELECCIONE UNA OPCION', 'class'=>'form-control text-uppercase ','id' => 'localizacion_adeudo', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="entidad" style="display: none">
        <strong> {!! Form::label('adeudos.entidad_federativa', 'Entidad federativa:') !!}</strong>
        {!! Form::text('adeudos[entidad_federativa]',isset($adeudos) ? $adeudos->entidad_federativa : null,['class'=>'form-control text-uppercase ', 'placeholder'=>'',  'id' => 'rfc_codeudor']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="paises" style="display: none">
        <strong> {!! Form::label('adeudos.pais_id', 'País dónde se localiza:') !!}</strong>
        {!! Form::select('adeudos[pais_id]',$paises, isset($adeudos) ? $adeudos->pais_id : null,['class'=>'form-control text-uppercase ', 'placeholder'=>'Seleccione una opcion','id' => 'pais_cuenta']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-12">
        <strong> {!! Form::label('adeudos.aclaraciones_observaciones', 'Aclaraciones / Observaciones:') !!}</strong>
        {!! Form::textarea('adeudos[aclaraciones_observaciones]',isset($adeudos) ? $adeudos->aclaraciones_observaciones : null,['class'=>'form-control text-uppercase  alert-danger']) !!}
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

        $('#date').change(function () {
  
            var fecha=$('#fecha_adquisicion').val();
            console.log(fecha);
        
        });
        
      

        $('#codeudor').change(function () {
           var valcod = $(this).val();
           console.log(valcod);
           if (valcod > "1") {
                document.getElementById('labelcod').innerText = 'Denominación o razón social:';
                document.getElementById('nombre_del_codeudor').placeholder = 'p.ej. Desarrollo y Redes S.A de C.V.';
                document.getElementById('rfc_codeudor').placeholder = 'p.ej.XXX010101';
                document.getElementById("nombre_del_codeudor").disabled = false;
                document.getElementById("rfc_codeudor").disabled = false;
            } else {
                document.getElementById('labelcod').innerText = 'Nombre:';
                document.getElementById('nombre_del_codeudor').placeholder = 'p.ej. Juan Perez';
                document.getElementById('rfc_codeudor').placeholder = 'p.ej.XXXX010101';
                document.getElementById("nombre_del_codeudor").disabled = false;
                document.getElementById("rfc_codeudor").disabled = false;
            }
           if(valcod == ""){
                document.getElementById('nombre_del_codeudor').placeholder = '';
                document.getElementById('rfc_codeudor').placeholder = '';
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
                document.getElementById('nomC').placeholder = 'p.ej. Desarrollo y Redes S.A de C.V.';
                document.getElementById('rfC').placeholder = 'p.ej.XXX010101';
                document.getElementById("nomC").disabled = false;
                document.getElementById("rfC").disabled = false;
            } else {
                document.getElementById('nom_credito').innerText = 'Nombre del otorgante:';
                document.getElementById('rfc_credito').innerText = 'RFC del otorgante:';
                document.getElementById('nomC').placeholder = 'p.ej. Juan Perez';
                document.getElementById('rfC').placeholder = 'p.ej.XXXX010101';
                document.getElementById("nomC").disabled = false;
                document.getElementById("rfC").disabled = false;
            }
           if(oto == ""){
                document.getElementById('nom_credito').innerText = 'Nombre:';
                document.getElementById('rfc_credito').innerText = 'RFC:';
                document.getElementById('nomC').placeholder = '';
                document.getElementById('rfC').placeholder = '';
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
