@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">

            <div class="card-header bg-info  border-0 py-3 d-flex align-items-center"
                 style="background-color:#F1F1F1 !important;">
                <div>
                    <h3>ANTES DE COMENZAR</h3>
                    <h5 class="card-subtitle text-muted"></h5>
                </div>
            </div>
            <div class="card-body">
                <!-- Primera fila  -->


                <h5>CRITERIOS PARA LA PRESENTACIÓN DE LA DECLARACIÓN PATRIMONIAL Y DE INTERESES: </h5>
                <br>

                <div class="card">
                    <div class="card-header bg-info  border-0 py-3 d-flex align-items-center"
                         style="background-color:#f8d7da !important;">
                        <div>
                            <h9>Documentación sugerida para el llenado de la declaración:</h9>
                            <br>
                            <h10 class="card-subtitle"> Para agilizar el llenado de la declaración es conveniente que,
                                en el momento de la captura, se disponga de la siguiente documentación, entre otra, sin
                                que deba hacerse entrega de la misma:
                            </h10>
                            <ol>
                                <li>Clave Única de Registro de Población (CURP) emitida por la Secretaría de
                                    Gobernación.
                                </li>
                                <li>Registro Federal de Contribuyentes (RFC) emitido por el Servicio de Administración
                                    Tributaria (SAT).
                                </li>
                                <li>Acta de matrimonio.</li>
                                <li>Comprobante de domicilio.</li>
                                <li>Currículo vite.</li>
                                <li>Recibo de nómina y/o declaración fiscal.</li>
                                <li>Escrituras públicas y/o contratos de bienes inmuebles.</li>
                                <li>Factura de vehículos y bienes muebles.</li>
                                <li>Contratos y estados de cuenta bancarios.</li>
                                <li>Contratos y estados de cuenta de gravámenes y adeudos.</li>
                                <li>Comprobante de percepción de sueldo o de otro tipo de ingreso.</li>
                                <li>Actas constitutivas de sociedades y asociaciones.</li>


                            </ol>

                        </div>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-header bg-info  border-0 py-3 d-flex align-items-center"
                         style="background-color:#f8d7da !important;">
                        <div>
                            <h9>I. No se presentará declaración inicial:</h9>
                            <br>
                            <ol>
                                <li>Cuando el servidor público en el mismo Ente Público sea
                                    objeto de un cambio de puesto, de nivel, de funciones, de
                                    adscripción, tipo de designación o nombramiento.
                                </li>
                                <li>Cuando el servidor público reingrese o sea contratado y
                                    no hayan transcurrido más de sesenta días naturales.
                                </li>
                                <li>Cuando el servidor público tenga un cambio de Ente
                                    Público dentro del mismo orden de gobierno, y no
                                    transcurran más de sesenta días naturales entre la
                                    conclusión e inicio del empleo, cargo o comisión, debiendo
                                    cumplir con el aviso correspondiente.
                                </li>
                                <li>Cuando el servidor público reingrese al empleo, cargo o
                                    comisión con motivo del otorgamiento de una licencia con o
                                    sin goce de sueldo, derive de una suspensión en sueldo y/o
                                    funciones, o sea resultado de una restitución de derechos
                                    como servidor público mediante resolución ejecutoriada
                                    firme, expedida por autoridad competente en el ejercicio de
                                    sus funciones.
                                </li>
                            </ol>


                            <h9>II. No se presentará declaración de modificación:</h9>
                            <br>
                            <ol>
                                <li>Cuando durante los primeros cinco meses del año los
                                    Servidores Públicos tomen posesión del empleo, cargo o
                                    comisión y presenten su declaración patrimonial de inicio en
                                    el mismo período.
                                </li>
                                <li>Cuando el servidor público concluya su empleo, cargo o
                                    comisión en el mes de mayo y hubiere presentado su
                                    declaración de conclusión en el mismo mes.
                                </li>
                            </ol>
                            <h9>III. No se presentará declaración de conclusión:</h9>
                            <br>
                            <ol>
                                <li>Cuando el servidor público en el mismo Ente Público sea
                                    objeto de un cambio de puesto, de nivel, de funciones, de
                                    adscripción, tipo de designación o nombramiento.
                                </li>
                                <li>Cuando el servidor público, concluya e inicie en Entes
                                    Públicos, dentro del mismo orden de gobierno y no hayan
                                    transcurrido más de sesenta días naturales.
                                </li>
                                <li>Cuando al servidor público le haya sido otorgada una
                                    licencia con o sin goce de sueldo, siempre y cuando no
                                    haya sido dado de baja de manera definitiva del Ente Público
                                    o derive de una suspensión en sueldo y/o funciones.
                                </li>

                            </ol>

                        </div>
                    </div>

                    <div class="card-body">

                        <center>
                            <a href="{{route("datos_declarante.create")}}" class="btn btn-submit text-light">Llenar
                                Declaración</a>
                        </center>

                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection
