<?php get_header(); ?>
<main>
    <header id="header_main">
        <div class="header-float">
            <img id="logo_main"
                src="<?php echo get_template_directory_uri(); ?>/img/LOGO REVISED 2023 WHITE SHADDOW.png"
                alt="<?php bloginfo(show: 'name'); ?>" />

            <hr />
            <br />
            <br />
            <a href="mailto:Stillstayer@gmail.com" class="btn">
                <img src="<?php echo get_template_directory_uri(); ?>/svg/mail.svg" alt="Email Icon" class="icon" />
                <span>Email Us</span>
            </a>
        </div>
    </header>

</main>
<?php get_footer(); ?>