<span style="text-align: justify !important; margin-left:15px"> Se manifiestará el beneficio o ganancia directa del Declarante, si supera al mes 250 Unidades de Medida y Actualización (UMA).</span><br><br>
<div class="alert alert-danger" role="alert" style="background-color:#E8CECF">
    Todos los datos de clientes de la pareja o dependientes económicos no serán públicos.<br>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="form-group">
                <br>
                <label class="control-label" for="NumDoc">¿Realiza alguna actividad lucrativa independiente al empleo, cargo o comisión?</label>
            </div>
        </div>
        <div class="col-lg-4 actividad lucrativa">
            <div class="form-group">
                <br>
                {!! Form::select('respuesta', $respuestas, null,['class'=>'form-control alert-danger',  'id' => 'respuestas']) !!}
            </div>
        </div>
    </div>
</div>
<div id="contenedores" style="display: block;">
    <div class="container" style="font-size: .8em;">
        <div class="row">   
            <div class="form-group col-md-4 ">
                <strong>{!! Form::label('Títular de la actividad lucrativa:') !!} </strong>
                {!! Form::select('experiencia[titular_id]', $selectTitularActividadLucrativa,[],['class'=>'form-control','id' => 'nivel_orden_gobierno_id']) !!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
            <div class="form-group col-md-4 actividad lucrativa">
                <strong>{!! Form::label('Nombre de la empresa o del servicio que proporciona:') !!}</strong>
                {!! Form::text('nombre_empresa', null,['class'=>'form-control text-uppercase', 'placeholder'=>'P.ej.MAE.S.A de C.V.','id' => 'rfc']) !!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
            <div class="form-group col-md-4 actividad lucrativa ">
                <strong>{!! Form::label('RFC:') !!}</strong>
                {!! Form::text('rfc', null,['class'=>'form-control text-uppercase', 'placeholder'=>'P.ej.XXX01011001010.','id' => 'rfc']) !!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
        <div class="row">   
            <div class="form-group col-md-4 ">
                <strong>{!! Form::label('Tipo de cliente principal:') !!} </strong>
                {!! Form::select('tipoPersona', $selecttipoPersona , null,['class'=>'form-control alert-danger',  'id' => 'tipoa lert_de_cliente_principal:']) !!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
            <div class="form-group col-md-4" style="display:none;">
                <strong>{!! Form::label('Nombre de la empresa o del servicio que proporciona:') !!}</strong>
                {!! Form::text('nombre_empresa', null,['class'=>'form-control text-uppercase', 'placeholder'=>'P.ej.MAE.S.A de C.V.','id' => 'rfc']) !!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
            <div class="form-group col-md-4">
                <strong>{!! Form::label('Nombre del cliente principal:') !!} </strong>
                {!! Form::text('cliente_principal', null,['class'=>'form-control text-uppercase', 'placeholder'=>'P. ej. Juan Pérez.','id' => 'rfc']) !!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
            <div class="form-group col-md-4 actividad lucrativa ">
                <strong>{!! Form::label('RFC:') !!}</strong>
                {!! Form::text('rfc', null,['class'=>'form-control text-uppercase', 'placeholder'=>'P.ej.XXX01011001010.','id' => 'rfc']) !!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
        <div class="row">   
            <div class="form-group col-md-4 ">
                <strong>{!! Form::label('sector_id','Sector productivo al que pertenece:') !!} </strong>
                {!! Form::select('sector_id', $selectSectores, null,['class'=>'form-control alert-danger',  'id' => 'sector productivo al que pertenece']) !!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
            <div class="form-group col-md-4">
                <strong>{!! Form::label('Especifique:') !!}</strong>
                {!! Form::text('especifique', null,['class'=>'form-control text-uppercase', 'placeholder'=>'P.ej.Sector petrolero.','id' => 'especifique']) !!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
            <div class="form-group col-md-4 actividad lucrativa">
                <strong>{!! Form::label('Monto aproximado del beneficio o ganancia mensual que obtiene del cliente principal:') !!}</strong>
                {!! Form::text('monto', null,['class'=>'form-control text-uppercase', 'placeholder'=>'P.ej.10,000.00 Mxn.','id' => 'monto']) !!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
        <div class="row">   
            <div class="form-group col-md-4 ">
                <strong>{!! Form::label('lugar_ubicacion_id','Lugar dónde se ubica:') !!} </strong>
                {!! Form::select('lugar_ubicacion_id', $selectLugarDondeSeUbica, null,['class'=>'form-control alert-danger',  'id' => 'sector productivo al que pertenece']) !!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
            <div class="form-group col-md-4 ">
                <strong>{!! Form::label('Entidad Federativa:') !!}</strong>
                {!! Form::text('entidad_federativa', null,['class'=>'form-control text-uppercase', 'placeholder'=>'P.ej.Mèxico.','id' => 'entidad_federativa']) !!}
                <span class="text-danger" style="font-size:150%"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 actividad">      
                <div class="form-group">
                    <br>
                    <strong>{!! Form::label('Observacionse/Aclaraciones:') !!} </strong>
                    {!! Form::textarea('observaciones', null,['class'=>'form-control text-uppercase','id' => 'observaciones']) !!}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-12">
            <strong>{!! Form::label('aclaraciones', 'Todos los campos marcados con * son obligatorios.') !!}</strong>
        </div>
    </div>
</div>



