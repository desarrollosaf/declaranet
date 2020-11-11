<div class="row">
    <div class="col-md-12">
        <h5> EMPLEO, CARGO O COMISIÓN / PUESTO</h5>
    </div>
    <hr>
    <div class="col-md-8"><strong>ÁMBITO / SECTOR EN EL QUE LABORASTE:</strong></div>
    <div class="form-group col-md-4">
        <select id="ambito" name="ambito" class="form-control" required="">
            <option value="">Seleccione una opción</option>                                                    
            <option value="PRIVADO">PRIVADO</option>
            <option value="PÚBLICO">PÚBLICO</option>
        </select>  
    </div>
    <!--<div class="col-md-4"></div>-->
    <div class="form-group col-md-4 PRIVADO">
        {!! Form::label('celpersonal', 'NOMBRE DE LA EMPRESA,SOCIEDAD O ASOCIACIÓN:  *') !!}
        {!! Form::text('celpersonal',null,['class'=>'form-control text-uppercase', 'placeholder'=>'p. ej. Desarrollo S.A de C.V.',  'id' => 'celpersonal']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 PÚBLICO">
        {!! Form::label('celpersonal', 'NIVEL/ORDEN DE GOBIERNO: *') !!}
        {!! Form::select('ecivil', [], null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group col-md-4 PRIVADO">
        {!! Form::label('celpersonal', 'RFC:  *') !!}
        {!! Form::text('celpersonal',null,['class'=>'form-control text-uppercase', 'placeholder'=>'P.ej.XXX01011001010.',  'id' => 'celpersonal']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 PÚBLICO">
        {!! Form::label('celpersonal', 'ÁMBITO PÚBLICO: *') !!}
        {!! Form::select('ecivil', [], null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group col-md-4 PRIVADO">
        {!! Form::label('celpersonal', 'AREA:  *') !!}
        {!! Form::text('celpersonal',null,['class'=>'form-control text-uppercase', 'placeholder'=>'P.ej.DESARROLLO Y ACTUALIZACIÓN.',  'id' => 'celpersonal']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 PÚBLICO">
        {!! Form::label('celpersonal', 'NOMBRE DEL ENTE PUBLICO: *') !!}
        {!! Form::text('celpersonal',null,['class'=>'form-control text-uppercase', 'placeholder'=>'P.ej.DESARROLLO Y ACTUALIZACIÓN.',  'id' => 'celpersonal']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 PRIVADO">
        {!! Form::label('celpersonal', 'PUESTO:  *') !!}
        {!! Form::text('celpersonal',null,['class'=>'form-control text-uppercase', 'placeholder'=>'P.ej.ANÁLISTA EN SISTEMAS.',  'id' => 'celpersonal']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 PÚBLICO">
        {!! Form::label('celpersonal', 'ÁREA DE ADSCRIPCIÓN:  *') !!}
        {!! Form::text('celpersonal',null,['class'=>'form-control text-uppercase', 'placeholder'=>'P.ej.ANÁLISTA EN SISTEMAS.',  'id' => 'celpersonal']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 PRIVADO">
        {!! Form::label('celpersonal', 'SECTOR AL QUE PERTENECE: *') !!}
        {!! Form::select('ecivil', [], null, ['class'=>'form-control']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 PÚBLICO">
        {!! Form::label('celpersonal', 'EMPLEO, CARGO O COMISIÓN:  *') !!}
        {!! Form::text('celpersonal',null,['class'=>'form-control text-uppercase', 'placeholder'=>'P.ej.ANÁLISTA EN SISTEMAS.',  'id' => 'celpersonal']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 PRIVADO">
        {!! Form::label('celpersonal', 'ESPECIFIQUE FUNCIÓN PRINCIPAL:  *') !!}
        {!! Form::text('celpersonal',null,['class'=>'form-control text-uppercase', 'placeholder'=>'P.ej.DESARROLLO DE SISTEMAS DE INFORMACIÓN.',  'id' => 'celpersonal']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 PÚBLICO">
        {!! Form::label('celpersonal', 'FECHA DE INGRESO AL PUESTO:  *') !!}
        {!! Form::text('celpersonal',null,['class'=>'form-control text-uppercase', 'placeholder'=>'P.ej.DD/MM/AAAA.',  'id' => 'celpersonal']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 PRIVADO">
        {!! Form::label('celpersonal', 'FECHA DE EGRESO:  *') !!}
        {!! Form::text('celpersonal',null,['class'=>'form-control text-uppercase', 'placeholder'=>'P.ej.DD/MM/AAAA.',  'id' => 'celpersonal']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4 PÚBLICO">
        {!! Form::label('celpersonal', 'LUGAR DONDE SE UBICA: *') !!}
        {!! Form::select('ecivil', [], null, ['class'=>'form-control']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-12 PRIVADO">
        {!! Form::label('celpersonal', 'ACLARACIONES/OBSERVACIONES: *') !!}
        {!! Form::textarea('celpersonal',null,['class'=>'form-control text-uppercase',  'id' => 'celpersonal']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-group col-md-12 PÚBLICO">
    {!! Form::label('celpersonal', 'ACLARACIONES/OBSERVACIONES: *') !!}
    {!! Form::textarea('celpersonal',null,['class'=>'form-control text-uppercase',  'id' => 'celpersonal']) !!}
    <span class="text-danger" style="font-size:150%"></span>
</div>

