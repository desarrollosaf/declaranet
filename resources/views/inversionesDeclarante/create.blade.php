@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
            <div class="float-left">
                <h4>INVERSIONES, CUENTAS BANCARIAS Y OTRO TIPO DE VALORES/ACTIVOS</h4>
                <h6 class="card-subtitle">(A LA FECHA DE INGRESO)</h6>
            </div>
            <div class="float-right">
                <span class="badge badge-success ml-auto px-4" data-toggle="collapse" href="#collapseInversion" role="button" aria-expanded="false" aria-controls="collapseExample"> AYUDA</span>
            </div>
        </div>
        <div class="collapse" id="collapseInversion">
            <div class="card card-body">

              <ol>
                  <li><p align="justify"> Tipo de inversión/activo. Elegir del catálogo la inversión, la cuenta o el valor a reportar, dependiendo la elección deberá señalar número de cuenta, número de contrato o número de póliza.</p></li>
                    <ul>
                        <li type="circle"><p align="justify">Bancaria. Seleccionar cualquiera de las siguientes opciones: cuenta de nómina, cuenta de ahorro, cuenta de cheques, cuenta maestra, cuenta eje y depósito a plazos.</p></li>
                        <li type="circle"><p align="justify">Fondos de inversión. Seleccionar cualquiera de las siguientes opciones: sociedades de inversión, inversiones financieras en el extranjero.</p></li>
                        <li type="circle"><p align="justify">Organizaciones privadas y/o mercantiles. Seleccionar cualquiera de las siguientes opciones: acciones o cajas de ahorro.</p></li>
                        <li type="circle"><p align="justify">Posesión de monedas y/o metales. Seleccionar cualquiera de las siguientes opciones: centenarios, divisas, moneda nacional, onzas troy, criptomonedas.</p></li>
                        <li type="circle"><p align="justify">Seguros. Seleccionar cualquiera de las siguientes opciones: seguro de separación individualizado, seguro de inversión y seguro de vida.</p></li>
                        <li type="circle"><p align="justify">Valores bursátiles. Seleccionar cualquiera de las siguientes opciones: acciones y derivados, aceptaciones bancarias, bonos gubernamentales, papel comercial.</p></li>
                        <li type="circle"><p align="justify">Afores y otros. Seleccionar cualquiera de las siguientes opciones: afores, fideicomisos, certificados de la tesorería, préstamos a favor de un tercero.</p></li>
                    </ul>
                  <li><p align="justify">Titular de la inversión, cuentas bancarias y otro tipo de valores/activos. Seleccionar alguna de las opciones del catálogo desplegable.</p></li>
                  <li><p align="justify">Tipo de tercero. En caso de copropiedad con un tercero, seleccionar si es persona física o persona moral.</p></li>
                  <li><p align="justify">Nombre del tercero. En caso de señalar copropiedad, escribir el nombre o nombres completos, así como apellidos completos sin abreviaturas y sin acentos ni signos especiales. Si se trata de persona moral deberá proporcionar la denominación o razón social de la institución tal y como se encuentra en el documento con el que se acredita la adquisición.</p></li>
                  <li><p align="justify">RFC. En caso de personas físicas proporcionar los trece dígitos. En el caso de personas morales establecer los doce dígitos.</p></li>
                  <li><p align="justify">Dónde se localiza la inversión. Indicar si se encuentra en México o en el extranjero, debiendo señalar el país donde se localiza.</p></li>
                  <li><p align="justify">Institución o razón social. Señalar el nombre de la institución donde se encuentran registradas las inversiones cuentas o valores.</p></li>
                  <li><p align="justify">RFC. Señalar los doce dígitos correspondientes. (Si aplica).</p></li>
                  <li><p align="justify">Número de cuenta, contrato o póliza. Señalar el número de cuenta, contrato, póliza o cualquier dato que permita su identificación.</p></li>
                  <li><p align="justify">Tipo de moneda. Deberá seleccionar la moneda relativa a la cuenta.</p></li>
                  <li><p align="justify">Saldo a la fecha de ingreso. Es necesario capturar cantidades sin comas, sin puntos, sin centavos y sin ceros a la izquierda.</p></li>
              </ol>
                <p align="justify">Aclaraciones/observaciones. En este espacio podrá realizar las aclaraciones u observaciones que considere pertinentes respecto de alguno o algunos de los incisos de este apartado.</p>

          </div>
      </div>
        <div class="card-body">
            <div class="alert alert-danger" role="alert">
                Todos los datos de las inversiones, cuentas bancarias y otros tipo de valores/activos a nombre de la pareja, dependientes económicos y/o terceros o que sean en copropiedad con el Declarante no serán públicos.
            </div>
            <h5> INVERSIONES, CUENTAS BANCARIAS Y OTRO TIPO DE VALORES DEL DECLARANTE, PAREJA Y/O DEPENDIENTES ECONÓMICOS.</h5>
            <hr>
            {!! Form::open(['route'=>'inversiones.store', 'method'=>'POST', 'files' => true, 'role' => 'form', 'id' => 'DatosDeclarante']) !!}
                @include('inversionesDeclarante.form')
            {!! Form::close() !!}
        </div>
    </div>
@endsection
