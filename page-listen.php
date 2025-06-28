<?php get_header(); ?>
<main>
  <?php
  get_template_part(
    slug: 'template-parts/hero',
    name: null,
    args: ['title' => 'Listen']
  );
  ?>
  <section id="content_bandcamp" class="content">
    <div class="content-float">
      <a href="https://stillstayer.bandcamp.com/" target="_blank" alt="Bandcamp Discography Link"><img
          id="bandcamp_header" src="<?php echo get_template_directory_uri(); ?>/svg/bandcamp.svg" alt="Bandcamp Logo"
          class="icon" />
      </a>
      <p>We have our latest album, <em>ALL HEART</em>, available for streaming and purchase on Bandcamp. </p>
      <p>You can also find our full discography <a href="https://stillstayer.bandcamp.com/" target="_blank"
          alt="Bandcamp Discography Link">here</a>.</p>
      <iframe style="border: 0; width: 350px; height: 350px;"
        src="https://bandcamp.com/EmbeddedPlayer/album=2931884291/size=large/bgcol=333333/linkcol=0f91ff/minimal=true/transparent=true/"
        seamless><a href="https://stillstayer.bandcamp.com/album/all-heart">ALL HEART by STILL STAYER</a></iframe>
    </div>
  </section>
  <section id="content_spotify" class="content">
    <div class="content-float">
      <!-- <h3>Spotify</h3> -->
      <p>You can find our full discography on Spotify below.</p>
      <a class="btn btn-spotify" href="https://open.spotify.com/artist/0M6zJSeM1XgyIu64Hfrmlm" target="_blank"
        rel="noopener noreferrer">
        <img class="icon icon-spotify-text w-full"
          src="<?php echo get_template_directory_uri(); ?>/img/spotify-logo-raster.png" alt="Spotify Link" />
      </a>
    </div>
  </section>
  <section id="content_youtube" class="content">
    <div class="content-float">
      <a href="https://music.youtube.com/channel/UC3WgkedzWCWxXKWT01wn7MA" target="_blank" alt="YouTube Music">
        <img id="youtube_logo_music" src="<?php echo get_template_directory_uri(); ?>/svg/youtube_music.svg"
          alt="YouTube Logo" />
      </a>
      <p>You can watch our music videos and more on YouTube Music.</p>
      <a href="https://music.youtube.com/channel/UC3WgkedzWCWxXKWT01wn7MA?si=uZJM_x8K4AgcxU-V" class="btn btn-youtube"
        target="_blank" rel="noopener noreferrer">
        <img src="<?php echo get_template_directory_uri(); ?>/svg/play.svg" alt="YouTube Link" class="icon" />
      </a>
    </div>
  </section>
  <section id="content_apple_music" class="content">
    <div class="content-float">
      <a href="https://music.apple.com/us/artist/still-stayer/1448858702" target="_blank" alt="Apple Music Link"
        class="apple-music-link">
        <img id="apple_music_logo" src="<?php echo get_template_directory_uri(); ?>/svg/apple_music.svg"
          alt="Apple Music Logo" />
      </a>
      <p>You can also find us on Apple Music.</p>
      <a href="https://music.apple.com/us/artist/still-stayer/1448858702" class="btn btn-apple-music" target="_blank"
        rel="noopener noreferrer">
        <img src="<?php echo get_template_directory_uri(); ?>/svg/play.svg" alt="Apple Music Link" class="icon" />
      </a>
    </div>
  </section>
  <section id="content_amazon" class="content">
    <div class="content-float">
      <a href="https://music.amazon.com/artists/B0B3X9Z5Y2/still-stayer" target="_blank" alt="Amazon Music Link">
        <img id="amazon_music_logo" src="<?php echo get_template_directory_uri(); ?>/svg/amazon_music.svg"
          alt="Amazon Music Logo" />
      </a>
      <p>We're also available on Amazon Music.</p>
      <a href="https://music.amazon.com/artists/B0B3X9Z5Y2/still-stayer" class="btn btn-amazon-music" target="_blank"
        rel="noopener noreferrer">
        <img src="<?php echo get_template_directory_uri(); ?>/svg/play.svg" alt="Amazon Music Link" class="icon" />
      </a>

    </div>
  </section>
  <section id="content_deezer" class="content">
    <div class="content-float">

      <a href="https://link.deezer.com/s/30k89qMKZrJ8NMz5FDNLX" target="_blank" alt="Deezer">
        <img id="deezer_logo" src="<?php echo get_template_directory_uri(); ?>/svg/deezer.svg" alt="YouTube Logo"
          class="deezer-link " />
      </a>
      <p>We're available to stream on Deezer.</p>
      <a href="https://link.deezer.com/s/30k89qMKZrJ8NMz5FDNLX" class="btn btn-deezer" target="_blank"
        rel="noopener noreferrer">
        <img src="<?php echo get_template_directory_uri(); ?>/svg/play.svg" alt="YouTube Link" class="icon" />
      </a>
    </div>
  </section>
  <section id="content_pandora" class="content">
    <div class="content-float">
      
      <a href="https://www.pandora.com/artist/still-stayer/ARxmq9ZKn36rtbV" target="_blank" alt="Pandora">
        <img id="deezer_logo" src="<?php echo get_template_directory_uri(); ?>/svg/pandora.svg" alt="Pandora Logo"
          class="pandora-link " />
      </a>
      <p>We are on Pandora.</p>
      <a href="https://www.pandora.com/artist/still-stayer/ARxmq9ZKn36rtbV" class="btn btn-pandora" target="_blank"
        rel="noopener noreferrer">
        <img src="<?php echo get_template_directory_uri(); ?>/svg/play.svg" alt="Pandora Link" class="icon" />
      </a>
    </div>
  </section>
</main>
<?php get_footer(); ?>