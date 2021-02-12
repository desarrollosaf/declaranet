@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <h3>BIENES INMUEBLES</h3>
            <h6 class="card-subtitle">(A LA FECHA DE INGRESO)</h6>
        </div>
        <div class="card-body">

            @if(count($bienes))
            <div class="table-responsive-lg">
                <table class="table table-active table-striped">
                    <thead class="badge-primary">
                    <tr>
                        <th> <center>Tipo de bien</center> </th>
                        <th> <center>Titular</center> </th>
                        <th> <center>Acciones</center> </th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($bienes as $bien)
                        <tr>
                            <td scope="col" width="40%" align="center">{{$bien->tipoInmueble->valor}}</td>
                            <td scope="col" width="40%" align="center">{{$bien->titular->valor}}</td>
                            <td class="all" width="40%" align="center">
                                {!! Form::open(['action' => ['BienesInmueblesController@destroy', $bien->id], 'method'=>'DELETE']) !!}
                                <div style="display: inline-block;">
                                    <a href="{{route('bienes_inmuebles.edit',[$bien])}}" class="btn btn-xs btn-warning">
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
                    <strong>Si desea registrar Experiencia Laboral pulse: <a href="{{route('bienes_inmuebles.create')}}" class="btn btn-sm btn-secondary">Agregar</a> , de lo contrario vaya al siguiente apartado.</strong>
                </center>
            </div>
            @else
            <span style="text-align: left !important;">Deberá proporcionar la información de CADA UNO de los bienes inmuebles, que a la fecha de ingreso al cargo sean propiedad del Declarante, así como los de su pareja y/o dependientes económicos.</span>
            <br>
            <div class="alert alert-danger text-center" role="alert">
                    <div>
                        <strong>Para registrar información pulse: </strong><a href="{{route('bienes_inmuebles.create')}}" class="btn btn-sm btn-secondary text-light">Agregar</a><br>
                    </div>
                    <div class="mt-2">
                        <strong>Si no tiene bienes inmuebles, seleccione <a href="{{route('vehiculos.index')}}" class="btn btn-sm btn-secondary text-light">Ninguno</a></strong>
                    </div>
            </div>



            @endif


            <div class="text-center">
                <br>
                <a href="{{route("servidor_publico.index")}}" class="btn btn-sm btn-submit text-light">Ir a la sección anterior</a>
                <a href="{{route("vehiculos.index")}}" class="btn btn-sm btn-submit text-light">Ir a la siguiente sección</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
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
            if (result.isConfirmed) {
                Swal.fire({
                    text: 'No se registró información en este apartado. Si desea registrar un Bien Inmueble pulse: Agregar, de lo contrario vaya al siguiente apartado.',
                    icon: 'warning',
                    cancelButtonText: 'Aceptar'
                });
            }
        });
    });
</script>
@endsection
