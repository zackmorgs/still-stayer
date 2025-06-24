<?php get_header(); ?>
<main>
      <?php 
    get_template_part(
      slug: 'template-parts/hero', 
      name: null, 
      args: ['title' => 'Merch']); 
    ?>
    <section class="content">
        <div class="content-float">
          <h2>Content</h2>
        </div>
    </section>
</main>
<?php get_footer(); ?>