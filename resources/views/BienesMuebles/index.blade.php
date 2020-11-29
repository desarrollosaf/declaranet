@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3>BIENES MUEBLES</h3>
            <h5 class="card-subtitle">(A la fecha de ingreso)</h5>
        </div>
        <div class="card-body">
            <div class='text-center'>
                @if(count($bienesMuebles))
                    <div class="table-responsive-lg">
                        <table class="table table-active table-striped">
                            <thead class="badge-primary">
                            <tr>
                                <th scope="col">Titular bien</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Opciones</th>
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
                                           class="btn btn-warning ion ion-">
                                            <i class="ion ion-edit"></i>
                                        </a>
                                        <a href="{{route("bienes_muebles.destroy",$item->id)}}" type="button"
                                           class="btn btn-danger ion ion-">
                                            <i class="ion ion-android-delete"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <label style="margin-top:10px;">
                        <h6>No se registro información en este apartado</h6>.
                    </label>
                @endif
            </div>
            <div class="text-center">
                <label style="margin-top:10px;">
                    <strong>Si desea registrar algún Bien Mueble pulse: </strong><a
                        href="{{route('bienes_muebles.create')}}" class="btn btn-sm btn-secondary">Agregar</a> ,<strong>
                        de lo contrario vaya al siguiente apartado</strong></h6>.
                </label>
            </div>
            <div class="text-center">
                <br>
                <a href="{{route("servidor_publico.index")}}" class="btn btn-sm btn-submit text-light">Ir a la sección
                    anterior</a>
                <a href="{{route("inversiones.index")}}" class="btn btn-sm btn-submit text-light">Ir a la
                    siguiente sección</a>
            </div>
        </div>
    </div>
@endsection
