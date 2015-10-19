<!doctype html>
<html lang="<?php echo $this->config->item('cs_lang'); ?>">
<head>
<meta charset="utf-8">
<title><?php echo $this->layout->getTitle(); ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

<meta name="description" content="<?php echo $this->layout->getDescripcion(); ?>">
<meta name="keywords" content="<?php echo $this->layout->getKeywords(); ?>">
<meta name="robots" content="index,follow" />

<link rel="canonical" href="" />

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

<link rel="stylesheet" type="text/css" href="assets/lib/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/menu-clean/estilos.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" href="assets/lib/jquery-ui/themes/smoothness/jquery-ui.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/config.css">

<!--[if lt IE 9]>
<script src="/js/html5.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script type="text/javascript" src="assets/lib/respond/dest/respond.min.js"></script>

<!--Add CSS (Layout)-->
<?php echo $this->layout->css; ?>
<!--End add CSS-->
</head>
<body>
    <div class="container mgTop10 mgBottom10 bgBlanco boxContainer">
    <?php require_once 'layout-partial/header.php'; ?>
    <div>
