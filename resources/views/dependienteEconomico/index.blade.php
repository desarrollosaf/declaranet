@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <h3>DATOS DEL DEPENDIENTE ECONÓMICO</h3>
        </div>
        <div class="card-body">
            <div class="col-md-12">
                @if(count($dependientes) > 0)
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
                <center>
                    <strong>Si desea registrar Experiencia Laboral pulse: <a href="{{route('datos_dependiente_declarante.create')}}" class="btn btn-sm btn-secondary">Agregar</a> , de lo contrario vaya al siguiente apartado.</strong>
                </center>
                @else
                <p class="text-justify">Deberá proporcionar la información de CADA UNA de las personas, familiares o no, cuya manutención dependa principalmente de los ingresos del Declarante.</p>
                                   <div class="alert alert-danger text-center" role="alert">
                        <div>
                            <strong> Para registrar información  de dependientes económicos pulse:</strong><a href="{{route("datos_dependiente_declarante.create")}}" type="button" class="btn btn-sm btn-secondary">Agregar</a>
                        </div>
                        <div class="mt-2">
                            <strong>Sí no tiene dependientes económicos, seleccione</strong><a href="{{route("ingreso_neto.index")}}" type="button" class="btn btn-sm btn-secondary">Ninguno</a>
                        </div>
                    </div>
                @endif
            </div>
            <br>
            <center>
            <a href="{{route("datos_pareja_declarante.create")}}" class="btn btn-submit text-light">Ir a la sección anterior</a>
            <a href="{{route("ingreso_neto.index")}}" class="btn btn-submit text-light">Ir a la siguiente sección</a>
            </center>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script>
$("#btnNinguno").on("click",function(){
    Swal.fire({
        text: '¿Esta seguro que no desea solicitar la información solicitada en este apartado?',
        icon: 'warning',
        showCancelButton: true,
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed){
            Swal.fire({
                text: 'No se registró información en este apartado. Si desea registrar Datos del Dependiente Económico pulse: Agregar, de lo contrario vaya al siguiente apartado.',
                icon: 'warning',
                cancelButtonText: 'Aceptar'
            });
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


</script>
@endsection
