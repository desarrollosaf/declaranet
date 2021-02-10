@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <h4>APOYOS O BENEFICIOS PÚBLICOS</h4>
                <h6 class="card-subtitle">(HASTA LOS DOS ÚLTIMOS AÑOS)</h6>
            </div>
            <div class="card-body">
                {!! Form::open(['route'=>['apoyo_beneficio.update', $apoyo->id], 'method'=>'PUT', 'files' => true, 'role' => 'form', 'id' => '']) !!}
                @include('apoyoBeneficiosDeclarante.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
