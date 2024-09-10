<?php

/**
 * Template part for displaying the calendar on the homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Evoli
 */

 $newShape = $args['shape'];
?>

<?php if (get_field("calendar")) : ?>
<div class="calendar-container limit-width">
    <?php if (get_field("calendar_heading")) : ?>
    <h1 class="calendar-heading">
        <?php the_field("calendar_heading"); ?>
    </h1>
    <?php endif; ?>
    <?php if (get_field("calendar_link")) : ?>
    <div class="view-all-link-wrapper">
        <a href="<?php echo get_field("calendar_link")["url"]; ?>">
            <?php echo get_field("calendar_link")["title"]; ?>
        </a>
    </div>
    <?php endif; ?>
    <div class="calendar-inner">
        <?php echo get_field("calendar"); ?>
        <div class="calendar-weekday-slick"></div>
        <div class="calendar-event-slick"></div>
    </div>
    <?php if($newShape):?>
      <?php get_template_part("template-parts/homepage/svgs-circle/$newShape");?>
      <?php get_template_part("template-parts/homepage/svgs-circle/mini-$newShape");?>
    <?php endif;?>
</div>
<?php endif; ?>
