@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h1>ADEUDOS / PASIVOS</h1>
            <h6>(A la fecha de ingreso)</h6>
        </div>
        <div class="card-body">
            <div class="alert alert-danger" role="alert">
                Todos los datos de los adeudos / pasivos a nombre de la pareja,
                dependientes económicos y/o terceros o que sean en copropiedad
                con el Declarante no serán públicos.
            </div>
            <label>ADEUDOS DEL DECLARANTE, PAREJA Y/O DEPENDIENTES ECONÓMICOS.</label>
            <hr>
            @include('adeudosDeclarante.form')
        </div>
    </div>
@endsection
