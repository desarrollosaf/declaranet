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
                        <li><p align="justify"><strong>Titular de la participación.</strong> Señalar quién tiene participación en la empresa sociedad o asociación.</p></li>
                        <li><p align="justify"><strong>Tipo de institución.</strong> Señalar del catálogo, alguna de las siguientes: organizaciones de la sociedad civil, organizaciones benéficas, partidos políticos, gremios/sindicatos, otro, especifique.</p></li>
                        <li><p align="justify"><strong>Nombre de la institución.</strong> Proporcionar la denominación o razón social de la institución, tal y como se encuentra registrada formalmente.</p></li>
                        <li><p align="justify"><strong>RFC.</strong> Proporcionar los 12 dígitos del registro de la institución.</p></li>
                        <li><p align="justify"><strong>Puesto/rol.</strong> Indicar el cargo o función que ejerce el Declarante.</p></li>
                        <li><p align="justify"><strong>Fecha de inicio de participación dentro de la institución. </strong>Señalar la fecha en que inició funciones en la institución u organización.</p></li>
                        <li><p align="justify"><strong>Recibe remuneración por su participación.</strong> Indicar sí o no.</p></li>
                        <li><p align="justify"><strong>Monto mensual neto.</strong> Especificar el monto mensual neto, sin centavos, que percibe por su participación.</p></li>
                        <li><p align="justify"><strong>Lugar donde se ubica.</strong> Indicar si se encuentra en México, debiendo señalar entidad federativa o en el extranjero, debiendo señalar el país donde se localiza.</p></li>
                    </ol>
                    <p align="justify"> <strong>Aclaraciones/observaciones. </strong>En este espacio podrá realizar las aclaraciones u observaciones que considere pertinentes respecto de alguno o algunos de los incisos de este apartado.</p>

                </div>
            </div>





            <div class="card-body">
                {!! Form::open(['route'=>'participacion.store', 'method'=>'POST', 'files' => true, 'role' => 'form', 'id' => '']) !!}
                @include('ParticipaDecision.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <input type="hidden" id="accion" value="crear">
@endsection
