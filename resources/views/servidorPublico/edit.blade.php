@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <div class="float-left">
                    <h4>¿TE DESEMPEÑASTE COMO SERVIDOR PÚBLICO EN EL AÑO INMEDIATO ANTERIOR?</h4>
                </div>
                <div class="float-right">
                    <span class="badge badge-success ml-auto px-4" data-toggle="collapse" href="#collapseServidor"
                          role="button" aria-expanded="false" aria-controls="collapseExample"> AYUDA</span>
                </div>
            </div>
            <div class="collapse" id="collapseServidor">
                <div class="card-body">
                    <p align="justify"> <strong> ¿Te desempeñaste como servidor público en el año inmediato anterior?</strong><br>
                        Únicamente aplica para la declaración de inicio y conclusión y no para la de modificación, en razón de que esta última refiere la situación del año inmediato anterior.
                        En el caso de que el Declarante señale sí, proporcionará la siguiente información.
                    </p>
                    <ol class="ayuda">
                        <li><p align="justify"><strong>Fecha de inicio.</strong>  Señalar la fecha en que ingresó al cargo. </p></li>
                        <li><p align="justify"><strong>Fecha de conclusión.</strong>  Señalar la fecha en que concluyó el encargo. </p></li>
                        <li><p align="justify"><strong>Remuneración neta del Declarante, recibida durante el tiempo en el que se desempeñó como servidor público en el año inmediato anterior. </strong> (Por conceptos de sueldos, honorarios, compensaciones, bonos, aguinaldos y otras prestaciones). (Cantidades netas después de impuestos). Declarar el monto neto que obtuvo durante el tiempo que se desempeñó como servidor público el año inmediato anterior. Este monto deberá incluir sueldo, honorarios, compensaciones, bonos, aguinaldos y otras prestaciones. </p></li>
                        <li><p align="justify"><strong>Otros ingresos del Declarante recibidos durante el año inmediato anterior.</strong>  Este rubro se llena automáticamente. </p></li>
                        <li><p align="justify"><strong>Por actividad industrial, comercial y/o empresarial (después de impuestos).</strong>  Señalar el monto neto recibido durante el año inmediato anterior, por alguna o algunas de las actividades descritas. </p></li>
                        <li><p align="justify"><strong>Nombre o razón social. </strong> Proporcionar el nombre, razón social o denominación del negocio, en el cual se lleva a cabo la actividad o alguna de las actividades antes mencionadas por la cual se generó el ingreso.
                        <li><p align="justify"><strong>Tipo de negocio.</strong>  Señalar el tipo de negocio por el cual obtuvo el ingreso. </p></li>
                        <li><p align="justify"><strong>Por actividad financiera (rendimientos o ganancias) (después de impuestos).</strong>  Señalar el monto neto recibido durante el año inmediato anterior, de los rendimientos o ganancias que en su caso se hayan generado por su actividad financiera. </p></li>
                        <li><p align="justify"><strong>Tipo de instrumento que generó el rendimiento o ganancia.</strong>  Seleccionar el instrumento que generó el rendimiento o ganancia de las siguientes opciones: capital, fondos de inversión, organizaciones privadas, seguro de separación individualizado, valores bursátiles, bonos y/u otros (especifique). </p></li>
                    </ol>
                </div>
                <hr>
            </div>
            <div class="card-body">
                {!! Form::open(['route'=>['servidor_publico.update', $ingreso->id], 'method'=>'PUT', 'files' => true, 'role' => 'form','id' => 'frmIngresosNetos']) !!}
                @include('servidorPublico.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
