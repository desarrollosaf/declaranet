@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <div class="float-left">
                <h3>DATOS GENERALES DEL DECLARANTE</h3>
            </div>
            <div class="float-right">
                <span class="badge badge-success ml-auto px-4" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> AYUDA</span>
            </div>
        </div>
        <div class="collapse" id="collapseExample">
            <div class="card-body">
                <ol class="ayuda">
                    <li value="1"><strong>Nombre(s), primer y segundo apellidos, 2. Clave Única de Registro de Población (CURP) y 3. Registro Federal de Contribuyentes (RFC) y homoclave. </strong> La Dirección de Administración y Desarrollo de Personal de la Secretaría de Administración y Finanzas del Poder Legislativo del Estado de México, es la responsable de generar y capturar los movimientos de ingreso con esta información, en caso de existir algún error en los datos anteriores, deberá acudir a la citada Dirección para su corrección.</li>
                    <li value="4"><strong>Correo electrónico institucional (si aplica)</strong>. Escribir la dirección de correo electrónico que le haya sido asignada por la Dirección de Informática de la Secretaría de Administración y Finanzas.</li>
                    <li><strong>Correo electrónico personal/alterno</strong>. Escribir la dirección de correo electrónico que el Declarante haya generado para uso personal. En caso de no contar con él, deberá generar una cuenta.<br>
                        Es importante considerar que en la cuenta que proporcione le será enviada la declaración patrimonial y de intereses que haya presentado y el acuse, asimismo será el medio de recuperación de contraseña en caso de haberla olvidado.
                    </li>
                    <li><strong>Número telefónico de casa</strong>. Escribir el número telefónico de su domicilio.</li>
                    <li><strong>Número celular personal</strong>. Escribir los diez dígitos de su número celular.</li>
                    <li><strong>Situación personal/estado civil</strong>. Es la condición del Declarante en función de si tiene o no Pareja, según sus circunstancias o situación legal respecto a ello. El Declarante deberá seleccionar una de las siguientes opciones: soltero (a), casado (a), divorciado (a), viudo (a), concubina/concubinario/unión libre y sociedad de convivencia.</li>
                    <li><strong>Régimen matrimonial</strong>. En su caso, especificar: sociedad conyugal, separación de bienes u otro/especifique.</li>
                    <li><strong>País de nacimiento</strong>. De la lista desplegable, deberá elegir el país donde nació.</li>
                    <li><strong>Nacionalidad</strong>. De la lista desplegable, deberá elegir su nacionalidad.</li>
                </ol>
                <strong>Aclaraciones/observaciones</strong>. En este espacio podrá realizar las aclaraciones u observaciones que considere pertinentes respecto de alguno o algunos de los incisos de este apartado.
            </div>
        </div>
        <div class="card-body">
           @include('Prestamos.form')
        </div>
    </div>
</div>
@endsection