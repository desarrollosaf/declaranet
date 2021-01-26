<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <br><h6><strong>II) DATOS DEL ENCARGO</strong></h6><br><hr>
            </div>
        </div>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <strong>{!! Form::label('cargo_concluye', 'A) DATOS DEL ENCARGO QUE CONCLUYE: *') !!}</strong>
        {!! Form::text('cambio[cargo_concluye]',isset($cambio) ? $cambio->cargo_concluye : null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. Av. Independencia',  'id' => 'cargo_concluye', 'required' => 'true', 'pattern' =>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}", 'title' => "Ingresa cargo que concluye" ]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-6">
        <strong>{!! Form::label('fecha_conclusion', 'Fecha de conclución del encargo: *') !!}</strong>
        {!! Form::date('cambio[fecha_conclusion]',isset($cambio) ? $cambio->fecha_conclusion : null,['class'=>'form-control text-uppercase', 'id' => 'fecha_conclusion', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>


<div class="form-row">
    <div class="form-group col-md-6">
        <strong>{!! Form::label('entidad', 'B) DATOS DEL ENCARGO QUE INICIA: *') !!}</strong>
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('entidad', 'Ente público: *') !!}</strong>
        {!! Form::select('cambio[ente_publicos_id]', $EntePublico, isset($cambio) ? $cambio->ente_publicos_id : null,['class'=>'form-control',  'id' => 'ente_publicos_id', 'required' => true, 'placeholder'=>'SELECCIONA UNA OPCIÓN']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('calle', 'Dependencia: *') !!}</strong>
        {!! Form::text('cambio[dependencia]',isset($cambio) ? $cambio->dependencia : null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. Secretaría de Administración y Finanzas',  'id' => 'dependencia', 'required' => 'true', 'pattern' =>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}", 'title' => "Ingresa la calle" ]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('calle', 'Unidad Administrativa: *') !!}</strong>
        {!! Form::text('cambio[unidad_administrativa]',isset($cambio) ? $cambio->unidad_administrativa : null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. Av. Independencia',  'id' => 'unidad_administrativa', 'required' => 'true', 'pattern' =>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}", 'title' => "Ingresa la calle" ]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('entidad', 'Cargo que inicia: *') !!}</strong>
        {!! Form::text('cambio[cargo_inicia]',isset($cambio) ? $cambio->cargo_inicia : null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. Ingeniero en sistemas',  'id' => 'cargo_inicia', 'required' => 'true', 'pattern' =>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}", 'title' => "Ingresa la calle" ]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('calle', 'Nombre del empleo, cargo o comición que inicia: *') !!}</strong>
        {!! Form::text('cambio[nombre_cargo_inicia]',isset($cambio) ? $cambio->nombre_cargo_inicia : null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. Ingeniero en sistemas',  'id' => 'nombre_cargo_inicia', 'required' => 'true', 'pattern' =>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}", 'title' => "Ingresa la calle" ]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('calle', 'Contratado por honorarios: *') !!}</strong>
        {!! Form::select('cambio[honorarios]', $Respuesta, isset($cambio) ? $cambio->honorarios : null,['class'=>'form-control',  'id' => 'honorarios', 'required' => true, 'placeholder'=>'SELECCIONA UNA OPCIÓN']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('entidad', 'Nivel del encargo: *') !!}</strong>
        {!! Form::text('cambio[nivel_encargo]',isset($cambio) ? $cambio->nivel_encargo : null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. Operativo',  'id' => 'nivel_encargo', 'required' => 'true', 'pattern' =>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}", 'title' => "Ingresa la nivel del encargo", 'disabled' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('calle', 'Área de adscripción que inicia: *') !!}</strong>
        {!! Form::text('cambio[adscripcion_inicia]',isset($cambio) ? $cambio->adscripcion_inicia : null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. Secretaría de Administración y Finanzas',  'id' => 'adscripcion_inicia', 'required' => 'true', 'pattern' =>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}", 'title' => "Ingresa la calle" ]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('calle', 'Fecha de inicio del encargo: *') !!}</strong>
        {!! Form::date('cambio[fecha_inicio_encargo]',isset($cambio) ? $cambio->fecha_inicio_encargo : null,['class'=>'form-control text-uppercase',  'id' => 'fecha_inicio_encargo', 'required' => 'true', 'pattern' =>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}", 'title' => "Ingresa la calle" ]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>


<div class="form-row">
    <div class="form-group col-md-6">
        <strong>{!! Form::label('entidad', 'Lugar donde se ubica: *') !!}</strong>
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('entidad', 'Calle: *') !!}</strong>
        {!! Form::text('cambio[calle]',isset($cambio) ? $cambio->calle : null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. Av. Independencia',  'id' => 'calle', 'required' => 'true', 'pattern' =>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}", 'title' => "Ingresa la calle" ]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('calle', 'Número Exterior: *') !!}</strong>
        {!! Form::text('cambio[no_exterior]',isset($cambio) ? $cambio->no_exterior : null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. 102',  'id' => 'no_exterior', 'required' => true ]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('calle', 'Número Interior/ Piso: *') !!}</strong>
        {!! Form::text('cambio[no_interior_piso]',isset($cambio) ? $cambio->no_interior_piso : null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. 5B',  'id' => 'no_interior_piso', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('entidad', 'Localidad o colonia: *') !!}</strong>
        {!! Form::text('cambio[localidad]',isset($cambio) ? $cambio->localidad : null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. Centro',  'id' => 'localidad', 'required' => true ]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('calle', 'Entidad Federativa: *') !!}</strong>
        {!! Form::select('cambio[entidades_id]', $Entidad, isset($cambio) ? $cambio->entidades_id : null,['class'=>'form-control',  'id' => 'entidades_id', 'required' => true, 'placeholder'=>'SELECCIONA UNA OPCIÓN']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('calle', 'Municipio / Alcaldía: *') !!}</strong>
        {!! Form::select('cambio[municipio_id]', isset($cambio) ? $selectMunicipio : [], isset($cambio) ? $cambio->municipio_id : null,['class'=>'form-control text-uppercase', 'id' => 'municipio_id', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>


<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('entidad', 'Código postal: *') !!}</strong>
        {!! Form::text('cambio[codigo_postal]',isset($cambio) ? $cambio->codigo_postal : null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. 50000',  'id' => 'codigo_postal', 'required' => 'true', 'pattern' =>"[0-9]{5}", 'title' => "Ingresa el código postal a 5 dígitos", 'size'=>'5', 'maxlength'=>'5' ]) !!}
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

        $("#entidades_id").on("change", function () {
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

             $("#honorarios").on("change", function () {
                var honorarios = document.getElementById("honorarios").value;
                if(honorarios == 2){
                    $("#nivel_encargo").prop("disabled", false);
                }else{
                    $("#nivel_encargo").prop("disabled", true);
                    $("#nivel_encargo").val("");
                }
            });
    </script>
@endsection
