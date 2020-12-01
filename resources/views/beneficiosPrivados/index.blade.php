@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <h1>BENEFICIOS PRIVADOS<br>
                (Hasta los últimos dos años)</h1>
        </div>
        <div class="table-responsive">
            <label>
            Es la contribución monetaria o en especie que otorga una persona física o moral con recursos privados, al Declarante, pareja y/o dependientes económicos.<br>
            Deberá señalar la información de CADA BENEFICIO PRIVADO recibido por el Declarante, pareja y/o dependientes económicos.</label>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead class="text-center text-light">
                <tr>
                    <th scope="col" width="20%">Tipo de beneficio</th>
                    <th scope="col" width="20%">Beneficiario</th>
                    <th scope="col" width="40%">Información adicional</th>
                    <th scope="col" width="20%">Acciones</th></tr>
                </thead>
                <tbody class="text-center">

                    @foreach($beneficios as $beneficio)
                        <tr>
                            <td>{{$beneficio->tipoBeneficio->valor}}</td>
                            <td>{{$beneficio->beneficiariosP->valor}}</td>
                            <td>
                                <center>
                                    <strong>Sector: </strong> {{$beneficio->sectoresP->valor}} <br>
                                    <strong>Nombre del otorgante:</strong> {{$beneficio->nombre_otorgante}} {{$beneficio->razon_social_otorgante}}<br>
                                    <strong>Forma de recepción:</strong> {{$beneficio->formaRecepcion->valor}}
                                </center>
                            </td>
                            <td class="all">
                                {!! Form::open(['action' => ['BeneficiosPrivadosController@destroy', $beneficio->id], 'method'=>'DELETE']) !!}
                                <div style="display: inline-block;">
                                    <a href="{{route('beneficios_privados.edit',[$beneficio])}}" class="btn btn-xs btn-warning">
                                        <i class="ion ion-edit"></i>
                                    </a>
                                    <button class="btn btn-xs btn-danger btn-borrar">
                                        <i class="ion ion-trash-a btn-borrar"></i>
                                    </button>
                                </div>
                                {!! Form::close() !!}
                            </td>
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
