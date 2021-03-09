@extends('layouts.app')
@section('content')

<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <h3>DONATIVOS</h3>
            <h6> (Hasta los últimos dos años)</h6>
        </div>
        <div class="card-body">
            @if(count($donativos))
            <div class="table-responsive-lg">
                <table class="table table-active table-striped">
                    <thead class="badge-primary">
                        <tr>
                            <th> <center>DESCRIPCIÒN</center></th>
                            <th><center>MONTO</center></th>
                            <th> <center> TIPO DE OPERACIÓN</center></th>
                            <th> <center>ACCIONES</center></th>
                        <tr>
                    </thead>
                    <tbody style="text-transform: uppercase;">
                        @foreach ($donativos as $item)
                        <tr>
                            <td>{{$item->especifique_donativo}}</td>
                            <td>{{$item->monto_donativo}}</td>
                            <td>{{$item->tipo_operacion->valor}}</td>
                            <td class="all text-center">
                                @if($item->tipo_operacion_id != 4)
                                <div style="display: inline-block;">
                                    <a href="{{route('donativos.edit',$item->id)}}"
                                       class="btn btn-xs btn-warning">
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
                    <strong>Para adicionar información pulse <a href="{{route('donativos.create')}}" class="btn btn-sm btn-secondary">Agregar</a> </strong>
                </center>
                @else
                <div class="alert alert-danger text-center" role="alert">
                    <div class="col-md-12">
                        <center>
                            <strong>Para adicionar información de donativos pulse: <a class="btn btn-sm btn-secondary" href="{{route('donativos.create')}}">Agregar</a></strong>
                            <br><br>
                            <strong>Si no tiene donativos, seleccione  <a href="{{route('intereses_personales.index')}}" class="btn btn-ninguno btn-sm btn-secondary">Ninguno</a></strong>
                        </center>
                    </div>
                </div>
                @endif
                <br><br>
                <div class="col-md-12">
                    <div class="text-center">
                        <br>
                        <a href="{{route("fideicomisos.index")}}" class="btn btn-sm btn-submit text-light">Ir a la sección anterior</a>
                        <a href="{{route("intereses_personales.index")}}" class="btn btn-sm btn-submit text-light">Ir a la siguiente sección</a>
                    </div>
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
                {!! Form::open(['action' => ['DonativosController@destroy', 1], 'method'=>'DELETE','id' => 'frmBorrar']) !!}
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
        function eliminar(id, enviada){
            $("#id").val(id);
            if (enviada){
                $("#modal_baja").modal("show");
            } else{
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
                        text: 'No se registró información en este apartado. Si desea registrar Donativos del Declarante pulse: Agregar, de lo contrario vaya al siguiente apartado.',
                        icon: 'warning',
                        cancelButtonText: 'Aceptar'
                    });
                }
            });
        });
    </script>
    @endsection
