<?php

/**
 * Template Name: Contact Us
 *
 * The template for displaying the Contact Us Template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package celine
 */

get_header();
?>

<div class="content-area" id="primary">
    <main class="site-main" id="main">
        <?php get_template_part('template-parts/headers/page-header'); ?>
        <div class="the-content limit-width">
            <?php the_content(); ?>
            <?php echo get_field("google_maps_iframe", "options"); ?>
        </div>
    </main>
</div>

<?php get_footer();