@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header bg-info  border-0 py-3 d-flex align-items-center" style="background-color:#F1F1F1 !important;">
        <div>
            <h3 class="card-title mb-0">PRÉSTAMO O COMODATO POR TERCEROS</h3>
            <br>
            <h6 class="card-subtitle">(A la fecha de ingreso)</h6>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead class='text-light'>
                <tr>
                    <th scope="col" width="20%">Tipo de bien</th>
                    <th scope="col" width="60%">Información Adicional</th>
                    <th scope="col" width="10%">Editar</th>
                    <th scope="col" width="10%">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td class="py-2">
                        <form action="dsp_d_bienes_ini.php" method="POST" enctype="application/x-www-form-urlencoded" name="frmdo1" id="frmdo1">
                            <button type="submit" class="btn btn-warning ion ion-android-create" name="boton"></button>
                            <input type="hidden" value="2" name="id_update" id="id_update">
                        </form>
                    </td>
                    <td class="py-2">
                        <form action="dsp_d_bienes_ini.php" method="POST" enctype="application/x-www-form-urlencoded" name="frmdo1" id="frmdo1" onsubmit="return confirmation()">
                            <button type="button" class="btn btn-danger ion ion-android-delete"></button>
                            <input type="hidden" value="2" name="id_delete" id="id_delete">
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class='text-center'>
            <strong>Si desea registrar algún Préstamo o Comodato por Terceros  pulse </strong> <a href="" class="btn btn-sm btn-secondary">Agregar</a> <strong>, de lo contrario vaya al siguiente apartado.</strong></label>
        </div>
    </div>
</div>
<center>
    <br>
    <a href="dsp_adeudos_pasivos_buscar.php" class="btn btn-secondary"> <small>Ir a la sección anterior</small></a>
    <a href="#" class="btn btn-secondary"> <small>Entregar</small></a>
</center>
    @endsection
