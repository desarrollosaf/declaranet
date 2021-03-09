@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <h3>BIENES MUEBLES</h3>
                <h6 class="card-subtitle">(A LA FECHA DE INGRESO)</h6>
            </div>
            <div class="card-body">
                @if(count($bienesMuebles))
                    <div class="table-responsive-lg">
                        <table class="table table-active table-striped text-uppercase">
                            <thead class="badge-primary">
                            <tr>
                                <th scope="col" align="center">TITULAR BIEN</th>
                                <th scope="col" align="center">DESCRIPCIÓN</th>
                                <th scope="col" align="center">TIPO OPERACIÓN</th>
                                <th scope="col" align="center">ACCIONES</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($bienesMuebles as $item)
                                <tr>
                                    <td align="center">{{$item->TitularBien->valor}}</td>
                                    @if($item->descripcion_bien)
                                        <td align="center">{{$item->descripcion_bien}}</td>
                                    @else
                                        <td align="center">{{$item->especifique}}</td>
                                    @endif
                                    <td align="center">{{$item->tipoOperaciones->valor}}</td>
                                    <td class="all" align="center">
                                        @if( $item->tipo_operacion_id != 4)
                                            <input type="hidden" name="motivo_baja" id="motivo_baja">
                                            <div style="display: inline-block;">
                                                <a href="{{route('bienes_muebles.edit',[$item->id])}}" class="btn btn-xs btn-warning">
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
                            <strong>Si desea registrar Bienes Muebles pulse: <a href="{{route('bienes_muebles.create')}}" class="btn btn-sm btn-secondary">Agregar</a> , de lo contrario vaya al siguiente apartado.</strong>
                        </center>
                    </div>
                @else
                    <p style="text-align : justify !important;"><strong>Se consideran bienes muebles lo
                            siguiente:</strong>
                    <ol type=”A”>
                        <li>Menaje de casa (muebles y accesorios de casa).<br> El cual será declarado solamente si es mayor a 1200 UMAS que nos da la cantidad de $107,544.00 MxN.(Ciento siete mil quinientos cuarenta y cuatro pesos mexicanos)</li>
                        <li>Aparatos electrónicos y electrodomésticos (PC, tableta electrónica, teléfono celular,
                            televisión, refrigerador, lavadora, etc.)
                        </li>
                        <li>Colecciones (libros, sellos, etc.)</li>
                        <li>Obras de arte</li>
                        <li>Otros (animales, antigüedades, etc.)</li>
                    </ol>

                    Deberá proporcionar la información de CADA UNO de los bienes muebles, que a la fecha de ingreso al
                    cargo sean propiedad del Declarante, así como los de su pareja y/o dependientes económicos.

                    </p>
                    <div class="alert alert-danger text-center btn-group-sm" role="alert">
                        <div>
                            <strong>Para registrar información de bienes muebles pulse: </strong><a href="{{route('bienes_muebles.create')}}" class="btn btn-sm btn-secondary text-light">Agregar</a>
                        </div>
                        <br>
                        <div class="mt-2">
                            <strong>Sí no tiene bienes muebles, seleccione<a href="{{route('inversiones.index')}}" class="btn btn-ninguno btn-sm btn-secondary text-light">Ninguno</a></strong>
                        </div>
                    </div>
                @endif
                <div class="text-center mt-2">
                    <a href="{{route("vehiculos.index")}}" class="btn btn-sm btn-submit text-light">Ir a la sección anterior</a>
                    <a href="{{route("inversiones.index")}}" class="btn btn-sm btn-submit text-light">Ir a la siguiente sección</a>
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
                    {!! Form::open(['action' => ['BienesMueblesController@destroy', $item->id], 'method'=>'DELETE','id' => 'frmBorrar']) !!}
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
                                text: 'No se registró información en este apartado. Si desea registrar Bienes Muebles del Declarante pulse: Agregar, de lo contrario vaya al siguiente apartado.',
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
