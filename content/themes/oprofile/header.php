<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body>
  <div class="wrapper">
    <header class="header">
      <div class="logo">
        <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
      </div>
      <div class="social-nav">
        <ul>
          <li>
            <a href="#">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-google" aria-hidden="true"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-github" aria-hidden="true"></i>
            </a>
          </li>
        </ul>
      </div>
      <a href="#" class="ui-button open-menu">
        <i class="fa fa-bars" aria-hidden="true"></i>
      </a>
    </header>
    <main class="main">