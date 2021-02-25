@extends('layouts.app')
@section('content')
<div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <h3>PARTICIPACIONES</h3>
                <h6> (Hasta los últimos dos años)</h6>
            </div>
            <div class="card-body">
                @if(count($participaciones))
                    <table class="table table-bordered table-striped">
                        <thead class="text-light">
                        <tr>
                            <th scope="col">NOMBRE</th>
                            <th scope="col">RFC</th>
                            <th scope="col">FECHA DE NACIMIENTO</th>
                            <th scope="col">PARTCICIPACION ECONOMICA</th>
                            <th scope="col">INSTITUCIÓN</th>
                            <th scope="col">F/A</th>
                            <th scope="col">ACCIONES</th>
                        </thead>
                        <tbody>
                            <tbody class="text-uppercase">
                          @foreach($participaciones as $participacion)
                          
                          <tr>
                              <td>{{$participacion->nombre}} {{$participacion->primer_apellido}} {{$participacion->segundo_apellido}}</td>
                              <td>{{$participacion->rfc}}</td>
                              <td>{{$participacion->fecha_nacimiento}}</td>
                              <td>{{$participacion->participacion_economica->valor}}</td>
                              <td>{{$participacion->institucion->nombre}}</td>
                              <td>{{$participacion->frecuencia_anual}}</td>
                              <td>
                                  <a href="{{route("participaciones.edit",$participacion->id)}}" type="button"
                                     class="btn btn-warning btn-sm ion ion-edit"></a>
                                  {!! Form::open(['action' => ['ParticipacionDeclaracionController@destroy', $participacion->id], 'method'=>'DELETE']) !!}
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
                        <strong>Para adicionar información pulse <a href="{{route('participaciones.create')}}" class="btn btn-sm btn-secondary">Agregar</a> </strong>
                    </center>
                @else
                    <div class="alert alert-danger text-center" role="alert">
                        <div class="col-md-12">
                            <center>
                                <strong>Para adicionar información de participaciones pulse: <a class="btn btn-sm btn-secondary" href="{{route('participaciones.create')}}">Agregar</a></strong>
                                <br><br>
                                <strong>Si no tiene participaciones, seleccione  <a href="{{route('viajes.index')}}" class="btn btn-ninguno btn-sm btn-secondary">Ninguno</a></strong>
                            </center>
                        </div>
                    </div>
                @endif
                <br><br>
                <div class="col-md-12">
                    <div class="text-center">
                        <br>
                        <a href="{{route("intereses_personales.index")}}" class="btn btn-sm btn-submit text-light">Ir a la sección anterior</a>
                        <a href="{{route("viajes.index")}}" class="btn btn-sm btn-submit text-light">Ir a la siguiente sección</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
<script>
$("#btn-ninguno").on("click",function(){
    Swal.fire({
        text: '¿Está seguro que no desea solicitar la información solicitada en este apartado?',
        icon: 'warning',
        showCancelButton: true,
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed){
            Swal.fire({
                text: 'No se registró información en este apartado. Si desea registrar Participaciones pulse: Agregar, de lo contrario vaya al siguiente apartado.',
                icon: 'warning',
                cancelButtonText: 'Aceptar'
            });
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
                        text: 'No se registró información en este apartado. Si desea registrar Participaciones del Declarante pulse: Agregar, de lo contrario vaya al siguiente apartado.',
                        icon: 'warning',
                        cancelButtonText: 'Aceptar'
                    });
                }
            });
        });

</script>
@endsection
