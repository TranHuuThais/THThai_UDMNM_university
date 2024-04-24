<?php
get_header(); 
 ?>

 <?php
 while (have_posts()):
    the_post();
 ?>

 
<div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/library-hero.jpg') ?>)"></div>
      <div class="page-banner__content container t-center c-white">
      <div class="page_banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title() ?></h1>
        <div class="page-banner__intro">
            <p><?php
                //the_excerpt();
            ?></p>
      </div>
      </div>
    </div>
</div> <!-- end page-banner -->



<?php endwhile;
 ?>