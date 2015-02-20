<footer class="post-footer">

  <div class="post-meta">
    <div class="post-category"><?php echo sb_categories(get_the_ID()); ?>/</div><?php sb_posted_on(); ?>
  </div>

  <?php the_tags('<ul class="tags"><li>', '</li><li>', '</li></ul>') ?>

	<?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
</footer>
