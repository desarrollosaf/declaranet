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
            $("#funcion_pricipal").prop("required", false);

            $("#sector_id").on("change", function () {
                if ($(this).val() == "17") {
                    $("#especifique_otro_sector").prop("disabled", false);
                }else{
                    $("#especifique_otro_sector").prop("disabled", true);
                }
            });

            $("#regimen_fiscal_id").on("change", function () {
                var regimen_fiscal_id = document.getElementById("regimen_fiscal_id").value;
                if(regimen_fiscal_id == 1){
                    document.getElementById("empleador_fisica").style.display = "block";
                    document.getElementById("empleador_moral").style.display = "none";
                    document.getElementById("empleador_fisica_RFC").style.display = "block";
                    document.getElementById("empleador_moral_RFC").style.display = "none";
                    $("#rfc").prop("required", false);
                    $("#rfc").prop("maxlength", '13');
                    $("#rfc").prop("pattern", '([A-Z]{4}[0-9]{6}[A-Z0-9]{0,3})');
                    $("#rfc").prop("title", 'Ingresa RFC a 10 o 13 dígitos');
                }else{
                    document.getElementById("empleador_fisica").style.display = "none";
                    document.getElementById("empleador_moral").style.display = "block";
                    document.getElementById("empleador_fisica_RFC").style.display = "none";
                    document.getElementById("empleador_moral_RFC").style.display = "block";
                    $("#rfc").prop("required", true);
                    $("#rfc").prop("maxlength", '12');
                    $("#rfc").prop("pattern", '([A-Z]{3}[0-9]{6}[A-Z0-9]{0,3})');
                    $("#rfc").prop("title", 'Ingresa RFC a 12 dígitos');
                }
            });
            $("#nivel_orden_gobierno_id").val("");
            $("#ambito_publico_id").val("");
            $("#ente_publico").val("");
            $("#area_adscripcion").val("");
            $("#cargo_comision").val("");
            $("#funcion_pricipal").val("");


        } else if($(this).val() == "1") {
            $(".PRIVADO").hide();
            $(".PÚBLICO").show();
            $(".AMBOS").show();

            $("#nombre_empresa").prop("required", false);
            $("#rfca").prop("required", false);
            $("#rfcb").prop("required", false);
            $("#area").prop("required", false);
            $("#puesto").prop("required", false);
            $("#sector_id").prop("required", false);
            $("#especifique_otro_sector").prop("required", false);
            $("#regimen_fiscal_id").prop("required", false);

            $("#nombre_empresa").val("");
            $("#rfca").val("");
            $("#rfcb").val("");
            $("#area").val("");
            $("#puesto").val("");
            $("#sector_id").val("");
            $("#especifique_otro_sector").val("");
            $("#regimen_fiscal_id").val("");

        }else if($(this).val() == "3"){
            $(".PRIVADO").show();
            $(".PÚBLICO").hide();
            $(".AMBOS").show();

            $("#nivel_orden_gobierno_id").prop("required", false);
            $("#ambito_publico_id").prop("required", false);
            $("#ente_publico").prop("required", false);
            $("#area_adscripcion").prop("required", false);
            $("#cargo_comision").prop("required", false);
            $("#funcion_pricipal").prop("required", false);

            $("#nivel_orden_gobierno_id").val("");
            $("#ambito_publico_id").val("");
            $("#ente_publico").val("");
            $("#area_adscripcion").val("");
            $("#cargo_comision").val("");
            $("#funcion_pricipal").val("");


        }else{
            $(".PRIVADO").hide();
            $(".PÚBLICO").hide();
            $(".AMBOS").hide();
        }
    });

    $("#fecha_ingreso").on("change", function () {
        var fecha = document.getElementById("fecha_ingreso").value;
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth() + 1;
        var yyyy = today.getFullYear();
        if (dd < 10) {
            dd = '0' + dd;
        }
        if (mm < 10) {
            mm = '0' + mm;
        }
        today = yyyy + '-' + mm + '-' + dd;
        if (fecha > today) {
            alert("La fecha es mayor a la fecha de registro, favor de comprobar");
            var fechaB = document.getElementById("fecha_ingreso").value = '00/00/0000';
        }
    });

    $("#fecha_egreso").on("change", function () {
        var fecha = document.getElementById("fecha_egreso").value;
        var fecha2 = document.getElementById("fecha_ingreso").value;
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth() + 1;
        var yyyy = today.getFullYear();
        if (dd < 10) {
            dd = '0' + dd;
        }
        if (mm < 10) {
            mm = '0' + mm;
        }
        today = yyyy + '-' + mm + '-' + dd;
        if (fecha > today) {
            alert("La fecha es mayor a la fecha de registro, favor de comprobar");
            var fechaB = document.getElementById("fecha_egreso").value = '00/00/0000';
        }
        if(fecha < fecha2) {
            alert("La fecha de egreso es mejor a la fecha de ingreso, favor de comprobar");
            var fechaB = document.getElementById("fecha_egreso").value = '00/00/0000';
        }
    });

    if ($("#accion").val() == "editar") {
        document.getElementById("edit").style.display = "block";
        $("#ambito_sector_id").change();
        $("#fecha_ingreso").change();
        $("#fecha_egreso").change();
        $("#sector_id").change();

    } else {
        document.getElementById("crearF").style.display = "block";
    }
</script>
@endsection

<DIV></DIV>

