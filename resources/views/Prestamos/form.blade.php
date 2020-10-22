<div class="card-body">
    <!-- Primera fila  -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"><h6>Nombre(s)</h6></label>
                    <input type="text" class="form-control" name="dg_nombre" readonly="" value="" required="">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="ProcessNum"><h6>Primer apellido</h6></label>
                    <input type="text" class="form-control" name="dg_p_apellido" readonly="" value="">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="State"><h6>Segundo apellido</h6></label>
                    <input type="text" class="form-control" name="dg_s_apellido" readonly="" value="">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label"><h6>CURP</h6></label>
                    <input type="text" style="background-color:#E8CECF" class="form-control" name="dg_curp" readonly="" value="">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label"><h6>RFC</h6></label>
                    <input type="text" style="background-color:#E8CECF" class="form-control" name="dg_curp" readonly="" value="">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label"><h6>Homoclave</h6></label>
                    <input type="text" style="background-color:#E8CECF" class="form-control" name="dg_homoclave" readonly="" value="">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"><h6>Correo institucional</h6></label><label class="requerido">&nbsp;*</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="dg_c_institucional" placeholder="p. ej. carlosperez@cddiputados.gob.mx" required="" value="">

                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="ProcessNum"><h6>Correo personal</h6></label>
                    <input type="email" style="background-color:#E8CECF" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="dg_c_personal" placeholder="p. ej. carlosperez@hotmail.com" value="">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="State"><h6>Núm. telefónico de casa</h6></label>
                    <input type="text" class="form-control" style="background-color:#E8CECF" name="dg_n_telefonico_c" placeholder="p. ej. 5555555555" maxlength="10" pattern="[0-9]{10}" title="Ingresa un número télefonico a 10 dígitos" value="">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"> <h6>Núm. celular personal</h6></label><label class="requerido">&nbsp;*</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" style="background-color:#E8CECF" aria-describedby="emailHelp" name="dg_n_telefonico_p" placeholder="p. ej. 5555555555" maxlength="10" pattern="[0-9]{10}" title="Ingresa un número télefonico a 10 dígitos" required="" value="">

                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="ProcessNum"><h6>Estado civil / Situación personal</h6></label><label class="requerido">&nbsp;*</label>
                    <select style="background-color:#E8CECF" name="dsp_D_situacionPersonalEstadoCivil" id="dsp_D_situacionPersonalEstadoCivil" class="form-control" required=""><option value="SCO">SOCIEDAD DE CONVIVENCIA</option><option value="SOL">SOLTERO (A)</option><option value="CAS">CASADO (A)</option><option value="DIV">DIVORCIADO (A)</option><option value="VIU">VIUDO (A)</option><option value="CON">CONCUBINA/CONCUBINARIO/UNIÓN LIBRE</option><option value="SCO">SOCIEDAD DE CONVIVENCIA</option></select>                                                    </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="State"><h6>Régimen matrimonial</h6></label><label class="requerido">&nbsp;*</label>
                    <select style="background-color:#E8CECF" name="dsp_D_regimenMatrimonial" id="dsp_D_regimenMatrimonial" class="form-control" required="" onchange="MostrarOtro();"><option value="SBI">SEPARACIÓN DE BIENES</option><option value="SOC">SOCIEDAD CONYUGAL</option><option value="SBI">SEPARACIÓN DE BIENES</option><option value="OTR">OTRO</option></select>                                                    </div>
            </div>
        </div>
    </div>

    <!-- Quinta fila  -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"><h6>País de nacimiento</h6></label><label class="requerido">&nbsp;*</label>
                    <select style="background-color:#E8CECF" name="dsp_D_paises" id="dsp_D_paises" class="form-control" required=""><option value="MEX">México</option><option value="ABW">Aruba</option><option value="AFG">Afganistán</option><option value="AGO">Angola</option><option value="AIA">Anguila</option><option value="ALA">Islas Åland</option><option value="ALB">Albania</option><option value="AND">Andorra</option><option value="ARE">Emiratos Árabes Unidos (Los)</option><option value="ARG">Argentina</option><option value="ARM">Armenia</option><option value="ASM">Samoa Americana</option><option value="ATA">Antártida</option><option value="ATF">Territorios Australes Franceses (los)</option><option value="ATG">Antigua y Barbuda</option><option value="AUS">Australia</option><option value="AUT">Austria</option><option value="AZE">Azerbaiyán</option><option value="BDI">Burundi</option><option value="BEL">Bélgica</option><option value="BEN">Benín</option><option value="BES">Bonaire, San Eustaquio y Saba</option><option value="BFA">Burkina Faso</option><option value="BGD">Bangladés</option><option value="BGR">Bulgaria</option><option value="BHR">Baréin</option><option value="BHS">Bahamas (las)</option><option value="BIH">Bosnia y Herzegovina</option><option value="BLM">San Bartolomé</option><option value="BLR">Bielorrusia</option><option value="BLZ">Belice</option><option value="BMU">Bermudas</option><option value="BOL">Bolivia, Estado Plurinacional de</option><option value="BRA">Brasil</option><option value="BRB">Barbados</option><option value="BRN">Brunéi Darussalam</option><option value="BTN">Bután</option><option value="BVT">Isla Bouvet</option><option value="BWA">Botsuana</option><option value="CAF">República Centroafricana (la)</option><option value="CAN">Canadá</option><option value="CCK">Islas Cocos (Keeling)</option><option value="CHE">Suiza</option><option value="CHL">Chile</option><option value="CHN">China</option><option value="CIV">CÃ´te d'Ivoire</option><option value="CMR">Camerún</option><option value="COD">Congo (la República Democrática del)</option><option value="COG">Congo</option><option value="COK">Islas Cook (las)</option><option value="COL">Colombia</option><option value="COM">Comoras</option><option value="CPV">Cabo Verde</option><option value="CRI">Costa Rica</option><option value="CUB">Cuba</option><option value="CUW">Curazao</option><option value="CXR">Isla de Navidad</option><option value="CYM">Islas Caimán (las)</option><option value="CYP">Chipre</option><option value="CZE">República Checa (la)</option><option value="DEU">Alemania</option><option value="DJI">Yibuti</option><option value="DMA">Dominica</option><option value="DNK">Dinamarca</option><option value="DOM">República Dominicana (la)</option><option value="DZA">Argelia</option><option value="ECU">Ecuador</option><option value="EGY">Egipto</option><option value="ERI">Eritrea</option><option value="ESH">Sahara Occidental</option><option value="ESP">España</option><option value="EST">Estonia</option><option value="ETH">Etiopía</option><option value="FIN">Finlandia</option><option value="FJI">Fiyi</option><option value="FLK">Islas Malvinas [Falkland] (las)</option><option value="FRA">Francia</option><option value="FRO">Islas Feroe (las)</option><option value="FSM">Micronesia (los Estados Federados de)</option><option value="GAB">Gabón</option><option value="GBR">Reino Unido (el)</option><option value="GEO">Georgia</option><option value="GGY">Guernsey</option><option value="GHA">Ghana</option><option value="GIB">Gibraltar</option><option value="GIN">Guinea</option><option value="GLP">Guadalupe</option><option value="GMB">Gambia (La)</option><option value="GNB">Guinea-Bisáu</option><option value="GNQ">Guinea Ecuatorial</option><option value="GRC">Grecia</option><option value="GRD">Granada</option><option value="GRL">Groenlandia</option><option value="GTM">Guatemala</option><option value="GUF">Guayana Francesa</option><option value="GUM">Guam</option><option value="GUY">Guyana</option><option value="HKG">Hong Kong</option><option value="HMD">Isla Heard e Islas McDonald</option><option value="HND">Honduras</option><option value="HRV">Croacia</option><option value="HTI">Haití</option><option value="HUN">Hungría</option><option value="IDN">Indonesia</option><option value="IMN">Isla de Man</option><option value="IND">India</option><option value="IOT">Territorio Británico del Océano Índico (el)</option><option value="IRL">Irlanda</option><option value="IRN">Irán (la República Islámica de)</option><option value="IRQ">Irak</option><option value="ISL">Islandia</option><option value="ISR">Israel</option><option value="ITA">Italia</option><option value="JAM">Jamaica</option><option value="JEY">Jersey</option><option value="JOR">Jordania</option><option value="JPN">Japón</option><option value="KAZ">Kazajistán</option><option value="KEN">Kenia</option><option value="KGZ">Kirguistán</option><option value="KHM">Camboya</option><option value="KIR">Kiribati</option><option value="KNA">San Cristóbal y Nieves</option><option value="KOR">Corea (la República de)</option><option value="KWT">Kuwait</option><option value="LAO">Lao, (la) República Democrática Popular</option><option value="LBN">Líbano</option><option value="LBR">Liberia</option><option value="LBY">Libia</option><option value="LCA">Santa Lucía</option><option value="LIE">Liechtenstein</option><option value="LKA">Sri Lanka</option><option value="LSO">Lesoto</option><option value="LTU">Lituania</option><option value="LUX">Luxemburgo</option><option value="LVA">Letonia</option><option value="MAC">Macao</option><option value="MAF">San Martín (parte francesa)</option><option value="MAR">Marruecos</option><option value="MCO">Mónaco</option><option value="MDA">Moldavia (la Rep</option><option value="MDG">Madagascar</option><option value="MDV">Maldivas</option><option value="MEX">México</option><option value="MHL">Islas Marshall (las)</option><option value="MKD">Macedonia (la antigua República Yugoslava de)</option><option value="MLI">Malí</option><option value="MLT">Malta</option><option value="MMR">Myanmar</option><option value="MNE">Montenegro</option><option value="MNG">Mongolia</option><option value="MNP">Islas Marianas del Norte (las)</option><option value="MOZ">Mozambique</option><option value="MRT">Mauritania</option><option value="MSR">Montserrat</option><option value="MTQ">Martinica</option><option value="MUS">Mauricio</option><option value="MWI">Malaui</option><option value="MYS">Malasia</option><option value="MYT">Mayotte</option><option value="NAM">Namibia</option><option value="NCL">Nueva Caledonia</option><option value="NER">Níger (el)</option><option value="NFK">Isla Norfolk</option><option value="NGA">Nigeria</option><option value="NIC">Nicaragua</option><option value="NIU">Niue</option><option value="NLD">Países Bajos (los)</option><option value="NOR">Noruega</option><option value="NPL">Nepal</option><option value="NRU">Nauru</option><option value="NZL">Nueva Zelanda</option><option value="OMN">Omán</option><option value="PAK">Pakistán</option><option value="PAN">Panamá</option><option value="PCN">Pitcairn</option><option value="PER">Perú</option><option value="PHL">Filipinas (las)</option><option value="PLW">Palaos</option><option value="PNG">Papúa Nueva Guinea</option><option value="POL">Polonia</option><option value="PRI">Puerto Rico</option><option value="PRK">Corea (la República Democrática Popular de)</option><option value="PRT">Portugal</option><option value="PRY">Paraguay</option><option value="PSE">Palestina, Estado de</option><option value="PYF">Polinesia Francesa</option><option value="QAT">Catar</option><option value="REU">Reunión</option><option value="ROU">Rumania</option><option value="RUS">Rusia, (la) Federación de</option><option value="RWA">Ruanda</option><option value="SAU">Arabia Saudita</option><option value="SDN">Sudán (el)</option><option value="SEN">Senegal</option><option value="SGP">Singapur</option><option value="SGS">Georgia del sur y las islas sandwich del sur</option><option value="SHN">Santa Helena, Ascensión y Tristán de Acuña</option><option value="SJM">Svalbard y Jan Mayen</option><option value="SLB">Islas Salomón (las)</option><option value="SLE">Sierra leona</option><option value="SLV">El Salvador</option><option value="SMR">San Marino</option><option value="SOM">Somalia</option><option value="SPM">San Pedro y Miquelón</option><option value="SRB">Serbia</option><option value="SSD">Sudán del Sur</option><option value="STP">Santo Tomé y Príncipe</option><option value="SUR">Surinam</option><option value="SVK">Eslovaquia</option><option value="SVN">Eslovenia</option><option value="SWE">Suecia</option><option value="SWZ">Suazilandia</option><option value="SXM">Sint Maarten (parte holandesa)</option><option value="SYC">Seychelles</option><option value="SYR">Siria, (la) República Árabe</option><option value="TCA">Islas Turcas y Caicos (las)</option><option value="TCD">Chad</option><option value="TGO">Togo</option><option value="THA">Tailandia</option><option value="TJK">Tayikist</option><option value="TKL">Tokelau</option><option value="TKM">Turkmenistán</option><option value="TLS">Timor-Leste</option><option value="TON">Tonga</option><option value="TTO">Trinidad y Tobago</option><option value="TUN">Túnez</option><option value="TUR">Turquía</option><option value="TUV">Tuvalu</option><option value="TWN">Taiwán (Provincia de China)</option><option value="TZA">Tanzania, República Unida de</option><option value="UGA">Uganda</option><option value="UKR">Ucrania</option><option value="UMI">Islas de Ultramar Menores de Estados Unidos (las)</option><option value="URY">Uruguay</option><option value="USA">Estados Unidos (los)</option><option value="UZB">Uzbekistán</option><option value="VAT">Santa Sede[Estado de la Ciudad del Vaticano] </option><option value="VCT">San Vicente y las Granadinas</option><option value="VEN">Venezuela, Rep</option><option value="VGB">Islas Vírgenes (Británicas)</option><option value="VIR">Islas Vírgenes (EE.UU.)</option><option value="VNM">Viet Nam</option><option value="VUT">Vanuatu</option><option value="WLF">Wallis y Futuna</option><option value="WSM">Samoa</option><option value="YEM">Yemen</option><option value="ZAF">Sudáfrica</option><option value="ZMB">Zambia</option><option value="ZWE">Zimbabue</option><option value="ZZZ">Países no declarados</option></select>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group"> 
                    <label class="control-label" for="ProcessNum"><h6>Nacionalidad</h6></label><label class="requerido">&nbsp;*</label>
                    <select style="background-color:#E8CECF" name="dsp_D_nacionalidades" id="dsp_D_nacionalidades" class="form-control" required=""><option value="MEX">MEXICANA</option><option value="AFG">AFGANA</option><option value="ALB">ALBANESA</option><option value="DEU">ALEMANA</option><option value="AND">ANDORRANA</option><option value="AGO">ANGOLEÑA</option><option value="ATG">ANTIGUANA</option><option value="SAU">SAUDÍ</option><option value="DZA">ARGELINA</option><option value="ARG">ARGENTINA</option><option value="ARM">ARMENIA</option><option value="ABW">ARUBEÑA</option><option value="AUS">AUSTRALIANA</option><option value="AUT">AUSTRIACA</option><option value="AZE">AZERBAIYANA</option><option value="BHS">BAHAMEÑA</option><option value="BGD">BANGLADESÍ</option><option value="BRB">BARBADENSE</option><option value="BHR">BAREINÍ</option><option value="BEL">BELGA</option><option value="BLZ">BELICEÑA</option><option value="BEN">BENINÉSA</option><option value="BLR">BIELORRUSA</option><option value="MMR">BIRMANA</option><option value="BOL">BOLIVIANA</option><option value="BIH">BOSNIA</option><option value="BWA">BOTSUANA</option><option value="BRA">BRASILEÑA</option><option value="BRN">BRUNEANA</option><option value="BGR">BÚLGARA</option><option value="BFA">BURKINÉS</option><option value="BDI">BURUNDÉSA</option><option value="BTN">BUTANÉSA</option><option value="CPV">CABOVERDIANA</option><option value="KHM">CAMBOYANA</option><option value="CMR">CAMERUNESA</option><option value="CAN">CANADIENSE</option><option value="QAT">CATARÍ</option><option value="TCD">CHADIANA</option><option value="CHL">CHILENA</option><option value="CHN">CHINA</option><option value="CYP">CHIPRIOTA</option><option value="VAT">VATICANA</option><option value="COL">COLOMBIANA</option><option value="COM">COMORENSE</option><option value="PRK">NORCOREANA</option><option value="KOR">SURCOREANA</option><option value="CIV">MARFILEÑA</option><option value="CRI">COSTARRICENSE</option><option value="HRV">CROATA</option><option value="CUB">CUBANA</option><option value="DNK">DANÉSA</option><option value="DMA">DOMINIQUÉS</option><option value="ECU">ECUATORIANA</option><option value="EGY">EGIPCIA</option><option value="SLV">SALVADOREÑA</option><option value="ARE">EMIRATÍ</option><option value="ERI">ERITREA</option><option value="SVK">ESLOVACA</option><option value="SVN">ESLOVENA</option><option value="ESP">ESPAÑOLA</option><option value="USA">ESTADOUNIDENSE</option><option value="EST">ESTONIA</option><option value="ETH">ETÍOPE</option><option value="PHL">FILIPINA</option><option value="FIN">FINLANDÉSA</option><option value="FJI">FIYIANA</option><option value="FRA">FRANCÉSA</option><option value="GAB">GABONÉSA</option><option value="GMB">GAMBIANA</option><option value="GEO">GEORGIANA</option><option value="GIB">GIBRALTAREÑA</option><option value="GHA">GHANÉSA</option><option value="GRD">GRANADINA</option><option value="GRC">GRIEGA</option><option value="GRL">GROENLANDÉSA</option><option value="GTM">GUATEMALTECA</option><option value="GNQ">ECUATOGUINEANA</option><option value="GIN">GUINEANA</option><option value="GNB">GUINEANA</option><option value="GUY">GUYANESA</option><option value="HTI">HAITIANA</option><option value="HND">HONDUREÑA</option><option value="HUN">HÚNGARA</option><option value="IND">HINDÚ</option><option value="IDN">INDONESIA</option><option value="IRQ">IRAQUÍ</option><option value="IRN">IRANÍ</option><option value="IRL">IRLANDÉSA</option><option value="ISL">ISLANDÉSA</option><option value="COK">COOKIANA</option><option value="MHL">MARSHALÉSA</option><option value="SLB">SALOMONENSE</option><option value="ISR">ISRAELÍ</option><option value="ITA">ITALIANA</option><option value="JAM">JAMAIQUINA</option><option value="JPN">JAPONÉSA</option><option value="JOR">JORDANA</option><option value="KAZ">KAZAJA</option><option value="KEN">KENIATA</option><option value="KGZ">KIRGUISA</option><option value="KIR">KIRIBATIANA</option><option value="KWT">KUWAITÍ</option><option value="LAO">LAOSIANA</option><option value="LSO">LESOTENSE</option><option value="LVA">LETÓNA</option><option value="LBN">LIBANÉSA</option><option value="LBR">LIBERIANA</option><option value="LBY">LIBIA</option><option value="LIE">LIECHTENSTEINIANA</option><option value="LTU">LITUANA</option><option value="LUX">LUXEMBURGUÉSA</option><option value="MDG">MALGACHE</option><option value="MYS">MALASIA</option><option value="MWI">MALAUÍ</option><option value="MDV">MALDIVA</option><option value="MLI">MALIENSE</option><option value="MLT">MALTÉSA</option><option value="MAR">MARROQUÍ</option><option value="MTQ">MARTINIQUÉS</option><option value="MUS">MAURICIANA</option><option value="MRT">MAURITANA</option><option value="MEX">MEXICANA</option><option value="FSM">MICRONESIA</option><option value="MDA">MOLDAVA</option><option value="MCO">MONEGASCA</option><option value="MNG">MONGOLA</option><option value="MNE">MONTENEGRINA</option><option value="MOZ">MOZAMBIQUEÑA</option><option value="NAM">NAMIBIA</option><option value="NRU">NAURUANA</option><option value="NPL">NEPALÍ</option><option value="NIC">NICARAGÜENSE</option><option value="NER">NIGERINA</option><option value="NGA">NIGERIANA</option><option value="NOR">NORUEGA</option><option value="NZL">NEOZELANDÉSA</option><option value="OMN">OMANÍ</option><option value="NLD">NEERLANDÉSA</option><option value="PAK">PAKISTANÍ</option><option value="PLW">PALAUANA</option><option value="PSE">PALESTINA</option><option value="PAN">PANAMEÑA</option><option value="PNG">PAPÚ</option><option value="PRY">PARAGUAYA</option><option value="PER">PERUANA</option><option value="POL">POLACA</option><option value="PRT">PORTUGUÉSA</option><option value="PRI">PUERTORRIQUEÑA</option><option value="GBR">BRITÁNICA</option><option value="CAF">CENTROAFRICANA</option><option value="CZE">CHECA</option><option value="MKD">MACEDONIA</option><option value="COG">CONGOLEÑA</option><option value="COD">CONGOLEÑA</option><option value="DOM">DOMINICANA</option><option value="ZAF">SUDAFRICANA</option><option value="RWA">RUANDÉSA</option><option value="ROU">RUMANA</option><option value="RUS">RUSA</option><option value="WSM">SAMOANA</option><option value="KNA">CRISTOBALEÑA</option><option value="SMR">SANMARINENSE</option><option value="VCT">SANVICENTINA</option><option value="LCA">SANTALUCENSE</option><option value="STP">SANTOTOMENSE</option><option value="SEN">SENEGALÉSA</option><option value="SRB">SERBIA</option><option value="SYC">SEYCHELLENSE</option><option value="SLE">SIERRALEONÉSA</option><option value="SGP">SINGAPURENSE</option><option value="SYR">SIRIA</option><option value="SOM">SOMALÍ</option><option value="LKA">CEILANÉSA</option><option value="SWZ">SUAZI</option><option value="SSD">SURSUDANÉSA</option><option value="SDN">SUDANÉSA</option><option value="SWE">SUECA</option><option value="CHE">SUIZA</option><option value="SUR">SURINAMESA</option><option value="THA">TAILANDÉSA</option><option value="TZA">TANZANA</option><option value="TJK">TAYIKA</option><option value="TLS">TIMORENSE</option><option value="TGO">TOGOLÉSA</option><option value="TON">TONGANA</option><option value="TTO">TRINITENSE</option><option value="TUN">TUNECINA</option><option value="TKM">TURCOMANA</option><option value="TUR">TURCA</option><option value="TUV">TUVALUANA</option><option value="UKR">UCRANIANA</option><option value="UGA">UGANDÉSA</option><option value="URY">URUGUAYA</option><option value="UZB">UZBEKA</option><option value="VUT">VANUATUENSE</option><option value="VEN">VENEZOLANA</option><option value="VNM">VIETNAMITA</option><option value="YEM">YEMENÍ</option><option value="DJI">YIBUTIANA</option><option value="ZMB">ZAMBIANA</option><option value="ZWE">ZIMBABUENSE</option></select>                                                    </div>
            </div>

            <div class="col-lg-4" id="combo_otro_Disabled" style="display: block;">

            </div>

            <div class="col-lg-4" id="combo_otro" style="display: none;">
                <div class="form-group">
                    <label class="control-label" style="text-align:justify"><h6>Especifique otro régimen matrimonial</h6></label>
                    <input type="text" name="otroRegimen" id="otroRegimen" class="form-control" placeholder="p. ej. Concuño" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}" title="Ingresa otro" value="">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="control-label" for="NumDoc"><h6>Aclaraciones / Observaciones</h6></label>
                    <textarea name="dg_observaciones" style="background-color:#E8CECF" id="dg_observaciones" cols="62" rows="5" class="form-control"></textarea>
                </div>
                <label class="requerido">&nbsp;<h6>Todos los campos marcados con * son obligatorios</h6>. </label>
            </div>
        </div>
    </div>
    <center>
        <input type="submit" name="submit" class="btn btn-secondary" value="Guardar e ir a la siguiente sección">
    </center>

</div>