@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <h3>REPRESENTACIÓN</h3>
            <h6 class="card-subtitle">(HASTA LOS DOS ÚLTIMOS AÑOS)</h6>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="card">

                    </div>
                    <div class="card-body">
                        @if(count($representacion))

                        <table class="table table-active table-striped">
                            <thead class="text-center text-light">
                                <tr>
                                    <th scope="col" width="20%">TIPO DE REPRESENTACIÓN</th>
                                    <th scope="col" width="20%">TITULAR</th>
                                    <th scope="col" width="20%">INFORMACIÓN ADICIONAL</th>
                                    <th scope="col" width="20%">INFORMACIÓN ADICIONAL</th>
                                    <th scope="col" width="20%">ACCIONES</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach($representacion as $repre)
                                <tr>
                                    <td scope="col" width="20%">{{$repre->tipotipoParticipaciones->valor}}</td>
                                    <td scope="col" width="20%">{{$repre->tipotitularParticipaciones->valor}}</td>
                                    <td scope="col" width="20%">
                                        <center>
                                            <strong>Sector: </strong> {{$repre->tipoSector->valor}} <br>
                                            <strong>Lugar donde se ubica: </strong> {{$repre->lugarUbicacion->valor}}
                                        </center>
                                    </td>
                                    <td scope="col" width="20%">
                                        <center>
                                            {{strtoupper($repre->tipoOperaciones->valor)}}
                                        </center>
                                    </td>
                                    <td class="all">
                                        <!--{!! Form::open(['action' => ['RepresentacionController@destroy', $repre->id], 'method'=>'DELETE']) !!}-->
                                        @if($repre->tipo_operaciones_id != 4)
                                        <div style="display: inline-block;">
                                            <a href="{{route('representacion.edit',[$repre])}}" class="btn btn-xs btn-warning">
                                                <i class="ion ion-edit"></i>
                                            </a>
                                            <button class="btn btn-xs btn-danger" onclick="eliminar({{$repre->id}},{{$repre->enviado}})">
                                                <i class="ion ion-trash-a"></i>
                                            </button>
                                        </div>
                                        @endif 
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <center><label style="margin-top:10px;">Para adicionar información pulse:<a href="{{route('representacion.create')}}" class="btn btn-sm btn-secondary">Agregar</a>, de lo contrario vaya a la siguiente sección.</label> </center>

                        @else

                        <div class="alert alert-danger text-center" role="alert">
                            <div>
                                <strong>Para registrar información de Representación pulse: <a class="btn btn-sm btn-secondary" href="{{route('representacion.create')}}">Agregar</a></strong>
                            </div>
                            <br>
                            <div class="mt-2">
                                <strong>Si no tiene participación en empresas, sociedades o asociaciones, seleccione: <a href="{{route('clientes_principales.index')}}" class="btn btn-ninguno btn-secondary">Ninguno</a><br></strong>
                            </div>
                        </div>
                    </div>

                    @endif


                    <div class="text-center">
                        <a href="{{route("apoyo_beneficio.index")}}" class="btn btn-sm btn-submit text-light">Ir a la sección anterior</a>
                        <a href="{{route("clientes_principales.index")}}" class="btn btn-sm btn-submit text-light">Ir a la siguiente sección</a>
                    </div>
                    <br>
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
                        {!! Form::open(['action' => ['RepresentacionController@destroy', 1], 'method'=>'DELETE','id' => 'frmBorrar']) !!}
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
                        title: '¿Está seguro que no desea registrar la información solicitada en este apartado?',
                        icon: 'warning',
                        showCancelButton: true,
                        cancelButtonText: 'Cancelar'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Swal.fire({
                                text: 'No se registró información en este apartado. Si desea registrar Representaciones pulse: Agregar, de lo contrario vaya al siguiente apartado.',
                                icon: 'warning',
                                cancelButtonText: 'Aceptar'
                            });
                        }
                    });
                });
            </script>
            @endsection
