@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <div class="float-left">
                <h3>VEHÍCULOS</h3>
                <h6 class="card-subtitle">(A LA FECHA DE INGRESO)</h6>
            </div>
            <div class="float-right">
            <span class="badge badge-success ml-0" data-toggle="collapse" href="#collapseDatosEmpleo"
                  role="button" aria-expanded="false" aria-controls="collapseExample"> AYUDA</span>
            </div>
        </div>
        <div class="collapse" id="collapseDatosEmpleo" style="">
            <div class="card-body">
            <p align="justify">Para la declaración de inicio reportar la situación de los vehículos a la fecha de ingreso al empleo, cargo o comisión.<br>
                Para la declaración de modificación reportar la situación de los vehículos del año inmediato anterior.<br>
                Para la declaración de conclusión reportar la situación de los vehículos a la fecha de conclusión del empleo, cargo o comisión.<br>
            </p>
                <ol>
                    <li><p align="justify"> <strong>Tipo de vehículo.</strong> Seleccionar el tipo de vehículo del listado desplegable:
                        automóvil/motocicleta, aeronave, barco/yate, otro, especifique.</p>
                    </li>
                    <li><p align="justify"><strong>Titular del vehículo.</strong> Seleccionar alguna de las opciones del catálogo desplegable.</p>
                    </li>
                    <li><p align="justify"><strong>Tipo de tercero.</strong> En caso de copropiedad con un tercero, seleccionar si es persona
                            física o persona moral.</p>
                    </li>
                    <li><p align="justify"><strong>Nombre del tercero.</strong> En caso de copropiedad, escribir el nombre o nombres completos,
                        así como apellidos completos sin abreviaturas y sin acentos ni signos especiales. Si se trata de
                        persona moral deberá proporcionar la denominación o razón social de la institución tal y como se
                            encuentra en el documento con el que se acredita la adquisición.</p>
                    </li>
                    <li><p align="justify"><strong>RFC.</strong> En caso de personas físicas proporcionar los trece dígitos. En caso de
                            personas morales establecer los doce dígitos.</p>
                    </li>
                    <li><p align="justify"><strong>Tipo de transmisor de la propiedad.</strong> Seleccionar si es persona física o persona
                            moral.</p>
                    </li>
                    <li><p align="justify"><strong>Nombre o razón social del transmisor.</strong> Escribir el nombre o nombres completos, así
                        como apellidos completos sin abreviaturas y sin acentos ni signos especiales. Si se trata de persona
                        moral deberá proporcionar la denominación o razón social de la institución tal y como se encuentra
                            en el documento con el que se acredita la adquisición.</p>
                    </li>
                    <li><p align="justify"><strong>RFC.</strong> En caso de personas físicas proporcionar los trece dígitos. En caso de
                            personas morales establecer los doce dígitos.</p>
                    </li>
                    <li><p align="justify"><strong>Relación del transmisor del vehículo con el titular.</strong> Elegir del catálogo qué
                            relación tiene el titular del vehículo con el transmisor.</p>
                    </li>
                    <li><p align="justify"><strong>Marca.</strong> Señalar la marca del vehículo.</p></li>
                    <li><p align="justify"><strong>Modelo.</strong> Señalar el modelo del vehículo, de acuerdo a la marca. (Ejemplo; marca
                            Renault, modelo Clío).</p>
                    </li>
                    <li><p align="justify"><strong>Año.</strong> Indicar el año del vehículo.</p></li>
                    <li><p align="justify"><strong>Número de serie o registro.</strong> Proporcionar el número de serie o registro que aparece
                            en la factura y/o en su caso, tarjeta de circulación.</p>
                    </li>
                    <li><p align="justify"><strong>Donde se encuentra registrado.</strong> Indicar si se encuentra registrado en México o en el
                            extranjero. Señalando la entidad federativa o país según corresponda.</p>
                    </li>
                    <li><p align="justify"><strong>Forma de adquisición.</strong> Seleccionar alguna de las opciones del catálogo.</p></li>
                    <li><p align="justify"><strong>Forma de pago.</strong> Seleccionar la forma en que realizó el pago para adquirir el
                            vehículo, en caso de que no haya pagado por el mismo, indicará no aplica.</p>
                    </li>
                    <li><p align="justify"><strong>Valor de adquisición del vehículo.</strong> Proporcionar el monto de adquisición, conforme
                            al documento con el que se acredita la propiedad.</p>
                    </li>
                    <li><p align="justify"><strong>Tipo de moneda.</strong> Seleccionar la moneda relativa al valor de adquisición.</p></li>
                    <li><p align="justify"><strong>Fecha de adquisición del vehículo.</strong> Señalar la fecha de adquisición del vehículo,
                            conforme al documento con el que se acredita la propiedad.</p>
                    </li>

                </ol>

                <p align="justify"><strong>Aclaraciones/observaciones.</strong> En este espacio podrá realizar las aclaraciones u observaciones
                    que considere pertinentes respecto de alguno o algunos de los incisos de este apartado.<br><br></p>
            </div>
        </div>
        <div class="card-body">
            {!! Form::open(['route'=>'vehiculos.store', 'method'=>'POST', 'files' => true, 'role' => 'form', 'id' => '']) !!}
            @include('Vehiculos.form')
            {!! Form::close() !!}
        </div>
    </div>
</div>
<input type="hidden" id="accion" value="crear">
@endsection
