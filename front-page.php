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

<!-- <?php echo getColor('01','01'); ?> -->

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
        <a class="day-link" href="<?php echo get_day_link('', '01', '01'); ?>"><div class="day pulse" style="background-color:<?php getColor(01, 01); ?>"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '01', '02'); ?>"><div class="day pulse" style="background-color:<?php getColor(01, 02); ?>"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '01', '03'); ?>"><div class="day pulse" style="background-color:<?php getColor(01, 03); ?>"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '01', '04'); ?>"><div class="day pulse" style="background-color:<?php getColor(01, 04); ?>"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '01', '05'); ?>"><div class="day pulse" style="background-color:<?php getColor(01, 05); ?>"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '01', '06'); ?>"><div class="day pulse" style="background-color:<?php getColor(01, 06); ?>"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '01', '07'); ?>"><div class="day pulse" style="background-color:<?php getColor(01, 07); ?>"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '01', '08'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '01', '09'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '01', '10'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '01', '11'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '01', '12'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '01', '13'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '01', '14'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '01', '15'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '01', '16'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '01', '17'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '01', '18'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '01', '19'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '01', '20'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '01', '21'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '01', '22'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '01', '23'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '01', '24'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '01', '25'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '01', '26'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '01', '27'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '01', '28'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '01', '29'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '01', '30'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '01', '31'); ?>"><div class="day pulse"></div></a>
      </div>
      <div class="month two">
        F
        <a class="day-link" href="<?php echo get_day_link('', '02', '01'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '02', '02'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '02', '03'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '02', '04'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '02', '05'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '02', '06'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '02', '07'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '02', '08'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '02', '09'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '02', '10'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '02', '11'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '02', '12'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '02', '13'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '02', '14'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '02', '15'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '02', '16'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '02', '17'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '02', '18'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '02', '19'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '02', '20'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '02', '21'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '02', '22'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '02', '23'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '02', '24'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '02', '25'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '02', '26'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '02', '27'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '02', '28'); ?>"><div class="day pulse"></div></a>
        <div class="day empty-in-month"></div>
        <div class="day empty-in-month"></div>
        <div class="day empty-in-month"></div>
      </div>
      <div class="month three">
        M
        <a class="day-link" href="<?php echo get_day_link('', '03', '01'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '03', '02'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '03', '03'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '03', '04'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '03', '05'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '03', '06'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '03', '07'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '03', '08'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '03', '09'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '03', '10'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '03', '11'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '03', '12'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '03', '13'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '03', '14'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '03', '15'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '03', '16'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '03', '17'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '03', '18'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '03', '19'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '03', '20'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '03', '21'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '03', '22'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '03', '23'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '03', '24'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '03', '25'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '03', '26'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '03', '27'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '03', '28'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '03', '29'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '03', '30'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '03', '31'); ?>"><div class="day pulse"></div></a>
      </div>
      <div class="month four">
        A
        <a class="day-link" href="<?php echo get_day_link('', '04', '01'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '04', '02'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '04', '03'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '04', '04'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '04', '05'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '04', '06'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '04', '07'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '04', '08'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '04', '09'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '04', '10'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '04', '11'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '04', '12'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '04', '13'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '04', '14'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '04', '15'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '04', '16'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '04', '17'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '04', '18'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '04', '19'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '04', '20'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '04', '21'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '04', '22'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '04', '23'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '04', '24'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '04', '25'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '04', '26'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '04', '27'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '04', '28'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '04', '29'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '04', '30'); ?>"><div class="day pulse"></div></a>
        <div class="day empty-in-month"></div>
      </div>
      <div class="month five">
        M
        <a class="day-link" href="<?php echo get_day_link('', '05', '01'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '05', '02'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '05', '03'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '05', '04'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '05', '05'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '05', '06'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '05', '07'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '05', '08'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '05', '09'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '05', '10'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '05', '11'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '05', '12'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '05', '13'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '05', '14'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '05', '15'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '05', '16'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '05', '17'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '05', '18'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '05', '19'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '05', '20'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '05', '21'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '05', '22'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '05', '23'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '05', '24'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '05', '25'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '05', '26'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '05', '27'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '05', '28'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '05', '29'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '05', '30'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '05', '31'); ?>"><div class="day pulse"></div></a>
      </div>
      <div class="month six">
        J
        <a class="day-link" href="<?php echo get_day_link('', '06', '01'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '06', '02'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '06', '03'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '06', '04'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '06', '05'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '06', '06'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '06', '07'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '06', '08'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '06', '09'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '06', '10'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '06', '11'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '06', '12'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '06', '13'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '06', '14'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '06', '15'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '06', '16'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '06', '17'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '06', '18'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '06', '19'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '06', '20'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '06', '21'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '06', '22'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '06', '23'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '06', '24'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '06', '25'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '06', '26'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '06', '27'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '06', '28'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '06', '29'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '06', '30'); ?>"><div class="day pulse"></div></a>
        <div class="day empty-in-month"></div>
      </div>
      <div class="month seven">
        J
        <a class="day-link" href="<?php echo get_day_link('', '07', '01'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '07', '02'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '07', '03'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '07', '04'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '07', '05'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '07', '06'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '07', '07'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '07', '08'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '07', '09'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '07', '10'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '07', '11'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '07', '12'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '07', '13'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '07', '14'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '07', '15'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '07', '16'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '07', '17'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '07', '18'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '07', '19'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '07', '20'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '07', '21'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '07', '22'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '07', '23'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '07', '24'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '07', '25'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '07', '26'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '07', '27'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '07', '28'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '07', '29'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '07', '30'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '07', '31'); ?>"><div class="day pulse"></div></a>
      </div>
      <div class="month eight">
        A
        <a class="day-link" href="<?php echo get_day_link('', '08', '01'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '08', '02'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '08', '03'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '08', '04'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '08', '05'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '08', '06'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '08', '07'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '08', '08'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '08', '09'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '08', '10'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '08', '11'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '08', '12'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '08', '13'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '08', '14'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '08', '15'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '08', '16'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '08', '17'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '08', '18'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '08', '19'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '08', '20'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '08', '21'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '08', '22'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '08', '23'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '08', '24'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '08', '25'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '08', '26'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '08', '27'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '08', '28'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '08', '29'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '08', '30'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '08', '31'); ?>"><div class="day pulse"></div></a>
      </div>
      <div class="month nine">
        S
        <a class="day-link" href="<?php echo get_day_link('', '09', '01'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '09', '02'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '09', '03'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '09', '04'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '09', '05'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '09', '06'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '09', '07'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '09', '08'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '09', '09'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '09', '10'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '09', '11'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '09', '12'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '09', '13'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '09', '14'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '09', '15'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '09', '16'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '09', '17'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '09', '18'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '09', '19'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '09', '20'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '09', '21'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '09', '22'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '09', '23'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '09', '24'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '09', '25'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '09', '26'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '09', '27'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '09', '28'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '09', '29'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '09', '30'); ?>"><div class="day pulse"></div></a>
        <div class="day empty-in-month"></div>
      </div>
      <div class="month ten">
        O
        <a class="day-link" href="<?php echo get_day_link('', '10', '01'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '10', '02'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '10', '03'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '10', '04'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '10', '05'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '10', '06'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '10', '07'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '10', '08'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '10', '09'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '10', '10'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '10', '11'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '10', '12'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '10', '13'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '10', '14'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '10', '15'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '10', '16'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '10', '17'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '10', '18'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '10', '19'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '10', '20'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '10', '21'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '10', '22'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '10', '23'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '10', '24'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '10', '25'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '10', '26'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '10', '27'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '10', '28'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '10', '29'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '10', '30'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '10', '31'); ?>"><div class="day pulse"></div></a>
      </div>
      <div class="month eleven">
        N
        <a class="day-link" href="<?php echo get_day_link('', '11', '01'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '11', '02'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '11', '03'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '11', '04'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '11', '05'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '11', '06'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '11', '07'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '11', '08'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '11', '09'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '11', '10'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '11', '11'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '11', '12'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '11', '13'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '11', '14'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '11', '15'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '11', '16'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '11', '17'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '11', '18'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '11', '19'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '11', '20'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '11', '21'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '11', '22'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '11', '23'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '11', '24'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '11', '25'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '11', '26'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '11', '27'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '11', '28'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '11', '29'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '11', '30'); ?>"><div class="day pulse"></div></a>
        <div class="day empty-in-month"></div>
      </div>
      <div class="month twelve">
        D
        <a class="day-link" href="<?php echo get_day_link('', '12', '01'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '12', '02'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '12', '03'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '12', '04'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '12', '05'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '12', '06'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '12', '07'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '12', '08'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '12', '09'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '12', '10'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '12', '11'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '12', '12'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '12', '13'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '12', '14'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '12', '15'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '12', '16'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '12', '17'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '12', '18'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '12', '19'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '12', '20'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '12', '21'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '12', '22'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '12', '23'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '12', '24'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '12', '25'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '12', '26'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '12', '27'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '12', '28'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '12', '29'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '12', '30'); ?>"><div class="day pulse"></div></a>
        <a class="day-link" href="<?php echo get_day_link('', '12', '31'); ?>"><div class="day pulse"></div></a>
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
