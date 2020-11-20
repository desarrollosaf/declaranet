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
                <div class="form-row">
                    <div class="col">
                        {{ Form::button('Ir a la sección anterior', ['type' => 'button', 'class' => 'btn btn-submit text-light'] )}}
                    </div>
                    <div class="col">
                        {{ Form::button('Guardar e ir a la siguiente sección', ['type' => 'submit', 'class' => 'btn btn-submit text-light float-right'] )}}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection