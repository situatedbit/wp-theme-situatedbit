<?php if ( is_singular() ) : ?>
  <?php get_template_part('template-parts/post-singular'); ?>
<?php else: ?>
  <?php get_template_part('template-parts/post-excerpt'); ?>
<?php endif; ?>
