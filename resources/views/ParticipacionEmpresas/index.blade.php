@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header bg-info  border-0 py-3 d-flex align-items-center" style="background-color:#F1F1F1 !important;">
            <div>

                <h4>PARTICIPACIÓN ECONÓMICA O FINANCIERA EN EMPRESAS, SOCIEDADES Y ASOCIACIONES, DEL DECLARANTE, CONCUBINA, CONCUBINARIO, FAMILIARES CONSANGUÍNEOS HASTA EL CUARTO GRADO, POR AFINIDAD O CIVIL Y/O DEPENDDIENTES ECONÓMICOS</h4>
                <h6 class="card-subtitle">(HASTA LOS ÚLTIMOS DOS AÑOS)</h6>

            </div>
        </div>

        <div class="card-body">
            @if(count($empresas))
            <div class="table-responsive-lg">
                <table class="table table-active table-striped">
                    <thead class="badge-primary">
                        <tr class="text-center">
                            <th scope="col" width="20%">NOMBRE DE LA EMPRESA</th>
                            <th scope="col" width="20%">TITULAR</th>
                            <th scope="col" width="20%">INFORMACIÓN ADICIONAL</th>
                            <th scope="col" width="20%">TIPO OPERACIÓN</th>
                            <th scope="col" width="20%">ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($empresas as $empresa)
                        <tr class="text-center">
                            <td scope="col" width="20%">{{$empresa->nombre_empresa}}</td>
                            <td scope="col" width="20%">{{$empresa->RelacionTransmisor->valor}}</td>
                            <td scope="col" width="20%">
                                <center>
                                    <strong>Tipo de participación: </strong> {{$empresa->tipoParticipacion->valor}} <br>
                                    <strong>Sector: </strong> {{$empresa->tipoSector->valor}} <br>
                                    <strong>Lugar donde se ubica: </strong> {{$empresa->lugarUbica->valor}}
                                </center>
                            </td>
                            <td scope="col" width="20%">
                                <center>
                                    {{strtoupper($empresa->tipoOperaciones->valor)}}
                                </center>
                            </td>
                            <td class="all">
                                <!--{!! Form::open(['action' => ['ParticipacionEnEmpresasSociedadesYAsociacionesController@destroy', $empresa->id], 'method'=>'DELETE']) !!}-->
                                @if($empresa->tipo_operaciones_id != 4)
                                <div style="display: inline-block;">
                                    <a href="{{route('participacion_empresas.edit',[$empresa])}}" class="btn btn-xs btn-warning">
                                        <i class="ion ion-edit"></i>
                                    </a>
                                    <button class="btn btn-xs btn-danger" onclick="eliminar({{$empresa->id}},{{$empresa->enviado}})">
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
                    <strong>Para adicionar información de Participación en Empresas pulse: <a href="{{route('participacion_empresas.create')}}"class="btn btn-sm btn-secondary">Agregar</a> , de lo contrario vaya al siguiente apartado.</strong>
                </center>
            </div>
            @else
            <span style="text-align: left !important;">Deberá señalar la información de CADA UNA de las empresas, sociedades o asociaciones donde el Declarante, pareja y/o dependientes económicos,
                participan como socios, accionistas, comisarios, representantes, apoderados, colaboradores, beneficiarios u otros.</span>
            <br>
            <div class="alert alert-danger text-center" role="alert">
                <div>
                    <strong>Para registrar información de Paticipación en Empresas pulse: </strong><a href="{{route('participacion_empresas.create')}}" class="btn btn-sm btn-secondary ">Agregar</a><br>
                </div>
                <br>
                <div class="mt-2">
                    <strong>Si no tiene participación en empresas, sociedades o asociaciones, seleccione: <a href="{{route('participacion_empresas.create')}}" class="btn btn-ninguno btn-secondary">Ninguno</a></strong>
                </div>
            </div>


            @endif
            <div class="text-center">
                <br>
                <a href="{{route("prestamos.index")}}" class="btn btn-sm btn-submit text-light">Ir a la sección anterior</a>
                <a href="{{route("participacion.index")}}" class="btn btn-sm btn-submit text-light">Ir a la siguiente sección</a>
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
                        {!! Form::open(['action' => ['ParticipacionEnEmpresasSociedadesYAsociacionesController@destroy', 1], 'method'=>'DELETE','id' => 'frmBorrar']) !!}
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
                            text: 'No se registró información en este apartado. la información de CADA UNA de las empresas, sociedades o asociaciones donde el Declarante, pareja y/o dependientes económicos, \n\
                                participan como socios, accionistas, comisarios, representantes, apoderados, colaboradores, beneficiarios u otros pulse: Agregar, de lo contrario vaya al siguiente apartado.',
                            icon: 'warning',
                            cancelButtonText: 'Aceptar'
                        });
                    }
                });
            });
        </script>
        @endsection




