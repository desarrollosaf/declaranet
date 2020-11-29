@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <div class="float-left">
                <h3>BIENES INMUEBLES</h3> <small><h6> (A la fecha de ingreso)</h6></small>
            </div>
            <div class="float-right">
                <span class="badge badge-success ml-auto px-4" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> AYUDA</span>
            </div>
        </div>
        <div class="collapse" id="collapseExample">
              <div class="card card-body">
                Reportar aquellos bienes que conforme a la normatividad aplicable se consideran inmuebles.

                <ol>
                    <li>Tipo de inmueble. Seleccionar el tipo de bien inmueble que se declara: casa, departamento, edificio, local comercial, bodega, palco, rancho, terreno y otro, especifique.</li>
                    <li>Titular del inmueble. Seleccionar alguna de las opciones del catálogo desplegable.</li>
                    <li>Tipo de tercero. En caso de copropiedad con un tercero, seleccionar si es persona física o persona moral.</li>
                    <li>Nombre del tercero. En caso de copropiedad, escribir el nombre o nombres completos, así como apellidos completos sin abreviaturas y sin acentos ni signos especiales. Si se trata de persona moral deberá proporcionar la denominación o razón social de la institución tal y como se encuentra en el documento con el que se acredita la adquisición.</li>
                    <li>RFC. En caso de personas físicas proporcionar los trece dígitos. En el caso de personas morales establecer los doce dígitos.</li>
                    <li>Porcentaje de propiedad del Declarante conforme a escrituración o contrato. En caso de que el Declarante sea el único dueño deberá poner el cien por ciento, de no ser así señalará el porcentaje que le corresponda, de acuerdo a la escritura o contrato.</li>
                    <li>Superficie del terreno. Señalar en metros cuadrados la superficie total del terreno.</li>
                    <li>Superficie de construcción. Señalar en metros cuadrados la superficie total de construcción.</li>
                    <li>Forma de adquisición. Seleccionar alguna de las opciones del catálogo.</li>
                    <li>Forma de pago. Seleccionar la forma en que realizó el pago para adquirir el inmueble, en caso de que no haya pagado por el mismo, indicará no aplica.</li>
                    <li>Tipo de transmisor de la propiedad. Seleccionar si es persona física o persona moral.</li>
                    <li>Nombre o razón social del transmisor de la propiedad. Escribir el nombre o nombres completos, así como apellidos completos sin abreviaturas y sin acentos ni signos especiales. Si se trata de persona moral deberá proporcionar la denominación o razón social de la institución tal y como se encuentra en el documento con el que se acredita la adquisición.</li>
                    <li>RFC. En caso de personas físicas señalar los trece dígitos. En caso de personas morales establecer los doce dígitos.</li>
                    <li>Relación del transmisor de la propiedad con el titular. Seleccionar alguna de las opciones del catálogo desplegable y en caso de seleccionar otro especificar.</li>
                    <li>Valor de adquisición. Proporcionar el monto de adquisición, conforme al documento con el que se acredita la compra del bien inmueble.</li>
                    <li>El valor de adquisición es conforme a: Seleccionar si fue conforme a escritura pública, conforme a sentencia o contrato.</li>
                    <li>Tipo de moneda. Seleccionar la moneda relativa al valor de adquisición.</li>
                    <li>Fecha de adquisición del inmueble. Señalar la fecha de adquisición del inmueble, conforme al documento con el que se acredita la propiedad.</li>
                    <li> Datos del registro público de la propiedad, folio real u otro dato que permita su identificación. Señalar el número de escritura pública, folio real o cualquier dato que lo identifique.</li>
                    <li>Ubicación del inmueble. Proporcionar los datos relativos al lugar donde se ubica el inmueble declarado. Seleccionando si es en México o en el extranjero.</li>

                </ol>
                En caso de seleccionar México, proporcionar los siguientes datos: calle, número exterior, número interior (si aplica), colonia o localidad, municipio o alcaldía, entidad federativa y código postal.
                <br><br>
                En caso de seleccionar extranjero, proporcionar los siguientes datos: calle, número exterior, número interior (si aplica), ciudad/localidad, estado o provincia, país, código postal.
                <br>
                <br>
                Aclaraciones/observaciones. En este espacio podrá realizar las aclaraciones u observaciones que considere pertinentes respecto de alguno o algunos de los incisos de este apartado.


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