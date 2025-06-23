<?php get_header(); ?>

<main class="blog-list">
  <header id="header_main">
    <div class="header-float">
      <a href="/">
        <img id="logo_main" src="<?php echo get_template_directory_uri(); ?>/img/LOGO REVISED 2023 WHITE SHADDOW.png"
          alt="<?php bloginfo(show: 'name'); ?>" />
      </a>

      <hr />
      <br />
      <br />
      <h1>Blog</h1>
      <a onclick="" class="btn">
        <img src="<?php echo get_template_directory_uri(); ?>/svg/chevron_down.svg" alt="Email Icon" class="icon" />
      </a>
    </div>
  </header>


  <?php if (have_posts()):
    while (have_posts()):
      the_post(); ?>
      <article>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p><?php the_excerpt(); ?></p>
      </article>
    <?php endwhile; else: ?>
    <p>No posts found.</p>
  <?php endif; ?>
</main>
<?php get_footer(); ?>