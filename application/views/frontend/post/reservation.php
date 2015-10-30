<form name="formCita" id="formCita" method="post" action="">
	<fieldset id="datosForm">

	<legend><?php echo lang('msg_form2_title') ?></legend>

		<p class="font12"><?php echo lang('msg_form2_description') ?>.</p>

		<div class='row'>

			<div class='col-xs-12 col-sm-6 col-md-6 col-lg-6'>
				<div class='form-group'>
					<label for="nombres"><?php echo lang('msg_name') ?>:</label>
					<input class="form-control" id="nombres" name="nombres" type="text" placeholder="<?php echo lang('msg_set_name') ?>" />
				</div>
			</div>


			<div class='col-xs-12 col-sm-6 col-md-6 col-lg-6'>
				<div class='form-group'>
					<label for="apellidos"><?php echo lang('msg_last_name') ?>:</label>
					<input class="form-control" id="apellidos" name="apellidos" type="text" placeholder="<?php echo lang('msg_set_last_name') ?>" />
				</div>
			</div>


			<div class='col-xs-12 col-sm-6 col-md-6 col-lg-6'>
				<div class='form-group'>
					<label for="email"><?php echo lang('msg_email') ?>:</label>
					<input class="{required:true ,email:true, maxlength:30} form-control" id="email" name="email" type="text" placeholder="<?php echo lang('msg_set_email') ?>" />
				</div>
			</div>


			<div class='col-xs-12 col-sm-6 col-md-6 col-lg-6'>
				<div class='form-group'>
					<label for="edad"><?php echo lang('msg_age') ?>:</label>
					<input class="{required:true, number:true, minlength:1, maxlength:3} form-control" id="edad" name="edad" type="text" placeholder="<?php echo lang('msg_set_age') ?>" />
				</div>
			</div>


			<div class='col-xs-12 col-sm-6 col-md-6 col-lg-6'>
				<div class='form-group'>
					<label for="oficina"><?php echo lang('msg_telephone') ?>:</label>
					<input class="{required:true, number:true, minlength:6, maxlength:26} form-control" id="oficina" name="oficina" type="text" placeholder="<?php echo lang('msg_set_telephone') ?>" />
				</div>
			</div>

			<div class='col-xs-12 col-sm-6 col-md-6 col-lg-6'>
				<div class='form-group'>
					<label for="celular"><?php echo lang('msg_cell_phone') ?>:</label>
					<input class="{required:true, number:true, minlength:6, maxlength:26} form-control" id="celular" name="celular" type="text" placeholder="<?php echo lang('msg_cell_phone') ?>" />
				</div>
			</div>


			<div class='col-xs-12 col-sm-6 col-md-6 col-lg-6'>
				<div class='form-group'>
					<label for="ciudad"><?php echo lang('msg_city') ?>:</label>
					<input class="{required:true, maxlength:20} form-control" id="ciudad" name="ciudad" type="text" placeholder="<?php echo lang('msg_set_city') ?>" />
				</div>
			</div>


			<div class='col-xs-12 col-sm-6 col-md-6 col-lg-6'>
				<div class='form-group'>
					<label for="direccion"><?php echo lang('msg_adress_extra') ?>:</label>
					<input class="{required:true, maxlength:100} form-control" id="direccion" name="direccion" type="text" placeholder="<?php echo lang('msg_set_adress_extra') ?>" />
				</div>
			</div>


			<div class='col-xs-12 col-sm-12 col-md-6 col-lg-6 asuntoCustom'>
				<div class='form-group'>
				<label for="asunto"><?php echo lang('msg_visual_problem') ?>:</label>
				<select name="asunto" id="asunto" class="form-control">
					<option value=""><?php echo lang('msg_select') ?></option>
					<?php if(isset($data_options) && count($data_options) > 0) : ?>
						<?php foreach ($data_options as $key => $value): ?>
							<option value="<?php echo $key ?>"><?php echo $value['meta_value'] ?></option>
						<?php endforeach; ?>
					<?php else: ?>
						<?php echo lang('msg_record_not_found') ?>
					<?php endif ?>
				</select>
				</div>
			</div>


			<div class='col-xs-4 col-sm-4 col-md-2 col-lg-2 fechaCustom'>
				<div class='fecha form-group'>
					<label for="fecha"><?php echo lang('msg_date') ?>:</label>
					<input class="form-control" id="fecha" name="fecha" type="text"  placeholder="<?php echo lang('msg_date') ?>" />
				</div>
			</div>



			<div class='col-xs-4 col-sm-4 col-md-2 col-lg-2 horaCustom'>
			<div class='form-group'>
				<label for="hora"><?php echo lang('msg_hour') ?>:</label>
				<select name="hora" id="hora" class="form-control">
					<option value=""><?php echo lang('msg_hour') ?></option>
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
				</select>
				</div>
			</div>


			<div class='col-xs-4 col-sm-4 col-md-2 col-lg-2 minutosCustom'>
			<div class='form-group'>
				<label for="minutos"><?php echo lang('msg_minutes') ?>:</label>
				<select name="minutos" id="minutos" class="form-control">
					<option value=""><?php echo lang('msg_minutes') ?></option>
					<option value="00">00</option>
					<option value="15">15</option>
					<option value="30">30</option>
					<option value="45">45</option>
				</select>
				</div>
			</div>







		<div class='col-xs-12'>
			<div class='form-group'>
			<label for="detalle"><?php echo lang('msg_message_form2') ?>:</label>
				<textarea name="detalle" rows="3" class="form-control" id="detalle" placeholder="<?php echo lang('msg_set_message_form2') ?>"></textarea>
			</div>
		</div>





		</div><!--End Row-->





		<div class="row"><!--Row2-->

			<div class='col-sm-12'>
				<input name="enviar" class="boton btn btn-primary" id="enviar"  type="submit" value="<?php echo lang('msg_send') ?>">
				<input name="volver" class="boton btn btn-default" id="volver"  type="button" value="<?php echo lang('msg_back') ?>" onClick="javascript:history.back()">
			</div>

		</div><!--End Row2-->


	</fieldset>
</form>
<!--End Contenido-->
