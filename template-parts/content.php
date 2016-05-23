<article id="post-<?php the_ID(); ?>" class="post">
  <?php get_template_part('template-parts/post-header'); ?>

  <?php if ( is_singular() ) : ?>
	  <div class="post-content">
      <?php the_content('<span class="full-text-link">full text →</span>'); ?>
	  </div><!-- .post-content -->
  <?php else: ?>
	  <div class="post-excerpt <?php if(has_post_thumbnail()) {?>with-thumbnail<?php } ?>">
      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php if(has_post_thumbnail()) : ?>
          <div class="post-excerpt-thumbnail">
            <?php the_post_thumbnail('thumbnail'); ?>
          </div>
        <?php endif; ?>

	      <div class="post-excerpt-text">
		      <?php the_excerpt(); ?>
        </div>
      </a>
	  </div><!-- .post-excerpt -->
  <?php endif; ?>

  <?php get_template_part('template-parts/post-footer'); ?>
</article><!-- #post-<?php the_ID(); ?> -->
