@extends('layouts.app')
@section('content')
    <div class="container">
 		<div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <h1>DOMICILIO DEL DECLARANTE</h1>
            </div>
            <div class="card-body">
                {!! Form::model($domicilio, ['route' => ['domicilio_declarante.update', $domicilio->id], 'method' => 'put'] ) !!}
                @include('domicilioDeclarante.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection