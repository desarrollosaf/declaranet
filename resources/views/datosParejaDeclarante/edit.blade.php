@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card mb-5 shadow-sm border-0 shadow-hover">
            <div class="card-header">
                <div class="float-left">
                    <h3>DATOS DE LA PAREJA</h3>
                </div>
                <div class="float-right">
                    <span class="badge badge-success ml-auto px-4" data-toggle="collapse" href="#collapsePareja"
                          role="button" aria-expanded="false" aria-controls="collapseExample"> AYUDA</span>
                </div>
            </div>
            <div class="collapse" id="collapsePareja">
                <div class="card card-body">
                    <p align="justify">
                        Proporcionar los datos del cónyuge, concubina/concubinario, con quien tenga una relación de
                        sociedad de convivencia o cualquier otro similar a los anteriores.
                        <br>
                        <br>
                        Para llenar este rubro es necesario tener a la vista acta de nacimiento del cónyuge o Pareja,
                        concubina/concubinario o sociedad de convivencia o cualquier otro documento donde se incluya la
                        información.
                        <br>
                        <br>
                    </p>
                    <ol>
                        <li><p align="justify"><strong>Nombre(s), primer y segundo apellidos.</strong> Escribir el
                                nombre o los nombres completos, así como los apellidos completos, sin abreviaturas, sin
                                acentos, ni signos especiales. Si se tiene un solo apellido deberá colocarse en el
                                espacio del primer apellido y dejar el espacio del segundo apellido en blanco.</p></li>
                        <li><p align="justify"><strong>Fecha de nacimiento. </strong>Señalar la fecha de nacimiento de
                                la Pareja en el formato de día, mes y año.</p></li>
                        <li><p align="justify"><strong>Registro Federal de Contribuyentes (RFC).</strong> Escribir los
                                diez caracteres básicos con los tres caracteres de la homoclave.</p></li>
                        <li><p align="justify"><strong>Relación con el Declarante.</strong> Seleccionar el tipo de
                                relación entre las siguientes opciones: cónyuge, concubina/concubinario/unión libre o
                                sociedad</p>de convivencia.
                        </li>
                        <li><p align="justify"><strong>¿Es ciudadano extranjero?</strong> Deberá indicar sí o no, según
                                el caso.</li>
                        <li><p align="justify"><strong>Clave Única de Registro de Población (CURP).</strong> Escribir
                                los dieciocho caracteres como la emitió la Secretaría de Gobernación. En caso de no
                                contar con ella, podrá consultarla en la página de la Secretaría de Gobernación, en el
                                apartado de Trámites. <a
                                    style="color:#1F1F1F !important;"
                                    href="https://www.sat.gob.mx/tramites/operacion/28753/obten-tu-rfc-con-la-clave-unica-de-registro-de-poblacion-(curp)"
                                    target="_blank">www.sat.gob.mx</a></p></li>
                        </li>
                        <li><p align="justify"><strong>¿Es dependiente económico? </strong>Si la manutención depende
                                principalmente de los ingresos del Declarante, señalará sí, en caso contrario señalará
                                no.</p></li>
                        <li><p align="justify"><strong>Habita en el domicilio del Declarante. </strong>Indicar sí o no,
                                la Pareja vive en el domicilio del Declarante.</p></li>
                        <li><p align="justify"><strong>Lugar donde reside.</strong> En caso de que la Pareja, no viva en
                                el domicilio del Declarante, indicar si vive en México, en el extranjero o si se
                                desconoce.</p></li>
                        <li><p align="justify"><strong>Domicilio de la Pareja.</strong> Seleccionar México, proporcionar
                                los siguientes datos: calle, número exterior, número interior (si aplica), colonia o
                                localidad, municipio o alcaldía, entidad federativa y código postal.
                                <br>
                                En caso de seleccionar extranjero, proporcionar los siguientes datos: calle, número
                                exterior, número interior (si aplica), ciudad/localidad, estado o provincia, país y
                                código postal.</p>
                        </li>
                        <li><p align="justify"><strong>Actividad laboral. </strong>Indicar si el cónyuge,
                                concubina/concubinario o sociedad de convivencia, se encuentra trabajando actualmente,
                                seleccionando alguno de los siguientes campos: privado, público, otro (especificar) o
                                ninguno.</p></li>
                    </ol>


                    <ol>
                        <li type="circle">Sector público.
                            <ol>
                                <li><p align="justify"><strong>Nivel/orden de gobierno.</strong> Seleccionar el orden de
                                        gobierno en el que se encuentra: federal, estatal o municipal/alcaldía.</p></li>
                                <li><p align="justify"><strong>Ámbito público.</strong> Señalar la naturaleza jurídica
                                        al que pertenece: ejecutivo, legislativo, judicial u órgano autónomo.</p></li>
                                <li><p align="justify"><strong>Nombre del Ente Público. </strong>Señalar el Ente Público
                                        al cual se encuentra adscrita la plaza.</p></li>
                                <li><p align="justify"><strong>Área de adscripción.</strong> Especificar el nombre de la
                                        Unidad Administrativa u homóloga superior inmediata en la que está adscrito.
                                        (Superior jerárquico).</p></li>
                                <li><p align="justify"><strong>Empleo, cargo o comisión.</strong> Señalar el nombre del
                                        empleo, cargo o comisión que se establece en su recibo de nómina, nombramiento,
                                        contrato u oficio de comisión.</p></li>
                                <li><p align="justify"><strong>Especifique función principal.</strong> Señalar cual es
                                        la función o actividad principal que desempeña su Pareja.</p></li>
                                <li><p align="justify"><strong>El salario neto</strong> es la cantidad final que percibe
                                        el trabajador después de todas las retenciones, este se obtiene restando al
                                        salario bruto las aportaciones de seguridad social y retenciones de impuestos
                                        establecidos según la ley mexicana (no incluye descuentos de caja de ahorro o
                                        cualquier préstamo y descuentos de estancia).</p></li>
                                <li><p align="justify"><strong>Fecha de ingreso al empleo.</strong> Señalar la fecha en
                                        que inició empleo, cargo o comisión.</p></li>
                            </ol>
                        </li>
                        <li type="circle">Sector privado/otro.
                            <ol>
                                <li><p align="justify"><strong>Nombre de la empresa, sociedad o asociación.</strong>
                                        Proporcionar el nombre de la empresa, sociedad o asociación en la que labora.
                                    </p></li>
                                <li><p align="justify"><strong>Puesto.</strong> Proporcionar el nombre del puesto que
                                        desempeña.</p></li>
                                <li><p align="justify"><strong>RFC. </strong>Proporcionar los 12 dígitos de la empresa
                                        en que labora su cónyuge, concubina/concubinario o sociedad de convivencia.</p>
                                </li>
                                <li><p align="justify"><strong>Fecha de ingreso al empleo. </strong>Señalar la fecha en
                                        que inició empleo, cargo o comisión.</p></li>
                                <li><p align="justify"><strong>Sector al que pertenece.</strong> Elegir el sector al que
                                        pertenece la empresa, sociedad o asociación. En caso de señalar otros,
                                        especifique.</p></li>
                                <li><p align="justify"><strong>El salario neto</strong> es la cantidad final que percibe
                                        el trabajador después de todas las retenciones, este se obtiene restando al
                                        salario bruto las aportaciones de seguridad social y retenciones de impuestos
                                        establecidos según la ley mexicana (no incluye descuentos de caja de ahorro o
                                        cualquier préstamo y descuentos de estancia).</p></li>
                                <li><p align="justify"><strong>¿Es proveedor o contratista del gobierno?</strong>
                                        Señalar sí o no, la Pareja vende o presta algún servicio al gobierno.</p></li>
                            </ol>
                        </li>
                    </ol>
                    <p align="justify"><strong>Aclaraciones/observaciones.</strong> En este espacio podrá realizar las
                        aclaraciones u observaciones que considere pertinentes respecto de alguno o algunos de los
                        incisos de este apartado.</p>
                </div>
            </div>
            <div class="card-body">
                {!! Form::open(['route'=>['datos_pareja_declarante.update', $pareja->id], 'method'=>'PUT', 'files' => true, 'role' => 'form', 'id' => 'datosDeclarante']) !!}
                @include('datosParejaDeclarante.form')
                {!! Form::close() !!}
                <div class="modal fade bd-example-modal-lg" id="form-laboral" tabindex="-1" role="dialog"
                     aria-labelledby="myLargeModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Modal title</h5>
                                <button type="button" class="close cancel" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="form-actividad">
                                    {!! csrf_field() !!}
                                    <div id="act-laborarl">
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <strong>{!! Form::label('actividadLaboral.ambito_sector_id', 'Ámbito / Sector :  *') !!}</strong>
                                                {!! Form::select('actividadLaboral[ambito_sector_id]', $sectores,null,['class'=>'form-control tipo-titular text-uppercase', 'id' => 'ambito-sector', 'placeholder' => "SELECCIONA UNA OPCIÓN", "required" => true, 'title' => 'Selecciona una opción']) !!}
                                            </div>
                                            <div class="form-group col-md-4 sector-privado-otro">
                                                <strong>{!! Form::label('actividadLaboral.ambito_sector_id', 'Tipo de empleador :  *') !!}</strong>
                                                {!! Form::select('actividadLaboral[regimen_fiscal_id]', $regimenFiscal, null,['class'=>'form-control tipo-titular text-uppercase', 'id' => 'regimen_fiscal_id', 'placeholder' => "SELECCIONA UNA OPCIÓN", "required" => true, 'title' => 'Selecciona una opción']) !!}
                                            </div>
                                        </div>
                                        <div class="sector-privado-otro">
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <div id="empleador_fisica">
                                                        <strong>{!! Form::label('empleador_fisica', 'Nombre del empleador: *') !!} </strong>
                                                    </div>
                                                    <div id="empleador_moral" style="display: none;">
                                                        <strong>{!! Form::label('empleador_moral', 'Nombre de la empresa, sociedad o asociación: *') !!} </strong>
                                                    </div>
                                                    {!! Form::text('actividadLaboral[nombre_empresa]', null,['class'=>'form-control tipo-titular text-uppercase', 'placeholder'=>'p. ej. Desarrollo S.A de C.V',  'id' => 'nombre-exp','title' => 'Ingresa Nombre de la empresa, sociedad o asociación']) !!}
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <strong>{!! Form::label('actividadLaboral.puesto', 'Puesto: *') !!}</strong>
                                                    {!! Form::text('actividadLaboral[puesto]',null,['class'=>'form-control tipo-titular text-uppercase', 'placeholder'=>'p.ej. Análista de Sistemas',  'id' => 'puesto', 'title' => 'Ingresa puesto']) !!}
                                                    <span class="text-danger" style="font-size:150%"></span>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <div id="empleador_fisica_RFC">
                                                        <strong>{!! Form::label('empleador_fisica', 'RFC: ') !!} </strong>
                                                    </div>
                                                    <div id="empleador_moral_RFC" style="display: none;">
                                                        <strong>{!! Form::label('empleador_moral', 'RFC: *') !!} </strong>
                                                    </div>
                                                    {!! Form::text('actividadLaboral[rfc]',null,['class'=>'form-control tipo-titular text-uppercase',  'id' => 'rfc', 'title' => 'Ingresa RFC']) !!}
                                                    <span class="text-danger" style="font-size:150%"></span>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <strong>{!! Form::label('actividadLaboral.fecha_ingreso', 'Fecha de ingreso al empleo: *') !!}</strong>
                                                    {!! Form::date('actividadLaboral[fecha_ingreso]',null,['class'=>'form-control tipo-titular text-uppercase fecha',  'id' => 'fecha_ingreso_privado', 'title' => 'Ingresa fecha de ingreso' ]) !!}
                                                    <span class="text-danger" style="font-size:150%"></span>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <strong>{!! Form::label('actividadLaboral.sector_id','Sector al que pertenece: *') !!}</strong>
                                                    {!! Form::select('actividadLaboral[sector_id]', $sector,null,['class'=>'form-control text-uppercase', 'id' => 'sector-privado', 'placeholder' => "SELECCIONA UNA OPCIÓN", 'title' => 'Selecciona una opción']) !!}
                                                    <span class="text-danger" style="font-size:150%"></span>
                                                </div>
                                                <div class="form-group col-md-4 especifique-sector">
                                                    <strong>{!! Form::label('actividadLaboral.especifique_otro_sector', 'Especifique otro sector: *') !!}</strong>
                                                    {!! Form::text('actividadLaboral[especifique_otro_sector]',null,['class'=>'form-control tipo-titular text-uppercase', 'placeholder'=>'p. ej. Sector petrolero',  'id' => 'especifique-sector','title' => 'Especifique sector']) !!}
                                                    <span class="text-danger" style="font-size:150%"></span>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <strong>{!! Form::label('actividadLaboral.salario_mensual_neto','Salario mensual neto: *') !!}</strong>
                                                    {!! Form::number('actividadLaboral[salario_mensual_neto]',null,['class'=>'form-control tipo-titular text-uppercase', 'placeholder'=>'p.ej. $10,000 Mxn',  'id' => 'salario_mensual_neto','title' => 'Ingresa salario']) !!}
                                                    <span class="text-danger" style="font-size:150%"></span>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <strong>{!! Form::label('actividadLaboral.respuesta_proveedor_id','¿Es proveedor o contratista de gobierno? *') !!}</strong>
                                                    {!! Form::select('actividadLaboral[respuesta_proveedor_id]',$respuesta, null,['class'=>'form-control tipo-titular text-uppercase', 'id' => 'proveedor_contratista', 'placeholder' => "SELECCIONA UNA OPCIÓN",'title' => 'Selecciona una opción']) !!}
                                                    <span class="text-danger" style="font-size:150%"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sector-publico">
                                            <div class="form-row">

                                                <div class="form-group col-md-4">
                                                    <strong>{!! Form::label('ente_publico', 'Nombre del Ente Público: *') !!}</strong>
                                                    {!! Form::text('actividadLaboral[ente_publico]',null,['class'=>'form-control tipo-titular text-uppercase', 'placeholder'=>'p. ej. Desarrollo de Sistemas S.A de C.V',  'id' => 'nombre_ente', 'title' => "Ingresa ente público"]) !!}
                                                    <span class="text-danger" style="font-size:150%"></span>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <strong>{!! Form::label('area_adscripcion', 'Área de adscripción: *') !!}</strong>
                                                    {!! Form::text('actividadLaboral[area_adscripcion]', null,['class'=>'form-control tipo-titular text-uppercase', 'placeholder'=>'p. ej. Desarrollo de Tecnología',  'id' => 'area', 'title' => "Ingresa área de adscripción"]) !!}
                                                    <span class="text-danger" style="font-size:150%"></span>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <strong>{!! Form::label('Empleo, cargo o comisión: *') !!}</strong>
                                                    {!! Form::text('actividadLaboral[cargo_comision]', null,['class'=>'form-control tipo-titular text-uppercase', 'placeholder'=>'p. ej. Analista de sistemas',  'id' => 'empleo','title' => 'Ingresa empleo, carco o comisión']) !!}
                                                    <span class="text-danger" style="font-size:150%"></span>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <strong>{!! Form::label('funcion_pricipal', 'Especifique función principal: *') !!}</strong>
                                                    {!! Form::text('actividadLaboral[funcion_pricipal]',null,['class'=>'form-control tipo-titular text-uppercase', 'placeholder'=>'p. ej. Desarrollo de sistemas de información',  'id' => 'funcio','title' => 'Ingresa función principal']) !!}
                                                    <span class="text-danger" style="font-size:150%"></span>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <strong>{!! Form::label('actividadLaboral.salario_mensual_neto_publico', 'Salario mensual neto: *') !!}</strong>
                                                    {!! Form::number('actividadLaboral[salario_mensual_neto_publico]',null,['class'=>'form-control tipo-titular text-uppercase', 'placeholder'=>'p.ej. $10,000 Mxn',  'id' => 'salario','title' => 'Ingresa salario ']) !!}
                                                    <span class="text-danger" style="font-size:150%"></span>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <strong>{!! Form::label('fecha_ingreso_publico', 'Fecha de ingreso al empleo: *') !!}</strong>
                                                    {!! Form::date('actividadLaboral[fecha_ingreso_publico]',null,['class'=>'form-control tipo-titular text-uppercase fecha', 'id' => 'fecha_publico','title' => 'Ingresa fecha de ingreso']) !!}
                                                    <span class="text-danger" style="font-size:150%"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-submit btn-submit-edit text-light btn-sm"
                                                id="button-submit">Guardar
                                        </button>
                                        <button type="submit" class="btn btn-submit btn-submit-add text-light btn-sm"
                                                id="button-submit">Agregar
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">

                                <div class="text-center">
                                    <button type="button" class="btn btn-secondary text-light btn-sm cancel"
                                            data-dismiss="modal">Cancelar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
