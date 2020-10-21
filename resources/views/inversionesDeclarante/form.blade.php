<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('calle', 'Tipo de inversión / activo:') !!}
        {!! Form::text('calle',null,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'nombre']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('exterior', 'Fondo de inversión:') !!}
        {!! Form::text('exterior',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'exterior']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('interior', 'Titular de la inversión, cuenta bancaria y otros tipo de valores:') !!}
        {!! Form::text('interior',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'interior']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('calle', '¿Dónde se localiza la inversión, cuenta bancaria y otro tipo de valores/activos?:') !!}
        {!! Form::text('calle',null,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'nombre']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('exterior', 'Institución o razón social:') !!}
        {!! Form::text('exterior',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'exterior']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('interior', 'RFC:') !!}
        {!! Form::text('interior',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'interior']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('calle', 'Número de cuenta contrato o póliza:') !!}
        {!! Form::text('calle',null,['class'=>'form-control text-uppercase', 'placeholder'=>'',  'id' => 'nombre']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('exterior', 'Tipo de moneda:') !!}
        {!! Form::text('exterior',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'exterior']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('interior', 'Saldo a la fecha de ingreso:') !!}
        {!! Form::text('interior',null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'interior']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-12">
        {!! Form::label('aclaraciones', 'Aclaraciones / Observaciones:') !!}
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
