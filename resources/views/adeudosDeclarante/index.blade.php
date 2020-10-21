@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h1>ADEUDOS / PASIVOS</h1>
            <h6>(A la fecha de ingreso)</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="text-center text-light">
                    <tr>
                        <th scope="col">Titular del adeudo:</th>
                        <th scope="col">Tipo de adeudo:</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>DEC</td>
                        <td>CHIP<br>
                            <h8>
                                <strong>Número de cuenta o contrato:</strong> 1
                                <br>
                                <strong>Saldo insoluto:</strong> 9
                            </h8>
                        </td>
                        <td class="py-2">
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="text-center">
                <label style="margin-top:10px;">
                    <strong>Si desea registrar algún Adeudo/Pasivo pulse: </strong>
                    <a href="" class="btn btn-sm btn-secondary">Agregar</a>
                    <strong>, de lo contrario vaya al siguiente apartado.</strong>
                </label>
            </div>
            <div class="text-center">
                <br>
                <a class="btn btn-submit text-light btn-sm">Ir a la sección anterior</a>
                <a class="btn btn-submit text-light btn-sm">Ir a la siguiente sección</a>
            </div>
        </div>
    </div>
@endsection
