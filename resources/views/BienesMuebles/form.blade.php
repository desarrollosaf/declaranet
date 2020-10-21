<div class="card-header bg-info  border-0 py-3 d-flex align-items-center" style="background-color:#F1F1F1 !important;">
    <div>
        <h3 class="card-title mb-0">BIENES MUEBLES</h3>
        <h6>(A la fecha de ingreso)</h6>
    </div>
    <span class="badge badge-success ml-auto px-4" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> AYUDA</span>
</div>
<hr>
<hr>
<div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            <label class="control-label" for="NumDoc"><h6>Titular del bien</h6></label>
            <select name="dsp_D_titularBien" id="dsp_D_titularBien" class="form-control" required="" onchange="terceros();"><option value="">Seleccione una opción</option><option value="DEC">DECLARANTE</option><option value="CYG">CONYUGE</option><option value="CBN">CONCUBINA O CONCUBINARIO</option><option value="CVV">CONVIVIENTE</option><option value="DEN">DEPENDIENTE ECONÓMICO</option><option value="CTER">COPROPIEDAD CON TERCEROS</option></select>                                            </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <label class="control-label" for="ProcessNum"><h6>Tipo de bien</h6></label>
            <select name="dsp_D_tipoBienBienesMuebles" id="dsp_D_tipoBienBienesMuebles" class="form-control" required="" onchange="MostrarOtro();"><option value="">Seleccione una opción</option><option value="MECA">MENAJE DE CASA (MUEBLES Y ACCESORIOS DE CASA)</option><option value="APAE">APARATOS ELECTRÓNICOS Y ELECTRODOMÉSTICOS</option><option value="JOYA">JOYAS</option><option value="COLEC">COLECCIONES</option><option value="OBRA">OBRAS DE ARTE</option><option value="OTRO">OTROS (ESPECIFIQUE)</option></select>                                            </div>
    </div>

    <div class="col-lg-4" id="combo_otro" style="display: none;">
        <div class="form-group">
            <label class="control-label" style="text-align:justify">Especifique:</label>
            <input type="text" name="bm_otro_titular_bien" id="bm_otro_titular_bien" class="form-control" placeholder="p. ej. Libros" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}" title="Ingresa otro">
        </div>
    </div>

    <div class="col-lg-4" id="diferenteOtro" style="display:none;">
        <div class="form-group">
            <label class="control-label" for="State">Descripción del bien:</label>
            <input type="text" name="bm_desc_bien_tercero" id="bm_desc_bien_tercero" class="form-control" placeholder="p. ej. Descripción" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}" title="Ingresa descripción del bien" value="">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label><h6>Transmisor de la propiedad</h6></label>
                    <select name="tipoDePersona" id="tipoDePersona" class="form-control" onchange="tipoPersonaTra();" required="">
                        <option value="">Seleccione una opción</option>                                                    <option value="FI">Persona Física</option>
                        <option value="MO">Persona Moral</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-4" id="transmisorNombreF_disabled">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"><h6>Nombre del transmisor</h6></label>
                    <input type="text" disabled="" class="form-control" placeholder="p. ej. Juan Pérez." title="Ingresa nombre">
                </div>
            </div>

            <div class="col-lg-4" id="transmisorRfcF_disabled">
                <div class="form-group">
                    <label class="control-label" for="ProcessNum"><h6>RFC</h6></label>
                    <input type="text" disabled="" class="form-control" placeholder="p. ej. XXXX010101" title="Ingresa RFC a 13 dígitos">
                </div>
            </div>

            <div class="col-lg-4" id="transmisorNombreF" style="display: none;">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"><h6>Nombre del transmisor</h6></label>
                    <input type="text" name="bm_nombre_terceroTra" id="bm_nombre_terceroTra" class="form-control" placeholder="p. ej. Juan Pérez." pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}" title="Ingresa nombre" value="">
                </div>
            </div>

            <div class="col-lg-4" id="transmisorRfcF" style="display: none;">
                <div class="form-group">
                    <label class="control-label" for="ProcessNum">RFC:</label>
                    <input type="text" name="bm_rfc_transmisor" id="bm_rfc_transmisor" class="form-control" placeholder="p. ej. XXXX010101" maxlength="13" pattern="([A-Z]{4}([0-9]{6}[A-Z0-9]{3})" title="Ingresa RFC a 13 dígitos" value="">
                </div>
            </div>

            <div class="col-lg-4" id="transmisorNombreM" style="display: none;">
                <div class="form-group">
                    <label class="control-label" style="line-height : 15px;"><h6>Denominacion o razón social del transmisor</h6></label>
                    <input type="text" name="bm_nombre_tercero_mo_tra" id="bm_nombre_tercero_mo_tra" class="form-control" placeholder="p. ej. Desarrollo y Redes S.A. de C.V." pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}" title="Ingresa nombre" value="">
                </div>
            </div>

            <div class="col-lg-4" id="transmisorRfcM" style="display: none;">
                <div class="form-group">
                    <label class="control-label" for="ProcessNum">RFC:</label>
                    <input type="text" name="bm_rfc_transmisor_mo" id="bm_rfc_transmisor_mo" class="form-control" placeholder="p. ej. XXXX010101" maxlength="12" pattern="([A-Z]{3}([0-9]{6}[A-Z0-9]{3})" title="Ingresa RFC a 12 dígitos" value="">
                </div>
            </div>
        </div>
    </div>
</div>
<div></div>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <label class="control-label" style="line-height : 15px;"><h6>Relación del transmisor del mueble con el titular</h6></label>
                <select name="dsp_D_parentescoRelacion" id="dsp_D_parentescoRelacion" class="form-control" required="" onchange="propiedad_otro();"><option value="">Seleccione una opción</option><option value="ABU">ABUELO(A)</option><option value="NIE">NIETO(A)</option><option value="TIOA">TIO(A)</option><option value="AHI">AHIJADO(A)</option><option value="NUE">NUERA</option><option value="YER">YERNO</option><option value="CUN">CUÑADO(A)</option><option value="PAD">PADRE</option><option value="HER">HERMANO(A)</option><option value="PRI">PRIMO(A)</option><option value="HIJ">HIJO(A)</option><option value="SOB">SOBRINO(A)</option><option value="MAD">MADRE</option><option value="SUE">SUEGRO(A)</option><option value="NIN">NINGUNO</option><option value="OTRO">OTRO(ESPECIFIQUE)</option></select>                                            </div>
        </div>
        <div class="col-lg-4" id="propiedad_otro_d" style="display: none;">
            <div class="form-group">
                <label class="control-label" style="line-height : 13px;">Especifique:</label>
                <div class="form-group">
                    <input type="text" name="bm_otro_propiedad" id="bm_otro_propiedad" class="form-control" placeholder="p. ej. Concuño" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}" title="Especifique otro">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-4">
        <div class="form-group">
            <div id="terceroNombredisabled">
                <label class="control-label" style="line-height : 15px;"><h6>Nombre del transmisor de la propiedad</h6></label>
                <input type="text" manlenght="20" class="form-control" disabled="" placeholder="p. ej. Desarrollo de Sistemas S.A de C.V" value="" required="">
            </div>
            <div id="terceroNombreFisica" style="display: none;">
                <label class="control-label" for="NumDoc"><h6>Nombre del transmisor de la propiedad</h6></label>
                <input type="text" manlenght="20" class="form-control" name="v_nombreFisica" style="background-color:#E8CECF;" id="v_nombreFisica" placeholder="p. ej. Carlos Pérez Pérez" value="" required="">
            </div>
            <div id="terceroNombreMoral" style="display: none;">
                <label class="control-label" for="NumDoc">Razón social del transmisor:</label>
                <input type="text" manlenght="20" class="form-control" name="v_nombreMoral" style="background-color:#E8CECF;" id="v_nombreMoral" placeholder="p. ej. Carlos Pérez Pérez" value="" required="">
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="form-group">
            <div id="tercerodisabled">
                <label class="control-label" for="ProcessNum"><h6>RFC</h6></label>
                <input type="text" class="form-control" disabled="" placeholder="p. ej. XAXX010101XAXAXA01" maxlength="13" pattern="([A-Z]{4}([0-9]{6}[A-Z0-9]{3})" title="Ingresa RFC a 13 dígitos" value="" required="">
            </div>
            <div id="terceroFisicaTra" style="display: none;">
                <label class="control-label" for="ProcessNum">RFC:</label>
                <input type="text" class="form-control" style="background-color:#E8CECF;" name="v_rfcFisica" id="v_rfcFisica" placeholder="p. ej. XAXX010101XAXAXA01" maxlength="13" pattern="([A-Z]{4}([0-9]{6}[A-Z0-9]{3})" title="Ingresa RFC a 13 dígitos " value="" required="">
            </div>
            <div id="terceroMoralTra" style="display: none;">
                <label class="control-label" for="ProcessNum">RFC:</label>
                <input type="text" class="form-control" name="v_rfcMoral" id="v_rfcMoral" placeholder="p. ej. XXX010101X0X" maxlength="12" pattern="([A-Z]{4}([0-9]{6}[A-Z0-9]{3})" title="Ingresa RFC a 12 dígitos" value="" required="">
            </div>
        </div>
    </div>
    <br>
    <div class="col-lg-4">
        <div class="form-group">
            <label class="control-label" for="State" style="line-height : 15px !important;"><h6>Relación del transmisor del vehículo con el titular</h6></label>
            <select name="dsp_D_parentescoRelacion" id="dsp_D_parentescoRelacion" class="form-control" required=""><option value="">Seleccione una opción</option><option value="ABU">ABUELO(A)</option><option value="NIE">NIETO(A)</option><option value="TIOA">TIO(A)</option><option value="AHI">AHIJADO(A)</option><option value="NUE">NUERA</option><option value="YER">YERNO</option><option value="CUN">CUÑADO(A)</option><option value="PAD">PADRE</option><option value="HER">HERMANO(A)</option><option value="PRI">PRIMO(A)</option><option value="HIJ">HIJO(A)</option><option value="SOB">SOBRINO(A)</option><option value="MAD">MADRE</option><option value="SUE">SUEGRO(A)</option><option value="NIN">NINGUNO</option><option value="OTRO">OTRO(ESPECIFIQUE)</option></select><!-- llamas la funcio  -->
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <label class="control-label" for="NumDoc"><h6>Marca</h6></label>
                <input type="text" class="form-control" name="v_marca" id="v_marca" placeholder="p. ej. Renault" value="" required="">
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <label class="control-label" for="ProcessNum"><h6>Modelo</h6></label>
                <input type="text" class="form-control" name="v_modelo" id="v_modelo" placeholder="p. ej. Clío" value="" required="">
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <label class="control-label" for="State"><h6>Año</h6></label>
                <input type="num" class="form-control" name="v_ano" id="v_ano" placeholder="p. ej. 2006" value="" required="">
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <label class="control-label" for="NumDoc"><h6>Número de serie o registro</h6></label>
                <input type="num" manlenght="10" name="v_num_serie" id="v_num_serie" class="form-control" placeholder="p. ej. 1HGCM82633A004352" value="" required="">
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <label class="control-label" for="ProcessNum"><h6>¿Dónde se encuentra registrado?</h6></label>
                <center>
                    <select name="dsp_D_extranjero" id="dsp_D_extranjero" class="form-control" required="" onchange="lugarRegistro();"><option value="">Seleccione una opción</option><option value="MX">MEXICO</option><option value="EX">EXTRANJERO</option></select>                                                    </center>
            </div>
        </div>
        <div class="col-lg-4">

            <div id="lugarRegistrodisabled">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"><h6>Entidad Federativa</h6></label>
                    <input type="num" name="v_entidad" id="v_entidad" class="form-control" disabled="" placeholder="p. ej. México" value="" required="">
                </div>
            </div>
            <div id="lugarRegistroMx" style="display: none;">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"><h6>Entidad Federativa</h6></label>
                    <input type="text" name="v_entidadFederativa" id="v_entidadFederativa" class="form-control" placeholder="p. ej. México" value="" required="">
                </div>
            </div>
            <div id="lugarRegistroEx" style="display: none;">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"><h6>País</h6></label>
                    <select name="dsp_D_paises" id="dsp_D_paises" class="form-control" required=""><option value="">Seleccione una opción</option><option value="ABW">Aruba</option><option value="AFG">Afganistán</option><option value="AGO">Angola</option><option value="AIA">Anguila</option><option value="ALA">Islas Åland</option><option value="ALB">Albania</option><option value="AND">Andorra</option><option value="ARE">Emiratos Árabes Unidos (Los)</option><option value="ARG">Argentina</option><option value="ARM">Armenia</option><option value="ASM">Samoa Americana</option><option value="ATA">Antártida</option><option value="ATF">Territorios Australes Franceses (los)</option><option value="ATG">Antigua y Barbuda</option><option value="AUS">Australia</option><option value="AUT">Austria</option><option value="AZE">Azerbaiyán</option><option value="BDI">Burundi</option><option value="BEL">Bélgica</option><option value="BEN">Benín</option><option value="BES">Bonaire, San Eustaquio y Saba</option><option value="BFA">Burkina Faso</option><option value="BGD">Bangladés</option><option value="BGR">Bulgaria</option><option value="BHR">Baréin</option><option value="BHS">Bahamas (las)</option><option value="BIH">Bosnia y Herzegovina</option><option value="BLM">San Bartolomé</option><option value="BLR">Bielorrusia</option><option value="BLZ">Belice</option><option value="BMU">Bermudas</option><option value="BOL">Bolivia, Estado Plurinacional de</option><option value="BRA">Brasil</option><option value="BRB">Barbados</option><option value="BRN">Brunéi Darussalam</option><option value="BTN">Bután</option><option value="BVT">Isla Bouvet</option><option value="BWA">Botsuana</option><option value="CAF">República Centroafricana (la)</option><option value="CAN">Canadá</option><option value="CCK">Islas Cocos (Keeling)</option><option value="CHE">Suiza</option><option value="CHL">Chile</option><option value="CHN">China</option><option value="CIV">CÃ´te d'Ivoire</option><option value="CMR">Camerún</option><option value="COD">Congo (la República Democrática del)</option><option value="COG">Congo</option><option value="COK">Islas Cook (las)</option><option value="COL">Colombia</option><option value="COM">Comoras</option><option value="CPV">Cabo Verde</option><option value="CRI">Costa Rica</option><option value="CUB">Cuba</option><option value="CUW">Curazao</option><option value="CXR">Isla de Navidad</option><option value="CYM">Islas Caimán (las)</option><option value="CYP">Chipre</option><option value="CZE">República Checa (la)</option><option value="DEU">Alemania</option><option value="DJI">Yibuti</option><option value="DMA">Dominica</option><option value="DNK">Dinamarca</option><option value="DOM">República Dominicana (la)</option><option value="DZA">Argelia</option><option value="ECU">Ecuador</option><option value="EGY">Egipto</option><option value="ERI">Eritrea</option><option value="ESH">Sahara Occidental</option><option value="ESP">España</option><option value="EST">Estonia</option><option value="ETH">Etiopía</option><option value="FIN">Finlandia</option><option value="FJI">Fiyi</option><option value="FLK">Islas Malvinas [Falkland] (las)</option><option value="FRA">Francia</option><option value="FRO">Islas Feroe (las)</option><option value="FSM">Micronesia (los Estados Federados de)</option><option value="GAB">Gabón</option><option value="GBR">Reino Unido (el)</option><option value="GEO">Georgia</option><option value="GGY">Guernsey</option><option value="GHA">Ghana</option><option value="GIB">Gibraltar</option><option value="GIN">Guinea</option><option value="GLP">Guadalupe</option><option value="GMB">Gambia (La)</option><option value="GNB">Guinea-Bisáu</option><option value="GNQ">Guinea Ecuatorial</option><option value="GRC">Grecia</option><option value="GRD">Granada</option><option value="GRL">Groenlandia</option><option value="GTM">Guatemala</option><option value="GUF">Guayana Francesa</option><option value="GUM">Guam</option><option value="GUY">Guyana</option><option value="HKG">Hong Kong</option><option value="HMD">Isla Heard e Islas McDonald</option><option value="HND">Honduras</option><option value="HRV">Croacia</option><option value="HTI">Haití</option><option value="HUN">Hungría</option><option value="IDN">Indonesia</option><option value="IMN">Isla de Man</option><option value="IND">India</option><option value="IOT">Territorio Británico del Océano Índico (el)</option><option value="IRL">Irlanda</option><option value="IRN">Irán (la República Islámica de)</option><option value="IRQ">Irak</option><option value="ISL">Islandia</option><option value="ISR">Israel</option><option value="ITA">Italia</option><option value="JAM">Jamaica</option><option value="JEY">Jersey</option><option value="JOR">Jordania</option><option value="JPN">Japón</option><option value="KAZ">Kazajistán</option><option value="KEN">Kenia</option><option value="KGZ">Kirguistán</option><option value="KHM">Camboya</option><option value="KIR">Kiribati</option><option value="KNA">San Cristóbal y Nieves</option><option value="KOR">Corea (la República de)</option><option value="KWT">Kuwait</option><option value="LAO">Lao, (la) República Democrática Popular</option><option value="LBN">Líbano</option><option value="LBR">Liberia</option><option value="LBY">Libia</option><option value="LCA">Santa Lucía</option><option value="LIE">Liechtenstein</option><option value="LKA">Sri Lanka</option><option value="LSO">Lesoto</option><option value="LTU">Lituania</option><option value="LUX">Luxemburgo</option><option value="LVA">Letonia</option><option value="MAC">Macao</option><option value="MAF">San Martín (parte francesa)</option><option value="MAR">Marruecos</option><option value="MCO">Mónaco</option><option value="MDA">Moldavia (la Rep</option><option value="MDG">Madagascar</option><option value="MDV">Maldivas</option><option value="MEX">México</option><option value="MHL">Islas Marshall (las)</option><option value="MKD">Macedonia (la antigua República Yugoslava de)</option><option value="MLI">Malí</option><option value="MLT">Malta</option><option value="MMR">Myanmar</option><option value="MNE">Montenegro</option><option value="MNG">Mongolia</option><option value="MNP">Islas Marianas del Norte (las)</option><option value="MOZ">Mozambique</option><option value="MRT">Mauritania</option><option value="MSR">Montserrat</option><option value="MTQ">Martinica</option><option value="MUS">Mauricio</option><option value="MWI">Malaui</option><option value="MYS">Malasia</option><option value="MYT">Mayotte</option><option value="NAM">Namibia</option><option value="NCL">Nueva Caledonia</option><option value="NER">Níger (el)</option><option value="NFK">Isla Norfolk</option><option value="NGA">Nigeria</option><option value="NIC">Nicaragua</option><option value="NIU">Niue</option><option value="NLD">Países Bajos (los)</option><option value="NOR">Noruega</option><option value="NPL">Nepal</option><option value="NRU">Nauru</option><option value="NZL">Nueva Zelanda</option><option value="OMN">Omán</option><option value="PAK">Pakistán</option><option value="PAN">Panamá</option><option value="PCN">Pitcairn</option><option value="PER">Perú</option><option value="PHL">Filipinas (las)</option><option value="PLW">Palaos</option><option value="PNG">Papúa Nueva Guinea</option><option value="POL">Polonia</option><option value="PRI">Puerto Rico</option><option value="PRK">Corea (la República Democrática Popular de)</option><option value="PRT">Portugal</option><option value="PRY">Paraguay</option><option value="PSE">Palestina, Estado de</option><option value="PYF">Polinesia Francesa</option><option value="QAT">Catar</option><option value="REU">Reunión</option><option value="ROU">Rumania</option><option value="RUS">Rusia, (la) Federación de</option><option value="RWA">Ruanda</option><option value="SAU">Arabia Saudita</option><option value="SDN">Sudán (el)</option><option value="SEN">Senegal</option><option value="SGP">Singapur</option><option value="SGS">Georgia del sur y las islas sandwich del sur</option><option value="SHN">Santa Helena, Ascensión y Tristán de Acuña</option><option value="SJM">Svalbard y Jan Mayen</option><option value="SLB">Islas Salomón (las)</option><option value="SLE">Sierra leona</option><option value="SLV">El Salvador</option><option value="SMR">San Marino</option><option value="SOM">Somalia</option><option value="SPM">San Pedro y Miquelón</option><option value="SRB">Serbia</option><option value="SSD">Sudán del Sur</option><option value="STP">Santo Tomé y Príncipe</option><option value="SUR">Surinam</option><option value="SVK">Eslovaquia</option><option value="SVN">Eslovenia</option><option value="SWE">Suecia</option><option value="SWZ">Suazilandia</option><option value="SXM">Sint Maarten (parte holandesa)</option><option value="SYC">Seychelles</option><option value="SYR">Siria, (la) República Árabe</option><option value="TCA">Islas Turcas y Caicos (las)</option><option value="TCD">Chad</option><option value="TGO">Togo</option><option value="THA">Tailandia</option><option value="TJK">Tayikist</option><option value="TKL">Tokelau</option><option value="TKM">Turkmenistán</option><option value="TLS">Timor-Leste</option><option value="TON">Tonga</option><option value="TTO">Trinidad y Tobago</option><option value="TUN">Túnez</option><option value="TUR">Turquía</option><option value="TUV">Tuvalu</option><option value="TWN">Taiwán (Provincia de China)</option><option value="TZA">Tanzania, República Unida de</option><option value="UGA">Uganda</option><option value="UKR">Ucrania</option><option value="UMI">Islas de Ultramar Menores de Estados Unidos (las)</option><option value="URY">Uruguay</option><option value="USA">Estados Unidos (los)</option><option value="UZB">Uzbekistán</option><option value="VAT">Santa Sede[Estado de la Ciudad del Vaticano] </option><option value="VCT">San Vicente y las Granadinas</option><option value="VEN">Venezuela, Rep</option><option value="VGB">Islas Vírgenes (Británicas)</option><option value="VIR">Islas Vírgenes (EE.UU.)</option><option value="VNM">Viet Nam</option><option value="VUT">Vanuatu</option><option value="WLF">Wallis y Futuna</option><option value="WSM">Samoa</option><option value="YEM">Yemen</option><option value="ZAF">Sudáfrica</option><option value="ZMB">Zambia</option><option value="ZWE">Zimbabue</option><option value="ZZZ">Países no declarados</option></select>                                                    </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <label class="control-label" for="NumDoc"><h6>Número de serie o registro</h6></label>
                <input type="num" manlenght="10" name="v_num_serie" id="v_num_serie" class="form-control" placeholder="p. ej. 1HGCM82633A004352" value="" required="">
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <label class="control-label" for="ProcessNum"><h6>¿Dónde se encuentra registrado?</h6></label>
                <center>
                    <select name="dsp_D_extranjero" id="dsp_D_extranjero" class="form-control" required="" onchange="lugarRegistro();"><option value="">Seleccione una opción</option><option value="MX">MEXICO</option><option value="EX">EXTRANJERO</option></select>                                                    </center>
            </div>
        </div>
        <div class="col-lg-4">

            <div id="lugarRegistrodisabled">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"><h6>Entidad Federativa</h6></label>
                    <input type="num" name="v_entidad" id="v_entidad" class="form-control" disabled="" placeholder="p. ej. México" value="" required="">
                </div>
            </div>
            <div id="lugarRegistroMx" style="display: none;">
                <div class="form-group">
                    <label class="control-label" for="NumDoc">Entidad Federativa:</label>
                    <input type="text" name="v_entidadFederativa" id="v_entidadFederativa" class="form-control" placeholder="p. ej. México" value="" required="">
                </div>
            </div>
            <div id="lugarRegistroEx" style="display: none;">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"><h6>País</h6></label>
                    <select name="dsp_D_paises" id="dsp_D_paises" class="form-control" required=""><option value="">Seleccione una opción</option><option value="ABW">Aruba</option><option value="AFG">Afganistán</option><option value="AGO">Angola</option><option value="AIA">Anguila</option><option value="ALA">Islas Åland</option><option value="ALB">Albania</option><option value="AND">Andorra</option><option value="ARE">Emiratos Árabes Unidos (Los)</option><option value="ARG">Argentina</option><option value="ARM">Armenia</option><option value="ASM">Samoa Americana</option><option value="ATA">Antártida</option><option value="ATF">Territorios Australes Franceses (los)</option><option value="ATG">Antigua y Barbuda</option><option value="AUS">Australia</option><option value="AUT">Austria</option><option value="AZE">Azerbaiyán</option><option value="BDI">Burundi</option><option value="BEL">Bélgica</option><option value="BEN">Benín</option><option value="BES">Bonaire, San Eustaquio y Saba</option><option value="BFA">Burkina Faso</option><option value="BGD">Bangladés</option><option value="BGR">Bulgaria</option><option value="BHR">Baréin</option><option value="BHS">Bahamas (las)</option><option value="BIH">Bosnia y Herzegovina</option><option value="BLM">San Bartolomé</option><option value="BLR">Bielorrusia</option><option value="BLZ">Belice</option><option value="BMU">Bermudas</option><option value="BOL">Bolivia, Estado Plurinacional de</option><option value="BRA">Brasil</option><option value="BRB">Barbados</option><option value="BRN">Brunéi Darussalam</option><option value="BTN">Bután</option><option value="BVT">Isla Bouvet</option><option value="BWA">Botsuana</option><option value="CAF">República Centroafricana (la)</option><option value="CAN">Canadá</option><option value="CCK">Islas Cocos (Keeling)</option><option value="CHE">Suiza</option><option value="CHL">Chile</option><option value="CHN">China</option><option value="CIV">CÃ´te d'Ivoire</option><option value="CMR">Camerún</option><option value="COD">Congo (la República Democrática del)</option><option value="COG">Congo</option><option value="COK">Islas Cook (las)</option><option value="COL">Colombia</option><option value="COM">Comoras</option><option value="CPV">Cabo Verde</option><option value="CRI">Costa Rica</option><option value="CUB">Cuba</option><option value="CUW">Curazao</option><option value="CXR">Isla de Navidad</option><option value="CYM">Islas Caimán (las)</option><option value="CYP">Chipre</option><option value="CZE">República Checa (la)</option><option value="DEU">Alemania</option><option value="DJI">Yibuti</option><option value="DMA">Dominica</option><option value="DNK">Dinamarca</option><option value="DOM">República Dominicana (la)</option><option value="DZA">Argelia</option><option value="ECU">Ecuador</option><option value="EGY">Egipto</option><option value="ERI">Eritrea</option><option value="ESH">Sahara Occidental</option><option value="ESP">España</option><option value="EST">Estonia</option><option value="ETH">Etiopía</option><option value="FIN">Finlandia</option><option value="FJI">Fiyi</option><option value="FLK">Islas Malvinas [Falkland] (las)</option><option value="FRA">Francia</option><option value="FRO">Islas Feroe (las)</option><option value="FSM">Micronesia (los Estados Federados de)</option><option value="GAB">Gabón</option><option value="GBR">Reino Unido (el)</option><option value="GEO">Georgia</option><option value="GGY">Guernsey</option><option value="GHA">Ghana</option><option value="GIB">Gibraltar</option><option value="GIN">Guinea</option><option value="GLP">Guadalupe</option><option value="GMB">Gambia (La)</option><option value="GNB">Guinea-Bisáu</option><option value="GNQ">Guinea Ecuatorial</option><option value="GRC">Grecia</option><option value="GRD">Granada</option><option value="GRL">Groenlandia</option><option value="GTM">Guatemala</option><option value="GUF">Guayana Francesa</option><option value="GUM">Guam</option><option value="GUY">Guyana</option><option value="HKG">Hong Kong</option><option value="HMD">Isla Heard e Islas McDonald</option><option value="HND">Honduras</option><option value="HRV">Croacia</option><option value="HTI">Haití</option><option value="HUN">Hungría</option><option value="IDN">Indonesia</option><option value="IMN">Isla de Man</option><option value="IND">India</option><option value="IOT">Territorio Británico del Océano Índico (el)</option><option value="IRL">Irlanda</option><option value="IRN">Irán (la República Islámica de)</option><option value="IRQ">Irak</option><option value="ISL">Islandia</option><option value="ISR">Israel</option><option value="ITA">Italia</option><option value="JAM">Jamaica</option><option value="JEY">Jersey</option><option value="JOR">Jordania</option><option value="JPN">Japón</option><option value="KAZ">Kazajistán</option><option value="KEN">Kenia</option><option value="KGZ">Kirguistán</option><option value="KHM">Camboya</option><option value="KIR">Kiribati</option><option value="KNA">San Cristóbal y Nieves</option><option value="KOR">Corea (la República de)</option><option value="KWT">Kuwait</option><option value="LAO">Lao, (la) República Democrática Popular</option><option value="LBN">Líbano</option><option value="LBR">Liberia</option><option value="LBY">Libia</option><option value="LCA">Santa Lucía</option><option value="LIE">Liechtenstein</option><option value="LKA">Sri Lanka</option><option value="LSO">Lesoto</option><option value="LTU">Lituania</option><option value="LUX">Luxemburgo</option><option value="LVA">Letonia</option><option value="MAC">Macao</option><option value="MAF">San Martín (parte francesa)</option><option value="MAR">Marruecos</option><option value="MCO">Mónaco</option><option value="MDA">Moldavia (la Rep</option><option value="MDG">Madagascar</option><option value="MDV">Maldivas</option><option value="MEX">México</option><option value="MHL">Islas Marshall (las)</option><option value="MKD">Macedonia (la antigua República Yugoslava de)</option><option value="MLI">Malí</option><option value="MLT">Malta</option><option value="MMR">Myanmar</option><option value="MNE">Montenegro</option><option value="MNG">Mongolia</option><option value="MNP">Islas Marianas del Norte (las)</option><option value="MOZ">Mozambique</option><option value="MRT">Mauritania</option><option value="MSR">Montserrat</option><option value="MTQ">Martinica</option><option value="MUS">Mauricio</option><option value="MWI">Malaui</option><option value="MYS">Malasia</option><option value="MYT">Mayotte</option><option value="NAM">Namibia</option><option value="NCL">Nueva Caledonia</option><option value="NER">Níger (el)</option><option value="NFK">Isla Norfolk</option><option value="NGA">Nigeria</option><option value="NIC">Nicaragua</option><option value="NIU">Niue</option><option value="NLD">Países Bajos (los)</option><option value="NOR">Noruega</option><option value="NPL">Nepal</option><option value="NRU">Nauru</option><option value="NZL">Nueva Zelanda</option><option value="OMN">Omán</option><option value="PAK">Pakistán</option><option value="PAN">Panamá</option><option value="PCN">Pitcairn</option><option value="PER">Perú</option><option value="PHL">Filipinas (las)</option><option value="PLW">Palaos</option><option value="PNG">Papúa Nueva Guinea</option><option value="POL">Polonia</option><option value="PRI">Puerto Rico</option><option value="PRK">Corea (la República Democrática Popular de)</option><option value="PRT">Portugal</option><option value="PRY">Paraguay</option><option value="PSE">Palestina, Estado de</option><option value="PYF">Polinesia Francesa</option><option value="QAT">Catar</option><option value="REU">Reunión</option><option value="ROU">Rumania</option><option value="RUS">Rusia, (la) Federación de</option><option value="RWA">Ruanda</option><option value="SAU">Arabia Saudita</option><option value="SDN">Sudán (el)</option><option value="SEN">Senegal</option><option value="SGP">Singapur</option><option value="SGS">Georgia del sur y las islas sandwich del sur</option><option value="SHN">Santa Helena, Ascensión y Tristán de Acuña</option><option value="SJM">Svalbard y Jan Mayen</option><option value="SLB">Islas Salomón (las)</option><option value="SLE">Sierra leona</option><option value="SLV">El Salvador</option><option value="SMR">San Marino</option><option value="SOM">Somalia</option><option value="SPM">San Pedro y Miquelón</option><option value="SRB">Serbia</option><option value="SSD">Sudán del Sur</option><option value="STP">Santo Tomé y Príncipe</option><option value="SUR">Surinam</option><option value="SVK">Eslovaquia</option><option value="SVN">Eslovenia</option><option value="SWE">Suecia</option><option value="SWZ">Suazilandia</option><option value="SXM">Sint Maarten (parte holandesa)</option><option value="SYC">Seychelles</option><option value="SYR">Siria, (la) República Árabe</option><option value="TCA">Islas Turcas y Caicos (las)</option><option value="TCD">Chad</option><option value="TGO">Togo</option><option value="THA">Tailandia</option><option value="TJK">Tayikist</option><option value="TKL">Tokelau</option><option value="TKM">Turkmenistán</option><option value="TLS">Timor-Leste</option><option value="TON">Tonga</option><option value="TTO">Trinidad y Tobago</option><option value="TUN">Túnez</option><option value="TUR">Turquía</option><option value="TUV">Tuvalu</option><option value="TWN">Taiwán (Provincia de China)</option><option value="TZA">Tanzania, República Unida de</option><option value="UGA">Uganda</option><option value="UKR">Ucrania</option><option value="UMI">Islas de Ultramar Menores de Estados Unidos (las)</option><option value="URY">Uruguay</option><option value="USA">Estados Unidos (los)</option><option value="UZB">Uzbekistán</option><option value="VAT">Santa Sede[Estado de la Ciudad del Vaticano] </option><option value="VCT">San Vicente y las Granadinas</option><option value="VEN">Venezuela, Rep</option><option value="VGB">Islas Vírgenes (Británicas)</option><option value="VIR">Islas Vírgenes (EE.UU.)</option><option value="VNM">Viet Nam</option><option value="VUT">Vanuatu</option><option value="WLF">Wallis y Futuna</option><option value="WSM">Samoa</option><option value="YEM">Yemen</option><option value="ZAF">Sudáfrica</option><option value="ZMB">Zambia</option><option value="ZWE">Zimbabue</option><option value="ZZZ">Países no declarados</option></select>                                                    </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <label class="control-label" for="NumDoc"><h6>Forma de adquisición</h6></label>
                <select name="dsp_D_formaAdquisicion" id="dsp_D_formaAdquisicion" class="form-control" required=""><option value="">Seleccione una opción</option><option value="CPV">COMPRAVENTA</option><option value="CSN">CESIÓN</option><option value="DNC">DONACIÓN</option><option value="HRN">HERENCIA</option><option value="PRM">PERMUTA</option><option value="RST">RIFA O SORTEO</option><option value="STC">SENTENCIA</option></select>                                                </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <label class="control-label" for="ProcessNum"><h6>Forma de pago</h6></label>
                <select name="dsp_D_formaPago" id="dsp_D_formaPago" class="form-control" required=""><option value="">Seleccione una opción</option><option value="CR">CRÉDITO</option><option value="CO">CONTADO</option><option value="NA">NO APLICA</option></select>                                                </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <label class="control-label" for="State"><h6>Valor de adquisición del vehículo</h6></label>
                <input type="num" name="v_valor" id="v_valor" class="form-control" placeholder="p. ej. 100000.00 Mxn" value="" required="">
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group">
                <label class="control-label" for="NumDoc"><h6>Tipo de moneda</h6></label>
                <input type="text" name="v_moneda" id="v_moneda" class="form-control" placeholder="p. ej. Peso mexicano" value="" required="">
            </div>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <label class="control-label" for="ProcessNum"><h6>Fecha de adquisición del vehículo</h6></label>
                <input type="date" name="v_fecha" id="v_fecha" class="form-control" value="" required="" onchange="validaFecha();">
            </div>
        </div>

    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <label class="control-label" for="NumDoc"><h6>Aclaraciones/Observaciones</h6></label>
                <textarea name="v_aclaraciones" id="v_aclaraciones" style="background-color:#E8CECF" cols="62" rows="5" class="form-control" required=""></textarea>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <center>
            <br>
            <a href="#" class="btn btn-secondary">Ir a la sección anterior</a>
            <input type="submit" name="submit" class="btn btn-secondary" value="Guardar e ir a la siguiente sección">
        </center>
    </div>
</div>