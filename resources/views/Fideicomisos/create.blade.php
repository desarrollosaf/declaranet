@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <div class="float-left">
                <h3>FIDEICOMISOS</h3> <h3> (Hasta los últimos dos años)</h3>
            </div>
            <div class="float-right">
                <span class="badge badge-success ml-auto px-4" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> AYUDA</span>
            </div>
        </div>
        <div class="card-body">

            {!! Form::open(['route'=>'fideicomisos.store', 'method'=>'POST', 'role' => 'form','id' => 'frmFideicomisos']) !!}
           @include('Fideicomisos.form')
           <center> {{ Form::button('Guardar', ['type' => 'submit', 'class' => 'btn btn-submit text-light submitForm'] )}}</center>
           {!! Form::close() !!}
        </div>
    </div>
</div>
<input type="hidden" id="accion" value="crear">
@endsection
