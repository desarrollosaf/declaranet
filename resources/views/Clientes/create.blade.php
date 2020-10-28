@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <div class="float-left">
                <h3>CLIENTES PRINCIPALES</h3> <h3> (Hasta los últimos dos años)</h3> 
            </div>
            <div class="float-right">
                <span class="badge badge-success ml-auto px-4" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> AYUDA</span>
            </div>
        </div>
        <div class="collapse" id="collapseExample">
            <div class="card-body">

                <ol>
                    <li><strong>Realiza alguna actividad lucrativa independiente al empleo cargo o comisión.</strong> Seleccionar sí o no.</li>
                    <li><strong>Titular de la actividad lucrativa. </strong>Señalar si es del Declarante, Pareja o dependiente económico.</li>
                    <li><strong>Nombre de la empresa o servicio que proporciona.</strong> Señalar nombre o razón social completos de la empresa o en su caso el servicio que proporciona.</li>
                    <li><strong>RFC.</strong> Proporcionar los doce dígitos del registro federal de contribuyentes de la empresa.</li>
                    <li><strong>Tipo de cliente principal.</strong> Seleccionar si es persona física o persona moral.</li>
                    <li><strong>Señale el nombre o razón social del cliente principal.</strong> Indicar el nombre o razón social completos del cliente principal.</li>
                    <li><strong>RFC.</strong> En caso de personas físicas proporcionar los trece dígitos. En caso de personas morales establecer los doce dígitos del cliente principal.</li>
                    <li><strong>Sector productivo al que pertenece.</strong> Seleccionar alguno de la lista desplegable.</li>
                    <li><strong>Monto aproximado del beneficio o ganancia mensual que obtiene del cliente principal.</strong> Deberá señalar el monto neto sin centavos, de la ganancia que le genera el cliente principal.</li>
                    <li><strong>Lugar donde se ubica.</strong> Indicar si se encuentra en México, debiendo señalar entidad federativa; o en el extranjero, debiendo señalar el país donde se localiza.</li>
                </ol>
                <strong>Aclaraciones/observaciones.</strong> En este espacio podrá realizar las aclaraciones u observaciones que considere pertinentes respecto de alguno o algunos de los incisos de este apartado.
            </div>
        </div>
        <div class="card-body">
            @include('Clientes.form')
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $("#c_principales_actividadLucrativa").on("change", function () {
        if ($(this).val() == "SI") {
            $("#contenedores").show();
        } else {
            $("#contenedores").hide();
        }
    });
</script>
@endsection