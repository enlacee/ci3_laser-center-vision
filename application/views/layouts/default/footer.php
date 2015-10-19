
<!--Footer-->
<footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">

        </div>
      </div>
    </div>
</footer>
<!--End Footer-->


<!--copy-->
<div id="copy">
	<div class="container">
	  <div class="row">
		<div class="col-xs-12">
		  &copy; 2015 - <a href="#">www.web.com</a>
		</div>
	  </div>
	</div>
</div>
<!--/ copy-->


<script src="assets/lib/jquery/dist/jquery.min.js"></script>
<script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/css/menu-clean/js/maps.js"></script>
<!--Add JS (Layout)-->
<?php echo $this->layout->js; ?>
<!--End add JS-->

<script type="text/javascript">
	$(document).ready(function(){
		console.log("abc")
	});
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
</body>
</html>
