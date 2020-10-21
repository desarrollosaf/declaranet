@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <h1>DATOS DEL DEPENDIENTE ECONÓMICO</h1>
            </div>
            <div class="card-body">
                <p class="text-justify">Deberá proporcionar la información de CADA UNA de las personas, familiares o no, cuya manutención dependa principalmente de los ingresos del Declarante.</p>
                <div class="alert alert-danger text-center" role="alert">
                    Para registrar información pulse:
                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#exampleModal">
                        Agregar
                    </button>
                    <br>
                    Sí no tiene dependientes económicos, seleccione
                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="modal" data-target="#exampleModal">
                        Ninguno
                    </button>
                </div>
                <br>
                <a href="" class="btn btn-submit float-left text-light">Ir a la sección anterior</a>
                <a href="" class="btn btn-submit float-right text-light">Ir a la siguiente sección</a>
            </div>
        </div>
    </div>
    <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! Form::open(['route'=>'datos_dependiente_declarante.store', 'method'=>'POST', 'files' => true, 'role' => 'form', 'id' => 'datosCurricularesDeclarante']) !!}
                        @include('dependienteEconomico.form')
                    {!! Form::close() !!}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            $("#parentesco").on("change", function(){
                var nivel = $('#parentesco option:selected').html();
                if(nivel === "OTRO(ESPECIFIQUE)"){
                    $("#especifique-parentezco").prop("disabled", false);
                }
                else{
                    $("#especifique-parentezco").val("");
                    $("#especifique-parentezco").prop("disabled", true);
                }
            });
        });
    </script>
@endsection
