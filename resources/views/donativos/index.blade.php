@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <h3>DONATIVOS</h3>
                <h6> (Hasta los últimos dos años)</h6>
            </div>
            <div class="card-body">
                @if(count($donativos))
                    <table class="table table-bordered table-striped">
                        <thead class="text-light">
                        <tr>
                            <th scope="col" width="20%">Descripción</th>
                            <th scope="col" width="20%">Monto</th>
                            <th scope="col" width="20%">Editar</th>
                            <th scope="col" width="20%">Eliminar</th>
                        </thead>
                        <tbody>
                          @foreach ($donativos as $item)
                            <tr>
                              <td>{{$item->especifique_donativo}}</td>
                              <td>{{$item->monto_donativo}}</td>
                              <td>
                                  <a href="{{route("donativos.edit",$item->id)}}" type="button"
                                     class="btn btn-warning btn-sm ion ion-edit"></a>
                              </td>
                              <td>
                                  {!! Form::open(['action' => ['DonativosController@destroy', $item->id], 'method'=>'DELETE']) !!}
                                  <div style="display: inline-block;">
                                      <button
                                          class="btn btn-danger btn-sm ion ion-android-delete btn-borrar"></button>
                                  </div>
                                  {!! Form::close() !!}
                              </td>
                            </tr>
                          @endforeach
                          <tr><tr>
                        </tbody>
                    </table>
                    <center>
                        <strong>Para adicionar información pulse <a href="{{route('donativos.create')}}" class="btn btn-sm btn-secondary">Agregar</a> </strong>
                    </center>
                @else
                    <div class="alert alert-danger text-center" role="alert">
                        <div class="col-md-12">
                            <center>
                                <strong>Para adicionar información de donativos pulse: <a class="btn btn-sm btn-secondary" href="{{route('donativos.create')}}">Agregar</a></strong>
                                <br><br>
                                <strong>Si no tiene donativos, seleccione  <a href="{{route('intereses_personales.index')}}" class="btn btn-ninguno btn-sm btn-secondary">Ninguno</a></strong>
                            </center>
                        </div>
                    </div>
                @endif
                <br><br>
                <div class="col-md-12">
                    <div class="text-center">
                        <br>
                        <a href="{{route("fideicomisos.index")}}" class="btn btn-sm btn-submit text-light">Ir a la sección anterior</a>
                        <a href="{{route("intereses_personales.index")}}" class="btn btn-sm btn-submit text-light">Ir a la siguiente sección</a>
                    </div>
                </div>
            </div>
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
                if (result.isConfirmed){
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
                        text: 'No se registró información en este apartado. Si desea registrar Donativos del Declarante pulse: Agregar, de lo contrario vaya al siguiente apartado.',
                        icon: 'warning',
                        cancelButtonText: 'Aceptar'
                    });
                }
            });
        });
    </script>
@endsection
