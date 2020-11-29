@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <h1>DATOS CURRICULARES DEL DECLARANTE</h1>
            </div>
            <div class="card-body">
                {!! Form::model($curricular, ['route' => ['datos_curriculares_declarante.update', $curricular->id], 'method' => 'put','id' => 'datosCurricularesDeclarante'] ) !!}
                    @include('datosCurricularesDeclarante.form')
                    <div class="form-row text-center">
                        <div class="col">
                            {{ Form::button('Guardar', ['type' => 'submit', 'class' => 'btn btn-submit text-light btnGuardar'] )}}
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $("#nivel").on("change", function(){
                var nivel = $('#nivel option:selected').html();
                if(nivel == "PRIMARIA" || nivel == "SECUNDARIA"){
                    $("#carrera").prop("disabled", true);
                }
                else{
                    $("#carrera").prop("disabled", false);
                }
            });
        });
        $(".btnGuardar").on("click",function(e){
            e.preventDefault();
            var validar = validarCurriculares();
            if(!validar){
                $('#datosCurricularesDeclarante').submit();
            }else{
                Swal.fire({
                    title: 'Error',
                    text: 'llena todos los campos obligatorios',
                    icon: 'error'
                });
            }
        });
        function validarCurriculares(){
            var error = false;
            $(".validar").css("color","");
            if($("#nivel_id").val() == 0){
                error = true;
                $("#nivel_id").prev().css("color","red");
            }else{
                var nivel = $('#nivel_id option:selected').text();
                console.log(nivel);
                if(nivel != "PRIMARIA" && nivel != "SECUNDARIA"){
                    if($("#carrera_area").val() == ""){
                        $("#carrera_area").prev().css("color","red");
                        error = true;
                    }
                }
            }
            if($("#institucion_educativa").val() == ""){
                error = true;
                $("#institucion_educativa").prev().css("color","red");
            }
            if($("#estatus_id").val() == 0){
                error = true;
                $("#estatus_id").prev().css("color","red");
            }else{
                var nivel = $('#estatus_id option:selected').text();
                if(nivel == "FINALIZADO"){
                    if($("#documento_id").val() == 0){
                        error = true;
                        $("#documento_id").prev().css("color","red");
                    }
                    if($("#fecha_documento").val() == ""){
                        error = true;
                        $("#fecha_documento").prev().css("color","red");
                    }
                }
            }
            if($("#lugar_ubicacion_id").val() == 0){
                error = true;
                $("#lugar_ubicacion_id").prev().css("color","red");
            }
            return error;
        }
    </script>
@endsection
