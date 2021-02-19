@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <h3>CLIENTES PRINCIPALES</h3>
                <h6 class="card-subtitle">(HASTA LOS DOS ÚLTIMOS AÑOS)</h6>
            </div>
            <div class="card-body">
                @if(count($clientes))
                    <div class="table-responsive-lg">
                        <table class="table table-active table-striped">
                            <thead class="badge-primary">
                            <tr class="text-center">
                                <th scope="col" width="20%">TÍTULAR</th>
                                <th scope="col" width="20%">NOMBRE</th>
                                <th scope="col" width="40%">INFORMACIÓN ADICIONAL</th>
                                <th scope="col" width="20%">ACCIONES</th></tr>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($clientes as $cliente)
                                @if($cliente->respuestas_id == '1')
                                <tr class="text-center">
                                    <td>
                                        <center>{{strtoupper($cliente->tipoRelaciones->valor)}}</center>
                                    </td>
                                    <td>
                                        <center>{{strtoupper($cliente->nombre_empresa)}}</center>
                                    </td>
                                    <td>
                                        <center>
                                            <strong>NOMBRE DEL CLIENTE: </strong> {{strtoupper($cliente->nombre_cliente)}} {{strtoupper($cliente->nombre_cliente_moral)}} <br>
                                            <strong>SECTOR: </strong>{{strtoupper($cliente->sectores->valor)}} <br>
                                            <strong>MONTO APROXIMADO:</strong>{{strtoupper($cliente->monto_beneficio)}}
                                        </center>
                                    </td>
                                    <td class="all">
                                        {!! Form::open(['action' => ['ClientesPrincipalesController@destroy', $cliente->id], 'method'=>'DELETE']) !!}
                                        <div style="display: inline-block;">
                                            <a href="{{route('clientes_principales.edit',[$cliente])}}" class="btn btn-xs btn-warning"><i class="ion ion-edit"></i></a>
                                            <button class="btn btn-xs btn-danger btn-borrar"><i class="ion ion-trash-a btn-borrar"></i></button>
                                        </div>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @else
                                    <tr class="text-center">
                                        <td colspan="3">
                                            <center> NO REALIZA ACTIVIDAD LUCRATIVA INDEPENDIENTE AL EMPLEO </center>
                                        </td>

                                        <td class="all">
                                            {!! Form::open(['action' => ['ClientesPrincipalesController@destroy', $cliente->id], 'method'=>'DELETE']) !!}
                                            <div style="display: inline-block;">
                                                <a href="{{route('clientes_principales.edit',[$cliente])}}" class="btn btn-xs btn-warning"><i class="ion ion-edit"></i></a>
                                                <button class="btn btn-xs btn-danger btn-borrar"><i class="ion ion-trash-a btn-borrar"></i></button>

                                            </div>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                        <center>
                            <strong>Para adicionar información pulse: <a href="{{route('clientes_principales.create')}}" class="btn btn-sm btn-secondary">Agregar</a> , de lo contrario vaya al siguiente apartado.</strong>
                        </center>
                    </div>
                @else
                    Cuando el Declarante, pareja y/o dependientes económicos sea propietario de alguna empresa, negocio o actividad lucrativa, deberá señalar a sus clientes principales, siempre y cuando el beneficio o ganancia directa supere mensualmente 250 Unidades de Medida y Actualización (UMA), refiriéndose al valor diario de ésta la cual consta de 22,405(veinti dos mil cuatroscientos cinco).
                    <div class="alert alert-danger text-center" role="alert">
                        <div>
                            <strong>Para registrar información  de clientes principales pulse: </strong><a href="{{route('clientes_principales.create')}}" class="btn btn-sm btn-secondary">Agregar</a><br>
                        </div>
                        <br>
                        <div class="mt-2">
                            <strong>Si no tiene clientes principales, seleccione <a href="{{route('beneficios_privados.index')}}" class="btn btn-ninguno btn-sm btn-secondary">Ninguno</a></strong>                        </div>
                    </div>



                @endif


                <div class="text-center">
                    <br>
                    <a href="{{route("representacion.index")}}" class="btn btn-sm btn-submit text-light">Ir a la sección anterior</a>
                    <a href="{{route("beneficios_privados.index")}}" class="btn btn-sm btn-submit text-light">Ir a la siguiente sección</a>
                </div>
            </div>
            <div></div>
@endsection

@section('scripts')
    <script>
        $('.btn-ninguno').on('click', function (e) {
            let that = this;
            e.preventDefault();
            Swal.fire({
                title: '¿Esta seguro que no desea registrar la información solicitada en este apartado?',
                icon: 'warning',
                showCancelButton: true,
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed){
                    Swal.fire({
                        text: 'No se registró información en este apartado. Si desea registrar clientes principales pulse: Agregar, de lo contrario vaya al siguiente apartado.',
                        icon: 'warning',
                        cancelButtonText: 'Aceptar'
                    });
                }
            });
        });
    </script>
@endsection

