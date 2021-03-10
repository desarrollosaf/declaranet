@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <h3>ADEUDOS / PASIVOS</h3>
                <h6 class="card-subtitle">(A LA FECHA DE INGRESO)</h6>
            </div>

            <div class="card-body">
                @if(count($adeudos))
                    <div class="table-responsive-lg">
                        <table class="table table-active table-striped">
                            <thead class="badge-primary">
                            <tr class="text-center">
                                <th scope="col">TITULAR DEL ADEUDO</th>
                                <th scope="col">INFORMACIÓN ADICIONAL</th>
                                <th scope="col">TIPO OPERACIÓN</th>
                                <th scope="col">ACCIONES</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($adeudos as $adeudo)
                                <tr class="text-center">
                                    @if($adeudo!= null)
                                        <td>{{$adeudo->titularAdeudo->valor}}</td>
                                        @if($adeudo->tipoAdeudo->id != 7)
                                            <td><strong>Tipo de adeudo: </strong>{{$adeudo->tipoAdeudo->valor}}<br>
                                        @else
                                            <td>{{$adeudo->especifique_adeudo}}<br>
                                        @endif
                                        <h8>
                                            <strong>Número de cuenta o contrato:</strong>{{$adeudo->numero_cuenta}}
                                            <br>
                                            <strong>Saldo insoluto: </strong>${{$adeudo->saldo_insoluto}}
                                        </h8>
                                        </td>
                                        <td>{{$adeudo->tipoOperaciones->valor}} </td>
                                        <td class="py-2">
                                            @if($adeudo->tipo_operacion_id != 4)
                                                <input type="hidden" name="motivo_baja" id="motivo_baja">
                                                <div style="display: inline-block;">
                                                    <a href="{{route('adeudos.edit',[$adeudo->id])}}" class="btn btn-xs btn-warning"><i class="ion ion-edit"></i></a>
                                                    <button class="btn btn-xs btn-danger" onclick="eliminar({{$adeudo->id}},{{$adeudo->enviado}})"><i class="ion ion-trash-a"></i></button>
                                                </div>
                                            @endif
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <center>
                            <strong>Si desea registrar algún Adeudo/Pasivo pulse: <a href="{{route('adeudos.create')}}" class="btn btn-sm btn-secondary">Agregar</a> , de lo contrario vaya al siguiente apartado.</strong>
                        </center>
                    </div>
                @else
                    <span style="text-align: left !important;">Deberá proporcionar la información de CADA UNO de los adeudos o pasivos, que a la fecha de ingreso al cargo tenga el Declarante, así como los de su pareja y/o dependientes económicos</span>
                    <br>
                    <div class="alert alert-danger text-center" role="alert">
                        <div>
                            <strong>Para registrar información de Adeudos pulse: </strong><a href="{{route('adeudos.create')}}" class="btn btn-sm btn-secondary ">Agregar</a><br>
                        </div>
                        <br>
                        <div class="mt-2">
                            <strong>Si no tiene Adeudos, seleccione <a href="{{route('prestamos.index')}}" class="btn btn-ninguno btn-sm btn-secondary">Ninguno</a></strong>
                        </div>
                    </div>



                @endif


                <div class="text-center">
                    <br>
                    <a href="{{route("inversiones.index")}}" class="btn btn-sm btn-submit text-light">Ir a la sección anterior</a>
                    <a href="{{route("prestamos.index")}}" class="btn btn-sm btn-submit text-light">Ir a la siguiente sección</a>
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
                        {!! Form::open(['action' => ['AdeudosPasivosDeclaranteController@destroy', 1], 'method'=>'DELETE','id' => 'frmBorrar']) !!}
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
            console.log('boton clic');
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
                    text: 'No se registró información en este apartado. Si desea registrar Adeudos del Declarante pulse: Agregar, de lo contrario vaya al siguiente apartado.',
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
