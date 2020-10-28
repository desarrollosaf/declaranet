@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h1>BENEFICIOS PRIVADOS</h1>
            <h6>(Hasta los últimos dos años)</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                Es la contribución monetaria o en especie que otorga una persona física o moral con recursos privados, al Declarante, pareja y/o dependientes económicos.<br>
                Deberá señalar la información de CADA BENEFICIO PRIVADO recibido por el Declarante, pareja y/o dependientes económicos.
            </div>
            <div class="text-center">
                <label style="margin-top:10px;">
                    <strong>Para registrar información pulse: </strong>
                    <a href="{{route('beneficios_privados.create')}}" class="btn btn-sm btn-secondary">Agregar</a><br>
                    <strong>Si no recibe beneficios privados, seleccione:</strong>
                    <a href="" class="btn btn-sm btn-secondary">Ninguno</a>
                </label>
            </div>
            <div class="text-center">
                <br>
                <a class="btn btn-submit text-light btn-sm">Ir a la sección anterior</a>
                <a class="btn btn-submit text-light btn-sm">Ir a la siguiente sección</a>
            </div>
        </div>
    </div>
@endsection
