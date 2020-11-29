@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
        </div>
        <div class="card-body">
            {!! Form::open(['route'=>'vehiculos.store', 'method'=>'POST', 'files' => true, 'role' => 'form', 'id' => '']) !!}
            @include('Vehiculos.form')
            {!! Form::close() !!}
        </div>
    </div>
</div>
<input type="hidden" id="accion" value="crear">
@endsection
