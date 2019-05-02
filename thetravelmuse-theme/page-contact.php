
<?php
/* Template Name: Contact Template */
get_header();
?>

<div class="travelmuse-logo">
  <a class="logo white" href="/">the travel muse</a>
</div>
<section class="page--contact">
  <div class="contact--desc">
    <h2>Get in Touch</h2>
    <p>Nathalie would love to chat with you! Please fill out the form below or you can email directly at:</p>
    <h4>nathaliebasha@yahoo.com</h4>
  </div>
  <div class="services--line"></div>
</section>
<div class="cursive-contact"><h3>contact form</h3></div>
<div class="contact--container less-height">
  <?php
    // Start the loop
    if(have_posts()) {
      while(have_posts()) {
        the_post();
        the_content();
      }
    }
  ?>
</div>


<?php get_footer(); ?>
