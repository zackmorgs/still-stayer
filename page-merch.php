<?php get_header(); ?>
<main>
      <?php 
    get_template_part(
      slug: 'template-parts/hero', 
      name: null, 
      args: ['title' => 'Merch']); 
    ?>

</main>
<?php get_footer(); ?>