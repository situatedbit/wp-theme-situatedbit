  <header class="post-header">
    <?php if(has_post_thumbnail()) : ?>
      <div class="excerpt-thumbnail">
        <a class="excerpt-thumbnail-link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
          <?php the_post_thumbnail('thumbnail'); ?>
        </a>
      </div>
    <?php endif; ?>

    <div class="excerpt-post-meta">
      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
        <h1 class="excerpt-post-title"><?php sb_posted_on(); ?> ·  <?php the_title(); ?></h1>
      </a>
    </div>
  </header>
