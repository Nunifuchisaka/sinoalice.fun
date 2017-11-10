<article id="post-<?php the_ID(); ?>" <?php post_class('section_1 l_mg-t_40px'); ?>>
  <header class="section_1__header">
    <h1 class="section_1__h1"><?php the_title(); ?></h1>
    <p class="section_1__date"><?php the_time('Y.m.d'); ?></p>
  </header>
  <div class="section_1__1">
    <?php
    the_content( sprintf(
      get_the_title()
    ) );
    ?>
  </div>
</article>