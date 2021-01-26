@extends('layouts.appCambio')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <div class="float-left">
                    <h4 align="center">AVISO DE CAMBIO DE DEPENDENCIA O ENTE PÚBLICO EN EL MISMO ORDEN DE GOBIERNO</h4>
                    <h6 class="card-subtitle"><strong>PODER LEGISLATIVO DEL ESTADO DE MÉXICO:<br></strong> BAJO PROTESTA DE DECIR VERDAD, PRESENTO MI AVISO DE CAMBIO DE DEPENDENCIA O ENTE PÚBLICO EN EL MISMO ORDEN DE GOBIERNO, CONFORME A LO DISPUESTO EN LOS ARTÍCULOS 33 Y 34, PÁRRAFO SEGUNDO DE LA LEY DE RESPONSABILIDADES ADMINISTRATIVAS DEL ESTADO DE MÉXICO Y MUNICIPIOS.</h6>
                </div>
                <div class="float-right">
            <span class="badge badge-success ml-0" data-toggle="collapse" href="#collapseDatosEmpleo"
                  role="button" aria-expanded="false" aria-controls="collapseExample"> AYUDA</span>
                </div>
            </div>
            <div class="collapse" id="collapseDatosEmpleo" style="">
                <div class="card-body">
                    Para la declaración de inicio, reportar los datos del empleo, cargo o comisión que inicie. Para la
                    declaración de modificación, deberá reportar el empleo, cargo o comisión actual. Para la declaración de
                    conclusión, reportar los datos del empleo, cargo o comisión que concluya.
                    <ol>
                        <li><strong>Tipo de vehículo.</strong> Seleccionar el tipo de vehículo del listado desplegable:
                            automóvil/motocicleta, aeronave, barco/yate, otro, especifique.
                        </li>
                        <li><strong>Titular del vehículo.</strong> Seleccionar alguna de las opciones del catálogo desplegable.
                        </li>
                        <li><strong>Tipo de tercero.</strong> En caso de copropiedad con un tercero, seleccionar si es persona
                            física o persona moral.
                        </li>
                        <li><strong>Nombre del tercero.</strong> En caso de copropiedad, escribir el nombre o nombres completos,
                            así como apellidos completos sin abreviaturas y sin acentos ni signos especiales. Si se trata de
                            persona moral deberá proporcionar la denominación o razón social de la institución tal y como se
                            encuentra en el documento con el que se acredita la adquisición.
                        </li>
                        <li><strong>RFC.</strong> En caso de personas físicas proporcionar los trece dígitos. En caso de
                            personas morales establecer los doce dígitos.
                        </li>
                        <li><strong>Tipo de transmisor de la propiedad.</strong> Seleccionar si es persona física o persona
                            moral.
                        </li>
                        <li><strong>Nombre o razón social del transmisor.</strong> Escribir el nombre o nombres completos, así
                            como apellidos completos sin abreviaturas y sin acentos ni signos especiales. Si se trata de persona
                            moral deberá proporcionar la denominación o razón social de la institución tal y como se encuentra
                            en el documento con el que se acredita la adquisición.
                        </li>
                        <li><strong>RFC.</strong> En caso de personas físicas proporcionar los trece dígitos. En caso de
                            personas morales establecer los doce dígitos.
                        </li>
                        <li><strong>Relación del transmisor del vehículo con el titular.</strong> Elegir del catálogo qué
                            relación tiene el titular del vehículo con el transmisor.
                        </li>
                        <li><strong>Marca.</strong> Señalar la marca del vehículo.</li>
                        <li><strong>Modelo.</strong> Señalar el modelo del vehículo, de acuerdo a la marca. (Ejemplo; marca
                            Renault, modelo Clío).
                        </li>
                        <li><strong>Año.</strong> Indicar el año del vehículo.</li>
                        <li><strong>Número de serie o registro.</strong> Proporcionar el número de serie o registro que aparece
                            en la factura y/o en su caso, tarjeta de circulación.
                        </li>
                        <li><strong>Donde se encuentra registrado.</strong> Indicar si se encuentra registrado en México o en el
                            extranjero. Señalando la entidad federativa o país según corresponda.
                        </li>
                        <li><strong>Forma de adquisición.</strong> Seleccionar alguna de las opciones del catálogo.</li>
                        <li><strong>Forma de pago.</strong> Seleccionar la forma en que realizó el pago para adquirir el
                            vehículo, en caso de que no haya pagado por el mismo, indicará no aplica.
                        </li>
                        <li><strong>Valor de adquisición del vehículo.</strong> Proporcionar el monto de adquisición, conforme
                            al documento con el que se acredita la propiedad.
                        </li>
                        <li><strong>Tipo de moneda.</strong> Seleccionar la moneda relativa al valor de adquisición.</li>
                        <li><strong>Fecha de adquisición del vehículo.</strong> Señalar la fecha de adquisición del vehículo,
                            conforme al documento con el que se acredita la propiedad.
                        </li>

                    </ol>

                    <strong>Aclaraciones/observaciones.</strong> En este espacio podrá realizar las aclaraciones u observaciones
                    que considere pertinentes respecto de alguno o algunos de los incisos de este apartado.<br><br>
                </div>
            </div>
            <div class="card-body">
                {!! Form::open(['route'=>'cambio_dependencia.store', 'method'=>'POST', 'files' => true, 'role' => 'form', 'id' => '']) !!}
                @include('CambioDependencia.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <input type="hidden" id="accion" value="crear">
@endsection
