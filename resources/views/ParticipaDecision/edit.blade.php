@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">

            <div class="card-header">
                <div class="float-left">

                    <h4>¿PARTICIPA EN LA TOMA DE DECISIONES DE ALGUNA DE ESTAS INSTITUCIONES?</h4>
                    <h6 class="card-subtitle">(HASTA LOS DOS ÚLTIMOS AÑOS)</h6>

                </div>
                <div class="float-right">
                    <span class="badge badge-success ml-auto px-4" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> AYUDA</span>
                </div>
            </div>

            <div class="collapse" id="collapseExample">
                <div class="card-body">

                    <ol>
                        <li><strong>Titular de la participación.</strong> Señalar quien tiene participación en la empresa sociedad o asociación.</li>
                        <li><strong>Tipo de institución.</strong> Señalar del catálogo, alguna de las siguientes: organizaciones de la sociedad civil, organizaciones benéficas, partidos políticos, gremios/sindicatos, otro, especifique.</li>
                        <li><strong>Nombre de la institución.</strong> Proporcionar la denominación o razón social de la institución, tal y como se encuentra registrada formalmente.</li>
                        <li><strong>RFC.</strong> Proporcionar los 12 dígitos del registro de la institución.</li>
                        <li><strong>Puesto/rol.</strong> Indicar el cargo o función que ejerce el Declarante.</li>
                        <li><strong>Fecha de inicio de participación dentro de la institución. </strong>Señalar la fecha en que inicio funciones en la institución u organización.</li>
                        <li><strong>Recibe remuneración por su participación.</strong> Indicar sí o no.</li>
                        <li><strong>Monto mensual neto.</strong> Especificar el monto mensual neto, sin centavos que percibe por su participación.</li>
                        <li><strong>Lugar donde se ubica.</strong> Indicar si se encuentra en México, debiendo señalar entidad federativa; o en el extranjero, debiendo señalar el país donde se localiza.</li>
                    </ol>
                    <strong>Aclaraciones/observaciones. </strong>En este espacio podrá realizar las aclaraciones u observaciones que considere pertinentes respecto de alguno o algunos de los incisos de este apartado

                </div>
            </div>





            <div class="card-body">
            {!! Form::model($participaciones, ['route' => ['participacion.update', $participaciones->id], 'method' => 'put'] ) !!}
            @include('ParticipaDecision.form')
            {!! Form::close() !!}
        </div>
    </div>
</div>
<input type="hidden" id="accion" value="editar">
