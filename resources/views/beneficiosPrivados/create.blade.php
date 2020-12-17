@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <div class="float-left">
                    <h3>BENEFICIOS PRIVADOS</h3>
                    <h6 class="card-subtitle">(HASTA LOS ÚLTIMOS DOS AÑOS)</h6>
                </div>
                <div class="float-right">
            <span class="badge badge-success ml-0" data-toggle="collapse" href="#collapseDatosEmpleo"
                  role="button" aria-expanded="false" aria-controls="collapseExample"> AYUDA</span>
                </div>
            </div>
            <div class="collapse" id="collapseDatosEmpleo" style="">
                <div class="card-body">
                    <ol>
                        <li><strong>Tipo de Beneficio.</strong> Seleccionar del listado el tipo de beneficio sorteo, concurso, donación u otro (especifique).</li>
                        <li><strong>Beneficiario.</strong> Son las personas que reciben el apoyo o beneficio privado. De las opciones del catálogo indicar quien o quienes son los beneficiarios, señalar las veces que sean necesarias.</li>
                        <li><strong>Sector productivo al que pertenece.</strong> Seleccionar alguno de la lista desplegable.</li>
                        <li><strong>Otorgante.</strong> Seleccionar si es persona física o moral.</li>
                        <li><strong>Nombre o razón social del otorgante.</strong> Proporcionar el nombre o razón social completos de quien otorga el beneficio.</li>
                        <li><strong>RFC. </strong>En caso de personas físicas proporcionar los trece dígitos. En caso de personas morales establecer los doce dígitos del otorgante del beneficio.</li>
                        <li><strong>Forma de recepción del beneficio.</strong> Señalar si el apoyo recibido es monetario o en especie.</li>
                        <li><strong>Especifique el beneficio.</strong> En caso de haber seleccionado en especie deberá describir en que consiste el beneficio.</li>
                        <li><strong>Tipo de moneda.</strong> En caso de haber seleccionado monetario, deberá seleccionar el tipo de moneda en que se recibe el beneficio.</li>
                        <li><strong>Monto mensual aproximado del beneficio.</strong> Es necesario capturar cantidades sin comas, sin puntos, sin centavos y sin ceros a la izquierda. </li>
                    </ol>
                    <strong>Aclaraciones/observaciones.</strong> En este espacio podrá realizar las aclaraciones u observaciones que considere pertinentes respecto de alguno o algunos de los incisos de este apartado.
                </div>
            </div>
            <div class="card-body">
                {!! Form::open(['route'=>'beneficios_privados.store', 'method'=>'POST', 'files' => true, 'role' => 'form', 'id' => 'frmBeneficiosPrivados']) !!}
                @include('beneficiosPrivados.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <input type="hidden" id="accion" value="crear">
@endsection
@section('scripts')
    <script>
        $(".submitForm").on("click",function(e){
            e.preventDefault();
            let that = this;
            var error = false;
            console.log($("#tipo_beneficio_id").val());
            if($("#tipo_beneficio_id").val() == ""){
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
