@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <h1>BENEFICIOS PRIVADOS</h1> <h5>(Hasta los últimos dos años)</h5>
            </div>
            <div class="card-body">
                {!! Form::model($beneficio,['route' => ['beneficios_privados.update', $beneficio->id], 'method' => 'put'] ) !!}
                @include('beneficiosPrivados.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <input type="hidden" id="accion" value="editar">
@endsection
