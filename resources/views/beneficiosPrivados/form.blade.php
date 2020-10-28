<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('tipoBeneficio', 'Tipo de beneficio:') !!}
        {!! Form::select('tipoBeneficio',$tipoBeneficio, null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'tipoBeneficio']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('tipoBeneficioEspecifique', 'Especifique:') !!}
        {!! Form::text('tipoBeneficioEspecifique',null,['class'=>'form-control', 'placeholder'=>'P. ej. Beca', 'disabled'=>'disabled',  'id' => 'tipoBeneficioEspecifique']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('beneficiario', 'Beneficiario:') !!}
        {!! Form::select('beneficiario', $beneficiarios,null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'beneficiario']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('beneficiarioEspecifique', 'Especifique:') !!}
        {!! Form::text('beneficiarioEspecifique',null,['class'=>'form-control', 'placeholder'=>'p. ej. Concuño', 'disabled'=> 'disabled', 'id' => 'beneficiarioEspecifique']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('sector', 'Sector productivo al que pertenece:') !!}
        {!! Form::select('sector',$sectoProductivo,null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'sector']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('sectorEspecifique', 'Especifique:') !!}
        {!! Form::text('sectorEspecifique',null,['class'=>'form-control', 'placeholder'=>'p. ej. Juan Pérez', 'disabled'=> 'disabled',  'id' => 'sectorEspecifique']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('otorgante', 'Otorgante:') !!}
        {!! Form::select('otorgante', $otorgante, null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'otorgante']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('nombreOtorgante', 'Nombre del otorgante:') !!}
        {!! Form::text('nombreOtorgante',null,['class'=>'form-control', 'placeholder'=>'p. ej.Juan Pérez',  'id' => 'nombreOtorgante']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('rfc', 'RFC:') !!}
        {!! Form::text('rfc',null,['class'=>'form-control', 'placeholder'=>'p. ej. XXXX010101XXX',  'id' => 'rfc']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        {!! Form::label('formaRecepcion', 'Forma de recepción del beneficio:') !!}
        {!! Form::select('formaRecepcion',$formaRecepcion,null,['class'=>'form-control', 'placeholder'=>'',  'id' => 'formaRecepcion']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('especifiqueBeneficio', 'Especifique el beneficio:') !!}
        {!! Form::text('especifiqueBeneficio',null,['class'=>'form-control', 'placeholder'=>'p. ej. cheque',  'id' => 'especifiqueBeneficio']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        {!! Form::label('montoMensual', 'Monto mensual aproximado del beneficio:') !!}
        {!! Form::text('montoMensual',null,['class'=>'form-control', 'placeholder'=>'p. ej. $10,000 MxN',  'id' => 'montoMensual']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-12">
        {!! Form::label('aclaraciones', 'Aclaraciones/Observaciones:') !!}
        {!! Form::textarea('aclaraciones',null,['class'=>'form-control alert-danger', 'placeholder'=>'',  'id' => 'aclaraciones']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
