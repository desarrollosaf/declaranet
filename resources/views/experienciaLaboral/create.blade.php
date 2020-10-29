@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <h1>Experiencia Laboral</h1>
        </div>
        <div class="card-body">
           @include('experienciaLaboral.form')
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(document).ready(function(){
        $(".PRIVADO").hide();
        $(".PÚBLICO").hide();
    });
    $("#ambito").on("change", function () {
        if ($(this).val() == "PRIVADO") {
            $(".PRIVADO").show();
            $(".PÚBLICO").hide();
        } else if($(this).val() == "PÚBLICO") {
            $(".PRIVADO").hide();
            $(".PÚBLICO").show();
        }else{
            $(".PRIVADO").hide();
            $(".PÚBLICO").hide();
        }
    });
</script>
@endsection

