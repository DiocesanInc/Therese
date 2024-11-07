<?php

/**
 * Partial for the Homepage template's parish.
 *
 * @package Celine
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

 $newShape = $args['shape'];
 ?>
 <div class="parish-cluster">
    <?php if(get_field('parish_scroll_title')):?> 
    <h1 class="parish-scroll-title">
        <?php echo get_field('parish_scroll_title');?>
    </h1>
    <?php endif;?>
    <?php if (have_rows('parish_buttons')&&(get_field('cluster_style') == 'buttons')) : ?>
        <div class="parishBtns" data-btns="<?php echo count(get_field('parish_buttons')); ?>">
            <div class="parishButtons">
                <?php while (have_rows('parish_buttons')) : the_row();
                    get_template_part("template-parts/homepage/parish", "button");
                endwhile; ?>
            </div>
        </div>
        <?php if($newShape):?>
            <?php get_template_part("template-parts/homepage/svgs-vert-long-rectangle/$newShape");?>
            <?php get_template_part("template-parts/homepage/svgs-rectangle/mini-$newShape");?>
        <?php endif;?>
    <?php elseif(have_rows('parish_carousel')&&(get_field('cluster_style') == 'carousel')) : 
        get_template_part("template-parts/homepage/parish", "carousel");?>
        <?php if($newShape):?>
            <?php get_template_part("template-parts/homepage/svgs-circle/$newShape");?>
            <?php get_template_part("template-parts/homepage/svgs-circle/mini-$newShape");?>
        <?php endif;?>
    <?php endif;?>
 </div>
 
