	<!-- Main -->
	<nav id="main_home">
		<ul>
			<li class="m_head hide">
				<span class="text1">MENU</span>
				<i class="fa fa-times-circle"></i>
			</li>

			<?php $pages = $this->load->get_var('pagesMenu'); if(!empty($pages) && count($pages) > 0) : ?>
			<?php $classMenu = array('m_home','m_clinica','m_servicios','m_preguntas','m_videos','m_ubicacion','m_cita','m_contacto'); ?>
				<?php foreach ($pages as $key => $value) : ?>
					<?php if ($key >= 0) : ?>
						<?php
						$activeClass = '';
						$stringClass = '' . $classMenu[$key] . ' ' . $activeClass ;
						?>
						<li><a class="<?php echo $stringClass ?>" href="<?php echo base_url_lang(url_title_beauty($value['title_seo'])) ?>"><?php echo $value['title'] ?></a></li>
					<?php endif; ?>
				<?php endforeach; ?>
			<?php else: ?>
				<li><a href="#">no found data</a></li>
			<?php endif; ?>
		</ul>
		<i class="fa fa-bars oculto"></i>
	</nav>
	<!--/ Main -->

	
	<p class="bold" style="text-align: center;font-weight: 3pc;">