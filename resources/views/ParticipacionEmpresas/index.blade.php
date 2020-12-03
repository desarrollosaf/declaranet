@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header bg-info  border-0 py-3 d-flex align-items-center" style="background-color:#F1F1F1 !important;">
        <div>
            <h3 class="card-title mb-0">PARTICIPACIÓN EN EMPRESAS, SOCIEDADES O ASOCIACIONES</h3>
            <br>
            <h6 class="card-subtitle">(Hasta los últimos dos años)</h6>
        </div>
    </div>


    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead class="text-center text-light">
                <tr> 
                    <th scope="col" width="20%">Nombre de la empresa</th> 
                    <th scope="col" width="20%">Titular</th>
                    <th scope="col" width="40%">Información adicional</th>
                    <th scope="col" width="20%">Acciones</th>
                </tr>
            </thead>
            <tbody class="text-center"> 
                @foreach($empresas as $empresa)
                <tr> 
                    <th scope="col" width="20%">{{$empresa->tipoInmueble->valor}}</th> 
                    <th scope="col" width="20%">{{$empresa->titular->valor}}</th> 
                    <th scope="col" width="40%">{{$empresa->titular->valor}}</th> 
                    <td class="all">
                        {!! Form::open(['action' => ['BParticipacionEnEmpresasSociedadesYAsociacionesController@destroy', $empresa->id], 'method'=>'DELETE']) !!}
                        <div style="display: inline-block;">
                            <a href="{{route('bienes_inmuebles.edit',[$empresa])}}" class="btn btn-xs btn-warning">
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
        </table><center><label style="margin-top:10px;">Para adicionar información pulse:<a href="{{route('participacion_empresas.create')}}" class="btn btn-sm btn-secondary">Agregar</a>, de lo contrario vaya a la siguiente sección.</label> </center>    

        <div class="text-center">
            <a href="dsp_deSerPu_aInmAnt_ini.php" class="btn btn-sm btn-submit text-light">Ir a la sección anterior</a>
            <a href="dsp_d_vehiculos_buscar.php" class="btn btn-sm btn-submit text-light">Ir a la siguiente sección</a>
        </div>
    </div>


</div>
@endsection