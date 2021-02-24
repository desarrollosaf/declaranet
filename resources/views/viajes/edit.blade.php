@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <div class="float-left">
                <h3>VIAJES</h3> <h3> (Hasta los últimos dos años)</h3>
            </div>
            <div class="float-right">
                <span class="badge badge-success ml-auto px-4" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> AYUDA</span>
            </div>
        </div>
        <div class="collapse" id="collapseExample">
            <div class="card-body">
                <strong>Proporcionar los datos del o los viajes realizados por el servidor público, su cónyuge,concubina/concubinario, familiares hasta en segundo grado y/o dependientes económicos del cónyuge, dependientes económicos o familiares hasta en segundo grado, financiados por terceros.</strong>
                <br>
                <br>
                <strong> Se entiende como familiares consanguíneos hasta el segundo grado, a los siguientes:</strong> padre, madre, hijo, abuelo, hermanos y nieto.
                <br>
                <br>
                <strong>En su caso, deberá llenar los siguientes datos:</strong>
                <ol>
                    <br>
                    <li><strong>Lugar:</strong> México o en el extranjero</li>
                    <li><strong>Motivo del viaje, por ejemplo:</strong> (turístico, académico, negocios o laboral y otros).</li>
                    <li><strong>Tipo de participación.</strong> Seleccionar su participación como fideicomitente, fiduciario, fideicomisario o dentro del Comité Técnico.</li>
                    <li><strong>Monto del viaje.</strong></li>
                    <li><strong>Si quien pagó el viaje, es una persona física o moral.</strong></li>
                    <li><strong>Registro Federal de Contribuyentes (RFC)</strong> Si es de la persona moral dejar los doce dígitos, si es persona física trece dígitos.</li>
                    <li><strong>Actividad laboral. En la que deberá especificar los siguientes datos:</strong></li>
                </ol>
                <strong>Ámbito al que pertenece el tercero:</strong>
                <ol>
                    <li><strong>Público</strong></li>
                    <li><strong>Privado</strong></li>
                    <li><strong>Otro (desplegando cuadro donde especifique ¿cuál?)</strong></li>
                </ol>
                <strong>Aclaraciones/observaciones.</strong> En este espacio podrá realizar las aclaraciones u observaciones que considere pertinentes respecto de alguno o algunos de los incisos de este apartado.
            </div>
        </div>
        <div class="card-body">

            {!! Form::open(['route'=>['viajes.update',$viajes->id], 'method'=>'PUT', 'role' => 'form','id' => 'frmParticipaciones']) !!}
            @include('viajes.form')
            <div class="text-center">
                <a class='btn btn-submit text-light' href="{{route("viajes.index")}}">Ir a la sección anterior</a>
                {{ Form::button('Guardar e ir a la siguiente sección', ['type' => 'submit', 'class' => 'btn btn-submit text-light'] )}}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<input type="hidden" id="accion" value="crear">
@endsection

