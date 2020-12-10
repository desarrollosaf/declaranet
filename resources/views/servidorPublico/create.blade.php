@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <div class="float-left">
                 <h3>¿TE DESEMPEÑASTE COMO SERVIDOR PÚBLICO EN EL AÑO INMEDIATO ANTERIOR?</h3>
                </div>
                <div class="float-right">
                    <span class="badge badge-success ml-auto px-4" data-toggle="collapse" href="#collapseServidor" role="button" aria-expanded="false" aria-controls="collapseExample"> AYUDA</span>
                </div>
            </div>
            <div class="collapse" id="collapseServidor">
                <div class="card-body">
                    <strong> ¿Te desempeñaste como servidor público en el año inmediato anterior?</strong><br>
                    Únicamente aplica para la declaración de inicio y conclusión y no para la de modificación, en razón de que esta última refiere la situación del año inmediato anterior.

                    En el caso de que el Declarante señale sí, proporcionará la siguiente información.
                    <ol class="ayuda">


                    <li>Fecha de inicio. Señalar la fecha en que ingresó al cargo. </li>
                    <li>Fecha de conclusión. Señalar la fecha en que concluyó el encargo. </li>
                    <li>Remuneración neta del Declarante, recibida durante el tiempo en el que se desempeñó como servidor público en el año inmediato anterior. (Por conceptos de sueldos, honorarios,
                    compensaciones, bonos, aguinaldos y otras prestaciones). (Cantidades netas después de
                    impuestos). Declarar el monto neto que obtuvo durante el tiempo que se desempeñó como servidor público el año inmediato anterior. Este monto deberá incluir sueldo, honorarios, compensaciones, bonos, aguinaldos y otras prestaciones. </li>
                    <li>Otros ingresos del Declarante recibidos durante el año inmediato anterior. Este rubro se llena automáticamente. </li>
                    <li>Por actividad industrial, comercial y/o empresarial (después de impuestos). Señalar el
                    monto neto recibido durante el año inmediato anterior, por alguna o algunas de las actividades descritas. </li>
                    <li>Nombre o razón social. Proporcionar el nombre, razón social o denominación del negocio, en el cual se lleva a cabo la actividad o alguna de las actividades antes mencionadas por la cual se generó el ingreso.
                    <li>Tipo de negocio. Señalar el tipo de negocio por el cual obtuvo el ingreso. </li>
                    <li>Por actividad financiera (rendimientos o ganancias) (después de impuestos). Señalar el
                    monto neto recibido durante el año inmediato anterior, de los rendimientos o ganancias que en su caso se hayan generado por su actividad financiera. </li>
                    <li>Tipo de instrumento que generó el rendimiento o ganancia. Seleccionar el instrumento que
                    generó el rendimiento o ganancia de las siguientes opciones: capital, fondos de inversión,
                    organizaciones privadas, seguro de separación individualizado, valores bursátiles, bonos y/u otros (especifique). </li>


                    </ol>
                </div>
            </div>
            <div class="card-body">
                {!! Form::open(['route'=>'servidor_publico.store', 'method'=>'POST', 'files' => true, 'role' => 'form','id' => 'frmIngresosNetos']) !!}
                @include('servidorPublico.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
