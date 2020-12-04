@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <h1>CLIENTES PRINCIPALES<br>
                    (Hasta los últimos dos años)</h1>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead class="text-center text-light">
                    <tr>
                        <th scope="col" width="20%">Títular</th>
                        <th scope="col" width="20%">Nombre</th>
                        <th scope="col" width="40%">Información adicional</th>
                        <th scope="col" width="20%">Acciones</th></tr>
                    </thead>
                    <tbody class="text-center">
                    @if($clientes)
                        @foreach($clientes as $cliente)

                            <tr>
                                <td>
                                    <center>{{$cliente->tipoRelaciones->valor}}</center>
                                </td>
                                <td>
                                    <center>{{$cliente->nombre_empresa}}</center>
                                </td>
                                <td>
                                    <center>
                                        <strong>Nombre del cliente:{{$cliente->nombre_cliente}} {{$cliente->nombre_cliente_moral}}</strong>  <br>
                                        <strong>Sector:{{$cliente->sectores->valor}}</strong> <br>
                                        <strong>Monto aproximado:{{$cliente->monto_beneficio}}</strong>
                                    </center>
                                </td>
                                <td class="all">
                                    {!! Form::open(['action' => ['ClientesPrincipalesController@destroy', $cliente->id], 'method'=>'DELETE']) !!}
                                    <div style="display: inline-block;">
                                        <a href="{{route('clientes_principales.edit',[$cliente])}}" class="btn btn-xs btn-warning">
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
                    Para adicionar información pulse <a class="btn btn-submit btn-sm text-light" href="{{route('clientes_principales.create')}}">Agregar</a>, de lo contrario vaya a la siguiente sección.<br>
                </center>
                <br>
                <center>
                    <a class="btn btn-sm btn-submit text-light">Ir a la sección anterior</a>
                    <a class="btn btn-sm btn-submit text-light">Ir a la siguiente sección</a>
                </center>
            </div>

@endsection
