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
      <h3>travel, journalism, lifestyle</h3>
    </div>
    <div class="about--title">
      <h2>This is Nathalie.</h2>
      <div class="about--title-line"></div>
      <div class="about--desc">
        <div class="about--bio">
          <?php
            $my_postid = 1;
            $content = get_post($my_postid)->post_content;
            echo $content;
          ?>
        </div>
      </div>
      <button class="about--btn">learn more about me <i class="fas fa-angle-double-right"></i></button>
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
      <iframe width="100%" height="350" src="https://www.youtube.com/embed/vL9aOWfKZtk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="films--video">
      <iframe width="100%" height="350" src="https://www.youtube.com/embed/6uZjux0g-XE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="films--video">
      <iframe width="100%" height="350" src="https://www.youtube.com/embed/wCU7S5v-3TY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="films--video">
      <iframe width="100%" height="350" src="https://www.youtube.com/embed/cJ6uoyPAMKY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>
  <div class="films--btn"><button class="btn-inverse">more videos <i class="fas fa-angle-double-right"></i></button></div>

</section>
<section class="work--container">
  <div class="work--title">
    <p class="work--smcap">my work</p>
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
</section>


<section class="contact--container">
  <div class="contact--title">
    <h2 class="cursive">work with me</h2>
  </div>
  <div class="contact--box">
    <p class="contact--text">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs.</p>
    <div class="contact--line"></div>
    <button class="btn-inverse">get in touch</button>
  </div>
  <div class="overlay bigger"></div>
</section>

<?php get_footer(); ?>
