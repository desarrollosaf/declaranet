@extends('layouts.app')
@section('content')
<div class="card">
    <div class="card-header bg-info  border-0 py-3 d-flex align-items-center" style="background-color:#F1F1F1 !important;">
        <div>
            <h3 class="card-title mb-0">PARTICIPACIÓN EN EMPRESAS, SOCIEDADES O ASOCIACIONES</h3>
            <br>
            <h6 class="card-subtitle">(Hasta los últimos dos años)</h6>
        </div>
    </div>
    <div class="card-body">
            <p style="text-align : justify;"> Deberá señalar la información de CADA UNA de las empresas, sociedades o asociaciones donde el Declarante, pareja y/o dependientes económicos, participan como socios, accionistas, comisarios, representantes, apoderados, colaboradores, beneficiarios u otros.</p>
            <center>
                <div class="alert alert-danger" role="alert">
                    Para registrar información pulse:&nbsp;&nbsp;&nbsp;<a href="dsp_d_part_empresas_ini.php" class="btn btn-secondary"><small>Agregar</small></a>
                    <br>
                    <form action="dsp_d_part_empresas_ini.php" method="POST" enctype="application/x-www-form-urlencoded" name="frmdo$incrementoB" id="frmdo" onsubmit="return ninguno()">
                        Si no tiene participación en empresas, sociedades o asociaciones, seleccione: &nbsp;&nbsp;&nbsp;<a href="dsp_d_part_empresas_ini.php" class="btn btn-secondary"><small>Ninguno</small></a>;si éste es su primer empleo.
                    </form>
                </div></center>    
            <center>
                <br>
                <a href="dsp_d_generales_ini.php" class="btn btn-secondary"><small>Ir a la Declaración de Situación Patrimonial</small></a>
                <a href="dsp_di_part_toma_des_intit_ini_busca.php" class="btn btn-secondary"><small>Ir a la siguiente sección<</small></a>
            </center> 
    </div>
</div>
@endsection