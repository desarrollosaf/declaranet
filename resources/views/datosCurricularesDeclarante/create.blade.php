@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">

            <div class="card-header">
                <div class="float-left">
                    <h3>DATOS CURRICULARES DEL DECLARANTE</h3>
                </div>
                <div class="float-right">
                    <span class="badge badge-success ml-auto px-4" data-toggle="collapse" href="#collapseDatosEmpleo" role="button" aria-expanded="false" aria-controls="collapseExample"> AYUDA</span>
                </div>
            </div>
            <div class="collapse" id="collapseDatosEmpleo">
                <div class="card-body">
                    <ol class="ayuda">
                        <li><strong>Nivel.</strong> Deberá elegir alguna de las siguientes opciones: primaria, secundaria, bachillerato, carrera técnica o comercial, licenciatura, especialidad, maestría o doctorado.</li>
                        <li><strong>Institución educativa.</strong> Escribir el nombre de la institución o escuela donde se realizaron los estudios.</li>
                        <li><strong>Carrera o área de conocimiento (Si aplica).</strong> Escribir el nombre de la carrera o de los estudios realizados.</li>
                        <li><strong>Estatus.</strong> Seleccionar si se encuentra cursando los estudios, finalizado o trunco.</li>
                        <li><strong>Documento obtenido.</strong> Señalar la opción que corresponda: boleta, certificado, constancia o título.</li>
                        <li><strong>Fecha de obtención del documento.</strong> Señalar la fecha que indica el documento obtenido.</li>
                        <li><strong>Lugar donde se ubica la institución educativa.</strong> Señalar si se ubica en México o en el extranjero.</li>
                    </ol>
                    <strong>Aclaraciones/observaciones.</strong> En este espacio podrá realizar las aclaraciones u observaciones que considere pertinentes respecto de alguno o algunos de los incisos de este apartado.
                </div>
            </div>

            <div class="card-body">
                {!! Form::open(['route'=>'datos_curriculares_declarante.store', 'method'=>'POST', 'files' => true, 'role' => 'form', 'id' => 'datosCurricularesDeclarante']) !!}
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
