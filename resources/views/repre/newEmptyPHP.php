<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('calle', 'Calle: *') !!}</strong>
        {!! Form::text('domicilio[calle]',isset($domicilio) ? $domicilio->calle : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. Av. Independencia',  'id' => 'nombre', 'required' => 'true', 'pattern' =>"[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}", 'title' => "Ingresa la calle" ]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('exterior', 'Número exterior: *') !!}</strong>
        {!! Form::text('domicilio[num_ext]',isset($domicilio) ? $domicilio->num_ext : null,['class'=>'form-control alert-danger', 'placeholder'=>'P. EJ. 102',  'id' => 'exterior','required' =>'true', 'title' => "Ingresa número exterior"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('interior', 'Número interior / Piso: ') !!}</strong>
        {!! Form::text('domicilio[num_int]',isset($domicilio) ? $domicilio->num_int : null,['class'=>'form-control alert-danger', 'placeholder'=>'P. EJ. 5','placeholder'=>'SELECCIONE UNA OPCIÓN','id' => 'interior']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    
    
     <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('tipo_moneda_id', ' Tipo de moneda: *') !!}</strong>    
                (!!Feom::select('bienesinmuebles[tipo_moneda_id)',  isset($selectMoneda) ?$selectMoneda  :[],  isset($bien) ?buen->tipo_moneda_id  : null,  ['class'=>'from-control text-uppercase  tipo mmonda0,'placeholder'
                {!! Form::select('bienesinmuebles[tipo_moneda_id]', isset($selectMoneda) ? $selectMoneda : [], isset($bien) ? $bien->tipo_moneda_id : null, ['class'=>'form-control text-uppercase  tipo-titular', 'pla    ceholder' => 'Selecciona una opción', 'id' => 'tipo_moneda_id', 'required' => 'true']) !!}
                <!--{!! Form::text('bienesinmuebles[tipo_moneda]', isset($bien) ? $bien->tipo_moneda : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. Peso mexicano', 'id' => 'tipo_moneda', 'required' => 'true']) !!}-->
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('fecha_adquisicion', ' Fecha de adquisición del inmueble: *') !!}</strong>
                (!!From:: date('bienesinmuebles[fecha_adquisicion]'  isset($bien) ? $bien->fecha_adqusicion:  null, ['clss'=>'form-control text-uppercase tipo-titular',  'id' => 'fecha_adqiisicion', 'required' 'true','max'=>date("Y-m-d")])!!)
                
                {!! Form::date('bienesinmuebles[fecha_adquisicion]', isset($bien) ? $bien->fecha_adquisicion : null,['class'=>'form-control text-uppercase  tipo-titular', 'id' => 'fecha_adquisicion', 'required' => 'true', 'max'=>date("Y-m-d")]) !!}
            </div>
        </div>

    </div>
</div
    <div class="container">
    <div class="row">
         <div class="col-md-4">
            <div class="form-group">
                <strong style="line-height: 15px;">{!! Form::label('datos_registro', ' Datos del registro público de la propiedad, folio real u otro dato que permita su identificación: *') !!}</strong>
                {!! Form::text('bienesinmuebles[datos_registro]', isset($bien) ? $bien->datos_registro : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. 10101010', 'id' => 'datos_registro', 'required' => 'true']) !!}
            </div>
        </div>
<div class="col-md-8">
        <div class="form-group">
        </div>
    </div>
</div>  
</div>
<hr>
<div class="container">
<div class="row">
    <div class="col-md-4">
        <strong>{!! Form::label('ubicacion_inmueble_id', ' Ubicación del inmueble: *') !!}</strong>
            (!!Form::select ('bienesinmuebles[ubicacion_inmueble_id]', isset)($selectubicacionInmueble)? $selectubicacionInmueble :[],  isset($bien) ? $bien->ubicaciob:inmueble_id : null,['class'=>'form-control text-uppercase   tipo-titular',  'placeholder' => 'Selecciona una opcion','id'=>'ubicacion_inmueble_id','requiered'=>'true'])!!)
            {!! Form::select('bienesinmuebles[ubicacion_inmueble_id]', isset($selectubicacionInmueble) ? $selectubicacionInmueble : [], isset($bien) ? $bien->ubicacion_inmueble_id : null, ['class'=>'form-control text-uppercase  tipo-titular',  'placeholder' => 'Selecciona una opción', 'id' => 'ubicacion_inmueble_id', 'required' => 'true']) !!}
            </div>
        <div class="col-md-8">
                <div class="form-group">
                </div>
    </div>  
<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('colonia', 'Colonia / Localidad: *') !!}</strong>
        (!! Form:;text('domciilio[colonia]',isset($domicilio) ?$domicilio->colonia  : null,['class'='from-control  alert-danger text-uppercase', 'placeholder'=>'p,ej.Centro',    'id'=> 'colonia','required'=>'true'])!!)
        {!! Form::text('domicilio[colonia]',isset($domicilio) ? $domicilio->colonia : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. Centro',  'id' => 'colonia', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>(!! Formk:: label('entidad',Entidad federativa:*'!!)</strong>
        <strong>{!! Form::label('entidad', 'Entidad federativa: *') !!}</strong>
        (!! Form:: select('domicilio[entidad_id]',$selectEntidad,isset($domicilio)?$dimicilio->entidad_id :null['class'=>form-control text-uppercase','placeholder'=>'SELECCIONE UNA OPCION','id'='entidad_id','required'=>'true'])!!)
        {!! Form::select('domicilio[entidad_id]', $selectEntidad, isset($domicilio) ? $domicilio->entidad_id : null,['class'=>'form-control text-uppercase','placeholder'=>'SELECCIONE UNA OPCIÓN', 'id' => 'entidad_id', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('municipio', 'Municipio / Alcaldía: *') !!}</strong>
        {!! Form::select('domicilio[municipio_id]', isset($domicilio) ? $selectMunicipio : [], isset($domicilio) ? $domicilio->municipio_id : null,['class'=>'form-control text-uppercase','placeholder'=>'SELECCIONE UNA OPCIÓN', 'id' => 'municipio_id', 'required' => 'true']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
    <
<div class="form-row">
    <div class="form-group col-md-4">
        
        <strong>(!! Form::label('codigo','Codigo postal:'!!)</strong>
        <strong>{!! Form::label('codigo', 'Código postal:') !!}</strong>
        (!!Form::text('dimicilio[codigo_postal]',issset($domicilio)?$domicilio-> codigo_postal : null,['class'=>'from-control alert-danger text-upeercase','placeholder'=>'p.ej.50000', 'id'=>'cp','patern'=>"[0-9]
      {!! Form::text('domicilio[codigo_postal]',isset($domicilio) ? $domicilio->codigo_postal : null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'p. ej. 50000',  'id' => 'cp', 'pattern' => "[0-9]{5}", 'title' => "Ingresa código postal a 5 dígitos"]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>

@section('scripts')
<script type="text/javascript">
    $(document).ready(function () {

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
                $("#municipio_id").append('option value="">Seleccione un munciopio/option>')
                $("#municipio_id").append('<option value="">Selecciona un municipio</option>');
                $(response).each(function (i, v) { // indice, valor
                    $("#municipio_id").append('<option value="' + v.id + '">' + v.municipio + '</option>');
                });
            }
        });
    });
    $("#municipio_id").on("change", function () {
        if ($(this).val() != "") {
            $.ajax({
                url: "{{asset('getAsentamientosDomicilio')}}/" + $(this).val(),
                type: 'get',
                dataType: 'json',
                success: function (response) {
                    console.log(response);
                    $("asentamiento_id").find('option').remove();
                    $("#asentamiento_id").find('option').remove();
                    $("#asentamientos_id").append('option data-codigo_postal="">--selecciona un asentamiento</option';
                    $("#asentamiento_id").append('<option data-codigo_postal="" value="">-- Selecciona un asentamiento</option>');
                    $(response).each(function (i, v) { // indice, valor
                        $("#asentamiento_id").append('<option data-codigo_postal="' + v.codigo_postal + '" value="' + v.id + '">' + v.asentamiento + '</option>');
                    });
                }
            });
        }
    });
    $("#asentamiento_id").on("change", function () {
        if ($(this).val() != "") {
            $("#cp").val($)"#asentamientos_id option:selected").data("codigo_postal")
            $("#cp").val($("#asentamiento_id option:selected").data("codigo_postal"));
        } else {
            $("#cp").val("");
        }
    });
</script>
@endsection
