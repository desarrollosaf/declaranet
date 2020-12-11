@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <h3>DATOS DEL DEPENDIENTE ECONÓMICO</h3>
        </div>
        <div class="card-body">
            <div class="col-md-12">
                <table class="table table-bordered table-striped table-hover" style="border-collapse: collapse;">
                    <thead style="background-color: #682244;" class="text-light">
                    <tr>
                        <td>Nombre</td>
                        <td>Primer Apellido</td>
                        <td>Segundo Apellido</td>
                        <td>CURP</td>
                        <td>Parentesco</td>
                        <td>Acciones</td>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($dependientes as $dependiente)
                        <tr>
                            <td>{{$dependiente->nombre}}</td>
                            <td>{{$dependiente->primer_apellido}}</td>
                            <td>{{$dependiente->segundo_apellido}}</td>
                            <td>{{$dependiente->curp}}</td>
                            <td>{{$dependiente->relacion->valor}}</td>
                            <td>
                                {!! Form::open(['action' => ['DatosDependienteEconomicoController@destroy', $dependiente->id], 'method'=>'DELETE']) !!}
                                <div style="display: inline-block;">
                                    <a href="{{route('datos_dependiente_declarante.edit',[$dependiente])}}" class="btn btn-xs btn-warning">
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
            <p class="text-justify">Deberá proporcionar la información de CADA UNA de las personas, familiares o no, cuya manutención dependa principalmente de los ingresos del Declarante.</p>
            <div class="alert alert-danger text-center" role="alert">
                Para registrar información pulse:
                <a href="{{route("datos_dependiente_declarante.create")}}" type="button" class="btn btn-sm btn-secondary">
                    Agregar
                </a>
                <br>
                Sí no tiene dependientes económicos, seleccione
                <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#exampleModal">
                    Ninguno
                </button>
            </div>
            <br>
            <a href="" class="btn btn-submit float-left text-light">Ir a la sección anterior</a>
            <a href="" class="btn btn-submit float-right text-light">Ir a la siguiente sección</a>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script>



</script>
@endsection
