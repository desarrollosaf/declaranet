@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header bg-info  border-0 py-3 d-flex align-items-center" style="background-color:#F1F1F1 !important;">
                <div>
                    <h4>APOYOS O BENEFICIOS PÚBLICOS</h4>
                    <h6 class="card-subtitle">(HASTA LOS DOS ÚLTIMOS AÑOS)</h6>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <div class="card">

                        </div>

                        <!-- Cuerpo del documento -->



                        <div class="card-body">
                            @if(count($apoyos))
                                <div class="table-responsive-lg">
                                    <table class="table table-active table-striped">
                                        <thead class="badge-primary">
                                        <tr class="text-center">
                                            <th scope="col">Beneficiario</th>
                                            <th scope="col">Nombre del programa</th>
                                            <th scope="col">Información Adicional</th>
                                            <th scope="col">Eliminar</th>
                                            <th scope="col">Editar</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($apoyos as $apoyo)
                                            <tr class="text-center">
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
                                    <center>
                                        <strong>Para adicionar información pulse:<a
                                                href="{{route('apoyo_beneficio.create')}}"
                                                class="btn btn-sm btn-secondary">Agregar</a> , de lo contrario vaya al siguiente
                                            apartado.</strong>
                                    </center>
                                </div>
                            @else
                                Es la contribución monetaria o en especie que otorga un Ente Público al Declarante, pareja y/o dependientes económicos. El apoyo en especie se refiere a cualquier contribución, utilizando bienes, servicios o beneficios de naturaleza diferente al dinero.
                                <br>Deberá señalar la información de CADA UNO de los apoyos o beneficios públicos recibidos por el Declarante, pareja y/o dependientes económicos.
                                <div class="alert alert-danger text-center" role="alert">
                                    <label style="margin-top:10px;">
                                        <strong>Para registrar información pulse: </strong><a
                                            href="{{route('apoyo_beneficio.create')}}"
                                            class="btn btn-sm btn-secondary ">Agregar</a><br>
                                        <strong>Si no tiene apoyos o beneficios públicos, seleccione <a href="{{route('prestamos.create')}}" class="btn btn-sm btn-secondary">Ninguno</a></strong>
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
