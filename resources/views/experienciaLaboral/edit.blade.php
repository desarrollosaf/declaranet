@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <h3>Experiencia Laboral</h3>
        </div>
        <div class="card-body">
            {!! Form::model($experiencia, ['route' => ['experiencia_laboral.update', $experiencia->id], 'method' => 'put'] ) !!}
            @include('experienciaLaboral.form')
            {!! Form::close() !!}
        </div>
    </div>
</div>
<input type="hidden" id="accion" value="editar">
@endsection
@section('scripts')
<script>
    $(document).ready(function(){
        $(".PRIVADO").hide();
        $(".PÚBLICO").hide();
        $(".AMBOS").hide();
        $("#ambito_sector_id").change();
    });
    $("#ambito_sector_id").on("change", function () {
        if ($(this).val() == "2") {
            $(".PRIVADO").show();
            $(".AMBOS").show();
            $(".PÚBLICO").hide();
            $("#nivel_orden_gobierno_id").prop("required", false);
            $("#ambito_publico_id").prop("required", false);
            $("#ente_publico").prop("required", false);
            $("#area_adscripcion").prop("required", false);
            $("#cargo_comision").prop("required", false);
            $("#funcion_principal").prop("required", false);

            $("#nombre_empresa").val("");
            $("#rfc").val("");
            $("#area").val("");
            $("#puesto").val("");
            $("#sector_id").val("");
        } else if($(this).val() == "1") {
            $(".PRIVADO").hide();
            $(".PÚBLICO").show();
            $(".AMBOS").show();
            $("#nombre_empresa").prop("required", false);
            $("#rfc").prop("required", false);
            $("#area").prop("required", false);
            $("#puesto").prop("required", false);
            $("#sector_id").prop("required", false);

            $("#nivel_orden_gobierno_id").val("");
            $("#ambito_publico_id").val("");
            $("#ente_publico").val("");
            $("#area_adscripcion").val("");
            $("#cargo_comision").val("");
            $("#funcion_principal").val("");
        }else if($(this).val() == "3"){
            $(".PRIVADO").show();
            $(".PÚBLICO").hide();
            $(".AMBOS").show();
            $("#nivel_orden_gobierno_id").prop("required", false);
            $("#ambito_publico_id").prop("required", false);
            $("#ente_publico").prop("required", false);
            $("#area_adscripcion").prop("required", false);
            $("#cargo_comision").prop("required", false);
            $("#funcion_principal").prop("required", false);

            $("#nombre_empresa").val("");
            $("#rfc").val("");
            $("#area").val("");
            $("#puesto").val("");
            $("#sector_id").val("");
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

    if ($("#accion").val() == "editar") {
        $("#tipoDePersona").change();
        $("#tipoVehiculo_id").change();
        $("#lugar_registro").change();
        $("#titular_id").change();
        $("#tipoPersonaTercero").change();
        document.getElementById("edit").style.display = "block";
    } else {
        document.getElementById("crearF").style.display = "block";
    }
</script>
@endsection

<DIV></DIV>

