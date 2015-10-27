<!-- Col 3 -->
<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col col_3 sm568Max_width_100">
	<div class="ctn">
		<?php $pages = $this->load->get_var('note'); ?>
		<?php if(!empty($pages) && count($pages) > 0) : ?>
			<?php foreach ($pages as $key => $value): ?>
				<div class="box">
					<div class="alert alert-info">
						<?php echo $value['details'] ?>
					</div>
				</div>
			<?php endforeach; ?>
		<?php endif; ?>
	</div>
</div><!-- / -->
