@extends('layouts.app')
@section('content')
<div class="card"> 
    <div class="card-header">
    <h3>BIENES MUEBLES</h3>
    <h5 class="card-subtitle">(A la fecha de ingreso)</h5>
</div>
<div class="card-body">
    <div class='text-center'>
        <label style="margin-top:10px;">
            <h6>No se registro información en este apartado</h6>.
        </label> 
    </div> 
    <div class="text-center">
        <label style="margin-top:10px;">
            <strong>Si desea registrar algún Bien Mueble pulse: </strong><a href="dsp_bienes_muebles_ini.php" class="btn btn-sm btn-secondary">Agregar</a> ,<strong> de lo contrario vaya al siguiente apartado</strong></h6>.
        </label> 
    </div>                                
    <div class="text-center">
        <br>
        <a href="dsp_d_vehiculos_buscar.php" class="btn btn-sm btn-submit text-light">Ir a la sección anterior</a>
        <a href="dsp_inversiones_cuentas_bancarias_buscar.php" class="btn btn-sm btn-submit text-light">Ir a la siguiente sección</a>
    </div> 
</div>
</div>
@endsection