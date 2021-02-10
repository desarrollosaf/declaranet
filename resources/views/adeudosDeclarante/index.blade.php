@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <h3>ADEUDOS / PASIVOS</h3>
                <h6 class="card-subtitle">(A LA FECHA DE INGRESO)</h6>
            </div>

            <div class="card-body">
                @if(count($adeudos))
                    <div class="table-responsive-lg">
                        <table class="table table-active table-striped">
                            <thead class="badge-primary">
                            <tr class="text-center">
                                <th scope="col">TITULAR DEL ADEUDO</th>
                                <th scope="col">INFORMACIÓN ADICIONAL</th>
                                <th scope="col">ACCIONES</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($adeudos as $adeudo)
                                <tr class="text-center">
                                    @if($adeudo!= null)
                                        <td>{{$adeudo->titularAdeudo->valor}}</td>
                                        @if($adeudo->tipoAdeudo->id != 7)
                                            <td><strong>Tipo de adeudo: </strong>{{$adeudo->tipoAdeudo->valor}}<br>
                                        @else
                                            <td>{{$adeudo->especifique_adeudo}}<br>
                                        @endif
                                        <h8>
                                            <strong>Número de cuenta o contrato:</strong>{{$adeudo->numero_cuenta}}
                                            <br>
                                            <strong>Saldo insoluto: $</strong>{{$adeudo->saldo_insoluto}}
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
                            @endforeach
                            </tbody>
                        </table>
                        <center>
                            <strong>Si desea registrar algún Adeudo/Pasivo pulse: <a href="{{route('adeudos.create')}}" class="btn btn-sm btn-secondary">Agregar</a> , de lo contrario vaya al siguiente apartado.</strong>
                        </center>
                    </div>
                @else
                    <span style="text-align: left !important;">Deberá proporcionar la información de CADA UNO de los adeudos o pasivos, que a la fecha de ingreso al cargo tenga el Declarante, así como los de su pareja y/o dependientes económicos</span>
                    <br>
                    <div class="alert alert-danger text-center" role="alert">
                        <div>
                            <strong>Para registrar información de Adeudos pulse: </strong><a href="{{route('adeudos.create')}}" class="btn btn-sm btn-secondary ">Agregar</a><br>
                        </div>
                        <div class="mt-2">
                            <strong>Si no tiene Adeudos, seleccione <a href="{{route('adeudos.create')}}" class="btn btn-sm btn-secondary">Ninguno</a></strong>
                        </div>
                    </div>



                @endif


                <div class="text-center">
                    <br>
                    <a href="{{route("inversiones.index")}}" class="btn btn-sm btn-submit text-light">Ir a la
                        sección
                        anterior</a>
                    <a href="{{route("prestamos.index")}}" class="btn btn-sm btn-submit text-light">Ir a la
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
