<?php get_header(); ?>
<main>
  <?php
  get_template_part(
    slug: 'template-parts/hero',
    name: null,
    args: ['title' => 'Listen']
  );
  ?>

  <div class="content">
    
  </div>
</main>
<?php get_footer(); ?>