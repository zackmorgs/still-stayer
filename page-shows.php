<?php get_header(); ?>
<main>
    <?php
    get_template_part(
        slug: 'template-parts/hero',
        name: null,
        args: ['title' => 'Shows']
    );
    ?>

    <div class="content">
        <h2>Content</h2>
    </div>
</main>
<?php get_footer(); ?>