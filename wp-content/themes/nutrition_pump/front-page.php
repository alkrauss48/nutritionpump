<?php get_header(); ?>
<div id="main">
  <div class="inner">
    <header>
    <?php
      while ( have_posts() ) : the_post();
        the_content();
      endwhile; // End of the loop.
    ?>
    </header>
    <section class="tiles">
      <?php
        $fields = CFS()->get( 'link_blocks' );
        foreach ( $fields as $field ) {
          $link = $field['link'];
          foreach ( $field['color'] as $key => $label ) {
            $color = $key;
          }
      ?>
      <article class="<?php echo $color; ?>">
        <span class="image">
          <img src="images/pic01.jpg" alt="" />
        </span>
        <a href="<?php echo $link['url']; ?>">
          <h2><?php echo $link['text']; ?></h2>
          <div class="content">
            <p><?php echo $field['block_text']; ?></p>
          </div>
        </a>
      </article>
      <?php } ?>
    </section>
  </div>
</div>
<?php get_footer();
