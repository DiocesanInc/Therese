<?php

/**
 * Template Name: Mass Times
 *
 * The template for displaying the mass times Template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package evoli
 */

get_header();
$newShape = get_field('shape_selector','options');
?>

<div class="content-area" id="primary">
    <main class="site-main page-template-mass-times" id="main">
        <?php get_template_part('template-parts/headers/page-header'); ?>

        <?php if (have_rows("mass_times_days", "options")) : ?>
        <div class="mass-times-container limit-width">
        <?php get_template_part("template-parts/homepage/svgs-wavy/$newShape");?>
            <?php while (have_rows("mass_times_days", "options")) : the_row(); ?>
            <div class="mass-times-section">
                <h3 class="mass-times-title">
                    <?php the_sub_field("day"); ?>
                </h3>
                <?php while (have_rows("mass_times_times", "options")) : the_row(); ?>
                <div class="mass-time">
                    <h5 class="mass-time-day has-primary-color">
                        <?php the_sub_field("mass_times_label"); ?>
                    </h5>
                    <div class="mass-time-time">
                        <?php the_sub_field("mass_times_time"); ?>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endwhile; ?>

        </div>
        <?php endif; ?>
        <div class="limit-width">
            <?php the_content(); ?>
        </div>
    </main>
</div>

<?php get_footer();
