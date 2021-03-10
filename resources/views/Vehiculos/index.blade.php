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
                                <tr class="tglext-center">
                                    <th scope="col" width="20%">TIPO VEHÚCILO</th>
                                    <th scope="col" width="10%">TITULAR</th>
                                    <th scope="col" width="40%">INFORMACIÓN ADICIONAL</th>
                                    <th scope="col" width="20%">TIPO OPERACIÓN</th>
                                    <th scope="col" width="10%">ACCIONES</th></tr>


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
                                                <strong>FORMA DE AQUISICIÓN:</strong> {{$vehiculo->tipoAdquisicion->valor}} <br>
                                                <strong>FORMA DE PAGO:</strong>@if($vehiculo->pago_id == null)NO APLICA
                                                @else{{$vehiculo->pago->valor}} @endif<br>
                                                <strong>VALOR DE ADQUISICIÓN:</strong>@if($vehiculo->pago_id == null)NO APLICA
                                                @else{{$vehiculo->v_valor}} @endif<br>
                                            </center>
                                        </td>
                                        <td>
                                            <center>{{$vehiculo->tipoOperaciones->valor}}</center>
                                        </td>
                                        <td class="all text-center">
                                            @if( $vehiculo->tipo_operaciones_id != 4)
                                            <input type="hidden" name="motivo_baja" id="motivo_baja">
                                                <div style="display: inline-block;">
                                                    <a href="{{route('vehiculos.edit',[$vehiculo])}}" class="btn btn-xs btn-warning">
                                                        <i class="ion ion-edit"></i>
                                                    </a>
                                                    <button class="btn btn-xs btn-danger" onclick="eliminar({{$vehiculo->id}},{{$vehiculo->enviado}})">
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
                                <strong>Si desea registrar algún Dato de Vehiculo pulse: <a
                                        href="{{route('vehiculos.create')}}"
                                        class="btn btn-sm btn-secondary">Agregar</a> , de lo contrario vaya al siguiente
                                    apartado.</strong>
                            </center>
                        </div>
                    @else
                    <span style="text-align: justify !important;"><strong>Deberá proporcionar la información de CADA UNO de los vehículos, que a la fecha de ingreso al cargo sean propiedad del Declarante, así como los de su pareja y/o dependientes económicos.</strong></span>
                        <br>
                        <div class="alert alert-danger text-center" role="alert">
                            <div>
                                <strong>Para registrar información de vehículos pulse: </strong><a href="{{route('vehiculos.create')}}" class="btn btn-sm btn-secondary">Agregar</a><br>
                            </div>
                            <br>
                            <div class="mt-2">
                                <strong>Si no tiene vehículos, seleccione </strong><a href="{{route('bienes_muebles.index')}}" class="btn btn-ninguno btn-sm btn-secondary">Ninguno</a>
                            </div>
                        </div>
                    @endif


                <div class="text-center">
                    <br>
                    <a href="{{route("bienes_inmuebles.index")}}" class="btn btn-sm btn-submit text-light">Ir a la sección anterior</a>
                    <a href="{{route("bienes_muebles.index")}}" class="btn btn-sm btn-submit text-light">Ir a la siguiente sección</a>
                </div>
            </div>
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
                {!! Form::open(['action' => ['VehiculosController@destroy', 1], 'method'=>'DELETE','id' => 'frmBorrar']) !!}
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
@endsection

@section('scripts')
    <script type="text/javascript">
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
            e.preventDefault();
            let that = this;
            console.log('boton clic');
            Swal.fire({
                title: '¿Está seguro?',
                text: 'describe el motivo de la baja',
                input: 'text',
                inputAttributes: {
                    autocapitalize: 'off'
                },
                showCancelButton: true,
                confirmButtonText: 'Aceptar',
                showCancelButton: true,
                cancelButtonText: 'Cancelar',
            }).then((result) => {
                if (result.isConfirmed) {
                    console.log(result.value);
                    $("#motivo_baja").val(result.value);
                    $(that).closest('form').submit();
                }
            });
            return false;
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
                        text: 'No se registró información en este apartado. Si desea registrar Vehiculos del Declarante pulse: Agregar, de lo contrario vaya al siguiente apartado.',
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
@endsection


