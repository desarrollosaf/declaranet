@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <h1>Experiencia Laboral</h1>
        </div>
        <div class="card-body">
            {!! Form::model($experiencia, ['route' => ['experiencia_laboral.update', $experiencia->id], 'method' => 'put'] ) !!}
            @include('experienciaLaboral.form')
            <div class="form-row">
                <center>
                    {{ Form::button('Guardar', ['type' => 'submit', 'class' => 'btn btn-submit text-light float-right'] )}}
                </center>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(document).ready(function(){
        $(".PRIVADO").hide();
        $(".PÚBLICO").hide();
        $(".AMBOS").hide();
        $("#ambito").change();
    });
    $("#ambito").on("change", function () {
        if ($(this).val() == "2") {
            $(".PRIVADO").show();
            $(".AMBOS").show();
            $(".PÚBLICO").hide();
        } else if($(this).val() == "1") {
            $(".PRIVADO").hide();
            $(".PÚBLICO").show();
            $(".AMBOS").show();
        }else{
            $(".PRIVADO").hide();
            $(".PÚBLICO").hide();
            $(".AMBOS").hide();
        }
    });
    $(".submitForm").on("click",function(e){
        e.preventDefault();
        let that = this;
        var error = false;
        if($("#ambito").val() == 1){
            if($("#nivel_orden_gobierno_id").val() == ""){
                error = true;
            }
            if($("#ambito_publico").val() == ""){
                error = true;
            }
            if($("#area_adscripcion").val() == ""){
                error = true;
            }
            if($("#cargo_comision").val() == ""){
                error = true;
            }
            
            if($("#fecha_ingreso").val() == ""){
                error = true;
            }
     
            if($("#fecha_egreso").val() == ""){
                error = true;
            }
     
            if($("#lugares_ubicacion").val() == ""){
                error = true;
            }
            if($("#observaciones").val() == ""){
                error = true;
            }
            console.log("ambito",$("#ambito").val());
        }else if($("#ambito").val() == 2){
            console.log("ambito",$("#ambito").val());
            if($("#nombre_empresa").val() == ""){
                    error = true;
                }
            if($("#rfc").val() == ""){
                    error = true;
                }
            if($("#area").val() == ""){
                    error = true;
                }
            if($("#puesto").val() == ""){
                    error = true;
                }
            if($("#sector_id").val() == ""){
                    error = true;
                }
            if($("#funcion_principal").val() == ""){
                    error = true;
                }
            if($("#fecha_ingreso").val() == ""){
                    error = true;
                }
            if($("#fecha_egreso").val() == ""){
                    error = true;
                }
            if($("#observaciones").val() == ""){
                    error = true;
                }
        }
        
        console.log("error",error);
        if(error){
            Swal.fire({
                title: 'Error',
                text: 'llena todos los campos obligatorios',
                icon: 'error'
            });
        }else{
            $('#frmExperienciaLaboral').submit();
        }
    });
</script>
@endsection


