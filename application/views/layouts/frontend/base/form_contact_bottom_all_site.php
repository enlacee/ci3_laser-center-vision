<!--Box-->
<div class="box">
<p class="direccion"><strong><?php echo lang('msg_address') ?>:</strong> <?php echo lang('msg_send_box_address') ?>
(+593 2) 2250324 / 2241335 / 2257105 / 0969093943
info@lasercentervision2020.com
<strong></strong></p>
</div>
<!--End Box-->

<p><img src="/assets/images/logos/cards.gif" width="357" height="72" class="img-responsive mgAuto" /></p>


<div class="box">
	<form name="formContacto" id="formContacto" class="formContacto" method="post" action="">
    <fieldset id="datosForm">
      <div class='row clearfix'>

        <div class='col-sm-6'>
            <div class='form-group'>
                <label for="nombres"><?php echo lang('msg_name_complete') ?>:</label>
                <input class="form-control" id="nombres" name="nombres" type="text" placeholder="<?php echo lang('msg_set_name_complete') ?>" />
            </div>
        </div>

        <div class='col-sm-6'>
            <div class='form-group'>
                <label for="email"><?php echo lang('msg_age') ?>:</label>
                <input class="form-control" id="edad" name="edad" type="text" placeholder="<?php echo lang('msg_set_age') ?>" />
            </div>
        </div>

        <div class='col-sm-6'>
            <div class='form-group'>
                <label for="email"><?php echo lang('msg_address') ?>:</label>
                <input class="form-control" id="direccion" name="direccion" type="text" placeholder="<?php echo lang('msg_set_address') ?>" />
            </div>
        </div>

        <div class='col-sm-6'>
          <div class='form-group'>
                <label for="ciudad"><?php echo lang('msg_city') ?>:</label>
                <input class="form-control" id="ciudad" name="ciudad" type="text" placeholder="<?php echo lang('msg_set_city') ?>" />
          </div>
       </div>

        <div class='col-sm-6'>
            <div class='form-group'>
                <label for="telefono"><?php echo lang('msg_telephone_contact') ?>:</label>
                <input class="form-control" id="telefono" name="telefono" type="text" placeholder="<?php echo lang('msg_set_telephone_contact') ?>" />
            </div>
        </div>

        <div class='col-sm-6'>
            <div class='form-group'>
                <label for="telefono"><?php echo lang('msg_cell_phone') ?>:</label>
                <input class="form-control" id="celular" name="celular" type="text" placeholder="<?php echo lang('msg_set_cell_phone') ?>" />
            </div>
        </div>

        <div class='col-sm-6'>
            <div class='form-group'>
                <label for="email"><?php echo lang('msg_email') ?>:</label>
                <input class="form-control" id="email" name="email" type="text" placeholder="<?php echo lang('msg_set_email') ?>" />
            </div>
        </div>

        <div class='col-sm-6 interesCustom'>
          <div class='form-group'>
            <label for="interes">Problema Visual:</label>
            <select name="interes" id="interes" class="form-control">
                <option value=""><?php echo lang('msg_select') ?></option>
				<?php $pages = $this->load->get_var('surgerie') ?>
				<?php if(!empty($pages) && count($pages) > 0) : ?>
					<?php foreach ($pages as $key => $value): ?>
						<option value="<?php echo $value['id'] ?>"><?php echo strtoupper($value['name']) ?></option>
					<?php endforeach; ?>
				<?php endif; ?>
            </select>
          </div>
        </div>

        <div class='col-sm-12'>
            <div class='form-group'>
              <label for="direccion"><?php echo lang('msg_message') ?>Mensaje:</label>
                <textarea name="mensaje" rows="3" class="form-control" id="mensaje" placeholder="<?php echo lang('msg_set_message') ?>"></textarea>
            </div>
        </div>

         <div class='col-sm-12'>
            <input name="enviar" class="boton btn btn-primary" id="enviar"  type="submit" value="<?php echo lang('msg_send_consult') ?>">
        </div>

      </div><!--End Row-->
    </fieldset>
  </form>
</div>
