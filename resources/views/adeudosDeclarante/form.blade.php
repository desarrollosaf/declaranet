<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('inst_educativa', 'Titular del adeudo:') !!}
        {!! Form::select('inversiones[titular_inversion_id]', $tipoDeclarante, [],['placeholder' => 'SELECCIONE UNA OPCION', 'class'=>'form-control','id' => 'inputSelect', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('inst_educativa', ' Tipo de adeudo: ') !!}
        {!! Form::select('inversiones[titular_inversion_id]', $tipoAdeudos, [],['placeholder' => 'SELECCIONE UNA OPCION', 'class'=>'form-control','id' => 'tipo_adeudo', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="myEsp" style="display: none">
        {!! Form::label('carrera', 'Especifique:') !!}
        {!! Form::text('carrera',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'carrera']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row" id="mydiv" style="display: none">
    <div class="form-group col-md-4">
        {!! Form::label('inversiones.tipo_de_tercero_id', 'Codeudor:') !!}
        {!! Form::select('inversiones[tipo_de_tercero_id]', $tipoPersona, isset($inversiones) ? $inversiones->tipo_de_tercero_id : null,['placeholder' => 'SELECCIONE UNA OPCION', 'class'=>'form-control','id' => 'codeudor']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('inversiones.nombre_del_tercero', 'Nombre del codeudor:', ['id' => 'labelcod']) !!}
        {!! Form::text('inversiones[nombre_del_tercero]',isset($inversiones) ? $inversiones->nombre_del_tercero : null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'nombre_del_codeudor', 'disabled' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('inversiones.rfc_tercero', 'RFC:') !!}
        {!! Form::text('inversiones[rfc_tercero]',isset($inversiones) ? $inversiones->rfc_tercero : null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'rfc_codeudor', 'disabled' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('inst_educativa', 'Número de cuenta o contrato:') !!}
        {!! Form::text('inst_educativa',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'inst_educativa']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('inst_educativa', 'Fecha de adquisición del adeudo/pasivo:') !!}
        {!! Form::date('bienesinmuebles[fecha_adquisicion]', isset($bien) ? $bien->fecha_adquisicion : null,['class'=>'form-control tipo-titular', 'id' => 'fecha_adquisicion']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('carrera', 'Monto original del adeudo/pasivo:') !!}
        {!! Form::text('carrera',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'carrera']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('inst_educativa', 'Tipo de moneda:') !!}
        {!! Form::text('inst_educativa',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'inst_educativa']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('inst_educativa', 'Saldo insoluto (a la fecha de ingreso):') !!}
        {!! Form::text('inst_educativa',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'inst_educativa']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('inst_educativa', 'Otorgante del crédito:') !!}
        {!! Form::select('inversiones[titular_inversion_id]', $tipoPersona, [],['placeholder' => 'SELECCIONE UNA OPCION', 'class'=>'form-control','id' => 'otorgante_credito', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('inst_educativa', 'Nombre:', ['id' => 'nom_credito']) !!}
        {!! Form::text('inst_educativa',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'nomC', 'disabled' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('inst_educativa', 'RFC:', ['id' => 'rfc_credito']) !!}
        {!! Form::text('inst_educativa',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'rfC', 'disabled' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('inst_educativa', 'Localización del adeudo:') !!}
        {!! Form::select('inversiones[titular_inversion_id]', $lugarUbicacion, [],['placeholder' => 'SELECCIONE UNA OPCION', 'class'=>'form-control','id' => 'localizacion_adeudo', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="entidad" style="display: none">
        {!! Form::label('inst_educativa', 'Entidad federativa:') !!}
        {!! Form::text('inversiones[rfc_tercero]',isset($inversiones) ? $inversiones->rfc_tercero : null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'rfc_codeudor']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="paises" style="display: none">
        {!! Form::label('inversiones.pais_ubicacion_cuenta_id', 'País dónde se localiza:') !!}
        {!! Form::select('inversiones[pais_ubicacion_cuenta_id]',$paises, isset($inversiones) ? $inversiones->pais_ubicacion_cuenta_id : null,['class'=>'form-control', 'placeholder'=>'Seleccione una opcion','id' => 'pais_cuenta']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-12">
        {!! Form::label('aclaraciones', 'Aclaraciones / Observaciones:') !!}
        {!! Form::textarea('aclaraciones', null, ['class'=>'form-control alert-danger']) !!}
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

   
        @isset($inversiones)
            $('#inputSelect').change();
            $('#tipo_adeudo').change();
            $('#codeudor').change();
            $('#otorgante_credito').change();
            $('#localizacion_adeudo').change();
        @endisset

    });
</script>
@endsection