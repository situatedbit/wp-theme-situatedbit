    <?php if(has_post_thumbnail()) : ?>
      <div class="excerpt-thumbnail">
        <a class="excerpt-link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">      
          <?php the_post_thumbnail('thumbnail'); ?>
        </a>
      </div>
    <?php endif; ?>
   
	  <div class="excerpt-body">
      <a class="excerpt-link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">      
	      <div class="excerpt-text">
		      <?php the_excerpt(); ?>
        </div>
      </a>
	  </div><!-- .excerpt -->
