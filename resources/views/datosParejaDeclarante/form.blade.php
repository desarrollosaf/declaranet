<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('datosPareja.nombre', 'Nombre (s): *') !!}</strong>
        {!! Form::text('datosPareja[nombre]',(isset($pareja->nombre)) ? $pareja->nombre : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. Carlos',  'id' => 'nombre', 'pattern' => "[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}", 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('datosPareja.apellidop', 'Primer apellido: *') !!}</strong>
        {!! Form::text('datosPareja[primer_apellido]',(isset($pareja->primer_apellido)) ? $pareja->primer_apellido : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. Pérez',  'id' => 'apellidop','required' => true, 'pattern' => "[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('datosPareja.segundo_apellido', 'Segundo apellido: ') !!}</strong>
        {!! Form::text('datosPareja[segundo_apellido]',(isset($pareja->segundo_apellido)) ? $pareja->segundo_apellido : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. Pérez',  'id' => 'apellidom', 'pattern' => "[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,48}"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('datosPareja.fecha_nacimiento', 'Fecha de nacimiento: *') !!}</strong>
        {!! Form::date('datosPareja[fecha_nacimiento]',(isset($pareja->fecha_nacimiento)) ? $pareja->fecha_nacimiento : null,['class'=>'form-control alert-danger text-uppercase',  'id' => 'fechanacimiento', 'required' => true,'max' => date('Y-m-d')]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('datosPareja.rfc_pareja', 'RFC: *') !!}</strong>
        {!! Form::text('datosPareja[rfc_pareja]',(isset($pareja->rfc_pareja)) ? $pareja->rfc_pareja : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. XAXX010101XXX',  'id' => 'rfc_pareja', 'required' => true, 'pattern' => '([A-Z]{4}[0-9]{6}[A-Z0-9]{0,3})']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('datosPareja.relacion_id', ' Relación con el Declarante: *') !!}</strong>
        {!! Form::select('datosPareja[relacion_id]', $selectRelacioDeclarante, (isset($pareja->relacion_id)) ? $pareja->relacion_id : null,['class'=>'form-control alert-danger text-uppercase',  'id' => 'relacion', 'required' => true, 'placeholder' => "SELECCIONA UNA OPCIÓN"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('datosPareja.ciudadano_id', '¿Es ciudadano extranjero?: *') !!}</strong>
        {!! Form::select('datosPareja[ciudadano_id]', $selectCiudadano, (isset($pareja->ciudadano_id)) ? $pareja->ciudadano_id : null,['class'=>'form-control text-uppercase',  'id' => 'tipo-ciudadano', 'required' => true, 'placeholder' => "SELECCIONA UNA OPCIÓN"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('datosPareja.curp', 'CURP: *') !!}</strong>
        {!! Form::text('datosPareja[curp]',(isset($pareja->curp)) ? $pareja->curp : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. XAXX010101XAXAXA01',  'id' => 'curp', 'required' => true, "disabled" => true, 'pattern' => "([A-Z]{4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[HM](AS|BC|BS|CC|CL|CM|CS|CH|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[A-Z]{3}[0-9A-Z]\d)"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('datosPareja.respuesta_dependiente_id', '¿Es dependiente económico?: *') !!}</strong>
        {!! Form::select('datosPareja[respuesta_dependiente_id]',$selectRespuesta, (isset($pareja->respuesta_dependiente_id)) ? $pareja->respuesta_dependiente_id : null,['class'=>'form-control alert-danger text-uppercase', 'id' => 'dependiente','required' => true, 'placeholder' => "SELECCIONA UNA OPCIÓN"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('datosPareja.respuesta_domicilio_id', '¿Habita en el domicilio del Declarante?: *') !!}</strong>
        {!! Form::select('datosPareja[respuesta_domicilio_id]', $selectRespuesta, (isset($pareja->respuesta_domicilio_id)) ? $pareja->respuesta_domicilio_id : null,['class'=>'form-control alert-danger text-uppercase',  'id' => 'habita-domicilio', 'required' => true, 'placeholder' => "SELECCIONA UNA OPCIÓN"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 lugar-reside">
        <strong>{!! Form::label('datosPareja.lugar_reside_id', 'Lugar donde reside:  *') !!}</strong>
        {!! Form::select('datosPareja[lugar_reside_id]',$selectLugarReside,(isset($pareja->lugar_reside_id)) ? $pareja->lugar_reside_id : null,['class'=>'form-control alert-danger lugar-reside-change text-uppercase',  'id' => 'lugar-reside', 'placeholder' => "SELECCIONA UNA OPCIÓN"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="domicilio-MXBinmuebles">
    <hr>
    <h5> DOMICILIO DE LA PAREJA </h5>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('domicilio.calle', 'Calle:  *') !!}</strong>
            {!! Form::text('domicilio[calle]',isset($domicilio) ? $domicilio->calle : null,['class'=>'form-control tipo-titular text-uppercase', 'placeholder'=>'p. ej. Av. Independencia',  'id' => 'nombre',  'title' => "Ingresa la calle" ]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('exterior', 'Número exterior:  *') !!}</strong>
            {!! Form::text('domicilio[num_ext]',isset($domicilio->num_int) ? $domicilio->num_ext : null,['class'=>'form-control tipo-titular text-uppercase', 'placeholder'=>'p.ej. 102',  'id' => 'exterior', 'title' => "Ingresa número exterior", 'pattern' => '[A-Za-z0-9-]{0,8}']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('interior', 'Número interior / Piso: ') !!}</strong>
            {!! Form::text('domicilio[num_int]',isset($domicilio->num_int) ? $domicilio->num_int : null,['class'=>'form-control tipo-titular text-uppercase num-int', 'placeholder'=>'p. ej. 5',  'id' => 'interior','pattern' => '[A-Za-z0-9-]{0,8}']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('domicilio.colonia', 'Colonia / Localidad:  *') !!}</strong>
            {!! Form::text('domicilio[colonia]',isset($domicilio) ? $domicilio->colonia : null,['class'=>'form-control tipo-titular text-uppercase', 'placeholder'=>'p. ej. Centro',  'id' => 'colonia']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('domicilio.id', 'Entidad Federativa:  *') !!}</strong>
            {!! Form::select('domicilio[entidad_id]', $selectEntidad,isset($domicilio->entidad_id) ? $domicilio->entidad_id : null,['class'=>'form-control tipo-titular text-uppercase', 'id' => 'entidad_id', 'placeholder' => "SELECCIONA UNA OPCIÓN"]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('domicilio.municipio_id', 'Municipio / Alcaldía:  *') !!}</strong>
            {!! Form::select('domicilio[municipio_id]', isset($selectMunicipio) ? $selectMunicipio : [], isset($domicilio->municipio_id) ? $domicilio->municipio_id : null,['class'=>'form-control text-uppercase', 'id' => 'municipio_id']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('domicilio.codigo_postal', 'Código postal:  *') !!}</strong>
            {!! Form::text('domicilio[codigo_postal]',isset($domicilio->codigo_postal) ? $domicilio->codigo_postal : null,['class'=>'form-control tipo-titular text-uppercase', 'placeholder'=>'p. ej. 50000',  'id' => 'cp', 'pattern' =>"[0-9]{5}"]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
</div>

<div class="domicilio-EXBinmuebles">
    <hr>
    <h5> DOMICILIO DE LA PAREJA </h5>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('domicilioExt.calleExt', 'Calle:  *') !!}</strong>
            {!! Form::text('domicilioExt[calleExt]',isset($domicilio) ? $domicilio->calle : null,['class'=>'form-control tipo-titular text-uppercase', 'placeholder'=>'p. ej. Av. Independencia',  'id' => 'nombre', 'pattern' =>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}", 'title' => "Ingresa la calle" ]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('domicilioExt.numextExt', 'Número exterior:  *') !!}</strong>
            {!! Form::text('domicilioExt[numextExt]',isset($domicilio) ? $domicilio->num_ext : null,['class'=>'form-control tipo-titular text-uppercase num-int', 'placeholder'=>'p.ej. 102',  'id' => 'num_extExt', 'title' => "Ingresa número exterior", 'pattern' => '[A-Za-z0-9-]{0,8}']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('domicilioExt.numintExt', 'Número interior / Piso:   ') !!}</strong>
            {!! Form::text('domicilioExt[numintExt]',isset($domicilio) ? $domicilio->num_int : null,['class'=>'form-control tipo-titular text-uppercase', 'placeholder'=>'p. ej. 5',  'id' => 'numintExt', 'pattern' => '[A-Za-z0-9-]{0,8}']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('domicilioExt.coloniaExt', 'Colonia / Localidad: *') !!}</strong>
            {!! Form::text('domicilioExt[coloniaExt]',isset($domicilio) ? $domicilio->colonia : null,['class'=>'form-control tipo-titular text-uppercase', 'placeholder'=>'p. ej. Centro',  'id' => 'colonia_Ext']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('domicilio.pais_id', 'País: *') !!}</strong>
            {!! Form::text('domicilioExt[pais]',isset($domicilio) ? $domicilio->pais : null,['class'=>'form-control tipo-titular text-uppercase', 'placeholder'=>'p. ej. Estados Unidos',  'id' => 'pais']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            <strong>{!! Form::label('domicilioExt.estadoprovincia', 'Estado / Provincia: *') !!}</strong>
            {!! Form::text('domicilioExt[estadoprovincia]',isset($domicilio) ? $domicilio->entidad : null,['class'=>'form-control tipo-titular text-uppercase', 'placeholder'=>'p. ej. México',  'id' => 'estado_provincia']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <strong>{!! Form::label('domicilioExt.codigopostalExt', 'Código postal: *') !!}</strong>
            {!! Form::text('domicilioExt[codigopostalExt]',isset($domicilio) ? $domicilio->codigo_postal : null,['class'=>'form-control tipo-titular text-uppercase', 'placeholder'=>'p. ej. 50000',  'id' => 'codigo_postalExt', 'pattern' => '[A-za-z0-9]{5}']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
</div>
<hr>
<h5> ACTIVIDAD LABORAL DE LA PAREJA </h5>
<div class="table-responsive-lg">
    <table class="table table-active table-striped" id="table-experiencia">
        <thead class="badge-primary">
        <tr>
            <th>
                <center>NIVEL</center>
            </th>
            <th>
                <center>INFORMACIÓN ADICIONAL</center>
            </th>
            <th>
                <center>ACCIONES</center>
            </th>
        </tr>
        </thead>
        <tbody>
        @if(count($experiencias))
            @foreach($experiencias as $experiencia)
                <tr>
                    <td>
                        <center>{{$experiencia->ambito_sectores->valor}}</center>
                    </td>
                    @if($experiencia->ambito_sector_id == 1)
                        <td>
                            <center>
                                <strong>NOMBRE:</strong> {{strtoupper($experiencia->ente_publico)}} <br>
                                <strong>CARGO/PUESTO:</strong> {{strtoupper($experiencia->puesto)}} {{strtoupper($experiencia->cargo_comision)}}
                                <br>
                                <strong>PERIODO:</strong>{{strtoupper($experiencia->fecha_ingreso)}}
                                {{strtoupper($experiencia->fecha_egreso)}}<br>
                            </center>
                        </td>
                    @else
                        <td>
                            <center>
                                <strong>NOMBRE:</strong> {{strtoupper($experiencia->nombre_empresa)}} <br>
                                <strong>CARGO/PUESTO:</strong> {{strtoupper($experiencia->puesto)}} {{strtoupper($experiencia->cargo_comision)}}
                                <br>
                                <strong>PERIODO:</strong>{{strtoupper($experiencia->fecha_ingreso)}}
                                {{strtoupper($experiencia->fecha_egreso)}}<br>
                            </center>
                        </td>
                    @endif
                    <td class="all">
                        <div style="display: inline-block;">
                            <button data-id="{{$experiencia->id}}" type="button"
                                    class="btn btn-xs btn-warning btn-editar-experiencia">
                                <i class="ion ion-edit"></i>
                            </button>
                            <button type="button" class="btn btn-xs btn-danger btn-borrar" data-id="{{$experiencia->id}}">
                                <i class="ion ion-trash-a"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="3" class="text-center">
                    <h6>No hay actividad laboral registrada</h6>
                </td>
            </tr>
        @endif
        </tbody>
    </table>
    <center>
        <strong>Si desea registrar una actividad laboral pulse:
            <button type="button" class="btn btn-secondary btn-sm" id="add-act-laboral" data-toggle="modal"
                    data-target=".bd-example-modal-lg">Agregar
            </button>
        </strong>
    </center>
</div>

<div class="form-row">
    <div class="form-group col-md-12">
        <strong>{!! Form::label('datosPareja.observaciones', 'Aclaraciones / Observaciones:  *') !!}</strong>
        {!! Form::textarea('datosPareja[observaciones]', isset($pareja->observaciones) ? $pareja->observaciones : null, ['class'=>'form-control alert-danger  text-uppercase']) !!}
        <strong>{!! Form::label('aclaraciones', 'Todos los campos marcados con * son obligatorios.') !!}</strong>
    </div>
</div>

<div class="text-center">
    <a class='btn btn-submit text-light' href="{{route("experiencia_laboral.index")}}">Ir a la sección anterior</a>
    {{ Form::button('Guardar e ir a la siguiente sección', ['type' => 'submit', 'class' => 'btn btn-submit text-light', 'id' => 'datos-pareja-submit'] )}}
</div>

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            @isset($experienciaLaboral)
            {{--let actual = {{$experienciaLaboral->ambito_sector_id}};--}}
            @endisset
            $(".form-control").addClass("alert-danger")
            $(".domicilio-MXBinmuebles").hide();
            $(".domicilio-EXBinmuebles").hide();
            $(".sector-privado-otro").hide();
            $(".sector-publico").hide();
            $(".lugar-reside").hide();
            $(".especifique-sector").hide();
            $("#cancelar").hide();
            $(".num-int").prop("required", false);
            let date = new Date();
            let day = date.getDate() - 1;
            let month = date.getMonth() + 1;
            let year = date.getFullYear();
            let fecha;
            if (month < 10) {
                fecha = `${year}-0${month}-${day}`;
            } else {
                fecha = `${year}-${month}-${day}`;
            }
            $(".fecha").attr("max", fecha)
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
                    $('.domicilio-MXBinmuebles').find("input").prop("required", true);
                    $('.domicilio-MXBinmuebles').find("select").prop("required", true);
                    $('.domicilio-EXBinmuebles').hide();
                    $('.domicilio-EXBinmuebles').find("input").prop("required", false);
                    $('.domicilio-EXBinmuebles').find("select").prop("required", false);

                } else if (parseInt($(this).val()) === 2) {
                    $('.domicilio-MXBinmuebles').hide();
                    $('.domicilio-EXBinmuebles').show();
                    $('#municipio_id').find("option").remove();
                    $('.domicilio-MXBinmuebles').find("input").prop("required", false);
                    $('.domicilio-MXBinmuebles').find("select").prop("required", false);
                    $('.domicilio-EXBinmuebles').find("input").prop("required", true);
                    $('.domicilio-EXBinmuebles').find("select").prop("required", true);
                } else if ($(this).val() !== "") {
                    $('.domicilio-MXBinmuebles').hide();
                    $('.domicilio-EXBinmuebles').hide();
                    $('.domicilio-EXBinmuebles').find("input").val("");
                    $('.domicilio-EXBinmuebles').find("select").val("");
                    $('.domicilio-MXBinmuebles').find("input").val("");
                    $('.domicilio-MXBinmuebles').find("select").val("");
                    $('#municipio_id').find("option").remove();
                    $('.domicilio-MXBinmuebles').find("input").prop("required", false);
                    $('.domicilio-EXBinmuebles').find("input").prop("required", false);
                    $('.domicilio-EXBinmuebles').find("select").prop("required", false);
                    $('.domicilio-MXBinmuebles').find("select").prop("required", false);
                }
            });
            $('.lugar-reside-change').change(function () {
                if (parseInt($(this).val()) === 1) {
                    $('.domicilio-EXBinmuebles').find("input").val("");
                    $('.domicilio-EXBinmuebles').find("select").val("");
                } else if (parseInt($(this).val()) === 2) {
                    $('.domicilio-MXBinmuebles').find("input").val("");
                    $('.domicilio-MXBinmuebles').find("select").val("");
                } else {
                    $('.domicilio-MXBinmuebles').hide();
                    $('.domicilio-EXBinmuebles').hide();
                    $('.domicilio-EXBinmuebles').find("input").val("");
                    $('.domicilio-EXBinmuebles').find("select").val("");
                    $('.domicilio-MXBinmuebles').find("input").val("");
                    $('.domicilio-MXBinmuebles').find("select").val("");
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
            $("#habita-domicilio").change(function () {
                const respuesta = parseInt($(this).val());
                if (respuesta !== 2) {
                    $('.domicilio-MXBinmuebles').hide();
                    $('.domicilio-EXBinmuebles').hide();
                    $('.domicilio-EXBinmuebles').find("input").val("");
                    $('.domicilio-EXBinmuebles').find("select").val("");
                    $('.domicilio-MXBinmuebles').find("input").val("");
                    $('.domicilio-MXBinmuebles').find("select").val("");
                    $("#lugar-reside").val("");
                    $(".lugar-reside").hide();
                    $("#lugar-reside").prop("required", false);
                    $('.domicilio-EXBinmuebles').find("input").prop("required", false);
                    $('.domicilio-EXBinmuebles').find("select").prop("required", false);
                    $('.domicilio-MXBinmuebles').find("input").prop("required", false);
                    $('.domicilio-MXBinmuebles').find("select").prop("required", false);
                } else if (!isNaN(respuesta)) {
                    $(".lugar-reside").show();
                    $("#lugar-reside").prop("required", true);
                    $("#lugar-reside").change();
                }
            });
            $("#ambito-sector").change(function () {
                const sector = parseInt($(this).val());
                if (sector === 1) {
                    $(".sector-privado-otro").hide();
                    $(".sector-privado-otro").find("select").prop("required", false);
                    $(".sector-privado-otro").find("input").prop("required", false);
                    $(".sector-publico").show();
                    $(".sector-publico").find("select").prop("required", true);
                    $(".sector-publico").find("input").prop("required", true);
                    $(".sector-privado-otro").find("select").val("");
                    $(".sector-privado-otro").find("input").val("");
                    $(".regimen_fiscal_id").prop("required", false);

                } else if (sector === 2 || sector === 3) {
                    $(".sector-privado-otro").show();
                    $(".sector-publico").hide();
                    $(".sector-publico").find("input").val("");
                    $(".sector-publico").find("select").val("");
                    $(".sector-privado-otro").find("select").prop("required", true);
                    $(".sector-privado-otro").find("input").prop("required", true);
                    $(".sector-publico").find("select").prop("required", false);
                    $(".sector-publico").find("input").prop("required", false);

                    $("#regimen_fiscal_id").on("change", function () {
                        var regimen_fiscal_id = document.getElementById("regimen_fiscal_id").value;
                        if (regimen_fiscal_id == 1) {
                            document.getElementById("empleador_fisica").style.display = "block";
                            document.getElementById("empleador_moral").style.display = "none";
                            document.getElementById("empleador_fisica_RFC").style.display = "block";
                            document.getElementById("empleador_moral_RFC").style.display = "none";
                            $("#rfc").prop("required", false);
                            $("#rfc").prop("maxlength", '13');
                            $("#rfc").prop("pattern", '([A-Z]{4}[0-9]{6}[A-Z0-9]{0,3})');
                            $("#rfc").prop("title", 'Ingresa RFC a 10 o 13 dígitos');
                            $("#rfc").prop("placeholder", 'p. ej. XAXA010101X0A');
                        } else {
                            document.getElementById("empleador_fisica").style.display = "none";
                            document.getElementById("empleador_moral").style.display = "block";
                            document.getElementById("empleador_fisica_RFC").style.display = "none";
                            document.getElementById("empleador_moral_RFC").style.display = "block";
                            $("#rfc").prop("required", true);
                            $("#rfc").prop("maxlength", '12');
                            $("#rfc").prop("pattern", '([A-Z]{3}[0-9]{6}[A-Z0-9]{0,3})');
                            $("#rfc").prop("title", 'Ingresa RFC a 12 dígitos');
                            $("#rfc").prop("placeholder", 'p. ej. XAX010101X0A');
                        }
                    });

                    {{--                    @isset($experienciaLaboral)--}}
                    {{--                    if (actual !== sector) {--}}
                    {{--                        $(".sector-privado-otro").find("select").val("");--}}
                    {{--                        $(".sector-privado-otro").find("input").val("");--}}
                    {{--                        actual += 10;--}}
                    {{--                    }--}}
                    {{--                    @endisset--}}
                } else {
                    $(".sector-publico").find("select").prop("required", false);
                    $(".sector-publico").find("input").prop("required", false);
                    $(".sector-publico").hide();
                    $(".sector-publico").find("input").val("");
                    $(".sector-publico").find("select").val("");
                    $(".sector-privado-otro").find("select").val("");
                    $(".sector-privado-otro").find("input").val("");
                    $(".sector-privado-otro").hide();
                    $(".sector-privado-otro").find("select").prop("required", false);
                    $(".sector-privado-otro").find("input").prop("required", false);
                    $(".sector-privado-otro").find("select").val("");
                    $(".sector-privado-otro").find("input").val("");
                }
            });
            $("#sector-privado").change(function () {
                const sector = parseInt($(this).val());
                if (sector === 17) {
                    $(".especifique-sector").show();
                    $("#especifique-sector").prop("required", true);
                } else {
                    $(".especifique-sector").hide();
                    $("#especifique-sector").val("");
                    $("#especifique-sector").prop("required", false);
                }
            });
            $("#curp").blur(function () {
                let curp = $(this).val();
                $("#curp").val(curp.toString().toUpperCase());
            });
            $("#add-act-laboral").click(function () {
                $("#form-laboral").modal('show');
                $(".btn-submit-add").show();
                $(".btn-submit-edit").hide();
                edit();
            });
            $("#cancelar").click(function () {
                $("#cancelar").hide();
                $("#add-act-laboral").show();
                $("#act-laborarl").hide();
                $("#ambito-sector").prop('required', true);
            });
            {{--$('#form-actividad').submit(function (e) {--}}
            {{--    e.preventDefault();--}}
            {{--    /*Ajax Request Header setup*/--}}
            {{--    $.ajaxSetup({--}}
            {{--        headers: {--}}
            {{--            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
            {{--        }--}}
            {{--    });--}}

            {{--    /* Submit form data using ajax*/--}}
            {{--    $.ajax({--}}
            {{--        url: "{{route("storeEmpleoPareja")}}",--}}
            {{--        method: 'post',--}}
            {{--        data: $(this).serialize(),--}}
            {{--        success: function (response) {--}}
            {{--            console.log("listo");--}}
            {{--        }--}}
            {{--    });--}}
            {{--});--}}
            $("#form-actividad").submit(function (e) {
                e.preventDefault();
                if ($("#cve").val() === "") {
                    addEmpleo();
                } else {
                    updateExperiencia();
                }
            });

            function addEmpleo() {
                var token = '{{csrf_token()}}';// ó $("#token").val() si lo tienes en una etiqueta html.
                var data = $("#form-actividad").serialize();
                $.ajax({
                    type: "post",
                    url: "{{route("storeEmpleoPareja")}}",
                    data: data,
                    success: function (data) {
                        listar(data);
                        $("#ambito-sector").change();
                        $("#sector-privado").change();
                    }
                });
            }

            function listar(data) {
                if (Object.keys(data).length !== 0) {
                    var html = '';
                    $.each(data, function (index, partObj) {
                        html += '<tr class="text-uppercase">';
                        html += '    <td>' + partObj.ambito + '</td>';
                        html += '    <td class="text-center">';
                        if (partObj.ambito_sector_id === 1) {
                            console.log(partObj);
                            html += '       <strong>NOMBRE:</strong>' + partObj.ente_publico + '<br>';
                            html += '       <strong>CARGO/PUESTO:</strong>' + partObj.cargo_comision + '<br>';
                            html += '       <strong>PERIODO:</strong>' + partObj.fecha_ingreso + '<br>';
                        } else {
                            html += '       <strong>NOMBRE:</strong>' + partObj.nombre_empresa + '<br>';
                            html += '       <strong>CARGO/PUESTO:</strong>' + partObj.puesto + '<br>';
                            html += '       <strong>PERIODO:</strong>' + partObj.fecha_ingreso + '<br>';
                        }
                        html += '    </td>';
                        html += '<td>';
                        html += '   <div style="display: inline-block;">';
                        html += '    <button type="button" class="btn btn-xs btn-warning btn-editar-experiencia" data-id="' + partObj.id + '">';
                        html += '    <i class="ion ion-edit"></i></button>';

                        html += ' <button class="btn btn-xs btn-danger btn-borrar" type="button" data-id="' + partObj.id + '">';
                        html += '<i class="ion ion-trash-a"></i>';
                        html += '</button></div>';
                        html += '</td>';
                        html += '</tr>';
                        // console.log(html);
                        $("#table-experiencia tbody").html(html);
                    });
                } else {
                    html += '<tr> <td colspan="3" class="text-center">';
                    html += '<h6>No hay actividad laboral registrada</h6> </td> </tr>';
                    $("#table-experiencia tbody").html(html);
                }
                $("#form-laboral").modal("hide");
                $("#form-actividad")[0].reset();
            }

            $(document).on('click', '.btn-borrar', function (e) {
                var id = $(this).data('id');
                Swal.fire({
                    title: '¿Está seguro?',
                    text: 'Al oprimir el botón de aceptar se eliminará el registro',
                    icon: 'warning',
                    showCancelButton: true,
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '/datos_pareja_declarante/destroy_empleo/' + id,
                            async: true,
                            type: 'GET',
                            success: function (data) {
                                listar(data);
                            }
                        });
                    }
                });
            });

            $(document).on('click', '.btn-editar-experiencia', function () {
                $(".btn-submit-add").hide();
                $(".btn-submit-edit").show();
                $("#form-actividad")[0].reset();
                $("#form-laboral").modal('show');
                var id = $(this).data('id');
                $.ajax({
                    url: '/datos_pareja_declarante/edit_empleo/' + id,
                    async: true,
                    type: 'GET',
                    success: function (data) {
                        $('.btn-submit-edit').attr('data-id', data.id);
                        $("#ambito-sector").val(data.ambito_sector_id);
                        $("#regimen_fiscal_id").val(data.regimen_fiscal_id);
                        $("#nombre-exp").val(data.nombre_empresa);
                        $("#puesto").val(data.puesto);
                        $("#rfc").val(data.rfc);
                        $("#fecha_ingreso_privado").val(data.fecha_ingreso);
                        $("#sector-privado").val(data.sector_id);
                        $("#especifique-sector").val(data.especifique_otro_sector);
                        $("#salario_mensual_neto").val(data.salario_mensual_neto);
                        $("#proveedor_contratista").val(data.respuesta_proveedor_id);
                        $("#nombre_ente").val(data.ente_publico);
                        $("#area").val(data.area_adscripcion);
                        $("#empleo").val(data.cargo_comision);
                        $("#funcio").val(data.funcion_pricipal);
                        $("#salario").val(data.salario_mensual_neto);
                        $("#fecha_publico").val(data.fecha_ingreso);
                        $("#cve").val(data.id);
                        edit();
                    }
                });
            })

            function edit() {
                $("#ambito-sector").change();
                $("#sector-privado").change();
            }

            function updateExperiencia() {
                var id = $("#cve").val();
                var token = '{{csrf_token()}}';// ó $("#token").val() si lo tienes en una etiqueta html.
                var data = $("#form-actividad").serialize();
                $.ajax({
                    type: "put",
                    url: "/datos_pareja_declarante/update/" + id,
                    data: data,
                    success: function (data) {
                        listar(data);
                        $("#ambito-sector").change();
                        $("#sector-privado").change();
                    }
                });
            }

            $(".cancel").click(function () {
                $("#form-actividad")[0].reset();
                edit();
            });

            @isset($pareja)
            $("#tipo-ciudadano").change();
            $('#lugar-reside').change();
            $("#habita-domicilio").change();
            {{--            @if($experienciaLaboral == null)--}}
            {{--            $("#ambito-sector").val("4");--}}
            {{--            @endif--}}
            @endisset
        })
        ;


    </script>
@endsection
