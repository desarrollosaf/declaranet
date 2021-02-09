@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <div class="float-left">
                <h4>PARTICIPACIÓN ECONÓMICA O FINANCIERA EN EMPRESAS, SOCIEDADES Y ASOCIACIONES, DEL DECLARANTE, CONCUBINA, CONCUBINARIO, FAMILIARES CONSANGUÍNEOS HASTA EL CUARTO GRADO, POR AFINIDAD O CIVIL Y/O DEPENDIENTES ECONÓMICOS</h4>
                <h6 class="card-subtitle">(HASTA LOS ÚLTIMOS DOS AÑOS)</h6>
            </div>
            <div class="float-right">
                <span class="badge badge-success ml-auto px-4" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> AYUDA</span>
            </div>
        </div>
        <div class="collapse" id="collapseExample">
            <p class="card-body">
                <ol class="ayuda">
                    <p align="justify">Artículo 45 de la ley de responsabilidades administrativas del Estado de México y municipios. <br>
                    <strong>Fracción II</strong><BR>
                    II. Participación económica o financiera del declarante, concubina, concubinario, familiares consanguíneos hasta el cuarto grado por afinidad o civil y/o dependientes económicos a la fecha de conclusión. <br>
                            a) <strong>Tipo de participación o contrato:</strong> porcentaje de participación en el capital, partes sociales, servicios profesionales o de bienes muebles o inmuebles<br>
                            b) <strong>Tipo de sociedad:</strong> mercantil, anónima o de responsabilidad límitada, organización civil, asociación civil, en direcciones y consejos de administración; participación accionaria en sociedades; préstamos, créditos y obligaciones financieras.</p>
                    <ol>
                        <li><p align="justify"><strong>Titular de la participación</strong>. Señalar quien tiene participación en la empresa sociedad o asociación.</p></li>
                        <li><p align="justify"><strong>Nombre de la empresa, sociedad o asociación.</strong> Señalar el nombre o razón social completo de la empresa, sociedad o asociación, tal y como aparece en el documento legal en el que participe.</p></li>
                        <li><p align="justify"><strong>RFC.</strong> Proporcionar los 12 dígitos del registro de la empresa, sociedad o asociación en la cual participa.</p></li>
                        <li><p align="justify"><strong>Porcentaje de participación de acuerdo a escritura.</strong> Indicar el porcentaje de participación en la empresa, sociedad o asociación.</p></li>
                        <li><p align="justify"><strong>Tipo de participación. </strong>Seleccionar de la lista desplegable una de las siguientes opciones: socio, accionista, comisario, representante, apoderado, colaborador, beneficiario u otro, especifique.</p></li>
                        <li><p align="justify"><strong>¿Recibe remuneración por su participación?</strong> Señalar sí o no.</p></li>
                        <li><p align="justify"><strong>Monto mensual neto.</strong> Especificar el monto mensual neto, sin centavos, que percibe por su participación.</p></li>
                        <li><p align="justify"><strong>Lugar donde se ubica.</strong> Indicar si se encuentra en México, debiendo señalar entidad federativa o en el extranjero, debiendo señalar el país donde se localiza.</p></li>
                        <li><p align="justify"><strong>Sector productivo al que pertenece.</strong> Elegir el sector al que pertenece la empresa, sociedad o asociación. En caso de señalar otro, especifique.</p></li>
                    </ol>
                </ol>
                <p align="justify"><strong>Aclaraciones/observaciones.</strong>
                <div>En este espacio podrá realizar las aclaraciones u observaciones que considere pertinentes respecto de alguno o algunos de los incisos de este apartado</div>
            </p>
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

