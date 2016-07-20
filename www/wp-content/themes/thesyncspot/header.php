<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    	<?php wp_head(); ?>
	<title><?php
	if (is_front_page()) {
			wp_title(' '); ?><?php if(wp_title(' ', false)) { ?> at <?php } ?><?php bloginfo('name');
		}
		else {
			wp_title(' '); ?><?php if(wp_title(' ', false)) { } 
		}
		?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="<? bloginfo('template_url') ?>/favicon.ico">
    <link rel="stylesheet" href="<? bloginfo('template_url') ?>/css/normalize.min.css">
    <link rel="stylesheet" href="<? bloginfo('template_url') ?>/fonts/fonts.css">
    <link rel="stylesheet" href="<? bloginfo('template_url') ?>/style.css">
    <link rel="stylesheet" href="<? bloginfo('template_url') ?>/js/main.js">
</head>
<body <?php body_class(); ?>>