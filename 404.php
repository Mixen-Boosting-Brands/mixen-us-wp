<?php
get_header();

// Set a fallback image URL for the 404 page jumbotron
$placeholder_url = get_template_directory_uri() . "/assets/images/404/404.jpg";
?>

<section id="jumbotron" class="parallax-window" data-parallax="scroll" data-image-src="<?php echo esc_url(
    $placeholder_url
); ?>">
  <div id="overlay"></div>
</section>

<section id="body" class="py-60">
  <div class="container">
    <div class="row mb-1 mb-lg-3">
      <div class="col-lg-8 offset-lg-2">
        <h1 class="titulo-page">
          <span class="fs-4">Oops — Page Not Found</span>
        </h1>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 offset-lg-2">
        <p>Sorry, the page you’re looking for doesn’t exist or has been moved.</p>
        <a href="<?php echo esc_url(
            home_url()
        ); ?>" class="btn btn-primary mt-3">Go to Homepage</a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
