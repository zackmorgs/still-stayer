<?php get_header(); ?>
<main>
      <?php 
    get_template_part(
      slug: 'template-parts/hero', 
      name: null, 
      args: ['title' => 'Gallery']); 
    ?>
    <section class="content">
      <div class="content-float">
        <?php
        if (have_posts()):
            while (have_posts()):
                the_post();
                the_content(); // This is the important line!
            endwhile;
        endif;
        ?>
      </div>
    </section>
</main>
<?php get_footer(); ?>