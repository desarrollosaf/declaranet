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
                                <th scope="col" width="50%">INFORMACIÓN ADICIONAL</th>
                                <th scope="col" width="20%">TIPO OPERACIÓN</th>
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
                                    <td> {{$item->tipoOperaciones->valor}} </td>
                                    <td class="py-2">
                                        @if( $item->tipo_operacion_id != 4)
                                            <input type="hidden" name="motivo_baja" id="motivo_baja">
                                            <div style="display: inline-block;">
                                                <a href="{{route('prestamos.edit',[$item->id])}}" class="btn btn-xs btn-warning">
                                                    <i class="ion ion-edit"></i>
                                                </a>
                                                <button class="btn btn-xs btn-danger" onclick="eliminar({{$item->id}},{{$item->enviado}})">
                                                    <i class="ion ion-trash-a"></i>
                                                </button>
                                            </div>
                                        @endif
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
                            <strong>Para registrar información pulse: </strong><a href="{{route('prestamos.create')}}" class="btn btn-sm btn-secondary btn-sm ">Agregar</a>
                            <br>
                            <br>
                            <div class="mt-2">
                                <strong>Si no tiene adeudos, seleccione</strong> <a href="{{route('participacion_empresas.index')}}" class="btn btn-ninguno btn-sm btn-secondary">Ninguno</a></strong>
                            </div>
                        </label>
                    </div>
                @endif

                <div class="text-center">
                    <br>
                    <a href="{{route("adeudos.index")}}" class="btn btn-sm btn-submit text-light">Ir a la sección anterior</a>
                    <a href="{{route("participacion_empresas.index")}}" class="btn btn-sm btn-submit text-light">Ir a la siguiente sección</a>
                </div>
            </div>
            <div class="modal" tabindex="-1" role="dialog" id="modal_baja">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Baja</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        {!! Form::open(['action' => ['PrestamoOComodatoPorTercerosController@destroy', 1], 'method'=>'DELETE','id' => 'frmBorrar']) !!}
                        <input name="id" type="hidden" id='id'>
                        <div class="modal-body">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <strong>Motivo de baja: *</strong>
                                    {!! Form::select('motivo_bajas_id',$baja, [] ,['class'=>'form-control text-uppercase','placeholder' => 'SELECCIONA UNA OPCIÓN' ,'id' => 'motivo_bajas_id','required' => true]) !!}
                                    <span class="text-danger" style="font-size:150%"></span>
                                </div>
                                <div class="form-group col-md-12">
                                    <strong>Especifique: </strong>
                                    {!! Form::text('motivo_baja',null,['class'=>'form-control text-uppercase','placeholder' => 'P. EJ. ROBO' ,'id' => 'motivo_baja_esp', 'disabled' => true]) !!}
                                    <span class="text-danger" style="font-size:150%"></span>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-sm btn-submit text-light">Dar de baja</button>
                            <a class="btn btn-secondary  btn-sm text-light" data-dismiss="modal">Cerrar</a>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>

        </div>

        @endsection
        @section('scripts')
            <script>
                function eliminar(id,enviada){
                    let that = this;
                    console.log('boton clic');
                    if(enviada){
                        $("#id").val(id);
                        $("#modal_baja").modal("show");
                    }else{
                        Swal.fire({
                            title: '¿Está seguro?',
                            text: 'Al oprimir el botón de aceptar se eliminará el registro',
                            icon: 'warning',
                            showCancelButton: true,
                            cancelButtonText: 'Cancelar'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                $("#frmBorrar").submit();
                            }
                        });
                    }
                }

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
                                text: 'No se registró información en este apartado. Si desea registrar Prestados del Declarante pulse: Agregar, de lo contrario vaya al siguiente apartado.',
                                icon: 'warning',
                                cancelButtonText: 'Aceptar'
                            });
                        }
                    });
                });

                $("#motivo_bajas_id").on("change", function () {
                    var motivo_bajas_id = document.getElementById("motivo_bajas_id").value
                    if (motivo_bajas_id == 4){
                        $("#motivo_baja_esp").prop("disabled", false);
                        $("#motivo_baja_esp").prop("required", true);
                    } else {
                        $("#motivo_baja_esp").prop("disabled", true);
                        $("#motivo_baja_esp").val("");
                        $("#motivo_baja_esp").prop("required", false);
                    }
                });
            </script>
            </script>
@endsection
