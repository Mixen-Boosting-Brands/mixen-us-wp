<?php get_header(); ?>

<section id="industry-experience" class="bg-light pt-60 pb-30">
  <div class="container">
    <div class="row mb-4">
      <div class="col-md-8 col-lg-6 my-auto">
        <h1 class="mb-0" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
          Industry Experience
        </h1>
      </div>
    </div>

    <div class="masonry-grid">
      <?php
      // Setup pagination parameters
      $paged = get_query_var("paged") ? get_query_var("paged") : 1;

      // Query all industry posts, paged, ordered by date descending
      $industry_query = new WP_Query([
          "post_type" => "industry",
          "posts_per_page" => 12, // adjust as needed
          "orderby" => "date",
          "order" => "DESC",
          "post_status" => "publish",
          "paged" => $paged,
      ]);

      // Grid classes will repeat for posts beyond 4 using modulo
      $grid_classes = [
          "col-md-6 col-lg-7",
          "col-md-6 col-lg-5",
          "col-md-6 col-lg-5",
          "col-md-6 col-lg-7",
      ];

      $delay = 200;
      $i = 0;

      if ($industry_query->have_posts()):
          while ($industry_query->have_posts()):

              $industry_query->the_post();
              $industry_id = get_the_ID();

              // Calculate grid class by cycling through $grid_classes array
              $grid_class = $grid_classes[$i % count($grid_classes)];
              ?>
        <div class="grid-item <?php echo esc_attr($grid_class); ?>">
          <div class="card h-100" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="<?php echo esc_attr(
              $delay
          ); ?>">
            <div class="col-12">
              <div class="card-body h-100 d-flex flex-column justify-content-between">

                <?php
                // Store current post object
                $outer_post = $post;

                // Query related success stories linked via ACF relationship field 'related_industries'
                $related_stories = new WP_Query([
                    "post_type" => "success-story",
                    "posts_per_page" => -1,
                    "post_status" => "publish",
                    "meta_query" => [
                        [
                            "key" => "related_industries",
                            "value" => '"' . $industry_id . '"',
                            "compare" => "LIKE",
                        ],
                    ],
                ]);

                if ($related_stories->have_posts()):
                    echo '<ul class="list-inline">';
                    while ($related_stories->have_posts()):
                        $related_stories->the_post(); ?>
                    <li class="list-inline-item">
                      <p class="badge rounded-pill align-self-start">
                        <span class="text-success">&middot;</span>
                        <?php the_title(); ?>
                      </p>
                    </li>
                  <?php
                    endwhile;
                    echo "</ul>";
                endif;

                // Restore outer post object
                $post = $outer_post;
                setup_postdata($post);
                ?>

                <div>
                  <h5 class="card-title"><?php the_title(); ?></h5>
                  <p class="card-text"><?php echo wp_trim_words(
                      get_the_excerpt(),
                      25,
                      "..."
                  ); ?></p>
                </div>
              </div>
            </div>

            <div class="col-12 position-relative overflow-hidden thumb" style="min-height: 200px">
              <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail("thumb-industry", [
                    "class" => "position-absolute w-100 h-100 img-fluid",
                ]); ?>
              <?php else: ?>
                <img src="<?php echo esc_url(
                    get_template_directory_uri() .
                        "/assets/images/lfp/placeholder.png"
                ); ?>" class="position-absolute w-100 h-100 img-fluid" alt="Placeholder">
              <?php endif; ?>
            </div>
          </div>
        </div>
      <?php
      $delay += 100;
      $i++;

          endwhile;
          // Pagination links
          ?>
        <div class="col-12 mt-4 text-center">
          <?php echo paginate_links([
              "total" => $industry_query->max_num_pages,
              "current" => $paged,
              "mid_size" => 2,
              "prev_text" => __("« Prev"),
              "next_text" => __("Next »"),
          ]); ?>
        </div>
      <?php
      else:
           ?>
        <div class="col-12">
          <p>No industry experience entries found.</p>
        </div>
      <?php
      endif;

      wp_reset_postdata();
      ?>
    </div>

  </div>
</section>

<?php get_footer(); ?>
