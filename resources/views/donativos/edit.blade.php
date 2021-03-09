@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <div class="float-left">
                <h3>DONATIVOS</h3> <h3> (Hasta los últimos dos años)</h3>
            </div>
            <div class="float-right">
                <span class="badge badge-success ml-auto px-4" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> AYUDA</span>
            </div>
        </div>
        <div class="collapse" id="collapseExample">
            <div class="card-body">
                 <strong>Deberá declarar los donativos realizados o recibidos por el declarante, cónyuge,concubina, concubinario, familiares hasta en segundo grado y/o dependientes económicos, así como los que hubieran realizado a fundaciones u organizaciones no lucrativas de las que forma parte el declarante.</strong>
                <br>
                <br>
                <ul><strong>Se entiende por donación:</strong>Acto libre, por el cual una persona entrega de manera gratuita un bien de su propiedad o una suma de dinero a favor de un familiar, amigo,organizaciones o cualquier otra persona física o moral.</ul>
                <ul><strong>Se entiende como familiares consanguíneos hasta el segundo grado, por consanguinidad, a los siguientes:</strong> padre, madre, hijo, abuelos, hermanos y nietos.</ul>
                <ol>
                    <li><strong>Deberá declarar los donativos realizados por el declarante, cónyuge, concubina,concubinario, familiares hasta en segundo grado y/o dependientes económicos, así como los que hubieran realizado a fundaciones u organizaciones no lucrativa de las que forma parte el declarante.</li>
                    <li><strong>Deberá declarar los donativos que fueron recibidos por el declarante, cónyuge,concubina, concubinario, familiares hasta en segundo grado y/o dependientes económicos</strong></li>
                    <li><strong>Debe declarar si el donativo realizado o recibido fue monetario, en especie o de otro tipo, en caso de elegir otro, deberá especificar.</strong></li>
                    <li><strong>En su caso, deberá declarar la cantidad y tipo de moneda en que se realizó la donación por el declarante, cónyuge, concubina, concubinario, familiares hasta en segundo grado y/o dependientes económicos, así como los que hubieran realizado a fundaciones u organizaciones no lucrativas de las que forma parte el declarante</strong></li>
                    <li><strong>En su caso, deberá declarar la cantidad y tipo de moneda en que se recibió por el declarante, cónyuge, concubina, concubinario, familiares hasta en segundo grado y/o dependientes económicos.</strong></li>
                </ol>
                <strong>Aclaraciones/observaciones.</strong> En este espacio podrá realizar las aclaraciones u observaciones que considere pertinentes respecto de alguno o algunos de los incisos de este apartado.
            </div>
        </div>
        <div class="card-body">
            {!! Form::open(['route'=>['donativos.update',$donativo->id], 'method'=>'PUT', 'role' => 'form','id' => 'frmDonativos']) !!}
            @include('donativos.form')
            <div class="text-center">
                <a class='btn btn-submit text-light' href="{{route("fideicomisos.index")}}">Ir a la sección anterior</a>

                {{ Form::button('Guardar e ir a la siguiente sección', ['type' => 'submit', 'class' => 'btn btn-submit text-light'] )}}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<input type="hidden" id="accion" value="crear">
@endsection
