@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <h1>VEHICULOS</h1> <h5>(A la fecha de ingreso)</h5>
        </div>
        <div class="card-body">
            {!! Form::model($vehiculos, ['route' => ['vehiculos.update', $vehiculos->id], 'method' => 'put'] ) !!}
            @include('vehiculos.form')
            {!! Form::close() !!}
        </div>
    </div>
</div>
    <input type="hidden" id="accion" value="editar">
@endsection
