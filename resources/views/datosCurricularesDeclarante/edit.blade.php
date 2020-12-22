@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <h3>DATOS CURRICULARES DEL DECLARANTE</h3>
            </div>
            <div class="card-body">
                {!! Form::model($curricular, ['route' => ['datos_curriculares_declarante.update', $curricular->id], 'method' => 'put','id' => 'datosCurricularesDeclarante'] ) !!}
                    @include('datosCurricularesDeclarante.form')
                    <div class="form-row text-center">
                        <div class="col">

                            {{ Form::button('Guardar', ['type' => 'submit', 'class' => 'btn btn-submit text-light btnGuardar'] )}}
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
