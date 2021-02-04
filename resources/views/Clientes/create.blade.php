@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <div class="float-left">
                <h4>CLIENTES PRINCIPALES</h4>
                <h6 class="card-subtitle">(HASTA LOS DOS ÚLTIMOS AÑOS)</h6>
            </div>
            <div class="float-right">
                <span class="badge badge-success ml-auto px-4" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> AYUDA</span>
            </div>
        </div>
        <div class="collapse" id="collapseExample">
            <div class="card-body">

                <ol>
                    <li><p align="justify"><strong>Realiza alguna actividad lucrativa independiente al empleo cargo o comisión.</strong> Seleccionar sí o no.</p> </li>
                    <li><p align="justify"><strong>Titular de la actividad lucrativa. </strong>Señalar si es del Declarante, Pareja o dependiente económico.</p></li>
                    <li><p align="justify"><strong>Nombre de la empresa o servicio que proporciona.</strong> Señalar nombre o razón social completos de la empresa o en su caso el servicio que proporciona.</p></li>
                    <li><p align="justify"><strong>RFC.</strong> Proporcionar los doce dígitos del registro federal de contribuyentes de la empresa.</p></li>
                    <li><p align="justify"><strong>Tipo de cliente principal.</strong> Seleccionar si es persona física o persona moral.</p></li>
                    <li><p align="justify"><strong>Señale el nombre o razón social del cliente principal.</strong> Indicar el nombre o razón social completos del cliente principal.</p></li>
                    <li><p align="justify"><strong>RFC.</strong> En caso de personas físicas proporcionar los trece dígitos. En caso de personas morales establecer los doce dígitos del cliente principal.</p></li>
                    <li><p align="justify"><strong>Sector productivo al que pertenece.</strong> Seleccionar alguno de la lista desplegable.</p></li>
                    <li><p align="justify"><strong>Monto aproximado del beneficio o ganancia mensual que obtiene del cliente principal.</strong> Deberá señalar el monto neto sin centavos, de la ganancia que le genera el cliente principal.</p></li>
                    <li><p align="justify"><strong>Lugar donde se ubica.</strong> Indicar si se encuentra en México, debiendo señalar entidad federativa; o en el extranjero, debiendo señalar el país donde se localiza.</p></li>
                </ol>
                <p align="justify"><strong>Aclaraciones/observaciones.</strong> En este espacio podrá realizar las aclaraciones u observaciones que considere pertinentes respecto de alguno o algunos de los incisos de este apartado.</p>
            </div>
        </div>
        <div class="card-body">
            {!! Form::open(['route'=>'clientes_principales.store', 'method'=>'POST', 'files' => true, 'role' => 'form', 'id' => '']) !!}
            @include('Clientes.form')
            {!! Form::close() !!}
        </div>
    </div>
</div>
<input type="hidden" id="accion" value="crear">
<div></div>
@endsection

