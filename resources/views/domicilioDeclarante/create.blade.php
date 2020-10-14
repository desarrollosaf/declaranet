@extends('layouts.app')
@section('content')
    <div class="container">
 		<div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <h1>DOMICILIO DEL DECLARANTE</h1>
            </div>
            <div class="card-body">
                 {!! Form::open(['route'=>'domicilio_declarante.store', 'method'=>'POST', 'files' => true, 'role' => 'form', 'id' => 'DatosDeclarante']) !!}
                @include('domicilioDeclarante.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
@section('scripts')
	<script type="text/javascript">
		$(document).ready(function(){
                    $("#entidad")
		});
	</script>
@endsection
