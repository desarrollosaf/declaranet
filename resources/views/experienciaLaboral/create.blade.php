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

                </div>
            </div>
            <div class="card-body">
                {!! Form::open(['route'=>'experiencia_laboral.store', 'method'=>'POST', 'role' => 'form','id' => 'frmExperienciaLaboral']) !!}
               @include('experienciaLaboral.form')
               <center> {{ Form::button('Guardar', ['type' => 'submit', 'class' => 'btn btn-submit text-light submitForm'] )}}</center>
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
            $(".PRIVADO").show();
            $(".AMBOS").show();
            $(".PÚBLICO").hide();
        } else if($(this).val() == "1") {
            $(".PRIVADO").hide();
            $(".PÚBLICO").show();
            $(".AMBOS").show();
        }else if($(this).val() == "3"){
            $(".PRIVADO").show();
            $(".PÚBLICO").hide();
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
        console.log($("#ambito_sector_id").val());
        if($("#ambito_sector_id").val() == ""){
            error = true;
        }
        if($("#ambito_sector_id").val() == 1){
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
        }else if($("#ambito_sector_id").val() == 2){
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
            if($("#fecha_ingreso").val() == ""){
                    error = true;
                }
            if($("#fecha_egreso").val() == ""){
                    error = true;
                }
        }else if($("#ambito_sector_id").val() == 3){
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
            if($("#fecha_ingreso").val() == ""){
                error = true;
            }
            if($("#fecha_egreso").val() == ""){
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

