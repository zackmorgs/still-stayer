<?php get_header(); ?>
<main>
  <header id="header_main">
    <div class="header-float">
      <img id="logo_main" src="<?php echo get_template_directory_uri(); ?>/img/LOGO REVISED 2023 WHITE SHADDOW.png"
        alt="<?php bloginfo(show: 'name'); ?>" />
      <!-- <h1><?php bloginfo(show: 'name'); ?></h1> -->
      <!-- <p><?php bloginfo(show: 'description'); ?></p> -->
       <hr/>
       <br/>
      <nav id="nav_main">
        <ul>
          <li>
            <a href="/listen">Listen</a>
          </li>
          <li>
            <a href="/shows">Shows</a>
          </li>
          <li>
            <a href="/merch">Merch</a>
          </li>
          <li>
            <a href="/gallery">Gallery</a>
          </li>
          <li>
            <a href="/blog">Blog</a>
          </li>
          <li>
            <a href="/contact">Contact</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>

</main>
<?php get_footer(); ?>