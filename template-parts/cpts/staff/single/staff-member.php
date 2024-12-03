<?php

/**
 * Template part for displaying staff member archive
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Evoli
 */


$staffImage = has_post_thumbnail() ? get_the_post_thumbnail_url() : getField(get_template_directory_uri() . "/assets/img/Blank_Avatar.png", "options", true, get_template_directory_uri() . "/assets/img/150_X_150.png");
$shape = get_field('shape_selector','options');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="entry-content staff-member grid-selector<?php echo $shape=="circles" ? " rounded" : ""; ?>">
      <div class="card-half-L">
        <img class="staff-member-image" src="<?php echo $staffImage; ?>;" />
      </div>
      <div class="card-half-R">
        <div class="staff-member-info">
            <div class="staff-member-title-wrapper">
                <?php the_title("<h3 class='staff-member-title'>", "</h3>"); ?>

                <h5 class="staff-member-position">
                    <?php the_field("position"); ?>
                </h5>
            </div>

            <div class="staff-member-contact-wrapper">
                <?php if (get_field("phone")) : ?>
                <a href="tel:<?php the_field("phone"); ?>" class="staff-member-email">
                    <?php the_field("phone"); ?>
                </a>
                <?php endif; ?>
                <?php if (get_field("email")) : ?>
                <a href="mailto:<?php the_field("email"); ?>" class="staff-member-email">
                    Email
                </a>
                <?php endif; ?>

            </div>
            <?php //the_content();?>
            <div class="staff-member-bio-wrapper">
              <a data-excerpt="<?php echo htmlspecialchars(get_the_content()); ?>"
                data-title="<?php echo htmlspecialchars(get_the_title()) ?>"
                data-image="<?php the_post_thumbnail_url(); ?>"
                data-position="<?php the_field("position"); ?>"
                class="staff-member-bio has-primary-color has-primary-border-color has-transparent-background-color"
                title="Read About <?php echo get_the_title() ? htmlspecialchars(get_the_title()) : 'Me'; ?>">
                Read More >
              </a>
            </div>
        </div>
      </div>
    </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
