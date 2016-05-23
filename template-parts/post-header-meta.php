<?php if(is_singular()): ?>
  <meta property="og:title" content="<?php sb_page_object_title(); ?>" />
  <meta property="og:type" content="article" />

  <?php if(has_post_thumbnail()): ?>
    <meta property="og:image" content="<?php the_post_thumbnail_url('thumbnail'); ?>" />
    <meta name="twitter:image" content="<?php the_post_thumbnail_url('thumbnail'); ?>">
  <?php endif; ?>
  <meta property="og:url" content="<?php the_permalink(); ?>" />
<?php else: ?>
  <meta property="og:title" content="<?php sb_page_title(); ?>" />
  <meta property="og:type" content="website" />
<?php endif; ?>

  <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
  <meta name="twitter:creator" content="@situatedbit">

  <meta name="description" content="<?php sb_page_meta_description(); ?>" />
  <meta property="og:description" content="<?php sb_page_meta_description(); ?>" />
  <meta name="twitter:card" value="<?php sb_page_meta_description(); ?>">
