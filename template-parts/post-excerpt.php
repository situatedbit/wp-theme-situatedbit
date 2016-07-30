<article id="post-<?php the_ID(); ?>" class="post excerpt <?php if(has_post_thumbnail()) : ?>has-thumbnail<?php endif; ?>">
  <?php get_template_part('template-parts/post-header'); ?>

  <?php get_template_part('template-parts/post-excerpt-body'); ?>

  <?php get_template_part('template-parts/post-footer'); ?>
</article><!-- #post-<?php the_ID(); ?> -->
