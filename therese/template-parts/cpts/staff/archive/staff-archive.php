<?php

/**
 * Template part for displaying staff member archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Evoli
 */

$staffGroups = get_terms(array("taxonomy" => "staff-group", 'hide_empty' => false));

$staff = [];

foreach ($staffGroups as $staffGroup) {
    $order = get_field("staff_group_order", "staff-group_" . $staffGroup->term_id);

    $args = array(
        'post_type' => 'staff',
        'posts_per_page' => -1,
        "orderby" => "menu_order title",
        "order" => "ASC",
        "tax_query" => array(
            array(
                "taxonomy" => "staff-group",
                "field" => "slug",
                "terms" => $staffGroup->slug
            )
        )
    );

    $staff[$order] = ["title" => $staffGroup->name, "staffMembers" => get_posts($args)];
}

ksort($staff, SORT_NUMERIC);

get_template_part("/template-parts/headers/page-header", null, array("headline" => "Our Staff", "headerImg" => getDefaultFeaturedImage(true)));

foreach ($staff as $order => $group) : ?>

<div class="<?php echo get_post_type(); ?>-category limit-width">
    <h1 class="<?php echo get_post_type(); ?>-category-title has-primary-color">
        <?php echo $group['title']; ?>
    </h1>
    <div class="<?php echo get_post_type(); ?>-category-members grid-container">
        <?php foreach ($group['staffMembers'] as $post) : setup_postdata($post);
                get_template_part('/template-parts/cpts/staff/single/staff-member');
            endforeach; ?>
    </div>
</div>

<?php
endforeach;?>

<div class="lightbox-overlay"></div>
<div id="staff-lightbox" class="lightbox">
    <div class="lightbox-close"></div>
    <div class="lightbox-image"></div>
    <div class="lightbox-content">
        <h4 class="lightbox-title"></h4>
        <div class="lightbox-position"></div>
        <div class="lightbox-excerpt"></div>
    </div>
</div>
