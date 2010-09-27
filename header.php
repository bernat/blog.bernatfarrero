<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head>
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

  <title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

  <link rel="stylesheet" href="/wp-content/themes/bernatfarrero/stylesheets/blueprint.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="/wp-content/themes/bernatfarrero/stylesheets/style.css" type="text/css" media="screen" />
  <meta name="locality" content="Barcelona, España" />
  <meta name="robots" content="index, follow" />

  <!--[if IE]><link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/ie.css" type="text/css" media="screen" /><![endif]-->
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

  <!-- <script type="text/javascript" src="http://alexgorbatchev.com/pub/sh/current/scripts/shCore.js"></script>
  <script type="text/javascript" src="http://alexgorbatchev.com/pub/sh/current/scripts/shBrushBash.js"></script>
  <script type="text/javascript" src="http://alexgorbatchev.com/pub/sh/current/scripts/shBrushCss.js"></script>
  <script type="text/javascript" src="http://alexgorbatchev.com/pub/sh/current/scripts/shBrushDiff.js"></script>
  <script type="text/javascript" src="http://alexgorbatchev.com/pub/sh/current/scripts/shBrushPhp.js"></script>
  <script type="text/javascript" src="http://alexgorbatchev.com/pub/sh/current/scripts/shBrushPlain.js"></script>
  <script type="text/javascript" src="http://alexgorbatchev.com/pub/sh/current/scripts/shBrushRuby.js"></script>
  <script type="text/javascript" src="http://alexgorbatchev.com/pub/sh/current/scripts/shBrushSql.js"></script>
  <script type="text/javascript" src="http://alexgorbatchev.com/pub/sh/current/scripts/shBrushXml.js"></script>
  <link type="text/css" rel="stylesheet" href="http://alexgorbatchev.com/pub/sh/current/styles/shCore.css"/>
  <link type="text/css" rel="stylesheet" href="http://alexgorbatchev.com/pub/sh/current/styles/shThemeDefault.css" id="shTheme"/>

  <script type="text/javascript">
    SyntaxHighlighter.config.clipboardSwf = 'http://alexgorbatchev.com/pub/sh/current/scripts/clipboard.swf';
    SyntaxHighlighter.all();
  </script> -->

  <?php wp_head(); ?>
</head>

<body>

<div id="wrapper">
	<div id="header">
		<div id="logo">
		<h1>
		  <a href="<?php echo get_option('home'); ?>">
		    <img alt="logo of Bernat Farrero's Blog" src="http://blog.bernatfarrero.com/wp-content/uploads/2010/06/logo.png" />
		  </a>
		</h1>
		</div>
	</div>