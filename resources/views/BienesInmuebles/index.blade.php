@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <h3>BIENES INMUEBLES</h3> <small><h6> (A la fecha de ingreso)</h6></small> <span class="badge badge-success ml-auto px-4" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree"> AYUDA</span>
        </div>
        <div class="card-body">
             <table class="table table-bordered table-striped">
                 <thead class="text-center text-light">
                     <tr> 
                         <th scope="col" width="40%">Tipo de Bien</th> 
                         <th scope="col" width="40%">Titular</th> 
                         <th scope="col" width="10%">Eliminar</th> 
                         <th scope="col" width="10%">Edición</th> </tr> 
                 </thead>
                 <tbody class="text-center"> 
                     <tr> 
                        <td>DPTO</td> 
                        <td>DEC</td> 
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
                     </tr> 
                </tbody> 
             </table><center><label style="margin-top:10px;">Si desea registrar algún Bien Inmueble pulse:<a href="{{route('bienes_inmuebles.create')}}" class="btn btn-sm btn-secondary">Agregar</a>, de lo contrario vaya a la siguiente sección.</label> </center>    

             <div class="text-center">
                 <a href="dsp_deSerPu_aInmAnt_ini.php" class="btn btn-sm btn-submit text-light">Ir a la sección anterior</a>
                 <a href="dsp_d_vehiculos_buscar.php" class="btn btn-sm btn-submit text-light">Ir a la siguiente sección</a>
             </div>
        </div>
    </div>
</div>
@endsection
