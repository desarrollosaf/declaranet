@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <h1>BIENES MUEBLES</h1> <h5>(A la fecha de ingreso)</h5>
        </div>
        <div class="card-body">
            {!! Form::open(['route'=>['bienes_muebles.update', $bienMueble->id], 'method'=>'PUT', 'files' => true, 'role' => 'form', 'id' => 'form-bienes-muebles']) !!}
                @include('BienesMuebles.form')
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection



