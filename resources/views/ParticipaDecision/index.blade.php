@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header bg-info  border-0 py-3 d-flex align-items-center" style="background-color:#F1F1F1 !important;">
        <div>
            <h3 class="card-title mb-0">¿PARTICIPA EN LA TOMA DE DECISIONES DE ALGUNA DE ESTAS INSTITUCIONES?</h3>
            <br>
                <h6 class="card-subtitle">(Hasta los últimos dos años)</h6>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <div class="card"
                     
                    </div>

                    <!-- Cuerpo del documento -->
                    <div class="card-body">
                        <center><label style="margin-top:10px;"><strong>No se registro información en este apartado.</strong></label> </center>    
                        <h8><strong>RFC:</strong><br>
                                <strong>Puesto/Rol:</strong>
                                <br>
                                    <strong>Fecha de inicio:</strong>
                                    <br>
                                        </h8>
                        <td></td>
                    <td class="py-2">     
                        <form>
                            <button type="submit" class="btn btn-warning ion ion-android-create" name="boton"></button>
                            <input type="hidden" value="2" name="id_update" id="id_update">
                        </form>  
                        <form>
                            <button type="submit" class="btn btn-danger ion ion-android-delete" name="boton"></button>
                            <input type="hidden" value="2" name="id_update" id="id_update">
                        </form>  
                    </td> 
                        <form action="dsp_representacion.php" method="POST" enctype="application/x-www-form-urlencoded" name="frmdo1" id="frmdo1" onsubmit="return confirmation()">
                                            <button type="submit" class="btn" name="boton">
                                            <svg class="svg-inline--fa fa-trash-alt fa-w-14" aria-hidden="true" data-prefix="fas" data-icon="trash-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M0 84V56c0-13.3 10.7-24 24-24h112l9.4-18.7c4-8.2 12.3-13.3 21.4-13.3h114.3c9.1 0 17.4 5.1 21.5 13.3L312 32h112c13.3 0 24 10.7 24 24v28c0 6.6-5.4 12-12 12H12C5.4 96 0 90.6 0 84zm416 56v324c0 26.5-21.5 48-48 48H80c-26.5 0-48-21.5-48-48V140c0-6.6 5.4-12 12-12h360c6.6 0 12 5.4 12 12zm-272 68c0-8.8-7.2-16-16-16s-16 7.2-16 16v224c0 8.8 7.2 16 16 16s16-7.2 16-16V208zm96 0c0-8.8-7.2-16-16-16s-16 7.2-16 16v224c0 8.8 7.2 16 16 16s16-7.2 16-16V208zm96 0c0-8.8-7.2-16-16-16s-16 7.2-16 16v224c0 8.8 7.2 16 16 16s16-7.2 16-16V208z"></path></svg><!-- <i class="fas fa-trash-alt"></i> --></button>
                                            <input type="hidden" value="1" name="id_delete" id="id_delete">
                                        </form>   <form action="dsp_representacion.php" method="POST" enctype="application/x-www-form-urlencoded" name="frmdo1" id="frmdo1">
                                            <button type="submit" class="btn" name="boton">
                                            <svg class="svg-inline--fa fa-pencil-alt fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="pencil-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M497.9 142.1l-46.1 46.1c-4.7 4.7-12.3 4.7-17 0l-111-111c-4.7-4.7-4.7-12.3 0-17l46.1-46.1c18.7-18.7 49.1-18.7 67.9 0l60.1 60.1c18.8 18.7 18.8 49.1 0 67.9zM284.2 99.8L21.6 362.4.4 483.9c-2.9 16.4 11.4 30.6 27.8 27.8l121.5-21.3 262.6-262.6c4.7-4.7 4.7-12.3 0-17l-111-111c-4.8-4.7-12.4-4.7-17.1 0zM124.1 339.9c-5.5-5.5-5.5-14.3 0-19.8l154-154c5.5-5.5 14.3-5.5 19.8 0s5.5 14.3 0 19.8l-154 154c-5.5 5.5-14.3 5.5-19.8 0zM88 424h48v36.3l-64.5 11.3-31.1-31.1L51.7 376H88v48z"></path></svg><!-- <i class="fas fa-pencil-alt"></i> --></button>
                                            <input type="hidden" value="1" name="id_update" id="id_update">
                                        </form>   
                                        <center>
                                            <label style="margin-top:10px;"><strong>Para adicionar información pulse:</strong><a href="dsp_representacion.php" class="btn btn-secondary"><small>Agregar</small></a><strong>, de lo contrario vaya a la siguiente sección.</strong></label> </center>    

                                        <center>
                                            <br>
                                                <a href="dsp_apoyos_publicos_ini_buscar.php" class="btn btn-secondary"><small>Ir a la sección anterior</small></a>
                                                <a href="dsp_di_c_principales_buscar.php" class="btn btn-secondary"><small>Ir a la siguiente sección</small></a>
                                        </center> 
                                        </div>
                                        </div>
                                        </div>


                                        @endsection