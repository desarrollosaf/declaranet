@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card mb-5 shadow-sm border-0 shadow-hover">
        <div class="card-header">
            <div class="float-left">
                <h3 class="card-title mb-0">PRÉSTAMO O COMODATO POR TERCEROS</h3>
                <br>
                <h6 class="card-subtitle">(A la fecha de ingreso)</h6>
            </div>
            <div class="float-right">
                <span class="badge badge-success ml-auto px-4" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> AYUDA</span>
            </div>
        </div>
        <div class="collapse" id="collapseExample">
            <div class="card-body">
                Tipo de bien. Indicar el bien que le haya sido prestado.
                <ol>
                    <li><strong>Inmueble.</strong> Elegir alguna de las siguientes opciones: casa, departamento, edificio, local comercial, bodega, palco, rancho, terreno, otro (especifique).
                        <ul>
                            <li><strong>Ubicación del inmueble.</strong> Proporcionar los datos relativos al lugar donde se ubica el inmueble declarado. Seleccionando si es en México o en el extranjero.<br>
                                En caso de seleccionar México, proporcionar los siguientes datos: calle, número exterior, número interior (si aplica), colonia o localidad, municipio o alcaldía, entidad federativa y código postal.<br>
                                En caso de seleccionar extranjero, proporcionar los siguientes datos: calle, número exterior, número interior (si aplica), ciudad/localidad, estado o provincia, país, código postal.
                            </li>

                        </ul>
                    </li>
                    <li><strong>Vehículo.</strong> Seleccionar el tipo de vehículo del listado desplegable: automóvil/motocicleta, aeronave, barco/yate, otro, especifique.
                        <ol>
                            <li><strong>Marca.</strong> Elegir la marca del catálogo desplegable.</li>
                            <li><strong>Modelo.</strong> Señalar el modelo del vehículo, de acuerdo a la marca. (Ejemplo: marca Renault, modelo Clío).</li>
                            <li><strong>Año.</strong> Indicar el año del vehículo.</li>
                            <li><strong>Número de serie o registro.</strong> Proporcionar el número de serie o registro que aparece en la factura y/o en su caso, tarjeta de circulación.</li>
                            <li><strong>Donde se encuentra registrado.</strong> Indicar si se encuentra registrado en México o en el extranjero. Señalando la entidad federativa o país según corresponda.</li>
                            <li><strong>Dueño o titular.</strong> Seleccionar si es persona física o persona moral.</li>
                            <li><strong>Nombre del dueño o el titular.</strong> Deberá proporcionar el nombre completo y/o razón social del propietario del bien prestado y usado por el Declarante.</li>
                            <li><strong>RFC.</strong> En caso de personas físicas proporcionar los trece dígitos. En caso de personas morales establecer los doce dígitos.</li>
                            <li><strong>Relación con el dueño o el titular.</strong> Indicar que tipo de relación existe en entre el dueño del bien prestado y el Declarante.</li>

                        </ol>
                    </li>

                </ol>

                <strong>Aclaraciones/observaciones.</strong> En este espacio podrá realizar las aclaraciones u observaciones que considere pertinentes respecto de alguno o algunos de los incisos de este apartado.
            </div>
        </div>
        <div class="card-body">
            {!! Form::open(['route'=>'prestamos.store', 'method'=>'POST', 'files' => true, 'role' => 'form', 'id' => 'prestamosForm']) !!}
            @include('Prestamos.form')
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
