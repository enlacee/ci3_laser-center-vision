<?php if (isset($data) && is_array($data)) : ?>
	<?php  echo $data['description'] ?>
<?php else: ?>
	<?php lang('msg_record_not_found') ?>
<?php endif;?>

<!-- Box form contact -->
<div class="box">
<p class="direccion"><strong><?php echo lang('msg_address') ?>:</strong> <?php echo lang('msg_send_box_address') ?>(+593 2) 2250324 / 2241335 / 2257105 / 0969093943 info@lasercentervision2020.com
<strong></strong></p>
</div>

<p><img src="/assets/images/logos/cards.gif" width="357" height="72" class="img-responsive mgAuto" /></p>
<div class="box">
	<?php $this->load->view("layouts/frontend/base/contactForm.php") ?>
</div>
<!--/ Box form contact -->
