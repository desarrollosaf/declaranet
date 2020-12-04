@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <h1>DATOS DEL DEPENDIENTE ECONÓMICO</h1>
        </div>
        <div class="card-body">
            <div class="col-md-12">
                <table class="table table-bordered table-striped table-hover" style="border-collapse: collapse;">
                    <thead style="background-color: #682244;" class="text-light">
                    <tr>
                        <td></td>
                    </tr>
                    <thead>
                </table>
            </div>
            <p class="text-justify">Deberá proporcionar la información de CADA UNA de las personas, familiares o no, cuya manutención dependa principalmente de los ingresos del Declarante.</p>
            <div class="alert alert-danger text-center" role="alert">
                Para registrar información pulse:
                <a href="{{route("datos_dependiente_declarante.create")}}" type="button" class="btn btn-sm btn-secondary">
                    Agregar
                </a>
                <br>
                Sí no tiene dependientes económicos, seleccione
                <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#exampleModal">
                    Ninguno
                </button>
            </div>
            <br>
            <a href="" class="btn btn-submit float-left text-light">Ir a la sección anterior</a> 
            <a href="" class="btn btn-submit float-right text-light">Ir a la siguiente sección</a>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script>


    $(document).ready(function () {
        $(".PRIVADO").hide();
        $(".PÚBLICO").hide();
        $(".AMBOS").hide();
    });
    $("#habita-domicilio").on("change", function () {
        if ($(this).val() == "2") {
            $("#divLugarResidencia").show();
        } else {
            $("#divLugarResidencia").hide();
        }
    });


    $("#sector").on("change", function () {
        if ($(this).val() == "2" || $(this).val() == "3") {
            $(".PRIVADO").show();
            $(".AMBOS").show();
            $(".PÚBLICO").hide();
        } else if ($(this).val() == "1") {
            $(".PRIVADO").hide();
            $(".PÚBLICO").show();
            $(".AMBOS").show();
        } else if ($(this).val() == "") {
            $(".PRIVADO").hide();
            $(".PÚBLICO").hide();
        }
    });


    $(".submitForm").on("click", function (e) {
        e.preventDefault();
        let that = this;
        var error = false;
        if ($("#ambito").val() == 1) {
            if ($("#nivel_orden_gobierno_id").val() == "") {
                error = true;
            }
            if ($("#ambito_publico").val() == "") {
                error = true;
            }
            if ($("#area_adscripcion").val() == "") {
                error = true;
            }
            if ($("#cargo_comision").val() == "") {
                error = true;
            }

            if ($("#fecha_ingreso").val() == "") {
                error = true;
            }

            if ($("#fecha_egreso").val() == "") {
                error = true;
            }

            if ($("#lugares_ubicacion").val() == "") {
                error = true;
            }
            if ($("#observaciones").val() == "") {
                error = true;
            }
            console.log("ambito", $("#ambito").val());
        } else if ($("#ambito").val() == 2) {
            console.log("ambito", $("#ambito").val());
            if ($("#nombre_empresa").val() == "") {
                error = true;
            }
            if ($("#rfc").val() == "") {
                error = true;
            }
            if ($("#area").val() == "") {
                error = true;
            }
            if ($("#puesto").val() == "") {
                error = true;
            }
            if ($("#sector_id").val() == "") {
                error = true;
            }
            if ($("#funcion_principal").val() == "") {
                error = true;
            }
            if ($("#fecha_ingreso").val() == "") {
                error = true;
            }
            if ($("#fecha_egreso").val() == "") {
                error = true;
            }
            if ($("#observaciones").val() == "") {
                error = true;
            }
        }

        console.log("error", error);
        if (error) {
            Swal.fire({
                title: 'Error',
                text: 'llena todos los campos obligatorios',
                icon: 'error'
            });
        } else {
            $('#frmExperienciaLaboral').submit();
        }
    });
    $(document).ready(function () {
        $("#parentesco").on("change", function () {
            var nivel = $('#parentesco option:selected').html();
            if (nivel === "OTRO(ESPECIFIQUE)") {
                $("#especifique-parentezco").prop("disabled", false);
            } else {
                $("#especifique-parentezco").val("");
                $("#especifique-parentezco").prop("disabled", true);
            }
        });
    });
</script>
@endsection
