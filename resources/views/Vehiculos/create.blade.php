@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
        </div>
        <div class="card-body">
           @include('Vehiculos.form')
        </div>
    </div>
</div>
@endsection