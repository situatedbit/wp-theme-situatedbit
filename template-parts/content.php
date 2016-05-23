<article id="post-<?php the_ID(); ?>" class="post">
  <?php get_template_part('template-parts/post-header'); ?>

  <?php if ( is_singular() ) : ?>
	  <div class="post-content">
      <?php the_content('<span class="full-text-link">full text →</span>'); ?>
	  </div><!-- .post-content -->
  <?php else: ?>
    <?php get_template_part('template-parts/post-excerpt'); ?>
  <?php endif; ?>

  <?php get_template_part('template-parts/post-footer'); ?>
</article><!-- #post-<?php the_ID(); ?> -->
