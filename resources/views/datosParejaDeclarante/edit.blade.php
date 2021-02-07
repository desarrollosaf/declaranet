@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <div class="float-left">
                    <h3>DATOS DE LA PAREJA</h3>
                </div>
                <div class="float-right">
                    <span class="badge badge-success ml-auto px-4" data-toggle="collapse" href="#collapsePareja" role="button" aria-expanded="false" aria-controls="collapseExample"> AYUDA</span>
                </div>
            </div>
            <div class="collapse" id="collapsePareja">
                <div class="card card-body">
                    <p align="justify">
                        Proporcionar los datos del cónyuge, concubina/concubinario, con quien tenga una relación de sociedad de convivencia o cualquier otro similar a los anteriores.
                        <br>
                        <br>
                        Para llenar este rubro es necesario tener a la vista acta de nacimiento del cónyuge o Pareja, concubina/concubinario o sociedad de convivencia o cualquier otro documento donde se incluya la información.
                        <br>
                        <br>
                    </p>
                    <ol>
                        <li><p align="justify"><strong>Nombre(s), primer y segundo apellidos.</strong> Escribir el nombre o los nombres completos, así como los apellidos completos, sin abreviaturas, sin acentos, ni signos especiales. Si se tiene un solo apellido deberá colocarse en el espacio del primer apellido y dejar el espacio del segundo apellido en blanco.</p></li>
                        <li><p align="justify"><strong>Fecha de nacimiento. </strong>Señalar la fecha de nacimiento de la Pareja en el formato de día, mes y año.</p></li>
                        <li><p align="justify"><strong>Registro Federal de Contribuyentes (RFC).</strong> Escribir los diez caracteres básicos con los tres caracteres de la homoclave.</p></li>
                        <li><p align="justify"><strong>Relación con el Declarante.</strong> Seleccionar el tipo de relación entre las siguientes opciones: cónyuge, concubina/concubinario/unión libre o sociedad</p>de convivencia.</li>
                        <li><p align="justify"><strong>¿Es ciudadano extranjero?</strong> Deberá indicar sí o no, según el caso.</li>
                        <li><p align="justify"><strong>Clave Única de Registro de Población (CURP).</strong> Escribir los dieciocho caracteres como la emitió la Secretaría de Gobernación. En caso de no contar con ella, podrá consultarla en la página de la Secretaría de Gobernación, en el apartado de Trámites. <a
                                style="color:#1F1F1F !important;"
                                href="https://www.sat.gob.mx/tramites/operacion/28753/obten-tu-rfc-con-la-clave-unica-de-registro-de-poblacion-(curp)"
                                target="_blank">www.sat.gob.mx</a></p></li></li>
                        <li><p align="justify"><strong>¿Es dependiente económico? </strong>Si la manutención depende principalmente de los ingresos del Declarante, señalará sí, en caso contrario señalará no.</p></li>
                        <li><p align="justify"><strong>Habita en el domicilio del Declarante. </strong>Indicar sí o no, la Pareja vive en el domicilio del Declarante.</p></li>
                        <li><p align="justify"><strong>Lugar donde reside.</strong> En caso de que la Pareja, no viva en el domicilio del Declarante, indicar si vive en México, en el extranjero o si se desconoce.</p></li>
                        <li><p align="justify"><strong>Domicilio de la Pareja.</strong> Seleccionar México, proporcionar los siguientes datos: calle, número exterior, número interior (si aplica), colonia o localidad, municipio o alcaldía, entidad federativa y código postal.
                                <br>
                                En caso de seleccionar extranjero, proporcionar los siguientes datos: calle, número exterior, número interior (si aplica), ciudad/localidad, estado o provincia, país y código postal.</p>
                        </li>
                        <li><p align="justify"><strong>Actividad laboral. </strong>Indicar si el cónyuge, concubina/concubinario o sociedad de convivencia, se encuentra trabajando actualmente, seleccionando alguno de los siguientes campos: privado, público, otro (especificar) o ninguno.</p></li>
                    </ol>


                    <ol>
                        <li type="circle">Sector público.
                            <ol>
                                <li><p align="justify"><strong>Nivel/orden de gobierno.</strong> Seleccionar el orden de gobierno en el que se encuentra: federal, estatal o municipal/alcaldía.</p></li>
                                <li><p align="justify"><strong>Ámbito público.</strong> Señalar la naturaleza jurídica al que pertenece: ejecutivo, legislativo, judicial u órgano autónomo.</p></li>
                                <li><p align="justify"><strong>Nombre del Ente Público. </strong>Señalar el Ente Público al cual se encuentra adscrita la plaza.</p></li>
                                <li><p align="justify"><strong>Área de adscripción.</strong> Especificar el nombre de la Unidad Administrativa u homóloga superior inmediata en la que está adscrito. (Superior jerárquico).</p></li>
                                <li><p align="justify"><strong>Empleo, cargo o comisión.</strong> Señalar el nombre del empleo, cargo o comisión que se establece en su recibo de nómina, nombramiento, contrato u oficio de comisión.</p></li>
                                <li><p align="justify"><strong>Especifique función principal.</strong> Señalar cual es la función o actividad principal que desempeña su Pareja.</p></li>
                                <li><p align="justify"><strong>El salario neto</strong> es la cantidad final que percibe el trabajador después de todas las retenciones, este se obtiene restando al salario bruto las aportaciones de seguridad social y retenciones de impuestos establecidos según la ley mexicana (no incluye descuentos de caja de ahorro o cualquier préstamo y descuentos de estancia).</p></li>
                                <li><p align="justify"><strong>Fecha de ingreso al empleo.</strong> Señalar la fecha en que inició empleo, cargo o comisión.</p></li>
                            </ol>
                        </li>
                        <li type="circle">Sector privado/otro.
                            <ol>
                                <li><p align="justify"><strong>Nombre de la empresa, sociedad o asociación.</strong> Proporcionar el nombre de la empresa, sociedad o asociación en la que labora.</p></li>
                                <li><p align="justify"><strong>Puesto.</strong> Proporcionar el nombre del puesto que desempeña.</p></li>
                                <li><p align="justify"><strong>RFC. </strong>Proporcionar los 12 dígitos de la empresa en que labora su cónyuge, concubina/concubinario o sociedad de convivencia.</p></li>
                                <li><p align="justify"><strong>Fecha de ingreso al empleo. </strong>Señalar la fecha en que inició empleo, cargo o comisión.</p></li>
                                <li><p align="justify"><strong>Sector al que pertenece.</strong> Elegir el sector al que pertenece la empresa, sociedad o asociación. En caso de señalar otros, especifique.</p></li>
                                <li><p align="justify"><strong>El salario neto</strong> es la cantidad final que percibe el trabajador después de todas las retenciones, este se obtiene restando al salario bruto las aportaciones de seguridad social y retenciones de impuestos establecidos según la ley mexicana (no incluye descuentos de caja de ahorro o cualquier préstamo y descuentos de estancia).</p></li>
                                <li><p align="justify"><strong>¿Es proveedor o contratista del gobierno?</strong> Señalar sí o no, la Pareja vende o presta algún servicio al gobierno.</p></li>
                            </ol>
                        </li>
                    </ol>
                    <p align="justify"><strong>Aclaraciones/observaciones.</strong> En este espacio podrá realizar las aclaraciones u observaciones que considere pertinentes respecto de alguno o algunos de los incisos de este apartado.</p>
                </div>
            </div>
            <div class="card-body">
                {!! Form::open(['route'=>['datos_pareja_declarante.update', $pareja->id], 'method'=>'PUT', 'files' => true, 'role' => 'form', 'id' => 'datosDeclarante']) !!}
                @include('datosParejaDeclarante.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
