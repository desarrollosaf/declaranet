@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <div class="float-left">
                    <h3>BENEFICIOS PRIVADOS</h3> <small><h6> (Hasta los últimos dos años)</h6></small>
                </div>
            </div>
            <div class="card-body">
                @include('beneficiosPrivados.form')
            </div>
        </div>
    </div>
@endsection
