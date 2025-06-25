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
      <!-- <h3>Spotify</h3> -->
      <p>You can find our full discography on Spotify below.</p>
      <a class="btn btn-spotify" href="https://open.spotify.com/artist/0M6zJSeM1XgyIu64Hfrmlm" target="_blank" rel="noopener noreferrer">
        <img class="icon icon-spotify-text w-full" src="<?php echo get_template_directory_uri(); ?>/img/spotify-logo-raster.png" alt="Spotify Link" />
      </a>
    </div>
  </section>
  <section id="content_youtube" class="content">
    <div class="content-float">
        <img id="youtube_logo_text" src="<?php echo get_template_directory_uri(); ?>/svg/youtube-logo-full.svg" alt="YouTube Logo" />
        <p>You can watch our music videos and more on YouTube.</p>
        <a href="https://www.youtube.com/@stillstayer414" class="btn btn-youtube" target="_blank" rel="noopener noreferrer">
          <img src="<?php echo get_template_directory_uri(); ?>/svg/youtube.svg" alt="YouTube Link" class="icon icon-youtube" />
        </a>
    </div>
  </section>
</main>
<?php get_footer(); ?>