@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">


            <div class="card-header">
                <div class="float-left">
                    <h3>BIENES MUEBLES</h3>
                    <h6 class="card-subtitle">(A LA FECHA DE INGRESO)</h6>
                </div>
                <div class="float-right">
                    <span class="badge badge-success ml-auto px-4" data-toggle="collapse" href="#collapseMuebles"
                          role="button" aria-expanded="false" aria-controls="collapseExample"> AYUDA</span>
                </div>
            </div>


            <div class="collapse" id="collapseMuebles">
                <div class="card card-body">
                    <p align="justify">
                    Se refiere a la información que el Declarante reportará sobre bienes que conforme a la normatividad
                    aplicable se consideran muebles, que por su naturaleza de manera individual o en conjunto
                    representan una parte considerable del patrimonio del servidor público de acuerdo con su situación
                    socioeconómica y que para efectos de referencia el monto de su valor comercial sea mayor a 1200
                    Unidades de Medida y Actualización (UMA) por lo que se refiere al menaje de casa. En el caso de
                    los demás bienes dicho valor será en lo individual.
                    <br>
                    <br>
                    <strong>BIENES DEL DECLARANTE, PAREJA Y/O DEPENDIENTES ECONÓMICOS</strong>
                    <br>
                    </p>
                    <ol>
                        <li><p align="justify"><strong>Titular del bien.</strong> Seleccionar alguna de las opciones del catálogo
                                desplegable. En caso de señalar copropiedad deberá indicar el nombre del tercero o terceros.</p>
                        </li>
                        <li><p align="justify"><strong>Tipo de bien.</strong> Seleccionar de la lista desplegable: menaje de casa (muebles
                            y accesorios de casa), aparatos electrónicos y electrodomésticos, joyas, colecciones, obras
                                de arte y otros, especifique.</p>
                        </li>
                        <li><p align="justify"><strong>Descripción general del bien.</strong> Referir brevemente el bien reportado.</p></li>
                        <li><p align="justify"><strong>Tercero.</strong> En caso de copropiedad con un tercero, seleccionar si es persona
                                física o persona moral.</p>
                        </li>
                        <li><p align="justify"><strong>Nombre del tercero.</strong> En caso de señalar copropiedad, escribir el nombre o
                            nombres completos, así como apellidos completos sin abreviaturas y sin acentos ni signos
                            especiales. Si se trata de persona moral deberá proporcionar la denominación o razón social
                            de la institución tal y como se encuentra en el documento con el que se acredita la
                                adquisición.</p>
                        </li>
                        <li><p align="justify"><strong>RFC.</strong> En caso de personas físicas proporcionar los trece dígitos. En caso de
                                personas morales establecer los doce dígitos.</p>
                        </li>
                        <li><p align="justify"><strong>Transmisor de la propiedad.</strong> Seleccionar si es persona física o persona
                                moral.</p>
                        </li>
                        <li><p align="justify"><strong>Nombre o razón social del transmisor.</strong> Escribir el nombre o nombres
                            completos, así como apellidos completos sin abreviaturas y sin acentos ni signos especiales,
                                como se encuentra en el documento con el que se acredita la propiedad.</p>
                        </li>
                        <li><p align="justify"><strong>RFC.</strong> En caso de personas físicas proporcionar los trece dígitos. En caso de
                                personas morales establecer los doce dígitos.</p>
                        </li>
                        <li><p align="justify"><strong>Relación del transmisor del mueble con el titular.</strong> Elegir del catálogo qué
                                relación tiene el titular del mueble con el transmisor.</p>
                        </li>
                        <li><p align="justify"><strong>Forma de adquisición.</strong> Seleccionar alguna de las opciones del catálogo.</p></li>
                        <li><p align="justify"><strong>Forma de pago.</strong> Seleccionar la forma en que realizó el pago para adquirir el
                                bien mueble, en caso de que no haya pagado por el mismo, indicará no aplica.</p>
                        </li>
                        <li><p align="justify"><strong>Valor de adquisición del mueble.</strong> Proporcionar el monto de adquisición.</p></li>
                        <li><p align="justify"><strong>Tipo de moneda.</strong> Seleccionar la moneda relativa al valor de adquisición.</p>
                        </li>
                        <li><p align="justify"><strong>Fecha de adquisición.</strong> Señalar la fecha de adquisición del mueble.</p></li>
                    </ol>
                    <p align="justify"> <strong>Aclaraciones/observaciones.</strong> En este espacio podrá realizar las aclaraciones u
                    observaciones que considere pertinentes respecto de alguno o algunos de los incisos de este
                        apartado.</p>

                </div>
            </div>
            <div class="card-body">
                {!! Form::open(['route'=>'bienes_muebles.store', 'method'=>'POST', 'files' => true, 'role' => 'form', 'id' => 'form-bienes-muebles']) !!}
                @include('BienesMuebles.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
