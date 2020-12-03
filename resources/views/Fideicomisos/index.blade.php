@extends('layouts.app')
@section('content')

<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <h3>FIDEICOMISOS</h3>
            <h6> (Hasta los últimos dos años)</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">      
                    <center> <strong>No se registro información en este apartado.</strong> </center> 
                    </tbody>
                </div>
                <form>
                    <strong> Tipo de participación: </strong>
                    <br>
                    <strong>Sector:</strong>
                    <br>
                    <button class="btn btn-warning ion ion-android-create"></button>
                    <button class="btn btn-danger ion ion-android-delete"></button>
                </form>
                <div class="col-md-12">
                    <center>
                        Para adicionar información pulse <a class="btn btn-submit btn-sm text-light" href="{{route('fideicomisos.create')}}">Agregar</a>, de lo contrario vaya al siguiente apartado
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
@section('scripts')
<script>
    $('.btn-borrar').on('click', function (e) {
        let that = this;
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
    });
</script>
@endsection
