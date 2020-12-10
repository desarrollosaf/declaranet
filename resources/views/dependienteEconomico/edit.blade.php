@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <h1>DATOS DEL DEPENDIENTE ECONÓMICO</h1>
            <div class="float-right">
                <span class="badge badge-success ml-auto px-4" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> AYUDA</span>
            </div>
        </div>
    </div>
    <div class="collapse" id="collapseExample">
        <div class="card-body">
            <ol>
                <li><strong>Nombre(s), primer y segundo apellidos.</strong> Escribir el nombre o los nombres completos, así como los apellidos completos, sin abreviaturas, sin acentos, ni signos especiales. Si se tiene un solo apellido deberá colocarse en el espacio del primer apellido y dejar el espacio del segundo apellido en blanco.</li>
                <li><strong>Fecha de nacimiento.</strong> Señalar la fecha de nacimiento del dependiente económico en el formato de día, mes y año.</li>
                <li><strong>Registro Federal de Contribuyentes (RFC).</strong> Escribir los diez caracteres básicos con los tres caracteres de la homoclave.</li>
                <li><strong>Parentesco o relación con el Declarante.</strong> Seleccionar de la lista desplegable el parentesco o tipo de relación con el Declarante.</li>
                <li><strong>¿Es ciudadano extranjero?</strong> Deberá indicar sí o no, según el caso.</li>
                <li><strong>Clave Única de Registro de Población (CURP).</strong> Escribir los dieciocho caracteres como la emitió la Secretaría de Gobernación. En caso de no contar con ella, podrá consultarla en la página de la Secretaría de Gobernación, en el apartado de Trámites. <a style="color:#1F1F1F !important;" href="https://www.sat.gob.mx/tramites/operacion/28753/obten-tu-rfc-con-la-clave-unica-de-registro-de-poblacion-(curp)" target="_blank">www.sat.gob.mx</a></li>
                <li><strong>Habita en el domicilio del Declarante.</strong> Indicar sí o no, el dependiente económico vive en el domicilio del Declarante.</li>
                <li><strong>Lugar donde reside.</strong> En caso de que el dependiente económico, no viva en el domicilio del Declarante, indicar si vive en México, en el extranjero o si se desconoce.</li>
                <li><strong>Domicilio del dependiente económico.</strong> En caso de seleccionar México, proporcionar los siguientes datos: calle, número exterior, número interior (si aplica), colonia o localidad, municipio o alcaldía, entidad federativa y código postal.<br>
                    En caso de seleccionar extranjero, proporcionar los siguientes datos: calle, número exterior, número interior (si aplica), ciudad/localidad, estado o provincia, país y código postal.
                </li>
                <li><strong>Actividad laboral.</strong> Indicar si el dependiente económico, se encuentra trabajando actualmente, seleccionando alguno de los siguientes campos: privado, público, otro (especificar) o ninguno.</li>
            </ol>
            <ol>
                <li type="circle"><strong>Sector público.</strong>
                    <ol>
                        <li><strong>Nivel/orden de gobierno.</strong> Seleccionar el orden de gobierno en el que se encuentra: federal, estatal o municipal/alcaldía.</li>
                        <li><strong>Ámbito público.</strong> Señalar la naturaleza jurídica al que pertenece: ejecutivo, legislativo, judicial u órgano autónomo.</li>
                        <li><strong>Nombre del Ente Público. </strong>Señalar el Ente Público al cual se encuentra adscrita la plaza.</li>
                        <li><strong>Área de adscripción.</strong> Especificar el nombre de la Unidad Administrativa u homóloga superior inmediata en la que está adscrito. (Superior jerárquico).</li>
                        <li><strong>Empleo, cargo o comisión.</strong> Señalar el nombre del empleo, cargo o comisión que se establece en su recibo de nómina, nombramiento, contrato u oficio de comisión.</li>
                        <li><strong>Especifique función principal.</strong> Señalar cual es la función o actividad principal que desempeña su dependiente económico.</li>
                        <li><strong>Salario mensual neto.</strong> Especificar el monto mensual neto, sin centavos, que percibe el dependiente económico.</li>
                        <li><strong>Fecha de ingreso al empleo.</strong> Señalar la fecha en que inició empleo, cargo o comisión.</li>
                    </ol>
                </li>
                <li type="circle"><strong>Sector privado/otro.</strong>
                    <ol>
                        <li><strong>Nombre de la empresa, sociedad o asociación.</strong> Proporcionar el nombre de la empresa, sociedad o asociación en la que labora.</li>
                        <li><strong>RFC de la empresa.</strong> Proporcionar los 12 dígitos de la empresa en que labora el dependiente económico.</li>
                        <li><strong>Empleo o cargo.</strong> Proporcionar el nombre del puesto que desempeña.</li>
                        <li><strong>Fecha de ingreso al empleo.</strong> Señalar la fecha en que inició empleo, cargo o comisión.</li>
                        <li><strong>Sector al que pertenece.</strong> Elegir el sector al que pertenece la empresa, sociedad o asociación. En caso de señalar otros, especifique.</li>
                        <li><strong>Salario mensual neto.</strong> Especificar el monto mensual neto, sin centavos, que percibe el dependiente económico.</li>
                        <li><strong>¿Es proveedor o contratista del gobierno?</strong> Señalar sí o no, el dependiente económico vende o presta algún servicio al gobierno.</li>
                    </ol>
                </li>
            </ol>
            <strong>Aclaraciones/observaciones. </strong>En este espacio podrá realizar las aclaraciones u observaciones que considere pertinentes respecto de alguno o algunos de los incisos de este apartado.
        </div>
    </div>
    <div class="card-body">
        {!! Form::model($dependiente, ['route' => ['datos_dependiente_declarante.update', $dependiente->id], 'method' => 'put'] ) !!}
        @include('dependienteEconomico.form')
        {!! Form::close() !!}
    </div>
</div>
</div>
@endsection
@section('scripts')
<script>
    $("#habita-domicilio").on("change", function () {
        if ($(this).val() == "2") {
            $("#divLugarResidencia").show();
        } else {
            $("#divLugarResidencia").hide();
        }
    });
    $("#residencia").on("change", function () {
        console.log($(this).val());
        if ($(this).val() == "1") {
            $("#domicilio-mexico").show();
            $("#domicilio-extranjero").hide();
        } else if ($(this).val() == "2") {
            $("#domicilio-mexico").hide();
            $("#domicilio-extranjero").show();
        } else {
            $("#domicilio-mexico").hide();
            $("#domicilio-extranjero").hide();
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

        if (error) {
            Swal.fire({
                title: 'Error',
                text: 'llena todos los campos obligatorios',
                icon: 'error'
            });
        } else {
            $('#dependienteEconomico').submit();
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
    $("#entidad_id").on('change', function () {
        var idEntidad = $(this).val();
//        if (parseInt(idEntidad) === 15) {
//            $(".foraneo").hide();
//        }
        $.ajax({
            url: "{{asset('getMunicipiosDomicilio')}}/" + idEntidad,
            type: 'get',
            dataType: 'json',
            success: function (response) {
                console.log(response);
                $("#municipio_id").find('option').remove();
                $("#municipio_id").append('<option value="">-- Selecciona un municipio</option>');
                $(response).each(function (i, v) { // indice, valor
                    $("#municipio_id").append('<option value="' + v.id + '">' + v.municipio + '</option>');
                });
            }
        });
    });
    @if(isset($dependiente))
        $("#habita-domicilio").change();
        $("#parentesco").change();
        $("#habita-domicilio").change();
        $("#sector").change();
        $("#residencia").change();
    @endif
</script>
@endsection