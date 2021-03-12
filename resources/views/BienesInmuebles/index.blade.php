@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <h3>BIENES INMUEBLES</h3>
            <h6 class="card-subtitle">(A LA FECHA DE INGRESO)</h6>
        </div>
        <div class="card-body">

            @if(count($bienes))
            <div class="table-responsive-lg">
                <table class="table table-active table-striped">
                    <thead class="badge-primary">
                        <tr>
                            <th> <center>Tipo de bien</center> </th>
                    <th> <center>Titular</center> </th>
                <th> <center>Tipo Operación</center> </th>
                    <th> <center>Acciones</center> </th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($bienes as $bien)
                        <tr>
                            <td scope="col" width="40%" align="center">{{$bien->tipoInmueble->valor}}</td>
                            <td scope="col" width="40%" align="center">{{$bien->titular->valor}}</td>
                            <td scope="col" width="40%" align="center">{{$bien->tipoOperaciones->valor}}</td>
                            <td class="all" width="40%" align="center">
                                @if($bien->tipo_operacion_id != 4)
                                {!! Form::open(['action' => ['BienesInmueblesController@destroy', $bien->id], 'method'=>'DELETE']) !!}
                                <div style="display: inline-block;">
                                    <a href="{{route('bienes_inmuebles.edit',[$bien])}}" class="btn btn-xs btn-warning">
                                        <i class="ion ion-edit"></i>
                                    </a>
                                    <button type="button" class="btn btn-xs btn-danger btn-borrar" data-id="{{$bien->id}}" data-enviado="{{$bien->enviado}}">
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
                    <strong>Si desea registrar Bienes inmuebles pulse: <a href="{{route('bienes_inmuebles.create')}}" class="btn btn-sm btn-secondary">Agregar</a> , de lo contrario vaya al siguiente apartado.</strong>
                </center>
            </div>
            @else
            <span style="text-align: left !important;">Deberá proporcionar la información de CADA UNO de los bienes inmuebles, que a la fecha de ingreso al cargo sean propiedad del Declarante, así como los de su pareja y/o dependientes económicos.</span>
            <br>
            <div class="alert alert-danger text-center" role="alert">
                <div>
                    <strong>Para registrar información pulse: </strong><a href="{{route('bienes_inmuebles.create')}}" class="btn btn-sm btn-secondary text-light">Agregar</a><br>
                </div>
                <br>
                <div class="mt-2">
                    <strong>Si no tiene bienes inmuebles, seleccione <a href="{{route('vehiculos.index')}}" class="btn btn-ninguno btn-sm btn-secondary text-light">Ninguno</a></strong>
                </div>
            </div>



            @endif


            <div class="text-center">
                <br>
                <a href="{{route("servidor_publico.index")}}" class="btn btn-sm btn-submit text-light">Ir a la sección anterior</a>
                <a href="{{route("vehiculos.index")}}" class="btn btn-sm btn-submit text-light">Ir a la siguiente sección</a>
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
            {!! Form::open(['action' => ['BienesInmueblesController@destroy', 1], 'method'=>'DELETE','id' => 'frmBorrar']) !!}
            <input name="id" type="hidden" id='id_registro'>
            <div class="modal-body">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <strong>Motivo de baja</strong>
                        {!! Form::select('motivo_baja_id',$motivos, [] ,['class'=>'form-control text-uppercase','placeholder' => 'SELECCIONA UNA OPCIÓN' ,'id' => 'motivo_baja_id','required' => true]) !!}
                        <span class="text-danger" style="font-size:150%"></span>
                    </div>
                    <div class="form-group col-md-12">
                        <strong>Especifique motivo de baja</strong>
                        {!! Form::text('motivo_baja', null,['class'=>'form-control text-uppercase','placeholder' => 'Especifique' ,'id' => 'motivo_baja','readOnly' => true]) !!}
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
        let enviado = $(this).data('enviado');
        console.log(enviado);
        if (enviado) {
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
                    text: 'No se registró información en este apartado. Si desea registrar un Bien Inmueble pulse: Agregar, de lo contrario vaya al siguiente apartado.',
                    icon: 'warning',
                    cancelButtonText: 'Aceptar'
                });
            }
        });
    });
    $("#motivo_baja_id").change(function(){
        let val = $(this).val();
        if(parseInt(val) === 4){
            $("#motivo_baja").prop("readOnly", false).prop("required", true);
        } else {
            $("#motivo_baja").prop("readOnly", true).prop("required", false).val("");
        }
        
    });
</script>
@endsection
