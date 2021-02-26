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
                <strong> Participación del declarante, cónyuge, concubina, concubinario, familiares consanguíneoshasta el cuarto grado por afinidad o civil y/o dependientes económicos en asociaciones,organizaciones y asociaciones civiles, consejos y consultorías a la fecha de inicio del cargo o conclusión de este.</strong>

                <ol>
                    <br>
                    <ul><strong>Entiéndase por familiares consanguíneos hasta el cuarto grado a los siguientes:</strong>padre,madre, hijo, abuelo (a), hermano (a), nieto (a), primo (a), sobrino (a), bisabuelo (a), tíos abuelos y sobrinos nietos.</ul>
                    <ul><strong>Entiéndase por familiares por afinidad hasta el cuarto grado, a los siguientes:</strong>padre del cónyuge, madre del cónyuge, hijo del cónyuge, abuelo (a) del cónyuge, hermano (a) del cónyuge, nieto (a) del cónyuge, primo (a) del cónyuge, sobrino (a) del cónyuge, bisabuelo(a) del cónyuge, tíos abuelos del cónyuge, sobrinos nietos del cónyuge, nuera y yerno.</ul>
                    <ul><strong>Entiéndase como familiares consanguíneos hasta el segundo grado, por consanguinidad,a los siguientes:</strong>padre, madre, hijo, abuelos, hermanos y nietos.</ul>
                    <ul><strong>Entiéndase por familiares por parentesco civil a los siguientes:</strong>adoptante y adoptado.</ul>
                    <br>
                </ol>
                <strong>En el caso de ser así, deberá declarar lo siguiente:</strong>

                <ol>
                    <br>
                    <li><strong>Naturaleza del vínculo:</strong> socio o colaborador.</li>
                    <li><strong>Frecuencia anual.</strong></li>
                    <li><strong>Tipo de persona jurídica colectiva:</strong> instituciones de derecho público, sociedades o asociaciones de derecho privado, fundación, asociación gremial, sindicato o federación de organizaciones de trabajadores, junta de vecinos u otra organización comunitaria, iglesia o entidad religiosa.</li>
                    <li><strong>Tipo de colaboración:</strong>cuotas, servicios profesionales, participación voluntaria,participación remunerada.</li>
                    <li><strong>La participación presente o pasada</strong>del servidor público y del cónyuge, dependientes económicos o familiares hasta el segundo grado, en direcciones y consejos de administración, participación accionaria en sociedades, préstamos, créditos y obligaciones financieras.</li>
                </ol>
                <strong>Aclaraciones/observaciones.</strong> En este espacio el Declarante podrá realizar las aclaraciones u observaciones que considere pertinentes respecto de alguno o algunos de los incisos de este apartado.
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
    $(document).ready(function () {
        $("#tipo_titular_donativo_id").change();
    });
    $("#tipo_titular_donativo_id").on("change", function () {
        if ($(this).val() != "") {
            $.ajax({
                url: "/instituciones/obtener_grado/" + $("#tipo_titular_donativo_id option:selected").data("grado"),
                type: "GET",
                async: true,
                success: function (data) {
                    console.log(data);
                    var html = "";
                    html += "<option value=''>Selecciona una opción</option>";
                    $.each(data, function (index, element) {
                        html += "<option value='" + element.id + "'>" + element.nombre + "</option>";
                    });
                    $("#institucion_participacion_id").html(html);
                }
            });
        } else {
            $("#institucion_participacion_id").html("<option value=''>Selecciona una opción</option>");
        }
    });
</script>
@endsection