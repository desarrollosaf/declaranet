@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <h1>¿PARTICIPA EN LA TOMA DE DECISIONES DE ALGUNA DE ESTAS INSTITUCIONES?</h1> <h5>(Hasta los últimos dos años)</h5>
        </div>
        <div class="card-body">
            {!! Form::model($participaciones, ['route' => ['participacion.update', $participaciones->id], 'method' => 'put'] ) !!}
            @include('ParticipaDecision.form')
            {!! Form::close() !!}
        </div>
    </div>
</div>
<input type="hidden" id="accion" value="editar">
