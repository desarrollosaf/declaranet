<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('nombre', 'Nombre (s):') !!}</strong>
        {!! Form::text('nombre',null,['class'=>'form-control text-uppercase alert-danger', 'placeholder'=>'',  'id' => 'nombre', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('apellidop', 'Primer apellido:') !!}</strong>
        {!! Form::text('apellidop',null,['class'=>'form-control alert-danger', 'placeholder'=>'',  'id' => 'apellidop','required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('apellidom', 'Segundo apellido:') !!}</strong>
        {!! Form::text('apellidom',null,['class'=>'form-control alert-danger', 'placeholder'=>'',  'id' => 'apellidom', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('fechanacimiento', 'Fecha de nacimiento:') !!}</strong>
        {!! Form::date('fechanacimiento',null,['class'=>'form-control alert-danger text-uppercase',  'id' => 'fechanacimiento', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('rfc', 'RFC:') !!}</strong>
        {!! Form::text('rfc',null,['class'=>'form-control alert-danger', 'placeholder'=>'',  'id' => 'rfc', 'required' => true, 'pattern' => '([A-Z]{4}[0-9]{6}[A-Z0-9]{3})']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('relacion', ' Relación con el Declarante: * :') !!}
        {!! Form::select('relacion', $selectRelacioDeclarante, null,['class'=>'form-control alert-danger',  'id' => 'relacion', 'required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong>{!! Form::label('extranjero', '¿Es ciudadano extranjero? * :') !!}</strong>
        {!! Form::select('extranjero', $selectCiudadano, null,['class'=>'form-control text-uppercase',  'id' => 'extranjero']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('curp', 'CURP:') !!}</strong>
        {!! Form::text('curp',null,['class'=>'form-control alert-danger', 'placeholder'=>'',  'id' => 'curp']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('dependiente', '¿Es dependiente económico?:') !!}</strong>
        {!! Form::text('dependiente',null,['class'=>'form-control alert-danger', 'placeholder'=>'',  'id' => 'dependiente']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <strong>{!! Form::label('habitadomicilio', '¿Habita en el domicilio del Declarante?:') !!}</strong>
        {!! Form::text('habitadomicilio',null,['class'=>'form-control alert-danger text-uppercase', 'placeholder'=>'',  'id' => 'habitadomicilio']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-6">
        <strong>{!! Form::label('reside', 'Lugar donde reside:') !!}</strong>
        {!! Form::select('reside',$selectLugarReside,null,['class'=>'form-control alert-danger text-uppercase',  'id' => 'reside']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<hr>
<div class="card-body">
    <h5> DOMICILIO DE LA PAREJA </h5>
    @include('domicilioDeclarante.form')
</div>
<hr>
<div class="card-body">
    <h5> ACTIVIDAD LABORAL DE LA PAREJA </h5>
    @include('experienciaLaboral.form')
    <div class="form-row">
        <div class="form-group col-md-12">
            <strong>{!! Form::label('aclaraciones', 'Aclaraciones / Observaciones:') !!}</strong>
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
</div>
@section('scripts')

@endsection
