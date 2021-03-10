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
                            <th scope="col" width="20%">INFORMACIÓN ADICIONAL</th>
                            <th scope="col" width="20%">TIPO DE OPERACIÓN</th>
                            <th scope="col" width="20%">ACCIONES</th>
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
                    <td>
                    <center>{{$cliente->tipoOperacion->valor}}</center>
                    </td>
                    <td class="all">
                        <!--{!! Form::open(['action' => ['ClientesPrincipalesController@destroy', $cliente->id], 'method'=>'DELETE']) !!}-->
                        @if($cliente->tipo_operacion_id != 4)
                        <div style="display: inline-block;">
                            <a href="{{route('clientes_principales.edit',[$cliente])}}" class="btn btn-xs btn-warning">
                                <i class="ion ion-edit"></i>
                            </a>
                            <button class="btn btn-xs btn-danger" onclick="eliminar({{$cliente->id}},{{$cliente->enviado}})">
                                <i class="ion ion-trash-a"></i>
                            </button>
                        </div>
                        @endif
                    </td>
                    </tr>
                    @else
                    <tr class="text-center">
                        <td colspan="3">
                    <center> NO REALIZA ACTIVIDAD LUCRATIVA INDEPENDIENTE AL EMPLEO </center>
                    </td>
                    <td>
                    <center>{{$cliente->tipoOperacion->valor}}</center>
                    </td>

                    <td class="all">
                        <!--{!! Form::open(['action' => ['ClientesPrincipalesController@destroy', $cliente->id], 'method'=>'DELETE']) !!}-->
                        @if($cliente->tipo_operacion_id != 4)
                        <div style="display: inline-block;">
                            <a href="{{route('clientes_principales.edit',[$cliente])}}" class="btn btn-xs btn-warning">
                                <i class="ion ion-edit"></i>
                            </a>
                            <button class="btn btn-xs btn-danger" onclick="eliminar({{$cliente->id}},{{$cliente->enviado}})">
                                <i class="ion ion-trash-a"></i>
                            </button>
                        </div>
                        @endif
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
                    <strong>Si no tiene clientes principales, seleccione <a href="{{route('beneficios_privados.index')}}" class="btn btn-ninguno btn-sm btn-secondary">Ninguno</a></strong>
                </div>
            </div>



            @endif


            <div class="text-center">
                <br>
                <a href="{{route("representacion.index")}}" class="btn btn-sm btn-submit text-light">Ir a la sección anterior</a>
                <a href="{{route("beneficios_privados.index")}}" class="btn btn-sm btn-submit text-light">Ir a la siguiente sección</a>
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
                    {!! Form::open(['action' => ['ClientesPrincipalesController@destroy', 1], 'method'=>'DELETE','id' => 'frmBorrar']) !!}
                    <input name="id" type="hidden" id='id'>
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <strong>Motivo de baja</strong>
                                {!! Form::select('motivo_baja_id',$motivos, [] ,['class'=>'form-control text-uppercase','placeholder' => 'SELECCIONA UNA OPCIÓN' ,'id' => 'motivo_baja_id','required' => true]) !!}
                                <span class="text-danger" style="font-size:150%"></span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-sm btn-submit text-light">Eliminar</button>
                        <a class="btn btn-secondary" data-dismiss="modal">Close</a>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        @endsection

        @section('scripts')
        <script>
            
            $(document).ready(function () {
            $("#nivel").on("change", function () {
                var nivel = $('#nivel option:selected').html();
                if (nivel == "PRIMARIA" || nivel == "SECUNDARIA") {
                    $("#carrera").prop("disabled", true);
                } else {
                    $("#carrera").prop("disabled", false);
                }
            });
        });
        function eliminar(id,enviada){
            $("#id").val(id);
            if(enviada){
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
            
            $('.btn-ninguno').on('click', function (e) {
            let that = this;
            e.preventDefault();
            Swal.fire({
            title: '¿Esta seguro que no desea registrar la información solicitada en este apartado?',
                    icon: 'warning',
                    showCancelButton: true,
                    cancelButtonText: 'Cancelar'
            }).then((result) => {
            if (result.isConfirmed) {
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

