@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <div class="float-left">
                <h3>FIDEICOMISOS</h3> <h3> (Hasta los últimos dos años)</h3> 
            </div>
            <div class="float-right">
                <span class="badge badge-success ml-auto px-4" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> AYUDA</span>
            </div>
        </div>
        <div class="collapse" id="collapseExample">
            <div class="card-body">
                <ol>
                    <li><strong>Realiza alguna actividad lucrativa independiente al empleo cargo o comisión.</strong> Seleccionar sí o no.</li>
                    <li><strong>Titular de la actividad lucrativa. </strong>Señalar si es del Declarante, Pareja o dependiente económico.</li>
                    <li><strong>Nombre de la empresa o servicio que proporciona.</strong> Señalar nombre o razón social completos de la empresa o en su caso el servicio que proporciona.</li>
                    <li><strong>RFC.</strong> Proporcionar los doce dígitos del registro federal de contribuyentes de la empresa.</li>
                    <li><strong>Tipo de cliente principal.</strong> Seleccionar si es persona física o persona moral.</li>
                    <li><strong>Señale el nombre o razón social del cliente principal.</strong> Indicar el nombre o razón social completos del cliente principal.</li>
                    <li><strong>RFC.</strong> En caso de personas físicas proporcionar los trece dígitos. En caso de personas morales establecer los doce dígitos del cliente principal.</li>
                    <li><strong>Sector productivo al que pertenece.</strong> Seleccionar alguno de la lista desplegable.</li>
                    <li><strong>Monto aproximado del beneficio o ganancia mensual que obtiene del cliente principal.</strong> Deberá señalar el monto neto sin centavos, de la ganancia que le genera el cliente principal.</li>
                    <li><strong>Lugar donde se ubica.</strong> Indicar si se encuentra en México, debiendo señalar entidad federativa; o en el extranjero, debiendo señalar el país donde se localiza.</li>
                </ol>
                <strong>Aclaraciones/observaciones.</strong> En este espacio podrá realizar las aclaraciones u observaciones que considere pertinentes respecto de alguno o algunos de los incisos de este apartado.
            </div>
        </div>
        <div class="card-body">
            
            {!! Form::open(['route'=>'fideicomisos.store', 'method'=>'POST', 'role' => 'form','id' => 'frmFideicomisos']) !!}
           @include('Fideicomisos.form')
           <center> {{ Form::button('Guardar', ['type' => 'submit', 'class' => 'btn btn-submit text-light submitForm'] )}}</center>
           {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
  
    $(document).ready(function(){
        $(".Titular").hide();
    });
    $("#respuestas").on("change", function () {
        if ($(this).val() == "1") {
            $("#contenedores").show();
        } else {
            $("#contenedores").hide();
        }
    });
    $(".submitForm").on("click",function(e){
        e.preventDefault();
        let that = this;
        var error = false;
        if($("#respuestas").val() == 1){
            if($("#títular_actividad_lucrativa_id").val() == ""){
                error = true;
            }
            if($("#nombre_empresa").val() == ""){
                error = true;
            }
            if($("#rfc").val() == ""){
                error = true;
            }
            if($("#tipoDePersona").val() == ""){
                error = true;
            }

            if($("#cliente_principal").val() == ""){
                error = true;
            }

            if($("#rfc").val() == ""){
                error = true;
            }

            if($("#cliente_principal").val() == ""){
                error = true;
            }
            if($("#rfc").val() == ""){
                error = true;
            }
            
      
            if($("#razon_cliente").val() == ""){
                error = true;
            }
            
            if($("#rfc").val() == ""){
                error = true;
            }
            if($("#sector").val() == ""){
                error = true;
            }
            if($("#especifique").val() == ""){
                error = true;
            }
            if($("#especifique").val() == ""){
                error = true;
            }
            if($("#monto_beneficio").val() == ""){
                error = true;
            }
            if($("#entidad_federativa").val() == ""){
                error = true;
            }
            if($("#LugarUbicacio").val() == ""){
                error = true;
            }
            
            
            
            
            console.log("ambito",$("#ambito").val());
        }else if($("#ambito").val() == 2){
            console.log("ambito",$("#ambito").val());
            if($("#nombre_empresa").val() == ""){
                    error = true;
                }
            if($("#rfc").val() == ""){
                    error = true;
                }
            if($("#area").val() == ""){
                    error = true;
                }
            if($("#puesto").val() == ""){
                    error = true;
                }
            if($("#sector_id").val() == ""){
                    error = true;
                }
            if($("#funcion_principal").val() == ""){
                    error = true;
                }
            if($("#fecha_ingreso").val() == ""){
                    error = true;
                }
            if($("#fecha_egreso").val() == ""){
                    error = true;
                }
            if($("#observaciones").val() == ""){
                    error = true;
                }
        }

        console.log("error",error);
        if(error){
            Swal.fire({
                title: 'Error',
                text: 'llena todos los campos obligatorios',
                icon: 'error'
            });
        }else{
            $('#frmFideicomisos').submit();
        }
   
    });
</script>
@endsection