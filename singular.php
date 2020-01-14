<?php
get_header();
?>

<div class="posts singular">
<?php
if ( have_posts() ) {

  while ( have_posts() ) {
    the_post();

    get_template_part( 'template-parts/content', get_post_type() );
  }
}
?>
</div>

<?php
get_footer();
?>
