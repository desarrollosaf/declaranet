@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <div class="float-left">
                    <h4>APOYOS O BENEFICIOS PÚBLICOS</h4>
                    <h6 class="card-subtitle">(HASTA LOS DOS ÚLTIMOS AÑOS)</h6>
                </div>
                <div class="float-right">
                    <span class="badge badge-success ml-auto px-4" data-toggle="collapse" href="#collapseApoyo" role="button" aria-expanded="false" aria-controls="collapseExample"> AYUDA</span>
                </div>
            </div>
            <div class="collapse" id="collapseApoyo">
                <div class="card card-body">
                    <ol>
                        <li><p align="justify"><strong>Titular del apoyo o beneficio.</strong> Son las personas que reciben el apoyo o beneficio público. De las opciones del catálogo indicar quien o quienes son los beneficiarios, señalar las veces que sean necesarias.</p></li>
                        <li><p align="justify"><strong>Nombre del programa.</strong> Proporcionar el nombre del programa por el cual recibe el apoyo o beneficio público.</p></li>
                        <li><p align="justify"><strong>Institución que otorga el apoyo.</strong> Señalar el nombre de la institución que le esté dando el apoyo.</p></li>
                        <li><p align="justify"><strong>Nivel u orden de gobierno.</strong> Seleccionar el orden de gobierno por medio del cual recibe el apoyo o beneficio público: federal, estatal o municipal/alcaldía.</p></li>
                        <li><p align="justify"><strong>Tipo de apoyo.</strong> Seleccionar del listado desplegable: subsidio (Ayuda económica que una persona recibe de un organismo oficial para satisfacer una necesidad determinada), servicio (Actividad o asistencia de un Ente Público, en favor del Declarante), Obra (materiales o servicios a favor del Declarante para construcción), otro, especifique.</p></li>
                        <li><p align="justify"><strong>Forma de recepción del beneficio.</strong> Señalar si el apoyo recibido es monetario o en especie, en caso de haber seleccionado monetario deberá seleccionar el tipo de moneda.</p></li>
                        <li><p align="justify"><strong>Especifique el apoyo.</strong> En caso de haber seleccionado en especie deberá describir en qué consiste el apoyo o beneficio.</li>
                        <li><p align="justify"><strong>Monto mensual aproximado del beneficio.</strong> Es necesario capturar cantidades sin comas, sin puntos, sin centavos y sin ceros a la izquierda. Indicar cantidad mensual del apoyo, si este no fuera mensual, realizar la operación aritmética a efecto de establecer la cantidad como lo solicita el formato.</p></li>
                    </ol>
                    <p align="justify"><strong>Aclaraciones/observaciones.</strong> En este espacio podrá realizar las aclaraciones u observaciones que considere pertinentes respecto de alguno o algunos de los incisos de este apartado.</p>

              </div>
          </div>
            <div class="card-body">
                {!! Form::open(['route'=>'apoyo_beneficio.store', 'method'=>'POST', 'files' => true, 'role' => 'form', 'id' => '']) !!}
                @include('apoyoBeneficiosDeclarante.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
