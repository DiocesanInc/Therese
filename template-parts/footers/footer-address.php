<?php

/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Evoli
 */

?>

<div class="footer-address">
  <h3>Address</h3>
    <div class="address">
        <a href="<?php echo get_field("address", "options")["url"]; ?>"
            title="<?php echo get_field("address", "options")["title"]; ?>"
            target="<?php echo get_field("address", "options")["target"]; ?>">
            <?php echo get_field("address", "options")["title"]; ?>
        </a>
    </div>
    <h3>Contact Info</h3>
    <div class="footer-contact">

        <?php if (get_field("phone", "options")) : ?>
        <div class="phone">
            Phone: <?php echo phoneLink(get_field("phone", "options"), true, "has-quaternary-background-color-after"); ?>
        </div>
        <?php endif; ?>

        <?php if (get_field("fax", "options")) : ?>
        <div class="fax">
            Fax: <?php the_field("fax", "options"); ?>
        </div>
        <?php endif; ?>

        <?php if (get_field("email", "options")) : ?>
        <div class="email">
            <?php echo emailLink(get_field("email", "options"), get_field("email", "options"), "has-quaternary-background-color-after"); ?>
        </div>
        <?php endif; ?>

    </div>
</div>
