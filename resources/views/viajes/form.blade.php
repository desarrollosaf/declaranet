<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('nombrePariente', 'Nombre del pariente : *') !!}</strong>
        {!! Form::text("viajes[nombre_pariente]", (isset($viajes->tipo_donativos_id)) ? $donativo->tipo_donativos_id : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. Carlos',  'id' => 'nombrePariente']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('primerApellido', 'Primer apellido : *') !!}</strong>
        {!! Form::text("viajes[primer_apellido]", (isset($viajes->tipo_donativos_id)) ? $donativo->tipo_donativos_id : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. Pérez',  'id' => 'primerApellido']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('segundoApellido', 'Segundo apellido : ') !!}</strong>
        {!! Form::text("viajes[segundo_apellido]", (isset($viajes->tipo_donativos_id)) ? $donativo->tipo_donativos_id : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. Pérez',  'id' => 'segundoApellido']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('cumpleañosPariente', 'Fecha de nacimiento : *') !!}</strong>
        {!! Form::date("viajes[cumpleaños_pariente]", (isset($viajes->tipo_donativos_id)) ? $donativo->tipo_donativos_id : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'cumpleañosPariente']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('rfcPariente', 'RFC : *') !!}</strong>
        {!! Form::text("viajes[rfc_pariente]", (isset($viajes->tipo_donativos_id)) ? $donativo->tipo_donativos_id : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. XAXX010101XXX',  'id' => 'rfcPariente', 'pattern' => '([A-Z]{4}[0-9]{6}[A-Z0-9]{0}{3})']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<hr>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('tipoResponsable', 'Responsable del posible conflicto de interés : *') !!}</strong>
        {!! Form::select("viajes[tipo_responsable_id]",$tipoResponsable, (isset($viajes->tipo_donativos_id)) ? $donativo->tipo_donativos_id : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'SELECCIONA UNA OPCIÓN',  'id' => 'tipoResponsable']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('otroEspecifique', 'Especifique : *') !!}</strong>
        {!! Form::text("viajes[especifique_otro_responsable]", (isset($viajes->tipo_donativos_id)) ? $donativo->tipo_donativos_id : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'P. EJ. ABUELO',  'id' => 'otroEspecifiqueRelacion', 'readOnly']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('tipoTercero', 'Tipo del tercero : *') !!}</strong>
        {!! Form::select("viajes[tipo_tercero_id]",$tipoTercero, (isset($viajes->tipo_donativos_id)) ? $donativo->tipo_donativos_id : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'SELECCIONA UNA OPCIÓN',  'id' => 'tipoTercero']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id='nombre-tercero'>
        <strong>{!! Form::label('nombreTercero', 'Nombre del tercero : *') !!}</strong>
        {!! Form::text("viajes[nombre_tercero]", (isset($viajes->tipo_donativos_id)) ? $donativo->tipo_donativos_id : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'P. ej. Juan Robles Rosas',  'id' => 'nombreTercero', 'readOnly']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id='razon-social'>
        <strong>{!! Form::label('razonSocialTercero', 'Razón social : *') !!}</strong>
        {!! Form::text("viajes[razon_social_tercero]", (isset($viajes->tipo_donativos_id)) ? $donativo->tipo_donativos_id : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'P. ej. Juan Robles Rosas',  'id' => 'razonSocialTercero']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('rfcTercero', 'RFC : *') !!}</strong>
        {!! Form::text("viajes[rfc_tercero]", (isset($viajes->tipo_donativos_id)) ? $donativo->tipo_donativos_id : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. XAXX010101XXX',  'id' => 'rfc', 'readOnly']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('ambitoTercero', 'Ámbito al que pertenece el tercero : *') !!}</strong>
        {!! Form::select("viajes[ambito_tercero_id]", $ambitoTercero, (isset($viajes->tipo_donativos_id)) ? $donativo->tipo_donativos_id : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'SELECCIONE UNA OPCIÓN',  'id' => 'ambitoTercero']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('especifiqueAmbito', 'Especifique : *') !!}</strong>
        {!! Form::text("viajes[especifique_ambito]", (isset($viajes->tipo_donativos_id)) ? $donativo->tipo_donativos_id : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'P. EJ. PÚBLICO',  'id' => 'especifiqueAmbito', 'readOnly']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div id='publico'>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('nivelGobierno', 'Nivel/orden de gobierno : *') !!}</strong>
            {!! Form::select("viajes[nivel_gobierno_id]", $nivelGobierno, (isset($viajes->tipo_donativos_id)) ? $donativo->tipo_donativos_id : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'SELECCIONE UNA OPCIÓN',  'id' => 'nivelGobierno']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('nombreEntePublico', 'Nombre del ente público : *') !!}</strong>
            {!! Form::select("viajes[nombre_ente_publico_id]", $nombreEntePublico, (isset($viajes->tipo_donativos_id)) ? $donativo->tipo_donativos_id : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'SELECCIONE UNA OPCIÓN',  'id' => 'nombreEntePublico']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('nombreAdscripcion', 'Nombre de adscripción : *') !!}</strong>
            {!! Form::text("viajes[nombre_adscripcion]", (isset($viajes->tipo_donativos_id)) ? $donativo->tipo_donativos_id : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'P. EJ. DESARROLLO DE TECNOLOGIA',  'id' => 'nombreAdscripcion']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('empleoCargo', 'Empleo, cargo o comisión : *') !!}</strong>
            {!! Form::text("viajes[empleo_cargo]", (isset($viajes->tipo_donativos_id)) ? $donativo->tipo_donativos_id : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'P. EJ. ANALISTA DE SISTEMAS',  'id' => 'empleoCargo']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
</div>
<div class="form-row" id='sector-productivo'>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('sectorProductivo', 'Sector productivo al que pertenece : *') !!}</strong>
        {!! Form::select("viajes[sector_productivo_id]", $sectorProductivo, (isset($viajes->tipo_donativos_id)) ? $donativo->tipo_donativos_id : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'SELECCIONE UNA OPCIÓN',  'id' => 'sectorProductivo']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('especifique-sector', 'Especifique : *') !!}</strong>
        {!! Form::text("viajes[especifique_sector]", (isset($viajes->tipo_donativos_id)) ? $donativo->tipo_donativos_id : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'ESPECIFIQUE',  'id' => 'especifique-sector', 'readOnly']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<hr>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('lugarViaje', 'Lugar del viaje : *') !!}</strong>
        {!! Form::select("viajes[lugar_viaje_id]", $lugarViaje, (isset($viajes->tipo_donativos_id)) ? $donativo->tipo_donativos_id : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'SELECCIONA UNA OPCIÓN',  'id' => 'lugarViaje']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('motivoViaje', 'Motivo del viaje : *') !!}</strong>
        {!! Form::select("viajes[motivo_viaje_id]", $motivoViaje, (isset($viajes->tipo_donativos_id)) ? $donativo->tipo_donativos_id : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'SELECCIONE UNA OPCIÓN',  'id' => 'motivoViaje']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('otroEspecifique', 'Especifique : *') !!}</strong>
        {!! Form::text("viajes[especifique_otro_motivo]", (isset($viajes->tipo_donativos_id)) ? $donativo->tipo_donativos_id : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'ESPECIFIQUE',  'id' => 'otroEspecifiqueViaje', 'readOnly']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('montoViaje', 'Monto del viaje : *') !!}</strong>
        {!! Form::text("viajes[monto_viaje]", (isset($viajes->tipo_donativos_id)) ? $donativo->tipo_donativos_id : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>' $000.000',  'id' => 'montoViaje']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('tipoMoneda', 'Tipo moneda : *') !!}</strong>
        {!! Form::select("viajes[tipo_moneda_id]", $tipoMoneda, (isset($viajes->tipo_donativos_id)) ? $donativo->tipo_donativos_id : 101,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'SELECCIONA UNA OPCIÓN',  'id' => 'tipoMoneda']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-12">
        <strong>{!! Form::label('declaracion.observaciones', 'Aclaraciones / Observaciones:') !!}</strong>
        {!! Form::textarea('viajes[observaciones_viajes]', (isset($viajes->tipo_donativos_id)) ? $donativo->tipo_donativos_id : null, ['class'=>'form-control alert-danger', 'id' => 'aclaraciones']) !!}
        <strong>{!! Form::label('aclaraciones', 'Todos los campos marcados con * son obligatorios.') !!}</strong>
    </div>
</div>
@section('scripts')
<script type="text/javascript">
    $(document).ready(function () {
        $("#razon-social").hide();
        $('#publico').hide();
        $('#sector-productivo').hide();
        $(".form-control").prop("required", true);
        $("#aclaraciones").prop("required", false)
        $("#segundoApellido").prop("required", false)
        $("#tipoResponsable").change(function () {
            let val = parseInt($(this).val());
            if (val == 23) {
                $("#otroEspecifiqueRelacion").prop("readOnly", false).val("");
            } else {
                $("#otroEspecifiqueRelacion").prop("readOnly", true).val("");
            }
        });
        $("#tipoTercero").change(function () {
            let val = parseInt($(this).val());
            if (val == 1) {
                $("#rfc").prop("readOnly", false).prop("pattern", '([A-Za-z]{4}[0-9]{6}[A-Za-z0-9]{0}{3})').attr("placeholder", "p. ej. XAXX010101XXX").val("");
                $("#nombre-tercero").show().find("input").prop("readOnly", false).prop("required", true);
                $("#razon-social").hide().find("input").prop("required", false).val("");
            } else {
                $("#rfc").prop("readOnly", false).prop("pattern", '([A-Za-z]{3}[0-9]{6}[A-Za-z0-9]{3})').attr("placeholder", "p. ej. XAX010101XXX").val("");
                $("#razon-social").show().find("input").prop("readOnly", false).prop("required", true);
                $("#nombre-tercero").hide().find("input").prop("required", false).prop("readOnly", false).val("");
            }
        });
        $("#motivoViaje").change(function () {
            let val = parseInt($(this).val());
            if (val == 5) {
                $("#otroEspecifiqueViaje").prop("readOnly", false).val("");
            } else {
                $("#otroEspecifiqueViaje").prop("readonly", true).val("");
            }
        });
        $("#ambitoTercero").change(function () {
            let val = parseInt($(this).val());
            if (val == 1) {
                $("#publico").show().find("input").prop("required", true);
                $("#publico").show().find("select").prop("required", true);
                $("#sector-productivo").hide().find("input").prop("required", false).val("");
                $("#sector-productivo").hide().find("select").prop("required", false).val("");
                $("#especifiqueAmbito").prop("readOnly", true).prop("required", false).val("");

            } else if (val == 2) {
                $("#publico").hide().find("input").prop("required", false).val("");
                $("#publico").hide().find("select").prop("required", false).val("");
                $("#sector-productivo").show().find("input").prop("required", true);
                $("#sector-productivo").show().find("select").prop("required", true);
                $("#especifiqueAmbito").prop("readOnly", true).prop("required", false).val("");

            } else  {
                $("#publico").hide().find("input").prop("required", false).val("");
                $("#publico").hide().find("select").prop("required", false).val("");
                $("#sector-productivo").hide().find("input").prop("required", false).val("");
                $("#sector-productivo").hide().find("select").prop("required", false).val("");
                $("#especifiqueAmbito").prop("readOnly", false).prop("required", true);
            }
        });
        $("#sectorProductivo").change(function (){
            let val = parseInt($(this).val());
            if (val == 17) {
                $("#especifique-sector").prop("readOnly", false).prop("required", true);
            } else {
                $("#especifique-sector").prop("readOnly", true).prop("required", false).val("");
            }
        })
    });
</script>
@endsection
