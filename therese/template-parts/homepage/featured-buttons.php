<?php

/**
 * Partial for the Homepage template's Featured Buttons.
 *
 * @package Celine
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
 */


if(get_field('buttons_or_menu')==1):
if(have_rows('featured_buttons')):?>
<div class="featured-buttons has-tertiary-background-color container has-box-shadow limit-width<?php echo $shape=="circles" ? " rounded" : ""; ?>"
    data-btns="<?php echo count(get_field('featured_buttons')); ?>">
    <div class="featured-buttons-wrapper">
        <?php while (have_rows('featured_buttons')) : the_row();
            get_template_part("template-parts/featured", "button");
        endwhile; ?>
    </div>
</div>
<?php else: endif;?>
<?php else: endif;?>
