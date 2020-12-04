@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header bg-info  border-0 py-3 d-flex align-items-center" style="background-color:#F1F1F1 !important;">
        <div>
            <h3 class="card-title mb-0">¿PARTICIPA EN LA TOMA DE DECISIONES DE ALGUNA DE ESTAS INSTITUCIONES?</h3>
            <br>
                <h6 class="card-subtitle">(Hasta los últimos dos años)</h6>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="card">

                    </div>

                    <!-- Cuerpo del documento -->
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead class="text-center text-light">
                            <tr>
                                <th scope="col" width="20%">Títular</th>
                                <th scope="col" width="20%">Tipo de institución </th>
                                <th scope="col" width="40%">Información adicional</th>
                                <th scope="col" width="20%">Acciones</th></tr>
                            </thead>
                            <tbody class="text-center">
                            @if($participaciones)
                                @foreach($participaciones as $participaciones)

                                    <tr>
                                        <td>
                                            <center>{{$participaciones->tipoRelaciones->valor}}</center>
                                        </td>
                                        <td>
                                            <center>{{$participaciones->tipoInstituciones->valor}}</center>
                                        </td>
                                        <td>
                                            <center>
                                                <strong>Nombre institucion:</strong> {{$participaciones->nombre_institucion}} <br>
                                                <strong>Puesto / rol:</strong> {{$participaciones->puesto_rol}}<br>
                                                <strong>Monto mensual neto:</strong>{{$participaciones->monto_mensual}}
                                            </center>
                                        </td>
                                        <td class="all">
                                            {!! Form::open(['action' => ['ParticipaDecisionController@destroy', $participaciones->id], 'method'=>'DELETE']) !!}
                                            <div style="display: inline-block;">
                                                <a href="{{route('participacion.edit',[$participaciones])}}" class="btn btn-xs btn-warning">
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
                                            Para adicionar información pulse:<a class="btn btn-submit btn-sm text-light" href="{{route('participacion.create')}}">Agregar</a>                                            , de lo contrario vaya a la siguiente sección.
                                        </center>
                                        <br>
                                        <center>
                                            <a class="btn btn-sm btn-submit text-light">Ir a la sección anterior</a>
                                            <a class="btn btn-sm btn-submit text-light">Ir a la siguiente sección</a>
                                        </center>
                                        </div>
                                        </div>
                                        </div>


                                        @endsection
