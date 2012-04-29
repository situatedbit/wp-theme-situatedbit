<article id="post-<?php the_ID(); ?>" class="post">
	<header class="post-header">
		<h1 class="post-title">
      <a href="<?php the_permalink(); ?>" title="<?php printf( 'Permalink to %s', the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
        <?php the_title(); ?>
      </a>
    </h1>
	</header><!-- .entry-header -->

	<div class="post-content">
		<?php the_content(); ?>
	</div>

  <?php include('post-footer.php'); ?>

</article><!-- #post-<?php the_ID(); ?> -->
