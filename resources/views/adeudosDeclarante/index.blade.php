@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h1>ADEUDOS / PASIVOS</h1>
            <h6>(A la fecha de ingreso)</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="text-center text-light">
                    <tr>
                        <th scope="col">Titular del adeudo:</th>
                        <th scope="col">Tipo de adeudo:</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($adeudos as $adeudo)
                    <tr>
                        @if($adeudo!= null)
                        <td>{{$adeudo->titularAdeudo->valor}}</td>
                            @if($adeudo->tipoAdeudo->id != 7)
                                 <td>{{$adeudo->tipoAdeudo->valor}}<br>
                            @else
                                 <td>{{$adeudo->especifique_adeudo}}<br>
                            @endif
                            <h8>
                                <strong>Número de cuenta o contrato:</strong>{{$adeudo->numero_cuenta}}
                                <br>
                                <strong>Saldo insoluto:</strong>{{$adeudo->saldo_insoluto}}
                            </h8>
                        </td>
                        <td class="py-2">
                            {!! Form::open(['action' => ['AdeudosPasivosDeclaranteController@destroy', $adeudo->id], 'method'=>'DELETE']) !!}
                            <div style="display: inline-block;">
                                <a href="{{route('adeudos.edit',[$adeudo])}}" class="btn btn-xs btn-warning">
                                    <i class="ion ion-edit"></i>
                                </a>
                                <button class="btn btn-xs btn-danger btn-borrar">
                                    <i class="ion ion-trash-a"></i>
                                </button>
                            </div>
                            {!! Form::close() !!}
                        </td>
                        @endif
                    </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
            <div class="text-center">
                <label style="margin-top:10px;">
                    <strong>Si desea registrar algún Adeudo/Pasivo pulse: </strong>
                    <a href="{{route('adeudos.create')}}" class="btn btn-sm btn-secondary">Agregar</a>
                    <strong>, de lo contrario vaya al siguiente apartado.</strong>
                </label>
            </div>
            <div class="text-center">
                <br>
                <a class="btn btn-submit text-light btn-sm">Ir a la sección anterior</a>
                <a class="btn btn-submit text-light btn-sm">Ir a la siguiente sección</a>
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