<?php get_header(); ?>

<div class="main h-100">
        <div class="main-overlay h-100 d-flex flex-column align-items-center justify-content-center p-3">
          <div class="main-header">
            <div class="main-logo display-2 text-light text-center"><i class="fas fa-industry"></i></div>
            <h1 class="main-title display-4 text-center text-light"><?= get_bloginfo('name');?></h1>
            <p class="main-subtitle lead text-light"><?= get_bloginfo('description');?></p>
          </div>
        </div>
      </div>
    </div>

    <?php wp_footer(); ?>

  </body>

</html>