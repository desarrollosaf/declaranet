@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <h1>VEHÍCULOS<br>
                    (A la fecha de ingreso)</h1>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead class="text-center text-light">
                    <tr>
                        <th scope="col" width="20%">Tipo Vehículo</th>
                        <th scope="col" width="20%">Titular</th>
                        <th scope="col" width="40%">Información adicional</th>
                        <th scope="col" width="20%">Acciones</th></tr>
                    </thead>
                    <tbody class="text-center">
                    @if($vehiculos)
                        @foreach($vehiculos as $vehiculo)

                            <tr>
                                <td>
                                    <center>{{$vehiculo->tipo_vehiculo->valor}}</center>
                                </td>
                                <td>
                                    <center>{{$vehiculo->relacion->valor}}</center>
                                </td>
                                <td>
                                    <center>
                                        <strong>Forma de adquisición:</strong> {{$vehiculo->tipoAdquisicion->valor}} <br>
                                        <strong>Forma de pago:</strong> {{$vehiculo->pago->valor}} <br>
                                        <strong>Valor de aquisición:</strong> {{$vehiculo->v_valor}}
                                    </center>
                                </td>
                                <td class="all">
                                    {!! Form::open(['action' => ['VehiculosController@destroy', $vehiculo->id], 'method'=>'DELETE']) !!}
                                    <div style="display: inline-block;">
                                        <a href="{{route('vehiculos.edit',[$vehiculo])}}" class="btn btn-xs btn-warning">
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
                    @endif
                    </tbody>
                </table>
                <center>
                    Si deseas registrar vehiculos pulse <a class="btn btn-submit btn-sm text-light"
                                                           href="{{route('vehiculos.create')}}">Agregar</a><br><br>
                    Si no tiene vehículos, seleccione<a class="btn btn-submit btn-sm text-light" href="">Ninguno</a><br>
                </center>
                <br>
                <center>
                    <a class="btn btn-sm btn-submit text-light">Ir a la sección anterior</a>
                    <a class="btn btn-sm btn-submit text-light">Ir a la siguiente sección</a>
                </center>
            </div>

@endsection
