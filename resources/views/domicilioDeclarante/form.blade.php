<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('calle', 'Calle: *') !!}
        {!! Form::text('domicilio[calle]',isset($domicilio) ? $domicilio->calle : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. Av. Independencia',  'id' => 'nombre', 'required' => 'true', 'pattern' =>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}", 'title' => "Ingresa la calle" ]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('exterior', 'Número exterior: *') !!}
        {!! Form::number('domicilio[num_ext]',isset($domicilio) ? $domicilio->num_ext : null,['class'=>'form-control alert-danger', 'placeholder'=>'p.ej. 102',  'id' => 'exterior','required' =>'true', 'pattern' => "[0-9]{1-5}", 'title' => "Ingresa número exterior"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('interior', 'Número interior / Piso: ') !!}
        {!! Form::text('domicilio[num_int]',isset($domicilio) ? $domicilio->num_int : null,['class'=>'form-control alert-danger', 'placeholder'=>'p. ej. 5',  'id' => 'interior']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('colonia', 'Colonia / Localidad: *') !!}
        {!! Form::text('domicilio[colonia]',isset($domicilio) ? $domicilio->codigo_postal : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. Centro',  'id' => 'colonia', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('entidad', 'Entidad federativa: *') !!}
        {!! Form::select('domicilio[entidad_id]', $selectEntidad, isset($domicilio) ? $domicilio->entidad_id : null,['class'=>'form-control',  'id' => 'entidad_id', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('municipio', 'Municipio / Alcaldía: *') !!}
        {!! Form::select('domicilio[municipio_id]', isset($domicilio) ? $selectMunicipio : [], isset($domicilio) ? $domicilio->municipio_id : null,['class'=>'form-control', 'id' => 'municipio_id', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('colonia', 'Código postal:') !!}
        {!! Form::text('domicilio[codigo_postal]',isset($domicilio) ? $domicilio->codigo_postal : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. 50000',  'id' => 'cp', 'pattern' => "[0-9]{5}", 'title' => "Ingresa código postal a 5 dígitos"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-12">
        {!! Form::label('aclaraciones', 'Aclaraciones / Observaciones:') !!}
        {!! Form::textarea('domicilio[observaciones]', isset($domicilio) ? $domicilio->observaciones : null, ['class'=>'form-control alert-danger']) !!}
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-12">
        {!! Form::label('nota', ' Todos los campos marcados con * son obligatorios. ') !!}
    </div>
</div>
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){

        });
        $("#entidad_id").on('change', function (){
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
                    $("#municipio_id").find('option').remove();
                    $("#municipio_id").append('<option value="">-- Selecciona un municipio</option>');
                    $(response).each(function (i, v) { // indice, valor
                        $("#municipio_id").append('<option value="' + v.id + '">' + v.municipio + '</option>');
                    });
                }
            });
        });
        $("#municipio_id").on("change",function(){
            if($(this).val() != ""){
                $.ajax({
                    url: "{{asset('getAsentamientosDomicilio')}}/" + $(this).val(),
                    type: 'get',
                    dataType: 'json',
                    success: function (response) {
                        console.log(response);
                        $("#asentamiento_id").find('option').remove();
                        $("#asentamiento_id").append('<option data-codigo_postal="" value="">-- Selecciona un asentamiento</option>');
                        $(response).each(function (i, v) { // indice, valor
                            $("#asentamiento_id").append('<option data-codigo_postal="'+v.codigo_postal+'" value="' + v.id + '">' + v.asentamiento + '</option>');
                        });
                    }
                });
            }
        });
        $("#asentamiento_id").on("change",function(){
            if($(this).val() != ""){
                $("#cp").val($("#asentamiento_id option:selected").data("codigo_postal"));
            }else{
                $("#cp").val("");
            }
        });
    </script>
@endsection
