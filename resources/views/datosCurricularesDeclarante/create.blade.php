@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">

            <div class="card-header">
                <div class="float-left">
                    <h3>DATOS CURRICULARES DEL DECLARANTE</h3>
                </div>
                <div class="float-right">
                    <span class="badge badge-success ml-auto px-4" data-toggle="collapse" href="#collapseDatosEmpleo" role="button" aria-expanded="false" aria-controls="collapseExample"> AYUDA</span>
                </div>
            </div>
            <div class="collapse" id="collapseDatosEmpleo">
                <div class="card-body">
                    <ol class="ayuda">
                        <li><strong>Nivel.</strong> Deberá elegir alguna de las siguientes opciones: primaria, secundaria, bachillerato, carrera técnica o comercial, licenciatura, especialidad, maestría o doctorado.</li>
                        <li><strong>Institución educativa.</strong> Escribir el nombre de la institución o escuela donde se realizaron los estudios.</li>
                        <li><strong>Carrera o área de conocimiento (Si aplica).</strong> Escribir el nombre de la carrera o de los estudios realizados.</li>
                        <li><strong>Estatus.</strong> Seleccionar si se encuentra cursando los estudios, finalizado o trunco.</li>
                        <li><strong>Documento obtenido.</strong> Señalar la opción que corresponda: boleta, certificado, constancia o título.</li>
                        <li><strong>Fecha de obtención del documento.</strong> Señalar la fecha que indica el documento obtenido.</li>
                        <li><strong>Lugar donde se ubica la institución educativa.</strong> Señalar si se ubica en México o en el extranjero.</li>
                    </ol>
                    <strong>Aclaraciones/observaciones.</strong> En este espacio podrá realizar las aclaraciones u observaciones que considere pertinentes respecto de alguno o algunos de los incisos de este apartado.
                </div>
            </div>

            <div class="card-body">
                {!! Form::open(['route'=>'datos_curriculares_declarante.store', 'method'=>'POST', 'files' => true, 'role' => 'form', 'id' => 'datosCurricularesDeclarante']) !!}
                    @include('datosCurricularesDeclarante.form')
                    <div class="form-row text-center">
<!--                        <center>-->
                        <div class="col">
                            {{ Form::button('Guardar', ['type' => 'submit', 'class' => 'btn btn-submit text-light btnGuardar'] )}}
                        </div>
                        <!--</center>-->
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection