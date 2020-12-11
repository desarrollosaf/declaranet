@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <h3>DATOS CURRICULARES DEL DECLARANTE</h3>
            </div>
            <div class="card-body">
                <div class="col-md-12">

                    <table class="table table-bordered table-striped table-hover" style="border-collapse: collapse;">
                        <thead style="background-color: #682244;" class="text-light">
                            <tr>
                                <th><center>Nivel</center></th>
                                <th><center>Institucion</center></th>
                                <th><center>Carrera</center></th>
                                <th><center>Estatus</center></th>
                                <th><center>Acciones</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($curriculares as $curricular)
                            <tr>
                                <td><center>{{$curricular->nivel->valor}}</center></td>
                                <td><center>{{$curricular->institucion_educativa}}</center></td>
                                <td><center>{{$curricular->carrera_area}}</center></td>
                                <td><center>{{$curricular->estatus->valor}}</center></td>
                                <td class="all">
                                    {!! Form::open(['action' => ['DatosCurricularesDeclaranteController@destroy', $curricular->id], 'method'=>'DELETE']) !!}
                                    <div style="display: inline-block;">
                                        <a href="{{route('datos_curriculares_declarante.edit',[$curricular])}}" class="btn btn-xs btn-warning">
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
                </div>
                Deberá proporcionar la información correspondiente al nivel máximo de estudios y documento que lo acrediten.
                    <div class="alert alert-danger text-center" role="alert">
                        Para registrar información pulse:
                        <a type="button" class="btn btn-sm btn-secondary" href="{{route("datos_curriculares_declarante.create")}}">
                            Agregar
                        </a>
                        <br>
                        Deberá seleccionar
                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#exampleModal">
                            Ninguno
                        </button> Sí éste es su primer empleo
                    </div>
                    <br>
                    <a href="" class="btn btn-submit float-left text-light">Ir a la sección anterior</a>
                    <a href="" class="btn btn-submit float-right text-light">Ir a la siguiente sección</a>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $("#nivel").on("change", function(){
                var nivel = $('#nivel option:selected').html();
                if(nivel == "PRIMARIA" || nivel == "SECUNDARIA"){
                    $("#carrera").prop("disabled", true);
                }
                else{
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
                if (result.isConfirmed){
                    $(that).closest('form').submit();
                }
            });
            return false;
        });
    </script>
@endsection
