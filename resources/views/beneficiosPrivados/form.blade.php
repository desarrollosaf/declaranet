<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('tipo_beneficio_id', 'Tipo de beneficio:') !!}
        {!! Form::select('beneficio_privado[tipo_beneficio_id]',$tipoBeneficio, null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'tipo_beneficio_id']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('tipo_beneficio', 'Especifique:') !!}
        {!! Form::text('beneficio_privado[tipo_beneficio]',null,['class'=>'form-control', 'placeholder'=>'P. ej. Beca', 'disabled'=>'disabled',  'id' => 'tipo_beneficio', 'type' => 'text']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('beneficiario_id', 'Beneficiario:') !!}
        {!! Form::select('beneficio_privado[beneficiario_id]', $beneficiarios,null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'beneficiario_id']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('beneficiario', 'Especifique:') !!}
        {!! Form::text('beneficio_privado[beneficiario]',null,['class'=>'form-control', 'placeholder'=>'p. ej. Concuño', 'disabled'=> 'disabled', 'id' => 'beneficiario']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('sector_id', 'Sector productivo al que pertenece:') !!}
        {!! Form::select('beneficio_privado[sector_id]',$sectoProductivo,null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'sector_id']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('sector', 'Especifique:') !!}
        {!! Form::text('beneficio_privado[sector]',null,['class'=>'form-control', 'placeholder'=>'p. ej. Juan Pérez', 'disabled'=> 'disabled',  'id' => 'sector']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('otorgante_id', 'Otorgante:') !!}
        {!! Form::select('beneficio_privado[otorgante_id]', $otorgante, null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'otorgante_id']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="fisicaN">
        {!! Form::label('nombre_otorgante', 'Nombre del otorgante:') !!}
        {!! Form::text('beneficio_privado[nombre_otorgante]',null,['class'=>'form-control', 'placeholder'=>'p. ej.Juan Pérez',  'id' => 'nombre_otorgante', 'disabled'=>'disabled']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="fisicaR">
        {!! Form::label('rfc', 'RFC:') !!}
        {!! Form::text('beneficio_privado[rfc_otorgante]',null,['class'=>'form-control', 'placeholder'=>'p. ej. XXXX010101XXX',  'id' => 'rfc_otorgante', 'disabled'=>'disabled']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>

    <div class="form-group col-md-4" id="moralRazon" style="display: none;">
        {!! Form::label('razon_social_otorgante', 'Razón social del otorgante:') !!}
        {!! Form::text('beneficio_privado[razon_social_otorgante]',null,['class'=>'form-control', 'placeholder'=>'p. ej.Desarrollo y Redes S.A de C.V,',  'id' => 'razon_social_otorgante']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="moralRfc" style="display: none;">
        {!! Form::label('rfc_otorgante', 'RFC:') !!}
        {!! Form::text('beneficio_privado[rfc_otorgante]',null,['class'=>'form-control', 'placeholder'=>'p. ej. XXXX010101XXX',  'id' => 'rfc_otorgante']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('forma_recepcion_id', 'Forma de recepción del beneficio:') !!}
        {!! Form::select('beneficio_privado[forma_recepcion_id]',$formaRecepcion,null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'forma_recepcion_id']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="moneda">
        {!! Form::label('tipo_moneda', 'Tipo de moneda:') !!}
        {!! Form::text('beneficio_privado[tipo_moneda]',null,['class'=>'form-control', 'placeholder'=>'p. ej. Peso Mexicano',  'id' => 'tipo_moneda', 'disabled' => 'disabled' ]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="especie" style="display: none;">
        {!! Form::label('especie', 'Especifique el beneficio:') !!}
        {!! Form::text('beneficio_privado[especie]',null,['class'=>'form-control', 'placeholder'=>'p. ej. cheque',  'id' => 'especie']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('monto_mensual', 'Monto mensual aproximado del beneficio:') !!}
        {!! Form::number('beneficio_privado[monto_mensual]',null,['class'=>'form-control', 'placeholder'=>'p. ej. $10,000 MxN',  'id' => 'monto_mensual']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-12">
        {!! Form::label('aclaraciones', 'Aclaraciones/Observaciones:') !!}
        {!! Form::textarea('beneficio_privado[aclaraciones]',null,['class'=>'form-control alert-danger', 'placeholder'=>'',  'id' => 'aclaraciones']) !!}
        <span class="text-danger" style="font-size:150%"></span>
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
        $("#tipo_beneficio_id").on("change",function(){
            var tipoBeneficio = document.getElementById("tipo_beneficio_id").value
            if(tipoBeneficio == '4'){
                $( "#tipo_beneficio" ).prop( "disabled", false );
            }else{
                $( "#tipo_beneficio" ).prop( "disabled", true );
            }
        });
        $("#beneficiario_id").on("change", function (){
            var beneficiario = document.getElementById("beneficiario_id").value
            if(beneficiario == '18'){
                $( "#beneficiario" ).prop( "disabled", false );
            }else{
                $( "#beneficiario" ).prop( "disabled", true );
            }
        });
        $("#sector_id").on("change", function (){
            var sector = document.getElementById("sector_id").value;
            if(sector == '17'){
                $( "#sector" ).prop( "disabled", false );
            }else{
                $( "#sector" ).prop( "disabled", true );
            }
        });
        $("#otorgante_id").on("change", function (){
            var otorgante = document.getElementById("otorgante_id").value;
            if(otorgante == '1'){
                $( "#nombre_otorgante" ).prop( "disabled", false );
                $( "#rfc_otorgante" ).prop( "disabled", false );
                $( "#razon_social_otorgante" ).prop( "disabled", true );
                $( "#rfc_otorgante" ).prop( "disabled", true );
                document.getElementById("fisicaN").style.display = "block";
                document.getElementById("fisicaR").style.display = "block";
                document.getElementById("nombre_otorgante").style.backgroundColor = "#F8E0F7";
                document.getElementById("rfc_otorgante").style.backgroundColor = "#F8E0F7";
                document.getElementById("moralRazon").style.display = "none";
                document.getElementById("moralRfc").style.display = "none";
            }else{
                $( "#nombre_otorgante" ).prop( "disabled", true );
                $( "#rfc_otorgante" ).prop( "disabled", true );
                $( "#razon_social_otorgante" ).prop( "disabled", false );
                $( "#rfc_otorgante" ).prop( "disabled", false );
                document.getElementById("fisicaN").style.display = "none";
                document.getElementById("fisicaR").style.display = "none";
                document.getElementById("moralRazon").style.display = "block";
                document.getElementById("moralRfc").style.display = "block";
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
    </script>
@endsection
