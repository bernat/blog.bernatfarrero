<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
  <link rel="stylesheet" href="/wp-content/themes/bernatfarrero/stylesheets/style.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="/wp-content/themes/bernatfarrero/stylesheets/grid.css" type="text/css" media="screen" />
  <meta name="locality" content="Barcelona, España" />
  <meta name="robots" content="index, follow" />
  <!--[if IE]><link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/ie.css" type="text/css" media="screen" /><![endif]-->
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <?php wp_head(); ?>
</head>
<body>
  <div class="row">
  	<div id="header">
  		<div id="logo">
  		  <a href="<?php echo get_option('home'); ?>">
  		    <h1>Bernat Farrero</h1>
  		  </a>
  		</div>
  	</div>