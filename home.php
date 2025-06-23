<?php get_header(); ?>

<main class="blog-list">
    <?php 
    get_template_part(
      slug: 'template-parts/hero', 
      name: null, 
      args: ['title' => 'Blog']); 
    ?>

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