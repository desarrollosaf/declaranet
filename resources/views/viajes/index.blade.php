@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <h3>VIAJES</h3>
                <h6> (HASTA LOS DOS ÚLTIMOS AÑOS)</h6>
            </div>
            <div class="card-body">
                @if(count($viajes))
                    <table class="table table-bordered table-striped">
                        <thead class="text-light">
                        <tr>
                            <th scope="col">NOMBRE</th>
                            <th scope="col">RFC</th>
                            <th scope="col">MOTIVO DEL VIAJE</th>
                            <th scope="col">MONTO DEL VIAJE</th>
                            <th scope="col">ACCIONES</th>
                        </thead>
                        <tbody>
                            <tbody class="text-uppercase">
                          @foreach($viajes as $viajes)
                         
                          <tr>
                              <td>{{$viajes->nombre_pariente}} {{$viajes->primer_apellido}} {{$viajes->segundo_apellido}}</td>
                              <td>{{$viajes->rfc_pariente}}</td>
                              <td>{{$viajes->motivo_viaje->valor}}</td>
                              <td>{{$viajes->monto_viaje}}</td>
                              <td>
                                  <a href="{{route("viajes.edit",$viajes->id)}}" type="button"
                                     class="btn btn-warning btn-sm ion ion-edit"></a>
                                  {!! Form::open(['action' => ['ViajesController@destroy', $viajes->id], 'method'=>'DELETE']) !!}
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
               
                          <tr><tr>
                        </tbody>
                    </table>
                    <center>
                        <strong>Para adicionar información pulse <a href="{{route('viajes.create')}}" class="btn btn-sm btn-secondary">Agregar</a> </strong>
                    </center>
                @else
                    <div class="alert alert-danger text-center" role="alert">
                        <div class="col-md-12">
                            <center>
                                <strong>Para adicionar información de viajes pulse: <a class="btn btn-sm btn-secondary" href="{{route('viajes.create')}}">Agregar</a></strong>
                                <br>
                                <br>
                                <strong>Si no tiene viajes, seleccione  <a href="{{route('viajes.index')}}" class="btn btn-sm btn-ninguno btn-secondary">Ninguno</a></strong>
                            </center>
                        </div>
                    </div>
                @endif
                <br><br>
                <div class="col-md-12">
                    <div class="text-center">
                        <br>
                        <a href="{{route("participaciones.index")}}" class="btn btn-sm btn-submit text-light">Ir a la sección anterior</a>
                        <a href="{{route("viajes.index")}}" class="btn btn-sm btn-submit text-light">Ir a la siguiente sección</a>
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
                        text: 'No se registró información en este apartado. Si desea registrar Viajes del Declarante pulse: Agregar, de lo contrario vaya al siguiente apartado.',
                        icon: 'warning',
                        cancelButtonText: 'Aceptar'
                    });
                }
            });
        });
    </script>
@endsection

