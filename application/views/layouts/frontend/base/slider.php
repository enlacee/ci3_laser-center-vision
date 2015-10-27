	<!-- Slider principal -->
	<div class="row slider_home_ctn">
		<div class="col-xs-12">
			<div id="slider_home" class="carousel slide carousel-fade slider_home" data-ride="carousel">
			  <!-- Indicators -->
			  <?php /*
			  <ol class="carousel-indicators">
			    <li data-target="#slider_home" data-slide-to="0" class="active"></li>
			    <li data-target="#slider_home" data-slide-to="1"></li>
			    <li data-target="#slider_home" data-slide-to="2"></li>
			  </ol>
			  */ ?>

			<!-- Wrapper for slides -->
			<?php $pages = $this->load->get_var('slider') ?>
			<?php if(!empty($pages) && count($pages) > 0) : ?>
				<div class="carousel-inner" role="listbox">
					<?php foreach ($pages as $key => $value): ?>
						<div class="item">
							<a href="#">
							<img src="<?php echo base_url() ?><?php echo $value['image'] ?>">
							</a>
						</div>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#slider_home" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#slider_home" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			  <!--/ Controls -->

			</div>
		</div>
	</div>
	<!--/ Slider principal -->
