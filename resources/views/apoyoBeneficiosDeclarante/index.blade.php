@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h1>APOYOS O BENEFICIOS PÚBLICOS</h1>
            <h6>(Hasta los últimos dos años)</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="text-center text-light">
                    <tr>
                        <th scope="col">Beneficiario</th>
                        <th scope="col">Nombre del programa</th>
                        <th scope="col">Información Adicional</th>
                        <th scope="col">Eliminar</th>
                        <th scope="col">Editar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($apoyos as $apoyo)
                    <tr>
                        @if($apoyos!= null)
                            @if($apoyo->tipoBeneficiario->id != 23)
                                <td>{{$apoyo->tipoBeneficiario->valor}}</td>
                            @else
                                <td>{{$apoyo->especifique_titular}}</td>
                            @endif
                        <td>{{$apoyo->nombre_programa}}</td>
                        <td>
                            <h8><strong>Institución:</strong>{{$apoyo->nombre_institucion}}<br>
                                <strong>Nivel:</strong> {{$apoyo->nivelGobierno->valor}}<br>
                                @if($apoyo->tipoApoyo->id != 4)
                                     <strong>Tipo de apoyo:</strong> {{$apoyo->tipoApoyo->valor}}
                                @else
                                     <strong>Tipo de apoyo:</strong>{{$apoyo->especifique_apoyo}}
                                @endif
                            </h8>
                        </td>
                        <td>
                            {!! Form::open(['action' => ['ApoyoBeneficioController@destroy', $apoyo->id], 'method'=>'DELETE']) !!}
                                <button class="btn btn-danger ion ion- btn-borrar">
                                  <i class="ion ion-android-delete"></i>
                                </button>
                            {!! Form::close() !!}
                           
                        </td>
                        <td>
                            <a href="{{route("apoyo_beneficio.edit",$apoyo->id)}}" type="button"
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
                <label class="mt-5">Para adicionar información pulse:<a href="{{route('apoyo_beneficio.create')}}" class="btn btn-sm btn-secondary">Agregar</a>, de lo
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