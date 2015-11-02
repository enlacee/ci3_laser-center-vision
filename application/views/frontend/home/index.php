
<!-- Col 2 -->
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col col_2 center-column">
	<div class="ctn">
		<?php if (isset($data['description'])) : ?>
			<?php echo $data['description'] ?>
		<?php else : ?>
			No found.
		<?php endif; ?>

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

	</div>
</div>
<!--/ Col 2 -->
