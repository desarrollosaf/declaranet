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
            <div class="col-md-12">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Tipo de beneficio</th>
                        <th>beneficiario</th>
                        <th>Sector Productivo</th>
                        <th>Tipo de otorgante</th>
                        <th>Nombre</th>
                        <th>Recepción</th>
                        <th>Monto</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($beneficios as $beneficio)
                        <tr>
                            <td>{{$beneficio->tipo_beneficio_id}}</td>
                            <td>{{$beneficio->beneficiario_id}}</td>
                            <td>{{$beneficio->sector_id}}</td>
                            <td>{{$beneficio->otorgante_id}}</td>
                            <td>{{$beneficio->nombre_otorgante}}</td>
                            <td>{{$beneficio->forma_recepcion_id}}</td>
                            <td>{{$beneficio->monto_mensual}}</td>
                            <td><button>EDITAR</button></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
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
