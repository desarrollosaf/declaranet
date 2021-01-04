
<!-- PRIMER SECCION -->
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('servidor.tipo_movimiento', 'Tipo de Movimiento: *') !!}</strong>
                {!! Form::select('servidor[tipo_movimiento]', $tipoMovMcg, isset($inversiones) ? $inversiones->tipo_de_inversion_id : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder' => 'Selecciona una opción',  'id' => 'tipo_movimiento', 'required' => 'true']) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('servidor.fecha_movimiento', 'Fecha movimiento: *') !!}</strong>
                {!! Form::date('servidor[fecha_movimiento]', isset($bien) ? $bien->fecha_adquisicion : null,['class'=>'form-control text-uppercase  tipo-titular', 'id' => 'fecha_movimiento', 'required' => 'true']) !!}
            </div>
        </div>
    </div>
</div>

<!-- APARECE SI SE SELCCIONA TERCERO -->


<hr>
<!-- 2DA SECCION -->
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <strong style="line-height: 15px;">{!! Form::label('servidor.rfc', 'RFC:') !!}</strong>
                {!! Form::text('servidor[rfc]', isset($bien) ? $bien->porcentaje_propiedad : null, ['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. 10%',  'id' => 'rfc', 'maxlength'=>'3', 'min'=>'1', 'max'=>'100', 'pattern' => '[0-9]{0,3}', 'required' => 'true']) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('servidor.homoclave', 'Homoclave:') !!}</strong>
                {!! Form::text('servidor[homoclave]', isset($bien) ? $bien->superficie_terreno : null, ['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. 30m', 'min'=>'1', 'id' => 'homoclave', 'pattern' => '[0-9]{0,50}', 'required' => 'true']) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('servidor.curp', 'CURP:') !!}</strong>
                {!! Form::text('servidor[curp]', isset($bien) ? $bien->superficie_construccion : null, ['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. 30m', 'min'=>'1', 'id' => 'curp', 'pattern' => '[0-9]{0,50}', 'required' => 'true']) !!}
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <strong>{!! Form::label('servidor.nombre', 'Nombre (s):') !!}</strong>
            {!! Form::text('servidor[nombre]', isset($bien) ? $bien->superficie_construccion : null, ['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. 30m', 'min'=>'1', 'id' => 'nombre', 'pattern' => '[0-9]{0,50}', 'required' => 'true']) !!}
        </div>
        <div class="col-md-4">
            <strong>{!! Form::label('servidor.primer_apellido', 'Primer apellido:') !!}</strong>
            {!! Form::text('servidor[primer_apellido]', isset($bien) ? $bien->superficie_construccion : null, ['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. 30m', 'min'=>'1', 'id' => 'primer_apellido', 'pattern' => '[0-9]{0,50}', 'required' => 'true']) !!}
        </div>
        <div class="col-md-4">
            <strong>{!! Form::label('servidor.segundo_apellido', 'Segundo apellido:') !!}</strong>
            {!! Form::text('servidor[segundo_apellido]', isset($bien) ? $bien->superficie_construccion : null, ['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. 30m', 'min'=>'1', 'id' => 'segundo_apellido', 'pattern' => '[0-9]{0,50}', 'required' => 'true']) !!}
        </div>
    </div>
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <strong style="line-height: 15px;">{!! Form::label('servidor.cargo', 'Nombre del empleo, cargo o comisión:') !!}</strong>
                {!! Form::text('servidor.servidor[cargo]',isset($bien) ? $bien->relacion_transmisor : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'Relación transmisor',  'id' => 'cargo', 'pattern' => '[A-Za-z]{0,300}']) !!}

            </div>
        </div>
        <!--yjz-->
        <div class="col-md-4" id="combo_otro_Disabled">
            <div class="form-group">
                <strong>{!! Form::label('servidor.nivel_cargo', 'Nivel del empleo, cargo o comisión:') !!}</strong>
                {!! Form::text('servidor[nivel_cargo]',isset($bien) ? $bien->relacion_transmisor : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'Relación transmisor',  'id' => 'nivel_cargo', 'pattern' => '[A-Za-z]{0,300}']) !!}
            </div>
        </div>

    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('servidor.tipo_dependencia', 'Adscripción:') !!}</strong>
                {!! Form::select('servidor[tipo_dependencia]', $tipoDependencia, isset($inversiones) ? $inversiones->tipo_de_inversion_id : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder' => 'Selecciona una opción', 'id' => 'tipo_dependencia', 'required' => 'true']) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('servidor.tipo_direccion', 'Dirección:') !!}</strong>
                {!! Form::select('servidor[tipo_direccion]', $tipoDireccion, isset($inversiones) ? $inversiones->tipo_de_inversion_id : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder' => 'Selecciona una opción', 'id' => 'tipo_direccion', 'required' => 'true']) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('servidor.tipo_departamento', 'Departamento:') !!}</strong>
                {!! Form::select('servidor[tipo_departamento]', $tipoDepartamento, isset($inversiones) ? $inversiones->tipo_de_inversion_id : null, ['class'=>'form-control text-uppercase  tipo-titular', 'placeholder' => 'Selecciona una opción', 'id' => 'tipo_departamento', 'required' => 'true']) !!}
            </div>
        </div>

    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <strong>{!! Form::label('servidor.honorarios', '¿Está contratado por honorarios?') !!}</strong>
            {!! Form::select('servidor[honorarios]', isset($selectubicacionInmueble) ? $selectubicacionInmueble : [], isset($bien) ? $bien->ubicacion_inmueble_id : null, ['class'=>'form-control text-uppercase  tipo-titular',  'placeholder' => 'Selecciona una opción', 'id' => 'honorarios', 'required' => 'true']) !!}
        </div>
        <div class="col-md-8">
            <div class="form-group">
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <center>
            <br>
            <a href="{{route('bienes_inmuebles.index')}}" class="btn btn-sm btn-submit text-light">Ir a la sección anterior</a>
            <input type="submit" name="submit" class="btn btn-sm btn-submit text-light" value="Guardar e ir a la siguiente sección">
        </center>
    </div>
</div>


@section('scripts')
<script>
    $(document).ready(function () {

        $("#tipo_dependencia").on('change', function (){
            var tipoDependencia = $(this).val();
            $.ajax({
                url: "{{asset('getDependencia')}}/" + tipoDependencia,
                type: 'get',
                dataType: 'json',
                success: function (response) {
                    console.log(response);
                    $("#tipo_direccion").find('option').remove();
                    $("#tipo_direccion").append('<option value="">SELECCIONE UNA OPCION</option>');
                    $(response).each(function (i, v) { // indice, valor
                        $("#tipo_direccion").append('<option value="' + v.id + '">' + v.nombre + '</option>');
                    });
                }
            });
        });

        $("#tipo_direccion").on('change', function (){
            var tipoDireccion = $(this).val();
            $.ajax({
                url: "{{asset('getDireccion')}}/" + tipoDireccion,
                type: 'get',
                dataType: 'json',
                success: function (response) {
                    console.log(response);
                    $("#tipo_departamento").find('option').remove();
                    $("#tipo_departamento").append('<option value="">SELECCIONE UNA OPCION</option>');
                    $(response).each(function (i, v) { // indice, valor
                        $("#tipo_departamento").append('<option value="' + v.id + '">' + v.nombre + '</option>');
                    });
                }
            });
        });
   
    });
</script>
@endsection
