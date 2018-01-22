<?php

get_header(); ?>

  <nav class="site-nav">
    <?php
      $args = array(
        'theme_location' => 'journal'
      );
    ?>
    <?php wp_nav_menu( $args ); ?>
  </nav>

<?php

if (have_posts()) :
  while(have_posts()) : the_post(); ?>

  <article class="post page">
    <?php the_content(); ?>
  </article

<?php endwhile;

  else :
    echo '<p>No content found</p>';

  endif;

get_footer();

?>
