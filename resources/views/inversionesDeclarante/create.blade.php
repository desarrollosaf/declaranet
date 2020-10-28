@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h1>INVERSIONES, CUENTAS BANCARIAS Y OTRO TIPO DE VALORES/ACTIVOS</h1>
            <h6>(A la fecha de ingreso)</h6>
        </div>
        <div class="card-body">
            <div class="alert alert-danger" role="alert">
                Todos los datos de las inversiones, cuentas bancarias y otros tipo de valores/activos a nombre de la pareja, dependientes económicos y/o terceros o que sean en copropiedad con el Declarante no serán públicos.
            </div>
            <h5> INVERSIONES, CUENTAS BANCARIAS Y OTRO TIPO DE VALORES DEL DECLARANTE, PAREJA Y/O DEPENDIENTES ECONÓMICOS.</h5>
            <hr>
            {!! Form::open(['route'=>'inversiones.store', 'method'=>'POST', 'files' => true, 'role' => 'form', 'id' => 'DatosDeclarante']) !!}
            @include('inversionesDeclarante.form')
            {!! Form::close() !!}
        </div>
    </div>
@endsection