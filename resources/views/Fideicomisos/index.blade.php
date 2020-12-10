@extends('layouts.app')
@section('content')

<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <h3>FIDEICOMISOS</h3>
            <h6> (Hasta los últimos dos años)</h6>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead class="text-center text-light">
                <tr>
                    <th scope="col" width="20%">Titular de la participación</th>
                    <th scope="col" width="20%">Tipo de fideicomiso</th>
                    <th scope="col" width="40%">Información adicional</th>
                    <th scope="col" width="20%">Acciones</th></tr>
                </thead>
                <tbody class="text-center">
                @if($fideicomisos)
                    @foreach($fideicomisos as $fideicomiso)

                        <tr>
                            <td>
                                <center>{{$fideicomiso->tipoRelaciones->valor}}</center>
                            </td>
                            <td>
                                <center>{{$fideicomiso->tipoParticipacionFideicomisos->valor}}</center>
                            </td>
                            <td>
                                <center>
                                    <strong>Nombre del cliente:</strong>{{$fideicomiso->nombre_persona_fisica}} {{$fideicomiso->nombre_persona_moral}}  <br>
                                    <strong>Sector:</strong>{{$fideicomiso->sectores->valor}} <br>
                                    <strong>Lugar en donde se localiza el fideicomiso:</strong>{{$fideicomiso->LugarUbicaciones->valor}}
                                </center>
                            </td>
                            <td class="all">
                                {!! Form::open(['action' => ['FideicomisosController@destroy', $fideicomiso->id], 'method'=>'DELETE']) !!}
                                <div style="display: inline-block;">
                                    <a href="{{route('fideicomisos.edit',[$fideicomiso])}}" class="btn btn-xs btn-warning">
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
                @endif
                </tbody>
            </table>
                <div class="col-md-12">
                    <center>
                        Para adicionar información pulse <a class="btn btn-submit btn-sm text-light" href="{{route('fideicomisos.create')}}">Agregar</a>, de lo contrario vaya al siguiente apartado
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
