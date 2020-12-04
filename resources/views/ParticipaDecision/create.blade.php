@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <h3>¿PARTICIPA EN LA TOMA DE DECISIONES DE ALGUNA DE ESTAS INSTITUCIONES?</h3> <h3> (Hasta los últimos dos años)</h3>
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
