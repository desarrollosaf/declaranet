@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <h1>PRÉSTAMO O COMODATO POR TERCEROS</h1> <h5>(A la fecha de ingreso)</h5>
            </div>
            <div class="card-body">
                {!! Form::open(['route'=>['prestamos.update', $prestamo->id], 'method'=>'PUT', 'files' => true, 'role' => 'form', 'id' => 'prestamosForm']) !!}
                @include('Prestamos.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection



