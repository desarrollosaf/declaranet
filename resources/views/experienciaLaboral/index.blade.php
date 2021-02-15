@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <h3>EXPERIENCIA LABORAL</h3>
                <h6 class="card-subtitle">(ÚLTIMOS CINCO EMPLEOS)</h6>
            </div>
            <div class="card-body">
                <div class='text-center'>
                    @if(count($experiencias))
                        <div class="table-responsive-lg">
                            <table class="table table-active table-striped">
                                <thead class="badge-primary">
                                <tr>
                                    <th> <center>NIVEL</center> </th>
                                    <th> <center>INFORMACIÓN ADICIONAL</center> </th>
                                    <th> <center>ACCIONES</center> </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($experiencias as $experiencia)
                                    <tr>
                                        <td>
                                            <center>{{$experiencia->ambito_sectores->valor}}</center>
                                        </td>
                                        @if($experiencia->ambito_sector_id == 1)
                                            <td>
                                                <center>
                                                    <strong>NOMBRE:</strong> {{strtoupper($experiencia->ente_publico)}} <br>
                                                    <strong>CARGO/PUESTO:</strong> {{strtoupper($experiencia->puesto)}} {{strtoupper($experiencia->cargo_comision)}}
                                                    <br>
                                                    <strong>PERIODO:</strong>{{strtoupper($experiencia->fecha_ingreso)}}
                                                    {{strtoupper($experiencia->fecha_egreso)}}<br>
                                                </center>
                                            </td>
                                        @else
                                            <td>
                                                <center>
                                                    <strong>NOMBRE:</strong> {{strtoupper($experiencia->nombre_empresa)}} <br>
                                                    <strong>CARGO/PUESTO:</strong> {{strtoupper($experiencia->puesto)}} {{strtoupper($experiencia->cargo_comision)}}
                                                    <br>
                                                    <strong>PERIODO:</strong>{{strtoupper($experiencia->fecha_ingreso)}}
                                                    {{strtoupper($experiencia->fecha_egreso)}}<br>
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
                            <center>
                                <strong>Si desea registrar Experiencia Laboral pulse: <a href="{{route('experiencia_laboral.create')}}" class="btn btn-sm btn-secondary">Agregar</a> , de lo contrario vaya al siguiente apartado.</strong>
                            </center>
                        </div>
                    @else
                        <span style="text-align: justify !important;">Deberá proporcionar la información correspondiente a los cinco empleos, cargos o comisiones que haya tenido (en caso de que cuente con ellos).</span>
                        <br>
                        <div class="alert alert-danger text-center" role="alert">
                            <label style="margin-top:10px;">
                                <strong>Para registrar información pulse: </strong><a href="{{route('experiencia_laboral.create')}}" class="btn btn-sm btn-secondary">Agregar</a><br>
                                <strong>Deberá seleccionar <a href="{{route('datos_pareja_declarante.index')}}" class="btn btn-ninguno btn-secondary">Ninguno</a>si éste es su primer empleo.</strong>
                            </label>
                        </div>



                    @endif
                </div>

                <div class="text-center">
                    <br>
                    <a href="{{route("datos_empleo_declarante.index")}}" class="btn btn-sm btn-submit text-light">Ir a la sección anterior</a>
                    <a href="{{route("datos_pareja_declarante.index")}}" class="btn btn-sm btn-submit text-light">Ir a la siguiente sección</a>
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
                if (result.isConfirmed){
                    $(that).closest('form').submit();
                }
            });
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

