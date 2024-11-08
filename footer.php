<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Evoli
 */

$newShape = get_field('shape_selector','options');
?>
<footer id="colophon" class="site-footer">

    <?php get_template_part("template-parts/footers/footer"); ?>
    <div class="footer-shapes">
      <div class="desktopShapes"><?php get_template_part("template-parts/homepage/svgs-long-rectangle/$newShape");?></div>
      <div class="mobileShapes"><?php get_template_part("template-parts/homepage/svgs-long-rectangle/mini-$newShape");?></div>
    </div>
    <?php get_template_part("template-parts/footers/site-info"); ?>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>

</html>
