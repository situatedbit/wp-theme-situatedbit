<article id="post-<?php the_ID(); ?>" class="post">
  <?php get_template_part('template-parts/post-header'); ?>

  <div class="post-content">
    <?php the_content('<span class="full-text-link">full text →</span>'); ?>
  </div><!-- .post-content -->

  <?php get_template_part('template-parts/post-footer'); ?>
</article><!-- #post-<?php the_ID(); ?> -->
