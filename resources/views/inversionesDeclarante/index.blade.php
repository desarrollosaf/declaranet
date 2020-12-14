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
                                <th scope="col">Tipo de inversión</th>
                                <th scope="col">Titular</th>
                                <th scope="col">Información Adicional</th>
                                <th scope="col">Eliminar</th>
                                <th scope="col">Editar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($inversiones as $inversion)
                                <tr class="text-center">
                                    @if($inversiones!= null)
                                        <td>{{$inversion->tipoInversion->valor}}</td>
                                        <td>{{$inversion->nombreTitular->valor}}</td>
                                        <td>
                                            <h8><strong>Monto original:</strong>{{$inversion->saldo_a_la_fecha}}<br><strong>Saldo insoluto:</strong> 5</h8>
                                        </td>
                                        <td>
                                            {!! Form::open(['action' => ['InversionesDeclaranteController@destroy', $inversion->id], 'method'=>'DELETE']) !!}
                                            <button class="btn btn-danger ion ion- btn-borrar">
                                                <i class="ion ion-android-delete"></i>
                                            </button>
                                            {!! Form::close() !!}
                                        </td>
                                        <td>
                                            <a href="{{route("inversiones.edit",$inversion->id)}}" type="button"
                                               class="btn btn-warning ion ion-">
                                                <i class="ion ion-edit"></i>
                                            </a>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <center>
                            <strong>Si desea registrar algún Inversion, Cuentas Bancarias y Otro tipo de valores/activos pulse: <a
                                    href="{{route('inversiones.create')}}"
                                    class="btn btn-sm btn-secondary">Agregar</a> , de lo contrario vaya al siguiente
                                apartado.</strong>
                        </center>
                    </div>
                @else
                    <span style="text-align: left !important;">Deberá proporcionar la información de CADA UNA de las inversiones, cuentas bancarias y otro tipo de valores, que a la fecha de ingreso al cargo sean propiedad del Declarante, así como las de su pareja y/o dependientes económicos.</span>
                    <br>
                    <div class="alert alert-danger text-center" role="alert">
                        <label style="margin-top:10px;">
                            <strong>Para registrar información pulse: </strong><a
                                href="{{route('inversiones.create')}}"
                                class="btn btn-sm btn-secondary ">Agregar</a><br>
                            <strong>Si no tiene inversiones, cuentas bancarias u otro tipo de valores, seleccione <a href="{{route('inversiones.create')}}" class="btn btn-sm btn-secondary">Ninguno</a></strong>
                        </label>
                    </div>



                @endif


                <div class="text-center">
                    <br>
                    <a href="{{route("servidor_publico.index")}}" class="btn btn-sm btn-submit text-light">Ir a la
                        sección
                        anterior</a>
                    <a href="{{route("inversiones.index")}}" class="btn btn-sm btn-submit text-light">Ir a la
                        siguiente sección</a>
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
</script>
@endsection
