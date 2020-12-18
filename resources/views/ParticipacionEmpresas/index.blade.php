@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header bg-info  border-0 py-3 d-flex align-items-center" style="background-color:#F1F1F1 !important;">
            <div>

                <h4>PARTICIPACIÓN EN EMPRESAS, SOCIEDADES O ASOCIACIONES</h4>
                <h6 class="card-subtitle">(HASTA LOS ÚLTIMOS DOS AÑOS)</h6>

            </div>
        </div>

        <div class="card-body">
            @if(count($empresas))
            <div class="table-responsive-lg">
                <table class="table table-active table-striped">
                    <thead class="badge-primary">
                        <tr class="text-center">
                            <th scope="col" width="20%">Nombre de la empresa</th>
                            <th scope="col" width="20%">Titular</th>
                            <th scope="col" width="40%">Información adicional</th>
                            <th scope="col" width="20%">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($empresas as $empresa)
                        <tr class="text-center">
                            <th scope="col" width="20%">{{$empresa->nombre_empresa}}</th>
                            <th scope="col" width="20%">{{$empresa->tipotitularParticipaciones->valor}}</th>
                            <th scope="col" width="40%">
                    <center>
                        <strong>Tipo de participación: </strong> {{$empresa->tipoParticipacion->valor}} <br>
                        <strong>Sector: </strong> {{$empresa->tipoSector->valor}} <br>
                        <strong>Lugar donde se ubica: </strong> {{$empresa->lugarUbica->valor}}
                    </center>
                    </th>
                    <td class="all">
                        {!! Form::open(['action' => ['ParticipacionEnEmpresasSociedadesYAsociacionesController@destroy', $empresa->id], 'method'=>'DELETE']) !!}
                        <div style="display: inline-block;">
                            <a href="{{route('participacion_empresas.edit',[$empresa])}}" class="btn btn-xs btn-warning">
                                <i class="ion ion-edit"></i>
                            </a>
                            <button class="btn btn-xs btn-danger btn-borrar">
                                <i class="ion ion-trash-a"></i>
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
                            href="{{route('participacion_empresas.create')}}"
                            class="btn btn-sm btn-secondary">Agregar</a> , de lo contrario vaya al siguiente
                        apartado.</strong>
                </center>
            </div>
            @else
            <span style="text-align: left !important;">El comodato es un préstamo de uso, en el que una de las partes entrega a otra gratuitamente algún bien mueble o inmueble, para que haga uso de ello, y esta tiene cargo de restituir el mismo bien después de terminado el uso.<br>
                Deberá proporcionar la información de CADA UNO de los bienes en préstamo o comodato por terceros, que a la fecha de ingreso al cargo tenga el Declarante.</span>
            <br>
            <div class="alert alert-danger text-center" role="alert">
                <label style="margin-top:10px;">
                    <strong>Para registrar información pulse: </strong><a href="{{route('participacion_empresas.create')}}" class="btn btn-sm btn-secondary ">Agregar</a><br><br>
                    <strong>Si no tiene participación en empresas, sociedades o asociaciones, seleccione: <a href="{{route('participacion_empresas.create')}}" class="btn btn-sm btn-secondary">Ninguno</a></strong>
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


        @section('scripts')
        <script>
            $('.btn-borrar').on('click', function (e) {
                let that = this;
                console.log('boton clic');
                e.preventDefault();
                Swal.fire({
                    title: '¿Está seguro?',
                    text: 'Al oprimir el botón de aceptar se eliminará el registro',
                    icon: 'warning',
                    showCancelButton: true,
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $(that).closest('form').submit();
                    }
                });
                return false;
            });
        </script>
        @endsection
