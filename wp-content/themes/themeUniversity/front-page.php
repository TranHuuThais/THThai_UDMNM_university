<?php
get_header();

?>


<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/library-hero.jpg') ?>)"></div>
  <div class="page-banner__content container t-center c-white">
    <h1 class="headline headline--large">Welcome!</h1>
    <h2 class="headline headline--medium">We think you&rsquo;ll like it here.</h2>
    <h3 class="headline headline--small">Why don&rsquo;t you check out the <strong>major</strong> you&rsquo;re interested in?</h3>
    <a href="#" class="btn btn--large btn--blue">Find Your Major</a>
  </div>
</div>

<div class="full-width-split group">
  <div class="full-width-split__one">
    <div class="full-width-split__inner">
      <h2 class="headline headline--small-plus t-center">Upcoming Events</h2>
      <?php
      // Lấy hai bài viết mới nhất từ danh mục "events"
      $args = array(
        'post_type' => 'post', // Chỉ lấy bài viết thường, bạn có thể thay đổi thành loại bài viết khác nếu cần
        'posts_per_page' => 2, // Lấy hai bài viết
        'orderby' => 'date', // Sắp xếp theo ngày đăng bài viết
        'order' => 'DESC', // Sắp xếp giảm dần, từ bài viết mới nhất đến cũ nhất
        'category_name' => 'events' // Chỉ lấy bài viết từ danh mục "events"
      );

      $query = new WP_Query($args);

      if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
      ?>

          <div class="event-summary">
            <a class="event-summary__date t-center" href="#">
              <span class="event-summary__month"><?php the_time('M') ?></span>
              <span class="event-summary__day"><?php the_time('d') ?></span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
              <p><?php the_excerpt(); ?> <a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a></p>
            </div>
          </div>
      <?php
        endwhile;
      endif;
      wp_reset_postdata();
      ?>


      <p class="t-center no-margin"><a href="#" class="btn btn--blue">View All Events</a></p>
    </div>
  </div>
  <div class="full-width-split__two">
    <div class="full-width-split__inner">
      <h2 class="headline headline--small-plus t-center">From Our Blogs</h2>
      <?php
      $args = array(
        'post_type' => 'post', // Chỉ lấy bài viết thường, bạn có thể thay đổi thành loại bài viết khác nếu cần
        'posts_per_page' => 2, // Lấy hai bài viết
        'orderby' => 'date', // Sắp xếp theo ngày đăng bài viết
        'order' => 'DESC', // Sắp xếp giảm dần, từ bài viết mới nhất đến cũ nhất
      );

      $query = new WP_Query($args);

      if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
      ?>
          <div class="event-summary">
            <a class="event-summary__date event-summary__date--beige t-center" href="#">
              <span class="event-summary__month"><?php the_time('M') ?></span>
              <span class="event-summary__day"><?php the_time('d') ?></span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
              <p><?php the_excerpt(); ?> <a href="<?php the_permalink(); ?>" class="nu gray">Read more</a></p>
            </div>
          </div>
      <?php
        endwhile;
      endif;
      wp_reset_postdata();
      ?>


      <p class="t-center no-margin"><a href="#" class="btn btn--yellow">View All Blog Posts</a></p>
    </div>
  </div>
</div>


<div class="hero-slider">
  <div data-glide-el="track" class="glide__track">
    <div class="glide__slides">
      <?php
      // Lấy hai bài viết mới nhất từ danh mục "events"
      $args = array(
        'post_type' => 'post', // Chỉ lấy bài viết thường, bạn có thể thay đổi thành loại bài viết khác nếu cần
        'orderby' => 'date', // Sắp xếp theo ngày đăng bài viết
        'order' => 'DESC', // Sắp xếp giảm dần, từ bài viết mới nhất đến cũ nhất
        'category_name' => 'slides' // Chỉ lấy bài viết từ danh mục "events"
      );

      $query = new WP_Query($args);

      if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
      ?>

          <div class="hero-slider__slide" style="background-image: url('<?php the_post_thumbnail_url('large'); ?>')">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center"><?php the_title(); ?></h2>
                <p class="t-center"><?php the_excerpt(); ?></p>
                <p class="t-center no-margin"><a href="<?php the_permalink(); ?>" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
      <?php
        endwhile;
      endif;
      wp_reset_postdata();
      ?>
    </div>
    <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]"></div>
  </div>
</div>


<?php

get_footer();
