<div class="card-body">
    <div class="form-row">
        <div class="form-group col-md-4">
            {!! Form::label('nivel', 'Nivel / Orden de gobierno:') !!}
            {!! Form::select('datos_empleo_declarante[nivel_gobierno_id]',$nivel,null,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'nivel_gobierno_id', 'disabled' => 'disabled']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('ambito', 'Ámbito público:') !!}
            {!! Form::select('datos_empleo_declarante[ambito_publico_id]',$ambito,null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'ambito_publico_id', 'disabled' => 'disabled']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('entepublico', 'Nombre del Ente Público:') !!}
            {!! Form::text('datos_empleo_declarante[nombre_ente_publico]',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'nombre_ente_publico', 'disabled' => 'disabled']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            {!! Form::label('adscripcion', 'Área de adscripción:') !!}
            {!! Form::text('datos_empleo_declarante[area_adscripcion]',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'area_adscripcion', 'disabled' => 'disabled']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('empleo', 'Empleo, cargo o comisión:') !!}
            {!! Form::text('datos_empleo_declarante[empleo_cargo]',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'empleo_cargo', 'disabled' => 'disabled']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('honorarios', '¿Está contratado por honorarios?:') !!}
            {!! Form::text('datos_empleo_declarante[honorarios]',null,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'honorarios', 'disabled' => 'disabled']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            {!! Form::label('nivelempleo', 'Nivel del empleo, cargo o comisión:') !!}
            {!! Form::text('datos_empleo_declarante[nivel_empleo]',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'nivel_empleo', 'disabled' => 'disabled']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-6">
            {!! Form::label('funcion', 'Especifique función principal: *') !!}
            {!! Form::text('datos_empleo_declarante[funcion_principal]',null,['class'=>'form-control', 'placeholder'=>'p. ej. Desarrollo de sistemas',  'id' => 'funcion_principal' ]) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            {!! Form::label('fecha', 'Fecha de toma de posesión del empleo, cargo o comisión:') !!}
            {!! Form::date('datos_empleo_declarante[fecha_posecion_empleo]',null,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'fecha_posecion_empleo', 'disabled' => 'disabled']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('telefono', 'Teléfono de oficina:  *:') !!}
            {!! Form::text('datos_empleo_declarante[telefono_oficina]',null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. 5555555555',  'id' => 'telefono_oficina']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-2">
            {!! Form::label('ext', 'Extensión:  *:') !!}
            {!! Form::text('datos_empleo_declarante[extension]',null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. 555',  'id' => 'extension']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
</div>
<hr>
<div class="card-body">
    <h5> DOMICILIO DEL EMPLEO, CARGO O COMISIÓN</h5>
    <div class="form-row">
        <div class="form-group col-md-3">
            {!! Form::label('calleempleo', 'Calle: *') !!}
            {!! Form::text('datos_empleo_declarante[calle]',null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. Av. Independencia',  'id' => 'calle']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-3">
            {!! Form::label('numexterior', 'Número exterior: *') !!}
            {!! Form::text('datos_empleo_declarante[numero_exterior]',null,['class'=>'form-control', 'placeholder'=>'p. ej. 0101',  'id' => 'numero_exterior']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-3">
            {!! Form::label('numinterior', 'Número interior / Piso: *') !!}
            {!! Form::text('datos_empleo_declarante[numero_interior_piso]',null,['class'=>'form-control', 'placeholder'=>'p. ej. 02',  'id' => 'numero_interior_piso']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-3">
            {!! Form::label('colonia', 'Colonia / Localidad: *') !!}
            {!! Form::text('datos_empleo_declarante[colonia_localidad]',null,['class'=>'form-control', 'placeholder'=>'p. ej. Centro',  'id' => 'colonia_localidad']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-5">
            {!! Form::label('municipio', 'Municipio: *') !!}
            {!! Form::text('datos_empleo_declarante[municipio]',null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. Toluca',  'id' => 'municipio']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-5">
            {!! Form::label('entidad', 'Entidad Federativa: *') !!}
            {!! Form::text('datos_empleo_declarante[entidad_federativa]',null,['class'=>'form-control', 'placeholder'=>'p. ej. 0101',  'id' => 'entidad_federativa', 'disabled' => 'disabled']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
        <div class="form-group col-md-2">
            {!! Form::label('codigo', 'Código Postal: *') !!}
            {!! Form::text('datos_empleo_declarante[codigo_postal]',null,['class'=>'form-control', 'placeholder'=>'p. ej. 50000',  'id' => 'codigo_postal']) !!}
            <span class="text-danger" style="font-size:150%"></span>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            {!! Form::label('aclaraciones', 'Aclaraciones / Observaciones:') !!}
            {!! Form::textarea('datos_empleo_declarante[aclaraciones]', null, ['class'=>'form-control alert-danger',  'id' => 'aclaraciones']) !!}
        </div>
    </div>
    <br>
    <div class="form-row">
        <div class="form-group col-md-12">
            {!! Form::label('nota', 'Todos los campos marcados con * son obligatorios.') !!}
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
