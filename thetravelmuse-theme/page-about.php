<?php
/* Template Name: About Template */
get_header();
?>

<div class="travelmuse-logo">
  <a class="logo white" href="/">the travel muse</a>
</div>
<section class="page--header">
  <div class="header--social">
    <a href="https://www.youtube.com/user/NathalieTravelMuse"><i class="fab fa-youtube"></i></a>
    <a href="https://www.instagram.com/thetravelmuse/" alt="Instagram"><i class="fab fa-instagram" style="font-size: 1.3em"></i></a>
    <a href=""><i class="fab fa-twitter"></i></a>
    <a href=""><i class="fab fa-facebook"></i></a>
    <a href=""><i class="far fa-envelope"></i></a>
  </div>
  <div class="page--header-left"><div class="overlay-white"></div></div>
  <div class="page--header-right">
    <div class="page-about--description">
      <h1><?php echo get_the_title(); ?></h1>
      <?php
        // Start the loop
        if(have_posts()) {
          while(have_posts()) {
            the_post();
            the_content();
          }
        }
      ?>
      <button><a href="https://nathaliebasha.com/contact">work with Nathalie</a></button>
    </div>
  </div>
</section>

<section class="page--about-journey">
  <div class="journey--container">
    <div class="about-journey-center-box">
      <div class="journey-item">
        <img class="journey-img" src="https://images.unsplash.com/photo-1542115049-3af45a7e0ff4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" />
        <div class="journey-item-city">seville</div>
        <div class="journey-item-country">spain</div>
      </div>
      <div class="journey-item">
        <img class="journey-img" src="https://images.unsplash.com/photo-1493564738392-d148cfbd6eda?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" />
        <div class="journey-item-city">bordeaux</div>
        <div class="journey-item-country">france</div>
      </div>
      <div class="journey-item">
        <img class="journey-img" src="https://images.unsplash.com/photo-1541694904395-4421d00d03f2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" />
        <div class="journey-item-city">cappadocia </div>
        <div class="journey-item-country">turkey</div>
      </div>
      <div class="journey-item">
        <img class="journey-img" src="https://images.unsplash.com/photo-1523656688-b872eb001b31?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60" />
        <div class="journey-item-city">cartagena </div>
        <div class="journey-item-country">colombia</div>
      </div>
    </div>
    <h1 class="page--title">few of Nathalie's favorite places</h1>
  </div>
</section>


<?php get_footer(); ?>
