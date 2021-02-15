<div class="form-row">
    <div class="form-group col-md-4">
       <strong>{!! Form::label('adeudos.titular_adeudo_id', 'Titular del adeudo: *') !!}</strong>
        {!! Form::select('adeudos[titular_adeudo_id]', $tipoDeclarante, isset($adeudos) ? $adeudos->titular_adeudo_id : null,['placeholder' => 'SELECCIONE UNA OPCION', 'class'=>'form-control text-uppercase color-tercero','id' => 'inputSelect', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong> {!! Form::label('adeudos.tipo_adeudo_id', ' Tipo de adeudo: *') !!}</strong>
        {!! Form::select('adeudos[tipo_adeudo_id]', $tipoAdeudos, isset($adeudos) ? $adeudos->tipo_adeudo_id : null,['placeholder' => 'SELECCIONE UNA OPCION', 'class'=>'form-control text-uppercase color-tercero','id' => 'tipo_adeudo', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="myEsp" >
        <strong> {!! Form::label('adeudos.especifique_adeudo', 'Plazo en meses: *') !!}</strong>
        {!! Form::text('adeudos[plazo]',isset($adeudos) ? $adeudos->plazo : null,['class'=>'form-control text-uppercase color-tercero', 'placeholder'=>'p.ej. 3 meses',  'id' => 'plazo', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4" id="myEsp" >
        <strong> {!! Form::label('adeudos.especifique_adeudo', 'Especifique:') !!}</strong>
        {!! Form::text('adeudos[especifique_adeudo]',isset($adeudos) ? $adeudos->especifique_adeudo : null,['class'=>'form-control text-uppercase color-tercero', 'placeholder'=>'p.ej. Tipo de Adeudo',  'id' => 'especifique_adeudo', 'disabled' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong> {!! Form::label('adeudos.numero_cuenta', 'Número de cuenta o contrato: *') !!}</strong>
        {!! Form::number('adeudos[numero_cuenta]',isset($adeudos) ? $adeudos->numero_cuenta : null,['class'=>'form-control text-uppercase color-tercero', 'placeholder'=>'p.ej. 01010101',  'id' => 'inst_educativa', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="date">
        <strong>{!! Form::label('adeudos.fecha_adquisicion', 'Fecha de adquisición del adeudo/pasivo: *') !!}</strong>
        {!! Form::date('adeudos[fecha_adquisicion]', isset($adeudos) ? $adeudos->fecha_adquisicion : null,['class'=>'form-control text-uppercase  color-tercero', 'id' => 'fecha_adquisicion', 'required' => 'true', 'max'=>date("Y-m-d")]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong>  {!! Form::label('adeudos.monto_adeudo', 'Monto original del adeudo/pasivo: *') !!}</strong>
        {!! Form::number('adeudos[monto_adeudo]', isset($adeudos) ? $adeudos->monto_adeudo : null,['class'=>'form-control text-uppercase color-tercero', 'placeholder'=>'p.ej. $1000.00 Mxn',  'id' => 'carrera', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong> {!! Form::label('adeudos.tipo_moneda', 'Tipo de moneda: *') !!}</strong>
        {!! Form::select('adeudos[tipo_moneda]', $tipoMoneda, isset($adeudos) ? $adeudos->tipo_moneda : null,['class'=>'form-control text-uppercase color-tercero', 'placeholder'=>'SELECCIONE UNA OPCION',  'id' => 'inst_educativa', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong> {!! Form::label('adeudos.saldo_insoluto', 'Saldo insoluto (a la fecha de ingreso): *') !!}</strong>
        {!! Form::number('adeudos[saldo_insoluto]', isset($adeudos) ? $adeudos->saldo_insoluto : null,['class'=>'form-control text-uppercase color-tercero', 'placeholder'=>'p.ej. $1000.00 Mxn',  'id' => 'inst_educativa', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row" id="mydiv" style="display: none">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('adeudos.codeudor_id', 'Codeudor:') !!}</strong>
        {!! Form::select('adeudos[codeudor_id]', $tipoPersona, isset($adeudos) ? $adeudos->codeudor_id : null,['placeholder' => 'SELECCIONE UNA OPCION', 'class'=>'form-control text-uppercase color-tercero','id' => 'codeudor']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong> {!! Form::label('adeudos.nombre_codeudor', 'Nombre del codeudor:', ['id' => 'labelcod']) !!}</strong>
        {!! Form::text('adeudos[nombre_codeudor]',isset($adeudos) ? $adeudos->nombre_codeudor : null,['class'=>'form-control text-uppercase color-tercero', 'placeholder'=>'p. ej. Juan Pérez.',  'id' => 'nombre_del_codeudor', 'disabled' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong> {!! Form::label('adeudos.rfc_codeudor', 'RFC:') !!}</strong>
        {!! Form::text('adeudos[rfc_codeudor]',isset($adeudos) ? $adeudos->rfc_codeudor : null,['class'=>'form-control text-uppercase color-tercero', 'placeholder'=>'p.ej.XXXX010101',  'id' => 'rfc_codeudor', 'disabled' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <strong> {!! Form::label('adeudos.tipo_otorgante_id', 'Otorgante del crédito: *') !!}</strong>
        {!! Form::select('adeudos[tipo_otorgante_id]', $tipoPersona, isset($adeudos) ? $adeudos->tipo_otorgante_id : null,['placeholder' => 'SELECCIONE UNA OPCION', 'class'=>'form-control text-uppercase color-tercero','id' => 'otorgante_credito', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong> {!! Form::label('adeudos.nombre_otorgante', 'Nombre:', ['id' => 'nom_credito']) !!}</strong>
        {!! Form::text('adeudos[nombre_otorgante]', isset($adeudos) ? $adeudos->nombre_otorgante : null,['class'=>'form-control text-uppercase color-tercero', 'placeholder'=>'p. ej. Juan Pérez.',  'id' => 'nomC', 'disabled' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong> {!! Form::label('adeudos.rfc_otorgante', 'RFC:', ['id' => 'rfc_credito']) !!}</strong>
        {!! Form::text('adeudos[rfc_otorgante]', isset($adeudos) ? $adeudos->rfc_otorgante : null,['class'=>'form-control text-uppercase color-tercero', 'placeholder'=>'p. ej. XXXX010101',  'id' => 'rfC', 'disabled' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('adeudos.ubicacion_adeudo_id', 'Localización del adeudo:') !!}</strong>
        {!! Form::select('adeudos[ubicacion_adeudo_id]', $lugarUbicacion, isset($adeudos) ? $adeudos->ubicacion_adeudo_id : null,['placeholder' => 'SELECCIONE UNA OPCION', 'class'=>'form-control text-uppercase color-tercero','id' => 'localizacion_adeudo', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="entidad" style="display: none">
        <strong> {!! Form::label('adeudos.entidad_federativa', 'Entidad federativa:') !!}</strong>
        {!! Form::select('adeudos[entidad_federativa]', $entidades, isset($adeudos) ? $adeudos->entidad_federativa : null,['class'=>'form-control text-uppercase color-tercero', 'placeholder'=>'SELECCIONE UNA OPCION',  'id' => 'entidades']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="paises" style="display: none">
        <strong> {!! Form::label('adeudos.pais_id', 'País dónde se localiza:') !!}</strong>
        {!! Form::select('adeudos[pais_id]',$paises, isset($adeudos) ? $adeudos->pais_id : null,['class'=>'form-control text-uppercase color-tercero', 'placeholder'=>'Seleccione una opcion','id' => 'pais_cuenta']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-12">
        <strong> {!! Form::label('adeudos.aclaraciones_observaciones', 'Aclaraciones / Observaciones:') !!}</strong>
        {!! Form::textarea('adeudos[aclaraciones_observaciones]',isset($adeudos) ? $adeudos->aclaraciones_observaciones : null,['class'=>'form-control text-uppercase  alert-danger']) !!}
        <strong>{!! Form::label('aclaraciones', 'Todos los campos marcados con * son obligatorios.') !!}</strong>
    </div>
</div>
<div class="modal fade bd-example-modal-lg" id="modalDeclaracion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Advertencia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>NO PUEDES TENER INVERSIONES FUTURAS DEBE SER ANTES DEL DIA DE HOY</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
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
           if (opt=="3" || opt=="4" || opt=="6" || opt=="8" || opt=="10" || opt=="13" || opt=="15" || opt=="18" || opt=="19" || opt=="24") {
                $('#mydiv').show();
                $("#codeudor").prop("required", true)
                $("#nombre_del_codeudor").prop("required", true)
                $("#rfc_codeudor").prop("required", true)
                $(".color-tercero").addClass("alert-danger");
            } else {
                $('#mydiv').hide();
                $("#codeudor").prop("required", false)
                $("#nombre_del_codeudor").prop("required", false)
                $("#rfc_codeudor").prop("required", false)
                $("#codeudor").val("");
                $("#nombre_del_codeudor").val("");
                $("#rfc_codeudor").val("");
                $(".color-tercero").removeClass("alert-danger");
            }
        });


        $('#tipo_adeudo').change(function () {
           var value = $(this).val();
            if (value == "7") {
               document.getElementById("especifique_adeudo").disabled = false;
               $("#especifique_adeudo").prop("required", true)
            } else {
                document.getElementById("especifique_adeudo").disabled = true;
                $("#especifique_adeudo").prop("required", false)
            }
            if(value == ""){
                document.getElementById("especifique_adeudo").disabled = true;
            }


        });

        $('#date').change(function () {

            var fecha = $('#fecha_adquisicion').val();
            var nuevo = fecha.replace(/[-]/gi, '/');
            var dia_futuro =  new Date(nuevo);
            var hoy =  new Date();
            if (hoy <= dia_futuro){
                $("#modalDeclaracion").modal("show");
                $("#fecha_adquisicion").val("");
            }

        });


        $('#codeudor').change(function () {
           var valcod = $(this).val();
           if (valcod > "1") {
                document.getElementById('labelcod').innerText = 'Denominación o razón social:';
                document.getElementById('nombre_del_codeudor').placeholder = 'p.ej. Desarrollo y Redes S.A de C.V.';
                document.getElementById('rfc_codeudor').placeholder = 'p.ej.XXX010101';
                $('#rfc_codeudor').attr("pattern", '[A-Z]{4}[0-9]{6}[A-Z0-9]{2}');
                $('#rfc_codeudor').attr("title", 'Ingresa RFC a 12 dígitos');
                document.getElementById("nombre_del_codeudor").disabled = false;
                document.getElementById("rfc_codeudor").disabled = false;
            } else {
                document.getElementById('labelcod').innerText = 'Nombre:';
                document.getElementById('nombre_del_codeudor').placeholder = 'p.ej. Juan Perez';
                document.getElementById('rfc_codeudor').placeholder = 'p.ej.XXXX010101';
                $('#rfc_codeudor').attr("pattern", '[A-Z]{4}[0-9]{6}[A-Z0-9]{3}');
                $('#rfc_codeudor').attr("title", 'Ingresa RFC a 13 dígitos');
                document.getElementById("nombre_del_codeudor").disabled = false;
                document.getElementById("rfc_codeudor").disabled = false;
            }
           if(valcod == ""){
                document.getElementById('nombre_del_codeudor').placeholder = 'p. ej. Juan Pérez.';
                document.getElementById('rfc_codeudor').placeholder = 'p. ej. XXXX010101';
                document.getElementById("nombre_del_codeudor").disabled = true;
                document.getElementById("rfc_codeudor").disabled = true;
            }

        });

        $('#otorgante_credito').change(function () {
           var oto = $(this).val();
           if (oto > "1") {
                document.getElementById('nom_credito').innerText = 'Institución o razón social del otorgante:';
                document.getElementById('rfc_credito').innerText = 'RFC de la Institución o razón social:';
                document.getElementById('nomC').placeholder = 'p.ej. Desarrollo y Redes S.A de C.V.';
                document.getElementById('rfC').placeholder = 'p.ej.XXX010101XAX';
                $('#rfC').attr("pattern", '[A-Z]{3}[0-9]{6}[A-Z0-9]{3}');
                $('#rfC').attr("title", 'Ingresa RFC a 12 dígitos');
                $("#nomC").prop("required", true)
                $("#rfC").prop("required", true)
                document.getElementById("nomC").disabled = false;
                document.getElementById("rfC").disabled = false;
            } else {
                document.getElementById('nom_credito').innerText = 'Nombre del otorgante:';
                document.getElementById('rfc_credito').innerText = 'RFC del otorgante:';
                document.getElementById('nomC').placeholder = 'p.ej. Juan Perez';
                document.getElementById('rfC').placeholder = 'p.ej.XXXX010101XAX';
                $('#rfC').attr("pattern", '[A-Z]{4}[0-9]{6}[A-Z0-9]{0,3}');
                $('#rfC').attr("title", 'Ingresa RFC a 10 o 13 dígitos');
                $("#nomC").prop("required", true)
                $("#rfC").prop("required", false)
                document.getElementById("nomC").disabled = false;
                document.getElementById("rfC").disabled = false;
            }
           if(oto == ""){
                document.getElementById('nom_credito').innerText = 'Nombre:';
                document.getElementById('rfc_credito').innerText = 'RFC:';
                document.getElementById('nomC').placeholder = 'p. ej. Juan Pérez.';
                document.getElementById('rfC').placeholder = 'p. ej. XXXX010101';
                $("#nomC").prop("required", false)
                $("#rfC").prop("required", false)
                document.getElementById("nomC").disabled = true;
                document.getElementById("rfC").disabled = true;
            }

        });

        $('#localizacion_adeudo').change(function () {
           var loc = $(this).val();
           if (loc > "1") {
                $('#paises').show();
                $('#entidad').hide();
                $("#pais_cuenta").prop("required", true)
                $("#entidades").prop("required", false)
            } else {
                $('#entidad').show();
                $('#paises').hide();
                $("#entidades").prop("required", true)
                $("#pais_cuenta").prop("required", false)
            }
           if(loc == ""){
                $('#entidad').hide();
                $('#paises').hide();
                $("#entidades").val("");
                $("#pais_cuenta").val("");
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
