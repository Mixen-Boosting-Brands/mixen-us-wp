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

        <?php if ($website_url): ?>
          <a class="btn btn-primary" href="<?php echo esc_url(
              $website_url
          ); ?>" target="_blank" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
            Explore the website
          </a>
        <?php endif; ?>
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
      <div class="col">
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
        <div class="row mb-5">
            <div class="col-lg-8 offset-lg-2 text-center">
                <h1
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="100"
                >
                    <span class="text-primary"
                        >15 Years of Experience</span
                    >
                    Driving Innovation and Business Growth
                </h1>
                <p
                    data-aos="fade-up"
                    data-aos-duration="1000"
                    data-aos-delay="200"
                >
                    With over 15 years of experience, I bring a rare
                    blend of technical expertise, strategic thinking,
                    and hands-on innovation to every project I take on.
                    As an Engineer in Information Technologies and
                    Communications, with a Master’s in Cybersecurity, my
                    mission has always been clear: to evolve everything
                    around me through the power of cutting-edge
                    technology.
                </p>
            </div>
        </div>
        <div class="row mb-4">
            <div
                class="col-md-6 mb-4"
                data-aos="fade-right"
                data-aos-duration="1000"
                data-aos-delay="300"
            >
                <h2>
                    What We
                    <span class="text-primary">Specialize</span>
                    In
                </h2>
                <p>
                    From startups to industrial giants, I’ve helped
                    transform businesses across industries through:
                </p>
                <ul>
                    <li>Web Development & SaaS Platforms</li>
                    <li>Cybersecurity & Infrastructure Design</li>
                    <li>Mobile & VR App Development</li>
                    <li>3D Systems & Haptic Technologies</li>
                    <li>
                        Digital Transformation for Traditional
                        Industries
                    </li>
                    <li>Business Consulting and Startup Growth</li>
                </ul>
            </div>
            <div
                class="col-md-6 mb-4"
                data-aos="fade-left"
                data-aos-duration="1000"
                data-aos-delay="400"
            >
                <h2>
                    Projects that
                    <span class="text-primary">Made an Impact</span>
                </h2>
                <ul>
                    <li>
                        Kipup — The technological backbone of hundreds
                        of auto repair shops in Mexico.
                    </li>
                    <li>
                        Vortex — A custom-built logistics platform
                        optimizing operations and resource use.
                    </li>
                    <li>
                        Haptic VR Vest — Designed and developed a
                        wearable device for immersive gaming
                        experiences.
                    </li>
                    <li>
                        Dozens of custom solutions deployed across
                        logistics, oil & gas, and manufacturing sectors.
                    </li>
                </ul>
                <p>
                    "Our software helped one client increase team
                    efficiency by over 60%."
                </p>
            </div>
            <div
                class="col-md-6 mb-4"
                data-aos="fade-right"
                data-aos-duration="1000"
                data-aos-delay="500"
            >
                <h2>
                    By the
                    <span class="text-primary">Numbers</span>
                </h2>
                <ul>
                    <li>50+ custom software projects delivered</li>
                    <li>
                        70+ person teams led through high-impact
                        deployments
                    </li>
                    <li>
                        1 of the Top 10 Most Innovative Companies in
                        Mexico (Award recipient)
                    </li>
                    <li>
                        60%+ operational efficiency increases for
                        clients in multiple industries
                    </li>
                </ul>
                <p>
                    "Our software helped one client increase team
                    efficiency by over 60%."
                </p>
            </div>
            <div
                class="col-md-6 mb-4"
                data-aos="fade-left"
                data-aos-duration="1000"
                data-aos-delay="600"
            >
                <h2>
                    More Than a Consultant —
                    <span class="text-primary">A True Partner</span>
                </h2>
                <p>
                    I don’t just build software—I become part of your
                    team. I treat your business like it’s my own, and I
                    don’t leave until the results are clear. Whether
                    through consulting, mentoring, or speaking at
                    industry events, I’m committed to helping businesses
                    evolve, adapt, and lead.
                </p>
            </div>
        </div>
        <div class="row">
            <div
                class="col-md-4 mb-4 text-end"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="100"
            >
                <a href="#" target="_blank">
                    <img
                        class="img-fluid mb-2"
                        src="<?php echo esc_url(
                            get_template_directory_uri()
                        ); ?>/assets/images/success-story/thumb-1@2x.png"
                        alt=""
                    />
                    <h6>IPS</h6>
                </a>
            </div>
            <div
                class="col-md-4 mb-4 text-end"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="200"
            >
                <a href="#" target="_blank">
                    <img
                        class="img-fluid mb-2"
                        src="<?php echo esc_url(
                            get_template_directory_uri()
                        ); ?>/assets/images/success-story/thumb-2@2x.png"
                        alt=""
                    />
                    <h6>All-Star Technologies</h6>
                </a>
            </div>
            <div
                class="col-md-4 mb-4 text-end"
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-delay="300"
            >
                <a href="#" target="_blank">
                    <img
                        class="img-fluid mb-2"
                        src="<?php echo esc_url(
                            get_template_directory_uri()
                        ); ?>/assets/images/success-story/thumb-3@2x.png"
                        alt=""
                    />
                    <h6>Vortex TMS</h6>
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
