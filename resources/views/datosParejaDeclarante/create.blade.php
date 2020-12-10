@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <div class="float-left">
                  <h1>DATOS DE LA PAREJA</h1>
                </div>
                <div class="float-right">
                    <span class="badge badge-success ml-auto px-4" data-toggle="collapse" href="#collapsePareja" role="button" aria-expanded="false" aria-controls="collapseExample"> AYUDA</span>
                </div>
            </div>
            <div class="collapse" id="collapsePareja">
                <div class="card card-body">               
                    Proporcionar los datos del cónyuge, concubina/concubinario, con quien tenga una
                    relación de sociedad de convivencia o cualquier otro similar a los anteriores.
                    <br>
                    <br>
                    Para llenar este rubro es necesario tener a la vista acta de nacimiento del cónyuge
                    o Pareja, concubina/concubinario o sociedad de convivencia o cualquier otro
                    documento donde se incluya la información.
                    <br>
                    <br>
                    <ol>
                        <li>Nombre(s), primer y segundo apellidos. Escribir el nombre o los nombres
                            completos, así como los apellidos completos, sin abreviaturas, sin acentos,
                            ni signos especiales. Si se tiene un solo apellido deberá colocarse en el
                            espacio del primer apellido y dejar el espacio del segundo apellido en
                            blanco.
                        </li>
                        <li>Fecha de nacimiento. Señalar la fecha de nacimiento de la Pareja en el
                            formato de día, mes y año.
                        </li>
                        <li>Registro Federal de Contribuyentes (RFC). Escribir los diez caracteres
                            básicos con los tres caracteres de la homoclave.
                        </li>
                        <li>Relación con el Declarante. Seleccionar el tipo de relación entre las
                            siguientes opciones: cónyuge, concubina/concubinario/unión libre o sociedad
                            de convivencia.
                        </li>
                        <li>¿Es ciudadano extranjero? Deberá indicar sí o no, según el caso.</li>
                        <li>Clave Única de Registro de Población (CURP). Escribir los dieciocho caracteres como la emitió la Secretaría de
                            Gobernación. En caso de no contar con ella, podrá consultarla en la `página
                            de la Secretaría de Gobernación, en el apartado de Trámites. <a
                                    style="color:#1F1F1F !important;"
                                    href="https://www.sat.gob.mx/tramites/operacion/28753/obten-tu-rfc-con-la-clave-unica-de-registro-de-poblacion-(curp)"
                                    target="_blank">www.sat.gob.mx</a></li>
                        <li>¿Es dependiente económico? Si la manutención depende principalmente de los
                            ingresos del Declarante, señalará sí, en caso contrario señalará no.
                        </li>
                        <li>Habita en el domicilio del Declarante. Indicar sí o no, la Pareja vive en el
                            domicilio del Declarante.
                        </li>
                        <li>Lugar donde reside. En caso de que la Pareja, no viva en el domicilio del
                            Declarante, indicar si vive en México, en el extranjero o si se desconoce.
                        </li>
                        <li>Domicilio de la Pareja. Seleccionar México, proporcionar los siguientes
                            datos: calle, número exterior, número interior (si aplica), colonia o
                            localidad, municipio o alcaldía, entidad federativa y código postal.
                            <br>
                            En caso de seleccionar extranjero, proporcionar los siguientes datos: calle,
                            número exterior, número interior (si aplica), ciudad/localidad, estado o
                            provincia, país y código postal.
                        </li>
                        <li>Actividad laboral. Indicar si el cónyuge, concubina/concubinario o sociedad
                            de convivencia, se encuentra trabajando actualmente, seleccionando alguno de
                            los siguientes campos: privado, público, otro (especificar) o ninguno.
                        </li>
                    </ol>


                    <ol>
                        <li type="circle">Sector público.
                            <ol>
                                <li>Nivel/orden de gobierno. Seleccionar el orden de gobierno en el que
                                    se encuentra: federal, estatal o municipal/alcaldía.
                                </li>
                                <li>Ámbito público. Señalar la naturaleza jurídica al que pertenece:
                                    ejecutivo, legislativo, judicial u órgano autónomo.
                                </li>
                                <li>Nombre del Ente Público. Señalar el Ente Público al cual se
                                    encuentra adscrita la plaza.
                                </li>
                                <li>Área de adscripción. Especificar el nombre de la Unidad
                                    Administrativa u homóloga superior inmediata en la que está
                                    adscrito. (Superior jerárquico).
                                </li>
                                <li>Empleo, cargo o comisión. Señalar el nombre del empleo, cargo o
                                    comisión que se establece en su recibo de nómina, nombramiento,
                                    contrato u oficio de comisión.
                                </li>
                                <li>Especifique función principal. Señalar cual es la función o
                                    actividad principal que desempeña su Pareja.
                                </li>
                                <li>Salario mensual neto. Deberá especificar el monto mensual neto, sin
                                    centavos, que percibe el cónyuge o Pareja.
                                </li>
                                <li>Fecha de ingreso al empleo. Señalar la fecha en que inició empleo,
                                    cargo o comisión.
                                </li>

                            </ol>
                        </li>
                        <li type="circle">Sector privado/otro.
                            <ol>
                                <li>Nombre de la empresa, sociedad o asociación. Proporcionar el nombre
                                    de la empresa, sociedad o asociación en la que labora.
                                </li>
                                <li>Puesto. Proporcionar el nombre del puesto que desempeña.</li>
                                <li>RFC. Proporcionar los 12 dígitos de la empresa en que labora su
                                    cónyuge, concubina/concubinario o sociedad de convivencia.
                                </li>
                                <li>Fecha de ingreso al empleo. Señalar la fecha en que inició empleo,
                                    cargo o comisión.
                                </li>
                                <li>Sector al que pertenece. Elegir el sector al que pertenece la
                                    empresa, sociedad o asociación. En caso de señalar otros,
                                    especifique.
                                </li>
                                <li>Salario mensual neto. Especificar el monto mensual neto, sin
                                    centavos, que percibe la Pareja.
                                </li>
                                <li>¿Es proveedor o contratista del gobierno? Señalar sí o no, la Pareja
                                    vende o presta algún servicio al gobierno.
                                </li>
                            </ol>
                        </li>
                    </ol>


                    Aclaraciones/observaciones. En este espacio podrá realizar las aclaraciones u
                    observaciones que considere pertinentes respecto de alguno o algunos de los incisos
                    de este apartado.

              </div>
          </div>
            <div class="card-body">
                {!! Form::open(['route'=>'datos_pareja_declarante.store', 'method'=>'POST', 'files' => true, 'role' => 'form', 'id' => 'datosDeclarante']) !!}
                @include('datosParejaDeclarante.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
