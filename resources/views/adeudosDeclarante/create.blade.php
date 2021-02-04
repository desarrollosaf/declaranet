@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <div class="float-left">
                <h3>ADEUDOS / PASIVOS</h3>
                <h6 class="card-subtitle">(A LA FECHA DE INGRESO)</h6>
            </div>
            <div class="float-right">
                <span class="badge badge-success ml-auto px-4" data-toggle="collapse" href="#collapseAdeudos" role="button" aria-expanded="false" aria-controls="collapseExample"> AYUDA</span>
            </div>
        </div>
        <div class="collapse" id="collapseAdeudos">
            <div class="card card-body">
                <ol>
                    <li><p align="justify"><strong>Titular del adeudo.</strong> Seleccionar alguna de las opciones del catálogo desplegable. En caso de señalar codeudor deberá indicar el nombre del tercero o terceros.</p></li>
                    <li><p align="justify"><strong>Tipo de adeudo.</strong> Seleccionar cualquiera de las siguientes opciones: crédito hipotecario, crédito automotriz, crédito personal, tarjeta de crédito bancaria, tarjeta de crédito departamental y préstamo personal, otros.<br>
                        Se entenderá por crédito personal, aquel obtenido ante una institución de crédito o bancaria.<br>
                            Se entenderá por préstamo personal, aquel obtenido a través de un familiar, amigo y/o conocido del Declarante.</p>
                    </li>
                    <li><p align="justify"><strong>Codeudor.</strong> En caso de ser codeudor con un tercero, seleccionar si es persona física o persona moral.</p></li>
                    <li><p align="justify"><strong>Nombre del codeudor.</strong> En caso de señalar codeudor, escribir el nombre, así como apellidos completos sin abreviaturas y sin acentos ni signos especiales. Si se trata de persona moral deberá proporcionar la denominación o razón social de la institución tal y como se encuentra en el documento con el que se acredita la adquisición.</p></li>
                    <li><p align="justify"><strong>RFC.</strong> En caso de personas físicas proporcionar los trece dígitos. En caso de personas morales establecer los doce dígitos.</p></li>
                    <li><p align="justify"><strong>Número de cuenta o contrato.</strong> Señalar el número de contrato, cuenta o cualquier dato que permita su identificación, en caso de préstamo personal se indicará no aplica.</p></li>
                    <li><p align="justify"><strong>Fecha de adquisición del adeudo/pasivo.</strong> Indicar la fecha en que adquirió el adeudo.</p></li>
                    <li><p align="justify"><strong>Monto original del adeudo/pasivo.</strong> Es necesario capturar cantidades sin comas, sin puntos, sin centavos y sin ceros a la izquierda. El monto a reportar será el inicial al adeudo.</p></li>
                    <li><p align="justify"><strong>Tipo de moneda.</strong> Seleccionar la moneda relativa al adeudo.</p></li>
                    <li><p align="justify"><strong>Saldo insoluto.</strong> Es necesario capturar cantidades sin comas, sin puntos, sin centavos y sin ceros a la izquierda.</p></li>
                    <li><p align="justify"><strong>Otorgante del crédito.</strong> Seleccionar si es persona física o persona moral.</p></li>
                    <li><p align="justify"><strong>Nombre, Institución o razón social (si aplica).</strong> Señalar el nombre de la institución donde contrajo la deuda.</p></li>
                    <li><p align="justify"><strong>RFC.</strong> En caso de personas físicas proporcionar los trece dígitos. En caso de personas morales establecer los doce dígitos.</p></li>
                    <li><p align="justify"><strong>Dónde se localiza el adeudo.</strong> Indicar si se encuentra en México o en el extranjero, debiendo señalar el país donde se localiza.</p></li>
                </ol>

                <p align="justify"><strong>Aclaraciones/observaciones.</strong> En este espacio podrá realizar las aclaraciones u observaciones que considere pertinentes respecto de alguno o algunos de los incisos de este apartado.</p>

          </div>
      </div>
        <div class="card-body">
            <div class="alert alert-danger" role="alert">
                Todos los datos de los adeudos / pasivos a nombre de la pareja,
                dependientes económicos y/o terceros o que sean en copropiedad
                con el Declarante no serán públicos.
            </div>
            <label>ADEUDOS DEL DECLARANTE, PAREJA Y/O DEPENDIENTES ECONÓMICOS.</label>
            <hr>
            {!! Form::open(['route'=>'adeudos.store', 'method'=>'POST', 'files' => true, 'role' => 'form', 'id' => '']) !!}
                @include('adeudosDeclarante.form')
            {!! Form::close() !!}

        </div>
    </div>
@endsection
