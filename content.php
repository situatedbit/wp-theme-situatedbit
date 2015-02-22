<article id="post-<?php the_ID(); ?>" class="post">
	<header class="post-header">

		<h1 class="post-title">
      <a href="<?php the_permalink(); ?>" title="<?php printf( 'Permalink to %s', the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
        <?php the_title(); ?>
      </a>
    </h1>
      <div class="post-meta">
        <?php sb_posted_on(); ?> · <?php echo sb_categories(get_the_ID()); ?>/
      </div>
	</header><!-- .entry-header -->

	<div class="post-content">
    <?php the_content('<span class="full-text-link">full text →</span>'); ?>
	</div>

  <?php include('post-footer.php'); ?>

</article><!-- #post-<?php the_ID(); ?> -->
