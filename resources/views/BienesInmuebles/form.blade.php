<div class="alert alert-danger" role="alert" style="line-height:23px !important;">Todos los datos de bienes declarados a nombre de la pareja, dependientes económicos y/o terceros o que sean en copropiedad con el Declarante no serán públicos.</div>
 <h5>BIENES DEL DECLARANTE, PAREJA Y/O DEPENDIENTES ECONÓMICOS</h5>
  <hr>
    <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="control-label" for="NumDoc"><h6>Tipo de inmueble</h6></label>
<select name="dsp_D_tipoInmueble" id="dsp_D_tipoInmueble" class="form-control" required="" onchange="MostrarOtro();"><option value="">Seleccione una opción</option><option value="CASA">CASA</option><option value="DPTO">DEPARTAMENTO</option><option value="EDIF">EDIFICIO</option><option value="LOCC">LOCAL COMERCIAL</option><option value="BODG">BODEGA</option><option value="PALC">PALCO</option><option value="RACH">RANCHO</option><option value="TERR">TERRENO</option><option value="OTRO">OTRO (ESPECIFIQUE)</option></select>                                            </div>
                                        </div>
                                        <div class="col-lg-4" id="combo_otro_Disabled" style="display: block;">
                                            <div class="form-group">
                                                <label class="control-label" style="text-align:justify"> <h6>Especifique</h6></label>
                                                <input type="text" disabled="" class="form-control" placeholder="p. ej. Hacienda" title="Ingresa otro">
                                            </div>
                                        </div>
                                            <div class="col-lg-4" id="combo_otro" style="display: none;">
                                                <div class="form-group">
                                                    <label class="control-label" style="text-align:justify">Especifique:</label>
                                                    <input type="text" name="bieni_especifica" id="bieni_especifica" class="form-control" placeholder="p. ej. Concuño" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}" title="Ingresa otro" value="">
                                                </div>
                                            </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="control-label" for="ProcessNum"><h6>Titular del inmueble</h6></label>
                                                <!-- saca el query de la tabla D_nivel_gobierno -->
<select name="dsp_D_titular" id="dsp_D_titular" class="form-control" required="" onchange="titular_inmueble();"><option value="">Seleccione una opción</option><option value="DEC">DECLARANTE</option><option value="DECON">DECLARANTE Y CÓNYUGE</option><option value="DCT">DECLARANTE EN COPROPIEDAD CON TERCEROS</option><option value="DCCT">DECLARANTE Y CÓNYUGE EN COPROPIEDAD CON TERCEROS</option><option value="DCC">DECLARANTE Y CONCUBINA O CONCUBINÁRIO</option><option value="DCCCT">DECLARANTE Y CONCUBINA O CONCUBINÁRIO EN COPROPIEDAD CON TERCEROS</option><option value="CYG">CÓNYUGE</option><option value="CCT">CÓNYUGE EN COPROPIEDAD CON TERCEROS</option><option value="CBN">CONCUBINA O CONCUBINÁRIO</option><option value="CCCT">CONCUBINA O CONCUBINÁRIO EN COPROPIEDAD CON TERCEROS</option><option value="CVV">CONVIVIENTE</option><option value="DECO">DECLARANTE Y CONVIVIENTE</option><option value="DCCTE">DECLARANTE Y CONVIVIENTE EN COPROPIEDAD CON TERCEROS</option><option value="CDEC">CONVIVIENTE Y DEPENDIENTE ECONÓMICO</option><option value="CDECT">CONVIVIENTE Y DEPENDIENTE ECONÓMICO EN COPROPIEDAD CON TERCEROS</option><option value="DEN">DEPENDIENTE ECONÓMICO</option><option value="DDE">DECLARANTE Y DEPENDIENTE ECONÓMICO</option><option value="DDECT">DECLARANTE Y DEPENDIENTE ECONÓMICO EN COPROPIEDAD CON TERCEROS</option><option value="DECT">DEPENDIENTE ECONÓMICO EN COPROPIEDAD CON TERCEROS</option><option value="DCDE">DECLARANTE CÓNYUGE Y DEPENDIENTE ECONÓMICO</option><option value="DCCDE">DECLARANTE, CONCUBINA O CONCUBINÁRIO Y DEPENDIENTE ECONÓMICO</option><option value="CDE">CÓNYUGE Y DEPENDIENTE ECONÓMICO</option><option value="CCDE">CONCUBINA O CONCUBINÁRIO Y DEPENDIENTE ECONÓMICO</option><option value="CDCTE">CÓNYUGE Y DEPENDIENTE ECONOMICO EN COPROPIEDAD CON TERCEROS</option></select>                                            </div>
                                                </div>
                                  </div>
   </div>
  <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="control-label" style="line-height:15px !important;"><h6>Porcentaje de propiedad del Declarante conforme a escrituración o contrato</h6></label>
                                                <input type="num" maxlenght="3" required="" name="bienei_porcentajeDeclarante" id="bienei_porcentajeDeclarante" class="form-control" placeholder="p. ej. 10%" value="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="control-label" for="NumDoc"><h6>Superficie del terreno</h6></label>
                                                <input type="number" step="0.1" name="bienes_superficieTerreno" required="" id="bienes_superficieTerreno" class="form-control" placeholder="p. ej. 30m" value="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="control-label" for="ProcessNum"><h6>Superficie de construcción</h6></label>
                                                <input type="text" name="bienes_superficieConstruccion" required="" id="bienes_superficieConstruccion" class="form-control" placeholder="p. ej. 30m" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                 <div class="container">
                              <div class="row">
                                <div class="col-lg-4">
                                     <div class="form-group">
                                         <label class="control-label" for="State"><h6>Forma de adquisición</h6></label>
<select name="dsp_D_formaAdquisicion" id="dsp_D_formaAdquisicion" class="form-control" required=""><option value="">Seleccione una opción</option><option value="CPV">COMPRAVENTA</option><option value="CSN">CESIÓN</option><option value="DNC">DONACIÓN</option><option value="HRN">HERENCIA</option><option value="PRM">PERMUTA</option><option value="RST">RIFA O SORTEO</option><option value="STC">SENTENCIA</option></select>                                            </div>
                                 </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="control-label" for="NumDoc"><h6>Forma de pago</h6></label>
                                                <!-- saca el query de la tabla D_nivel_gobierno -->
<select name="dsp_D_formaPago" id="dsp_D_formaPago" class="form-control" required=""><option value="">Seleccione una opción</option><option value="CR">CRÉDITO</option><option value="CO">CONTADO</option><option value="NA">NO APLICA</option></select>                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                            </div>
                                        </div>
                 </div>
                 </div>
                 <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="control-label" for="NumDoc"><h6>Tipo de transmisor de la propiedad</h6></label>
                                                <select name="tipoPersonatransmisor" id="tipoPersonatransmisor" onchange="transmisorTipo();" class="form-control" required="">
 <option value="">Seleccione una opción</option>                                                    <option value="FI">Persona Física</option>
                                                    <option value="MO">Persona Moral</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4" id="disabledNombretransmisor">
                                            <div class="form-group">
                                                <label class="control-label" for="NumDoc"><h6>Nombre del transmisor</h6></label>
                                                <input type="text" class="form-control" disabled="" placeholder="p. ej. Juan Robles Rosas" title="Ingresa nombre completo">
                                            </div>
                                        </div>
                                        <div class="col-lg-4" id="disabledRFCtransmisor">
                                            <div class="form-group">
                                                <label class="control-label" for="NumDoc"><h6>RFC del transmisor</h6> </label>
                                                <input type="text" class="form-control" disabled="" placeholder="p. ej. XXXX010101" title="Ingresa nombre completo">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div id="pFisicatransmisor" style="display: none;">
                                                <div class="form-group">
                                                    <label class="control-label" for="NumDoc"><h6>Nombre del transmisor</h6></label>
                                                    <input type="text" name="bienitransmisorNombreF" id="bienitransmisorNombreF" class="form-control" required="" placeholder="p. ej. Juan Robles Rosas" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}" title="Ingresa nombre completo" value="">
                                                </div>
                                            </div>
                                            <div id="pMoraltransmisor" style="display: none;">
                                                <div class="form-group">
                                                    <label class="control-label" for="NumDoc"><h6>Razón social del transmisor</h6></label>
                                                    <input type="text" name="bienitransmisorNombreM" id="bienitransmisorNombreM" class="form-control" required="" placeholder="p. ej. Juan Robles Rosas" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]{2,50}" title="Ingresa nombre completo" value="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div id="pFisicaRfctransmisor" style="display: none;">
                                                <div class="form-group">
                                                    <label class="control-label" for="ProcessNum"><h6>RFC del transmisor</h6></label>
                                                    <strong><input type="text" maxlength="13" name="bienitransmisorRfcF" id="bienitransmisorRfcF" required="" class="form-control" placeholder="p. ej. XXXX010101" pattern="([A-Z]{4}[0-9]{6}[A-Z0-9]{3})" title="Ingresa RFC a 13 dígitos" value=""></strong>
                                                </div>
                                            </div>
                                            <div id="pMoralRfctransmisor" style="display: none;">
                                                <div class="form-group">
                                                    <label class="control-label" for="ProcessNum"><h6>RFC del transmisor</h6></label>
                                                    <strong><input type="text" maxlength="12" name="bienitransmisorRfcM" id="bienitransmisorRfcM" required="" class="form-control" placeholder="p. ej. XXXX010101" pattern="([A-Z]{3}[0-9]{9})" title="Ingresa RFC a 12 dígitos" value=""></strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <hr>
                                 <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="control-label" style="line-height:15px !important;"><h6>Relación del transmisor de la propiedad con el titular</h6></label>
                                                <!-- saca el query de la tabla D_parentescoRelacion -->
<select name="dsp_D_parentescoRelacion" id="dsp_D_parentescoRelacion" class="form-control" required=""><option value="">Seleccione una opción</option><option value="ABU">ABUELO(A)</option><option value="NIE">NIETO(A)</option><option value="TIOA">TIO(A)</option><option value="AHI">AHIJADO(A)</option><option value="NUE">NUERA</option><option value="YER">YERNO</option><option value="CUN">CUÑADO(A)</option><option value="PAD">PADRE</option><option value="HER">HERMANO(A)</option><option value="PRI">PRIMO(A)</option><option value="HIJ">HIJO(A)</option><option value="SOB">SOBRINO(A)</option><option value="MAD">MADRE</option><option value="SUE">SUEGRO(A)</option><option value="NIN">NINGUNO</option><option value="OTRO">OTRO(ESPECIFIQUE)</option></select>                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="control-label" for="NumDoc"><h6>Valor de adquisición</h6>:</label>
                                                <input type="text" name="bienes_valorAdquisicion" required="" id="bienes_valorAdquisicion" class="form-control" placeholder="p. ej. 100000.0 Mxn" value="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="control-label" for="ProcessNum"><h6>El valor es conforme a</h6></label>
<select name="dsp_D_valorConformeA" id="dsp_D_valorConformeA" class="form-control" required=""><option value="">Seleccione una opción</option><option value="EP">ESCRITURA PÚBLICA</option><option value="SE">SENTENCIA</option><option value="CO">CONTRATO</option></select>                                            </div>
                                        </div>

                                    </div>
                                </div>
                                 <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="control-label" for="ProcessNum"><h6>Tipo de moneda</h6></label>
                                                <input type="text" name="bienes_tipoMoneda" required="" id="bienes_tipoMoneda" class="form-control" placeholder="p. ej. Peso mexicano" value="">
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="control-label" for="State"><h6>Fecha de adquisición del inmueble</h6></label>
                                                <input type="date" name="bienes_adquisicionInmueble" required="" id="bienes_adquisicionInmueble" class="form-control" value="">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="control-label" style="line-height:15px !important;"><h6>Datos del registro público de la propiedad, folio real u otro dato que permita su identificación</h6></label>
                                                <input type="text" name="bienes_datosRegistro" required="" id="bienes_datosRegistro" class="form-control" placeholder="p. ej. 10101010" value="">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                 <div class="col-lg-6">
                                      <div class="form-group">
                                      </div>
                                </div>
                               <div class="container">
                                 <div class="row">
                                        <div class="col-lg-4">
                                            <label class="control-label" for="ProcessNum"><h6>Ubicación del inmueble</h6></label>
                                            <select id="bieni_inmueble" name="bieni_inmueble" class="form-control" required="" onchange="lugar_res_Ex();">
  <option value="">Seleccione una opción</option>       
        <option value="MX">MÉXICO</option>
              <option value="EX">EXTRANJERO</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                            </div>
                                        </div>
                                </div>
                                </div>
                                 <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="control-label" for="NumDoc"><h6>Aclaraciones/Observaciones</h6></label>
                                                <textarea name="bienes_aclaraciones_observaciones" style="" id="bienes_aclaraciones_observaciones" cols="62" rows="5" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
  <div class="row">
                                    <div class="col-md-12">
                                        <center>
                                            <br>
                                            <a href="#" class="btn btn-sm btn-submit text-light">Ir a la sección anterior</a>
                                            <input type="submit" name="submit" class="btn btn-sm btn-submit text-light" value="Guardar e ir a la siguiente sección">
                                        </center>
                                    </div>
                                </div>