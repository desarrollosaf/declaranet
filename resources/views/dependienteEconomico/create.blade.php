@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <h3>DATOS DEL DEPENDIENTE ECONÓMICO</h3>
            <div class="float-right">
                <span class="badge badge-success ml-auto px-4" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> AYUDA</span>
            </div>
        </div>
        <div class="collapse" id="collapseExample">
            <div class="card-body">
                <ol>
                    <li><p align="justify"><strong>Nombre(s), primer y segundo apellidos.</strong> Escribir el nombre o los nombres completos, así como los apellidos completos, sin abreviaturas, sin acentos, ni signos especiales. Si se tiene un solo apellido deberá colocarse en el espacio del primer apellido y dejar el espacio del segundo apellido en blanco.</p> </li>
                    <li><p align="justify"><strong>Fecha de nacimiento.</strong> Señalar la fecha de nacimiento del dependiente económico en el formato de día, mes y año.</p></li>
                    <li><p align="justify"><strong>Registro Federal de Contribuyentes (RFC).</strong> Escribir los diez caracteres básicos con los tres caracteres de la homoclave.</p></li>
                    <li><p align="justify"><strong>Parentesco o relación con el Declarante.</strong> Seleccionar de la lista desplegable el parentesco o tipo de relación con el Declarante.</p></li>
                    <li><p align="justify"><strong>¿Es ciudadano extranjero?</strong> Deberá indicar sí o no, según el caso.</p></li>
                    <li><p align="justify"><strong>Clave Única de Registro de Población (CURP).</strong> Escribir los dieciocho caracteres como la emitió la Secretaría de Gobernación. En caso de no contar con ella, podrá consultarla en la página de la Secretaría de Gobernación, en el apartado de Trámites. <a style="color:#1F1F1F !important;" href="https://www.sat.gob.mx/tramites/operacion/28753/obten-tu-rfc-con-la-clave-unica-de-registro-de-poblacion-(curp)" target="_blank">www.sat.gob.mx</a></p></li>
                    <li><p align="justify"><strong>Habita en el domicilio del Declarante.</strong> Indicar sí o no, el dependiente económico vive en el domicilio del Declarante.</p></li>
                    <li><p align="justify"><strong>Lugar donde reside.</strong> En caso de que el dependiente económico, no viva en el domicilio del Declarante, indicar si vive en México, en el extranjero o si se desconoce.</p></li>
                    <li><p align="justify"><strong>Domicilio del dependiente económico.</strong> En caso de seleccionar México, proporcionar los siguientes datos: calle, número exterior, número interior (si aplica), colonia o localidad, municipio o alcaldía, entidad federativa y código postal.<br>
                            En caso de seleccionar extranjero, proporcionar los siguientes datos: calle, número exterior, número interior (si aplica), ciudad/localidad, estado o provincia, país y código postal.</p>
                    </li>
                    <li><p align="justify"><strong>Actividad laboral.</strong> Indicar si el dependiente económico, se encuentra trabajando actualmente, seleccionando alguno de los siguientes campos: privado, público, otro (especificar) o ninguno.</p></li>
                </ol>
                <ol>
                    <li type="circle"><strong>Sector público.</strong>
                        <ol>
                            <li><p align="justify"><strong>Nivel/orden de gobierno.</strong> Seleccionar el orden de gobierno en el que se encuentra: federal, estatal o municipal/alcaldía.</p></li>
                            <li><p align="justify"><strong>Ámbito público.</strong> Señalar la naturaleza jurídica al que pertenece: ejecutivo, legislativo, judicial u órgano autónomo.</p></li>
                            <li><p align="justify"><strong>Nombre del Ente Público. </strong>Señalar el Ente Público al cual se encuentra adscrita la plaza.</p></li>
                            <li><p align="justify"><strong>Área de adscripción.</strong> Especificar el nombre de la Unidad Administrativa u homóloga superior inmediata en la que está adscrito. (Superior jerárquico).</p></li>
                            <li><p align="justify"><strong>Empleo, cargo o comisión.</strong> Señalar el nombre del empleo, cargo o comisión que se establece en su recibo de nómina, nombramiento, contrato u oficio de comisión.</p></li>
                            <li><p align="justify"><strong>Especifique función principal.</strong> Señalar cual es la función o actividad principal que desempeña su dependiente económico.</p></li>
                            <li><p align="justify"><strong>Salario mensual neto.</strong> Es la cantidad final que percibe el trabajador después de todas las retenciones, este se obtiene restando al salario bruto las aportaciones de seguridad social y retenciones de impuestos establecidos según la ley mexicana (no incluye descuentos de caja de ahorro o cualquier préstamo y descuentos de estancia)</p></li>
                            <li><p align="justify"><strong>Fecha de ingreso al empleo.</strong> Señalar la fecha en que inició empleo, cargo o comisión.</p></li>
                        </ol>
                    </li>
                    <li type="circle"><strong>Sector privado/otro.</strong>
                        <ol>
                            <li><p align="justify"><strong>Nombre de la empresa, sociedad o asociación.</strong> Proporcionar el nombre de la empresa, sociedad o asociación en la que labora.</p></li>
                            <li><p align="justify"><strong>RFC de la empresa.</strong> Proporcionar los 12 dígitos de la empresa en que labora el dependiente económico.</p></li>
                            <li><p align="justify"><strong>Empleo o cargo.</strong> Proporcionar el nombre del puesto que desempeña.</p></li>
                            <li><p align="justify"><strong>Fecha de ingreso al empleo.</strong> Señalar la fecha en que inició empleo, cargo o comisión.</p></li>
                            <li><p align="justify"><strong>Sector al que pertenece.</strong> Elegir el sector al que pertenece la empresa, sociedad o asociación. En caso de señalar otros, especifique.</p></li>
                            <li><p align="justify"><strong>Salario mensual neto.</strong> Es la cantidad final que percibe el trabajador después de todas las retenciones, este se obtiene restando al salario bruto las aportaciones de seguridad social y retenciones de impuestos establecidos según la ley mexicana (no incluye descuentos de caja de ahorro o cualquier préstamo y descuentos de estancia).</p></li>
                            <li><p align="justify"><strong>¿Es proveedor o contratista del gobierno?</strong> Señalar sí o no, el dependiente económico vende o presta algún servicio al gobierno.</p></li>
                        </ol>
                    </li>
                </ol>
                <p align="justify"> <strong>Aclaraciones/observaciones. </strong>En este espacio podrá realizar las aclaraciones u observaciones que considere pertinentes respecto de alguno o algunos de los incisos de este apartado.</p>
            </div>
        </div>
        <div class="card-body">
            {!! Form::open(['route'=>'datos_dependiente_declarante.store', 'method'=>'POST', 'role' => 'form', 'id' => 'frmDependienteEconomico']) !!}
            @include('dependienteEconomico.form')
            {!! Form::close() !!}
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
        $("#domicilio-mexico").hide();
        $("#domicilio-extranjero").hide();
    });
    $("#habita-domicilio").on("change", function () {
        if ($(this).val() == "2") {
            $("#divLugarResidencia").show();
            $("#residencia").prop("required", true);
        } else {
            $("#divLugarResidencia").hide();
            $("#residencia").prop("required", false);
        }
        $("#residencia").change();
    });
    $("#residencia").on("change", function () {
        console.log($(this).val());
        if ($(this).val() == "1") {
            $("#domicilio-mexico").show();
            $("#domicilio-extranjero").hide();
            $(".nacional").prop("required", true);
            $(".extranjero").prop("required", false);
        } else if ($(this).val() == "2") {
            $("#domicilio-mexico").hide();
            $("#domicilio-extranjero").show();
            $(".nacional").prop("required", false);
            $(".extranjero").prop("required", true);
        } else {
            $("#domicilio-mexico").hide();
            $("#domicilio-extranjero").hide();
            $(".nacional").prop("required", false);
            $(".extranjero").prop("required", false);
        }
    });

    $("#sector").on("change", function () {
        if ($(this).val() == "2" || $(this).val() == "3") {
            $(".PRIVADO").show();
            $(".AMBOS").show();
            $(".PÚBLICO").hide();
            $(".publico").prop("required", false);
            $(".privado").prop("required", true);
        } else if ($(this).val() == "1") {
            $(".PRIVADO").hide();
            $(".PÚBLICO").show();
            $(".AMBOS").show();
            $(".publico").prop("required", true);
            $(".privado").prop("required", false);
            $("#regimen_fiscal_id").prop("required", false);
        } else if ($(this).val() == "4") {
            $(".PRIVADO").hide();
            $(".PÚBLICO").hide();
            $(".publico").prop("required", false);
            $(".privado").prop("required", false);
            $("#regimen_fiscal_id").prop("required", false);
        } else if ($(this).val() == "") {
            $(".PRIVADO").hide();
            $(".PÚBLICO").hide();
            $(".publico").prop("required", false);
            $(".privado").prop("required", false);
            $("#regimen_fiscal_id").prop("required", false);
        }
    });
    $('#salario,#salario_publico').bind('keyup paste', function () {
        this.value = this.value.replace(/[^0-9]/g, '');
    });

    $(document).ready(function () {
        $("#parentesco").on("change", function () {
            var nivel = $('#parentesco option:selected').html();
            if (nivel === "OTRO(ESPECIFIQUE)") {
                $("#especifique-parentezco").prop("disabled", false);
                $("#especifique-parentezco").prop("required", true);
            } else {
                $("#especifique-parentezco").val("");
                $("#especifique-parentezco").prop("disabled", true);
                $("#especifique-parentezco").prop("required", false);
            }
        });
    });

    $(document).ready(function () {
        $("#sector_pertenece").on("change", function () {
            var nivel = $('#sector_pertenece option:selected').html();
            if (nivel === "OTRO (ESPECIFIQUE)") {
                $("#sector_especificar").prop("disabled", false);
                $("#sector_especificar").prop("required", true);
            } else {
                $("#sector_especificar").val("");
                $("#sector_especificar").prop("disabled", true);
                $("#sector_especificar").prop("required", false);
            }
        });
    });
    $("#entidad_id").on('change', function () {
        var idEntidad = $(this).val();
        $.ajax({
            url: "{{asset('getMunicipiosDomicilio')}}/" + idEntidad,
            type: 'get',
            dataType: 'json',
            success: function (response) {
                console.log(response);
                $("#municipio_id").find('option').remove();
                $("#municipio_id").append('<option value="">Selecciona un municipio</option>');
                $(response).each(function (i, v) { // indice, valor
                    $("#municipio_id").append('<option value="' + v.id + '">' + v.municipio + '</option>');
                });
            }
        });
    });

    $("#sector_pertenece").on("change", function () {
        if ($(this).val() == 17) {

        } else {

        }
    });

    $("#curp").keyup(function () {
        let curp = $(this).val();
        $("#curp").val(curp.toString().toUpperCase());
    });

    $("#regimen_fiscal_id").on("change", function () {
        var regimen_fiscal_id = document.getElementById("regimen_fiscal_id").value;
        if(regimen_fiscal_id == 1){
            document.getElementById("empleador_fisica").style.display = "block";
            document.getElementById("empleador_moral").style.display = "none";
            document.getElementById("empleador_fisica_RFC").style.display = "block";
            document.getElementById("empleador_moral_RFC").style.display = "none";
            $("#rfcpriv").prop("required", false);
            $("#rfcpriv").prop("maxlength", '13');
            $("#rfcpriv").prop("pattern", '([A-Z]{4}[0-9]{6}[A-Z0-9]{0,3})');
            $("#rfcpriv").prop("title", 'Ingresa RFC a 10 o 13 dígitos');
            $("#rfcpriv").prop("placeholder", 'p. ej. XAXA010101X0A');
        }else{
            document.getElementById("empleador_fisica").style.display = "none";
            document.getElementById("empleador_moral").style.display = "block";
            document.getElementById("empleador_fisica_RFC").style.display = "none";
            document.getElementById("empleador_moral_RFC").style.display = "block";
            $("#rfcpriv").prop("required", true);
            $("#rfcpriv").prop("maxlength", '12');
            $("#rfcpriv").prop("pattern", '([A-Z]{3}[0-9]{6}[A-Z0-9]{0,3})');
            $("#rfcpriv").prop("title", 'Ingresa RFC a 12 dígitos');
            $("#rfcpriv").prop("placeholder", 'p. ej. XAX010101X0A');
        }
    });
</script>
@endsection
