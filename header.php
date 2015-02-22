<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>
    <?php
	    wp_title( '|', true, 'right' );
	    bloginfo( 'name' );
      $desc = get_bloginfo('description', 'display');
      echo ((is_home() || is_front_page()) && strlen(trim($desc)) > 0) ? " &mdash; $desc" : '';
    ?>
  </title>

  <link rel="stylesheet" media="all" href="<?php echo get_stylesheet_directory_uri() ?>/css/base.css" />

  <!--[if lt IE 9]>
  <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="initial-scale=1.0,width=device-width" />

  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri() ?>/css/images/favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri() ?>/css/images/apple-touch-icon.png">
  <!--<link href='//fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>-->
  <?php wp_head(); ?>
</head>

<!--[if lt IE 7]> <body class="ie ie6 lte9 lte8 lte7"> <![endif]-->
<!--[if IE 7]> <body class="ie ie7 lte9 lte8 lte7"> <![endif]-->
<!--[if IE 8]> <body class="ie ie8 lte9 lte8"> <![endif]-->
<!--[if IE 9]> <body class="ie ie9 lte9"> <![endif]-->
<!--[if gt IE 9]> <body class="ie"> <![endif]-->
<!--[if !IE]><!--> <body class=""> <!--<![endif]-->
  <section id="content">
    <header id="header" class="constrained-layout">
      <a href="<?php echo site_url() ?>" title="Situated Bit home"><h1 id="logo">Situated Bit</h1></a>
    </header> <!-- #header -->
    <div id="main" class="constrained-layout">
<!-- end: header -->
