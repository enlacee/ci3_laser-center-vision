<!-- Col 1 -->
<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col col_1 left-column sm568Max_width_100">
	<div class="ctn">
		<div class="main_left">
			<!-- Box -->
			<div class="box">
				<h3><i class="fa fa-check-square-o"></i><?php echo strtoupper(lang('msg_cirugia')) ?></h3>
				<?php $pages = $this->load->get_var('pagesCirugia'); ?>
				<?php if(!empty($pages) && count($pages) > 0) : ?>
				<ul>
					<?php foreach($pages as $key => $value) : ?>
						<li><a href="<?php echo base_url_lang(url_title_beauty($value['title_seo'])) ?>"><?php echo $value['title'] ?></a></li>
					<?php endforeach; ?>
				</ul>
				<?php else : ?>
					<ul><li><a href="#">No found records.</a></li></ul>
				<?php endif; ?>
			</div>
			<!--/ box -->

			<!-- Box -->
			<div class="box">
				<h3><i class="fa fa-globe"></i><?php echo strtoupper(lang('msg_thecnologie')) ?></h3>
				<?php $pages = $this->load->get_var('pagesTecnologia'); ?>
				<?php if(!empty($pages) && count($pages) > 0) : ?>
				<ul>
					<?php foreach($pages as $key => $value) : ?>
						<li><a href="<?php echo base_url_lang(url_title_beauty($value['title_seo'])) ?>"><?php echo $value['title'] ?></a></li>
					<?php endforeach; ?>
				</ul>
				<?php else : ?>
					<ul><li><a href="#">No found records.</a></li></ul>
				<?php endif; ?>
			</div>
			<!--/ box -->

			<!-- Box -->
			<div class="box">
				<h3><i class="fa fa-leaf"></i><?php echo strtoupper(lang('msg_quizs')) ?></h3>
				<?php $pages = $this->load->get_var('pagesExamenes') ?>
				<?php if(!empty($pages) && count($pages) > 0) : ?>
				<ul>
					<?php foreach($pages as $key => $value) : ?>
						<li><a href="<?php echo base_url_lang(url_title_beauty($value['title_seo'])) ?>"><?php echo $value['title'] ?></a></li>
					<?php endforeach; ?>
				</ul>
				<?php else : ?>
					<ul><li><a href="#">No found records.</a></li></ul>
				<?php endif; ?>
			</div>
			<!--/ box -->

			<!-- Box -->
			<div class="box">
				<h3><i class="fa fa-share-alt"></i><?php echo strtoupper(lang('msg_follow_us')) ?></h3>
				<a href="https://www.facebook.com/lasercentervision2020" target="_blank">
					<img src="<?php echo base_url() ?>assets/images/logos/facebook.jpg" alt="Siguenos en Facebook">
				</a>
				<a href="https://www.youtube.com/user/LCVision2020" target="_blank">
					<img src="<?php echo base_url() ?>assets/images/logos/youtube.jpg" alt="Siguenos en Youtube">
				</a>
				<a href="https://twitter.com/LCVision2020" target="_blank">
					<img src="<?php echo base_url() ?>assets/images/logos/twitter.jpg" alt="Siguenos en Twitter">
				</a>
			</div>
			<!--/ box -->

			<!-- Box -->
			<div class="box">
				<h3><i class="fa fa-check-square-o"></i><?php echo strtoupper(lang('msg_cirugias')) ?></h3>
				<p><?php echo lang('msg_cirugias_text') ?></p>
				<div class="panel panel-default">
					<?php $pages = $this->load->get_var('surgerie') ?>
					<?php if(!empty($pages) && count($pages) > 0) : ?>
						<?php $total = 0; ?>
						<table class="table table-hover table-bordered table-condensed table-striped">
							<tbody>
								<?php foreach ($pages as $key => $value) : ?>
									<tr>
										<td><?php echo strtoupper($value['name']) ?></td>
										<td><?php echo $value['cant']; ?></td>
									</tr>
									<?php $total = $total + ((int) $value['cant']) ?>
								<?php endforeach; ?>
								<tr>
									<td><?php echo lang('msg_total_de_cirugias')?></td>
									<td>+<?php echo $total; ?></td>
								</tr>
							</tbody>
						</table>
					<?php endif; ?>
				</div>
				<p><?php echo lang('msg_last_update') ?></p>
			</div>
			<!--/ box -->

		</div>
	</div>
</div>
