<?php
$title = $args['title'] ?? 'Default Title';
?>

<header id="hero_main">
    <div class="header-float">
        <a href="/">
            <img id="logo_main"
                src="<?php echo get_template_directory_uri(); ?>/img/still-stayer-logo-no-outline.png"
                alt="<?php bloginfo(show: 'name'); ?>" />
        </a>
        <hr />
        <br />
        <h3><?= $title ?></h3>
        <a onclick="scrollToContent()" class="btn">
            <img src="<?php echo get_template_directory_uri(); ?>/svg/chevron_down.svg" alt="Email Icon" class="icon" />
        </a>
    </div>
</header>