@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <div class="float-left">
                <h3>REPRESENTACIÓN</h3> <h3> (Hasta los últimos dos años)</h3> 
            </div>
            <div class="float-right">
                <span class="badge badge-success ml-auto px-4" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> AYUDA</span>
            </div>
        </div>
        <div class="collapse" id="collapseExample">
            <div class="card-body">

                <ol>
                    <li><strong>Titular de la representación.</strong> Señalar quien tiene la representación (representante o representado).</li>
                    <li><strong>Tipo de representación.</strong> Indicar si es representante o representado.</li>
                    <li><strong>Fecha de inicio de la representación.</strong> Indicar la fecha en que comenzó la representación.</li>
                    <li><strong>Representante/representado.</strong> Seleccionar si es persona física o persona moral.</li>
                    <li><strong>Nombre o razón social del representante/representado.</strong> Indicar el nombre o razón social completos de su representante o representado.</li>
                    <li><strong>RFC.</strong> En caso de personas físicas proporcionar los trece dígitos. En caso de personas morales establecer los doce dígitos del representante/representado.</li>
                    <li><strong>Recibe remuneración por su representación.</strong> Indicar sí o no le pagan por representar a alguien.</li>
                    <li><strong>Monto mensual neto de su representación.</strong> Especificar el monto mensual neto, sin centavos, que percibe por su representación.</li>
                    <li><strong>Sector productivo al que pertenece.</strong> Elegir el sector al que pertenece</li>
                    <li><strong>Lugar donde se ubica.</strong> Indicar si se encuentra en México, debiendo señalar entidad federativa; o en el extranjero, debiendo señalar el país donde se localiza.</li>
                </ol>
                <strong>Aclaraciones/observaciones.</strong> En este espacio podrá realizar las aclaraciones u observaciones que considere pertinentes respecto de alguno o algunos de los incisos de este apartado.
            </div>
        </div>
        <div class="card-body">
           
            {!! Form::open(['route'=>'representacion.store', 'method'=>'POST',  'role' => 'form', 'id' => 'frm_Representacion']) !!}
             @include('Representacion.form')
            {!! Form::close() !!}

        </div>
    </div>
</div>
@endsection