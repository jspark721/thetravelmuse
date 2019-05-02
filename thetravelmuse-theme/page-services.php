<?php
/* Template Name: Services Template */
get_header();
?>
<div class="travelmuse-logo">
  <a class="logo white" href="/">the travel muse</a>
</div>
<section class="hero--container">
  <div class="overlay-blue"></div>
  <div class="page--services-container">
    <p class="smcap">hi there!</p>
    <?php
      // Start the loop
      if(have_posts()) {
        while(have_posts()) {
          the_post();
          the_content();
        }
      }
    ?>
    <a href="https://nathaliebasha.com/contact"><button class="hover-white">Work with Nathalie</button></a>
  </div>
</section>


<?php get_footer(); ?>
