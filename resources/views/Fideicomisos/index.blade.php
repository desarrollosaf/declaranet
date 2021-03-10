@extends('layouts.app')
@section('content')

<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <h3>FIDEICOMISOS</h3>
            <h6> (Hasta los últimos dos años)</h6>
        </div>
        <div class="card-body">
            @if(count($fideicomisos))
            <table class="table table-bordered table-striped">
                <thead class="text-center text-light">
                <tr>
                    <th scope="col" width="20%">TITULAR DE LA PARTICIPACIÓN</th>
                    <th scope="col" width="20%">TIPO DE FIDEICOMISO</th>
                    <th scope="col" width="40%">INFORMACIÓN ADICIONAL</th>
                    <th scope="col" width="40%">TIPO DE OPERACIÓN</th>
                    <th scope="col" width="20%">ACCIONES</th></tr>
                </thead>
                <tbody class="text-center">
                    @foreach($fideicomisos as $fideicomiso)

                        <tr>
                            <td>
                                <center>{{$fideicomiso->tipoRelaciones->valor}}</center>
                            </td>
                            <td>
                                <center>{{$fideicomiso->tipoParticipacionFideicomisos->valor}}</center>
                            </td>
                            <td>
                                <center>
                                    <strong>Nombre del cliente:</strong>{{$fideicomiso->nombre_persona_fisica}} {{$fideicomiso->nombre_persona_moral}}  <br>
                                    <strong>Sector:</strong>{{$fideicomiso->sectores->valor}} <br>
                                    <strong>Lugar en donde se localiza el fideicomiso:</strong>{{$fideicomiso->LugarUbicaciones->valor}}
                                </center>
                            </td>
                            <td>
                                {{$fideicomiso->tipoOperaciones->valor}}
                            </td>
                            <td class="all">
                                @if($fideicomiso->tipo_operacion_id != 4)
                                    {!! Form::open(['action' => ['FideicomisosController@destroy', $fideicomiso->id], 'method'=>'DELETE']) !!}
                                    <div style="display: inline-block;">
                                        <a href="{{route('fideicomisos.edit',[$fideicomiso])}}" class="btn btn-xs btn-warning"><i class="ion ion-edit"></i></a>
                                        <button type="button" data-enviado="{{$fideicomiso->enviado}}" class="btn btn-xs btn-danger btn-borrar"><i class="ion ion-trash-a btn-borrar"></i></button>
                                    </div>
                                    {!! Form::close() !!}
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
                <center>
                    <strong>Para adicionar información pulse <a href="{{route('fideicomisos.create')}}" class="btn btn-sm btn-secondary">Agregar</a> </strong>
                </center>
            @else
                <div class="alert alert-danger text-center" role="alert">
                
                    <div>
                        <strong>Para adicionar información de fideicomisos pulse <a class="btn btn-sm btn-secondary" href="{{route('fideicomisos.create')}}">Agregar</a></strong>
                    </div
                    <br>
                    <br>
                    <div class="mt-2">
                        <strong>Si no tiene fideicomisos, seleccione  <a href="{{route('donativos.index')}}" class="btn btn-ninguno btn-sm btn-secondary">Ninguno</a></strong>
                    </div>
                </div>
            @endif
                <br><br>
                <div class="col-md-12">
                    <div class="text-center">
                        <br>
                        <a href="{{route("beneficios_privados.index")}}" class="btn btn-sm btn-submit text-light">Ir a la sección anterior</a>
                        <a href="{{route("donativos.index")}}" class="btn btn-sm btn-submit text-light">Ir a la siguiente sección</a>
                    </div>
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
                    {!! Form::open(['action' => ['FideicomisosController@destroy', 1], 'method'=>'DELETE','id' => 'frmBorrar']) !!}
                    <input name="id" type="hidden" id='id_registro'>
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
    $(document).on('click', '.btn-borrar', function (e) {
        var id = $(this).data('id');
        var enviado = $(this).data('enviado');
        if(enviado){
            $("#id_registro").val(id);
            $("#modal_baja").modal("show");
        } else {
            Swal.fire({
                title: '¿Está seguro?',
                text: 'Al oprimir el botón de aceptar se eliminará el registro',
                icon: 'warning',
                showCancelButton: true,
                cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $(this).closest('form').submit();
                    }
                });  
            }
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
