<?php
get_header();

if ( have_posts() ) : ?>
  <div class="posts excerpts">
    <?php
      while ( have_posts() ) : the_post();
        get_template_part( 'template-parts/content', get_post_format() );
      endwhile;
    ?>
  </div>
  <?php
		the_posts_pagination( array(
			'prev_text'          => __( 'Previous' ),
			'next_text'          => __( 'Next'),
      'screen_reader_text' => __( 'More:' )
		) );
  ?>
<?php else : ?>

  <article id="post-0" class="post no-results not-found">
    <header class="entry-header">
     <h1 class="entry-title">No items found</h1>
    </header>

    <div class="entry-content">
      <p>No results were found for the requested archive. Perhaps searching will help find a related post.</p>
      <?php get_search_form(); ?>
    </div><!-- .entry-content -->
  </article><!-- #post-0 -->

<?php endif;

get_footer(); ?>
