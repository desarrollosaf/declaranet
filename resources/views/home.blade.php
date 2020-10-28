@extends('layouts.home')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <div class="float-left">
                    <h1>Mis declaraciones</h1>
                </div>
                <div class="float-right">
                    <button type="button" id="btnDeclaraciones" class="btn btn-submit float-left text-light">
                        Nueva declaracion
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover table-striped table-bordered" style="border-collapse: collapse;">
                    <thead style="background-color: #682244;" class="text-light">
                        <tr>
                            <td>Tipo de declaración</td>
                            <td>Fecha</td>
                            <td>Estatus</td>
                            <td>Acciones</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($declaraciones as $declaracion)
                        <tr>
                            <td>{{$declaracion->tipo_movimiento->tipo_movimiento}}</td>
                            <td>{{$declaracion->fecha_declaracion}}</td>
                            <td>{{$declaracion->estatus_declaracion->estatus}}</td>
                            <td><button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal" onclick="ContinuarDeclaracion({{$declaracion->id}})">Continuar</button></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade bd-example-modal-lg" id="modalDeclaracion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Declaraciones disponibles</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <table class="table table-hover table-striped table-bordered" style="border-collapse: collapse;">
                            <thead style="background-color: #682244;" class="text-light">
                                <tr>
                                    <td>Tipo de declaración</td>
                                    <td style="width:10%">Presentar</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tipo_movimientos as $tipo_movimiento)
                                <tr>
                                    <td>{{$tipo_movimiento->tipo_movimiento}}</td>
                                    <td><button class="btn btn-submit btn-sm text-light" onclick="iniciarDeclaracion({{$tipo_movimiento->id}})"><i class="ion ion-edit"></i></button></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script>
$("#btnDeclaraciones").on("click",function(){
    $("#modalDeclaracion").modal("show");
});
function iniciarDeclaracion(tipo_movimiento_id){
    var r = confirm("Al oprimir el botón de aceptar se dará inicio a la audiencia");
    if (r == true) {
        $.ajax({
            url:"declaracion/iniciar",
            async:true,
            type:"POST",
            data:{
                tipo_movimiento_id:tipo_movimiento_id,
                _token:"{{ csrf_token() }}"
            },
            success:function(data){
                window.location.href = "{{route('datos_declarante.create')}}";
            }
        });
    }
//     swal({
//        title: '¿Está seguro?',
//        text: 'Al oprimir el botón de aceptar se dará inicio a la audiencia',
//        icon: 'warning',
//        buttons: {
//            cancel: {
//                text: 'Cancelar',
//                value: null,
//                visible: true,
//                className: 'btn btn-default',
//                closeModal: true,
//            },
//            confirm: {
//                text: 'Aceptar',
//                value: true,
//                visible: true,
//                className: 'btn btn-warning',
//                closeModal: true
//            }
//        }
//    }).then(function(isConfirm){
//        if(isConfirm){
//            $.ajax({
//                url:"declaracion/iniciar",
//                async:true,
//                type:"POST",
//                data:{
//                    tipo_movimiento_id:tipo_movimiento_id
//                },
//                success:function(data){
//                    alert("holi");
//                }
//            });
//        }
//    });
}
function ContinuarDeclaracion(declaracion_id){
    Swal.fire({
        title: '¿Está seguro?',
        text: 'Deseas continuar con tu declaración',
        icon: 'warning',
        showCancelButton: true,
        cancelButtonText: 'Cancelar'
    }).then(function(isConfirm){
        if(isConfirm){
            $.ajax({
                url:"declaracion/continuar",
                async:true,
                type:"POST",
                data:{
                    declaracion_id:declaracion_id,
                    _token:"{{ csrf_token() }}"
                },
                success:function(data){
                    window.location.href = "{{route('datos_declarante.create')}}";
                }
            });
        }
    });
}
</script>
@endsection
