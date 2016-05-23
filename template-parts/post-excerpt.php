	  <div class="post-excerpt <?php if(has_post_thumbnail()) {?>with-thumbnail<?php } ?>">
      <a class="post-excerpt-link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">      
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
