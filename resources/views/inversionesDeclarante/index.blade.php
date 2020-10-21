@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            <h1>INVERSIONES, CUENTAS BANCARIAS Y OTRO TIPO DE VALORES/ACTIVOS</h1>
            <h6>(A la fecha de ingreso)</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="text-center text-light">
                    <tr>
                        <th scope="col">Tipo de inversión</th>
                        <th scope="col">Titular</th>
                        <th scope="col">Información Adicional</th>
                        <th scope="col">Eliminar</th>
                        <th scope="col">Editar</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>BANC</td>
                        <td>DCT</td>
                        <td>
                            <h8><strong>Monto original:</strong> 5<br><strong>Saldo insoluto:</strong> 5</h8>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td>BANC</td>
                        <td>DCT</td>
                        <td>
                            <h8><strong>Monto original:</strong> 142536<br><strong>Saldo insoluto:</strong> 142536</h8>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="text-center">
                <label class="mt-5">Sí desea registrar algún Inversion, Cuentas Bancarias y Otro tipo de
                    valores/activos pulse:<a href="" class="btn btn-sm btn-secondary">Agregar</a>, de lo
                    contrario vaya al siguiente apartado.
                </label>
            </div>
            <div class="text-center">
                <br>
                <a href="" class="btn btn-submit text-light btn-sm">Ir a la sección anterior</a>
                <a href="" class="btn btn-submit text-light btn-sm">Ir a la siguiente sección</a>
            </div>
        </div>
    </div>
@endsection
