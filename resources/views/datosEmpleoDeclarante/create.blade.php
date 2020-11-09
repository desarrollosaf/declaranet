@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <h1>DATOS DEL EMPLEO, CARGO O COMISIÓN QUE INICIA</h1>
            </div>

            {!! Form::open(['route'=>'datos_empleo_declarante.store', 'method'=>'POST', 'files' => true, 'role' => 'form', 'id' => 'frmDatosEmpleoDeclarante']) !!}
            @include('datosEmpleoDeclarante.form')
            {!! Form::close() !!}

        </div>
    </div>
@endsection
