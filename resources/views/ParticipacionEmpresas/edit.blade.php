@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <h1>PARTICIPACIÓN EN EMPRESAS, SOCIEDADES O ASOCIACIONES</h1> <h5>(Hasta los últimos dos años)</h5>
        </div>
        <div class="card-body">
            {!! Form::model($empresas, ['route' => ['participacion_empresas.update', $empresas->id], 'method' => 'put','id' => 'participacion_empresas_asociaciones'] ) !!}
            @include('ParticipacionEmpresas.form')
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection



