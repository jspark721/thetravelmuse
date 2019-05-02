
<?php
/* Template Name: Videos Template */
get_header();
?>

<div class="travelmuse-logo">
  <a class="logo white" href="/">the travel muse</a>
</div>
<section class="page--contact videos-header">
  <div class="overlay-absolute"></div>
  <div class="contact--desc">
    <h2><?php echo get_the_title(); ?></h2>
    <div class="caps">
      <?php
        $my_postid = 45;
        $content = get_post($my_postid)->post_content;
        echo $content;
      ?>
    </div>
    <p class="caps-white">visit nathalie's channels</p>
    <br>
    <p class="caps"><a href="https://www.youtube.com/user/NathalieTravelMuse">youtube</a> | <a href="https://vimeo.com/user21197586">vimeo</a> </p>
    <br>
  </div>
  <div class="services--line"></div>
  <br>
  <a href=""><i class="fas fa-angle-double-down white"></i></a>
</section>
<section class="videos-container">
  <?php
    // Start the loop
    if(have_posts()) {
      while(have_posts()) {
        the_post();
        the_content();
      }
    }
  ?>
</section>

<?php get_footer(); ?>
