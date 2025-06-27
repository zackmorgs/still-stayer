<?php get_header(); ?>
<main>
  <?php
  get_template_part(
    slug: 'template-parts/hero',
    name: null,
    args: ['title' => 'Merch']
  );
  ?>
  <section id="content_big_cartel" class="content">
    <div class="content-float">
      <p class="text-lg">Check out our merch store for the latest Still Stayer gear!</p>
      <a href="https://stillstayer.bigcartel.com/" class="btn btn-big-cartel" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/svg/big_cartel.svg" alt="Merch Store Linkj" class="icon icon-big-cartel" />
      </a>
    </div>
  </section>
  <section id="content_merch" class="content">
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