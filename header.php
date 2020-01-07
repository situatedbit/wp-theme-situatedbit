<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title><?php sb_page_title(); ?></title>

  <link rel="stylesheet" media="all" href="<?php echo get_stylesheet_directory_uri() ?>/css/base.css" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="initial-scale=1.0,width=device-width" />

  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri() ?>/css/images/favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri() ?>/css/images/apple-touch-icon.png">

  <?php get_template_part('template-parts/post-header-meta'); ?>

  <?php wp_head(); ?>
</head>

<body>
  <section id="content">
    <header id="header" class="constrained-layout">
      <a href="<?php echo site_url() ?>" title="Home"><h1 id="logo"><?php bloginfo( 'name' ); ?></h1></a>
    </header> <!-- #header -->
    <div id="main" class="constrained-layout">
<!-- end: header -->
