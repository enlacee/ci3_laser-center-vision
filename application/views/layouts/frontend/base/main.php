	<!-- Main -->
	<nav id="main_home">
		<ul>
			<li class="m_head hide">
				<span class="text1">MENU</span>
				<i class="fa fa-times-circle"></i>
			</li>
			<?php $pagesMenu = $this->load->get_var('pagesMenu'); if(!empty($pagesMenu) && count($pagesMenu) > 0) : ?>
			<?php $classMenu = array('m_home','m_clinica','m_servicios','m_preguntas','m_videos','m_ubicacion','m_cita','m_contacto'); ?>
				<?php foreach ($pagesMenu as $key => $value) : ?>
					<?php
					$activeClass = '';
					$stringClass = '' . $classMenu[$key] . ' ' . $activeClass ;
					$keyNameTitle = getIdLangString('title');
					$urlFriendly = URLify::filter($value[$keyNameTitle])
					?>
					<li><a class="<?php echo $stringClass ?>" href="<?php echo base_url_lang($urlFriendly) ?>"><?php echo $value[$keyNameTitle] ?></a></li>
				<?php endforeach; ?>
			<?php else: ?>
				<li><a href="#">no found data</a></li>
			<?php endif; ?>
		</ul>
		<i class="fa fa-bars oculto"></i>
	</nav>
	<!--/ Main -->
