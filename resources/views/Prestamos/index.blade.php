@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header bg-info  border-0 py-3 d-flex align-items-center"
             style="background-color:#F1F1F1 !important;">
            <div>
                <h3 class="card-title mb-0">PRÉSTAMO O COMODATO POR TERCEROS</h3>
                <br>
                <h6 class="card-subtitle">(A la fecha de ingreso)</h6>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead class='text-light'>
                <tr>
                    <th scope="col" width="20%">Tipo de bien</th>
                    <th scope="col" width="60%">Información Adicional</th>
                    <th scope="col" width="10%">Editar</th>
                    <th scope="col" width="10%">Eliminar</th>
                </tr>
                </thead>
                <tbody>
                @if(($prestamos != null))
                    @foreach($prestamos as $item)
                        <tr>
                            <td>{{$item->tipoBien->valor}}</td>
                            @if($item->tipo_bien_id == 2)
                                <td>
                                    <p><strong>Calle: </strong>{{$item->inmuebles->domicilio->calle}}</p>
                                    <p><strong>Número interior: </strong>{{$item->inmuebles->domicilio->num_int}}</p>
                                    <p><strong>Número exterior: </strong>{{$item->inmuebles->domicilio->num_ext}}</p>
                                    <p><strong>Colonia / localidad: </strong>{{$item->inmuebles->domicilio->colonia}}
                                    </p>
                                    @if($item->inmuebles->domicilio->entidad_id != null)
                                        <p><strong>
                                                Entidad
                                                Federativa: </strong>{{$item->inmuebles->domicilio->entidad_domicilio->entidad}}
                                        </p>
                                        <p><strong>Municipio /
                                                Alcaldia:</strong>{{$item->inmuebles->domicilio->municipio_domicilio->municipio}}
                                        </p>
                                    @else
                                        <p><strong>Pais: </strong>{{$item->inmuebles->domicilio->pais_domicilio->valor}}
                                        </p>
                                        <p><strong>Estado / Provincia: </strong>{{$item->inmuebles->domicilio->entidad}}
                                        </p>
                                        <p><strong>Colonia /
                                                localidad: </strong>{{$item->inmuebles->domicilio->colonia}}
                                        </p>
                                    @endif
                                </td>
                            @else
                                <td class="py-2">
                                    <p><strong>Marca: </strong>{{$item->vehiculos->v_marca}}</p>
                                    <p><strong>Modelo: </strong>{{$item->vehiculos->v_modelo}}</p>
                                    <p><strong>Año: </strong>{{$item->vehiculos->v_ano}}</p>
                                    <p><strong>Número de serie: </strong>{{$item->vehiculos->v_num_serie}}</p>
                                </td>

                            @endif
                            <td class="py-2"><a href="{{route("prestamos.edit",$item->id)}}"
                                                class="btn btn-warning btn-sm ion ion-edit"></a></td>
                            <td class="py-2">
                                {!! Form::open(['action' => ['PrestamoOComodatoPorTercerosController@destroy', $item->id], 'method'=>'DELETE']) !!}
                                <div style="display: inline-block;">
                                    <button class="btn btn-danger btn-sm ion ion-android-delete btn-borrar"></button>
                                </div>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4"><h3 class="text-center">No sé encotraron registros aún</h3></td>
                    </tr>
                @endif
                </tbody>
            </table>
            <div class='text-center'>
                <strong>Si desea registrar algún Préstamo o Comodato por Terceros pulse </strong>
                <a href="{{route("prestamos.create")}}" class="btn btn-sm btn-secondary">Agregar</a>
                <strong>, de lo contrario vaya al siguiente apartado.</strong></label>
            </div>
        </div>
    </div>
    <center>
        <br>
        <a href="dsp_adeudos_pasivos_buscar.php" class="btn btn-secondary"> <small>Ir a la sección anterior</small></a>
        <a href="#" class="btn btn-secondary"> <small>Entregar</small></a>
    </center>
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
