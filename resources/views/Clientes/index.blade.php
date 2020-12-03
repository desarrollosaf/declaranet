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
                            <tr>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center></center>
                                </td>
                                <td>
                                    <center>
                                        <strong>Nombre del cliente:</strong>  <br>
                                        <strong>Sector:</strong> <br>
                                        <strong>Monto aproximado:</strong>
                                    </center>
                                </td>
                                <td class="all">

                                    <div style="display: inline-block;">

                                        <button class="btn btn-xs btn-danger btn-borrar">
                                            <i class="ion ion-trash-a btn-borrar"></i>
                                        </button>
                                    </div>
                                    {!! Form::close() !!}
                                </td>
                            </tr>

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
