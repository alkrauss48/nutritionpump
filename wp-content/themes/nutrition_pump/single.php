<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package nutrition_pump
 */

get_header(); ?>
<div id="main">
  <div class="inner">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
    <h1><?php the_title(); ?></h1>

    <?php
    while ( have_posts() ) : the_post();
      the_content();
    endwhile; // End of the loop.
    ?>

		</main><!-- #main -->
	</div><!-- #primary -->

  </div>
</div>
<?php get_footer(); ?>
