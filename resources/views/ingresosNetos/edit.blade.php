@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <div class="float-left">
                <h4>INGRESOS NETOS DEL DECLARANTE, PAREJA Y/O DEPENDIENTES ECONÓMICOS</h4>
                <h6 class="card-subtitle">(SITUACIÓN ACTUAL)</h6>
                <strong>Capturar cantidades libres de impuestos, sin comas, puntos, centavos y ceros a la izquierda</strong>
            </div>
            <div class="float-right">
                <span class="badge badge-success ml-auto px-4" data-toggle="collapse" href="#collapseDatosEmpleo" role="button" aria-expanded="false" aria-controls="collapseExample"> AYUDA</span>
            </div>
        </div>
        <div class="collapse" id="collapseDatosEmpleo">
            <div class="card-body">
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
                        <li type="circle"> <p align="justify"><strong>Remuneración neta </strong> del Declarante por su cargo público (por concepto de sueldos, honorarios, compensaciones, bonos y otras prestaciones) (Cantidades netas después de impuestos). Es el ingreso neto que recibe el Declarante incluyendo bonos, compensaciones u otras prestaciones, se recomienda manifestar la cantidad que se encuentra en su recibo de nómina.</p></li>
                        <li type="circle"> <p align="justify"><strong>Otros ingresos del Declarante.</strong> Este rubro se llenará automáticamente.</p>
                            <ol class="ayuda">
                                <li> <p align="justify"><strong>Por actividad industrial, comercial y/o empresarial (después de impuestos).</strong> Señalar el monto neto por alguna o algunas de las actividades descritas.</p></li>
                                <li> <p align="justify"><strong>Nombre o razón social.</strong> Proporcionar el nombre, razón social o denominación del negocio, en el cual se lleva a cabo la actividad o alguna de las actividades antes mencionadas por la cual se genera el ingreso.</p></li>
                                <li> <p align="justify"><strong>Tipo de negocio.</strong> Señalar el tipo de negocio por el cual obtuvo el ingreso.</p></li>
                                <li> <p align="justify"><strong>Por actividad financiera (rendimientos o ganancias) (después de impuestos).</strong> Señalar el monto neto, de los rendimientos o ganancias que en su caso se hayan generado por su actividad financiera.</p></li>
                                <li> <p align="justify"><strong>Tipo de instrumento que generó el rendimiento o ganancia.</strong> Deberá seleccionar el instrumento que generó el rendimiento o ganancia de las siguientes opciones: capital, fondos de inversión, organizaciones privadas, seguro de separación individualizado, valores bursátiles, bonos y/u otros (especifique).</p></li>
                                <li> <p align="justify"><strong>Por servicios profesionales, consejos, consultorías y/o asesorías (después de impuestos).</strong>Señalar el monto neto, que obtenga derivado de servicios profesionales distintos al empleo, cargo o comisión que desempeñe, por su participación en consejos o consultorías, y/o por asesorías que le generen alguna remuneración económica.</p></li>
                                <li> <p align="justify"><strong>Tipo de servicio prestado.</strong> Indicar el tipo de servicio que otorga, el tipo de participación en los consejos o consultorías, así como el tipo de asesorías que llevo a cabo.</p></li>
                                <li> <p align="justify"><strong>Otros ingresos no considerados a los anteriores (después de impuestos). </strong> Señalar el monto neto, de algún otro ingreso que no esté considerado en los numerales que anteceden.</p></li>
                                <li> <p align="justify"><strong>Especificar tipo de ingreso.</strong> Indicar si el ingreso derivó de arrendamiento, regalía, sorteos, concursos, donaciones, seguro de vida o algún otro concepto distinto no considerado en los rubros anteriores.</p></li>
                            </ol>
                        </li>
                        <li type="circle"> <p align="justify"><strong>Ingreso mensual neto del Declarante.</strong> Este rubro se llenará automáticamente.</p></li>
                        <li type="circle"> <p align="justify"><strong>Total de ingresos netos percibidos por el Declarante, Pareja y/o dependientes económicos.</strong> Este rubro se llenará automáticamente.</p></li>
                    </ul>
                </ol>
                <p align="justify"><strong>Aclaraciones/observaciones.</strong> En este espacio podrá realizar las aclaraciones u observaciones que considere pertinentes respecto de alguno o algunos de los incisos de este apartado.</p>
            </div>
        </div>
        <div class="card-body">
            {!! Form::open(['route'=>["ingreso_neto.update", $id], 'method'=>'PUT', 'files' => true, 'role' => 'form','id' => 'frmIngresosNetos']) !!}
                @include('ingresosNetos.form')
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
