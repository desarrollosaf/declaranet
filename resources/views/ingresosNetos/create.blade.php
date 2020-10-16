@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <h3>INGRESOS NETOS DEL DECLARANTE, PAREJA Y/O DEPENDIENTES ECONÓMICOS</h3> <h6>(SITUACIÓN ACTUAL)</h6>
        </div>
        <div class="card-body">
           @include('ingresosNetos.form')
        </div>
    </div>
</div>
@endsection

