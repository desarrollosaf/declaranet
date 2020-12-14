@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
    <div class="card-header bg-info  border-0 py-3 d-flex align-items-center" style="background-color:#F1F1F1 !important;">
        <div>
            <h4>¿PARTICIPA EN LA TOMA DE DECISIONES DE ALGUNA DE ESTAS INSTITUCIONES?</h4>
            <h6 class="card-subtitle">(HASTA LOS DOS ÚLTIMOS AÑOS)</h6>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="card">

                    </div>

                    <!-- Cuerpo del documento -->





                <div class="card-body">
                    @if(count($participaciones))
                        <div class="table-responsive-lg">
                            <table class="table table-active table-striped">
                                <thead class="badge-primary">
                                <tr class="text-center">
                                    <th scope="col" width="20%">Títular</th>
                                    <th scope="col" width="20%">Tipo de institución </th>
                                    <th scope="col" width="40%">Información adicional</th>
                                    <th scope="col" width="20%">Acciones</th></tr>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($participaciones as $participaciones)
                                    <tr class="text-center">
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
                                </tbody>
                            </table>
                            <center>
                                <strong>Si desea registrar algún Préstamo o Comodato por Terceros pulse: <a
                                        href="{{route('participacion.create')}}"
                                        class="btn btn-sm btn-secondary">Agregar</a> , de lo contrario vaya al siguiente
                                    apartado.</strong>
                            </center>
                        </div>
                    @else

                        <div class="alert alert-danger text-center" role="alert">
                            <label style="margin-top:10px;">
                                <strong>Para registrar información pulse: </strong><a
                                    href="{{route('participacion.create')}}"
                                    class="btn btn-sm btn-secondary ">Agregar</a><br>
                                <strong>Si no participa en la toma de decisiones de insituciiones <a href="{{route('prestamos.create')}}" class="btn btn-sm btn-secondary">Ninguno</a></strong>
                            </label>
                        </div>



                    @endif


                    <div class="text-center">
                        <br>
                        <a href="{{route("servidor_publico.index")}}" class="btn btn-sm btn-submit text-light">Ir a la
                            sección
                            anterior</a>
                        <a href="{{route("inversiones.index")}}" class="btn btn-sm btn-submit text-light">Ir a la
                            siguiente sección</a>
                    </div>
                </div>










































                                        </div>
                                        </div>


                                        @endsection
