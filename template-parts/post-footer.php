<footer class="post-footer post-meta">
    <?php the_tags('<ul class="tags"><li>', '</li><li>', '</li></ul>') ?>

    <p><?php edit_post_link( 'Edit', '<span class="edit-link">(', ')</span>' ); ?></p>

    <nav>
      <ol>
        <li>
          <?php echo sb_post_footer_nav_item([
            'post' => get_next_post($in_same_term = true),
            'link_prefix' => '← ',
            'rel' => 'next',
            'title' => 'Newer post'
          ]); ?>
        </li>
        <li>
          <?php echo sb_post_footer_nav_item([
            'post' => get_previous_post($in_same_term = true),
            'link_suffix' => ' →',
            'rel' => 'prev',
            'title' => 'Older post'
          ]); ?>
        </li>
      </ol>
    </nav>
</footer>
