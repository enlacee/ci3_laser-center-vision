<script src="<?php echo base_url('assets/lib/jquery/dist/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/lib/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/script.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/css/menu-clean/js/maps.js') ?>"></script>
<?php echo $this->layout->js; ?>
<script type="text/javascript">
	console.log('123');
</script>
<script type="text/javascript">
	$(function(){
		$().lynxmenu();
		/**
		* Add Class nav nav-pills
		* Function Menu Justificado
		*/
		var widthWindow = $( window ).width();
		if(widthWindow < 768){
			$( ".menu .lynx-menu.green li span.icon" ).css("float","right");
			$( ".menu .lynx-menu.green li span.icon" ).css("margin-right","10px");
			$( ".menu .lynx-menu.green li" ).first().append("<span class='menuTxt'>MENU</span>");
		}
	});
</script>
