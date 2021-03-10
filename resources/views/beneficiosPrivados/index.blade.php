@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <h3>BENEFICIOS PRIVADOS</h3>
            <h6 class="card-subtitle">(HASTA LOS DOS ÚLTIMOS AÑOS)</h6>
        </div>
        <div class="card-body">
            @if(count($beneficios))
                <div class="table-responsive-lg">
                    <table class="table table-active table-striped">
                        <thead class="badge-primary">
                        <tr class="text-center">
                            <th scope="col" width="20%">TIPO DE BENEFICIO</th>
                            <th scope="col" width="20%">BENEFICIARIO</th>
                            <th scope="col" width="40%">INFORMACIÓN ADICIONAL</th>
                            <th scope="col" width="40%">TIPO OPERACIÓN</th>
                            <th scope="col" width="20%">ACCIONES</th></tr>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($beneficios as $beneficio)
                            <tr>
                                <td align="center">{{$beneficio->tipoBeneficio->valor}}</td>
                                <td align="center">{{$beneficio->beneficiariosP->valor}}</td>
                                <td>
                                    <center>
                                        <strong>SECTOR: </strong> {{strtoupper($beneficio->sectoresP->valor)}} <br>
                                        <strong>NOMBRE DEL OTORGANTE:</strong> {{strtoupper($beneficio->nombre_otorgante)}} {{strtoupper($beneficio->razon_social_otorgante)}}<br>
                                        <strong>FORMA DE RECEPCIÓN:</strong> {{strtoupper($beneficio->formaRecepcion->valor)}}
                                    </center>
                                </td>
                                <td align="center">{{$beneficio->tipoOperaciones->valor}}</td>
                                
                                <td class="all">
                                    @if($beneficio->tipo_operacion_id != 4)
                                  {!! Form::open(['action' => ['BeneficiosPrivadosController@destroy', $beneficio->id], 'method'=>'DELETE']) !!}
                                  <div style="display: inline-block;">
                                    <a href="{{route("beneficios_privados.edit",$beneficio->id)}}" type="button"
                                     class="btn btn-warning btn-sm ion ion-edit"></a>
                                      <button type="button" data-enviado = "{{$beneficio->enviado}}"
                                          class="btn btn-danger btn-sm ion ion-android-delete btn-borrar"></button>
                                  </div>
                                  {!! Form::close() !!}
                                  @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <center>
                        <strong>Para adicionar información pulse: <a href="{{route('beneficios_privados.create')}}" class="btn btn-sm btn-secondary">Agregar</a> , de lo contrario vaya al siguiente apartado.</strong>
                    </center>
                </div>
            @else
                Es la contribución monetaria o en especie que otorga una persona física o moral con recursos privados, al Declarante, pareja y/o dependientes económicos.
                <br>Deberá señalar la información de CADA BENEFICIO PRIVADO recibido por el Declarante, pareja y/o dependientes económicos.
                <div class="alert alert-danger text-center" role="alert">
                    <div>
                        <strong>Para registrar información de beneficios privados pulse: </strong><a href="{{route('beneficios_privados.create')}}" class="btn btn-sm btn-secondary ">Agregar</a><br>
                    </div>
                    <br>
                   
                    <div class="mt-2">
                        <strong>Si no recibe beneficios privados, seleccione <a href="{{route('fideicomisos.index')}}" class="btn btn-ninguno btn-sm btn-secondary ">Ninguno</a></strong>
                    </div>
                </div>

            @endif

            <div class="text-center">
                <br>
                <a href="{{route("clientes_principales.index")}}" class="btn btn-sm btn-submit text-light">Ir a la sección anterior</a>
                <a href="{{route("fideicomisos.index")}}" class="btn btn-sm btn-submit text-light">Ir a la siguiente sección</a>
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
                    {!! Form::open(['action' => ['BeneficiosPrivadosController@destroy', 1], 'method'=>'DELETE','id' => 'frmBorrar']) !!}
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
                            text: 'No se registró información en este apartado. Si desea registrar Beneficios Privados del Declarante pulse: Agregar, de lo contrario vaya al siguiente apartado.',
                            icon: 'warning',
                            cancelButtonText: 'Aceptar'
                        });
                    }
                });
            });
        </script>
@endsection
