@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <h1>DATOS DEL EMPLEO, CARGO O COMISIÓN QUE INICIA</h1>
            </div>
            <div class="card-body">
                {!! Form::model($DatoEmpleoDeclarante, ['route' => ['datos_empleo_declarante.update', $DatoEmpleoDeclarante->id], 'method' => 'put'] ) !!}
                @include('datosEmpleoDeclarante.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <input type="hidden" id="accion" value="editar">
@endsection
