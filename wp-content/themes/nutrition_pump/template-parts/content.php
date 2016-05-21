<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nutrition_pump
 */

?>

      <article class="style10">
        <span class="image">
          <img src="/images/pic01.jpg" alt="" />
        </span>
        <a href="<?php the_permalink(); ?>">
          <?php the_title( '<h2>', '</h2>' );  ?>
          <div class="content">
            <p><?php echo wp_trim_words(get_the_content(), 12); ?></p>
          </div>
        </a>
      </article>
