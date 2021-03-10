@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header bg-info  border-0 py-3 d-flex align-items-center" style="background-color:#F1F1F1 !important;">
            <div>
                <h3>APOYOS O BENEFICIOS PÚBLICOS</h3>
                <h6 class="card-subtitle">(HASTA LOS DOS ÚLTIMOS AÑOS)</h6>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="card">

                    </div>

                    <!-- Cuerpo del documento -->
                    <div class="card-body">
                        @if(count($apoyos))
                        <div class="table-responsive-lg">
                             <table class="table table-active table-striped">
                                <thead class="badge-primary">
                                    <tr class="text-center">
                                        <th scope="col">BENEFICIARIOS</th>
                                        <th scope="col">NOMBRE DEL PROGRAMA</th>
                                        <th scope="col">INFORMACIÓN ADICIONAL</th>
                                        <th scope="col">TIPO OPERACIÓN</th>
                                        <th scope="col">ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($apoyos as $apoyo)
                                    <tr class="text-center">
                                        @if($apoyos!= null)
                                        @if($apoyo->tipoBeneficiario->id != 23)
                                        <td>{{$apoyo->tipoBeneficiario->valor}}</td>
                                        @else
                                        <td>{{$apoyo->especifique_titular}}</td>
                                        @endif
                                        <td>{{$apoyo->nombre_programa}}</td>
                                        <td>
                                            <h8><strong>Institución:</strong>{{$apoyo->nombre_institucion}}<br>
                                                <strong>Nivel:</strong> {{$apoyo->nivelGobierno->valor}}<br>
                                                @if($apoyo->tipoApoyo->id != 4)
                                                <strong>Tipo de apoyo:</strong> {{$apoyo->tipoApoyo->valor}}
                                                @else
                                                <strong>Tipo de apoyo:</strong>{{$apoyo->especifique_apoyo}}
                                                @endif
                                            </h8>
                                        </td>
                                        <td>
                                            <center>
                                                {{strtoupper($apoyo->tipoOperaciones->valor)}}
                                            </center>
                                        </td>

                                        <td>
                                            <!--{!! Form::open(['action' => ['ApoyoBeneficioController@destroy', $apoyo->id], 'method'=>'DELETE']) !!}-->
                                            @if($apoyo->tipo_operacion_id != 4)
                                            <div style="display: inline-block;">
                                                <a href="{{route("apoyo_beneficio.edit",$apoyo->id)}}" type="button" class="btn btn-xs btn-warning"><i class="ion ion-edit"></i>
                                                </a>
                                                <button class="btn btn-xs btn-danger" onclick="eliminar({{$apoyo->id}},{{$apoyo->enviado}})">
                                                    <i class="ion ion-trash-a btn-borrar"></i>
                                                </button>
                                            </div>
                                            @endif
                                        </td>
                                @endif
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <center>
                                <strong>Para adicionar información pulse:<a
                                        href="{{route('apoyo_beneficio.create')}}"
                                        class="btn btn-sm btn-secondary">Agregar</a> , de lo contrario vaya al siguiente
                                    apartado.</strong>
                            </center>
                        </div>
                        @else
                        Es la contribución monetaria o en especie que otorga un Ente Público al Declarante, pareja y/o dependientes económicos. El apoyo en especie se refiere a cualquier contribución, utilizando bienes, servicios o beneficios de naturaleza diferente al dinero.
                        <br>Deberá señalar la información de CADA UNO de los apoyos o beneficios públicos recibidos por el Declarante, pareja y/o dependientes económicos.
                        <div class="alert alert-danger text-center" role="alert">
                            <label style="margin-top:10px;">
                                <strong>Para registrar información pulse: </strong><a href="{{route('apoyo_beneficio.create')}}" class="btn btn-sm btn-secondary ">Agregar</a>
                                <br>
                                <br>
                                <strong>Si no tiene apoyos o beneficios públicos, seleccione <a href="{{route('representacion.index')}}" class="btn btn-ninguno  btn-sm btn-secondary">Ninguno</a></strong>
                            </label>
                        </div>
                        @endif

                        <div class="text-center">
                            <br>
                            <a href="{{route("participacion.index")}}" class="btn btn-sm btn-submit text-light">Ir a la sección anterior</a>
                            <a href="{{route("representacion.index")}}" class="btn btn-sm btn-submit text-light">Ir a la siguiente sección</a>
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
                        {!! Form::open(['action' => ['ApoyoBeneficioController@destroy', 1], 'method'=>'DELETE','id' => 'frmBorrar']) !!}
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
                                    text: 'No se registró información en este apartado. Si desea registrar apoyos o beneficios públicos pulse: Agregar, de lo contrario vaya al siguiente apartado.',
                                    icon: 'warning',
                                    cancelButtonText: 'Aceptar'
                                });
                            }
                        });
                    });
                </script>
                @endsection
