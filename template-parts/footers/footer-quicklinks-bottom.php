<?php

/**
 * The template for displaying quicklinks at the bottom of the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Evoli
 */

?>

<div class="quicklinks-bottom-container">
  <h3>Quick Links</h3>
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'quicklinks',
            'menu_id'        => 'quicklinks',
        )
    );
    ?>

</div>
