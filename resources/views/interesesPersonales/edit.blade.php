@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <div class="float-left">
                <h3>INTERESES PERSONALES</h3>
            </div>
            <div class="float-right">
                <span class="badge badge-success ml-auto px-4" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> AYUDA</span>
            </div>
        </div>
        <div class="collapse" id="collapseExample">
            <div class="card-body">
                Deberá declarar intereses personales del declarante que pudieran influir en el empleo,cargo o comisión:
                <ol>
                <li><strong>Datos del cónyuge, concubina o concubinario y dependientes económicos que laborenen el Gobierno Federal, Estatal o Municipal, o en órganos autónomos.</strong></li>
                <li><strong>Familiares consanguíneos hasta el cuarto grado, por afinidad o civil, que laboren en el Gobierno Federal, Estatal o Municipal, o en órganos autónomos.</strong></li>
                Entiéndase por familiares consanguíneos hasta el cuarto grado, a los siguientes: padre, madre, hijo, abuelo (a), hermano (a), nieto (a), primo (a), sobrino (a), bisabuelo (a), tíos abuelos y sobrinos nietos.
                Entiéndase por familiares por afinidad hasta el cuarto grado, a los siguientes: padre del cónyuge, madre del cónyuge, hijo del cónyuge, abuelo (a) del cónyuge, hermano (a) del cónyuge, nieto (a) del cónyuge, primo (a) del cónyuge, sobrino (a) del cónyuge, bisabuelo(a) del cónyuge, tíos abuelos del cónyuge, sobrinos nietos del cónyuge, nuera y yerno,
                Entiéndase por familiares por parentesco civil, a los siguientes: adoptante y adoptado
                <li><strong>Actividad laboral.
                Indicar si el cónyuge, concubina/concubinario o familiares de los establecidos en la lista que se despliega hasta el cuarto grado, consanguíneo, por afinidad o civil, se encuentran trabajando en el sector público. De ser el caso, debe llenar los siguientes campos:</strong></li>
                <li><strong>Sector público.
                Nivel/orden de gobierno. Seleccionar el orden de gobierno en el que se encuentra: federal, estatal o municipal/alcaldía.</strong></li>
                <li><strong>Ámbito público. Señalar la naturaleza jurídica al que pertenece: ejecutivo, legislativo,judicial u órgano autónomo.</strong></li>
                <li><strong>Nombre del Ente Público: Señalar el Ente Público al cual se encuentra adscrita la plaza.</strong></li>
                <li><strong>Empleo, cargo o comisión: Señalar el nombre del empleo, cargo o comisión que se establece en su recibo de nómina, nombramiento, contrato u oficio de comisión.</strong></li>
                <li><strong>Especifique función principal: Señalar cuál es la función o actividad principal que desempeña.</strong></li>
                <li><strong>Fecha de ingreso al empleo: Señalar la fecha en que inició empleo, cargo o comisión.</strong></li>
                </ol>
                Aclaraciones/observaciones. En este espacio el Declarante podrá realizar las aclaraciones u observaciones que considere pertinentes respecto de alguno o algunos de los incisos de este apartado.
            </div>
        </div>
        <div class="card-body">

            {!! Form::open(['route'=>['intereses_personales.update', $intereses->id], 'method'=>'PUT', 'role' => 'form','id' => 'frmDonativos']) !!}
            @include('interesesPersonales.form')
            <div class="text-center">
                <a class='btn btn-submit text-light' href="{{route("intereses_personales.index")}}">Ir a la sección anterior</a>

                {{ Form::button('Guardar e ir a la siguiente sección', ['type' => 'submit', 'class' => 'btn btn-submit text-light'] )}}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<input type="hidden" id="accion" value="crear">
@endsection