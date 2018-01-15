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
    <?php if (have_posts()) :
      while (have_posts()) : the_post(); ?>

      <article class="post">
        <h2><u><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></u></h2>
        <p class="post-info"><?php the_time('F jS, Y g:i a'); ?> | Posted in
          <?php

            $categories = get_the_category();
            $separator = ", ";
            $output = '';

            if ($categories) {

              foreach ($categories as $category) {

                $output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;

              }

              echo trim($output, $separator);

            }

          ?>
        </p>
        <?php the_content(); ?>
      </article>

      <?php endwhile;

      echo paginate_links();

      else :
        echo '<p>No content found</p>';

      endif;
      
    ?>

    <!-- <?php
    $query = new WP_Query( 'year=2017&monthnum=12&day=30' );

    if ($query->have_posts()) :

      while ($query->have_posts()):
        $query->the_post(); ?>
          <h2><?php the_title(); ?></h2>

      <?php endwhile;

    else:

    endif;

    ?> -->
  </div>
  <div class="sidebar">[Search by date]</div>

<?php get_footer();

?>
