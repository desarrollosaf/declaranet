@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">

            <div class="float-left">
                <h3>DATOS GENERALES DEL DECLARANTE</h3>
            </div>
            <div class="float-right">
                <span class="badge badge-success ml-auto px-4" data-toggle="collapse" href="#collapseDatosEmpleo" role="button" aria-expanded="false" aria-controls="collapseExample"> AYUDA</span>
            </div>
        </div>

        <div class="collapse" id="collapseDatosEmpleo">
            <div class="card-body">
                Para la declaración de inicio, reportar los datos del empleo, cargo o comisión que inicie. Para la declaración de modificación, deberá reportar el empleo, cargo o comisión actual. Para la declaración de conclusión, reportar los datos del empleo, cargo o comisión que concluya.
                <ol class="ayuda">
                    <li>Nombre(s), primer y segundo apellidos. Escribir el nombre o los nombres
                        completos, así como los apellidos completos, sin abreviaturas, sin acentos,
                        ni signos especiales. Si se tiene un solo apellido deberá colocarse en el
                        espacio del primer apellido y dejar el espacio del segundo apellido en
                        blanco.
                    </li>
                    <li>Clave Única de Registro de Población (CURP). Escribir los dieciocho
                        caracteres como la emitió la Secretaría de Gobernación. En caso de no contar
                        con ella, podrá consultarla en la página de la Secretaría de Gobernación, en
                        el apartado de Trámites.
                    </li>
                    <li>Registro Federal de Contribuyentes (RFC) y homoclave. Escribir los diez
                        caracteres básicos en el primer apartado y los tres caracteres de la
                        homoclave en el segundo apartado, como lo emitió el SAT. En caso de no
                        contar con él, podrá solicitarlo en la oficina del SAT que le corresponda.
                    </li>
                    <li>Correo electrónico institucional (si aplica). Escribir la dirección de
                        correo electrónico que le haya sido asignada por el Ente Público en el que
                        labora.
                    </li>
                    <li>Correo electrónico personal/alterno. Escribir la dirección de correo
                        electrónico que el Declarante haya generado para uso personal. En caso de no
                        contar con él, deberá generar una cuenta.
                        Es importante considerar que en la cuenta que proporcione le será enviada la
                        declaración patrimonial y de intereses que haya presentado y el acuse,
                        asimismo será el medio de recuperación de contraseña en caso de haberla
                        olvidado.
                    </li>
                    <li>Número telefónico de casa. Escribir el número telefónico de su domicilio,
                        incluir lada.
                    </li>
                    <li>Número celular personal. Escribir los diez dígitos de su número celular.
                    </li>
                    <li>Situación personal/estado civil. Es la condición del Declarante en función
                        de si tiene o no Pareja, según sus circunstancias o situación legal respecto
                        a ello. El Declarante deberá seleccionar una de las siguientes opciones:
                        soltero (a), casado (a), divorciado (a), viudo (a),
                        concubina/concubinario/unión libre y sociedad de convivencia.
                    </li>
                    <li>Régimen matrimonial. En su caso, especificar: sociedad conyugal, separación
                        de bienes u otro/especifique.
                    </li>
                    <li>País de nacimiento. De la lista desplegable, el Declarante deberá elegir el
                        país donde nació.
                    </li>
                    <li>Nacionalidad. De la lista desplegable, el Declarante deberá elegir su
                        nacionalidad.
                    </li>
                    <li>¿Te desempeñaste como servidor público el año inmediato anterior? Elegir sí
                        o no. (Solo en declaración de modificación).
                    </li>
                    <li>Aclaraciones/observaciones. En este espacio el Declarante podrá realizar las
                        aclaraciones u observaciones que considere pertinentes respecto de alguno o
                        algunos de los incisos de este apartado.
                    </li>
                </ol>
            </div>
        </div>
        <div class="card-body">
            {!! Form::open(['route'=>'datos_declarante.store', 'method'=>'POST', 'files' => true, 'role' => 'form', 'id' => 'datosDeclarante']) !!}
            @include('datosGeneralesDeclarante.form')
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
