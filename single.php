<?php
get_header();

// Get the post thumbnail ID
$post_thumbnail_id = get_post_thumbnail_id();

// Get the raw URL of the post thumbnail
$post_thumbnail_url = wp_get_attachment_url($post_thumbnail_id);

// Get the post categories
$categories = get_the_category();
?>

	<section id="jumbotron" style="background: url('<?php echo $post_thumbnail_url; ?>');">
		<div id="overlay"></div>
	</section>

    <section id="body" class="py-60">
        <div class="container">
            <div class="row mb-1 mb-lg-3">
                <div class="col">
					<span class="badge bg-primary rounded-pill mb-2">
						<?php foreach ($categories as $category):
          echo esc_html($category->name);
      endforeach; ?>
					</span>
					<h1 class="titulo">
                        <span class="fs-4"><?php the_title(); ?></span>
                    </h1>
                    <p class="subtitulo">
                        <small>
						<?php
      // Get the author's name
      $author_name = get_the_author_meta("display_name", $post->post_author);

      // Get the post date
      $post_date = get_the_date('j \d\e F, Y');

      // Get the published time
      $published_time = get_the_time("g:i a");

      // Output the post data
      echo "By " .
          $author_name .
          " on " .
          $post_date .
          " at " .
          $published_time;
      ?>
						</small>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col">
					<?php the_content(); ?>

					<?php edit_post_link(); ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
