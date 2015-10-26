<!-- Col 1 -->
<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col col_1 left-column sm568Max_width_100">
	<div class="ctn">
		<div class="main_left">

			<!-- Box -->
			<div class="box">
				<h3><i class="fa fa-check-square-o"></i><?php echo strtoupper(lang('msg_cirugia')) ?></h3>

				<?php
					$pages = $this->load->get_var('pagesCirugia');
					if(!empty($pages) && count($pages) > 0) :
				?>
				<ul>
					<?php foreach($pages as $key => $value) : ?>
					<?php
						$keyName = getIdLangString('title');
						$urlFriendly = URLify::filter($value[$keyName])
					?>
						<li><a href="<?php echo base_url_lang($urlFriendly) ?>"><?php echo $value[$keyName] ?></a></li>
					<?php endforeach; ?>
				</ul>
				<?php else : ?>
					<ul>
						<li><a href="#">No found records.</a></li>
					</ul>
				<?php endif; ?>

			</div>
			<!--/ box -->

			<!-- Box -->
			<div class="box">
				<h3><i class="fa fa-globe"></i><?php echo strtoupper(lang('msg_thecnologie')) ?></h3>

				<?php
					$pages = $this->load->get_var('pagesTecnologia');
					if(!empty($pages) && count($pages) > 0) :
				?>
				<ul>
					<?php foreach($pages as $key => $value) : ?>
					<?php
						$keyName = getIdLangString('title');
						$urlFriendly = URLify::filter($value[$keyName])
					?>
						<li><a href="<?php echo base_url_lang($urlFriendly) ?>"><?php echo $value[$keyName] ?></a></li>
					<?php endforeach; ?>
				</ul>
				<?php else : ?>
					<ul>
						<li><a href="#">No found records.</a></li>
					</ul>
				<?php endif; ?>

			</div>
			<!--/ box -->

			<!-- Box -->
			<div class="box">
				<h3><i class="fa fa-leaf"></i><?php echo strtoupper(lang('msg_quizs')) ?></h3>
				<?php
					$pages = $this->load->get_var('pagesExamenes');
					if(!empty($pages) && count($pages) > 0) :
				?>
				<ul>
					<?php foreach($pages as $key => $value) : ?>
					<?php
						$keyName = getIdLangString('title');
						$urlFriendly = URLify::filter($value[$keyName])
					?>
						<li><a href="<?php echo base_url_lang($urlFriendly) ?>"><?php echo $value[$keyName] ?></a></li>
					<?php endforeach; ?>
				</ul>
				<?php else : ?>
					<ul>
						<li><a href="#">No found records.</a></li>
					</ul>
				<?php endif; ?>
			</div>
			<!--/ box -->

			<!-- Box -->
			<div class="box">
				<h3><i class="fa fa-share-alt"></i><?php echo strtoupper(lang('msg_follow_us')) ?></h3>
				<a href="#" target="_blank">
					<img src="<?php echo base_url() ?>assets/images/logos/facebook.jpg" alt="Siguenos en Facebook">
				</a>
				<a href="#" target="_blank">
					<img src="<?php echo base_url() ?>assets/images/logos/youtube.jpg" alt="Siguenos en Youtube">
				</a>
				<a href="#" target="_blank">
					<img src="<?php echo base_url() ?>assets/images/logos/twitter.jpg" alt="Siguenos en Twitter">
				</a>
			</div>
			<!--/ box -->

			<!-- Box -->
			<div class="box">
				<h3><i class="fa fa-check-square-o"></i><?php echo strtoupper(lang('msg_cirugias')) ?></h3>
				<p><?php echo lang('msg_cirugias_text') ?></p>
				<div class="panel panel-default">
					<table class="table table-hover table-bordered table-condensed table-striped">
						<tbody>
							<?php for( $i=1; $i<=18; $i++ ): ?>
							<tr>
								<td><?php echo strtoupper(lang('msg_cirugia')) ?></td>
								<td><?php echo $i; ?></td>
							</tr>
						<?php endfor; ?>
						</tbody>
					</table>
				</div>
			</div>
			<!--/ box -->

		</div>
	</div>
</div>
<!--/ Col 1 -->
