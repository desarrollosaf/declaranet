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
                                <th scope="col" align="center">TITULAR BIEN</th>
                                <th scope="col" align="center">DESCRIPCIÓN</th>
                                <th scope="col" align="center">ACCIONES</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($bienesMuebles as $item)
                                <tr>
                                    <td >{{$item->TitularBien->valor}}</td>
                                    @if($item->descripcion_bien)
                                        <td >{{$item->descripcion_bien}}</td>
                                    @else
                                        <td >{{$item->especifique}}</td>
                                    @endif
                                    <td class="all">
                                        {!! Form::open(['action' => ['BienesMueblesController@destroy', $item->id], 'method'=>'DELETE']) !!}
                                        <div style="display: inline-block;">
                                            <a href="{{route("bienes_muebles.edit",$item->id)}}" type="button" class="btn btn-warning btn-sm ion ion-edit"></a>
                                            <button class="btn btn-danger btn-sm ion ion-android-delete btn-borrar"></button>
                                        </div>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <center>
                            <strong>Si desea registrar Bienes Muebles pulse: <a href="{{route('bienes_muebles.create')}}" class="btn btn-sm btn-secondary">Agregar</a> , de lo contrario vaya al siguiente apartado.</strong>
                        </center>
                    </div>
                @else
                    <p style="text-align : justify !important;"><strong>Se consideran bienes muebles lo
                            siguiente:</strong>
                    <ol type=”A”>
                        <li>Menaje de casa (muebles y accesorios de casa).<br> El cual será declarado solamente si es mayor a 1200 UMAS que nos da la cantidad de $107,544.00 MxN.(Ciento siete mil quinientos cuarenta y cuatro pesos mexicanos)</li>
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
                    <div class="alert alert-danger text-center btn-group-sm" role="alert">
                        <div>
                            <strong>Para registrar información de bienes muebles pulse: </strong><a href="{{route('bienes_muebles.create')}}" class="btn btn-sm btn-secondary text-light">Agregar</a>
                        </div>
                        <br>
                        <div class="mt-2">
                            <strong>Sí no tiene bienes muebles, seleccione<a href="{{route('inversiones.index')}}" class="btn btn-ninguno btn-sm btn-secondary text-light">Ninguno</a></strong>
                        </div>
                    </div>
                @endif
                <div class="text-center mt-2">
                    <a href="{{route("vehiculos.index")}}" class="btn btn-sm btn-submit text-light">Ir a la sección anterior</a>
                    <a href="{{route("inversiones.index")}}" class="btn btn-sm btn-submit text-light">Ir a la siguiente sección</a>
                </div>
            </div>
        </div>

        @endsection
        @section('scripts')
            <script type="text/javascript">
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

                $('.btn-ninguno').on('click', function (e) {
                    let that = this;
                    e.preventDefault();
                    Swal.fire({
                        title: '¿Está seguro que no desea registrar la información solicitada en este apartado?',
                        icon: 'warning',
                        showCancelButton: true,
                        cancelButtonText: 'Cancelar'
                    }).then((result) => {
                        if (result.isConfirmed){
                            Swal.fire({
                                text: 'No se registró información en este apartado. Si desea registrar Bienes Muebles del Declarante pulse: Agregar, de lo contrario vaya al siguiente apartado.',
                                icon: 'warning',
                                cancelButtonText: 'Aceptar'
                            });
                        }
                    });
                });
            </script>
@endsection
