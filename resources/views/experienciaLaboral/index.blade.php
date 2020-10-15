@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <h1>Experiencia Laboral</h1>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped table-hover" style="border-collapse: collapse;">
                        <thead style="background-color: #682244;" class="text-light">
                            <tr>
                                <th>Nivel</th>
                                <th>Información Adicional</th>
                                <th>Eliminar</th>
                                <th>Editar</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
                <div class="col-md-12">
                    <center>
                        Si deseas registrar experiencia laboral pulse <a class="btn btn-submit btn-sm text-light" href="{{route('experiencia_laboral.create')}}">Agregar</a>, de lo contrario vaya al siguiente apartado
                    </center>
                </div>
                <br><br>
                 <div class="col-md-12">
                    <center>
                        <button class="btn btn-submit btn-sm text-light">Ir a la sección anterior</button>
                        <button class="btn btn-submit btn-sm text-light">Ir a la siguiente sección</button>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

