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
                            <li><p align="justify"> Ámbito/sector en el que laboró. Señalar si el empleo que reporta corresponde al sector público, privado u otro. En caso de señalar otro deberá especificar el sector en el que laboró.</p>
                                <ol>
                                    <li><p align="justify"><strong>Sector público</strong></p>
                                        <ul>
                                            <li><p align="justify"><strong>Nivel/orden de gobierno. </strong>Seleccionar el orden de gobierno en el que se encuentra: federal, estatal o municipal/alcaldía. </p></li>
                                            <li><p align="justify"><strong>Ámbito público.</strong> Señalar la naturaleza jurídica al que pertenece: ejecutivo, legislativo, judicial u órgano autónomo.  </p></li>
                                            <li><p align="justify"><strong>Nombre del Ente Público. </strong>Señalar el Ente Público al cual se encontró adscrita la plaza. </p></li>
                                            <li><p align="justify"><strong>Área de adscripción. </strong>Especificar el nombre de la Unidad Administrativa u homóloga superior inmediata en la que estuvo adscrito. (Superior jerárquico). </p></li>
                                            <li><p align="justify"><strong>Empleo, cargo o comisión. </strong>Señalar el nombre del empleo, cargo o comisión que se estableció en su recibo de nómina, nombramiento, contrato u oficio de comisión. </p></li>
                                            <li><p align="justify"><strong>Especifique función principal.</strong> Señalar cual es la función o actividad principal que desempeñó. </p></li>
                                            <li><p align="justify"><strong>Fecha de ingreso.</strong>Señalar la fecha en que inició empleo, cargo o comisión.</p> </li>
                                            <li><p align="justify"><strong>Fecha de egreso. </strong>Señalar la fecha en que concluyó empleo, cargo o comisión. </p></li>
                                            <li><p align="justify"><strong>Lugar donde se ubica. </strong>Señalar en México o en el extranjero. </p></li>
                                        </ul>
                                    </li>
                                    <li><p align="justify"><strong>Sector privado/otro.</strong></p>
                                        <ul>
                                            <li><p align="justify"><strong>Nombre de la empresa, sociedad o asociación. </strong>Proporcionar el nombre de la empresa, sociedad o asociación en la que laboró. </p></li>
                                            <li><p align="justify"><strong>RFC. </strong> Proporcionar los 12 dígitos de la empresa en que laboró. </p></li>
                                            <li><p align="justify"><strong>Área.  </strong>Proporcionar el nombre del área en la cual estaba adscrito (a). </p></li>
                                            <li><p align="justify"><strong>Puesto. </strong> Proporcionar el nombre del puesto que desempeñó. </p></li>
                                            <li><p align="justify"><strong>Sector al que pertenece.  </strong>Elegir el sector al que pertenece la empresa, sociedad o asociación. En caso de señalar otros, especifique.</p> </li>
                                            <li><p align="justify"><strong>Fecha de ingreso al empleo.  </strong>Señalar la fecha en que inició empleo, cargo o comisión. </p></li>
                                            <li><p align="justify"><strong>Fecha de egreso. </strong> Señalar la fecha en que concluyó empleo, cargo o comisión.</p> </li>
                                            <li><p align="justify"><strong>Lugar donde se ubica.  </strong>Señalar en México o en el extranjero. </p></li>
                                        </ul>
                                    </li>
                                    <p align="justify"><strong>Ámbito/sector en el que laboró. Señalar si el empleo que reporta corresponde al sector público, privado u otro. En caso de señalar otro deberá especificar el sector en el que laboró.</strong></p>


                            <ol>
                                <li><p align="justify"><strong>Sector público</strong></p>
                                    <ul>
                                        <li><p align="justify"><strong>Nivel/orden de gobierno.</strong> Seleccionar el
                                            orden de gobierno en el que se encuentra: federal, estatal o
                                                municipal/alcaldía.</p>
                                        </li>
                                        <li><p align="justify"><strong>Ámbito público.</strong> Señalar la naturaleza
                                            jurídica al que pertenece: ejecutivo, legislativo, judicial
                                                u órgano autónomo.</p>
                                        </li>
                                        <li><p align="justify"><strong>Nombre del Ente Público. </strong>Señalar el Ente
                                                Público al cual se encontró adscrita la plaza.</p>
                                        </li>
                                        <li><p align="justify"><strong>Área de adscripción.</strong> Especificar el nombre
                                            de la Unidad Administrativa u homóloga superior inmediata en
                                                la que estuvo adscrito. (Superior jerárquico).</p>
                                        </li>
                                        <li><p align="justify"><strong>Empleo, cargo o comisión. </strong> Señalar el nombre
                                            del empleo, cargo o comisión que se estableció en su recibo
                                                de nómina, nombramiento, contrato u oficio de comisión.</p>
                                        </li>
                                        <li><p align="justify"><strong>Especifique función principal.</strong> Señalar cual
                                                es la función o actividad principal que desempeñó.</p>
                                        </li>
                                        <li><p align="justify"><strong>Fecha de ingreso. </strong> Señalar la fecha en que
                                                inició empleo, cargo o comisión.</p>
                                        </li>
                                        <li><p align="justify"><strong>Fecha de egreso. </strong> Señalar la fecha en que
                                                concluyó empleo, cargo o comisión.</p>
                                        </li>
                                        <li><p align="justify"><strong>Lugar donde se ubica.</strong> Señalar en México o
                                                en el extranjero.</p>
                                        </li>
                                    </ul>
                                </li>
                                <li><p align="justify"><strong>Sector privado/otro.</strong></p>
                                    <ul>
                                        <li><p align="justify"><strong>Nombre de la empresa, sociedad o
                                                    asociación.</strong> Proporcionar el nombre de la
                                                empresa, sociedad o asociación en la que laboró.</p>
                                        </li>
                                        <li><p align="justify"><strong>RFC.</strong> Proporcionar los 12 dígitos de la
                                                empresa en que laboró.</p>
                                        </li>
                                        <li><p align="justify"><strong>Área. </strong> Proporcionar el nombre del área en la
                                                cual estaba adscrito (a).</p>
                                        </li>
                                        <li><p align="justify"><strong>Puesto.</strong> Proporcionar el nombre del puesto
                                                que desempeñó.</p>
                                        </li>
                                        <li><p align="justify"><strong>Sector al que pertenece.</strong> Elegir el sector
                                            al que pertenece la empresa, sociedad o asociación. En caso
                                                de señalar otros, especifique.</p>
                                        </li>
                                        <li><p align="justify"><strong>Fecha de ingreso al empleo. </strong> Señalar la
                                                fecha en que inició empleo, cargo o comisión.</p>
                                        </li>
                                        <li><p align="justify"><strong>Fecha de egreso.</strong> Señalar la fecha en que
                                                concluyó empleo, cargo o comisión.</p>
                                        </li>
                                        <li><p align="justify"><strong>Lugar donde se ubica.</strong> Señalar en México o
                                                en el extranjero.</p>
                                        </li>
                                    </ul>
                                </li>

                                </ol>
                            </li>
                        </ul>

                        <p align="justify"><strong> Aclaraciones/observaciones.</strong> En este espacio el Declarante podrá realizar las aclaraciones u observaciones que considere pertinentes respecto de alguno o algunos de los incisos de este apartado.</p>
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
    <input type="hidden" id="accion" value="editar">
    <input type="hidden" id="tipoOperacion" value="AGREGAR">
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $(".PRIVADO").hide();
            $(".PÚBLICO").hide();
            $(".AMBOS").hide();
        });

        $("#ambito_sector_id").on("change", function () {
            var ambitoSector = document.getElementById("ambito_sector_id").value;
            if (ambitoSector == "2") {
                //alert("2");
                $(".PRIVADO").show();
                $(".AMBOS").show();
                $(".PÚBLICO").hide();

                $("#nivel_orden_gobierno_id").prop("required", false);
                $("#ambito_publico_id").prop("required", false);
                $("#ente_publico").prop("required", false);
                $("#area_adscripcion").prop("required", false);
                $("#cargo_comision").prop("required", false);
                $("#funcion_pricipal").prop("required", false);
                $("#regimen_fiscal_id").prop("required", true);

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


                $("#sector_id").on("change", function () {
                    var sector_id = document.getElementById("sector_id").value;
                    if (sector_id == "17") {
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
            } else if(ambitoSector == "1") {
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

                $("#nivel_orden_gobierno_id").val("");
                $("#ambito_publico_id").val("");
                $("#ente_publico").val("");
                $("#area_adscripcion").val("");
                $("#cargo_comision").val("");
                $("#funcion_pricipal").val("");
            }else if(ambitoSector == "3"){
                $(".PRIVADO").show();
                $(".PÚBLICO").hide();
                $(".AMBOS").show();

                $("#nivel_orden_gobierno_id").prop("required", false);
                $("#ambito_publico_id").prop("required", false);
                $("#ente_publico").prop("required", false);
                $("#area_adscripcion").prop("required", false);
                $("#cargo_comision").prop("required", false);
                $("#funcion_pricipal").prop("required", false);
                $("#regimen_fiscal_id").prop("required", true);

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
                $("#regimen_fiscal_id").prop("required", false);

                $("#nombre_empresa").prop("required", false);
                $("#rfca").prop("required", false);
                $("#rfcb").prop("required", false);
                $("#area").prop("required", false);
                $("#puesto").prop("required", false);
                $("#sector_id").prop("required", false);
                $("#especifique_otro_sector").prop("required", false);
                $("#regimen_fiscal_id").prop("required", false);

                $("#nivel_orden_gobierno_id").prop("required", false);
                $("#ambito_publico_id").prop("required", false);
                $("#ente_publico").prop("required", false);
                $("#area_adscripcion").prop("required", false);
                $("#cargo_comision").prop("required", false);
                $("#funcion_pricipal").prop("required", false);
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

        $("#fecha_egreso").on("blur", function () {
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

