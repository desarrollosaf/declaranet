<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('calle', 'Calle:') !!}
        {!! Form::text('calle',null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'nombre']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-2">
        {!! Form::label('exterior', 'Número exterior:') !!}
        {!! Form::text('exterior',null,['class'=>'form-control alert-danger', 'placeholder'=>'',  'id' => 'exterior']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-2">
        {!! Form::label('interior', 'Número interior / Piso:') !!}
        {!! Form::text('interior',null,['class'=>'form-control alert-danger', 'placeholder'=>'',  'id' => 'interior']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('entidad', 'Entidad federativa:') !!}
        {!! Form::select('entidad', $selectEntidad, null,['class'=>'form-control',  'id' => 'entidad']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('municipio', 'Municipio / Alcaldía:') !!}
        {!! Form::select('municipio', $selectMunicipio, null,['class'=>'form-control', 'id' => 'municipio']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 foraneo">
        {!! Form::label('colonia', 'Colonia / Localidad:') !!}
        {!! Form::text('colonia',null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'colonia']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 foraneo">
        {!! Form::label('colonia', 'Código postal:') !!}
        {!! Form::text('colonia',null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'cp']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 local">
        {!! Form::label('colonia', 'Colonia / Localidad:') !!}
        {!! Form::text('colonia',null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'colonia']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 local">
        {!! Form::label('colonia', 'Código postal:') !!}
        {!! Form::text('colonia',null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'cp']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-12">
        {!! Form::label('aclaraciones', 'Aclaraciones / Observaciones:') !!}
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
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function (){
            $("#entidad").on('change', function (){
                var idEntidad = $(this).val();
                if(parseInt(idEntidad) === 15){
                    $(".foraneo").hide();
                }
                $.ajax({
                    url: "{{asset('getMunicipiosDomicilio')}}/" + idEntidad,
                    type: 'get',
                    dataType: 'json',
                    success: function (response) {
                        console.log(response);
                        $("#municipio").find('option').remove();
                        $(response).each(function (i, v) { // indice, valor
                            $("#municipio").append('<option value="' + v.id + '">' + v.municipio + '</option>');
                        });
                    }
                });
            });
        });
    </script>
@endsection
