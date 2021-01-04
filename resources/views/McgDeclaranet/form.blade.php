<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('servidor.tipo_movimiento', 'Tipo de Movimiento: *') !!}</strong>
                {!! Form::select('servidor[tipo_movimiento]', $tipoMovMcg, isset($servidor) ? $servidor->tipo_movimiento : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder' => 'Selecciona una opción',  'id' => 'tipo_movimiento', 'required' => 'true']) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('servidor.fecha_movimiento', 'Fecha movimiento: *') !!}</strong>
                {!! Form::date('servidor[fecha_movimiento]', isset($servidor) ? $servidor->fecha_movimiento : null,['class'=>'form-control text-uppercase  tipo-titular', 'id' => 'fecha_movimiento', 'required' => 'true']) !!}
            </div>
        </div>
    </div>
</div>
<hr>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <strong style="line-height: 15px;">{!! Form::label('servidor.rfc', 'RFC:') !!}</strong>
                {!! Form::text('servidor[rfc]', isset($servidor) ? $servidor->rfc : null, ['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'P. EJ. XAXX010101',  'id' => 'rfc', 'pattern' => '([A-Z]{4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1]\d))', 'title' => 'El formato debe coincidir con los 10 dígitos correspondientes aL RFC.', 'required' => 'true']) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('servidor.homoclave', 'Homoclave:') !!}</strong>
                {!! Form::text('servidor[homoclave]', isset($servidor) ? $servidor->homoclave : null, ['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. Carlos', 'id' => 'homoclave', 'pattern' => '[a-zA-Z|0-9]{3}', 'title' => 'El formato debe contener 3 dígitos', 'required' => 'true']) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('servidor.curp', 'CURP:') !!}</strong>
                {!! Form::text('servidor[curp]', isset($servidor) ? $servidor->curp : null, ['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'P. EJ. XAXX010101XAXAXA01', 'id' => 'curp', 'pattern' => '([A-Z]{4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[HM](AS|BC|BS|CC|CL|CM|CS|CH|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[A-Z]{3}[0-9A-Z]\d)', 'title' => 'El formato debe coincidir con los 18 dígitos correspondientes a la CURP.', 'required' => 'true']) !!}
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <strong>{!! Form::label('servidor.nombre', 'Nombre (s):') !!}</strong>
            {!! Form::text('servidor[nombre]', isset($servidor) ? $servidor->nombre : null, ['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. Carlos', 'id' => 'nombre', 'required' => 'true']) !!}
        </div>
        <div class="col-md-4">
            <strong>{!! Form::label('servidor.primer_apellido', 'Primer apellido:') !!}</strong>
            {!! Form::text('servidor[primer_apellido]', isset($servidor) ? $servidor->primer_apellido : null, ['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. Pérez', 'id' => 'primer_apellido', 'required' => 'true']) !!}
        </div>
        <div class="col-md-4">
            <strong>{!! Form::label('servidor.segundo_apellido', 'Segundo apellido:') !!}</strong>
            {!! Form::text('servidor[segundo_apellido]', isset($servidor) ? $servidor->segundo_apellido : null, ['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. Pérez', 'id' => 'segundo_apellido', 'required' => 'true']) !!}
        </div>
    </div>
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <strong style="line-height: 15px;">{!! Form::label('servidor.cargo', 'Nombre del empleo, cargo o comisión:') !!}</strong>
                {!! Form::text('servidor.servidor[cargo]',isset($servidor) ? $servidor->cargo : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. Abogado dictaminador',  'id' => 'cargo', 'required' => 'true']) !!}

            </div>
        </div>
        <div class="col-md-4" id="combo_otro_Disabled">
            <div class="form-group">
                <strong>{!! Form::label('servidor.nivel_cargo', 'Nivel del empleo, cargo o comisión:') !!}</strong>
                {!! Form::text('servidor[nivel_cargo]',isset($servidor) ? $servidor->nivel_cargo : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder'=>'p. ej. 25-3', 'title' => 'El formato debe ser XX-X',  'id' => 'nivel_cargo', 'pattern' => '[0-9]{2}[-]{1}[0-9]{1}', 'required' => 'true']) !!}
            </div>
        </div>

    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('servidor.tipo_dependencia', 'Adscripción:') !!}</strong>
                {!! Form::select('servidor[tipo_dependencia]', $tipoDependencia, isset($servidor) ? $servidor->tipo_dependencia : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder' => 'Selecciona una opción', 'id' => 'tipo_dependencia', 'required' => 'true']) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('servidor.tipo_direccion', 'Dirección:') !!}</strong>
                {!! Form::select('servidor[tipo_direccion]', $tipoDireccion, isset($servidor) ? $servidor->tipo_direccion : null,['class'=>'form-control text-uppercase  tipo-titular', 'placeholder' => 'Selecciona una opción', 'id' => 'tipo_direccion', 'required' => 'true']) !!}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <strong>{!! Form::label('servidor.tipo_departamento', 'Departamento:') !!}</strong>
                {!! Form::select('servidor[tipo_departamento]', $tipoDepartamento, isset($servidor) ? $servidor->tipo_departamento : null, ['class'=>'form-control text-uppercase  tipo-titular', 'placeholder' => 'Selecciona una opción', 'id' => 'tipo_departamento', 'required' => 'true']) !!}
            </div>
        </div>

    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <strong>{!! Form::label('servidor.honorarios', '¿Está contratado por honorarios?') !!}</strong>
            {!! Form::select('servidor[honorarios]', $respuestas, isset($servidor) ? $servidor->honorarios : null, ['class'=>'form-control text-uppercase  tipo-titular',  'placeholder' => 'Selecciona una opción', 'id' => 'honorarios', 'required' => 'true']) !!}
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
