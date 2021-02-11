@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <h3>DOMICILIO DEL DECLARANTE</h3>
            <div class="float-right">
                <span class="badge badge-success ml-auto px-4" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> AYUDA</span>
            </div>

        <div class="collapse" id="collapseExample">
            <div class="card-body">
                <ol class="ayuda">
                  <li><p align="justify"><strong>Nombre(s), primer y segundo apellidos.</strong> Escribir el nombre o los nombres completos, así como los apellidos completos, sin abreviaturas, sin acentos, ni signos especiales. Si se tiene un solo apellido deberá colocarse en el espacio del primer apellido y dejar el espacio del segundo apellido en blanco. </p></li>
                  <li><p align="justify"><strong>Clave Única de Registro de Población (CURP).</strong> Escribir los dieciocho caracteres como la emitió la Secretaría de Gobernación. En caso de no contar con ella, podrá consultarla en la página de la Secretaría de Gobernación, en el apartado de Trámites. </p></li>
                  <li><p align="justify"><strong>Registro Federal de Contribuyentes (RFC) y homoclave. </strong>Escribir los diez caracteres básicos en el primer apartado y los tres caracteres de la homoclave en el segundo apartado, como lo emitió el SAT. En caso de no contar con él, podrá solicitarlo en la oficina del SAT que le corresponda. </p></li>
                  <li><p align="justify"><strong>Correo electrónico institucional (si aplica).</strong> Escribir la dirección de correo electrónico que le haya sido asignada por el Ente Público en el que labora. </p></li>
                  <li><p align="justify"><strong>Correo electrónico personal/alterno.</strong> Escribir la dirección de correo electrónico que el Declarante haya generado para uso personal. En caso de no contar con él, deberá generar una cuenta.
                      Es importante considerar que en la cuenta que proporcione le será enviada la declaración patrimonial y de intereses que haya presentado y el acuse, asimismo será el medio de recuperación de contraseña en caso de haberla olvidado. </p></li>
                  <li><p align="justify"><strong>Número telefónico de casa. </strong>Escribir el número telefónico de su domicilio, incluir lada. </p></li>
                  <li><p align="justify"><strong>Número celular personal.</strong> Escribir los diez dígitos de su número celular.</p> </li>
                  <li><p align="justify"><strong>Situación personal/estado civil. </strong>Es la condición del Declarante en función de si tiene o no Pareja, según sus circunstancias o situación legal respecto a ello. El Declarante deberá seleccionar una de las siguientes opciones: soltero (a), casado (a), divorciado (a), viudo (a), concubina/concubinario/unión libre y sociedad de convivencia. </p></li>
                  <li><p align="justify"><strong>Régimen matrimonial.</strong> En su caso, especificar: sociedad conyugal, separación de bienes u otro/especifique. </p></li>
                  <li><p align="justify"><strong>País de nacimiento.</strong> De la lista desplegable, el Declarante deberá elegir el país donde nació. </p></li>
                  <li><p align="justify"><strong>Nacionalidad. </strong>De la lista desplegable, el Declarante deberá elegir su nacionalidad. </p></li>
                  <li><p align="justify"><strong>¿Te desempeñaste como servidor público el año inmediato anterior?</strong> Elegir sí o no. (Solo en declaración de modificación). </p></li>
                  <li><p align="justify"><strong>Aclaraciones/observaciones.</strong> En este espacio el Declarante podrá realizar las aclaraciones u observaciones que considere pertinentes respecto de alguno o algunos de los incisos de este apartado. </p></li>
                  </ol>

                <p align="justify"><strong>Aclaraciones/observaciones. </strong>En este espacio podrá realizar las aclaraciones u observaciones que considere pertinentes respecto de alguno o algunos de los incisos de este apartado.</p>
            </div>
        </div>
            </div>
            <div class="card-body">
                 {!! Form::open(['route'=>'domicilio_declarante.store', 'method'=>'POST', 'files' => true, 'role' => 'form', 'id' => 'DatosDeclarante']) !!}
                    @include('domicilioDeclarante.form')
                    @include("domicilioDeclarante.observaciones")

                    <div class="form-row">
                        <div class="text-center">
                            <a class='btn btn-submit text-light' href="{{route("datos_declarante.create")}}">Ir a la sección anterior</a>
                            {{ Form::button('Guardar e ir a la siguiente sección', ['type' => 'submit', 'class' => 'btn btn-submit text-light'] )}}
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
