<!DOCTYPE HTML>
<!--
  Phantom by HTML5 UP
  html5up.net | @n33co
  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html <?php language_attributes(); ?>>
  <head>
    <title>Nutrition Pump</title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="/assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="/assets/css/main.css" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!--[if lte IE 9]><link rel="stylesheet" href="/assets/css/ie9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="/assets/css/ie8.css" /><![endif]-->
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <!-- Wrapper -->
    <div id="wrapper">

      <!-- Header -->
      <header id="header">
        <div class="inner">

          <!-- Logo -->
          <a href="index.html" class="logo">
            <span class="symbol"><img src="/images/logo.svg" alt=""
              /></span><span class="title">Nutrition Pump</span>
          </a>

          <!-- Nav -->
          <nav>
            <ul>
              <li><a href="#menu">Menu</a></li>
            </ul>
          </nav>

        </div>
      </header>

      <!-- Menu -->
      <nav id="menu">
        <h2>Menu</h2>
        <?php wp_nav_menu(array(
          'container' => false
        ));?>
      </nav>
