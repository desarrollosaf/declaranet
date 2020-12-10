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
                    Para la declaración de inicio, reportar los datos del empleo, cargo o comisión que inicie. Para la declaración de modificación, deberá reportar el empleo, cargo o comisión actual. Para la declaración de conclusión, reportar los datos del empleo, cargo o comisión que concluya.
                    <ol class="ayuda">
                        <li>Nivel/orden de gobierno. Seleccionar el orden de gobierno en el que se encuentra: federal, estatal o municipal/alcaldía.</li>
                        <li>Ámbito público. Señalar la naturaleza jurídica al que pertenece: ejecutivo, legislativo, judicial u órgano autónomo. </li>
                        <li>Nombre del Ente Público. Señalar el Ente Público al cual se encuentra adscrita la plaza.</li>
                        <li>Área de adscripción. Especificar el nombre de la Unidad Administrativa u homóloga superior inmediata de su adscripción. (Superior jerárquico).</li>
                        <li>Empleo, cargo o comisión. Señalar el nombre del empleo, cargo o comisión que aparece en su recibo de nómina, nombramiento, contrato u oficio de comisión.</li>
                        <li>¿Está contratado por honorarios? Indicar sí o no.</li>
                        <li>Nivel del empleo, cargo o comisión. Elegir conforme a lo que señala su recibo de pago, en caso de no encontrarse en la lista desplegable, señalar otro y especificar.</li>
                        <li>Especifique función principal. Señalar cuál es la función o actividad principal que desempeña en su empleo, cargo o comisión.</li>
                        <li>Fecha de toma de posesión/conclusión del empleo, cargo o comisión. Señalar la fecha en que inició/concluyó el encargo. Ésta deberá coincidir con la que se haya dado de alta/baja en el área de recursos humanos del Ente Público correspondiente, ya que dicha fecha es la que se toma en cuenta para contabilizar los sesenta días que prevé la Ley para cumplir con la presentación de declaración de inicio/conclusión.</li>
                        <li>Teléfono de oficina y extensión (si aplica). Proporcionar el teléfono laboral y extensión según corresponda.</li>
                        <li>Domicilio del empleo, cargo o comisión.</li>
                    </ol>
                    Proporcionar los datos relativos al lugar en el que labora actualmente. Seleccionando si es en México o el extranjero. <br>
                    En caso de seleccionar México, proporcionar los siguientes datos: calle, número exterior, número interior (si aplica), localidad o colonia, municipio o alcaldía, entidad federativa y código postal.<br>
                    En caso de seleccionar extranjero, proporcionar los siguientes datos: calle, número exterior, número interior (si aplica), ciudad/localidad, estado o provincia, país y código postal.<br>
                    Aclaraciones/observaciones. En este espacio el Declarante podrá realizar las aclaraciones u observaciones que considere pertinentes respecto de alguno o algunos de los incisos de este apartado.<br>
                    ¿Cuenta con otro empleo cargo o comisión en el servicio público distinto al declarado?<br>
                    Este rubro solo se encuentra en la declaración de modificación y deberá contestar sí o no.<br>
                    En caso de tener otro u otros empleos, cargos o comisiones de manera simultánea al reportado, llenar los mismos rubros que se describen en el rubro.
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
