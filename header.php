<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ghastly Grinds</title>

    <!-- CSS -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <?php wp_head(); ?>
  </head>
  <body>

    <div class="header">
      <div class="content">
        <h1 class="logo">Ghastly Grinds</h1>
        <?php wp_nav_menu( array('menu' => 'main', 'container' => false) ) ?>
      </div>
    </div>
