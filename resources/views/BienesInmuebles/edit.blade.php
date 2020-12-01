@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <h1>Bienes Inmuebles</h1> 
        </div>
        <div class="card-body">
            {!! Form::model($bien, ['route' => ['bienes_inmuebles.update', $bien->id], 'method' => 'put','id' => 'datosCurricularesDeclarante'] ) !!}
            @include('BienesInmuebles.form')
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection


