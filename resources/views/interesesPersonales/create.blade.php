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
                <strong>Deberá declarar intereses personales del declarante que pudieran influir en el empleo,cargo o comisión:</strong>
                <ol>
                <br>
                <li><strong>Datos del cónyuge, concubina o concubinario y dependientes económicos que laborenen el Gobierno Federal, Estatal o Municipal, o en órganos autónomos.</strong></li>
                <br>
                <li><strong>Familiares consanguíneos hasta el cuarto grado, por afinidad o civil, que laboren en el Gobierno Federal, Estatal o Municipal, o en órganos autónomos.</strong></li>
               
                <br><ul><strong> Entiéndase por familiares consanguíneos hasta el cuarto grado, a los siguientes:</strong> padre, madre, hijo, abuelo (a), hermano (a), nieto (a), primo (a), sobrino (a), bisabuelo (a), tíos abuelos y sobrinos nietos.</ul>
                <ul> <strong>Entiéndase por familiares por afinidad hasta el cuarto grado, a los siguientes:</strong> padre del cónyuge, madre del cónyuge, hijo del cónyuge, abuelo (a) del cónyuge, hermano (a) del cónyuge, nieto (a) del cónyuge, primo (a) del cónyuge, sobrino (a) del cónyuge, bisabuelo(a) del cónyuge, tíos abuelos del cónyuge, sobrinos nietos del cónyuge, nuera y yerno,</ul>
                <ul><strong>Entiéndase por familiares por parentesco civil, a los siguientes:</strong> adoptante y adoptado</ul>
                <br>
                <li><strong>Actividad laboral.</strong></li>
                Indicar si el cónyuge, concubina/concubinario o familiares de los establecidos en la lista que se despliega hasta el cuarto grado, consanguíneo, por afinidad o civil, se encuentran trabajando en el sector público. De ser el caso, debe llenar los siguientes campos:
                 <br>
                <li><strong>Sector público.</strong></li>
                Nivel/orden de gobierno. Seleccionar el orden de gobierno en el que se encuentra: federal, estatal o municipal/alcaldía.
                 <br>
                <li><strong>Ámbito público.</strong></li>
                Señalar la naturaleza jurídica al que pertenece: ejecutivo, legislativo,judicial u órgano autónomo.
                 <br>
                <li><strong>Nombre del Ente Público:</strong></li> Señalar el Ente Público al cual se encuentra adscrita la plaza.
                 <br>
                <li><strong>Empleo, cargo o comisión:</strong></li> Señalar el nombre del empleo, cargo o comisión que se establece en su recibo de nómina, nombramiento, contrato u oficio de comisión.
                 <br>
                <li><strong>Especifique función principal:</strong></li> Señalar cuál es la función o actividad principal que desempeña.
                </ol>
                <strong>Aclaraciones/observaciones.</strong> En este espacio podrá realizar las aclaraciones u observaciones que considere pertinentes respecto de alguno o algunos de los incisos de este apartado.
            </div>
        </div>
        <div class="card-body">

            {!! Form::open(['route'=>'intereses_personales.store', 'method'=>'POST', 'role' => 'form','id' => 'frmDonativos']) !!}
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