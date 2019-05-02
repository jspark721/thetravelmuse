<?php get_header();
/*main homepage template*/
?>
<div class="hero--container">
  <div class="hero--box">
    <h1 class="hero-title">
      The Travel Muse
    </h1>
  </div>
  <div class="hero--scroll">
    <p class="uppercase-xsm">scroll</p>
    <a href=""><i class="fas fa-angle-double-down"></i></a>
  </div>
</div>

<section class="about--container">
  <div class="about--left">
    <div class="number--box">
      <h2 class="num">01</h2>
      <div class="number--text">about</div>
    </div>
  </div>
  <div class="about--right">
    <div class="about--top-corner">
      <p>travel, journalism, lifestyle</p>
    </div>
    <div class="about--title">
      <h2>This is Nathalie.</h2>
      <div class="about--title-line"></div>
      <div class="about--desc">
        <?php
          $my_postid = 1;
          $content = get_post($my_postid)->post_content;
          echo $content;
        ?>
      </div>
      <button class="about--btn">learn more <i class="fas fa-angle-double-right"></i></button>
    </div>
  </div>
</section>

<section class="films--container">
  <div class="number--box">
    <h2 class="num">02</h2>
    <div class="number--text">videos</div>
  </div>
  <div class="films--title">
    <h2 class="cursive">Featured Films</h2>
  </div>

  <div class="films--grid">
    <div class="films--video">
      <iframe src="https://player.vimeo.com/video/328775570?title=0&byline=0&portrait=0" width="100%" height="350" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
    </div>
    <div class="films--video">
      <iframe src="https://player.vimeo.com/video/328772558?title=0&byline=0&portrait=0" width="100%" height="350" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
    <div class="films--video">
      <iframe src="https://player.vimeo.com/video/328541502?title=0&byline=0&portrait=0" width="100%" height="350" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
    <div class="films--video">
      <iframe src="https://player.vimeo.com/video/328875516?title=0&byline=0&portrait=0" width="100%" height="350" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
  </div>
  <div class="films--btn"><button class="btn-inverse">more videos <i class="fas fa-angle-double-right"></i></button></div>

</section>
<section class="work--container">
  <div class="work--title">
    <p class="smcap">work</p>
    <h2>the travel muse</h2>
    <div class="work--summary">
      <?php
        $my_postid = 11;
        $content = get_post($my_postid)->post_content;
        echo $content;
      ?>
    </div>
  </div>
  <div class="overlay"></div>
</section>

<section class="services--container">
  <div class="number--box">
    <h2 class="num">03</h2>
    <div class="number--text">services</div>
    <div class="number--box-line"></div>
  </div>
  <div class="services--grid">
    <a href="">
      <div class="services--item">
        <img class="services--item-img" src="https://images.unsplash.com/photo-1535837487710-a191373a20ae?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80" />
        <div class="img-overlay"></div>
        <h3 class="services--item-text">coach</h3>
      </div>
    </a>
    <a href="">
      <div class="services--item">
        <img class="services--item-img" src="https://images.unsplash.com/photo-1501556424050-d4816356b73e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=80" />
        <div class="img-overlay"></div>
        <h3 class="services--item-text">mentor</h3>
      </div>
    </a>
    <a href="">
      <div class="services--item">
        <img class="services--item-img" src="https://images.unsplash.com/photo-1508670102968-a8961dab9fc6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=80" />
        <div class="img-overlay"></div>
        <h3 class="services--item-text">collab</h3>
      </div>
    </a>
  </div>
  <div class="services--button"><button class="btn-inverse">view services</button></div>
</section>


<section class="contact--container">
  <div class="contact--title">
    <h2 class="cursive">work together</h2>
  </div>
  <div class="contact--box">
    <?php
      $my_postid = 15;
      $content = get_post($my_postid)->post_content;
      echo $content;
    ?>
    <div class="contact--line"></div>
    <button class="btn-inverse">get in touch</button>
  </div>
  <div class="overlay bigger"></div>
</section>

<?php get_footer(); ?>
