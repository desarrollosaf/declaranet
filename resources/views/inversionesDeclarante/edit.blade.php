@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <h4>INVERSIONES, CUENTAS BANCARIAS Y OTRO TIPO DE VALORES/ACTIVOS</h4>
                <h6 class="card-subtitle">(A LA FECHA DE INGRESO)</h6>
            </div>
            <div class="card-body">
                <div class="alert alert-danger" role="alert">
                    Todos los datos de las inversiones, cuentas bancarias y otros tipo de valores/activos a nombre de la pareja, dependientes económicos y/o terceros o que sean en copropiedad con el Declarante no serán públicos.
                </div>
                <hr>
                {!! Form::open(['route'=>['inversiones.update', $inversiones->id], 'method'=>'PUT', 'files' => true, 'role' => 'form', 'id' => 'form-inversiones']) !!}
                    @include('inversionesDeclarante.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection


