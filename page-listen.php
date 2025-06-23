<?php get_header(); ?>
<main>
    <header id="header_main">
        <div class="header-float">
            <a href="/">
                <img id="logo_main"
                    src="<?php echo get_template_directory_uri(); ?>/img/LOGO REVISED 2023 WHITE SHADDOW.png"
                    alt="<?php bloginfo(show: 'name'); ?>" />
            </a>

            <hr />
            <br />
            <h3>Listen</h3>
            <a onclick="" class="btn">
                <img src="<?php echo get_template_directory_uri(); ?>/svg/chevron_down.svg" alt="Email Icon"
                    class="icon" />
            </a>
        </div>
    </header>

</main>
<?php get_footer(); ?>