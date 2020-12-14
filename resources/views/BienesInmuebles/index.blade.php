@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <h3>BIENES INMUEBLES</h3>
            <h6 class="card-subtitle">(A LA FECHA DE INGRESO)</h6>
        </div>



        <div class="card-body">

                @if(count($bienes))
                    <div class="table-responsive-lg">
                        <table class="table table-active table-striped">
                            <thead class="badge-primary">
                            <tr>
                                <th> <center>Tipo de bien</center> </th>
                                <th> <center>Titular</center> </th>
                                <th> <center>Acciones</center> </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($bienes as $biene)
                                <tr>
                                    <td scope="col" width="40%">{{$bien->tipoInmueble->valor}}</td>
                                    <td scope="col" width="40%">{{$bien->titular->valor}}</td>
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
                        </table>
                        <center>
                            <strong>Si desea registrar Experiencia Laboral pulse: <a
                                    href="{{route('bienes_inmuebles.create')}}"
                                    class="btn btn-sm btn-secondary">Agregar</a> , de lo contrario vaya al siguiente
                                apartado.</strong>
                        </center>
                    </div>
                @else
                    <span style="text-align: left !important;">Deberá proporcionar la información de CADA UNO de los bienes inmuebles, que a la fecha de ingreso al cargo sean propiedad del Declarante, así como los de su pareja y/o dependientes económicos.</span>
                    <br>
                    <div class="alert alert-danger text-center" role="alert">
                        <label style="margin-top:10px;">
                            <strong>Para registrar información pulse: </strong><a
                                href="{{route('bienes_inmuebles.create')}}"
                                class="btn btn-sm btn-secondary">Agregar</a><br>
                            <strong>Deberá seleccionar <a href="{{route('bienes_inmuebles.create')}}"
                                                          class="btn btn-sm btn-secondary">Ninguno</a>si éste es su
                                primer empleo.</strong>
                        </label>
                    </div>



                @endif


            <div class="text-center">
                <br>
                <a href="{{route("servidor_publico.index")}}" class="btn btn-sm btn-submit text-light">Ir a la
                    sección
                    anterior</a>
                <a href="{{route("inversiones.index")}}" class="btn btn-sm btn-submit text-light">Ir a la
                    siguiente sección</a>
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
