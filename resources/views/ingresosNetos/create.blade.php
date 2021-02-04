@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <h3>INGRESOS NETOS DEL DECLARANTE, PAREJA Y/O DEPENDIENTES ECONÓMICOS</h3> <h6>(SITUACIÓN ACTUAL)</h6>

            <div class="float-right">
                <span class="badge badge-success ml-auto px-4" data-toggle="collapse" href="#collapseInversion" role="button" aria-expanded="false" aria-controls="collapseExample"> AYUDA</span>
            </div>
        </div>
        <div class="collapse" id="collapseInversion">
            <div class="card card-body">
                <p align="justify">
                Ingresos netos del Declarante, Pareja y/o dependientes económicos.<br>
                Para la declaración de inicio los ingresos a reportar son mensuales.<br>
                Para la declaración de modificación los ingresos a reportar son los del año inmediato anterior.<br>
                (Como se señala en el título del 1 de enero al 31 de diciembre del año inmediato anterior).<br>
                Para la declaración de conclusión los ingresos a reportar son los que recibió durante el año hasta
                la fecha de la conclusión del empleo, cargo o comisión.<br>
                Es necesario capturar cantidades después de impuestos, sin comas, sin puntos, sin centavos y
                sin ceros a la izquierda.<br>
                </p>
              <ol>
                    <ul>
                        <li type="circle"> <p align="justify">Remuneración neta del Declarante por su cargo público (por concepto de sueldos, honorarios, compensaciones, bonos y otras prestaciones) (Cantidades netas después de impuestos). Es el ingreso neto que recibe el Declarante incluyendo bonos, compensaciones u otras prestaciones, se recomienda manifestar la cantidad que se encuentra en su recibo de nómina.</p></li>
                        <li type="circle"> <p align="justify">Otros ingresos del Declarante. Este rubro se llenará automáticamente.</p>
                            <ol class="ayuda">
                                <li> <p align="justify">Por actividad industrial, comercial y/o empresarial (después de impuestos). Señalar el monto
                                        neto por alguna o algunas de las actividades descritas.</p>
                                </li>
                                <li> <p align="justify">Nombre o razón social. Proporcionar el nombre, razón social o denominación del negocio, en el
                                    cual se lleva a cabo la actividad o alguna de las actividades antes mencionadas por la cual se
                                        genera el ingreso.</p>
                                </li>
                                <li> <p align="justify">Tipo de negocio. Señalar el tipo de negocio por el cual obtuvo el ingreso.</p>
                                </li>
                                <li> <p align="justify">Por actividad financiera (rendimientos o ganancias) (después de impuestos). Señalar el
                                    monto neto, de los rendimientos o ganancias que en su caso se hayan generado por su actividad
                                        financiera.</p>
                                </li>
                                <li> <p align="justify">Tipo de instrumento que generó el rendimiento o ganancia. Deberá seleccionar el instrumento
                                    que generó el rendimiento o ganancia de las siguientes opciones: capital, fondos de inversión,
                                    organizaciones privadas, seguro de separación individualizado, valores bursátiles, bonos y/u otros
                                        (especifique).</p>
                                </li>
                                <li> <p align="justify">Por servicios profesionales, consejos, consultorías y/o asesorías (después de impuestos).
                                    Señalar el monto neto, que obtenga derivado de servicios profesionales distintos al empleo, cargo
                                    o comisión que desempeñe, por su participación en consejos o consultorías, y/o por asesorías
                                        que le generen alguna remuneración económica.</p>
                                </li>
                                <li> <p align="justify">Tipo de servicio prestado. Indicar el tipo de servicio que otorga, el tipo de participación en los
                                        consejos o consultorías, así como el tipo de asesorías que llevo a cabo.</p>
                                </li>
                                <li> <p align="justify">Otros ingresos no considerados a los anteriores (después de impuestos). Señalar el monto
                                        neto, de algún otro ingreso que no esté considerado en los numerales que anteceden.</p>
                                </li>
                                <li> <p align="justify">Especificar tipo de ingreso. Indicar si el
                                    ingreso derivó de arrendamiento, regalía, sorteos,
                                    concursos, donaciones, seguro de vida o algún otro concepto
                                        distinto no considerado en los rubros anteriores.</p>
                                </li>

                            </ol>
                        </li>
                        <li type="circle"> <p align="justify">Ingreso mensual neto del Declarante. Este
                                rubro se llenará automáticamente.</p>
                        </li>

                        <li type="circle"> <p align="justify">Total de ingresos netos percibidos por el
                                Declarante, Pareja y/o dependientes económicos. Este
                                rubro se llenará automáticamente.</p>
                        </li>
                    </ul>
              </ol>
                <p align="justify">Aclaraciones/observaciones. En este espacio podrá realizar las aclaraciones u observaciones que considere pertinentes respecto de alguno o algunos de los incisos de este apartado.</p>

          </div>
      </div>
        <div class="card-body">
          {!! Form::open(['route'=>'ingreso_neto.store', 'method'=>'POST', 'files' => true, 'role' => 'form','id' => 'frmIngresosNetos']) !!}
             @include('ingresosNetos.form')
          {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

