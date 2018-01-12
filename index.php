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

  <div class="content">
    Test
    <?php
    $query = new WP_Query( 'year=2017&monthnum=12&day=30' );

    if ($query->have_posts()) :

      while ($query->have_posts()):
        $query->the_post(); ?>
          <h2><?php the_title(); ?></h2>

      <?php endwhile;

    else:

    endif;

    ?>
  </div>
  <div class="sidebar">This is the side bar.</div>

<?php get_footer();

?>
