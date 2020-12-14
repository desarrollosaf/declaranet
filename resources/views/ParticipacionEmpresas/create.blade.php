@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <div class="float-left">
                <h4>PARTICIPACIÓN EN EMPRESAS, SOCIEDADES O ASOCIACIONES</h4>
                <h6 class="card-subtitle">(HASTA LOS ÚLTIMOS DOS AÑOS)</h6>
            </div>
            <div class="float-right">
                <span class="badge badge-success ml-auto px-4" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> AYUDA</span>
            </div>
        </div>
        <div class="collapse" id="collapseExample">
            <div class="card-body">
                <ol class="ayuda">
                    <ol>
                        <li><strong>Titular de la participación</strong>. Señalar quien tiene participación en la empresa sociedad o asociación.</li>
                        <li><strong>Nombre de la empresa, sociedad o asociación.</strong> Señalar el nombre o razón social completo de la empresa, sociedad o asociación, tal y como aparece en el documento legal en el que participe.</li>
                        <li><strong>RFC.</strong> Proporcionar los 12 dígitos del registro de la empresa, sociedad o asociación en la cual participa.</li>
                        <li><strong>Porcentaje de participación de acuerdo a escritura.</strong> Indicar el porcentaje de participación en la empresa, sociedad o asociación.</li>
                        <li><strong>Tipo de participación. </strong>Seleccionar de la lista desplegable una de las siguientes opciones: socio, accionista, comisario, representante, apoderado, colaborador, beneficiario u otro, especifique.</li>
                        <li><strong>¿Recibe remuneración por su participación?</strong> Señalar sí o no.</li>
                        <li><strong>Monto mensual neto.</strong> Especificar el monto mensual neto, sin centavos, que percibe por su participación.</li>
                        <li><strong>Lugar donde se ubica.</strong> Indicar si se encuentra en México, debiendo señalar entidad federativa o en el extranjero, debiendo señalar el país donde se localiza.</li>
                        <li><strong>Sector productivo al que pertenece.</strong> Elegir el sector al que pertenece la empresa, sociedad o asociación. En caso de señalar otro, especifique.</li>
                    </ol>
                </ol>
                <strong>Aclaraciones/observaciones.</strong>
                <div>En este espacio podrá realizar las aclaraciones u observaciones que considere pertinentes respecto de alguno o algunos de los incisos de este apartado</div>
            </div>
        </div>
        <div class="card-body">
            {!! Form::open(['route'=>'participacion_empresas.store', 'method'=>'POST',  'role' => 'form', 'id' => 'frm_ParticipacionEmpresas']) !!}
            @include('ParticipacionEmpresas.form')
            {!! Form::close() !!}
        </div>
    </div>
</div>
</div>
@endsection

