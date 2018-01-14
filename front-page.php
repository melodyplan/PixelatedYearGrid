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
    <div class="months">
      <div class="month zero">
        <div class="day empty"></div>
        <div class="day empty">1</div>
        <div class="day empty"></div>
        <div class="day empty"></div>
        <div class="day empty"></div>
        <div class="day empty">5</div>
        <div class="day empty"></div>
        <div class="day empty"></div>
        <div class="day empty"></div>
        <div class="day empty"></div>
        <div class="day empty">10</div>
        <div class="day empty"></div>
        <div class="day empty"></div>
        <div class="day empty"></div>
        <div class="day empty"></div>
        <div class="day empty">15</div>
        <div class="day empty"></div>
        <div class="day empty"></div>
        <div class="day empty"></div>
        <div class="day empty"></div>
        <div class="day empty">20</div>
        <div class="day empty"></div>
        <div class="day empty"></div>
        <div class="day empty"></div>
        <div class="day empty"></div>
        <div class="day empty">25</div>
        <div class="day empty"></div>
        <div class="day empty"></div>
        <div class="day empty"></div>
        <div class="day empty"></div>
        <div class="day empty">30</div>
        <div class="day empty">31</div>
      </div>
      <div class="month one">
        J
        <a class="day-link" href="<?php echo get_day_link('', '01', '01'); ?>"><div class="day pulse"></div></a>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <a class="day-link" href="<?php echo get_day_link('', '01', '13'); ?>"><div class="day pulse"></div></a>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
      </div>
      <div class="month two">
        F
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day empty"></div>
        <div class="day empty"></div>
        <div class="day empty"></div>
      </div>
      <div class="month three">
        M
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
      </div>
      <div class="month four">
        A
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day empty"></div>
      </div>
      <div class="month five">
        M
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
      </div>
      <div class="month six">
        J
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day empty"></div>
      </div>
      <div class="month seven">
        J
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
      </div>
      <div class="month eight">
        A
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
      </div>
      <div class="month nine">
        S
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day empty"></div>
      </div>
      <div class="month ten">
        O
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
      </div>
      <div class="month eleven">
        N
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day empty"></div>
      </div>
      <div class="month twelve">
        D
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
        <div class="day pulse"></div>
      </div>
    </div>
  </div>
  <div class="sidebar">
    <div class="entries">
      <h5>Most Recent Entries</h5>
    </div>
    <div class="featured-image">
      <p>Test</p>
    </div>
  </div>

<?php get_footer();

?>
