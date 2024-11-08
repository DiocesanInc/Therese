<?php

/**
 * Template part for displaying the stats on the homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Evoli
 */

?>

<?php if (have_rows("mass_times_days", "options")) : ?>

<div class="mass-times-items banner-items">
    <?php while (have_rows("mass_times_days", "options")) : the_row();

            //check if day has items to show on homepage
            $show = false;
            while (have_rows("mass_times_times", "options")) : the_row();
                if (get_sub_field("show_on_homepage")) :
                    $show = true;
                endif;
            endwhile;
            if ($show) :
        ?>
    <div class="mass-times-item banner-item">

        <div class="mass-times-day banner-item-heading">
            <?php the_sub_field("day"); ?>
        </div>

        <?php while (have_rows("mass_times_times", "options")) : the_row(); ?>

        <?php if (get_sub_field("show_on_homepage")) : ?>

        <div class="banner-item-content">
            <div class="mass-times-item-label">
                <?php the_sub_field("mass_times_label"); ?>
            </div>

            <div class="mass-times-item-time">
                <?php the_sub_field("mass_times_time"); ?>
            </div>
        </div>

        <?php endif; ?>

        <?php endwhile; ?>
    </div>

    <?php endif; ?>


    <?php endwhile; ?>
</div>
<div class="mass-times-link">
    <a href="<?php echo get_field("mass_times_link")["url"]; ?>" class="the-button" title="Full Schedule">
        <?php echo get_field("mass_times_link")["title"]; ?>
    </a>
</div>
<?php endif; ?>