<?php

/**
 * Partial for the navbar.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package celine
 */
?>

<nav id="site-navigation" class="main-navigation
  <?if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),"iphone")) {
       echo(' iphoneMenu');
    }else{
       echo('');
    }
  ?>">
  <?php $name = 'sticky-menu'; $menu = wp_get_nav_menu_object( $name );
  if(get_field('buttons_or_menu')==0):?>
    <div class="<?php echo $menu ? 'homeStickyButtons' : ''?>">
      <?php
      wp_nav_menu(
          array(
              'theme_location' => 'sticky',
              'menu_id'        => 'sticky',
          )
      );
      ?>
    </div>
  <?php else: endif;?>
  <?php
  wp_nav_menu(
      array(
          'theme_location' => 'menu-1',
          'menu_id'        => 'primary-menu',
      )
  );
  ?>
</nav><!-- #site-navigation -->
