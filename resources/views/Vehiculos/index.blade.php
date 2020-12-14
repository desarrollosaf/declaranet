@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <h3>VEHÍCULOS</h3>
                <h6 class="card-subtitle">(A LA FECHA DE INGRESO)</h6>
            </div>

            <div class="card-body">
                    @if(count($vehiculos))
                        <div class="table-responsive-lg">
                            <table class="table table-active table-striped">
                                <thead class="badge-primary">
                                <tr class="text-center">
                                    <th scope="col" width="20%">Tipo Vehículo</th>
                                    <th scope="col" width="20%">Titular</th>
                                    <th scope="col" width="40%">Información adicional</th>
                                    <th scope="col" width="20%">Acciones</th></tr>


                                </tr>
                                </thead>
                                <tbody>
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
                                        <td class="all text-center">
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
                                </tbody>
                            </table>
                            <center>
                                <strong>Si desea registrar algún Dato de Vehiculo pulse: <a
                                        href="{{route('vehiculos.create')}}"
                                        class="btn btn-sm btn-secondary">Agregar</a> , de lo contrario vaya al siguiente
                                    apartado.</strong>
                            </center>
                        </div>
                    @else
                    <span style="text-align: left !important;"><strong>Deberá proporcionar la información de CADA UNO de los vehículos, que a la fecha de ingreso al cargo sean propiedad del Declarante, así como los de su pareja y/o dependientes económicos.</strong></span>
                        <br>
                        <div class="alert alert-danger text-center" role="alert">
                            <label style="margin-top:10px;">
                                <strong>Para registrar información pulse: </strong><a
                                    href="{{route('vehiculos.create')}}"
                                    class="btn btn-sm btn-secondary ">Agregar</a><br><br>
                                <strong>Si no tiene vehículos, seleccione <a href="{{route('vehiculos.create')}}" class="btn btn-ninguno btn-secondary">Ninguno</a></strong>
                            </label>
                        </div>
                    @endif


                <div class="text-center">
                    <br>
                    <a href="{{route("bienes_inmuebles.index")}}" class="btn btn-sm btn-submit text-light">Ir a la
                        sección
                        anterior</a>
                    <a href="{{route("bienes_muebles.index")}}" class="btn btn-sm btn-submit text-light">Ir a la
                        siguiente sección</a>
                </div>
            </div>
        </div>
    </div>
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
                        text: 'No se registró información en este apartado. Si desea registrar Vehiculos del Declarante pulse: Agregar, de lo contrario vaya al siguiente apartado.',
                        icon: 'warning',
                        cancelButtonText: 'Aceptar'
                    });
                }
            });
        });
    </script>
@endsection


