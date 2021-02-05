@extends('layouts.app')
@section('content')
<div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <h3>Participaciones</h3>
                <h6> (Hasta los últimos dos años)</h6>
            </div>
            <div class="card-body">
                @if(count($participaciones))
                    <table class="table table-bordered table-striped">
                        <thead class="text-light">
                        <tr>
                            <th scope="col" width="20%">Descripción</th>
                            <th scope="col" width="20%">Monto</th>
                            <th scope="col" width="20%">Editar</th>
                            <th scope="col" width="20%">Eliminar</th>
                        </thead>
                        <tbody>
                          
                          <tr><tr>
                        </tbody>
                    </table>
                    <center>
                        <strong>Para adicionar información pulse <a href="{{route('participaciones.create')}}" class="btn btn-sm btn-secondary">Agregar</a> </strong>
                    </center>
                @else
                    <div class="alert alert-danger text-center" role="alert">
                        <div class="col-md-12">
                            <center>
                                <strong>Para adicionar información pulse <a class="btn btn-sm btn-secondary" href="{{route('participaciones.create')}}">Agregar</a></strong>
                                <br><br>
                                <strong>Si no tiene participaciones, seleccione  <a href="{{route('participaciones.create')}}" class="btn btn-ninguno btn-secondary">Ninguno</a></strong>
                            </center>
                        </div>
                    </div>
                @endif
                <br><br>
                <div class="col-md-12">
                    <div class="text-center">
                        <br>
                        <a href="{{route("participaciones.index")}}" class="btn btn-sm btn-submit text-light">Ir a la sección anterior</a>
                        <a href="{{route("participaciones.index")}}" class="btn btn-sm btn-submit text-light">Ir a la siguiente sección</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection