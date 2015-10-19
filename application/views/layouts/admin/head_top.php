<!doctype html>
<html lang="<?php echo $this->config->item('cs_lang'); ?>">
<head>
<meta charset="utf-8">
<title><?php echo $this->layout->getTitle(); ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content="<?php echo $this->layout->getDescripcion(); ?>">
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

<link rel="stylesheet" type="text/css" href="assets/lib/font-awesome-4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<script type="text/javascript" src="assets/js/respond.min.js"></script>

<!--Add CSS (Layout)-->
<?php echo $this->layout->css; ?> 
<!--End add CSS-->