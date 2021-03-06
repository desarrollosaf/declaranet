<div class="form-row">
    <div class="form-group col-md-4">
       <strong> {!! Form::label('tipo_beneficio_id', 'Tipo de beneficio: *') !!}</strong>
        {!! Form::select('beneficio_privado[tipo_beneficio_id]',$tipoBeneficio, isset($beneficio) ? $beneficio->tipo_beneficio_id : [],['class'=>'form-control', 'placeholder'=>'SELECCIONA UNA OPCIÓN',  'id' => 'tipo_beneficio_id', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong> {!! Form::label('tipo_beneficio', 'Especifique: *') !!}</strong>
        {!! Form::text('beneficio_privado[tipo_beneficio]',isset($beneficio) ? $beneficio->tipo_beneficio :null,['class'=>'form-control text-uppercase', 'placeholder'=>'P. EJ. BECA', 'disabled'=>'disabled',  'id' => 'tipo_beneficio', 'type' => 'text', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('beneficiario_id', 'Beneficiario: *') !!}</strong>
        {!! Form::select('beneficio_privado[beneficiario_id]', $beneficiarios, isset($beneficio) ? $beneficio->beneficiario_id : [],['class'=>'form-control', 'placeholder'=>'SELECCIONA UNA OPCIÓN',  'id' => 'beneficiario_id', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <strong> {!! Form::label('beneficiario', 'Especifique: *') !!}</strong>
        {!! Form::text('beneficio_privado[beneficiario]',isset($beneficio) ? $beneficio->beneficiario :null,['class'=>'form-control text-uppercase', 'placeholder'=>'P. EJ. CUÑADO', 'disabled'=> 'disabled', 'id' => 'beneficiario', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong> {!! Form::label('sector_id', 'Sector productivo al que pertenece: *') !!}</strong>
        {!! Form::select('beneficio_privado[sector_id]',$sectoProductivo, isset($beneficio) ? $beneficio->sector_id : [],['class'=>'form-control', 'placeholder'=>'SELECCIONA UNA OPCIÓN',  'id' => 'sector_id', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('sector', 'Especifique: *') !!}</strong>
        {!! Form::text('beneficio_privado[sector]',isset($beneficio) ? $beneficio->sector : null,['class'=>'form-control text-uppercase', 'placeholder'=>'P. EJ. JUAN PÉREZ', 'disabled'=> 'disabled',  'id' => 'sector', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <strong>  {!! Form::label('otorgante_id', 'Otorgante: *') !!}</strong>
        {!! Form::select('beneficio_privado[otorgante_id]', $otorgante, isset($beneficio) ? $beneficio->otorgante_id : [],['class'=>'form-control', 'placeholder'=>'SELECCIONA UNA OPCIÓN',  'id' => 'otorgante_id', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="fisicaN">
        <strong> {!! Form::label('nombre_otorgante', 'Nombre del otorgante *:') !!}</strong>
        {!! Form::text('beneficio_privado[nombre_otorgante]',isset($beneficio) ? $beneficio->nombre_otorgante :null,['class'=>'form-control text-uppercase', 'placeholder'=>'P. EJ. JUAN PÉREZ',  'id' => 'nombre_otorgante', 'disabled'=>'disabled', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="fisicaR">
        <strong> {!! Form::label('rfc', 'RFC: *') !!}</strong>
        {!! Form::text('beneficio_privado[rfc_otorgante]',isset($beneficio) ? $beneficio->rfc_otorgante :null,['class'=>'form-control text-uppercase', 'placeholder'=>'P. EJ. XXXX010101XXX',  'id' => 'rfc_otorgante', 'disabled'=>'disabled', 'required' => true, 'maxlength'=>"13", 'pattern' => "([A-Z]{4}[0-9]{6}[A-Z0-9]{0,3})", 'title' => "Ingresa RFC a 10 O 13 dígitos"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>

    <div class="form-group col-md-4" id="moralRazon" style="display: none;">
        <strong> {!! Form::label('razon_social_otorgante', 'Razón social del otorgante: *') !!}</strong>
        {!! Form::text('beneficio_privado[razon_social_otorgante]',isset($beneficio) ? $beneficio->razon_social_otorgante :null,['class'=>'form-control text-uppercase', 'placeholder'=>'P. EJ. DESARROLLO Y REDES S.A. de C.V.',  'id' => 'razon_social_otorgante', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="moralRfc" style="display: none;">
        <strong>  {!! Form::label('rfc_otorganteM', 'RFC: *') !!}</strong>
        {!! Form::text('beneficio_privado[rfc_otorganteM]',isset($beneficio) ? $beneficio->rfc_otorganteM :null,['class'=>'form-control text-uppercase', 'placeholder'=>'P. EJ. XXX010101XXX',  'id' => 'rfc_otorganteM', 'required' => true, 'maxlength'=>"12", 'pattern' => "([A-Z]{3}[0-9]{6}[A-Z0-9]{3})", 'title' => "Ingresa RFC a 12 dígitos"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <strong>  {!! Form::label('forma_recepcion_id', 'Forma de recepción del beneficio: *') !!}</strong>
        {!! Form::select('beneficio_privado[forma_recepcion_id]',$formaRecepcion, isset($beneficio) ? $beneficio->forma_recepcion_id : [],['class'=>'form-control', 'placeholder'=>'SELECCIONA UNA OPCIÓN',  'id' => 'forma_recepcion_id', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="moneda">
        <strong>  {!! Form::label('tipo_moneda', 'Tipo de moneda: *') !!}</strong>
        {!! Form::select('beneficio_privado[tipo_monedas_id]',$moneda, isset($beneficio) ? $beneficio->tipo_monedas_id : [],['class'=>'form-control text-uppercase', 'placeholder'=>'SELECCIONA UNA OPCIÓN',  'id' => 'tipo_monedas_id', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="Tespecie" style="display: none;">
        <strong> {!! Form::label('especie', 'Especifique el beneficio: *') !!}</strong>
        {!! Form::text('beneficio_privado[especie]',isset($beneficio) ? $beneficio->especie :null,['class'=>'form-control text-uppercase', 'placeholder'=>'P. EJ. CHEQUE',  'id' => 'especie', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong> {!! Form::label('monto_mensual', 'Monto mensual aproximado del beneficio: *') !!}</strong>
        {!! Form::number('beneficio_privado[monto_mensual]',isset($beneficio) ? $beneficio->monto_mensual :null,['class'=>'form-control', 'placeholder'=>'P. EJ. $10,000 MXN',  'id' => 'monto_mensual', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-12">
        <strong>  {!! Form::label('aclaraciones', 'Aclaraciones / Observaciones:') !!}</strong>
        {!! Form::textarea('beneficio_privado[aclaraciones]',isset($beneficio) ? $beneficio->aclaraciones :null,['class'=>'form-control alert-danger', 'placeholder'=>'',  'id' => 'aclaraciones']) !!}
        <strong>{!! Form::label('aclaraciones', 'Todos los campos marcados con * son obligatorios.') !!}</strong>
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>

{!! Form::hidden('beneficio_privado[tipoOperacion]',$tipoOperacion,['class'=>'form-control text-uppercase','id' => 'tipoOperacion']) !!}

<div id="edit" style="display: none;" class="all text-center">
    <div class="form-row">
        <div class="col">
            {{ Form::button('Guardar', ['type' => 'submit', 'class' => 'btn btn-submit text-light'] )}}
        </div>
    </div>
</div>
<div id="crearF"  style="display: none;" class="all text-center">
    <div class="text-center">
        <br>
            <a href="{{route("beneficios_privados.index")}}" class="btn btn-submit text-light">Ir a la sección anterior</a>
            {{ Form::button('Guardar e ir a la siguiente sección', ['type' => 'submit', 'class' => 'btn btn-submit text-light'] )}}
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
                $( "#tipo_beneficio" ).prop( "required", false );
                $("#tipo_beneficio").val("");
            }
        });
        $("#beneficiario_id").on("change", function (){
            var beneficiario = document.getElementById("beneficiario_id").value
            if(beneficiario == '18'){
                $( "#beneficiario" ).prop( "disabled", false );
            }else{
                $( "#beneficiario" ).prop( "disabled", true );
                $( "#beneficiario" ).prop( "required", false );
                $("#beneficiario").val("");
            }
        });
        $("#sector_id").on("change", function (){
            var sector = document.getElementById("sector_id").value;
            if(sector == '17'){
                $( "#sector" ).prop( "disabled", false );
            }else{
                $( "#sector" ).prop( "disabled", true );
                $( "#sector" ).prop( "required", false );
                $("#sector").val("");
            }
        });
        $("#otorgante_id").on("change", function (){
            var otorgante = document.getElementById("otorgante_id").value;
            if(otorgante == '1'){

                $( "#nombre_otorgante" ).prop( "disabled", false );
                $( "#rfc_otorgante" ).prop( "disabled", false );


                document.getElementById("fisicaN").style.display = "block";
                document.getElementById("fisicaR").style.display = "block";

                $("#nombre_otorgante").prop("class","form-control alert-danger text-uppercase");
                $("#rfc_otorgante").prop("class","form-control alert-danger text-uppercase");

                document.getElementById("moralRazon").style.display = "none";
                document.getElementById("moralRfc").style.display = "none";

                $("#razon_social_otorgante").val("");
                $("#rfc_otorganteM").val("");
                $( "#razon_social_otorgante" ).prop( "required", false );
                $( "#rfc_otorganteM" ).prop( "required", false );
                $( "#rfc_otorgante" ).prop( "required", false );

            }else{

                $( "#razon_social_otorgante" ).prop( "disabled", false );
                $( "#rfc_otorganteM" ).prop( "disabled", false );

                document.getElementById("fisicaN").style.display = "none";
                document.getElementById("fisicaR").style.display = "none";
                document.getElementById("moralRazon").style.display = "block";
                document.getElementById("moralRfc").style.display = "block";

                $("#rfc_otorgante").val("");
                $("#nombre_otorgante").val("");
                $( "#nombre_otorgante" ).prop( "required", false );
                $( "#rfc_otorgante" ).prop( "required", false );
            }
        })

        $('#forma_recepcion_id').on('change', function (){
            var formaRecepcion = document.getElementById("forma_recepcion_id").value;
            if(formaRecepcion == '1') {
                $("#tipo_moneda").prop("disabled", false);
                $("#especie").prop("disabled", true);
                document.getElementById("moneda").style.display = "block";
                document.getElementById("Tespecie").style.display = "none";
                $("#especie").val("");
                $( "#especie").prop( "required", false);
            }else{
                $("#tipo_moneda").prop("disabled", true);
                $("#especie").prop("disabled", false);
                document.getElementById("moneda").style.display = "none";
                document.getElementById("Tespecie").style.display = "block";
                $("#tipo_monedas_id").val("");
                $( "#tipo_monedas_id" ).prop( "required", false );
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
