<?php
$title = $args['title'] ?? 'Default Title';
?>

<header id="hero_main" class="masked-gradient">
    <div class="header-float">
        <a href="/">
            <img id="logo_main" src="<?php echo get_template_directory_uri(); ?>/img/still-stayer-logo-no-outline.png"
                alt="<?php bloginfo(show: 'name'); ?>" />
        </a>
        <hr />
        <br />
        <h3><?= $title ?></h3>
        <a onclick="scrollToContent()" class="btn">
            <img src="<?php echo get_template_directory_uri(); ?>/svg/chevron_down.svg" alt="Email Icon" class="icon" />
        </a>
    </div>

    <div id="hero_bg">
        <div class="film-noise">
            <div class="grain"></div>
            <div class="scratches"></div>
            <div class="dust"></div>
            <div class="flicker"></div>
        </div>
        <div class="light-sources">
            <div class="light-beam light-beam-1"></div>
            <div class="light-beam light-beam-2"></div>
            <div class="light-beam light-beam-3"></div>

            <div class="spotlight spotlight-1"></div>
            <div class="spotlight spotlight-2"></div>

            <div class="lens-flare lens-flare-1"></div>
            <div class="lens-flare lens-flare-2"></div>

            <!-- this was too much -->
            <!-- <div class="god-rays"></div> -->
            <div class="ambient-glow"></div>
        </div>
        <div class="vignette"></div>
    </div>

</header>