<?php
/* main header template*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>The Travel Muse - Nathalie Basha Travel Blogger & Journalist</title>
  <meta name="author" content="Julie Loves Co.">
  <meta name="description" content="The Travel Muse Website">
  <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
  <link rel="shortcut icon" href="favicon.ico" type="image/favicon.ico">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <?php wp_head(); ?>
</head>

<body <?php body_class();?>>
  <header>
    <div class="navbar--container sticky">
      <div class="navbar--title"><h4>navigation</h4></div>
      <div class="navbar--icon"><i class="fas fa-bars"></i></div>
    </div>
    <div class="nav--open close sticky">
      <div class="nav--open-icon"><i class="fas fa-times"></i></div>
      <div class="nav--open-title">explore</div>
        <?php
          wp_nav_menu( $arg = array (
            'menu_class' => 'nav--open-menu',
            'theme_location' => 'primary'
          ));
         ?>
    </div>

    <div class="header--social">
      <a href="https://www.youtube.com/user/NathalieTravelMuse"><i class="fab fa-youtube"></i></a>
      <a href="https://www.instagram.com/thetravelmuse/" alt="Instagram"><i class="fab fa-instagram" style="font-size: 1.3em"></i></a>
      <a href=""><i class="fab fa-twitter"></i></a>
      <a href=""><i class="fab fa-facebook"></i></a>
      <a href=""><i class="far fa-envelope"></i></a>
    </div>
  </header>
