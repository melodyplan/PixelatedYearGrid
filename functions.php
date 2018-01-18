<?php

function pixelatedYear_resources() {

  // wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style( 'stylesheet', get_template_directory_uri() . '/style.css');
  // wp_enqueue_style( 'stylesheet', get_template_directory_uri() . '/style.php')

}

add_action('wp_enqueue_scripts', 'pixelatedYear_resources');

// Navigation Menu
register_nav_menus(array(
  'journal' => __( 'Journal Menu')
));

function getColor($month, $day) {
  // WP_Query arguments
  $dateargs = array(
      'post_type'              => array( 'post' ),
      'posts_per_page'         => '1',
    'date_query' => array(
          array(
              'year'  => 2018,
              'month' => $month,
              'day'   => $day,
          ),
      ),
  );

  // The Query
  $getPostQuery = new WP_Query( $dateargs );

  // The Loop
  if ( $getPostQuery->have_posts() ) {
      while ( $getPostQuery->have_posts() ) {
          $getPostQuery->the_post();
          $color = the_field('color');
      echo $color;
      }
  } else {
       echo 'uh oh';
  }
  // Restore original Post Data
  wp_reset_postdata();
}

?>
