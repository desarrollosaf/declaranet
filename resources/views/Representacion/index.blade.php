x|@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <h3>REPRESENTACIÓN</h3>
            <br>
            <h6 class="card-subtitle">(Hasta los últimos dos años)</h6>
        </div>

    <div class="card-body">
        @if(count($representacion))

        <table class="table table-bordered table-striped">
            <thead class="text-center text-light">
                <tr>
                    <th scope="col" width="20%">TIPO DE REPRESENTACIÓN</th>
                    <th scope="col" width="20%">TITULAR</th>
                    <th scope="col" width="40%">INFORMACIÓN ADICIONAL</th>
                    <th scope="col" width="20%">ACCIONES</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach($representacion as $repre)
                <tr>
                    <th scope="col" width="20%">{{$repre->tipotipoParticipaciones->valor}}</th>
                    <th scope="col" width="20%">{{$repre->tipotitularParticipaciones->valor}}</th>
                    <th scope="col" width="40%">
            <center>
                <strong>Sector: </strong> {{$repre->tipoSector->valor}} <br>
                <strong>Lugar donde se ubica: </strong> {{$repre->lugarUbicacion->valor}}
            </center>
            </th>
            <td class="all">
                {!! Form::open(['action' => ['RepresentacionController@destroy', $repre->id], 'method'=>'DELETE']) !!}
                <div style="display: inline-block;">
                    <a href="{{route('representacion.edit',[$repre])}}" class="btn btn-xs btn-warning">
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
        <center><label style="margin-top:10px;">Para adicionar información pulse:<a href="{{route('representacion.create')}}" class="btn btn-sm btn-secondary">Agregar</a>, de lo contrario vaya a la siguiente sección.</label> </center>


        @else

            <div class="alert alert-danger text-center" role="alert">
            <div>
                Para registrar información de Representación pulse: <a class="btn btn-sm btn-secondary" href="{{route('representacion.create')}}">Agregar</a>
            </div>
            <div class="mt-2">
                Si no tiene participación en empresas, sociedades o asociaciones, seleccione: <a href="{{route('representacion.create')}}" class="btn btn-ninguno btn-secondary">Ninguno</a><br>
            </div>
        </div>
    </div>

    @endif


    <div class="text-center">
        <a href="{{route("apoyo_beneficio.index")}}" class="btn btn-sm btn-submit text-light">Ir a la sección anterior</a>
        <a href="{{route("clientes_principales.index")}}" class="btn btn-sm btn-submit text-light">Ir a la siguiente sección</a>
    </div>
    <br>
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
                    text: 'No se registró información en este apartado. Si desea registrar Representaciones pulse: Agregar, de lo contrario vaya al siguiente apartado.',
                    icon: 'warning',
                    cancelButtonText: 'Aceptar'
                });
            }
        });
    });
</script>
@endsection
