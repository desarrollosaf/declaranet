@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h2>INVERSIONES, CUENTAS BANCARIAS Y OTRO TIPO DE VALORES/ACTIVOS</h2>
            <h6>(A la fecha de ingreso)</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="text-center text-light">
                    <tr>
                        <th scope="col">Tipo de inversión</th>
                        <th scope="col">Titular</th>
                        <th scope="col">Información Adicional</th>
                        <th scope="col">Eliminar</th>
                        <th scope="col">Editar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($inversiones as $inversion)
                    <tr>
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
            </div>
            <div class="text-center">
                <label class="mt-5">Sí desea registrar algún Inversion, Cuentas Bancarias y Otro tipo de
                    valores/activos pulse:<a href="{{route('inversiones.create')}}" class="btn btn-sm btn-secondary">Agregar</a>, de lo
                    contrario vaya al siguiente apartado.
                </label>
           
            </div>
            <div class="text-center">
                <br>
                <a href="" class="btn btn-submit text-light btn-sm">Ir a la sección anterior</a>
                <a href="" class="btn btn-submit text-light btn-sm">Ir a la siguiente sección</a>
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