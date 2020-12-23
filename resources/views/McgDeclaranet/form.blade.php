
<!-- PRIMER SECCION -->
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('tipo_inmueble_id', 'Tipo de Movimiento: *') !!}</strong>
                {!! Form::select('bienesinmuebles[tipo_inmueble_id]', isset($selecttipoInmueble) ? $selecttipoInmueble : [], isset($bien) ? $bien->tipo_inmueble_id : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder' => 'Selecciona una opción',  'id' => 'tipo_inmueble_id', 'required' => 'true']) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('fecha_adquisicion', 'Fecha movimiento: *') !!}</strong>
                {!! Form::date('bienesinmuebles[fecha_adquisicion]', isset($bien) ? $bien->fecha_adquisicion : null,['class'=>'form-control text-uppercase  tipo-titular', 'id' => 'fecha_adquisicion', 'required' => 'true', 'max'=>date("Y-m-d")]) !!}
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
                <strong style="line-height: 15px;">{!! Form::label('porcentaje_propiedad', 'RFC:') !!}</strong>
                {!! Form::text('bienesinmuebles[porcentaje_propiedad]', isset($bien) ? $bien->porcentaje_propiedad : null, ['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. 10%',  'id' => 'porcentaje_propiedad', 'maxlength'=>'3', 'min'=>'1', 'max'=>'100', 'pattern' => '[0-9]{0,3}', 'required' => 'true']) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('superficieTerreno', 'Homoclave:') !!}</strong>
                {!! Form::text('bienesinmuebles[superficie_terreno]', isset($bien) ? $bien->superficie_terreno : null, ['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. 30m', 'min'=>'1', 'id' => 'superficie_terreno', 'pattern' => '[0-9]{0,50}', 'required' => 'true']) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('superficie_construccion', 'CURP:') !!}</strong>
                {!! Form::text('bienesinmuebles[superficie_construccion]', isset($bien) ? $bien->superficie_construccion : null, ['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. 30m', 'min'=>'1', 'id' => 'superficie_construccion', 'pattern' => '[0-9]{0,50}', 'required' => 'true']) !!}
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <strong>{!! Form::label('forma_adquisicion_id', 'Nombre (s):') !!}</strong>
            {!! Form::text('bienesinmuebles[superficie_construccion]', isset($bien) ? $bien->superficie_construccion : null, ['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. 30m', 'min'=>'1', 'id' => 'superficie_construccion', 'pattern' => '[0-9]{0,50}', 'required' => 'true']) !!}
        </div>
        <div class="col-md-4">
            <strong>{!! Form::label('forma_adquisicion_id', 'Primer apellido:') !!}</strong>
            {!! Form::text('bienesinmuebles[superficie_construccion]', isset($bien) ? $bien->superficie_construccion : null, ['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. 30m', 'min'=>'1', 'id' => 'superficie_construccion', 'pattern' => '[0-9]{0,50}', 'required' => 'true']) !!}
        </div>
        <div class="col-md-4">
            <strong>{!! Form::label('forma_adquisicion_id', 'Segundo apellido:') !!}</strong>
            {!! Form::text('bienesinmuebles[superficie_construccion]', isset($bien) ? $bien->superficie_construccion : null, ['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. 30m', 'min'=>'1', 'id' => 'superficie_construccion', 'pattern' => '[0-9]{0,50}', 'required' => 'true']) !!}
        </div>
    </div>
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <strong style="line-height: 15px;">{!! Form::label('relacion_transmisor_id', 'Nombre del empleo, cargo o comisión:') !!}</strong>
                {!! Form::text('bienesinmuebles[relacion_transmisor]',isset($bien) ? $bien->relacion_transmisor : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'Relación transmisor',  'id' => 'relacion_transmisor', 'pattern' => '[A-Za-z]{0,300}']) !!}

            </div>
        </div>
        <!--yjz-->
        <div class="col-md-4" id="combo_otro_Disabled">
            <div class="form-group">
                <strong>{!! Form::label('relacion_transmisor', 'Nivel del empleo, cargo o comisión:') !!}</strong>
                {!! Form::text('bienesinmuebles[relacion_transmisor]',isset($bien) ? $bien->relacion_transmisor : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'Relación transmisor',  'id' => 'relacion_transmisor', 'pattern' => '[A-Za-z]{0,300}']) !!}
            </div>
        </div>

    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('valor_conforme_id', 'Adscripción:') !!}</strong>
                {!! Form::select('bienesinmuebles[valor_conforme_id]', isset($selectvalorConforme) ? $selectvalorConforme : [], isset($bien) ? $bien->valor_conforme_id : null, ['class'=>'form-control text-uppercase  tipo-titular', 'placeholder' => 'Selecciona una opción', 'id' => 'valor_conforme_id', 'required' => 'true']) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('tipo_moneda_id', 'Dirección:') !!}</strong>
                {!! Form::select('bienesinmuebles[tipo_moneda_id]', isset($selectMoneda) ? $selectMoneda : [], isset($bien) ? $bien->tipo_moneda_id : null, ['class'=>'form-control text-uppercase  tipo-titular', 'placeholder' => 'Selecciona una opción', 'id' => 'tipo_moneda_id', 'required' => 'true']) !!}
                <!--{!! Form::text('bienesinmuebles[tipo_moneda]', isset($bien) ? $bien->tipo_moneda : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. Peso mexicano', 'id' => 'tipo_moneda', 'required' => 'true']) !!}-->
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('tipo_moneda_id', 'Departamento:') !!}</strong>
                {!! Form::select('bienesinmuebles[tipo_moneda_id]', isset($selectMoneda) ? $selectMoneda : [], isset($bien) ? $bien->tipo_moneda_id : null, ['class'=>'form-control text-uppercase  tipo-titular', 'placeholder' => 'Selecciona una opción', 'id' => 'tipo_moneda_id', 'required' => 'true']) !!}
                <!--{!! Form::text('bienesinmuebles[tipo_moneda]', isset($bien) ? $bien->tipo_moneda : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. Peso mexicano', 'id' => 'tipo_moneda', 'required' => 'true']) !!}-->
            </div>
        </div>

    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <strong>{!! Form::label('ubicacion_inmueble_id', '¿Está contratado por honorarios?') !!}</strong>
            {!! Form::select('bienesinmuebles[ubicacion_inmueble_id]', isset($selectubicacionInmueble) ? $selectubicacionInmueble : [], isset($bien) ? $bien->ubicacion_inmueble_id : null, ['class'=>'form-control text-uppercase  tipo-titular',  'placeholder' => 'Selecciona una opción', 'id' => 'ubicacion_inmueble_id', 'required' => 'true']) !!}
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
   
    });
</script>
@endsection
