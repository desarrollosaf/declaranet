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
                            <th scope="col">TIPO OPERACIÓN</th>
                            <th scope="col">ACCIONES</th>
                        </thead>
                        <tbody>
                            <tbody class="text-uppercase">
                          @foreach($viajes as $viajes)
                         
                          <tr>
                              <td>{{$viajes->nombre_pariente}} {{$viajes->primer_apellido}} {{$viajes->segundo_apellido}}</td>
                              <td>{{$viajes->rfc_pariente}}</td>
                              <td>{{$viajes->motivo_viaje->valor}}</td>
                              <td>$ {{number_format($viajes->monto_viaje, 2)}} {{$viajes->tipoMonedas->clave}}</td>
                              <td>{{$viajes->tipoOperaciones->valor}}</td>                              
                              <td>
                                @if($viajes->tipo_operacion_id != 4)
                                  {!! Form::open(['action' => ['ViajesController@destroy', $viajes->id], 'method'=>'DELETE']) !!}
                                  <div style="display: inline-block;">
                                    <a href="{{route("viajes.edit",$viajes->id)}}" type="button"
                                     class="btn btn-warning btn-sm ion ion-edit"></a>
                                      <button type="button" data-enviado = "{{$viajes->enviado}}"
                                          class="btn btn-danger btn-sm ion ion-android-delete btn-borrar"></button>
                                  </div>
                                  {!! Form::close() !!}
                                  @endif
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
    <div class="modal" tabindex="-1" role="dialog" id="modal_baja">
        <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Baja</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    {!! Form::open(['action' => ['ViajesController@destroy', 1], 'method'=>'DELETE','id' => 'frmBorrar']) !!}
                    <input name="id" type="hidden" id='id_registro'>
                    <div class="modal-body">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <strong>Motivo de baja</strong>
                                {!! Form::select('motivo_baja_id',$motivos, [] ,['class'=>'form-control text-uppercase','placeholder' => 'SELECCIONA UNA OPCIÓN' ,'id' => 'motivo_baja_id','required' => true]) !!}
                                <span class="text-danger" style="font-size:150%"></span>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-sm btn-submit text-light">Eliminar</button>
                        <a class="btn btn-secondary" data-dismiss="modal">Close</a>
                    </div>
                    {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).on('click', '.btn-borrar', function (e) {
                var id = $(this).data('id');
                var enviado = $(this).data('enviado');
                if(enviado){
                    $("#id_registro").val(id);
                    $("#modal_baja").modal("show");
                } else {
                  Swal.fire({
                    title: '¿Está seguro?',
                    text: 'Al oprimir el botón de aceptar se eliminará el registro',
                    icon: 'warning',
                    showCancelButton: true,
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $(this).closest('form').submit();
                    }
                });  
                }
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

