<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <?php global $virtue; ?>
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/x-icon" href="<?php if (isset($virtue['virtue_custom_favicon']['url'])) { echo $virtue['virtue_custom_favicon']['url']; } ?>" />
  <?php $blog_virtue = get_template_directory_uri();?>
  <script type="text/javascript">
  	var virtue_URL = "<?php echo $blog_virtue ?>";
  </script>       
  	<link rel="stylesheet" href="<?php echo $blog_virtue ?>/css/jquery-ui-1.10.4.custom.css" media="screen">
	<link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>         
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
	<!--[if IE 8]><link rel='stylesheet' type='text/css' href='<?php echo $blog_virtue ?>/css/ie8.css'><![endif]-->
	<!--[if IE 9]><link rel='stylesheet' type='text/css' href='<?php echo $blog_virtue ?>/css/ie9.css'><![endif]-->
	<!--[if IE]><script src='http://html5shiv.googlecode.com/svn/trunk/html5.js'></script><![endif]-->
	<!--[if (gte IE 6)&(lte IE 8)]><script type='text/javascript' src='<?php echo $blog_virtue ?>/js/selectivizr-min.js'></script><![endif]-->
	<script src="<?php echo $blog_virtue ?>/js/jquery-1.10.1.js"></script>	
	<script type="text/javascript" src="<?php echo $blog_virtue ?>/js/jquery-ui-1.10.4.custom.js"></script>
		<!--[if lte IE 9]><script src='<?php echo $blog_virtue ?>/js/placeholder.js'></script><![endif]-->	
  <?php wp_head(); ?>
    <script type="text/javascript" src="<?php echo $blog_virtue ?>/js/other-crap.js"></script>
    <link rel="stylesheet" href="<?php echo $blog_virtue ?>/css/fonts.css" media="screen">    
    <link rel="stylesheet" href="<?php echo $blog_virtue ?>/css/styles.css" media="screen">    
</head>
