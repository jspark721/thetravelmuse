
<?php
/* Template Name: Videos Page Template */
get_header();
?>


<h1><center><?php echo get_the_title(); ?></center></h1>

<center>
<?php
  // Start the loop
  if(have_posts()) {
    while(have_posts()) {
      the_post();
      the_content();
    }
  }
?>
</center>

<?php get_footer(); ?>
