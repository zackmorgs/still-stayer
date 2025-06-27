<?php get_header(); ?>
<main>
  <?php
  get_template_part(
    slug: 'template-parts/hero',
    name: null,
    args: ['title' => 'Contact']
  );
  ?>
  <section id="content_contact" class="content">
    <div class="content-float">
      <h2>Email Us:</h2>
      <p>For all inquries, please shoot us an email!</p>
      <a href="mailto:stillstayer@gmail.com" >
        stillstayer@gmail.com
      </a>
      <br/>
      <br/>
      <a href="mailto:stillstayer@gmail.com" class="btn btn-email">
        <img src="<?php echo get_template_directory_uri(); ?>/svg/mail.svg" alt="Email Icon" class="icon-mail" />
      </a>
    </div>
  </section>
</main>
<?php get_footer(); ?>