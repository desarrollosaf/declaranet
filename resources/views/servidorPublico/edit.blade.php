@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <h3>¿TE DESEMPEÑASTE COMO SERVIDOR PÚBLICO EN EL AÑO INMEDIATO ANTERIOR?</h3>
            </div>
            <div class="card-body">
                {!! Form::open(['route'=>['servidor_publico.update', $ingreso->id], 'method'=>'PUT', 'files' => true, 'role' => 'form','id' => 'frmIngresosNetos']) !!}
                @include('servidorPublico.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
