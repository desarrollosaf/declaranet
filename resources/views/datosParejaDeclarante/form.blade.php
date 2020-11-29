<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('nombre', 'Nombre (s):') !!}</strong>
        {!! Form::text('nombre',null,['class'=>'form-control text-uppercase alert-danger', 'placeholder'=>'',  'id' => 'nombre', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('apellidop', 'Primer apellido:') !!}</strong>
        {!! Form::text('apellidop',null,['class'=>'form-control alert-danger', 'placeholder'=>'',  'id' => 'apellidop','required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('apellidom', 'Segundo apellido:') !!}</strong>
        {!! Form::text('apellidom',null,['class'=>'form-control alert-danger', 'placeholder'=>'',  'id' => 'apellidom', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('fechanacimiento', 'Fecha de nacimiento:') !!}</strong>
        {!! Form::date('fechanacimiento',null,['class'=>'form-control alert-danger text-uppercase',  'id' => 'fechanacimiento', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('rfc', 'RFC:') !!}</strong>
        {!! Form::text('rfc',null,['class'=>'form-control alert-danger', 'placeholder'=>'',  'id' => 'rfc', 'required' => true, 'pattern' => '([A-Z]{4}[0-9]{6}[A-Z0-9]{3})']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('relacion', ' Relación con el Declarante: * :') !!}
        {!! Form::select('relacion', $selectRelacioDeclarante, null,['class'=>'form-control alert-danger',  'id' => 'relacion', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('extranjero', '¿Es ciudadano extranjero? * :') !!}</strong>
        {!! Form::select('extranjero', $selectCiudadano, null,['class'=>'form-control text-uppercase',  'id' => 'tipo-ciudadano']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('curp', 'CURP:') !!}</strong>
        {!! Form::text('curp',null,['class'=>'form-control alert-danger', 'placeholder'=>'',  'id' => 'curp']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('dependiente', '¿Es dependiente económico?:') !!}</strong>
        {!! Form::select('dependiente',$selectRespuesta, null,['class'=>'form-control alert-danger', 'id' => 'dependiente']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <strong>{!! Form::label('habitadomicilio', '¿Habita en el domicilio del Declarante?:') !!}</strong>
        {!! Form::select('habitadomicilio', $selectRespuesta, null,['class'=>'form-control alert-danger text-uppercase',  'id' => 'habitadomicilio']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-6">
        <strong>{!! Form::label('reside', 'Lugar donde reside:') !!}</strong>
        {!! Form::select('reside',$selectLugarReside,null,['class'=>'form-control alert-danger text-uppercase',  'id' => 'lugar-reside']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="domicilio-MXBinmuebles">
    <hr>
    <h5> DOMICILIO DE LA PAREJA </h5>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('calle', 'Calle:') !!}</strong>
            {!! Form::text('domicilio[calle]',isset($domicilio) ? $domicilio->calle : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. Av. Independencia',  'id' => 'nombre', 'pattern' =>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}", 'title' => "Ingresa la calle" ]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('exterior', 'Número exterior:') !!}</strong>
            {!! Form::number('domicilio[num_ext]',isset($domicilio) ? $domicilio->numext : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p.ej. 102',  'id' => 'exterior', 'pattern' => "[0-9]{1-5}", 'title' => "Ingresa número exterior"]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('interior', 'Número interior / Piso: ') !!}</strong>
            {!! Form::text('domicilio[num_int]',isset($domicilio) ? $domicilio->numint : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. 5',  'id' => 'interior']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('colonia', 'Colonia / Localidad:') !!}</strong>
            {!! Form::text('domicilio[colonia]',isset($domicilio) ? $domicilio->colonia : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. Centro',  'id' => 'colonia']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('municipio', 'Entidad Federativa:') !!}</strong>
            {!! Form::select('domicilio[entidadfederativa]', $selectEntidad,isset($domicilio) ? $domicilio->entidad_pais : null,['class'=>'form-control tipo-titular', 'id' => 'entidad_id']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('entidad', 'Municipio / Alcaldía:') !!}</strong>
            {!! Form::select('domicilio[municipio_id]', isset($domicilio) ? $selectMunicipio : [], isset($domicilio) ? $domicilio->municipio_id : null,['class'=>'form-control', 'id' => 'municipio_id', 'required' => 'true']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('colonia', 'Código postal:') !!}</strong>
            {!! Form::text('domicilio[codigo_postal]',isset($domicilio) ? $domicilio->codigo_postal : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. 50000',  'id' => 'cp', 'pattern' => "[0-9]{5}", 'title' => "Ingresa código postal a 5 dígitos"]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
</div>

<div class="domicilio-EXBinmuebles">
    <hr>
    <h5> DOMICILIO DE LA PAREJA </h5>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('calle', 'Calle:') !!}</strong>
            {!! Form::text('domicilio[calleExt]',isset($domicilio) ? $domicilio->calle : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. Av. Independencia',  'id' => 'nombre', 'pattern' =>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}", 'title' => "Ingresa la calle" ]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('numextExt', 'Número exterior:') !!}</strong>
            {!! Form::number('domicilio[numextExt]',isset($domicilio) ? $domicilio->numext : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p.ej. 102',  'id' => 'num_extExt', 'pattern' => "[0-9]{1-5}", 'title' => "Ingresa número exterior"]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('numintExt', 'Número interior / Piso: ') !!}</strong>
            {!! Form::text('domicilio[numintExt]',isset($domicilio) ? $domicilio->numint : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. 5',  'id' => 'numintExt']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('coloniaExt', 'Colonia / Localidad:') !!}</strong>
            {!! Form::text('domicilio[coloniaExt]',isset($domicilio) ? $domicilio->colonia : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. Centro',  'id' => 'colonia_Ext']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('pais', 'País:') !!}</strong>
            {!! Form::select('domicilio[pais]', $selectPais,isset($domicilio) ? $domicilio->entidad_pais : null,['class'=>'form-control tipo-titular',  'id' => 'pais']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('estadoprovincia', 'Estado / Provincia:') !!}</strong>
            {!! Form::text('domicilio[estadoprovincia]',isset($domicilio) ? $domicilio->municipio_provincia : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. México',  'id' => 'estado_provincia']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('codigopostalExt', 'Código postal:') !!}</strong>
            {!! Form::text('domicilio[codigopostalExt]',isset($domicilio) ? $domicilio->codigo_postal : null,['class'=>'form-control tipo-titular', 'placeholder'=>'p. ej. 50000',  'id' => 'codigo_postalExt', 'pattern' => "[0-9]{5}", 'title' => "Ingresa código postal a 5 dígitos"]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
</div>
<hr>
<div class="card-body">
    <h5> ACTIVIDAD LABORAL DE LA PAREJA </h5>
    @include('experienciaLaboral.form')
    <div class="form-row">
        <div class="form-group col-md-12">
            <strong>{!! Form::label('aclaraciones', 'Aclaraciones / Observaciones:') !!}</strong>
            {!! Form::textarea('aclaraciones', null, ['class'=>'form-control alert-danger']) !!}
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
</div>
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $(".domicilio-MXBinmuebles").hide();
            $(".domicilio-EXBinmuebles").hide();
            $("#tipo-ciudadano").change(function () {
                const valor = parseInt($(this).val());
                if (valor === 1) {
                    $("#curp").prop("disabled", false);
                } else {
                    $("#curp").prop("disabled", true);
                }
            });

            $('#lugar-reside').change(function () {
                if (parseInt($(this).val()) === 1) {
                    $('.domicilio-MXBinmuebles').show();
                    $('.domicilio-EXBinmuebles').hide();
                } else if (parseInt($(this).val()) === 2) {
                    $('.domicilio-MXBinmuebles').hide();
                    $('.domicilio-EXBinmuebles').show();
                } else {
                    $('.domicilio-MXBinmuebles').hide();
                    $('.domicilio-EXBinmuebles').hide();
                }
            });
            $("#entidad_id").on('change', function () {
                var idEntidad = $(this).val();
                if (parseInt(idEntidad) === 15) {
                    $(".foraneo").hide();
                }
                $.ajax({
                    url: "{{asset('getMunicipiosDomicilio')}}/" + idEntidad,
                    type: 'get',
                    dataType: 'json',
                    success: function (response) {
                        console.log(response);
                        $("#municipio_id").find('option').remove();
                        $("#municipio_id").append('<option value="">SELECCIONA UNA OPCIÓN</option>');
                        $(response).each(function (i, v) { // indice, valor
                            $("#municipio_id").append('<option value="' + v.id + '">' + v.municipio + '</option>');
                        });
                    }
                });
            });
        });
    </script>
@endsection
