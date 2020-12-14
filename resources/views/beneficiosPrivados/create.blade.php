@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <div class="float-left">
                    <h4>BENEFICIOS PRIVADOS</h4>
                    <h6 class="card-subtitle">(HASTA LOS DOS ÚLTIMOS AÑOS)</h6>
                </div>
            </div>
            <div class="card-body">
                {!! Form::open(['route'=>'beneficios_privados.store', 'method'=>'POST', 'files' => true, 'role' => 'form', 'id' => 'frmBeneficiosPrivados']) !!}
                @include('beneficiosPrivados.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <input type="hidden" id="accion" value="crear">
@endsection
