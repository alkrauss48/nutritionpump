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
      <article class="style10">
        <span class="image">
          <img src="images/pic01.jpg" alt="" />
        </span>
        <a href="/about">
          <h2>About</h2>
          <div class="content">
            <p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
          </div>
        </a>
      </article>
      <article class="style8">
        <span class="image">
          <img src="images/pic02.jpg" alt="" />
        </span>
        <a href="/services">
          <h2>Services</h2>
          <div class="content">
            <p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
          </div>
        </a>
      </article>
      <article class="style7">
        <span class="image">
          <img src="images/pic03.jpg" alt="" />
        </span>
        <a href="/blog">
          <h2>Blog</h2>
          <div class="content">
            <p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
          </div>
        </a>
      </article>
    </section>
  </div>
</div>
<?php get_footer();
