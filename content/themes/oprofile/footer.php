</main>

    <?php if (get_theme_mod('oprofile_footer_active')) : ?>

      <footer class="footer" id="footer" style="background-color:<?php echo get_theme_mod('oprofile_footer_bgcolor'); ?>">

      <?php get_template_part('template-parts/footer/contact-form'); ?>
      <?php get_template_part('template-parts/footer/contact-info'); ?>

      </footer>

    <?php endif; ?>

  </div>

  <div class="menu">
    <a href="" class="ui-button close-menu">
      <i class="fa fa-close" aria-hidden="true"></i>
    </a>
    <!-- <nav class="main-nav">
      <ul>
        <li class="main-nav__item">
          <a href="#">Homepage</a>
        </li>
        <li class="main-nav__item">
          <a href="#">Blog</a>
        </li>
        <li class="main-nav__item">
          <a href="#">Projets</a>
        </li>
        <li class="main-nav__item">
          <a href="#">Exemple</a>
        </li>
        <li class="main-nav__item">
          <a href="#">Contact</a>
        </li>
      </ul>

    </nav> -->

    <?php

    $menu = wp_nav_menu([
      'theme_location' => 'main-menu',
      'container' => 'nav',
      'container_class' => 'main-nav',
      'echo' => false
    ]);

    // <nav class="main-nav"><ul id="menu-menu-1" class="menu"><li id="menu-item-5" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-5"><a href="http://localhost/OCLOCK/PROMOS/AA/SPE_WORDPRESS/E10/wp-atelier-oprofile-LorisOclock/" aria-current="page">Accueil</a></li>
    // <li id="menu-item-6" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6"><a href="http://localhost/OCLOCK/PROMOS/AA/SPE_WORDPRESS/E10/wp-atelier-oprofile-LorisOclock/page-d-exemple/">Page d’exemple</a></li>
    // <li id="menu-item-22" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-22"><a href="http://localhost/OCLOCK/PROMOS/AA/SPE_WORDPRESS/E10/wp-atelier-oprofile-LorisOclock/2020/03/16/competence-2/">Compétence 2</a></li>
    // <li id="menu-item-23" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-23"><a href="http://localhost/OCLOCK/PROMOS/AA/SPE_WORDPRESS/E10/wp-atelier-oprofile-LorisOclock/2020/03/16/article-3/">Article 3</a></li>
    // <li id="menu-item-24" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-24"><a href="http://localhost/OCLOCK/PROMOS/AA/SPE_WORDPRESS/E10/wp-atelier-oprofile-LorisOclock/2020/03/16/article-2/">Article 2</a></li>
    // </ul></nav>

    $menu = str_replace(['menu-item', 'class="menu"'], ['main-nav__item', ''], $menu);

    echo $menu;

    ?>


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
  </div>
  <?php wp_footer(); ?>
</body>
</html>