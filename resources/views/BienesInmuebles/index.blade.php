@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <h3>BIENES INMUEBLES</h3> <small><h6> (A la fecha de ingreso)</h6></small> <span class="badge badge-success ml-auto px-4" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree"> AYUDA</span>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead class="text-center text-light">
                    <tr> 
                        <th scope="col" width="40%">Tipo de Bien</th> 
                        <th scope="col" width="40%">Titular</th> 
                        <th scope="col" width="20%">Acciones</th>
                    </tr>
                </thead>
                <tbody class="text-center"> 
                    @foreach($bienes as $bien)
                    <tr> 
                        <th scope="col" width="40%">{{$bien->tipoInmueble->valor}}</th> 
                        <th scope="col" width="40%">{{$bien->titular->valor}}</th> 
                        <td class="all">
                            {!! Form::open(['action' => ['BienesInmueblesController@destroy', $bien->id], 'method'=>'DELETE']) !!}
                            <div style="display: inline-block;">
                                <a href="{{route('bienes_inmuebles.edit',[$bien])}}" class="btn btn-xs btn-warning">
                                    <i class="ion ion-edit"></i>
                                </a>
                                <button class="btn btn-xs btn-danger btn-borrar">
                                    <i class="ion ion-trash-a"></i>
                                </button>
                            </div>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                </tbody> 
            </table><center><label style="margin-top:10px;">Si desea registrar algún Bien Inmueble pulse:<a href="{{route('bienes_inmuebles.create')}}" class="btn btn-sm btn-secondary">Agregar</a>, de lo contrario vaya a la siguiente sección.</label> </center>    

            <div class="text-center">
                <a href="dsp_deSerPu_aInmAnt_ini.php" class="btn btn-sm btn-submit text-light">Ir a la sección anterior</a>
                <a href="dsp_d_vehiculos_buscar.php" class="btn btn-sm btn-submit text-light">Ir a la siguiente sección</a>
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
                if (result.isConfirmed){
                    $(that).closest('form').submit();
                }
            });            
            return false;
        });
</script>
@endsection