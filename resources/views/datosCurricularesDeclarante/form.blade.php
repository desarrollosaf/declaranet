<h5>ÚLTIMO GRADO DE ESTUDIOS</h5>
<hr>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong> {!! Form::label('curriculares[nivel_id]', 'Nivel: *',['class' => 'validar']) !!}</strong>
        {!! Form::select('curriculares[nivel_id]',$nivelesSelect, isset($curricular) ? $curricular->nivel_id : null ,['class'=>'form-control text-uppercase','placeholder' => '- SELECCIONA UNA OPCIÓN' ,'id' => 'nivel_id','required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>  {!! Form::label('curriculares[institucion_educativa]', 'Institución educativa: *',['class' => 'validar']) !!}</strong>
        {!! Form::text('curriculares[institucion_educativa]',isset($curricular) ? $curricular->institucion_educativa : null,['class'=>'form-control text-uppercase', 'placeholder'=>'P. EJ. UNAM', 'id' => 'institucion_educativa','required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('curriculares[carrera_area]', 'Carrera o área de conocimiento: *',['class' => 'validar']) !!}</strong>
        {!! Form::text('curriculares[carrera_area]',isset($curricular) ? $curricular->carrera_area : null,['class'=>'form-control text-uppercase', 'placeholder'=>'P. EJ. LICENCIATURA EN DERECHO', 'id' => 'carrera_area']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-4">
        <strong> {!! Form::label('curriculares[estatus_id]', 'Estatus: *',['class' => 'validar']) !!}</strong>
        {!! Form::select('curriculares[estatus_id]',$estatusSelect, isset($curricular) ? $curricular->estatus_id : null,['class'=>'form-control text-uppercase','placeholder' => '- SELECCIONA UNA OPCIÓN' ,'id' => 'estatus_id','required' => true]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong>{!! Form::label('curriculares[documento_id]', 'Documento obtenido: *',['class' => 'validar']) !!}</strong>
        {!! Form::select('curriculares[documento_id]',$documentoSelect, isset($curricular) ? $curricular->documento_id : null,['class'=>'form-control text-uppercase','placeholder' => '- SELECCIONA UNA OPCIÓN' , 'id' => 'documento_id']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
    <div class="form-group col-md-4">
        <strong> {!! Form::label('curriculares[fecha_documento]', 'Fecha de obtención de documento: *',['class' => 'validar']) !!}</strong>
        {!! Form::date('curriculares[fecha_documento]',isset($curricular) ? $curricular->fecha_documento : null,['class'=>'form-control', 'placeholder'=>'', 'id' => 'fecha_documento','required' => true,'max' => date('Y-m-d')]) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>
<div class="form-row">

    <div class="form-group col-md-4">
        <strong> {!! Form::label('curriculares[lugar_ubicacion_id]', 'Lugar donde se ubica: *',['class' => 'validar']) !!}</strong>
        {!! Form::select('curriculares[lugar_ubicacion_id]',$lugaresSelect, isset($curricular) ? $curricular->lugar_ubicacion_id : null,['class'=>'form-control text-uppercase','placeholder' => '- SELECCIONA UNA OPCIÓN' , 'id' => 'lugar_ubicacion_id']) !!}
        <span class="text-danger" style="font-size:150%"></span>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-12">
        <strong>{!! Form::label('curriculares[observaciones]', 'Aclaraciones / Observaciones: *') !!}</strong>
        {!! Form::textarea('curriculares[observaciones]', isset($curricular) ? $curricular->observaciones : null, ['class'=>'form-control alert-danger text-uppercase', 'id' => 'observaciones']) !!}
        <strong><label class="requerido">&nbsp;Todos los campos marcados con * son obligatorios. </label></strong>
    </div>
</div>
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $("#nivel_id").on("change", function(){
                var nivel = $('#nivel_id option:selected').html();
                if(nivel == "PRIMARIA" || nivel == "SECUNDARIA"){
                    $("#carrera_area").prop("disabled", true);
                    $("#carrera_area").removeAttr("required");
                    $("#carrera_area").val("");
                }else{
                    $("#carrera_area").prop("disabled", false);
                    $("#carrera_area").prop("required", true);
                }
                $("#carrera_area").val("");
            });
        });
        $("#estatus_id").on("change",function(){
            if($("#estatus_id").val() == 1){
                $("#documento_id").prop("disabled", true);
                $("#documento_id").removeAttr("required");
                $("#fecha_documento").prop("disabled", true);
                $("#fecha_documento").removeAttr("required");
            }else{
                $("#documento_id").prop("disabled", false);
                $("#documento_id").prop("required", true);
                $("#fecha_documento").prop("disabled", false);
                $("#fecha_documento").prop("required", true);
            }
            $("#documento_id").val("");
            $("#fecha_documento").prop("required", true);
        });
    </script>
@endsection