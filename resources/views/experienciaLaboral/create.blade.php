@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <div class="float-left">
                    <h3>EXPERIENCIA LABORAL</h3>
                    <h6 class="card-subtitle">(ÚLTIMOS CINCO EMPLEOS)</h6>
                </div>
                <div class="float-right">
                    <span class="badge badge-success ml-auto px-4" data-toggle="collapse" href="#collapseDatosEmpleo" role="button" aria-expanded="false" aria-controls="collapseExample"> AYUDA</span>
                </div>
            </div>
            <div class="collapse" id="collapseDatosEmpleo">
                <div class="card-body">
                    <ol class="ayuda">
                        <ul>
                            <li>Ámbito/sector en el que laboró. Señalar si el empleo que reporta corresponde al sector público, privado u otro. En caso de señalar otro deberá especificar el sector en el que laboró.
                                <ol>
                                    <li>Sector público
                                        <ul>
                                            <li>Nivel/orden de gobierno. Seleccionar el orden de gobierno en el que se encuentra: federal, estatal o municipal/alcaldía. </li>
                                            <li>Ámbito público. Señalar la naturaleza jurídica al que pertenece: ejecutivo, legislativo, judicial u órgano autónomo.  </li>
                                            <li>Nombre del Ente Público. Señalar el Ente Público al cual se encontró adscrita la plaza. </li>
                                            <li>Área de adscripción. Especificar el nombre de la Unidad Administrativa u homóloga superior inmediata en la que estuvo adscrito. (Superior jerárquico). </li>
                                            <li>Empleo, cargo o comisión. Señalar el nombre del empleo, cargo o comisión que se estableció en su recibo de nómina, nombramiento, contrato u oficio de comisión. </li>
                                            <li>Especifique función principal. Señalar cual es la función o actividad principal que desempeñó. </li>
                                            <li>Fecha de ingreso. Señalar la fecha en que inició empleo, cargo o comisión. </li>
                                            <li>Fecha de egreso. Señalar la fecha en que concluyó empleo, cargo o comisión. </li>
                                            <li>Lugar donde se ubica. Señalar en México o en el extranjero. </li>
                                        </ul>
                                    </li>
                                    <li>Sector privado/otro.
                                        <ul>
                                            <li>Nombre de la empresa, sociedad o asociación. Proporcionar el nombre de la empresa, sociedad o asociación en la que laboró. </li>
                                            <li>RFC. Proporcionar los 12 dígitos de la empresa en que laboró. </li>
                                            <li>Área. Proporcionar el nombre del área en la cual estaba adscrito (a). </li>
                                            <li>Puesto. Proporcionar el nombre del puesto que desempeñó. </li>
                                            <li>Sector al que pertenece. Elegir el sector al que pertenece la empresa, sociedad o asociación. En caso de señalar otros, especifique. </li>
                                            <li>Fecha de ingreso al empleo. Señalar la fecha en que inició empleo, cargo o comisión. </li>
                                            <li>Fecha de egreso. Señalar la fecha en que concluyó empleo, cargo o comisión. </li>
                                            <li>Lugar donde se ubica. Señalar en México o en el extranjero. </li>
                                        </ul>
                                    </li>
                    Ámbito/sector en el que laboró. Señalar si el empleo que
                    reporta corresponde al sector público, privado u otro. En caso de señalar
                    otro deberá especificar el sector en el que laboró.


                            <ol>
                                <li>Sector público
                                    <ul>
                                        <li>Nivel/orden de gobierno. Seleccionar el
                                            orden de gobierno en el que se encuentra: federal, estatal o
                                            municipal/alcaldía.
                                        </li>
                                        <li>Ámbito público. Señalar la naturaleza
                                            jurídica al que pertenece: ejecutivo, legislativo, judicial
                                            u órgano autónomo.
                                        </li>
                                        <li>Nombre del Ente Público. Señalar el Ente
                                            Público al cual se encontró adscrita la plaza.
                                        </li>
                                        <li>Área de adscripción. Especificar el nombre
                                            de la Unidad Administrativa u homóloga superior inmediata en
                                            la que estuvo adscrito. (Superior jerárquico).
                                        </li>
                                        <li>Empleo, cargo o comisión. Señalar el nombre
                                            del empleo, cargo o comisión que se estableció en su recibo
                                            de nómina, nombramiento, contrato u oficio de comisión.
                                        </li>
                                        <li>Especifique función principal. Señalar cual
                                            es la función o actividad principal que desempeñó.
                                        </li>
                                        <li>Fecha de ingreso. Señalar la fecha en que
                                            inició empleo, cargo o comisión.
                                        </li>
                                        <li>Fecha de egreso. Señalar la fecha en que
                                            concluyó empleo, cargo o comisión.
                                        </li>
                                        <li>Lugar donde se ubica. Señalar en México o
                                            en el extranjero.
                                        </li>
                                    </ul>
                                </li>
                                <li>Sector privado/otro.
                                    <ul>
                                        <li>Nombre de la empresa, sociedad o
                                            asociación. Proporcionar el nombre de la
                                            empresa, sociedad o asociación en la que laboró.
                                        </li>
                                        <li>RFC. Proporcionar los 12 dígitos de la
                                            empresa en que laboró.
                                        </li>
                                        <li>Área. Proporcionar el nombre del área en la
                                            cual estaba adscrito (a).
                                        </li>
                                        <li>Puesto. Proporcionar el nombre del puesto
                                            que desempeñó.
                                        </li>
                                        <li>Sector al que pertenece. Elegir el sector
                                            al que pertenece la empresa, sociedad o asociación. En caso
                                            de señalar otros, especifique.
                                        </li>
                                        <li>Fecha de ingreso al empleo. Señalar la
                                            fecha en que inició empleo, cargo o comisión.
                                        </li>
                                        <li>Fecha de egreso. Señalar la fecha en que
                                            concluyó empleo, cargo o comisión.
                                        </li>
                                        <li>Lugar donde se ubica. Señalar en México o
                                            en el extranjero.
                                        </li>
                                    </ul>
                                </li>

                                </ol>
                            </li>
                        </ul>
                        Aclaraciones/observaciones. En este espacio el Declarante podrá realizar las aclaraciones u observaciones que considere pertinentes respecto de alguno o algunos de los incisos de este apartado.
                    </ol>

                    <DIV></DIV>
                </div>
            </div>
            <div class="card-body">
                {!! Form::open(['route'=>'experiencia_laboral.store', 'method'=>'POST', 'role' => 'form','id' => 'frmExperienciaLaboral']) !!}
               @include('experienciaLaboral.form')
               {!! Form::close() !!}
            </div>
        </div>
    </div>
    <input type="hidden" id="accion" value="crear">
@endsection
@section('scripts')
<script>
    $(document).ready(function(){
        $(".PRIVADO").hide();
        $(".PÚBLICO").hide();
        $(".AMBOS").hide();
    });

    $("#ambito_sector_id").on("change", function () {

        if ($(this).val() == "2") {
            alert("2");
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



            $("#nombre_empresa").val("");
            $("#rfc").val("");
            $("#area").val("");
            $("#puesto").val("");
            $("#sector_id").val("");
            $("#especifique_otro_sector").val("");
        } else if($(this).val() == "1") {
            alert("1");
            $(".PRIVADO").hide();
            $(".PÚBLICO").show();
            $(".AMBOS").show();

            $("#nombre_empresa").prop("required", false);
            $("#rfc").prop("required", false);
            $("#area").prop("required", false);
            $("#puesto").prop("required", false);
            $("#sector_id").prop("required", false);
            $("#especifique_otro_sector").prop("required", false);

            $("#nivel_orden_gobierno_id").val("");
            $("#ambito_publico_id").val("");
            $("#ente_publico").val("");
            $("#area_adscripcion").val("");
            $("#cargo_comision").val("");
            $("#funcion_pricipal").val("");
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

            $("#nombre_empresa").val("");
            $("#rfc").val("");
            $("#area").val("");
            $("#puesto").val("");
            $("#sector_id").val("");
            $("#especifique_otro_sector").val("");
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
            alert("La fecha de ingreso es mayor a la fecha de baja, favor de comprobar");
            var fechaB = document.getElementById("fecha_egreso").value = '00/00/0000';
        }
    });

    if($("#accion").val() == "editar"){
        document.getElementById("edit").style.display="block";
    }else if ($("#accion").val() == "crear"){
        document.getElementById("crearF").style.display="block";
    }
</script>
@endsection


