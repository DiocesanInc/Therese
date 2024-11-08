<?php

/**
 * The template for displaying a single ministry group.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package celine
 */

$staffMembers = get_field("contacts");
$thumbnail = has_post_thumbnail() ? get_the_post_thumbnail_url() : get_field("default_featured_image", "options");
$shape = get_field('shape_selector','options');
?>
<div class="grid-selector<?php echo $shape=="circles" ? " rounded" : ""; ?>">
  <div class="card-half-L">
    <a href="<?php the_permalink(); ?>" class="card-thumb" title="<?php the_title(); ?>">
      <img class="teaser-img" src="<?php echo $thumbnail; ?>" />
    </a>
  </div>
  <div class="card-half-R">
    <!-- <div class="teaser-content-wrapper"> -->
        <h3 class="card-name"><?php the_title() ?></h3>
        <!-- <div class="teaser-content"> -->
            <div class="contact-persons">
                <?php foreach ($staffMembers as $staffMember) :
                    $name = $staffMember["is_staff"] ? $staffMember["contact"]->post_title : $staffMember["contact_name"];
                    $email = $staffMember["is_staff"] ? get_field("email", $staffMember["contact"]->ID) : $staffMember["contact_email"];
                    $phone = $staffMember["is_staff"] ? get_field("phone", $staffMember["contact"]->ID) : $staffMember["contact_phone_number"];
                ?>
                <div class="contact-person">
                    <p class="contact-person-name">
                        <?php echo $name; ?>
                    </p>

                    <?php if ($phone !== "") : ?>
                    <p class="contact-person-phone">
                        <a href="<?php echo phoneLink($phone); ?>"
                            class="has-special-hover has-primary-background-color-before">
                            <!-- <i class="fa fa-phone"></i> -->
                            <?php echo $phone; ?>
                        </a>
                    </p>
                    <?php endif; ?>

                    <?php if (get_field("has_link", $staffMember["contact"]->ID) && $link = get_field("link", $staffMember["contact"]->ID)) : ?>
                    <p>
                        <a class="has-primary-background-color-before has-special-hover"
                            href="<?php $link["url"]; ?>"><?php echo $link["title"]; ?></a>
                    </p>
                    <?php elseif ($email !== "") : ?>
                    <p class="contact-person-email">
                        <a href="mailto: <?php echo $email; ?>"
                            class="has-special-hover has-primary-background-color-before">
                            <!-- <i class="fa fa-envelope"></i> -->
                            <?php echo $email; ?>
                        </a>
                    </p>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="card-text">
                <?php the_excerpt() ?>
            </div>
        <!-- </div> -->
        <!-- <div class="links-container">
            <a href="<?php the_permalink() ?>" class="the-button" target="" title="<?php the_title(); ?>"
                tabindex="0">Read More
            </a>
        </div> -->
    <!-- </div> -->
  </div>
</div>
