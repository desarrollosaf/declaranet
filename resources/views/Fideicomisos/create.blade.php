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
        <div class="collapse" id="collapseExample">
            <div class="card-body">
                Este apartado solo lo llenaran las personas servidoras públicas que tengan participación en un fideicomiso, ya sea en el carácter de fideicomitente, fiduciario, fideicomisario o dentro del consejo técnico. Deberá reportar hasta los últimos dos años.
                <ol>
                    <li><strong>Titular de la participación.</strong> Elegir quien es el participante en el fideicomiso, el Declarante, Pareja o dependiente económico.</li>
                    <li><strong>Tipo de fideicomiso.</strong> Seleccionar si es público, privado o mixto.</li>
                    <li><strong>Tipo de participación.</strong> Seleccionar su participación como fideicomitente, fiduciario, fideicomisario o dentro del Comité Técnico.</li>
                    <li><strong>Tipo de persona del fideicomiso.</strong> Seleccionar si es persona física o persona moral.</li>
                    <li><strong>Nombre o razón social del fideicomiso.</strong> Proporcionar nombre completo.</li>
                    <li><strong>RFC del fideicomiso.</strong> En caso de personas físicas proporcionar los trece dígitos. En caso de personas morales establecer los doce dígitos del fideicomiso.</li>
                    <li><strong>Fideicomitente.</strong> Seleccionar si es persona física o persona moral.</li>
                    <li><strong>Nombre o razón social del fideicomitente.</strong> Proporcionar nombre completo.</li>
                    <li><strong>RFC.</strong> En caso de personas físicas proporcionar los trece dígitos. En caso de personas morales establecer los doce dígitos del fideicomitente.</li>
                    <li><strong>Tipo de personal del fiduciario.</strong> Seleccionar si es persona física o persona moral.</li>
                    <li><strong>RFC.</strong> En caso de personas físicas proporcionar los trece dígitos. En caso de personas morales establecer los doce dígitos del fiduciario.</li>
                    <li><strong>Fideicomisario.</strong> Seleccionar si es persona física o persona moral.</li>
                    <li><strong>Nombre o razón social del fideicomisario.</strong> Proporcionar nombre completo.</li>
                    <li><strong>RFC.</strong> En caso de personas físicas proporcionar los trece dígitos. En caso de personas morales establecer los doce dígitos del fideicomisario.</li>
                    <li><strong>Sector productivo al que pertenece.</strong> Seleccionar alguno de la lista desplegable.</li>
                    <li><strong>¿Dónde se localiza el fideicomiso?</strong> Seleccionar en México o en el extranjero.</li>
                </ol>
                <strong>Aclaraciones/observaciones.</strong> En este espacio podrá realizar las aclaraciones u observaciones que considere pertinentes respecto de alguno o algunos de los incisos de este apartado.
            </div>
        </div>
        <div class="card-body">

            {!! Form::open(['route'=>'fideicomisos.store', 'method'=>'POST', 'role' => 'form','id' => 'frmFideicomisos']) !!}
           @include('Fideicomisos.form')
           {!! Form::close() !!}
        </div>
    </div>
</div>
<input type="hidden" id="accion" value="crear">
@endsection
