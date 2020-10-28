@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <h1>CLIENTES PRINCIPALES</h1> <h5>(Hasta los últimos dos años)</h5>
        </div>
        <div class="card-body">
            @include(Clientes.form')
        </div>
    </div>
</div>
@endsection


