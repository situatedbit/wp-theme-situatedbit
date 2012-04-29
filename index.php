<?php 
get_header();

get_sidebar();

if ( have_posts() ) : ?>

  <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'content', get_post_format() ); ?>
  <?php endwhile; ?>

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
