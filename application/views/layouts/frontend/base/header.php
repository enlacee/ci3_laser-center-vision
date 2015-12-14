
<!-- Header -->
<div class="row header">

	<!-- col_1 -->
	<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col col_1">
		<div class="ctn">
			<div class="logo">
				<a href="<?php echo base_url() ?>">
					<img src="<?php echo base_url() ?>assets/images/logos/logo<?php echo getIdLanguage() ?>.png" alt="Logo Laser Center Vision 2020" class="img-responsive">
				</a>
			</div>
		</div>
	</div>
	<!--/ col_1 -->
	<div class="col-sm-2 col-md-2 col-lg-2">		
		<div class="el-skype">
			<div style="text-align: center;width: 100px;">
				<img src="<?php echo base_url() ?>assets/images/flag<?php echo getIdLanguage() ?>.png"/>
				<p><?php echo lang('msg_english_version') ?></p>
			</div>
			
			<div style="position: absolute;right: -30px;top: 0;">
				<a href="skype:lcvision2020?call">
					<img src="<?php echo base_url() ?>assets/images/ico_skype.png" />
				</a>
			</div>
		</div>
	</div>

	<!-- col_2 -->
	<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col col_2">
		<div class="ctn">
			<?php $banner = $this->load->get_var('bannerOne'); ?>
			<?php if (!empty($banner[0]) && is_array($banner[0])) : ?>
				<?php $value = $banner[0]; ?>
				<div class="banner_top">
					<img src="<?php echo base_url() ?><?php echo $value['image'] ?>" alt="Logo Laser Center Vision 2020" class="img-responsive">
				</div>
			<?php endif; ?>
		</div>
	</div>
	<!--/ col_2 -->

</div>
<!--/ Header -->
