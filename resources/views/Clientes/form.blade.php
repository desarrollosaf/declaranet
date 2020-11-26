<div class="card-body">
    <span style="text-align: justify !important; margin-left:15px"> Se manifiestará el beneficio o ganancia directa del Declarante, si supera al mes 250 Unidades de Medida y Actualización (UMA).</span><br><br>
    <div class="alert alert-danger" role="alert" style="background-color:#E8CECF">
        Todos los datos de clientes de la pareja o dependientes económicos no serán públicos.<br>
    </div>


    <!-- Primera fila  -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="form-group">
                    <br>
                    <label class="control-label" for="NumDoc">¿Realiza alguna actividad lucrativa independiente al
                        empleo, cargo o comisión?</label>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    {!! Form::select('respuesta', $selectRespuestas, null,['class'=>'form-control alert-danger',  'id' => 'respuesta']) !!}
                </div>
            </div>

        </div>
    </div>
    <div id="contenedores" style="display:none">
        <!-- Primera fila  -->
        <div class="container">
            <div class="row">

                <div class="col-lg-4">
                    <div class="form-group">
                        {!! Form::label('relacion', ' Relación con el Declarante: * :') !!}
                        {!! Form::select('relacion', $selectRelacioDeclarante, null,['class'=>'form-control alert-danger',  'id' => 'relacion']) !!}
                        <span class="text-danger" style="font-size:150%"></span>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            {!! Form::label('nombre_empresa', 'Nombre de la empresa o del servicio:') !!}
                            {!! Form::text('nombre_empresa',null,['class'=>'form-control alert-danger', 'placeholder'=>'p. eje. MAE S.A de C.V',  'id' => 'nombre_empresa']) !!}
                            <span class="text-danger" style="font-size:150%"></span>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            {!! Form::label('RFC', 'RFC:') !!}
                            {!! Form::text('RFC',null,['class'=>'form-control alert-danger', 'placeholder'=>'P. EJ. XAXX010101XXX',  'id' => 'RFC']) !!}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Segunda fila  -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            {!! Form::select('TipoDePersona', $selectTipoDePersona, null,['class'=>'form-control alert-danger',  'id' => 'TipoDePersona']) !!}
                        </div>
                    </div>
                    <div class="col-lg-4" id="terceroFdisabled">
                        <div class="form-group">
                            {!! Form::label('Nombre del cliente principal', 'Nombre del cliente principal:') !!}
                            {!! Form::text('Nombre del cliente principal',null,['class'=>'form-control alert-danger', 'placeholder'=>'p. ej. Juan Pérez',  'id' => 'Nombre del cliente principal']) !!}
                        </div>
                    </div>
                    <div class="col-lg-4" id="terceroMdisabled">
                        <div class="form-group">
                            {!! Form::label('RFC', 'RFC:') !!}
                            {!! Form::text('RFC',null,['class'=>'form-control alert-danger', 'placeholder'=>'p. ej. XXXX010101',  'id' => 'RFC']) !!}
                        </div>
                    </div>
                    <div class="col-lg-4" id="terceroFisicaTraNombre" style="display: none;">
                        <div class="form-group">
                            {!! Form::label('RFC', 'RFC:') !!}
                            {!! Form::text('RFC',null,['class'=>'form-control alert-danger', 'placeholder'=>'p. ej. XXXX010101',  'id' => 'RFC']) !!}
                        </div>

                            <label class="control-label" for="NumDoc">Nombre del cliente principal:</label>
                            <input type="text" name="c_princialesNombreF" id="c_princialesNombreF" class="form-control"
                                   placeholder="p. ej. Juan Pérez."
                                   pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}"
                                   title="Ingresa nombre" value="">
                        </div>
                    </div>

                    <div class="col-lg-4" id="terceroFisicaTraRFC" style="display: none;">
                        <div class="form-group">
                            <label class="control-label" for="ProcessNum">RFC:</label>
                            <input type="text" name="c_princialesRfcF" id="c_princialesRfcF" class="form-control"
                                   placeholder="p. ej. XXXX010101" maxlength="13"
                                   pattern="([A-Z]{4}([0-9]{6}[A-Z0-9]{3})" title="Ingresa RFC a 13 dígitos" value="">
                        </div>
                    </div>

                    <div class="col-lg-4" id="terceroMoralTraDeno" style="display: none;">
                        <div class="form-group">
                            <label class="control-label" for="NumDoc">Razón social del cliente principal:</label>
                            <input type="text" name="c_princialesNombreM" id="c_princialesNombreM" class="form-control"
                                   placeholder="p. ej. Desarrollo y Redes S.A. de C.V."
                                   pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}"
                                   title="Ingresa nombre" value="">
                        </div>
                    </div>

                    <div class="col-lg-4" id="terceroMoralTraRFC" style="display: none;">
                        <div class="form-group">
                            <label class="control-label" for="ProcessNum">RFC:</label>
                            <input type="text" name="c_princialesRfcM" id="c_princialesRfcM" class="form-control"
                                   placeholder="p. ej. XXX010101" maxlength="12"
                                   pattern="([A-Z]{3}([0-9]{6}[A-Z0-9]{3})" title="Ingresa RFC a 12 dígitos" value="">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tercer fila  -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="control-label" for="NumDoc">Sector productivo al que pertenece:</label>
                            <select name="dsp_D_sector" id="dsp_D_sector" class="form-control" required=""
                                    onchange="MostrarOtro();">
                                <option value="">Seleccione una opción</option>
                                <option value="AGRI">AGRICULTURA</option>
                                <option value="MIN">MINERÍA</option>
                                <option value="EELECT">ENERGÍA ELÉCTRICA</option>
                                <option value="CONS">CONSTRUCCIÓN</option>
                                <option value="INDMANU">INDUSTRIA MANUFACTURERA</option>
                                <option value="CMAYOR">COMERCIO AL POR MAYOR</option>
                                <option value="CMENOR">COMERCIO AL POR MENOR</option>
                                <option value="TRANS">TRANSPORTE</option>
                                <option value="MEDIOM">MEDIOS MASIVOS</option>
                                <option value="SERVFIN">SERVICIOS FINANCIEROS</option>
                                <option value="SERVINM">SERVICIOS INMOBILIARIOS</option>
                                <option value="SERVPROF">SERVICIOS PROFESIONALES</option>
                                <option value="SERVCORP">SERVICIOS CORPORATIVOS</option>
                                <option value="SERVS">SERVICIOS DE SALUD</option>
                                <option value="SERVESPAR">SERVICIOS DE ESPARCIMIENTO</option>
                                <option value="SERVALOJ">SERVICIOS DE ALOJAMIENTO</option>
                                <option value="OTRO">OTRO (ESPECIFIQUE)</option>
                            </select></div>
                    </div>

                    <div class="col-lg-4" id="otro_Disabled">
                        <div class="form-group">
                            <label class="control-label" style="text-align:justify">Especifique:</label>
                            <input type="text" disabled="" class="form-control" placeholder="p. ej. Sector petrolero"
                                   title="Ingresa otro">
                        </div>
                    </div>

                    <div class="col-lg-4" id="otro" style="display: none;">
                        <div class="form-group">
                            <label class="control-label" style="text-align:justify">Especifique:</label>
                            <input type="text" name="otro" id="otro" class="form-control"
                                   placeholder="p. ej. Depto. de Informática"
                                   pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}"
                                   title="Ingresa otro" value="">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quinta fila  -->
            <div class="container">
                <div class="row">

                    <div class="col-lg-4">
                        <div class="form-group">
                            <label class="control-label" style="line-height : 13px;">Monto aproximado del beneficio o
                                ganancia mensual que obtiene del cliente principal:</label>
                            <input type="number" class="form-control" name="c_principales_m_aprox"
                                   id="c_principales_m_aprox" pattern="[0-9]{10}" title="Ingresa un número entero"
                                   required="" placeholder="p. eje. 10,000.00 Mxn" value="">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <label class="control-label" for="ProcessNum">Lugar donde se ubica:</label>
                        <select name="dsp_D_extranjero" id="dsp_D_extranjero" class="form-control" required=""
                                onchange="lugar_res_Ex();">
                            <option value="">Seleccione una opción</option>
                            <option value="MX">MEXICO</option>
                            <option value="EX">EXTRANJERO</option>
                        </select></div>

                    <div class="col-lg-4">
                        <div class="form-group">
                            <!-- MX  -->
                            <div id="dom_mex" style="display: none;">
                                <label class="control-label" for="ProcessNum">Entidad federativa:</label>
                                <input class="form-control" id="c_princialesEntidad" name="c_princialesEntidad"
                                       required="" type="text" placeholder=" p. ej. México" value="">
                            </div>
                            <!-- EX  -->
                            <div id="dom_ext" style="display: none;">
                                <label class="control-label" for="ProcessNum">País donde se localiza:</label>
                                <select name="dsp_D_paises" id="dsp_D_paises" class="form-control" required="">
                                    <option value="">Seleccione una opción</option>
                                    <option value="ABW">Aruba</option>
                                    <option value="AFG">Afganistán</option>
                                    <option value="AGO">Angola</option>
                                    <option value="AIA">Anguila</option>
                                    <option value="ALA">Islas Åland</option>
                                    <option value="ALB">Albania</option>
                                    <option value="AND">Andorra</option>
                                    <option value="ARE">Emiratos Árabes Unidos (Los)</option>
                                    <option value="ARG">Argentina</option>
                                    <option value="ARM">Armenia</option>
                                    <option value="ASM">Samoa Americana</option>
                                    <option value="ATA">Antártida</option>
                                    <option value="ATF">Territorios Australes Franceses (los)</option>
                                    <option value="ATG">Antigua y Barbuda</option>
                                    <option value="AUS">Australia</option>
                                    <option value="AUT">Austria</option>
                                    <option value="AZE">Azerbaiyán</option>
                                    <option value="BDI">Burundi</option>
                                    <option value="BEL">Bélgica</option>
                                    <option value="BEN">Benín</option>
                                    <option value="BES">Bonaire, San Eustaquio y Saba</option>
                                    <option value="BFA">Burkina Faso</option>
                                    <option value="BGD">Bangladés</option>
                                    <option value="BGR">Bulgaria</option>
                                    <option value="BHR">Baréin</option>
                                    <option value="BHS">Bahamas (las)</option>
                                    <option value="BIH">Bosnia y Herzegovina</option>
                                    <option value="BLM">San Bartolomé</option>
                                    <option value="BLR">Bielorrusia</option>
                                    <option value="BLZ">Belice</option>
                                    <option value="BMU">Bermudas</option>
                                    <option value="BOL">Bolivia, Estado Plurinacional de</option>
                                    <option value="BRA">Brasil</option>
                                    <option value="BRB">Barbados</option>
                                    <option value="BRN">Brunéi Darussalam</option>
                                    <option value="BTN">Bután</option>
                                    <option value="BVT">Isla Bouvet</option>
                                    <option value="BWA">Botsuana</option>
                                    <option value="CAF">República Centroafricana (la)</option>
                                    <option value="CAN">Canadá</option>
                                    <option value="CCK">Islas Cocos (Keeling)</option>
                                    <option value="CHE">Suiza</option>
                                    <option value="CHL">Chile</option>
                                    <option value="CHN">China</option>
                                    <option value="CIV">CÃ´te d'Ivoire</option>
                                    <option value="CMR">Camerún</option>
                                    <option value="COD">Congo (la República Democrática del)</option>
                                    <option value="COG">Congo</option>
                                    <option value="COK">Islas Cook (las)</option>
                                    <option value="COL">Colombia</option>
                                    <option value="COM">Comoras</option>
                                    <option value="CPV">Cabo Verde</option>
                                    <option value="CRI">Costa Rica</option>
                                    <option value="CUB">Cuba</option>
                                    <option value="CUW">Curazao</option>
                                    <option value="CXR">Isla de Navidad</option>
                                    <option value="CYM">Islas Caimán (las)</option>
                                    <option value="CYP">Chipre</option>
                                    <option value="CZE">República Checa (la)</option>
                                    <option value="DEU">Alemania</option>
                                    <option value="DJI">Yibuti</option>
                                    <option value="DMA">Dominica</option>
                                    <option value="DNK">Dinamarca</option>
                                    <option value="DOM">República Dominicana (la)</option>
                                    <option value="DZA">Argelia</option>
                                    <option value="ECU">Ecuador</option>
                                    <option value="EGY">Egipto</option>
                                    <option value="ERI">Eritrea</option>
                                    <option value="ESH">Sahara Occidental</option>
                                    <option value="ESP">España</option>
                                    <option value="EST">Estonia</option>
                                    <option value="ETH">Etiopía</option>
                                    <option value="FIN">Finlandia</option>
                                    <option value="FJI">Fiyi</option>
                                    <option value="FLK">Islas Malvinas [Falkland] (las)</option>
                                    <option value="FRA">Francia</option>
                                    <option value="FRO">Islas Feroe (las)</option>
                                    <option value="FSM">Micronesia (los Estados Federados de)</option>
                                    <option value="GAB">Gabón</option>
                                    <option value="GBR">Reino Unido (el)</option>
                                    <option value="GEO">Georgia</option>
                                    <option value="GGY">Guernsey</option>
                                    <option value="GHA">Ghana</option>
                                    <option value="GIB">Gibraltar</option>
                                    <option value="GIN">Guinea</option>
                                    <option value="GLP">Guadalupe</option>
                                    <option value="GMB">Gambia (La)</option>
                                    <option value="GNB">Guinea-Bisáu</option>
                                    <option value="GNQ">Guinea Ecuatorial</option>
                                    <option value="GRC">Grecia</option>
                                    <option value="GRD">Granada</option>
                                    <option value="GRL">Groenlandia</option>
                                    <option value="GTM">Guatemala</option>
                                    <option value="GUF">Guayana Francesa</option>
                                    <option value="GUM">Guam</option>
                                    <option value="GUY">Guyana</option>
                                    <option value="HKG">Hong Kong</option>
                                    <option value="HMD">Isla Heard e Islas McDonald</option>
                                    <option value="HND">Honduras</option>
                                    <option value="HRV">Croacia</option>
                                    <option value="HTI">Haití</option>
                                    <option value="HUN">Hungría</option>
                                    <option value="IDN">Indonesia</option>
                                    <option value="IMN">Isla de Man</option>
                                    <option value="IND">India</option>
                                    <option value="IOT">Territorio Británico del Océano Índico (el)</option>
                                    <option value="IRL">Irlanda</option>
                                    <option value="IRN">Irán (la República Islámica de)</option>
                                    <option value="IRQ">Irak</option>
                                    <option value="ISL">Islandia</option>
                                    <option value="ISR">Israel</option>
                                    <option value="ITA">Italia</option>
                                    <option value="JAM">Jamaica</option>
                                    <option value="JEY">Jersey</option>
                                    <option value="JOR">Jordania</option>
                                    <option value="JPN">Japón</option>
                                    <option value="KAZ">Kazajistán</option>
                                    <option value="KEN">Kenia</option>
                                    <option value="KGZ">Kirguistán</option>
                                    <option value="KHM">Camboya</option>
                                    <option value="KIR">Kiribati</option>
                                    <option value="KNA">San Cristóbal y Nieves</option>
                                    <option value="KOR">Corea (la República de)</option>
                                    <option value="KWT">Kuwait</option>
                                    <option value="LAO">Lao, (la) República Democrática Popular</option>
                                    <option value="LBN">Líbano</option>
                                    <option value="LBR">Liberia</option>
                                    <option value="LBY">Libia</option>
                                    <option value="LCA">Santa Lucía</option>
                                    <option value="LIE">Liechtenstein</option>
                                    <option value="LKA">Sri Lanka</option>
                                    <option value="LSO">Lesoto</option>
                                    <option value="LTU">Lituania</option>
                                    <option value="LUX">Luxemburgo</option>
                                    <option value="LVA">Letonia</option>
                                    <option value="MAC">Macao</option>
                                    <option value="MAF">San Martín (parte francesa)</option>
                                    <option value="MAR">Marruecos</option>
                                    <option value="MCO">Mónaco</option>
                                    <option value="MDA">Moldavia (la Rep</option>
                                    <option value="MDG">Madagascar</option>
                                    <option value="MDV">Maldivas</option>
                                    <option value="MEX">México</option>
                                    <option value="MHL">Islas Marshall (las)</option>
                                    <option value="MKD">Macedonia (la antigua República Yugoslava de)</option>
                                    <option value="MLI">Malí</option>
                                    <option value="MLT">Malta</option>
                                    <option value="MMR">Myanmar</option>
                                    <option value="MNE">Montenegro</option>
                                    <option value="MNG">Mongolia</option>
                                    <option value="MNP">Islas Marianas del Norte (las)</option>
                                    <option value="MOZ">Mozambique</option>
                                    <option value="MRT">Mauritania</option>
                                    <option value="MSR">Montserrat</option>
                                    <option value="MTQ">Martinica</option>
                                    <option value="MUS">Mauricio</option>
                                    <option value="MWI">Malaui</option>
                                    <option value="MYS">Malasia</option>
                                    <option value="MYT">Mayotte</option>
                                    <option value="NAM">Namibia</option>
                                    <option value="NCL">Nueva Caledonia</option>
                                    <option value="NER">Níger (el)</option>
                                    <option value="NFK">Isla Norfolk</option>
                                    <option value="NGA">Nigeria</option>
                                    <option value="NIC">Nicaragua</option>
                                    <option value="NIU">Niue</option>
                                    <option value="NLD">Países Bajos (los)</option>
                                    <option value="NOR">Noruega</option>
                                    <option value="NPL">Nepal</option>
                                    <option value="NRU">Nauru</option>
                                    <option value="NZL">Nueva Zelanda</option>
                                    <option value="OMN">Omán</option>
                                    <option value="PAK">Pakistán</option>
                                    <option value="PAN">Panamá</option>
                                    <option value="PCN">Pitcairn</option>
                                    <option value="PER">Perú</option>
                                    <option value="PHL">Filipinas (las)</option>
                                    <option value="PLW">Palaos</option>
                                    <option value="PNG">Papúa Nueva Guinea</option>
                                    <option value="POL">Polonia</option>
                                    <option value="PRI">Puerto Rico</option>
                                    <option value="PRK">Corea (la República Democrática Popular de)</option>
                                    <option value="PRT">Portugal</option>
                                    <option value="PRY">Paraguay</option>
                                    <option value="PSE">Palestina, Estado de</option>
                                    <option value="PYF">Polinesia Francesa</option>
                                    <option value="QAT">Catar</option>
                                    <option value="REU">Reunión</option>
                                    <option value="ROU">Rumania</option>
                                    <option value="RUS">Rusia, (la) Federación de</option>
                                    <option value="RWA">Ruanda</option>
                                    <option value="SAU">Arabia Saudita</option>
                                    <option value="SDN">Sudán (el)</option>
                                    <option value="SEN">Senegal</option>
                                    <option value="SGP">Singapur</option>
                                    <option value="SGS">Georgia del sur y las islas sandwich del sur</option>
                                    <option value="SHN">Santa Helena, Ascensión y Tristán de Acuña</option>
                                    <option value="SJM">Svalbard y Jan Mayen</option>
                                    <option value="SLB">Islas Salomón (las)</option>
                                    <option value="SLE">Sierra leona</option>
                                    <option value="SLV">El Salvador</option>
                                    <option value="SMR">San Marino</option>
                                    <option value="SOM">Somalia</option>
                                    <option value="SPM">San Pedro y Miquelón</option>
                                    <option value="SRB">Serbia</option>
                                    <option value="SSD">Sudán del Sur</option>
                                    <option value="STP">Santo Tomé y Príncipe</option>
                                    <option value="SUR">Surinam</option>
                                    <option value="SVK">Eslovaquia</option>
                                    <option value="SVN">Eslovenia</option>
                                    <option value="SWE">Suecia</option>
                                    <option value="SWZ">Suazilandia</option>
                                    <option value="SXM">Sint Maarten (parte holandesa)</option>
                                    <option value="SYC">Seychelles</option>
                                    <option value="SYR">Siria, (la) República Árabe</option>
                                    <option value="TCA">Islas Turcas y Caicos (las)</option>
                                    <option value="TCD">Chad</option>
                                    <option value="TGO">Togo</option>
                                    <option value="THA">Tailandia</option>
                                    <option value="TJK">Tayikist</option>
                                    <option value="TKL">Tokelau</option>
                                    <option value="TKM">Turkmenistán</option>
                                    <option value="TLS">Timor-Leste</option>
                                    <option value="TON">Tonga</option>
                                    <option value="TTO">Trinidad y Tobago</option>
                                    <option value="TUN">Túnez</option>
                                    <option value="TUR">Turquía</option>
                                    <option value="TUV">Tuvalu</option>
                                    <option value="TWN">Taiwán (Provincia de China)</option>
                                    <option value="TZA">Tanzania, República Unida de</option>
                                    <option value="UGA">Uganda</option>
                                    <option value="UKR">Ucrania</option>
                                    <option value="UMI">Islas de Ultramar Menores de Estados Unidos (las)</option>
                                    <option value="URY">Uruguay</option>
                                    <option value="USA">Estados Unidos (los)</option>
                                    <option value="UZB">Uzbekistán</option>
                                    <option value="VAT">Santa Sede[Estado de la Ciudad del Vaticano]</option>
                                    <option value="VCT">San Vicente y las Granadinas</option>
                                    <option value="VEN">Venezuela, Rep</option>
                                    <option value="VGB">Islas Vírgenes (Británicas)</option>
                                    <option value="VIR">Islas Vírgenes (EE.UU.)</option>
                                    <option value="VNM">Viet Nam</option>
                                    <option value="VUT">Vanuatu</option>
                                    <option value="WLF">Wallis y Futuna</option>
                                    <option value="WSM">Samoa</option>
                                    <option value="YEM">Yemen</option>
                                    <option value="ZAF">Sudáfrica</option>
                                    <option value="ZMB">Zambia</option>
                                    <option value="ZWE">Zimbabue</option>
                                    <option value="ZZZ">Países no declarados</option>
                                </select></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cuarto fila  -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="control-label" for="NumDoc">Aclaraciones / Observaciones:</label>
                            <textarea name="c_princialesAclaracionesObservaciones" style=""
                                      id="c_princialesAclaracionesObservaciones" cols="62" rows="5"
                                      class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <center>
            <br>
            <a href="#" class="btn btn-secondary">Ir a la sección anterior</a>
            <input type="submit" name="submit" class="btn btn-secondary" value="Guardar e ir a la siguiente sección">
        </center>
    </div>
