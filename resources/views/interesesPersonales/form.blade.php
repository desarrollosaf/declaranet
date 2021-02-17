<div class="form-row">
    <div class="form-group col-md-4 especifique-dependientes">
        <strong>{!! Form::label('intereses.nombre', 'Nombre: *') !!}</strong>
        {!! Form::text('intereses[nombre]', (isset($intereses->nombre)) ? $intereses->nombre : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'P. EJ. CARLOS',  'id' => 'especifique-dependientes', 'pattern' =>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 especifique-dependientes">
        <strong>{!! Form::label('intereses.primer_apellido', 'Primer Apellido: *') !!}</strong>
        {!! Form::text('intereses[primer_apellido]', (isset($intereses->primer_apellido)) ? $intereses->primer_apellido : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'P. EJ. PÉREZ',  'id' => 'especifique-dependientes', 'pattern' =>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 especifique-dependientes">
        <strong>{!! Form::label('intereses.especifique_dependiente', 'Segundo Apellido: ') !!}</strong>
        {!! Form::text('intereses[segundo_apellido]', (isset($intereses->segundo_apellido)) ? $intereses->segundo_apellido : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'P. EJ. JÚAREZ',  'id' => 'especifique-dependientes', 'pattern' =>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4 especifique-dependientes">
        <strong>{!! Form::label('intereses.fecha_nacimiento', 'Fecha de nacimiento: *') !!}</strong>
        {!! Form::date('intereses[fecha_nacimiento]', (isset($intereses->fecha_nacimiento)) ? $intereses->fecha_nacimiento : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'especifique-dependientes', 'required' => true,'max' => date('Y-m-d')]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 especifique-dependientes">
        <strong>{!! Form::label('intereses.rfc', 'RFC: *') !!}</strong>
        {!! Form::text('intereses[rfc]', (isset($intereses->rfc)) ? $intereses->rfc : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'P. EJ. XAXA010101XAX',  'id' => 'especifique-dependientes', 'pattern'=>'([A-Z]{4}[0-9]{6}[A-Z0-9]{0,3})']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 especifique-dependientes">
        <strong>{!! Form::label('intereses.parentesco_relaciones_id', 'Parentesco o relación con el declarante: *') !!}</strong>
        {!! Form::select('intereses[parentesco_relaciones_id]',$relacion, (isset($intereses->parentesco_relaciones_id)) ? $intereses->parentesco_relaciones_id : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'SELECCIONA UNA OPCIÓN',  'id' => 'especifique-dependientes']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4 especifique-dependientes">
        <strong>{!! Form::label('intereses.respuestas_id', '¿Es ciudadano extranjero?: *') !!}</strong>
        {!! Form::select('intereses[respuestas_id]', $respuesta, (isset($intereses->respuestas_id)) ? $intereses->respuestas_id : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'SELECCIONA UNA OPCIÓN',  'id' => 'respuesta-ciudadano']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 especifique-dependientes">
        <strong>{!! Form::label('intereses.curp', 'CURP: *') !!}</strong>
        {!! Form::text('intereses[curp]', (isset($intereses->curp)) ? $intereses->curp : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'P. EJ. XAXA010101XAXAXA01',  'id' => 'curp', 'readOnly', 'pattern' =>"([A-Z]{4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[HM](AS|BC|BS|CC|CL|CM|CS|CH|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[A-Z]{3}[0-9A-Z]\d)"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<hr>
<h5> ACTIVIDAD LABORAL</h5>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('actividadLaboral.ambito_sector_id', 'Ámbito / Sector :  *') !!}</strong>
        {!! Form::select('actividadLaboral[ambito_sector_id]', $sector,isset($experienciaLaboral->ambito_sector_id) ? $experienciaLaboral->ambito_sector_id : null,['class'=>'form-control text-uppercase alert-danger', 'id' => 'ambito-sector', "required" => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('nivel_orden_gobierno_id', 'Nivel / Orden de Gobierno: * ') !!}</strong>
        {!! Form::select('actividadLaboral[nivel_orden_gobierno_id]', $nivel,isset($experienciaLaboral->nivel_orden_gobierno_id) ? $experienciaLaboral->nivel_orden_gobierno_id : null,['class'=>'form-control alert-danger text-uppercase', 'id' => 'codigo_postalExt', 'placeholder' => "SELECCIONA UNA OPCIÓN"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('ambito_publico_id', 'Ámbito Público: *') !!}</strong>
        {!! Form::select('actividadLaboral[ambito_publico_id]', $ambito, isset($experienciaLaboral->ambito_publico_id) ? $experienciaLaboral->ambito_publico_id : null,['class'=>'form-control alert-danger text-uppercase', 'id' => 'codigo_postalExt', 'placeholder' => "SELECCIONA UNA OPCIÓN"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('ente_publico', 'Nombre del Ente Público: *') !!}</strong>
        {!! Form::text('actividadLaboral[ente_publico]',isset($experienciaLaboral->ente_publico) ? $experienciaLaboral->ente_publico : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. Desarrollo de Sistemas S.A de C.V',  'id' => 'codigo_postalExt', 'title' => "Ingresa código postal a 5 dígitos"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('area_adscripcion', 'Área de adscripción: *') !!}</strong>
        {!! Form::text('actividadLaboral[area_adscripcion]',isset($experienciaLaboral->area_adscripcion) ? $experienciaLaboral->area_adscripcion : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. Desarrollo de Tecnología',  'id' => 'codigo_postalExt', 'title' => "Ingresa código postal a 5 dígitos"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('Empleo, cargo o comisión: *') !!}</strong>
        {!! Form::text('actividadLaboral[cargo_comision]',isset($experienciaLaboral->cargo_comision) ? $experienciaLaboral->cargo_comision : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. Analista de sistemas',  'id' => 'empleo']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('funcion_pricipal', 'Especifique función principal: *') !!}</strong>
        {!! Form::text('actividadLaboral[funcion_pricipal]',isset($experienciaLaboral->funcion_pricipal) ? $experienciaLaboral->funcion_pricipal : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. Desarrollo de sistemas de información',  'id' => 'funcio']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('fecha_ingreso', 'Fecha de ingreso al empleo: *') !!}</strong>
        {!! Form::date('actividadLaboral[fecha_ingreso]',isset($experienciaLaboral->fecha_ingreso) ? $experienciaLaboral->fecha_ingreso : null,['class'=>'form-control alert-danger text-uppercase fecha', 'id' => 'codigo_postalExt']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-12">
        <strong>{!! Form::label('intereses.observaciones', 'Aclaraciones / Observaciones:  ') !!}</strong>
        {!! Form::textarea('intereses[observaciones]', isset($intereses->observaciones) ? $intereses->observaciones : null, ['class'=>'form-control alert-danger  text-uppercase']) !!}
        <strong>{!! Form::label('aclaraciones', 'Todos los campos marcados con * son obligatorios.') !!}</strong>
    </div>
</div>
@section("scripts")
<script type="text/javascript">
    $(document).ready(function () {
        $(".form-control").prop("required", true);
        $("#respuesta-ciudadano").change(function () {
            let val = $(this).val();
            if (val === "2") {
                $("#curp").prop("readOnly", false).prop("required", true);
            } else {
                $("#curp").prop("readOnly", true).prop("required", false).val("");
            }
        });
        $("#curp").blur(function () {
            let curp = $(this).val();
            $("#curp").val(curp.toString().toUpperCase());
        });
        @isset($intereses)
            $("#respuesta-ciudadano").change();
        @endisset
    });
</script>
@endsection
