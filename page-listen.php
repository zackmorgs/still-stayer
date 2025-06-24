<?php get_header(); ?>
<main>
  <?php
  get_template_part(
    slug: 'template-parts/hero',
    name: null,
    args: ['title' => 'Listen']
  );
  ?>

  <section id="content_spotify" class="content">
    <div class="content-float">
      <h3>Spotify</h3>
      <p>You can find our discography on Spotify below.</p>
      <a class="btn" href="https://open.spotify.com/artist/0M6zJSeM1XgyIu64Hfrmlm">
        <img class="icon icon-spotify-text w-full" src="<?php echo get_template_directory_uri(); ?>/img/spotify-logo-raster.png" alt="Spotify Link" />
      </a>
    </div>
  </section>
</main>
<?php get_footer(); ?>