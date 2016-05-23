<article id="post-<?php the_ID(); ?>" class="post">
  <?php get_template_part('template-parts/post-header'); ?>

  <?php if ( is_singular() ) : ?>
	  <div class="post-content">
      <?php the_content('<span class="full-text-link">full text →</span>'); ?>
	  </div>
  <?php else: ?>
	  <div class="post-content-excerpt">
      <?php if (is_category('photos')) : ?>
      <?php endif; ?>

		  <?php the_excerpt(); ?>
	  </div><!-- .post-content-excerpt -->
  <?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
