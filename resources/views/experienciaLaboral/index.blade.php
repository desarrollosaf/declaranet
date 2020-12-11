@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <h3>EXPERIENCIA LABORAL</h3>
                <h6>(Últimos cinco empleos)</h6>
            </div>
                        <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        Deberá proporcionar la información correspondiente a los cinco empleos, cargos o comisiones que haya
                        tenido (en caso de que cuente con ellos).
                        @if(count($experiencias))
                            <table class="table table-bordered table-striped table-hover" style="border-collapse: collapse;">
                                <thead style="background-color: #682244;" class="text-light">
                                <tr>
                                    <th>
                                        <center>Nivel</center>
                                    </th>
                                    <th>
                                        <center>Información adicional</center>
                                    </th>
                                    <th>
                                        <center>Acciones</center>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($experiencias as $experiencia)
                                    <tr>
                                        <td>
                                            <center>{{$experiencia->ambito_sector->valor}}</center>
                                        </td>
                                        @if($experiencia->ambito_sector_id == 1)
                                            <td>
                                                <center>
                                                    <strong>Nombre:</strong> {{$experiencia->ente_publico}} <br>
                                                    <strong>Cargo/Puesto:</strong> {{$experiencia->puesto}} {{$experiencia->cargo_comision}}
                                                    <br>
                                                    <strong>Periodo:</strong>{{$experiencia->fecha_ingreso}}
                                                    {{$experiencia->fecha_egreso}}<br>
                                                </center>
                                            </td>
                                        @else
                                            <td>
                                                <center>
                                                    <strong>Nombre:</strong> {{$experiencia->ente_publico}} <br>
                                                    <strong>Cargo/Puesto:</strong> {{$experiencia->puesto}} {{$experiencia->cargo_comision}}
                                                    <br>
                                                    <strong>Periodo:</strong>{{$experiencia->fecha_ingreso}}
                                                    {{$experiencia->fecha_egreso}}<br>
                                                </center>
                                            </td>
                                        @endif
                                        <td class="all">
                                            {!! Form::open(['action' => ['ExperienciaLaboralController@destroy', $experiencia->id], 'method'=>'DELETE']) !!}
                                            <div style="display: inline-block;">
                                                <a href="{{route('experiencia_laboral.edit',[$experiencia])}}"
                                                   class="btn btn-xs btn-warning">
                                                    <i class="ion ion-edit"></i>
                                                </a>
                                                <button class="btn btn-xs btn-danger btn-borrar">
                                                    <i class="ion ion-trash-a btn-borrar"></i>
                                                </button>
                                            </div>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>


                </div>


                <div class="alert alert-danger text-center" role="alert">
                    <center>
                    Para registrar información pulse: <a class="btn btn-submit btn-sm text-light"
                                                         href="{{route('experiencia_laboral.create')}}">Agregar</a><br>Deberá
                    seleccionar <a class="btn btn-submit btn-sm text-light">Ninguno</a> si éste es su primer
                    empleo.
                    </center>
                </div>
                <br>
                <center>
                    <button class="btn btn-submit btn-sm text-light"><a class="btn btn-submit btn-sm text-light"  href="{{route('datos_empleo_declarante.index')}}">Ir a la sección anterior</a></button>
                    <button class="btn btn-submit btn-sm text-light"><a class="btn btn-submit btn-sm text-light"  href="{{route('datos_pareja_declarante.index')}}">Ir a la siguiente sección</a></button>
                </center>



            </div>

            <br><br>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $('.btn-borrar').on('click', function (e) {
            let that = this;
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
        });
    </script>
@endsection

