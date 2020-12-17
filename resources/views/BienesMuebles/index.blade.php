@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <h3>BIENES MUEBLES</h3>
                <h6 class="card-subtitle">(A LA FECHA DE INGRESO)</h6>
            </div>
            <div class="card-body">
                @if(count($bienesMuebles))
                    <div class="table-responsive-lg">
                        <table class="table table-active table-striped text-uppercase">
                            <thead class="badge-primary">
                            <tr>
                                <th scope="col">Titular bien</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Eliminar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($bienesMuebles as $item)
                                <tr>
                                    <td>{{$item->TitularBien->valor}}</td>
                                    @if($item->descripcion_bien)
                                        <td>{{$item->descripcion_bien}}</td>
                                    @else
                                        <td>{{$item->especifique}}</td>
                                    @endif
                                    <td>
                                        <a href="{{route("bienes_muebles.edit",$item->id)}}" type="button"
                                           class="btn btn-warning btn-sm ion ion-edit"></a>
                                    </td>
                                    <td>
                                        {!! Form::open(['action' => ['BienesMueblesController@destroy', $item->id], 'method'=>'DELETE']) !!}
                                        <div style="display: inline-block;">
                                            <button
                                                class="btn btn-danger btn-sm ion ion-android-delete btn-borrar"></button>
                                        </div>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <center>
                            <strong>Si desea registrar algún Dato de Vehiculo pulse: <a
                                    href="{{route('vehiculos.create')}}"
                                    class="btn btn-sm btn-secondary">Agregar</a> , de lo contrario vaya al siguiente
                                apartado.</strong>
                        </center>
                    </div>
                @else
                    <p style="text-align : justify; !important;">Se consideran bienes muebles lo siguiente:
                    <ol type=”A”>
                        <li>Menaje de casa (muebles y accesorios de casa)</li>
                        <li>Aparatos electrónicos y electrodomésticos (PC, tableta electrónica, teléfono celular,
                            televisión, refrigerador, lavadora, etc.)
                        </li>
                        <li>Colecciones (libros, sellos, etc.)</li>
                        <li>Obras de arte</li>
                        <li>Otros (animales, antigüedades, etc.)</li>
                    </ol>

                    Deberá proporcionar la información de CADA UNO de los bienes muebles, que a la fecha de ingreso al
                    cargo sean propiedad del Declarante, así como los de su pareja y/o dependientes económicos.

                    </p>
                    <div class="alert alert-danger text-center" role="alert">
                        <label style="margin-top:10px;">
                            <strong>Para registrar información pulse: </strong><a
                                href="{{route('bienes_muebles.create')}}"
                                class="btn btn-sm btn-secondary ">Agregar</a><br>
                            <strong>Si no tiene bienes muebles, seleccione <a href="{{route('vehiculos.index')}}"
                                                                              class="btn btn-sm btn-secondary">Ninguno</a></strong>
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
                });
            </script>
@endsection
