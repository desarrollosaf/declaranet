<div class="card-body">
    <!-- Primera fila  -->
    <div class="container">
        <div class="row">
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="control-label" for="NumDoc"><h6>Tipo de bien en préstamo</h6></label>
                                <select style="background-color:#E8CECF" id="pres_inmueble" name="pres_inmueble" class="form-control" required="" onchange="inmueble();">
                                    <option value="">Seleccione una opción</option>                                                    <option value="INM">INMUEBLE</option>
                                    <option value="VEH">VEHÍCULO</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="form-group">
                            </div>
                        </div>
                    </div>
                </div>

                <div id="Inmueble" style="display: none">

                    <!-- Quinta fila  --> 
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="control-label" for="NumDoc"><h6>Tipo de inmueble</h6>:</label>
                                    <select style="background-color:#E8CECF" name="dsp_D_tipoInmueble" id="dsp_D_tipoInmueble" class="form-control" required="" onchange="MostrarOtro();"><option value="">Seleccione una opción</option><option value="CASA">CASA</option><option value="DPTO">DEPARTAMENTO</option><option value="EDIF">EDIFICIO</option><option value="LOCC">LOCAL COMERCIAL</option><option value="BODG">BODEGA</option><option value="PALC">PALCO</option><option value="RACH">RANCHO</option><option value="TERR">TERRENO</option><option value="OTRO">OTRO (ESPECIFIQUE)</option></select>                                                </div>
                            </div>
                            <div class="col-lg-4" id="otro_Disabled">
                                <div class="form-group">
                                    <label class="control-label" style="text-align:justify">Especifique:</label>
                                    <input type="text" disabled="" class="form-control" placeholder="p. ej. Hacienda" title="Ingresa otro">
                                </div>
                            </div>


                            <div class="col-lg-4" id="otro_Div" style="display: none;">
                                <div class="form-group">
                                    <label class="control-label" style="text-align:justify">Especifique:</label>
                                    <input type="text" name="otro" id="otro" class="form-control" placeholder="p. ej. Hacienda" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}" title="Ingresa otro">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="control-label" for="NumDoc">Ubicación del inmueble:</label>
                                    <select style="background-color:#E8CECF" name="dsp_D_extranjero" id="dsp_D_extranjero" class="form-control" required="" onchange="lugar_res_ExI();"><option value="">Seleccione una opción</option><option value="MX">MEXICO</option><option value="EX">EXTRANJERO</option></select>                                                </div>
                            </div>
                        </div>
                    </div>


                    <div id="divMexico" style="display: none;">
                        <hr>

                        <!-- Sexta  fila México  --> 
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label" for="NumDoc">Calle:</label>
                                        <input type="text" class="form-control" name="calle_dep_eco" id="calle_dep_eco" style="background-color:#E8CECF" placeholder="p. ej. Av. Independencia" value="">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label" for="ProcessNum">Núm. Exterior:</label>
                                        <input type="text" class="form-control" name="no_ext_dep_eco" id="no_ext_dep_eco" style="background-color:#E8CECF" placeholder="p. ej. 101" value="">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label" for="State">Núm. Interior:</label>
                                        <input type="text" class="form-control" name="no_int_dep_eco" id="no_int_dep_eco" style="background-color:#E8CECF" placeholder="p. ej. 1" value="">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Septima  fila México  --> 
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label" for="NumDoc">Colonia / Localidad:</label>
                                        <input type="text" class="form-control" name="col_dep_eco" id="calle_dep_eco" style="background-color:#E8CECF" placeholder="p. ej. Centro" value="">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label" for="ProcessNum">Municipio / Alcaldía:</label>
                                        <input type="text" class="form-control" name="mun_dep_eco" id="mun_dep_eco" style="background-color:#E8CECF" placeholder="p. ej. Gustavo A. Madero" value="">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label" for="State">Entidad Federativa: </label>
                                        <input type="text" style="background-color:#E8CECF" class="form-control" name="entfed_dep_eco" id="entfed_dep_eco" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}" title="Ingresa la entidad federativa" placeholder="p. ej. CDMX" value="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Octava   fila México  --> 
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label" for="NumDoc">Código Postal:</label> 
                                        <input type="text" style="background-color:#E8CECF" class="form-control" name="cp_dep_eco" id="cp_dep_eco" pattern="[0-9]{5}" title="Ingresa código postal a 5 dígitos" placeholder="p. ej. 50000" value="">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">

                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="divExtranjero" style="display: none;">

                        <hr>

                        <!-- Novena fila Extranjero  --> 
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label" for="NumDoc">Calle:</label>
                                        <input type="text" style="background-color:#E8CECF" class="form-control" name="calle_ex_dep_eco" id="calle_ex_dep_eco" placeholder="p. ej. Av. Independencia" value="">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label" for="ProcessNum">Núm. Exterior:</label>
                                        <input type="text" style="background-color:#E8CECF" class="form-control" name="no_ext_ex_dep_eco" id="no_ext_dep_eco" placeholder="p. ej. 101" value="">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label" for="State">Núm. Interior:</label>
                                        <input type="text" style="background-color:#E8CECF" class="form-control" name="no_int_es_dep_eco" id="no_int_dep_eco" placeholder="p. ej. 1" value="">
                                    </div>
                                </div>
                            </div>
                        </div>




                        <!-- Decima fila Extranjero --> 
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label" for="NumDoc">Ciudad / Localidad:</label>
                                        <input type="text" style="background-color:#E8CECF" class="form-control" name="ciu_ex_dep_eco" id="ciu_ex_dep_eco" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}" title="Ingresa la ciudad" placeholder="p. ej. Toluca" value="">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label" for="ProcessNum">Estado / Provincia:</label>
                                        <input type="text" style="background-color:#E8CECF" class="form-control" name="est_ext_ex_dep_eco" id="est_ext_ex_dep_eco" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}" title="Ingresa el estado o provincia" placeholder="p. ej. México" value="">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label" for="ProcessNum">País:</label>
                                        <input type="text" style="background-color:#E8CECF" class="form-control" name="pais_ex_dep_eco" id="pais_ex_dep_eco" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}" title="Ingresa el país" placeholder="p. ej. México" value="">
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- Decima segunda fila Extranjero--> 
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label" for="NumDoc">Código Postal:</label>
                                        <input type="text" style="background-color:#E8CECF" class="form-control" name="cp_ext_ex_dep_eco" id="cp_ext_ex_dep_eco" pattern="[0-9]{5}" title="Ingresa el código postal a 5 dígitos" placeholder="p. ej. 50000" value="">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="Vehiculo" style="display: none">

                    <!-- Decima cuarta fila--> 
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="control-label" for="NumDoc">Tipo de vehiculo:</label>
                                    <select name="dsp_D_tipoVehiculo" id="dsp_D_tipoVehiculo" class="form-control" required="" onchange="v_otro_vehiculof();"><option value="">Seleccione una opción</option><option value="AUMOT">AUTOMÓVIL/MOTOCICLETA</option><option value="AERN">AERONAVE</option><option value="BARYA">BARCO/YATE</option><option value="OTRO">OTROS (ESPECIFIQUE)</option></select>                                                </div>
                            </div>

                            <div class="col-lg-4" id="otro_vehiculo_d" style="display: none;">
                                <div class="form-group">
                                    <label class="control-label" for="NumDoc">Especifique:</label>
                                    <input type="text" name="v_otro_vehiculo" id="v_otro_vehiculo" class="form-control" placeholder="p. ej. espeficique otro">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Decima cuarta fila--> 
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">Marca:</label>
                                    <input type="text" name="pres_marca_vehiculo" id="pres_marca_vehiculo" placeholder="p. ej. Renault" class="form-control" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}" title="Ingresa marca" value="">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">Modelo:</label>
                                    <input type="text" name="pres_modelo_vehiculo" id="pres_modelo_vehiculo" placeholder="p. ej. Clío" class="form-control" value="">
                                </div>
                            </div>


                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">Año:</label>
                                    <input type="number" name="pres_anio_vehiculo" id="pres_anio_vehiculo" placeholder="p. ej. 2006" class="form-control" pattern="[0-9]{4}" value="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Decima cuarta fila--> 
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">Número de serie o registro:</label>
                                    <input type="number" name="pres_nSerie_vehiculo" id="pres_nSerie_vehiculo" class="form-control" placeholder="p. ej. 1HGCM82633A004352" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]|[0-9]{17}" title="Ingresa número exterior" value="">
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="control-label" for="ProcessNum">¿Dónde se encuentra registrado?</label>
                                    <select id="registroVehiculo" name="registroVehiculo" required="" class="form-control" onchange="lugar_res_Ex();">
                                        <option value="MX">SELECCIONE UNA OPCIÓN</option>
                                        <option value="MX">MÉXICO</option>
                                        <option value="EX">EXTRANJERO</option>
                                    </select>

                                </div>
                            </div>


                            <div class="col-lg-4">
                                <div class="form-group">
                                    <!-- MX  --> 
                                    <div id="dom_mex" style="display: none;">
                                        <label class="control-label" for="ProcessNum">Entidad federativa:</label>
                                        <input class="form-control" id="adeudo_p_entidad" name="adeudo_p_entidad" type="text" placeholder="México" value="">
                                    </div>
                                    <!-- EX  --> 
                                    <div id="dom_ext" style="display: none;">
                                        <label class="control-label" for="ProcessNum">País donde se localiza:</label>
                                        <select name="dsp_D_paises" id="dsp_D_paises" class="form-control" required=""><option value="">Seleccione una opción</option><option value="ABW">Aruba</option><option value="AFG">Afganistán</option><option value="AGO">Angola</option><option value="AIA">Anguila</option><option value="ALA">Islas Åland</option><option value="ALB">Albania</option><option value="AND">Andorra</option><option value="ARE">Emiratos Árabes Unidos (Los)</option><option value="ARG">Argentina</option><option value="ARM">Armenia</option><option value="ASM">Samoa Americana</option><option value="ATA">Antártida</option><option value="ATF">Territorios Australes Franceses (los)</option><option value="ATG">Antigua y Barbuda</option><option value="AUS">Australia</option><option value="AUT">Austria</option><option value="AZE">Azerbaiyán</option><option value="BDI">Burundi</option><option value="BEL">Bélgica</option><option value="BEN">Benín</option><option value="BES">Bonaire, San Eustaquio y Saba</option><option value="BFA">Burkina Faso</option><option value="BGD">Bangladés</option><option value="BGR">Bulgaria</option><option value="BHR">Baréin</option><option value="BHS">Bahamas (las)</option><option value="BIH">Bosnia y Herzegovina</option><option value="BLM">San Bartolomé</option><option value="BLR">Bielorrusia</option><option value="BLZ">Belice</option><option value="BMU">Bermudas</option><option value="BOL">Bolivia, Estado Plurinacional de</option><option value="BRA">Brasil</option><option value="BRB">Barbados</option><option value="BRN">Brunéi Darussalam</option><option value="BTN">Bután</option><option value="BVT">Isla Bouvet</option><option value="BWA">Botsuana</option><option value="CAF">República Centroafricana (la)</option><option value="CAN">Canadá</option><option value="CCK">Islas Cocos (Keeling)</option><option value="CHE">Suiza</option><option value="CHL">Chile</option><option value="CHN">China</option><option value="CIV">CÃ´te d'Ivoire</option><option value="CMR">Camerún</option><option value="COD">Congo (la República Democrática del)</option><option value="COG">Congo</option><option value="COK">Islas Cook (las)</option><option value="COL">Colombia</option><option value="COM">Comoras</option><option value="CPV">Cabo Verde</option><option value="CRI">Costa Rica</option><option value="CUB">Cuba</option><option value="CUW">Curazao</option><option value="CXR">Isla de Navidad</option><option value="CYM">Islas Caimán (las)</option><option value="CYP">Chipre</option><option value="CZE">República Checa (la)</option><option value="DEU">Alemania</option><option value="DJI">Yibuti</option><option value="DMA">Dominica</option><option value="DNK">Dinamarca</option><option value="DOM">República Dominicana (la)</option><option value="DZA">Argelia</option><option value="ECU">Ecuador</option><option value="EGY">Egipto</option><option value="ERI">Eritrea</option><option value="ESH">Sahara Occidental</option><option value="ESP">España</option><option value="EST">Estonia</option><option value="ETH">Etiopía</option><option value="FIN">Finlandia</option><option value="FJI">Fiyi</option><option value="FLK">Islas Malvinas [Falkland] (las)</option><option value="FRA">Francia</option><option value="FRO">Islas Feroe (las)</option><option value="FSM">Micronesia (los Estados Federados de)</option><option value="GAB">Gabón</option><option value="GBR">Reino Unido (el)</option><option value="GEO">Georgia</option><option value="GGY">Guernsey</option><option value="GHA">Ghana</option><option value="GIB">Gibraltar</option><option value="GIN">Guinea</option><option value="GLP">Guadalupe</option><option value="GMB">Gambia (La)</option><option value="GNB">Guinea-Bisáu</option><option value="GNQ">Guinea Ecuatorial</option><option value="GRC">Grecia</option><option value="GRD">Granada</option><option value="GRL">Groenlandia</option><option value="GTM">Guatemala</option><option value="GUF">Guayana Francesa</option><option value="GUM">Guam</option><option value="GUY">Guyana</option><option value="HKG">Hong Kong</option><option value="HMD">Isla Heard e Islas McDonald</option><option value="HND">Honduras</option><option value="HRV">Croacia</option><option value="HTI">Haití</option><option value="HUN">Hungría</option><option value="IDN">Indonesia</option><option value="IMN">Isla de Man</option><option value="IND">India</option><option value="IOT">Territorio Británico del Océano Índico (el)</option><option value="IRL">Irlanda</option><option value="IRN">Irán (la República Islámica de)</option><option value="IRQ">Irak</option><option value="ISL">Islandia</option><option value="ISR">Israel</option><option value="ITA">Italia</option><option value="JAM">Jamaica</option><option value="JEY">Jersey</option><option value="JOR">Jordania</option><option value="JPN">Japón</option><option value="KAZ">Kazajistán</option><option value="KEN">Kenia</option><option value="KGZ">Kirguistán</option><option value="KHM">Camboya</option><option value="KIR">Kiribati</option><option value="KNA">San Cristóbal y Nieves</option><option value="KOR">Corea (la República de)</option><option value="KWT">Kuwait</option><option value="LAO">Lao, (la) República Democrática Popular</option><option value="LBN">Líbano</option><option value="LBR">Liberia</option><option value="LBY">Libia</option><option value="LCA">Santa Lucía</option><option value="LIE">Liechtenstein</option><option value="LKA">Sri Lanka</option><option value="LSO">Lesoto</option><option value="LTU">Lituania</option><option value="LUX">Luxemburgo</option><option value="LVA">Letonia</option><option value="MAC">Macao</option><option value="MAF">San Martín (parte francesa)</option><option value="MAR">Marruecos</option><option value="MCO">Mónaco</option><option value="MDA">Moldavia (la Rep</option><option value="MDG">Madagascar</option><option value="MDV">Maldivas</option><option value="MEX">México</option><option value="MHL">Islas Marshall (las)</option><option value="MKD">Macedonia (la antigua República Yugoslava de)</option><option value="MLI">Malí</option><option value="MLT">Malta</option><option value="MMR">Myanmar</option><option value="MNE">Montenegro</option><option value="MNG">Mongolia</option><option value="MNP">Islas Marianas del Norte (las)</option><option value="MOZ">Mozambique</option><option value="MRT">Mauritania</option><option value="MSR">Montserrat</option><option value="MTQ">Martinica</option><option value="MUS">Mauricio</option><option value="MWI">Malaui</option><option value="MYS">Malasia</option><option value="MYT">Mayotte</option><option value="NAM">Namibia</option><option value="NCL">Nueva Caledonia</option><option value="NER">Níger (el)</option><option value="NFK">Isla Norfolk</option><option value="NGA">Nigeria</option><option value="NIC">Nicaragua</option><option value="NIU">Niue</option><option value="NLD">Países Bajos (los)</option><option value="NOR">Noruega</option><option value="NPL">Nepal</option><option value="NRU">Nauru</option><option value="NZL">Nueva Zelanda</option><option value="OMN">Omán</option><option value="PAK">Pakistán</option><option value="PAN">Panamá</option><option value="PCN">Pitcairn</option><option value="PER">Perú</option><option value="PHL">Filipinas (las)</option><option value="PLW">Palaos</option><option value="PNG">Papúa Nueva Guinea</option><option value="POL">Polonia</option><option value="PRI">Puerto Rico</option><option value="PRK">Corea (la República Democrática Popular de)</option><option value="PRT">Portugal</option><option value="PRY">Paraguay</option><option value="PSE">Palestina, Estado de</option><option value="PYF">Polinesia Francesa</option><option value="QAT">Catar</option><option value="REU">Reunión</option><option value="ROU">Rumania</option><option value="RUS">Rusia, (la) Federación de</option><option value="RWA">Ruanda</option><option value="SAU">Arabia Saudita</option><option value="SDN">Sudán (el)</option><option value="SEN">Senegal</option><option value="SGP">Singapur</option><option value="SGS">Georgia del sur y las islas sandwich del sur</option><option value="SHN">Santa Helena, Ascensión y Tristán de Acuña</option><option value="SJM">Svalbard y Jan Mayen</option><option value="SLB">Islas Salomón (las)</option><option value="SLE">Sierra leona</option><option value="SLV">El Salvador</option><option value="SMR">San Marino</option><option value="SOM">Somalia</option><option value="SPM">San Pedro y Miquelón</option><option value="SRB">Serbia</option><option value="SSD">Sudán del Sur</option><option value="STP">Santo Tomé y Príncipe</option><option value="SUR">Surinam</option><option value="SVK">Eslovaquia</option><option value="SVN">Eslovenia</option><option value="SWE">Suecia</option><option value="SWZ">Suazilandia</option><option value="SXM">Sint Maarten (parte holandesa)</option><option value="SYC">Seychelles</option><option value="SYR">Siria, (la) República Árabe</option><option value="TCA">Islas Turcas y Caicos (las)</option><option value="TCD">Chad</option><option value="TGO">Togo</option><option value="THA">Tailandia</option><option value="TJK">Tayikist</option><option value="TKL">Tokelau</option><option value="TKM">Turkmenistán</option><option value="TLS">Timor-Leste</option><option value="TON">Tonga</option><option value="TTO">Trinidad y Tobago</option><option value="TUN">Túnez</option><option value="TUR">Turquía</option><option value="TUV">Tuvalu</option><option value="TWN">Taiwán (Provincia de China)</option><option value="TZA">Tanzania, República Unida de</option><option value="UGA">Uganda</option><option value="UKR">Ucrania</option><option value="UMI">Islas de Ultramar Menores de Estados Unidos (las)</option><option value="URY">Uruguay</option><option value="USA">Estados Unidos (los)</option><option value="UZB">Uzbekistán</option><option value="VAT">Santa Sede[Estado de la Ciudad del Vaticano] </option><option value="VCT">San Vicente y las Granadinas</option><option value="VEN">Venezuela, Rep</option><option value="VGB">Islas Vírgenes (Británicas)</option><option value="VIR">Islas Vírgenes (EE.UU.)</option><option value="VNM">Viet Nam</option><option value="VUT">Vanuatu</option><option value="WLF">Wallis y Futuna</option><option value="WSM">Samoa</option><option value="YEM">Yemen</option><option value="ZAF">Sudáfrica</option><option value="ZMB">Zambia</option><option value="ZWE">Zimbabue</option><option value="ZZZ">Países no declarados</option></select>                                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>



                    <!-- Segunda fila  --> 
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="control-label" for="NumDoc">Dueño o titular:</label>
                                    <select name="adeudo_p_tipoOtorgante" id="adeudo_p_tipoOtorgante" class="form-control" onchange="otorgante();" required="">
                                        <option value="">Seleccione una opción</option>                                                        <option value="fisica">Persona Física</option>
                                        <option value="moral">Persona Moral</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-4" id="otorganteDisabledA">
                                <div class="form-group">
                                    <label class="control-label" for="NumDoc">Nombre del dueño:</label>
                                    <input type="text" class="form-control" disabled="" placeholder="p. ej. Juan Pérez." title="Ingresa nombre">
                                </div>
                            </div>

                            <div class="col-lg-4" id="otorganteDisabledB">
                                <div class="form-group">
                                    <label class="control-label" for="ProcessNum">RFC:</label>
                                    <input type="text" class="form-control" disabled="" placeholder="p. ej. XXXX010101"> 
                                </div>
                            </div>

                            <div class="col-lg-4" id="otorganteNombreFisica" style="display: none;">
                                <div class="form-group">
                                    <label class="control-label" for="NumDoc">Nombre del dueño:</label>
                                    <input type="text" name="adeudo_p_otorganteFisicaNombre" id="adeudo_p_otorganteFisicaNombre" class="form-control" placeholder="p. ej. Juan Pérez." pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}" title="Ingresa nombre" value="">
                                </div>
                            </div>

                            <div class="col-lg-4" id="otorganteRFCFisica" style="display: none;">
                                <div class="form-group">
                                    <label class="control-label" for="ProcessNum">RFC:</label>
                                    <input type="text" name="adeudo_p_otorganteFisicaRFC" id="adeudo_p_otorganteFisicaRFC" class="form-control" placeholder="p. ej. XXXX010101" maxlength="13" pattern="([A-Z]{4}([0-9]{6}[A-Z0-9]{3})" title="Ingresa RFC a 13 dígitos" value="">
                                </div>
                            </div>

                            <div class="col-lg-4" id="otorganteNombreMoral" style="display: none;">
                                <div class="form-group">
                                    <label class="control-label" for="NumDoc">Nombre del títular:</label>
                                    <input type="text" name="adeudo_p_mtorganteFisicaNombre" id="adeudo_p_mtorganteFisicaNombre" class="form-control" placeholder="p. ej. Desarrollo y Redes S.A. de C.V." pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}" title="Ingresa nombre" value="">
                                </div>
                            </div>

                            <div class="col-lg-4" id="otorganteRFCMoral" style="display: none;">
                                <div class="form-group">
                                    <label class="control-label" for="ProcessNum">RFC:</label>
                                    <input type="text" name="adeudo_p_mtorganteFisicaRFC" id="adeudo_p_mtorganteFisicaRFC" class="form-control" placeholder="p. ej. XXX010101" maxlength="12" pattern="([A-Z]{3}([0-9]{6}[A-Z0-9]{3})" title="Ingresa RFC a 12 dígitos" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Decima cuarta fila--> 
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">Relación con el dueño o el títular</label>
                                    <input type="text" name="pres_relacion_dueño" id="pres_relacion_dueño" class="form-control" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}" title="Ingresa relación con titular" placeholder="p. ej. Concuño" value="">
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- TERCER   --> 
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="control-label" for="NumDoc"><h6>Aclaraciones y Observaciones</h6></label>
                                <textarea class="form-control" style="background-color:#E8CECF" name="adeudo_p_observaciones" id="adeudo_p_observaciones"></textarea>
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
            </div>
        </div>