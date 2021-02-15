@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <div class="float-left">
                    <h3>DATOS DEL EMPLEO, CARGO O COMISIÓN QUE INICIA</h3>
                </div>
                <div class="float-right">
                    <span class="badge badge-success ml-auto px-4" data-toggle="collapse" href="#collapseDatosEmpleo" role="button" aria-expanded="false" aria-controls="collapseExample"> AYUDA</span>
                </div>
            </div>
            <div class="collapse" id="collapseDatosEmpleo">
                <div class="card-body">
                    <p align="justify">Para la declaración de inicio, reportar los datos del empleo, cargo o comisión que inicie. Para la declaración de modificación, deberá reportar el empleo, cargo o comisión actual. Para la declaración de conclusión, reportar los datos del empleo, cargo o comisión que concluya.</p>
                    <ol class="ayuda">
                        <li><p align="justify"><strong>Nivel/orden de gobierno.</strong> Seleccionar el orden de gobierno en el que se encuentra: federal, estatal o municipal/alcaldía.</p></li>
                        <li><p align="justify"><strong>Ámbito público. </strong>Señalar la naturaleza jurídica al que pertenece: ejecutivo, legislativo, judicial u órgano autónomo. </p></li>
                        <li><p align="justify"><strong>Nombre del Ente Público.</strong> Señalar el Ente Público al cual se encuentra adscrita la plaza.</p></li>
                        <li><p align="justify"><strong>Área de adscripción. </strong>Especificar el nombre de la Unidad Administrativa u homóloga superior inmediata de su adscripción. (Superior jerárquico).</p></li>
                        <li><p align="justify"><strong>Empleo, cargo o comisión.</strong> Señalar el nombre del empleo, cargo o comisión que aparece en su recibo de nómina, nombramiento, contrato u oficio de comisión.</p></li>
                        <li><p align="justify"><strong>¿Está contratado por honorarios? </strong>Indicar sí o no.</p></li>
                        <li><p align="justify"><strong>Nivel del empleo, cargo o comisión.</strong> Elegir conforme a lo que señala su recibo de pago, en caso de no encontrarse en la lista desplegable, señalar otro y especificar.</p></li>
                        <li><p align="justify"><strong>Especifique función principal. </strong>Señalar cuál es la función o actividad principal que desempeña en su empleo, cargo o comisión.</p></li>
                        <li><p align="justify"><strong>Fecha de toma de posesión/conclusión del empleo, cargo o comisión. </strong>Señalar la fecha en que inició/concluyó el encargo. Ésta deberá coincidir con la que se haya dado de alta/baja en el área de recursos humanos del Ente Público correspondiente, ya que dicha fecha es la que se toma en cuenta para contabilizar los sesenta días que prevé la Ley para cumplir con la presentación de declaración de inicio/conclusión.</p></li>
                        <li><p align="justify"><strong>Teléfono de oficina y extensión (si aplica)</strong>. Proporcionar el teléfono laboral y extensión según corresponda.</p></li>
                        <li><p align="justify"><strong>Domicilio del empleo, cargo o comisión.</strong></p></li>
                    </ol>
                    <p align="justify">
                    Proporcionar los datos relativos al lugar en el que labora actualmente. Seleccionando si es en México o el extranjero. <br>
                    En caso de seleccionar México, proporcionar los siguientes datos: calle, número exterior, número interior (si aplica), localidad o colonia, municipio o alcaldía, entidad federativa y código postal.<br>
                    En caso de seleccionar extranjero, proporcionar los siguientes datos: calle, número exterior, número interior (si aplica), ciudad/localidad, estado o provincia, país y código postal.<br>
                    Aclaraciones/observaciones. En este espacio el Declarante podrá realizar las aclaraciones u observaciones que considere pertinentes respecto de alguno o algunos de los incisos de este apartado.<br>
                    ¿Cuenta con otro empleo cargo o comisión en el servicio público distinto al declarado?<br>
                    Este rubro solo se encuentra en la declaración de modificación y deberá contestar sí o no.<br>
                    En caso de tener otro u otros empleos, cargos o comisiones de manera simultánea al reportado, llenar los mismos rubros que se describen en el rubro.
                    </p>
                </div>
            </div>
            <div class="card-body">
                {!! Form::open(['route'=>'datos_empleo_declarante.store', 'method'=>'POST', 'files' => true, 'role' => 'form', 'id' => 'frmDatosEmpleoDeclarante']) !!}
            @include('datosEmpleoDeclarante.form')
            {!! Form::close() !!}
            </div>
        </div>
    </div>
    <input type="hidden" id="accion" value="crear">
@endsection
@section('scripts')
    <script type="text/javascript">
        $("#entidad_federativa_id").on('change', function () {
            console.log("hola");
            //alert("entr FUNCION");
            var idEntidad = $(this).val();
            if (parseInt(idEntidad) === 15) {
                $(".foraneo").hide();
            }
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
    </script>
@endsection
