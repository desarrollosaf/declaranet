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
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
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
                                    <td><a class="btn btn-submit btn-sm text-light" href="{{route('datos_declarante.create')}}"><i class="ion ion-edit"></i></a></td>
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
</script>
@endsection
