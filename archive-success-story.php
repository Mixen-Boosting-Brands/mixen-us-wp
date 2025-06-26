<?php get_header(); ?>

<section id="success-stories-archive" class="bg-light pt-100 pb-30">
  <div class="container">
    <div class="row mb-4">
      <div class="col-12 text-center">
        <h1 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
          Success Stories
        </h1>
        <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
          Discover real results from real clients.
        </p>
      </div>
    </div>

    <div class="row g-4">
      <?php if (have_posts()):
          $delay = 100;
          while (have_posts()):
              the_post(); ?>

        <div class="col-md-6 col-lg-4">
          <div class="card h-100" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="<?php echo esc_attr(
              $delay
          ); ?>">
            <a href="<?php the_permalink(); ?>">
              <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail("thumb-success-story", [
                    "class" => "card-img-top img-fluid",
                    "alt" => get_the_title(),
                ]); ?>
              <?php else: ?>
                <img src="<?php echo esc_url(
                    get_template_directory_uri() .
                        "/assets/images/lfp/placeholder.png"
                ); ?>" class="card-img-top img-fluid" alt="Placeholder">
              <?php endif; ?>
            </a>

            <div class="card-body d-flex flex-column justify-content-between">
              <h5 class="card-title mt-4"><?php the_title(); ?></h5>
              <p class="card-text"><?php echo wp_trim_words(
                  get_the_excerpt(),
                  25,
                  "..."
              ); ?></p>
              <a href="<?php the_permalink(); ?>" class="btn btn-secondary mt-3">Read Story</a>
            </div>
          </div>
        </div>

        <?php $delay += 100;
          endwhile;
      else:
           ?>
        <div class="col-12">
          <p>No success stories found.</p>
        </div>
      <?php
      endif; ?>
    </div>

    <div class="row mt-5">
      <div class="col text-center">
        <?php the_posts_pagination([
            "mid_size" => 2,
            "prev_text" => __("« Prev", "yourtheme"),
            "next_text" => __("Next »", "yourtheme"),
        ]); ?>
      </div>
    </div>

  </div>
</section>

<?php get_footer(); ?>
