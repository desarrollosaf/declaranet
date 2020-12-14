@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <h4>CLIENTES PRINCIPALES</h4>
                <h6 class="card-subtitle">(HASTA LOS DOS ÚLTIMOS AÑOS)</h6>

            </div>





            <div class="card-body">
                @if(count($clientes))
                    <div class="table-responsive-lg">
                        <table class="table table-active table-striped">
                            <thead class="badge-primary">
                            <tr class="text-center">
                                <th scope="col" width="20%">Títular</th>
                                <th scope="col" width="20%">Nombre</th>
                                <th scope="col" width="40%">Información adicional</th>
                                <th scope="col" width="20%">Acciones</th></tr>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($clientes as $cliente)
                                <tr class="text-center">
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
                            </tbody>
                        </table>
                        <center>
                            <strong>Para adicionar información pulse: <a
                                    href="{{route('clientes_principales.create')}}"
                                    class="btn btn-sm btn-secondary">Agregar</a> , de lo contrario vaya al siguiente
                                apartado.</strong>
                        </center>
                    </div>
                @else
                    Cuando el Declarante, pareja y/o dependientes económicos sea propietario de alguna empresa, negocio o actividad lucrativa, deberá señalar a sus clientes principales, siempre y cuando el beneficio o ganancia directa supere mensualmente 250 Unidades de Medida y Actualización (UMA), refiriéndose al valor diario de ésta.

                    <div class="alert alert-danger text-center" role="alert">
                        <label style="margin-top:10px;">
                            <strong>Para registrar información pulse: </strong><a
                                href="{{route('clientes_principales.create')}}"
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









































@endsection
