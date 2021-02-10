@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header bg-info  border-0 py-3 d-flex align-items-center"
                 style="background-color:#F1F1F1 !important;">
                <div>
                    <h3>PRÉSTAMO O COMODATO POR TERCEROS</h3>
                    <h6 class="card-subtitle">(A LA FECHA DE INGRESO)</h6>
                </div>
            </div>


            <div class="card-body">
                @if(count($prestamos))
                    <div class="table-responsive-lg">
                        <table class="table table-active table-striped">
                            <thead class="badge-primary">
                            <tr class="text-center">
                                <th scope="col" width="20%">TIPO DE BIEN</th>
                                <th scope="col" width="60%">INFORMACIÓN ADICIONAL</th>
                                <th scope="col" width="10%">ACCIONES</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($prestamos as $item)
                                <tr class="text-center">
                                    <td>{{$item->tipoBien->valor}}</td>
                                    @if($item->tipo_bien_id == 2)
                                        <td>
                                            <strong>Calle: </strong>{{$item->inmuebles->domicilio->calle}}<br>
                                            <strong>Número interior: </strong>{{$item->inmuebles->domicilio->num_int}}
                                            <br>
                                            <strong>Número exterior: </strong>{{$item->inmuebles->domicilio->num_ext}}
                                            <br>
                                            <strong>Colonia /
                                                localidad: </strong>{{$item->inmuebles->domicilio->colonia}}<br>

                                            @if($item->inmuebles->domicilio->entidad_id != null)
                                                <strong>Entidad
                                                    Federativa: </strong>{{$item->inmuebles->domicilio->entidad_domicilio->entidad}}
                                                <br>
                                                <strong>Municipio /
                                                    Alcaldia:</strong>{{$item->inmuebles->domicilio->municipio_domicilio->municipio}}
                                                <br>
                                            @else
                                                <strong>Pais: </strong>{{$item->inmuebles->domicilio->pais}}
                                                <br>
                                                <strong>Estado /
                                                    Provincia: </strong>{{$item->inmuebles->domicilio->entidad}}<br>
                                                <strong>Colonia /
                                                    localidad: </strong>{{$item->inmuebles->domicilio->colonia}}<br>

                                            @endif
                                        </td>
                                    @else
                                        <td class="py-2">
                                            <strong>Marcas: </strong>{{$item->vehiculos->v_marca}}<br>
                                            <strong>Modelo: </strong>{{$item->vehiculos->v_modelo}}<br>
                                            <strong>Año: </strong>{{$item->vehiculos->v_ano}}<br>
                                            <strong>Número de serie: </strong>{{$item->vehiculos->v_num_serie}}<br>
                                        </td>

                                    @endif
                                    <td class="py-2">
                                        {!! Form::open(['action' => ['PrestamoOComodatoPorTercerosController@destroy', $item->id], 'method'=>'DELETE']) !!}
                                        <div style="display: inline-block;">
                                            <a href="{{route("prestamos.edit",$item->id)}}" class="btn btn-warning btn-sm ion ion-edit"></a></a>
                                            <button class="btn btn-xs btn-danger btn-borrar"><i class="ion ion-trash-a btn-borrar"></i></button>
                                        </div>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <center>
                            <strong>Si desea registrar algún Préstamo o Comodato por Terceros pulse: <a
                                    href="{{route('prestamos.create')}}"
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
                            <strong>Para registrar información pulse: </strong><a
                                href="{{route('prestamos.create')}}"
                                class="btn btn-sm btn-secondary btn-sm ">Agregar</a><br>
                            <div class="mt-2">
                                <strong>Si no tiene adeudos, seleccione</strong> <a
                                    href="{{route('participacion_empresas.index')}}"
                                    class="btn btn-sm btn-secondary">Ninguno</a></strong>
                            </div>
                        </label>
                    </div>
                @endif


                <div class="text-center">
                    <br>
                    <a href="{{route("adeudos.index")}}" class="btn btn-sm btn-submit text-light">Ir a la
                        sección
                        anterior</a>
                    <a href="{{route("participacion_empresas.index")}}" class="btn btn-sm btn-submit text-light">Ir a la
                        siguiente sección</a>
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
                        if (result.isConfirmed) {
                            $(that).closest('form').submit();
                        }
                    });
                });
            </script>
@endsection
