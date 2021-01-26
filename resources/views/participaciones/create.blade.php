@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <div class="float-left">
                    <h3>Participaciones</h3>
                </div>
                <div class="float-right">
                    <span class="badge badge-success ml-auto px-4" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> AYUDA</span>
            </div>
            </div>
            <div class="collapse" id="collapseExample">
                <div class="card-body">
                    <p>III. Participación del declarante, cónyuge, concubina, concubinario, familiares consanguíneos hasta el cuarto grado por afinidad o civil y/o dependientes económicos en asociaciones, organizaciones y asociaciones civiles, consejos y consultorías a la fecha de inicio del cargo o conclusión de este. 
                    </p>
                    <p>
                    <ul>
                        <li>a) Naturaleza del vínculo: socio o colaborador.</li>
                        <li>b) Frecuencia anual.</li>
                        <li>d) Tipo de colaboración: cuotas, servicios profesionales, participación voluntaria, participación remunerada. </li>
                        <li>e) La participación presente o pasada del servidor público y del cónyuge, dependientes económicos o familiares hasta en segundo grado, en direcciones y consejos de administración, participación accionaria en sociedades, préstamos, créditos y obligaciones financieras.</li>
                    </ul>
                </div>
            </div>
            <div class="card-body">

                {!! Form::open(['route'=>'participaciones.store', 'method'=>'POST', 'role' => 'form','id' => 'frmParticipaciones']) !!}
                @include('participaciones.form')
                <div class="text-center">
                    <a class='btn btn-submit text-light' href="{{route("datos_declarante.create")}}">Ir a la sección anterior</a>

                    {{ Form::button('Guardar e ir a la siguiente sección', ['type' => 'submit', 'class' => 'btn btn-submit text-light'] )}}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <input type="hidden" id="accion" value="crear">
@endsection