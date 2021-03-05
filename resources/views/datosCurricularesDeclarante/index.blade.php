@extends('layouts.app')
@section('content')
    <div class="container">


        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <h3>DATOS CURRICULARES DEL DECLARANTE</h3>
            </div>
            <div class="card-body">

                @if(count($curriculares))
                    <div class="table-responsive-lg">
                        <table class="table table-active table-striped">
                            <thead class="badge-primary">
                            <tr>
                                <th>
                                    <center>NIVEL</center>
                                </th>
                                <th>
                                    <center>INSTITUCIÓN</center>
                                </th>
                                <th>
                                    <center>TIPO DE OPERACIÓN</center>
                                </th>
                                <th>
                                    <center>ACCIONES</center>
                                </th>
                            </tr>
                            </thead>
                            <tbody style="text-transform: uppercase;">
                            @foreach($curriculares as $curricular)
                                <tr>
                                    <td>
                                        <center>{{$curricular->nivel->valor}}</center>
                                    </td>
                                    <td>
                                        <center>
                                            <strong>INSTITUCIÓN EDUCATIVA: </strong>{{$curricular->institucion_educativa}}<br>
                                            <strong>CARRERA O ÁREA DE CONOCIMIENTO: </strong>{{$curricular->carrera_area}}<br>
                                            @if($curricular->documento_id == null)
                                            <strong>DOCUMENTO OBTENIDO: </strong>{{$curricular->estatus->valor}}
                                            @else
                                            <strong>DOCUMENTO OBTENIDO: </strong>{{$curricular->documento->valor}}
                                            @endif

                                        </center>
                                    </td>
                                    <td><center>{{$curricular->tipoOperaciones->valor}}</center></td>

                                    <td class="all text-center">
                                        <input type="hidden" name="motivo_baja" id="motivo_baja">
                                        <div style="display: inline-block;">
                                            <a href="{{route('datos_curriculares_declarante.edit',[$curricular])}}"
                                               class="btn btn-xs btn-warning">
                                                <i class="ion ion-edit"></i>
                                            </a>
                                            <button class="btn btn-xs btn-danger" onclick="eliminar({{$curricular->id}},{{$curricular->enviado}})">
                                                <i class="ion ion-trash-a"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <center>
                            <strong>Si desea registrar Datos Curriculares del Declarante pulse: <a
                                    href="{{route('datos_curriculares_declarante.create')}}"
                                    class="btn btn-sm btn-secondary">Agregar</a> , de lo contrario vaya al siguiente
                                apartado.</strong>
                        </center>
                    </div>
                @else
                    <span style="text-align: left !important;">Deberá proporcionar la información correspondiente al nivel máximo de estudios y documento que lo acrediten.</span>
                    <br>
                    <div class="alert alert-danger text-center" role="alert">
                        <label style="margin-top:10px;">
                            <strong>Para registrar información pulse: </strong><a href="{{route('datos_curriculares_declarante.create')}}" class="btn btn-sm btn-secondary">Agregar</a>
                            <br>
                            <br>
                            <strong>Deberá seleccionar <a href="{{route('datos_empleo_declarante.index')}}" class="btn btn-ninguno btn-sm btn-secondary">Ninguno</a> si no cuenta con información curricular.</strong>
                        </label>
                    </div>



                @endif


                <div class="text-center">
                    <br>
                    <a href="{{route("domicilio_declarante.index")}}" class="btn btn-sm btn-submit text-light">Ir a la sección anterior</a>
                    <a href="{{route("datos_empleo_declarante.index")}}" class="btn btn-sm btn-submit text-light">Ir a la siguiente sección</a>
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
        {!! Form::open(['action' => ['DatosCurricularesDeclaranteController@destroy', 1], 'method'=>'DELETE']) !!}
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
            <button type="button" class="btn btn-sm btn-submit text-light">Eliminar</button>
            <a class="btn btn-secondary" data-dismiss="modal">Close</a>
        </div>
        {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $("#nivel").on("change", function () {
                var nivel = $('#nivel option:selected').html();
                if (nivel == "PRIMARIA" || nivel == "SECUNDARIA") {
                    $("#carrera").prop("disabled", true);
                } else {
                    $("#carrera").prop("disabled", false);
                }
            });
        });
        function eliminar(id,enviada){
            if(enviada){
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
//                        $(that).closest('form').submit();
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
                text: 'describe el motivo de la baja',
                input: 'text',
                inputAttributes: {
                    autocapitalize: 'off'
                },
                showCancelButton: true,
                confirmButtonText: 'Aceptar',
                showCancelButton: true,
                cancelButtonText: 'Cancelar',
            }).then((result) => {
                if (result.isConfirmed) {
                    console.log(result.value);
                    $("#motivo_baja").val(result.value);
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
                        text: 'No se registró información en este apartado. Para agregar datos curriculares pulse: Agregar, de lo contrario vaya al siguiente apartado.',
                        icon: 'warning',
                        cancelButtonText: 'Aceptar'
                    });
                }
            });
        });
    </script>
@endsection
