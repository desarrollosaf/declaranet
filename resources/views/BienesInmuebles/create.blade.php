@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <div class="float-left">
                <h3>BIENES INMUEBLES</h3>
                <h6 class="card-subtitle">(A LA FECHA DE INGRESO)</h6>
            </div>
            <div class="float-right">
                <span class="badge badge-success ml-auto px-4" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> AYUDA</span>
            </div>
        </div>
        <div class="collapse" id="collapseExample">
              <div class="card card-body">
               <p align="justify"> Reportar aquellos bienes que conforme a la normatividad aplicable se consideran inmuebles. </p>

                <ol>
                    <li><p align="justify">Tipo de inmueble. Seleccionar el tipo de bien inmueble que se declara: casa, departamento, edificio, local comercial, bodega, palco, rancho, terreno y otro, especifique.</p></li>
                    <li><p align="justify">Titular del inmueble. Seleccionar alguna de las opciones del catálogo desplegable.</p></li>
                    <li><p align="justify">Tipo de tercero. En caso de copropiedad con un tercero, seleccionar si es persona física o persona moral.</p></li>
                    <li><p align="justify">Nombre del tercero. En caso de copropiedad, escribir el nombre o nombres completos, así como apellidos completos sin abreviaturas y sin acentos ni signos especiales. Si se trata de persona moral deberá proporcionar la denominación o razón social de la institución tal y como se encuentra en el documento con el que se acredita la adquisición.</p></li>
                    <li><p align="justify">RFC. En caso de personas físicas proporcionar los trece dígitos. En el caso de personas morales establecer los doce dígitos.</p></li>
                    <li><p align="justify">Porcentaje de propiedad del Declarante conforme a escrituración o contrato. En caso de que el Declarante sea el único dueño deberá poner el cien por ciento, de no ser así señalará el porcentaje que le corresponda, de acuerdo a la escritura o contrato.</p></li>
                    <li><p align="justify">Superficie del terreno. Señalar en metros cuadrados la superficie total del terreno.</p></li>
                    <li><p align="justify">Superficie de construcción. Señalar en metros cuadrados la superficie total de construcción.</p></li>
                    <li><p align="justify">Forma de adquisición. Seleccionar alguna de las opciones del catálogo.</p></li>
                    <li><p align="justify">Forma de pago. Seleccionar la forma en que realizó el pago para adquirir el inmueble, en caso de que no haya pagado por el mismo, indicará no aplica.</p></li>
                    <li><p align="justify">Tipo de transmisor de la propiedad. Seleccionar si es persona física o persona moral.</p></li>
                    <li><p align="justify">Nombre o razón social del transmisor de la propiedad. Escribir el nombre o nombres completos, así como apellidos completos sin abreviaturas y sin acentos ni signos especiales. Si se trata de persona moral deberá proporcionar la denominación o razón social de la institución tal y como se encuentra en el documento con el que se acredita la adquisición.</p></li>
                    <li><p align="justify">RFC. En caso de personas físicas señalar los trece dígitos. En caso de personas morales establecer los doce dígitos.</p></li>
                    <li><p align="justify">Relación del transmisor de la propiedad con el titular. Seleccionar alguna de las opciones del catálogo desplegable y en caso de seleccionar otro especificar.</p></li>
                    <li><p align="justify">Valor de adquisición. Proporcionar el monto de adquisición, conforme al documento con el que se acredita la compra del bien inmueble.</p></li>
                    <li><p align="justify">El valor de adquisición es conforme a: Seleccionar si fue conforme a escritura pública, conforme a sentencia o contrato.</p></li>
                    <li><p align="justify">Tipo de moneda. Seleccionar la moneda relativa al valor de adquisición.</p></li>
                    <li><p align="justify">Fecha de adquisición del inmueble. Señalar la fecha de adquisición del inmueble, conforme al documento con el que se acredita la propiedad.</p></li>
                    <li><p align="justify">Datos del registro público de la propiedad, folio real u otro dato que permita su identificación. Señalar el número de escritura pública, folio real o cualquier dato que lo identifique.</p></li>
                    <li><p align="justify">Ubicación del inmueble. Proporcionar los datos relativos al lugar donde se ubica el inmueble declarado. Seleccionando si es en México o en el extranjero.</p></li>

                </ol>
                  <p align="justify">En caso de seleccionar México, proporcionar los siguientes datos: calle, número exterior, número interior (si aplica), colonia o localidad, municipio o alcaldía, entidad federativa y código postal.
                <br><br>
                En caso de seleccionar extranjero, proporcionar los siguientes datos: calle, número exterior, número interior (si aplica), ciudad/localidad, estado o provincia, país, código postal.
                <br>
                <br>
                Aclaraciones/observaciones. En este espacio podrá realizar las aclaraciones u observaciones que considere pertinentes respecto de alguno o algunos de los incisos de este apartado.
                  </p>

            </div>
        </div>
        <div class="card-body">
            {!! Form::open(['route'=>'bienes_inmuebles.store', 'method'=>'POST',  'role' => 'form', 'id' => 'frm_BienesInmuebles']) !!}
           @include('BienesInmuebles.form')
           {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
