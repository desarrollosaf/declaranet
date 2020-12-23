@extends('layouts.mcg')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <h4>CAPTURA DEL PADRÓN DE OBLIGADOS A PRESENTAR DECLARACIONES DE SITUACIÓN PATRIMONIAL Y DE INTERESES</h4>

            <div class="float-right">
                <span class="badge badge-success ml-auto px-4" data-toggle="collapse" href="#collapseInversion" role="button" aria-expanded="false" aria-controls="collapseExample"> AYUDA</span>
            </div>
        </div>
        <div class="collapse" id="collapseInversion">
            <div class="card card-body">
               
          </div>
      </div>
        <div class="card-body">
          {!! Form::open(['route'=>'MCG.store', 'method'=>'POST', 'files' => true, 'role' => 'form','id' => 'frmIngresosNetos']) !!}
             @include('McgDeclaranet.form')
          {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

