@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header bg-info  border-0 py-3 d-flex align-items-center" style="background-color:#F1F1F1 !important;">
            <div>
                <h4>¿PARTICIPA EN LA TOMA DE DECISIONES DE ALGUNA DE ESTAS INSTITUCIONES?</h4>
                <h6 class="card-subtitle">(HASTA LOS DOS ÚLTIMOS AÑOS)</h6>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <div class="card">

                    </div>
                    <div class="card-body">
                        @if(count($participaciones))
                        <div class="table-responsive-lg">
                            <table class="table table-active table-striped">
                                <thead class="badge-primary">
                                    <tr class="text-center">
                                        <th scope="col" width="20%">TITULAR</th>
                                        <th scope="col" width="20%">TIPO DE INSTITUCIÓN </th>
                                        <th scope="col" width="40%">INFORMACIÓN ADICIONAL</th>
                                        <th scope="col" width="20%">ACCIONES</th></tr>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($participaciones as $participaciones)
                                    <tr class="text-center">
                                        <td>
                                <center>{{strtoupper($participaciones->tipoRelaciones->valor)}}</center>
                                </td>
                                <td>
                                <center>{{strtoupper($participaciones->tipoInstituciones->valor)}}</center>
                                </td>
                                <td>
                                <center>
                                    <strong>NOMBRE INSTITUCIÓN:</strong> {{strtoupper($participaciones->nombre_institucion)}} <br>
                                    <strong>PUESTO / ROL:</strong> {{strtoupper($participaciones->puesto_rol)}}<br>
                                    <strong>MONTO MENSUAL NETO:</strong>{{strtoupper($participaciones->monto_mensual)}}
                                </center>
                                </td>
                                <td class="all">
                                    {!! Form::open(['action' => ['ParticipaDecisionController@destroy', $participaciones->id], 'method'=>'DELETE']) !!}
                                    <div style="display: inline-block;">
                                        <a href="{{route('participacion.edit',[$participaciones])}}" class="btn btn-xs btn-warning">
                                            <i class="ion ion-edit"></i>
                                        </a>
                                        <button class="btn btn-xs btn-danger btn-borrar">
                                            <i class="ion ion-trash-a btn-borrar"></i>
                                        </button>
                                    </div>
                                    {!! Form::close() !!}
                                </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <center>
                                <strong>Si desea adicionar información pulse: <a href="{{route('participacion.create')}}" class="btn btn-sm btn-secondary">Agregar</a> , de lo contrario vaya al siguiente
                                    apartado.</strong>
                            </center>
                        </div>
                        @else
                        <ol type=”A”>
                            <strong><li>Organizaciones de la sociedad civil</li></strong>
                            <strong><li>Organizaciones benéficas</li></strong>
                            <strong><li>Partidos políticos</li></strong>
                            <strong><li>Gremios/Sindicatos</li></strong>
                        </ol>
                        <div class="alert alert-danger text-center" role="alert">
                            <label style="margin-top:10px;">
                                <strong>Para registrar información pulse: </strong><a href="{{route('participacion.create')}}" class="btn btn-sm btn-secondary ">Agregar</a>
                                <br>
                                <br>
                                <strong>Si no participa en la toma de decisiones de instituciones <a href="{{route('apoyo_beneficio.index')}}" class="btn btn-ninguno btn-sm btn-secondary">Ninguno</a></strong>
                            </label>
                        </div>
                        @endif
                        <div class="text-center">
                            <br>
                            <a href="{{route("participacion_empresas.index")}}" class="btn btn-sm btn-submit text-light">Ir a la sección anterior</a>
                            <a href="{{route("apoyo_beneficio.index")}}" class="btn btn-sm btn-submit text-light">Ir a la siguiente sección</a>
                        </div>
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
            if (result.isConfirmed) {
                $(that).closest('form').submit();
            }
        });
        return false;
        
    });$('.btn-ninguno').on('click', function (e) {
                    let that = this;
                    e.preventDefault();
                    Swal.fire({
                        title: '¿Está seguro que no desea registrar la información solicitada en este apartado?',
                        icon: 'warning',
                        showCancelButton: true,
                        cancelButtonText: 'Cancelar'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Swal.fire({
                                text: 'No se registró información en este apartado. Si desea registrar Participación en la toma de decisiones de alguna institución pulse: Agregar, de lo contrario vaya al siguiente apartado.',
                                icon: 'warning',
                                cancelButtonText: 'Aceptar'
                            });
                        }
                    });
                });
            </script>
            @endsection


