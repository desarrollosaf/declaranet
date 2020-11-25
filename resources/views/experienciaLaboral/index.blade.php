@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <h1>Experiencia Laboral</h1>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped table-hover" style="border-collapse: collapse;">
                        <thead style="background-color: #682244;" class="text-light">
                            <tr>
                                <th><center>Nivel</center></th>
                                <th><center>Información adicional</center></th>
                                <th><center>Acciones</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($experiencias as $experiencia)
                            <tr>
                                <td><center>{{$experiencia->ambito_sector->valor}}</center></td>
                                @if($experiencia->ambito_sector_id == 1)
                                <td><center>
                                    <strong>Nombre:</strong> {{$experiencia->ente_publico}} <br>
                                    <strong>Cargo/Puesto:</strong> {{$experiencia->puesto}} {{$experiencia->cargo_comision}}<br>
                                    <strong>Periodo:</strong>{{$experiencia->fecha_ingreso}}
                                    {{$experiencia->fecha_egreso}}<br>
                                    </center>
                                </td>
                                @else
                                <td><center>
                                    <strong>Nombre:</strong> {{$experiencia->ente_publico}} <br>
                                    <strong>Cargo/Puesto:</strong> {{$experiencia->puesto}} {{$experiencia->cargo_comision}}<br>
                                    <strong>Periodo:</strong>{{$experiencia->fecha_ingreso}}
                                    {{$experiencia->fecha_egreso}}<br>
                                    </center>
                                </td>
                                @endif
                                <td class="all">
                                    {!! Form::open(['action' => ['ExperienciaLaboralController@destroy', $experiencia->id], 'method'=>'DELETE']) !!}
                                    <div style="display: inline-block;">
                                        <a href="{{route('experiencia_laboral.edit',[$experiencia])}}" class="btn btn-xs btn-warning">
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
                </div>
                <div class="col-md-12">
                    <center>
                        Si deseas registrar experiencia laboral pulse <a class="btn btn-submit btn-sm text-light" href="{{route('experiencia_laboral.create')}}">Agregar</a>, de lo contrario vaya al siguiente apartado
                    </center>
                </div>
                <br><br>
                 <div class="col-md-12">
                    <center>
                        <button class="btn btn-submit btn-sm text-light">Ir a la sección anterior</button>
                        <button class="btn btn-submit btn-sm text-light">Ir a la siguiente sección</button>
                    </center>
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
            if (result.isConfirmed){
                $(that).closest('form').submit();
            }
        });
    });
</script>
@endsection

