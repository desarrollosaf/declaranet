@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <h3>BENEFICIOS PRIVADOS</h3>
            <h6 class="card-subtitle">(HASTA LOS DOS ÚLTIMOS AÑOS)</h6>
        </div>
        <div class="card-body">
            @if(count($beneficios))
                <div class="table-responsive-lg">
                    <table class="table table-active table-striped">
                        <thead class="badge-primary">
                        <tr class="text-center">
                            <th scope="col" width="20%">TIPO DE BENEFICIO</th>
                            <th scope="col" width="20%">BENEFICIARIO</th>
                            <th scope="col" width="40%">INFORMACIÓN ADICIONAL</th>
                            <th scope="col" width="20%">ACCIONES</th></tr>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($beneficios as $beneficio)
                            <tr>
                                <td align="center">{{$beneficio->tipoBeneficio->valor}}</td>
                                <td align="center">{{$beneficio->beneficiariosP->valor}}</td>
                                <td>
                                    <center>
                                        <strong>SECTOR: </strong> {{strtoupper($beneficio->sectoresP->valor)}} <br>
                                        <strong>NOMBRE DEL OTORGANTE:</strong> {{strtoupper($beneficio->nombre_otorgante)}} {{strtoupper($beneficio->razon_social_otorgante)}}<br>
                                        <strong>FORMA DE RECEPCIÓN:</strong> {{strtoupper($beneficio->formaRecepcion->valor)}}
                                    </center>
                                </td>
                                <td class="all">
                                    {!! Form::open(['action' => ['BeneficiosPrivadosController@destroy', $beneficio->id], 'method'=>'DELETE']) !!}
                                    <div style="display: inline-block;">
                                        <a href="{{route('beneficios_privados.edit',[$beneficio])}}" class="btn btn-xs btn-warning"><i class="ion ion-edit"></i></a>
                                        <button class="btn btn-xs btn-danger btn-borrar"><i class="ion ion-trash-a btn-borrar"></i></button>
                                    </div>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <center>
                        <strong>Para adicionar información pulse: <a href="{{route('beneficios_privados.create')}}" class="btn btn-sm btn-secondary">Agregar</a> , de lo contrario vaya al siguiente apartado.</strong>
                    </center>
                </div>
            @else
                Es la contribución monetaria o en especie que otorga una persona física o moral con recursos privados, al Declarante, pareja y/o dependientes económicos.
                <br>Deberá señalar la información de CADA BENEFICIO PRIVADO recibido por el Declarante, pareja y/o dependientes económicos.
                <div class="alert alert-danger text-center" role="alert">
                    <div>
                        <strong>Para registrar información de beneficios privados pulse: </strong><a href="{{route('beneficios_privados.create')}}" class="btn btn-sm btn-secondary ">Agregar</a><br>
                    </div>
                    <br>
                   
                    <div class="mt-2">
                        <strong>Si no recibe beneficios privados, seleccione <a href="{{route('fideicomisos.index')}}" class="btn btn-ninguno btn-sm btn-secondary ">Ninguno</a></strong>
                    </div>
                </div>

            @endif

            <div class="text-center">
                <br>
                <a href="{{route("clientes_principales.index")}}" class="btn btn-sm btn-submit text-light">Ir a la sección anterior</a>
                <a href="{{route("fideicomisos.index")}}" class="btn btn-sm btn-submit text-light">Ir a la siguiente sección</a>
            </div>
        </div>
    </div>
@endsection
    @section('scripts')
        <script>
            $('.btn-borrar').on('click', function (e) {
                let that = this;
                e.preventDefault();
                Swal.fire({
                    title: '¿Está seguro?',
                    text: 'Al oprimir el botón de aceptar se eliminará el registro',
                    icon: 'warning',
                    showCancelButton: true,
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed){
                        $(that).closest('form').submit();
                    }
                });
            });

            $('.btn-ninguno').on('click', function (e) {
                let that = this;
                e.preventDefault();
                Swal.fire({
                    title: '¿Está seguro que no desea registrar la información solicitada en este apartado?',
                    icon: 'warning',
                    showCancelButton: true,
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed){
                        Swal.fire({
                            text: 'No se registró información en este apartado. Si desea registrar Beneficios Privados del Declarante pulse: Agregar, de lo contrario vaya al siguiente apartado.',
                            icon: 'warning',
                            cancelButtonText: 'Aceptar'
                        });
                    }
                });
            });
        </script>
@endsection
    @section('scripts')
        <script>
            $('.btn-borrar').on('click', function (e) {
                let that = this;
                e.preventDefault();
                Swal.fire({
                    title: '¿Está seguro?',
                    text: 'Al oprimir el botón de aceptar se eliminará el registro',
                    icon: 'warning',
                    showCancelButton: true,
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed){
                        $(that).closest('form').submit();
                    }
                });
            });

            $('.btn-ninguno').on('click', function (e) {
                let that = this;
                e.preventDefault();
                Swal.fire({
                    title: '¿Está seguro que no desea registrar la información solicitada en este apartado?',
                    icon: 'warning',
                    showCancelButton: true,
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed){
                        Swal.fire({
                            text: 'No se registró información en este apartado. Si desea registrar Fideicomisos del Declarante pulse: Agregar, de lo contrario vaya al siguiente apartado.',
                            icon: 'warning',
                            cancelButtonText: 'Aceptar'
                        });
                    }
                });
            });
        </script>
@endsection
