@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <h3>DATOS DEL DEPENDIENTE ECONÓMICO</h3>
        </div>
        <div class="card-body">
            <div class="col-md-12">
                @if(count($dependientes) > 0)
                <table class="table table-bordered table-striped table-hover" style="border-collapse: collapse;">
                    <thead style="background-color: #682244;" class="text-light">
                        <tr>
                            <td>Nombre</td>
                            <td>Primer Apellido</td>
                            <td>Segundo Apellido</td>
                            <td>CURP</td>
                            <td>Parentesco</td>
                            <td>Tipo operación</td>
                            <td>Acciones</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dependientes as $dependiente)
                        <tr>
                            <td>{{$dependiente->nombre}}</td>
                            <td>{{$dependiente->primer_apellido}}</td>
                            <td>{{$dependiente->segundo_apellido}}</td>
                            <td>{{$dependiente->curp}}</td>
                            <td>{{$dependiente->relacion->valor}}</td>
                            <td>{{$dependiente->tipoOperaciones->valor}}</td>
                            <td>
                                @if($dependiente->tipo_operacion_id != 4)
                                {!! Form::open(['action' => ['DatosDependienteEconomicoController@destroy', $dependiente->id], 'method'=>'DELETE']) !!}
                                <div style="display: inline-block;">
                                    <a href="{{route('datos_dependiente_declarante.edit',[$dependiente])}}" class="btn btn-xs btn-warning">
                                        <i class="ion ion-edit"></i>
                                    </a>
                                    <button type="button" class="btn btn-xs btn-danger btn-borrar" data-enviado="{{$dependiente->enviado}}" data-id="{{$dependiente->id}}">
                                        <i class="ion ion-trash-a"></i>
                                    </button>
                                </div>
                                {!! Form::close() !!}
                                @endif
    
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <center>
                    <strong>Si desea registrar Datos de los dependientes económicos pulse: <a href="{{route('datos_dependiente_declarante.create')}}" class="btn btn-sm btn-secondary">Agregar</a> , de lo contrario vaya al siguiente apartado.</strong>
                </center>
                @else
                <p class="text-justify">Deberá proporcionar la información de CADA UNA de las personas, familiares o no, cuya manutención dependa principalmente de los ingresos del Declarante.</p>
                <div class="alert alert-danger text-center" role="alert">
                    <div>
                        <strong> Para registrar información  de dependientes económicos pulse:</strong><a href="{{route("datos_dependiente_declarante.create")}}" type="button" class="btn btn-sm btn-secondary">Agregar</a>
                    </div>
                    <br>
                    <div class="mt-2">
                        <strong>Sí no tiene dependientes económicos, seleccione:</strong><a href="{{route("ingreso_neto.index")}}" type="button" class="btn btn-ninguno btn-sm btn-secondary"> Ninguno</a>
                    </div>
                </div>
                @endif
            </div>
            <br>
            <center>
                <a href="{{route("datos_pareja_declarante.create")}}" class="btn btn-submit text-light">Ir a la sección anterior</a>
                <a href="{{route("ingreso_neto.index")}}" class="btn btn-submit text-light">Ir a la siguiente sección</a>
            </center>
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
                    {!! Form::open(['action' => ['DatosDependienteEconomicoController@destroy', 1], 'method'=>'DELETE','id' => 'frmBorrar']) !!}
                    <input name="id" type="hidden" id='id_registro'>
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                               <strong>Motivo de baja:</strong>
                                {{--{!! Form::select('motivo_baja_id',$motivos, [] ,['class'=>'form-control text-uppercase','placeholder' => 'SELECCIONA UNA OPCIÓN' ,'id' => 'motivo_baja_id','required' => true]) !!} --}}

                                {!! Form::text('motivo_baja',null,['class'=>'form-control text-uppercase','placeholder' => 'Ej. CAMBIO DE EMPLEO' ,'id' => 'motivo_baja','required' => true]) !!} 
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
    $("#btn-ninguno").on("click", function () {
        Swal.fire({
            text: '¿Esta seguro que no desea registrar la información solicitada en este apartado?',
            icon: 'warning',
            showCancelButton: true,
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    text: 'No se registró información en este apartado. Si desea registrar Datos del Dependiente Económico pulse: Agregar, de lo contrario vaya al siguiente apartado.',
                    icon: 'warning',
                    cancelButtonText: 'Aceptar'
                });
            }
        });
    });
    $(document).on('click', '.btn-borrar', function (e) {
                e.preventDefault();
                let id = $(this).data('id');
                let enviado = $(this).data('enviado');
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
            if (result.isConfirmed) {
                Swal.fire({
                    text: 'No se registró información en este apartado. Si desea registrar Datos del dependiente económico pulse: Agregar, de lo contrario vaya al siguiente apartado.',
                    icon: 'warning',
                    cancelButtonText: 'Aceptar'
                });
            }
        });
    });


</script>
@endsection
