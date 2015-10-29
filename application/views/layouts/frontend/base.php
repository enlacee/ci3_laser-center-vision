<!doctype html>
<html lang="<?php echo $this->config->item('cs_lang'); ?>">
<head>
<meta charset="utf-8">
<title><?php echo $this->layout->getTitle(); ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content="<?php // echo $this->layout->getDescripcion(); ?>">
<meta name="keywords" content="<?php echo $this->layout->getKeywords(); ?>">
<meta name="robots" content="index,follow" />

<link rel="canonical" href="http://mydomain.com/pagina" />

<!-- OpenGraph metadata-->
<meta property="og:locale" 			content="es_ES" />
<meta property="og:type" 			content="website" />
<meta property="og:title" 			content="<?php echo $this->layout->getSocialTitle(); ?>" />
<meta property="og:description"		content="<?php echo $this->layout->getSocialDescripcion(); ?>" />
<meta property="og:url" 			content="<?php echo current_url(); ?>" />
<meta property="og:site_name"		content="<?php echo $this->layout->getSocialSiteName(); ?>" />
<meta property="og:image" 			content="Por definir" />
<meta property='fb:admins' 			content='<?php echo $this->config->item('cs_api_facebook'); ?>'/>
<meta name="twitter:card" 			content="<?php echo $this->layout->getSocialResumen(); ?>"/>
<meta name="twitter:description"	content="<?php echo $this->layout->getSocialDescripcion(); ?>"/>
<meta name="twitter:title" 			content="<?php echo $this->layout->getSocialTitle(); ?>"/>
<meta name="twitter:site" 			content="<?php echo $this->config->item('cs_twitter'); ?>"/>
<meta name="twitter:creator" 		content="Por definir"/>

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/lib/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/lib/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/custom_bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/lib/formvalidation.io/dist/css/formValidation.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/font.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/base.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/config.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/main_home.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
<script type="text/javascript" src="<?php echo base_url() ?> assets/lib/respond/dest/respond.min.js"></script>

<!--Add CSS (Layout)-->
<?php echo $this->layout->css; ?>
<!--End add CSS-->

</head>
<body>

<!-- Body_bg -->
<div class="container body_bg">


	<!-- Header -->
	<?php $this->load->view("layouts/frontend/base/header.php"); ?>
	<!--/ Header -->


	<!-- Main -->
	<?php $this->load->view("layouts/frontend/base/main.php"); ?>
	<!--/ Main -->


	<!-- Slider -->
	<?php $this->load->view("layouts/frontend/base/slider.php"); ?>
	<!--/ Slider -->


	<!-- Body ctn -->
	<div class="row body_ctn">

		<!-- Column left -->
		<?php $this->load->view("layouts/frontend/base/left.php"); ?>
		<!--/ Column left -->

		<!-- Col 2 -->
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col col_2 center-column">
			<div class="ctn">
				<?php echo $content_for_layout; ?>
			</div>
		</div>
		<!--/ Col 2 -->


		<!-- Column right -->
		<?php $this->load->view("layouts/frontend/base/right.php"); ?>
		<!--/ Column right-->

	</div>
	<!--/ Body ctn -->


	<!-- Footer -->
	<?php  $this->load->view("layouts/frontend/base/footer.php"); ?>
	<!--/ Footer -->


</div>
<!--/ Body_bg -->


<!-- Copyright -->
<?php $this->load->view("layouts/frontend/base/copyright.php"); ?>
<!--/ Copyright -->


<!--Footer libraries-->
<?php $this->load->view("layouts/frontend/base/footer_lib.php"); ?>
<!--/ Footer libraries-->


<!-- Add JS (Layout) -->
<?php echo $this->layout->js; ?>
<!--/ End add JS -->

</body>
</html>
