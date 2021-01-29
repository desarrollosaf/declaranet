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
                                    <center>Nivel</center>
                                </th>
                                <th>
                                    <center>Institucion</center>
                                </th>
                                <th>
                                    <center>Acciones</center>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($curriculares as $curricular)
                                <tr>
                                    <td>
                                        <center>{{$curricular->nivel->valor}}</center>
                                    </td>
                                    <td>
                                        <center>
                                            <strong>Institución
                                                educativa: </strong>{{$curricular->institucion_educativa}}<br>
                                            <strong>Carrera o área de
                                                conocimiento: </strong>{{$curricular->carrera_area}}<br>
                                            @if($curricular->documento_id == null)
                                            <strong>Documento obtenido: </strong>{{$curricular->estatus->valor}}
                                            @else
                                            <strong>Documento obtenido: </strong>{{$curricular->documento->valor}}
                                            @endif

                                        </center>
                                    </td>

                                    <td class="all text-center">
                                        {!! Form::open(['action' => ['DatosCurricularesDeclaranteController@destroy', $curricular->id], 'method'=>'DELETE']) !!}
                                        <div style="display: inline-block;">
                                            <a href="{{route('datos_curriculares_declarante.edit',[$curricular])}}"
                                               class="btn btn-xs btn-warning">
                                                <i class="ion ion-edit"></i>
                                            </a>
                                            <button class="btn btn-xs btn-danger btn-borrar">
                                                <i class="ion ion-trash-a"></i>
                                            </button>
                                        </div>
                                        {!! Form::close() !!}
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
                            <strong>Para registrar información pulse: </strong><a
                                href="{{route('datos_curriculares_declarante.create')}}"
                                class="btn btn-sm btn-secondary">Agregar</a><br>
                            <strong>Deberá seleccionar <a href="" class="btn btn-sm btn-secondary">Ninguno</a>si no cuenta con información curricular.</strong>
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
                title: '¿Esta seguro que no desea registrar la información solicitada en este apartado?',
                icon: 'warning',
                showCancelButton: true,
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed){
                    Swal.fire({
                        text: 'No se registró información en este apartado. Si desea registrar Experiencia Laboral del Declarante pulse: Agregar, de lo contrario vaya al siguiente apartado.',
                        icon: 'warning',
                        cancelButtonText: 'Aceptar'
                    });
                }
            });
        });
    </script>
@endsection
