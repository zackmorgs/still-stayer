<?php get_header(); ?>
<main>
      <?php 
    get_template_part(
      slug: 'template-parts/hero', 
      name: null, 
      args: ['title' => 'Listen']); 
    ?>

</main>
<?php get_footer(); ?>