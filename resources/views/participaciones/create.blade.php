@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <div class="float-left">
                    <h3>PARTICIPACIONES</h3>
                <h6> (Hasta los últimos dos años)</h6>
                </div>
                <div class="float-right">
                    <span class="badge badge-success ml-auto px-4" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> AYUDA</span>
            </div>
            </div>
            <div class="collapse" id="collapseExample">
                <div class="card-body">
                    <p>III. Participación del declarante, cónyuge, concubina, concubinario, familiares consanguíneos hasta el cuarto grado por afinidad o civil y/o dependientes económicos en asociaciones, organizaciones y asociaciones civiles, consejos y consultorías a la fecha de inicio del cargo o conclusión de este. 
                    </p>
                    <p>
                    <ul>
                        <li>a) Naturaleza del vínculo: socio o colaborador.</li>
                        <li>b) Frecuencia anual.</li>
                        <li>d) Tipo de colaboración: cuotas, servicios profesionales, participación voluntaria, participación remunerada. </li>
                        <li>e) La participación presente o pasada del servidor público y del cónyuge, dependientes económicos o familiares hasta en segundo grado, en direcciones y consejos de administración, participación accionaria en sociedades, préstamos, créditos y obligaciones financieras.</li>
                    </ul>
                </div>
            </div>
            <div class="card-body">

                {!! Form::open(['route'=>'participaciones.store', 'method'=>'POST', 'role' => 'form','id' => 'frmParticipaciones']) !!}
                @include('participaciones.form')
                <div class="text-center">
                    <a class='btn btn-submit text-light' href="{{route("participaciones.index")}}">Ir a la sección anterior</a>

                    {{ Form::button('Guardar e ir a la siguiente sección', ['type' => 'submit', 'class' => 'btn btn-submit text-light'] )}}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <input type="hidden" id="accion" value="crear">
@endsection
@section('scripts')
<script>
    $(document).ready(function(){
        $("#tipo_titular_donativo_id").change();
    });
    $("#tipo_titular_donativo_id").on("change",function(){
        if($(this).val() != ""){
            $.ajax({
                url:"/instituciones/obtener_grado/"+$("#tipo_titular_donativo_id option:selected").data("grado"),
                type:"GET",
                async:true,
                success:function(data){
                    console.log(data);
                    var html = "";
                    html += "<option value=''>Selecciona una opción</option>";
                    $.each(data,function(index,element){
                        html += "<option value='"+element.id+"'>"+element.nombre+"</option>";
                    });
                    $("#institucion_participacion_id").html(html);
                }
            });
        }else{
            $("#institucion_participacion_id").html("<option value=''>Selecciona una opción</option>");
        }
    });
</script>
@endsection