
<!-- Col 2 -->
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col col_2 center-column">
	<div class="ctn">
		<?php if (isset($data['description'])) : ?>
			<?php echo $data['description'] ?>
		<?php else : ?>
			No found.
		<?php endif; ?>
		<!-- Box form contact -->
		<?php $this->load->view("layouts/frontend/base/form_contact_bottom_all_site.php"); ?>
		<!--/ Box form contact -->

	</div>
</div>
<!--/ Col 2 -->
