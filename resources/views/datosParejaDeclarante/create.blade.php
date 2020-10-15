@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <h1>DATOS DE LA PAREJA</h1>
            </div>
            <div class="card-body">
                {!! Form::open(['route'=>'datos_pareja_declarante.store', 'method'=>'POST', 'files' => true, 'role' => 'form', 'id' => 'datosDeclarante']) !!}
                @include('datosParejaDeclarante.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $()
        });
    </script>
@endsection
