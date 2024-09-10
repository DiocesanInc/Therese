<?php

/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Evoli
 */

?>

<div class="footer-content">
  <?php if(get_field("footer_title", "options") && get_field("footer_title_or_logo", "options")==1):?>
    <h3><?php echo get_field("footer_title", "options"); ?></h3>
  <?php elseif(get_field("footer_logo", "options") && get_field("footer_title_or_logo", "options")==0):?>
    <img src="<?php echo get_field("footer_logo", "options")['url'];?>">
  <?php endif; ?>
  <?php echo get_field("footer_content", "options"); ?>
</div>
