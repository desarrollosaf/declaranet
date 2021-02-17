@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <h3>INVERSIONES, CUENTAS BANCARIAS Y OTRO TIPO DE VALORES/ACTIVOS</h3>
            <h6 class="card-subtitle">(A LA FECHA DE INGRESO)</h6>
        </div>
            <div class="card-body">
                @if(count($inversiones))
                    <div class="table-responsive-lg">
                        <table class="table table-active table-striped">
                            <thead class="badge-primary">
                            <tr class="text-center">
                                <th scope="col">TIPO DE INVERSIÓN</th>
                                <th scope="col">INFORMACIÓN ADICIONAL</th>
                                <th scope="col">ACCIONES</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($inversiones as $inversion)
                                <tr class="text-center">
                                    @if($inversiones!= null)
                                        <td>{{$inversion->tipoInversion->valor}}</td>
                                        <td>
                                            <h8><strong>TITULAR:</strong>{{$inversion->nombreTitular->valor}}</h8><br>
                                            <h8><strong>MONTO ORIGINAL:</strong>{{$inversion->saldo_a_la_fecha}}</h8>
                                        </td>
                                        <td>
                                            {!! Form::open(['action' => ['InversionesDeclaranteController@destroy', $inversion->id], 'method'=>'DELETE']) !!}
                                            <div style="display: inline-block;">
                                                <a href="{{route("inversiones.edit",$inversion->id)}}" type="button" class="btn btn-warning ion ion-"><i class="ion ion-edit"></i></a>
                                                <button class="btn btn-danger ion ion- btn-borrar"><i class="ion ion-android-delete"></i></button>
                                            </div>
                                            {!! Form::close() !!}

                                            </div>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <center>
                            <strong><justify>Si desea registrar algún Inversion, Cuentas Bancarias y Otro tipo de valores/activos pulse: <a href="{{route('inversiones.create')}}" class="btn btn-sm btn-secondary">Agregar</a> , de lo contrario vaya al siguiente apartado.</strong></justify>
                        </center>
                    </div>
                @else
                    <span style="text-align: justify !important;">Deberá proporcionar la información de CADA UNA de las inversiones, cuentas bancarias y otro tipo de valores, que a la fecha de ingreso al cargo sean propiedad del Declarante, así como las de su pareja y/o dependientes económicos.</span>
                    <br>
                    <div class="alert alert-danger text-center" role="alert">
                        <div>
                            <strong>Para registrar información de Inversiones pulse: </strong><a href="{{route('inversiones.create')}}" class="btn btn-sm btn-secondary">Agregar</a><br>
                        </div>
                        <br>
                        <div class="mt-2">
                            <strong>Si no tiene inversiones, cuentas bancarias u otro tipo de valores, seleccione <a href="{{route('adeudos.index')}}" class="btn btn-ninguno btn-sm btn-secondary">Ninguno</a></strong>
                        </div>
                    </div>



                @endif


                <div class="text-center">
                    <br>
                    <a href="{{route("bienes_muebles.index")}}" class="btn btn-sm btn-submit text-light">Ir a la sección anterior</a>
                    <a href="{{route("adeudos.index")}}" class="btn btn-sm btn-submit text-light">Ir a la siguiente sección</a>
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
                if (result.isConfirmed){
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
                    text: 'No se registró información en este apartado. Si desea registrar Inversiones del Declarante pulse: Agregar, de lo contrario vaya al siguiente apartado.',
                    icon: 'warning',
                    cancelButtonText: 'Aceptar'
                });
            }
        });
    });
</script>
@endsection
