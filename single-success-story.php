<?php get_header(); ?>

<section id="jumbotron-type-2" class="pt-60">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 text-center">
        <h1 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
          Success<br />
          Stories
        </h1>
        <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
          Helping your brand reach its full potential.
        </p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 col-lg-5 offset-lg-2 my-auto text-center text-md-start">
        <?php
        $main_text = get_field("main_text");
        $website_url = get_field("website_url");

        if ($main_text): ?>
          <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
            <?php echo esc_html($main_text); ?>
          </h2>
        <?php endif;
        ?>

        <ul class="list-inline">
            <?php if ($website_url): ?>
                <li class="list-inline-item">
                    <a class="btn btn-primary" href="<?php echo esc_url(
                        $website_url
                    ); ?>" target="_blank" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        Visit this case study’s  website
                    </a>
                </li>
            <?php endif; ?>
            <li class="list-inline-item">
                <a class="btn btn-secondary" href="#contact-us" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                    Claim your free consultation
                </a>
            </li>
        </ul>
      </div>

      <div class="col-md-6 col-lg-3 position-relative">
        <?php
        $logo_url = get_field("logo");
        if ($logo_url && $website_url): ?>
          <div id="bg-iphone" class="d-none d-md-block" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
            <a href="<?php echo esc_url($website_url); ?>" target="_blank">
              <img class="img-fluid" src="<?php echo esc_url(
                  $logo_url
              ); ?>" alt="">
            </a>
          </div>
        <?php endif;
        ?>
      </div>
    </div>
  </div>
</section>

<section id="bullet-points" class="bg-dark pt-60">
  <div class="container">
    <div class="row mb-4">
      <div class="col text-center">
        <?php if ($title = get_field("bullet_points_title")): ?>
          <h1 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
            <?php echo esc_html($title); ?>
          </h1>
        <?php endif; ?>
      </div>
    </div>

    <?php if ($bullet_points = get_field("bullet_points")): ?>
      <div class="row mb-4">
        <div class="col-lg-8 offset-lg-2">
          <?php
          $delay = 200;
          for ($i = 1; $i <= 4; $i++):
              $title = $bullet_points["bullet_point_{$i}_title"];
              $text = $bullet_points["bullet_point_{$i}_text"];
              if ($title || $text): ?>
            <div class="row mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="<?php echo esc_attr(
                $delay
            ); ?>">
              <div class="col-3">
                <div class="number"><?php echo esc_html($i); ?></div>
              </div>
              <div class="col-9">
                <?php if ($title): ?>
                  <h4><?php echo esc_html($title); ?></h4>
                <?php endif; ?>
                <?php if ($text): ?>
                  <p><?php echo esc_html($text); ?></p>
                <?php endif; ?>
              </div>
            </div>
          <?php $delay += 100;endif;
          endfor;
          ?>
        </div>
      </div>
    <?php endif; ?>
  </div>

  <?php if ($subtitle = get_field("bullet_points_subtitle")): ?>
    <div class="container">
      <div class="row mb-4">
        <div class="col text-center">
          <h1 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
            <?php echo esc_html($subtitle); ?>
          </h1>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php if ($slider = get_field("slider")): ?>
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <div class="swiper swiperSuccessStoriesInternal" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="200">
            <div class="swiper-wrapper">
              <?php for ($i = 1; $i <= 6; $i++):
                  $image = $slider["image_{$i}"];
                  if ($image): ?>
                <div class="swiper-slide">
                  <img class="img-fluid" src="<?php echo esc_url(
                      $image
                  ); ?>" alt="">
                </div>
              <?php endif;
              endfor; ?>
            </div>
            <div class="swiper-scrollbar"></div>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
</section>

<section id="cta" class="cta-success-story bg-light pb-60">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-10 offset-lg-1 text-center">
                <h1
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >
                    Always move forward. Always evolve.
                    <span class="text-primary">Always innovate.</span>
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <a
                    class="btn btn-secondary"
                    href="#contact-us"
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="200"
                    >Talk to an expert</a
                >
            </div>
        </div>
    </div>
</section>

<section class="bg-light pt-30 pb-60">
  <div class="container">

    <!-- Panel 1 -->
    <?php if ($panel_1 = get_field("panel_1")): ?>
      <div class="row mb-5">
        <div class="col-lg-8 offset-lg-2 text-center">
          <?php if ($panel_1["title"]): ?>
            <h1 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
              <?php echo wp_kses_post($panel_1["title"]); ?>
            </h1>
          <?php endif; ?>
          <?php if ($panel_1["text"]): ?>
            <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
              <?php echo wp_kses_post($panel_1["text"]); ?>
            </p>
          <?php endif; ?>
        </div>
      </div>
    <?php endif; ?>

    <div class="row mb-4">

      <!-- Panel 2 -->
      <?php if ($panel_2 = get_field("panel_2")): ?>
        <div class="col-md-6 mb-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="300">
          <?php if ($panel_2["title"]): ?>
            <h2><?php echo wp_kses_post($panel_2["title"]); ?></h2>
          <?php endif; ?>
          <?php if ($panel_2["text"]): ?>
            <p><?php echo wp_kses_post($panel_2["text"]); ?></p>
          <?php endif; ?>
        </div>
      <?php endif; ?>

      <!-- Panel 3 -->
      <?php if ($panel_3 = get_field("panel_3")): ?>
        <div class="col-md-6 mb-4" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
          <?php if ($panel_3["title"]): ?>
            <h2><?php echo wp_kses_post($panel_3["title"]); ?></h2>
          <?php endif; ?>
          <?php if ($panel_3["text"]): ?>
            <p><?php echo wp_kses_post($panel_3["text"]); ?></p>
          <?php endif; ?>
        </div>
      <?php endif; ?>

      <!-- Panel 4 -->
      <?php if ($panel_4 = get_field("panel_4")): ?>
        <div class="col-md-6 mb-4" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="500">
          <?php if ($panel_4["title"]): ?>
            <h2><?php echo wp_kses_post($panel_4["title"]); ?></h2>
          <?php endif; ?>
          <?php if ($panel_4["text"]): ?>
            <p><?php echo wp_kses_post($panel_4["text"]); ?></p>
          <?php endif; ?>
        </div>
      <?php endif; ?>

      <!-- Panel 5 -->
      <?php if ($panel_5 = get_field("panel_5")): ?>
        <div class="col-md-6 mb-4" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="600">
          <?php if ($panel_5["title"]): ?>
            <h2><?php echo wp_kses_post($panel_5["title"]); ?></h2>
          <?php endif; ?>
          <?php if ($panel_5["text"]): ?>
            <p><?php echo wp_kses_post($panel_5["text"]); ?></p>
          <?php endif; ?>
        </div>
      <?php endif; ?>

    </div>

    <!-- Related Success Stories -->
    <div class="row">
      <?php
      $related_success_stories = new WP_Query([
          "post_type" => "success-story",
          "posts_per_page" => 3,
          "post__not_in" => [get_the_ID()],
          "orderby" => "rand",
          "post_status" => "publish",
      ]);

      $delay = 100;

      if ($related_success_stories->have_posts()):
          while ($related_success_stories->have_posts()):
              $related_success_stories->the_post(); ?>
        <div class="col-md-4 mb-4 text-end" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="<?php echo esc_attr(
            $delay
        ); ?>">
          <a href="<?php the_permalink(); ?>" target="_blank">
            <?php if (has_post_thumbnail()): ?>
              <?php the_post_thumbnail("related-success-story", [
                  "class" => "img-fluid mb-2",
              ]); ?>
            <?php else: ?>
              <img class="img-fluid mb-2" src="<?php echo esc_url(
                  get_template_directory_uri() .
                      "/assets/images/lfp/placeholder.png"
              ); ?>" alt="Placeholder">
            <?php endif; ?>
            <h6><?php the_title(); ?></h6>
          </a>
        </div>
      <?php $delay += 100;
          endwhile;
          wp_reset_postdata();
      endif;
      ?>
    </div>

  </div>
</section>

<?php get_footer(); ?>
