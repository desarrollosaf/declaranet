<div class="form-row">
    <div class="form-group col-md-4">
       <strong> {!! Form::label('tipo_beneficio_id', 'Tipo de beneficio:') !!}</strong>
        {!! Form::select('beneficio_privado[tipo_beneficio_id]',$tipoBeneficio, isset($beneficio) ? $beneficio->tipo_beneficio_id : [],['class'=>'form-control', 'placeholder'=>'SELECCIONA UNA OPCIÓN',  'id' => 'tipo_beneficio_id', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong> {!! Form::label('tipo_beneficio', 'Especifique:') !!}</strong>
        {!! Form::text('beneficio_privado[tipo_beneficio]',isset($beneficio) ? $beneficio->tipo_beneficio :null,['class'=>'form-control', 'placeholder'=>'P. ej. Beca', 'disabled'=>'disabled',  'id' => 'tipo_beneficio', 'type' => 'text']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('beneficiario_id', 'Beneficiario:') !!}</strong>
        {!! Form::select('beneficio_privado[beneficiario_id]', $beneficiarios, isset($beneficio) ? $beneficio->beneficiario_id : [],['class'=>'form-control', 'placeholder'=>'SELECCIONA UNA OPCIÓN',  'id' => 'beneficiario_id', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <strong> {!! Form::label('beneficiario', 'Especifique:') !!}</strong>
        {!! Form::text('beneficio_privado[beneficiario]',isset($beneficio) ? $beneficio->beneficiario :null,['class'=>'form-control', 'placeholder'=>'p. ej. Concuño', 'disabled'=> 'disabled', 'id' => 'beneficiario']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong> {!! Form::label('sector_id', 'Sector productivo al que pertenece:') !!}</strong>
        {!! Form::select('beneficio_privado[sector_id]',$sectoProductivo, isset($beneficio) ? $beneficio->sector_id : [],['class'=>'form-control', 'placeholder'=>'SELECCIONA UNA OPCIÓN',  'id' => 'sector_id', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('sector', 'Especifique:') !!}</strong>
        {!! Form::text('beneficio_privado[sector]',isset($beneficio) ? $beneficio->sector : null,['class'=>'form-control', 'placeholder'=>'p. ej. Juan Pérez', 'disabled'=> 'disabled',  'id' => 'sector']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <strong>  {!! Form::label('otorgante_id', 'Otorgante:') !!}</strong>
        {!! Form::select('beneficio_privado[otorgante_id]', $otorgante, isset($beneficio) ? $beneficio->otorgante_id : [],['class'=>'form-control', 'placeholder'=>'SELECCIONA UNA OPCIÓN',  'id' => 'otorgante_id', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="fisicaN">
        <strong> {!! Form::label('nombre_otorgante', 'Nombre del otorgante:') !!}</strong>
        {!! Form::text('beneficio_privado[nombre_otorgante]',isset($beneficio) ? $beneficio->nombre_otorgante :null,['class'=>'form-control', 'placeholder'=>'p. ej.Juan Pérez',  'id' => 'nombre_otorgante', 'disabled'=>'disabled']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="fisicaR">
        <strong> {!! Form::label('rfc', 'RFC:') !!}</strong>
        {!! Form::text('beneficio_privado[rfc_otorgante]',isset($beneficio) ? $beneficio->rfc_otorgante :null,['class'=>'form-control', 'placeholder'=>'p. ej. XXXX010101XXX',  'id' => 'rfc_otorgante', 'disabled'=>'disabled']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>

    <div class="form-group col-md-4" id="moralRazon" style="display: none;">
        <strong> {!! Form::label('razon_social_otorgante', 'Razón social del otorgante:') !!}</strong>
        {!! Form::text('beneficio_privado[razon_social_otorgante]',isset($beneficio) ? $beneficio->razon_social_otorgante :null,['class'=>'form-control', 'placeholder'=>'p. ej.Desarrollo y Redes S.A de C.V,',  'id' => 'razon_social_otorgante']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="moralRfc" style="display: none;">
        <strong>  {!! Form::label('rfc_otorgante', 'RFC:') !!}</strong>
        {!! Form::text('beneficio_privado[rfc_otorgante]',isset($beneficio) ? $beneficio->rfc_otorgante :null,['class'=>'form-control', 'placeholder'=>'p. ej. XXXX010101XXX',  'id' => 'rfc_otorgante']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <strong>  {!! Form::label('forma_recepcion_id', 'Forma de recepción del beneficio:') !!}</strong>
        {!! Form::select('beneficio_privado[forma_recepcion_id]',$formaRecepcion, isset($beneficio) ? $beneficio->forma_recepcion_id : [],['class'=>'form-control', 'placeholder'=>'SELECCIONA UNA OPCIÓN',  'id' => 'forma_recepcion_id', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="moneda">
        <strong>  {!! Form::label('tipo_moneda', 'Tipo de moneda:') !!}</strong>
        {!! Form::select('beneficio_privado[tipo_monedas_id]',$moneda, isset($beneficio) ? $beneficio->tipo_monedas_id : [],['class'=>'form-control', 'placeholder'=>'SELECCIONA UNA OPCIÓN',  'id' => 'tipo_monedas_id']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="especie" style="display: none;">
        <strong> {!! Form::label('especie', 'Especifique el beneficio:') !!}</strong>
        {!! Form::text('beneficio_privado[especie]',isset($beneficio) ? $beneficio->especie :null,['class'=>'form-control', 'placeholder'=>'p. ej. cheque',  'id' => 'especie']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong> {!! Form::label('monto_mensual', 'Monto mensual aproximado del beneficio:') !!}</strong>
        {!! Form::number('beneficio_privado[monto_mensual]',isset($beneficio) ? $beneficio->monto_mensual :null,['class'=>'form-control', 'placeholder'=>'p. ej. $10,000 MxN',  'id' => 'monto_mensual']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-12">
        <strong>  {!! Form::label('aclaraciones', 'Aclaraciones/Observaciones:') !!}</strong>
        {!! Form::textarea('beneficio_privado[aclaraciones]',isset($beneficio) ? $beneficio->aclaraciones :null,['class'=>'form-control alert-danger', 'placeholder'=>'',  'id' => 'aclaraciones']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>

<div id="edit" style="display: none;">
    <div class="form-row">
        <div class="col">
            {{ Form::button('Guardar', ['type' => 'submit', 'class' => 'btn btn-submit text-light float-right'] )}}
        </div>
    </div>
</div>
<div id="crearF" style="display: none;">
    <div class="form-row">
        <div class="col">
            <a href="{{route("beneficios_privados.index")}}" class="btn btn-sm btn-submit text-light">Ir a la sección anterior</a>
        </div>
        <div class="col">
            {{ Form::button('Guardar e ir a la siguiente sección', ['type' => 'submit', 'class' => 'btn btn-submit text-light float-right'] )}}
        </div>
    </div>
</div>

@section('scripts')
    <script type="text/javascript">
        $("#tipo_beneficio_id").on("change",function(){
            var tipoBeneficio = document.getElementById("tipo_beneficio_id").value
            if(tipoBeneficio == '4'){
                $( "#tipo_beneficio" ).prop( "disabled", false );
            }else{
                $( "#tipo_beneficio" ).prop( "disabled", true );
                $("#tipo_beneficio").val("");
            }
        });
        $("#beneficiario_id").on("change", function (){
            var beneficiario = document.getElementById("beneficiario_id").value
            if(beneficiario == '18'){
                $( "#beneficiario" ).prop( "disabled", false );
            }else{
                $( "#beneficiario" ).prop( "disabled", true );
                $("#beneficiario").val("");
            }
        });
        $("#sector_id").on("change", function (){
            var sector = document.getElementById("sector_id").value;
            if(sector == '17'){
                $( "#sector" ).prop( "disabled", false );
            }else{
                $( "#sector" ).prop( "disabled", true );
                $("#sector").val("");
            }
        });
        $("#otorgante_id").on("change", function (){
            var otorgante = document.getElementById("otorgante_id").value;
            if(otorgante == '1'){
                $( "#nombre_otorgante" ).prop( "disabled", false );
                $( "#rfc_otorgante" ).prop( "disabled", false );
                $( "#razon_social_otorgante" ).prop( "disabled", true );
                document.getElementById("fisicaN").style.display = "block";
                document.getElementById("fisicaR").style.display = "block";
                $("#nombre_otorgante").prop("class","form-control alert-danger");
                $("#rfc_otorgante").prop("class","form-control alert-danger");
                document.getElementById("moralRazon").style.display = "none";
                document.getElementById("moralRfc").style.display = "none";
                $("#sector").val("");
                $("#sector").val("");
            }else{
                $( "#nombre_otorgante" ).prop( "disabled", true );
                $( "#razon_social_otorgante" ).prop( "disabled", false );
                document.getElementById("fisicaN").style.display = "none";
                document.getElementById("fisicaR").style.display = "none";
                document.getElementById("moralRazon").style.display = "block";
                document.getElementById("moralRfc").style.display = "block";
                $("#rfc_otorgante").prop("class","form-control");
            }
        })
        $('#forma_recepcion_id').on('change', function (){
            var formaRecepcion = document.getElementById("forma_recepcion_id").value;
            if(formaRecepcion == '1') {
                $("#tipo_moneda").prop("disabled", false);
                $("#especie").prop("disabled", true);
                document.getElementById("moneda").style.display = "block";
                document.getElementById("especie").style.display = "none";
            }else{
                $("#tipo_moneda").prop("disabled", true);
                $("#especie").prop("disabled", false);
                document.getElementById("moneda").style.display = "none";
                document.getElementById("especie").style.display = "block";
            }
        })

        if($("#accion").val() == "editar"){
            document.getElementById("edit").style.display="block";
            $("#tipo_beneficio_id").change();
            $("#beneficiario_id").change();
            $("#sector_id").change();
            $("#otorgante_id").change();
            $("#forma_recepcion_id").change();
        }else if ($("#accion").val() == "crear"){
            document.getElementById("crearF").style.display="block";
        }
    </script>
@endsection
