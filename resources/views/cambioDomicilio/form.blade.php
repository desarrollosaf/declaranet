<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <br><h6><strong>DOMICILIO</strong></h6><br><hr>
            </div>
        </div>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('entidad', 'Lugar donde se ubica: *') !!}</strong>
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-8">
        {!! Form::select('cambio[lugares_ubicacion_id]', $lugar, isset($cambio) ? $cambio->lugares_ubicacion_id : null,['class'=>'form-control',  'id' => 'lugares_ubicacion_id', 'required' => true, 'placeholder'=>'SELECCIONA UNA OPCIÓN']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('calle', 'Calle: *') !!}</strong>
        {!! Form::text('cambio[calle]',isset($cambio) ? $cambio->calle : null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. Av. Independencia',  'id' => 'calle', 'required' => 'true', 'pattern' =>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}", 'title' => "Ingresa la calle" ]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('exterior', 'Número exterior: *') !!}</strong>
        {!! Form::number('cambio[num_ext]',isset($cambio) ? $cambio->num_ext : null,['class'=>'form-control', 'placeholder'=>'P. EJ. 102',  'id' => 'num_ext','required' =>'true', 'pattern' => "[0-9]{1-5}", 'title' => "Ingresa número exterior"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('interior', 'Número interior: ') !!}</strong>
        {!! Form::text('cambio[num_int]',isset($cambio) ? $cambio->num_int : null,['class'=>'form-control', 'placeholder'=>'P. EJ. 5',  'id' => 'num_int']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('colonia', 'Colonia / Localidad: *') !!}</strong>
        {!! Form::text('cambio[colonia]',isset($cambio) ? $cambio->colonia : null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. Centro',  'id' => 'colonia', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('entidad', 'Entidad federativa: *') !!}</strong>
        {!! Form::select('cambio[entidad_id]', $selectEntidad, isset($cambio) ? $cambio->entidad_id : null,['class'=>'form-control text-uppercase',  'id' => 'entidad_id', 'required' => 'true', 'placeholder'=>'SELECCIONA UNA OPCIÓN']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('municipio', 'Municipio / Alcaldía: *') !!}</strong>
        {!! Form::select('cambio[municipio_id]', isset($cambio) ? $selectMunicipio : [], isset($cambio) ? $cambio->municipio_id : null,['class'=>'form-control text-uppercase', 'id' => 'municipio_id', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('colonia', 'Código postal:') !!}</strong>
        {!! Form::text('cambio[codigo_postal]',isset($cambio) ? $cambio->codigo_postal : null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. 50000',  'id' => 'codigo_postal', 'pattern' => "[0-9]{5}", 'title' => "Ingresa código postal a 5 dígitos"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('colonia', 'Teléfono (particular, incluir clave lada):') !!}</strong>
        {!! Form::text('cambio[telefono_particular]',isset($cambio) ? $cambio->telefono_particular : null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. 7222952998',  'id' => 'telefono_particular', 'pattern' => "[0-9]{10}", 'title' => "Ingresa número particular a 10 dígitos"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('colonia', 'Teléfono celular:') !!}</strong>
        {!! Form::text('cambio[telefono_personal]',isset($cambio) ? $cambio->telefono_personal : null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. 7222952998',  'id' => 'telefono_personal', 'pattern' => "[0-9]{10}", 'title' => "Ingresa número personal a 10 dígitos"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>

<div id="edit" style="display: none;" class="all text-center">
    <div class="form-row">
        <div class="col">
            {{ Form::button('Guardar', ['type' => 'submit', 'class' => 'btn btn-submit text-light'] )}}
        </div>
    </div>
</div>
<div id="crearF"  style="display: none;">
    <div class="text-center">
        <br>
        <a href="{{route("cambio_dependencia.index")}}" class="btn btn-submit text-light">Ir a la sección anterior</a>
        {{ Form::button('Guardar e ir a la siguiente sección', ['type' => 'submit', 'class' => 'btn btn-submit text-light'] )}}
    </div>
</div>
</div>



@section('scripts')
    <script type="text/javascript">
        if ($("#accion").val() == "editar") {
            document.getElementById("edit").style.display = "block";
            document.getElementById("crearF").style.display = "none"
        } else {
            document.getElementById("crearF").style.display = "block";
            document.getElementById("edit").style.display = "none";
        }

        $("#entidad_federativa_id").on("change", function () {
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
                    $("#municipio_id").append('<option value="">SELECCIONE UNA OPCIÓN</option>');
                    $(response).each(function (i, v) { // indice, valor
                        $("#municipio_id").append('<option value="' + v.id + '">' + v.municipio + '</option>');
                    });
                }
            });
        });
    </script>
@endsection
