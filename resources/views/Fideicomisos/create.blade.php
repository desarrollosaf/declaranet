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
                <p align="justify">Este apartado solo lo llenarán las personas servidoras públicas que tengan participación en un fideicomiso, ya sea en el carácter de fideicomitente, fiduciario, fideicomisario o dentro del consejo técnico. Deberá reportar hasta los últimos dos años.</p>
                <ol>
                    <li><p align="justify"><strong>Titular de la participación.</strong> Elegir quién es el participante en el fideicomiso, el Declarante, Pareja o dependiente económico.</p></li>
                    <li><p align="justify"><strong>Tipo de fideicomiso.</strong> Seleccionar si es público, privado o mixto.</p></li>
                    <li><p align="justify"><strong>Tipo de participación.</strong> Seleccionar su participación como fideicomitente, fiduciario, fideicomisario o dentro del Comité Técnico.</p></li>
                    <li><p align="justify"><strong>Tipo de persona del fideicomiso.</strong> Seleccionar si es persona física o persona moral.</p></li>
                    <li><p align="justify"><strong>Nombre o razón social del fideicomiso.</strong> Proporcionar nombre completo.</p></li>
                    <li><p align="justify"><strong>RFC del fideicomiso.</strong> En caso de personas físicas proporcionar los trece dígitos. En caso de personas morales establecer los doce dígitos del fideicomiso.</p></li>
                    <li><p align="justify"><strong>Fideicomitente.</strong> Seleccionar si es persona física o persona moral.</p></li>
                    <li><p align="justify"><strong>Nombre o razón social del fideicomitente.</strong> Proporcionar nombre completo.</p></li>
                    <li><p align="justify"><strong>RFC.</strong> En caso de personas físicas proporcionar los trece dígitos. En caso de personas morales establecer los doce dígitos del fideicomitente.</p></li>
                    <li><p align="justify"><strong>Tipo de personal del fiduciario.</strong> Seleccionar si es persona física o persona moral.</p></li>
                    <li><p align="justify"><strong>RFC.</strong> En caso de personas físicas proporcionar los trece dígitos. En caso de personas morales establecer los doce dígitos del fiduciario.</p></li>
                    <li><p align="justify"><strong>Fideicomisario.</strong> Seleccionar si es persona física o persona moral.</p></li>
                    <li><p align="justify"><strong>Nombre o razón social del fideicomisario.</strong> Proporcionar nombre completo.</p></li>
                    <li><p align="justify"><strong>RFC.</strong> En caso de personas físicas proporcionar los trece dígitos. En caso de personas morales establecer los doce dígitos del fideicomisario.</p></li>
                    <li><p align="justify"><strong>Sector productivo al que pertenece.</strong> Seleccionar alguno de la lista desplegable.</p></li>
                    <li><p align="justify"><strong>¿Dónde se localiza el fideicomiso?</strong> Seleccionar en México o en el extranjero.</p></li>
                </ol>
                <p align="justify"><strong>Aclaraciones/observaciones.</strong> En este espacio podrá realizar las aclaraciones u observaciones que considere pertinentes respecto de alguno o algunos de los incisos de este apartado.</p>
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
