<form name="formCita" id="formCita" method="post" action="" novalidate="novalidate" class="bv-form">
    <fieldset id="datosForm">

    <legend>FORMULARIO DE CITA OFTALMOLÓGICA VIRTUAL</legend>

        <p class="font12">Complete cuidadosamente su formulario para reservar una fecha para la cita.</p>

        <div class="row">

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="form-group has-feedback">
                    <label for="nombres">Nombres:</label>
                    <input class="form-control" id="nombres" name="nombres" type="text" placeholder="Coloque sus nombres" data-bv-field="nombres"><i class="form-control-feedback" data-bv-icon-for="nombres" style="display: none;"></i>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="nombres" data-bv-result="NOT_VALIDATED" style="display: none;">El campo de Nombre es obligatorio.</small></div>
            </div>


            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="form-group has-feedback">
                    <label for="apellidos">Apellidos:</label>
                    <input class="form-control" id="apellidos" name="apellidos" type="text" placeholder="Coloque sus apellidos" data-bv-field="apellidos"><i class="form-control-feedback" data-bv-icon-for="apellidos" style="display: none;"></i>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="apellidos" data-bv-result="NOT_VALIDATED" style="display: none;">El campo de Apellido es obligatorio.</small></div>
            </div>


            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="form-group has-feedback">
                    <label for="email">Email/Correo:</label>
                    <input class="{required:true ,email:true, maxlength:30} form-control" id="email" name="email" type="text" placeholder="Coloque su email o correo" data-bv-field="email"><i class="form-control-feedback" data-bv-icon-for="email" style="display: none;"></i>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="email" data-bv-result="NOT_VALIDATED" style="display: none;">El campo de Email es obligatorio.</small><small class="help-block" data-bv-validator="emailAddress" data-bv-for="email" data-bv-result="NOT_VALIDATED" style="display: none;">El Email/Correo ingresado no es válido.</small></div>
            </div>


            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="form-group has-feedback">
                    <label for="edad">Edad:</label>
                    <input class="{required:true, number:true, minlength:1, maxlength:3} form-control" id="edad" name="edad" type="text" placeholder="Coloque su edad" data-bv-field="edad"><i class="form-control-feedback" data-bv-icon-for="edad" style="display: none;"></i>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="edad" data-bv-result="NOT_VALIDATED" style="display: none;">El campo de Edad es obligatorio.</small><small class="help-block" data-bv-validator="integer" data-bv-for="edad" data-bv-result="NOT_VALIDATED" style="display: none;">El campo de Edad, solo permite valores númericos.</small><small class="help-block" data-bv-validator="stringLength" data-bv-for="edad" data-bv-result="NOT_VALIDATED" style="display: none;">El campo de Edad, máximo 3 carácteres.</small></div>
            </div>


            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="form-group has-feedback">
                    <label for="oficina">Teléfono fijo:</label>
                    <input class="{required:true, number:true, minlength:6, maxlength:26} form-control" id="oficina" name="oficina" type="text" placeholder="Coloque su número de teléfono fijo" data-bv-field="oficina"><i class="form-control-feedback" data-bv-icon-for="oficina" style="display: none;"></i>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="oficina" data-bv-result="NOT_VALIDATED" style="display: none;">El campo de Teléfono fijo es obligatorio.</small></div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="form-group has-feedback">
                    <label for="celular">Teléfono Celular:</label>
                    <input class="{required:true, number:true, minlength:6, maxlength:26} form-control" id="celular" name="celular" type="text" placeholder="Coloque su número de celular" data-bv-field="celular"><i class="form-control-feedback" data-bv-icon-for="celular" style="display: none;"></i>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="celular" data-bv-result="NOT_VALIDATED" style="display: none;">El campo de Teléfono Celular es obligatorio.</small></div>
            </div>





            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="form-group has-feedback">
                    <label for="ciudad">Ciudad:</label>
                    <input class="{required:true, maxlength:20} form-control" id="ciudad" name="ciudad" type="text" placeholder="Coloque su ciudad" data-bv-field="ciudad"><i class="form-control-feedback" data-bv-icon-for="ciudad" style="display: none;"></i>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="ciudad" data-bv-result="NOT_VALIDATED" style="display: none;">El campo de Ciudad es obligatorio.</small></div>
            </div>


            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="form-group has-feedback">
                    <label for="direccion">Dirección / Sector Domicilio:</label>
                    <input class="{required:true, maxlength:100} form-control" id="direccion" name="direccion" type="text" placeholder="Coloque su Dirección / Sector Domicilio" data-bv-field="direccion"><i class="form-control-feedback" data-bv-icon-for="direccion" style="display: none;"></i>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="direccion" data-bv-result="NOT_VALIDATED" style="display: none;">El campo de Dirección es obligatorio.</small></div>
            </div>


             <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 asuntoCustom">
                <div class="form-group has-feedback">
                <label for="asunto">Problema visual:</label>
                <select name="asunto" id="asunto" class="form-control" data-bv-field="asunto">
                    <option value="">Seleccione</option>
                    <option value="Infecciones/Inflamaciones oculares">Infecciones/Inflamaciones oculares</option>
                    <option value="Miopia">Miopia</option>
                    <option value="Astigmatismo">Astigmatismo</option>
                    <option value="Miopía y Astigmatismo">Miopía y Astigmatismo</option>
                    <option value="Hipermetropía">Hipermetropía</option>
                    <option value="Catarata">Catarata</option>
                    <option value="Presbicia">Presbicia</option>
                    <option value="Pterigium/terigio">Pterigium/terigio</option>
                    <option value="Queratocono">Queratocono</option>
                    <option value="Estrabismo">Estrabismo</option>
                    <option value="Glaucoma">Glaucoma</option>
                    <option value="Desprendimiento de retina">Desprendimiento de retina</option>
                    <option value="Retinopatía diabética">Retinopatía diabética</option>
                    <option value="Enfermedades de la retina">Enfermedades de la retina</option>
                    <option value="Transplante de cornea">Transplante de cornea</option>
                    <option value="Cirugia plastica ocular">Cirugia plastica ocular</option>
                    <option value="Ojo seco">Ojo seco</option>
                    <option value="Otro">Otro</option>
                </select><i class="form-control-feedback" data-bv-icon-for="asunto" style="display: none;"></i>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="asunto" data-bv-result="NOT_VALIDATED" style="display: none;">El campo de Asunto es obligatorio.</small></div>
            </div>


            <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2 fechaCustom">
                <div class="fecha form-group has-feedback">
                    <label for="fecha">Fecha:</label>
                    <input class="form-control" id="fecha" name="fecha" type="text" placeholder="Fecha" data-bv-field="fecha"><i class="form-control-feedback" data-bv-icon-for="fecha" style="display: none;"></i>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="fecha" data-bv-result="NOT_VALIDATED" style="display: none;">El campo de Fecha es obligatorio.</small><small class="help-block" data-bv-validator="date" data-bv-for="fecha" data-bv-result="NOT_VALIDATED" style="display: none;">La fecha no es válida</small></div>
            </div>



            <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2 horaCustom">
              <div class="form-group has-feedback">
                <label for="hora">Hora:</label>
                <select name="hora" id="hora" class="form-control" data-bv-field="hora">
                    <option value="">Hora</option>
                    <option value="08 AM">8 AM</option>
                    <option value="09 AM">9 AM</option>
                    <option value="10 AM">10 AM</option>
                    <option value="11 AM">11 AM</option>
                    <option value="12 PM">12 MD</option>
                    <option value="13 PM">1 PM</option>
                    <option value="14 PM">2 PM</option>
                    <option value="15 PM">3 PM</option>
                    <option value="16 PM">4 PM</option>
                    <option value="17 PM">5 PM</option>
                    <option value="18 PM">6 PM</option>
                    <option value="19 PM">7 PM</option>
                    <option value="20 PM">8 PM</option>
                    <option value="21 PM">9 PM</option>
                    <option value="22 PM">10 PM</option>
                    <option value="23 PM">11 PM</option>
                    <option value="00 AM">12 AM</option>
                    <option value="01 AM">1 AM</option>
                    <option value="02 AM">2 AM</option>
                    <option value="03 AM">3 AM</option>
                    <option value="04 AM">4 AM</option>
                    <option value="05 AM">5 AM</option>
                    <option value="06 AM">6 AM</option>
                    <option value="07 AM">7 AM</option>
                </select><i class="form-control-feedback" data-bv-icon-for="hora" style="display: none;"></i>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="hora" data-bv-result="NOT_VALIDATED" style="display: none;">El campo de Hora es obligatorio.</small></div>
            </div>


            <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2 minutosCustom">
              <div class="form-group has-feedback">
                <label for="minutos">Minutos:</label>
                <select name="minutos" id="minutos" class="form-control" data-bv-field="minutos">
                    <option value="">Minutos</option>
                    <option value="00">00</option>
                    <option value="15">15</option>
                    <option value="30">30</option>
                    <option value="45">45</option>
                </select><i class="form-control-feedback" data-bv-icon-for="minutos" style="display: none;"></i>
                <small class="help-block" data-bv-validator="notEmpty" data-bv-for="minutos" data-bv-result="NOT_VALIDATED" style="display: none;">El campo de Minútos es obligatorio.</small></div>
            </div>







        <div class="col-xs-12">
            <div class="form-group has-feedback">
              <label for="detalle">Detalle del problema visual que presenta el paciente:</label>
                <textarea name="detalle" rows="3" class="form-control" id="detalle" placeholder="Coloque los detalles de su consulta" data-bv-field="detalle"></textarea><i class="form-control-feedback" data-bv-icon-for="detalle" style="display: none;"></i>
            <small class="help-block" data-bv-validator="notEmpty" data-bv-for="detalle" data-bv-result="NOT_VALIDATED" style="display: none;">El campo de Detalle es obligatorio.</small></div>
        </div>





        </div><!--End Row-->





        <div class="row"><!--Row2-->

             <div class="col-sm-12">
                <input name="enviar" class="boton btn btn-primary" id="enviar" type="submit" value="Enviar">
                <input name="volver" class="boton btn btn-default" id="volver" type="button" value="Volver" onclick="javascript:history.back()">
            </div>

        </div><!--End Row2-->


    </fieldset>
</form>
