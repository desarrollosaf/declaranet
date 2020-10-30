<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('tipoBeneficio', 'Tipo de beneficio:') !!}
        {!! Form::select('tipoBeneficio',$tipoBeneficio, null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'tipoBeneficio']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('tipoBeneficioEspecifique', 'Especifique:') !!}
        {!! Form::text('tipoBeneficioEspecifique',null,['class'=>'form-control', 'placeholder'=>'P. ej. Beca', 'disabled'=>'disabled',  'id' => 'tipoBeneficioEspecifique']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('beneficiario', 'Beneficiario:') !!}
        {!! Form::select('beneficiario', $beneficiarios,null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'beneficiario']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('beneficiarioEspecifique', 'Especifique:') !!}
        {!! Form::text('beneficiarioEspecifique',null,['class'=>'form-control', 'placeholder'=>'p. ej. Concuño', 'disabled'=> 'disabled', 'id' => 'beneficiarioEspecifique']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('sector', 'Sector productivo al que pertenece:') !!}
        {!! Form::select('sector',$sectoProductivo,null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'sector']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('sectorEspecifique', 'Especifique:') !!}
        {!! Form::text('sectorEspecifique',null,['class'=>'form-control', 'placeholder'=>'p. ej. Juan Pérez', 'disabled'=> 'disabled',  'id' => 'sectorEspecifique']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('otorgante', 'Otorgante:') !!}
        {!! Form::select('otorgante', $otorgante, null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'otorgante']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="fisicaN">
        {!! Form::label('nombreOtorgante', 'Nombre del otorgante:') !!}
        {!! Form::text('nombreOtorgante',null,['class'=>'form-control', 'placeholder'=>'p. ej.Juan Pérez',  'id' => 'nombreOtorgante', 'disabled'=>'disabled']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="fisicaR">
        {!! Form::label('rfc', 'RFC:') !!}
        {!! Form::text('rfc',null,['class'=>'form-control', 'placeholder'=>'p. ej. XXXX010101XXX',  'id' => 'rfc', 'disabled'=>'disabled']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>

    <div class="form-group col-md-4" id="moralRazon" style="display: none;">
        {!! Form::label('razonSocialOtorgante', 'Razón social del otorgante:') !!}
        {!! Form::text('razonSocialOtorgante',null,['class'=>'form-control', 'placeholder'=>'p. ej.Desarrollo y Redes S.A de C.V,',  'id' => 'razonSocialOtorgante']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="moralRfc" style="display: none;">
        {!! Form::label('rfc', 'RFC:') !!}
        {!! Form::text('rfcOtorgante',null,['class'=>'form-control', 'placeholder'=>'p. ej. XXXX010101XXX',  'id' => 'rfcOtorgante']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('formaRecepcion', 'Forma de recepción del beneficio:') !!}
        {!! Form::select('formaRecepcion',$formaRecepcion,null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'formaRecepcion']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="moneda">
        {!! Form::label('tipoMoneda', 'Tipo de moneda:') !!}
        {!! Form::text('tipoMoneda',null,['class'=>'form-control', 'placeholder'=>'p. ej. Peso Mexicano',  'id' => 'tipoMoneda', 'disabled' => 'disabled' ]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4" id="especie" style="display: none;">
        {!! Form::label('especifiqueBeneficioEspecie', 'Especifique el beneficio:') !!}
        {!! Form::text('especifiqueBeneficioEspecie',null,['class'=>'form-control', 'placeholder'=>'p. ej. cheque',  'id' => 'especifiqueBeneficioEspecie']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('montoMensual', 'Monto mensual aproximado del beneficio:') !!}
        {!! Form::text('montoMensual',null,['class'=>'form-control', 'placeholder'=>'p. ej. $10,000 MxN',  'id' => 'montoMensual']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-12">
        {!! Form::label('aclaraciones', 'Aclaraciones/Observaciones:') !!}
        {!! Form::textarea('aclaraciones',null,['class'=>'form-control alert-danger', 'placeholder'=>'',  'id' => 'aclaraciones']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
@section('scripts')
    <script type="text/javascript">
        $("#tipoBeneficio").on("change",function(){
            var tipoBeneficio = document.getElementById("tipoBeneficio").value
            if(tipoBeneficio == '4'){
                $( "#tipoBeneficioEspecifique" ).prop( "disabled", false );
            }else{
                $( "#tipoBeneficioEspecifique" ).prop( "disabled", true );
            }
        });
        $("#beneficiario").on("change", function (){
            var beneficiario = document.getElementById("beneficiario").value
            if(beneficiario == '18'){
                $( "#beneficiarioEspecifique" ).prop( "disabled", false );
            }else{
                $( "#beneficiarioEspecifique" ).prop( "disabled", true );
            }
        });
        $("#sector").on("change", function (){
            var sector = document.getElementById("sector").value;
            if(sector == '17'){
                $( "#sectorEspecifique" ).prop( "disabled", false );
            }else{
                $( "#sectorEspecifique" ).prop( "disabled", true );
            }
        });
        $("#otorgante").on("change", function (){
            var otorgante = document.getElementById("otorgante").value;
            if(otorgante == '1'){
                $( "#nombreOtorgante" ).prop( "disabled", false );
                $( "#rfc" ).prop( "disabled", false );
                $( "#razonSocialOtorgante" ).prop( "disabled", true );
                $( "#rfcOtorgante" ).prop( "disabled", true );
                document.getElementById("fisicaN").style.display = "block";
                document.getElementById("fisicaR").style.display = "block";
                document.getElementById("nombreOtorgante").style.backgroundColor = "#F8E0F7";
                document.getElementById("rfc").style.backgroundColor = "#F8E0F7";
                document.getElementById("moralRazon").style.display = "none";
                document.getElementById("moralRfc").style.display = "none";
            }else{
                $( "#nombreOtorgante" ).prop( "disabled", true );
                $( "#rfc" ).prop( "disabled", true );
                $( "#razonSocialOtorgante" ).prop( "disabled", false );
                $( "#rfcOtorgante" ).prop( "disabled", false );
                document.getElementById("fisicaN").style.display = "none";
                document.getElementById("fisicaR").style.display = "none";
                document.getElementById("moralRazon").style.display = "block";
                document.getElementById("moralRfc").style.display = "block";
            }
        })
        $('#formaRecepcion').on('change', function (){
            var formaRecepcion = document.getElementById("formaRecepcion").value;
            if(formaRecepcion == '1') {
                $("#tipoMoneda").prop("disabled", false);
                $("#especifiqueBeneficioEspecie").prop("disabled", true);
                document.getElementById("moneda").style.display = "block";
                document.getElementById("especie").style.display = "none";
            }else{
                $("#tipoMoneda").prop("disabled", true);
                $("#especifiqueBeneficioEspecie").prop("disabled", false);
                document.getElementById("moneda").style.display = "none";
                document.getElementById("especie").style.display = "block";
            }
        })
    </script>
@endsection
