@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
        </div>
        <div class="card-body">
            {!! Form::open(['route'=>'bienes_muebles.store', 'method'=>'POST', 'files' => true, 'role' => 'form', 'id' => 'form-bienes-muebles']) !!}
                @include('BienesMuebles.form')
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
