@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <h1>VEHÍCULOS<br>
                    (A la fecha de ingreso)</h1>
            </div>
            <div class="card-body">
    <table class="table table-bordered table-striped">
          <thead class="text-center text-light">
           <tr>
                <th scope="col" width="20%">Tipo Vehículo</th>
                <th scope="col" width="20%">Titular</th>
                <th scope="col" width="20%">Información adicional </th>
                <th scope="col" width="20%">Eliminar</th>
                <th scope="col" width="20%">Edición</th> </tr>
      </thead>
         <tbody class="text-center">
             <tr>
                 <td> </td>
                 <td> </td>
                 <td> </td>
      <td class="py-2">
          <form action="dsp_d_bienes_ini.php" method="POST" enctype="application/x-www-form-urlencoded" name="frmdo1" id="frmdo1" onsubmit="return confirmation()">
                 <button type="button" class="btn btn-danger ion ion-android-delete"></button>
                  <input type="hidden" value="2" name="id_delete" id="id_delete">
         </form>
           </td>
      <td class="py-2">
           <form action="dsp_d_bienes_ini.php" method="POST" enctype="application/x-www-form-urlencoded" name="frmdo1" id="frmdo1">
                <button type="submit" class="btn btn-warning ion ion-android-create" name="boton"></button>
                    <input type="hidden" value="2" name="id_update" id="id_update">
           </form>
      </td>
        </tbody>
    </table>
    <center>
        Si deseas registrar vehiculos pulse <a class="btn btn-submit btn-sm text-light" href="{{route('vehiculos.create')}}">Agregar</a><br><br>
        Si no tiene vehículos, seleccione<a class="btn btn-submit btn-sm text-light" href="">Ninguno</a><br>
    </center>                           <br>
                            <center>
                             <a class="btn btn-sm btn-submit text-light">Ir a la sección anterior</a>
                              <a class="btn btn-sm btn-submit text-light">Ir a la siguiente sección</a>
                            </center>
                            </div>

@endsection
