    <div class="">
        <?php //echo validation_errors(); ?>
    </div>

    <h3 style="
    font-weight: bold;
    font-size: 15px;
    padding: 6% 0 2% 0;"><?php echo lang('msg_form_cantact_h2') ?></h3>

    <?php $attributes = array('class' => 'formContacto', 'id' => 'formContacto'); ?>
    <?php echo form_open(base_url('post/contact'), $attributes); ?>
    <fieldset id="datosForm">

      <div class="row clearfix">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="nombres"><?php echo lang('msg_name_complete') ?>:</label>
                        <?php echo form_input(array(
                            'class' => '{required:true} form-control',
                            'id' => 'nombres',
                            'name' => 'nombres',
                            'placeholder' => lang('msg_set_name_complete'),
                            'value' => !empty($nombres) ? $nombres : ''
                        )); ?>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="edad"><?php echo lang('msg_age')?>:</label>
                        <?php echo form_input(array(
                            'class' => '{required:true} form-control',
                            'id' => 'edad',
                            'name' => 'edad',
                            'placeholder' => lang('msg_set_age'),
                            'value' => !empty($edad) ? $edad : ''
                        )); ?>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="email"><?php echo lang('msg_address') ?>:</label>
                        <?php echo form_input(array(
                            'class' => '{required:true} form-control',
                            'id' => 'direccion',
                            'name' => 'direccion',
                            'placeholder' => lang('msg_set_address'),
                            'value' => !empty($direccion) ? $direccion : ''
                        )); ?>
                    </div>
                </div>

                <div class="col-sm-6">
                  <div class="form-group">
                        <label for="ciudad"><?php echo lang('msg_city') ?>:</label>
                        <?php echo form_input(array(
                            'class' => '{required:true} form-control',
                            'id' => 'ciudad',
                            'name' => 'ciudad',
                            'placeholder' => lang('msg_set_city'),
                            'value' => !empty($ciudad) ? $ciudad : ''
                        )); ?>
                  </div>
               </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="telefono"><?php echo lang('msg_telephone_contact') ?>:</label>
                        <?php echo form_input(array(
                            'class' => '{required:true} form-control',
                            'id' => 'telefono',
                            'name' => 'telefono',
                            'placeholder' => lang('msg_set_telephone_contact'),
                            'value' => !empty($telefono) ? $telefono : ''
                        )); ?>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="celular"><?php echo lang('msg_cell_phone') ?>:</label>
                        <?php echo form_input(array(
                            'class' => '{required:true} form-control',
                            'id' => 'celular',
                            'name' => 'celular',
                            'placeholder' => lang('msg_set_cell_phone'),
                            'value' => !empty($celular) ? $celular : ''
                        )); ?>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="email"><?php echo lang('msg_email') ?>:</label>
                        <?php echo form_input(array(
                            'class' => '{required:true} form-control',
                            'id' => 'email',
                            'name' => 'email',
                            'placeholder' => lang('msg_set_email'),
                            'value' => !empty($email) ? $email : ''
                        )); ?>
                    </div>
                </div>

                <div class="col-sm-6 interesCustom">
                  <div class="form-group">
                    <label for="interes"><?php echo lang('msg_visual_problem') ?>:</label>
                    <?php $interesOpt = $this->load->get_var('interesOpt'); ?>
                    <select name="interes" id="interes" class="{required:true} form-control">
                        <option value="" <?php set_select('interes', '', TRUE)?>><?php echo lang('msg_select') ?></option>
        				<?php if(isset($interesOpt) && count($interesOpt) > 0) : ?>
        					<?php foreach ($interesOpt as $key => $value): ?>
                            <?php $selected = !empty($interes) ? $interes : '' ?>
                            <option value="<?php echo $value['meta_value'] ?>" <?php echo  set_select('interes', $value['meta_value'], $selected, true); ?>><?php echo $value['meta_value'] ?></option>
        					<?php endforeach; ?>
        				<?php else: ?>
        					<option value=""><?php echo lang('msg_record_not_found') ?></option>
        				<?php endif ?>
        			</select>
                  </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                      <label for="mensaje"><?php echo lang('msg_message') ?>:</label>
                        <?php echo form_textarea(array(
                            'class' => '{required:true} form-control',
                            'id' => 'mensaje',
                            'name' => 'mensaje',
                            'rows' => '3',
                            'placeholder' => lang('msg_set_message'),
                            'value' => !empty($mensaje) ? $mensaje : ''
                        )); ?>
                    </div>
                </div>

                <div class="col-sm-12">
                    <input name="enviar" class="boton btn btn-primary" id="enviar" type="submit"
                value="<?php echo lang('msg_send_consult') ?>">
                </div>


      </div><!--End Row-->


    </fieldset>
  </form>
