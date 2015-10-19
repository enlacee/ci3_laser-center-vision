
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
<meta property="og:image" 			content="" />
<meta property='fb:admins' 			content='<?php echo $this->config->item('cs_api_facebook'); ?>'/>
<meta name="twitter:card" 			content="<?php echo $this->layout->getSocialResumen(); ?>"/>
<meta name="twitter:description"	content="<?php echo $this->layout->getSocialDescripcion(); ?>"/>
<meta name="twitter:title" 			content="<?php echo $this->layout->getSocialTitle(); ?>"/>
<meta name="twitter:site" 			content="<?php echo $this->config->item('cs_twitter'); ?>"/>
<meta name="twitter:creator" 		content=""/>

<?php $this->load->view('layouts/default/require_css.php'); ?>
</head>
<body>
    <div class="container mgTop10 mgBottom10 bgBlanco boxContainer">
        <?php $this->load->view('layouts/default/body-header.php'); ?>
        <section id="contenidoBody">
            <div class="row clearfix mgTop10">
                <?php $this->load->view('layouts/default/partial/colum-1.php'); ?>
                <?php $this->load->view('layouts/default/partial/colum-2.php'); ?>
                <?php $this->load->view('layouts/default/partial/colum-3.php'); ?>
            </div>
        </section>
        <?php $this->load->view('layouts/default/body-footer.php'); ?>
    </div>

    <?php $this->load->view("layouts/default/footer.php"); ?>
    <?php $this->load->view('layouts/default/require_js.php'); ?>
</body>
<html>
