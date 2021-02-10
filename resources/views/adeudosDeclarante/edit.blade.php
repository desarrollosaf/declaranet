@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <h3>ADEUDOS / PASIVOS</h3>
                <h6 class="card-subtitle">(A LA FECHA DE INGRESO)</h6>
            </div>
            <div class="card-body">
                <div class="alert alert-danger" role="alert">
                    Todos los datos de los adeudos / pasivos a nombre de la pareja,
                    dependientes económicos y/o terceros o que sean en copropiedad
                    con el Declarante no serán públicos.
                </div>
                <label>ADEUDOS DEL DECLARANTE, PAREJA Y/O DEPENDIENTES ECONÓMICOS.</label>
                <hr>
                {!! Form::open(['route'=>['adeudos.update', $adeudos->id], 'method'=>'PUT', 'files' => true, 'role' => 'form', 'id' => '']) !!}
                    @include('adeudosDeclarante.form')
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection

