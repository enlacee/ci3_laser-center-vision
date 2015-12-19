<?php if (isset($data) && is_array($data)) : ?>
	<?php  echo $data['description'] ?>
<?php else: ?>
	<?php lang('msg_record_not_found') ?>
<?php endif;?>

<!-- Box form contact -->
<div class="box">
<p class="direccion">
	<strong><?php echo lang('msg_address') ?>:</strong> <?php echo lang('msg_send_box_address') ?>
<strong></strong>
</p>
</div>

<p><img src="<?php echo base_url() ?>assets/images/logos/cards<?php echo getIdLanguage() ?>.png" width="357" height="72" class="img-responsive mgAuto" /></p>
<div class="box">
	<?php $this->load->view("layouts/frontend/base/contactForm.php") ?>
</div>
<!--/ Box form contact -->
