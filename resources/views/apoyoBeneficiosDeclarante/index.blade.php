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
                        <th scope="col">Institución</th>
                        <th scope="col">Nivel</th>
                        <th scope="col">Tipo de apoyo</th>
                        <th scope="col">Eliminar</th>
                        <th scope="col">Editar</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                       
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="{{route("apoyo_beneficio.create")}}" type="button"
                                class="btn btn-danger ion ion-">
                                 <i class="ion ion-android-delete"></i>
                             </a>
                        </td>
                        <td>
                            <a href="{{route("apoyo_beneficio.create")}}" type="button"
                                class="btn btn-warning ion ion-">
                                 <i class="ion ion-edit"></i>
                             </a>
                        </td>
                     
                    </tr>
                    
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
