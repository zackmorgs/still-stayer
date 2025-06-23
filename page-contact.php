<?php get_header(); ?>
<main>
  <?php 
    get_template_part(
      slug: 'template-parts/hero', 
      name: null, 
      args: ['title' => 'Contact']); 
    ?>

</main>
<?php get_footer(); ?>