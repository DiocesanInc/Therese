<?php

/**
 * Template part for displaying the about on the homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Evoli
 */

$backgroundImage1 = get_field("about_background_image1")["url"];
$backgroundImage2 = get_field("about_background_image2")["url"];
$backgroundImage3 = get_field("about_background_image3")["url"];
$position = get_field("about_content_position");
$header = get_field("about_header");
$content = get_field("about_content");
$button = get_field("about_button");
$newShape = $args['shape'];
?>


<div class="about-container">
    <div class="about-image">
      <img class="img1" src="<?php echo $backgroundImage1; ?>">
      <img class="img2" src="<?php echo $backgroundImage2; ?>">
      <img class="img3" src="<?php echo $backgroundImage3; ?>">
      <?php get_template_part("template-parts/homepage/svgs-rectangle/$newShape");?>
      <?php get_template_part("template-parts/homepage/svgs-rectangle/mini-$newShape");?>
    </div>
    <div class="about-content-wrapper <?php echo $position; ?>">
      <?php if ($header) : ?>
        <div class="container left-to-right">
          <div class="scrolling-text">
            <h1 class="about-faded-header faded-header">
                <?php echo $header; ?>
            </h1>
          </div>
        </div>
      <h1 class="about-header">
          <?php echo $header; ?>
      </h1>
      <?php endif; ?>
      <?php if ($content) : ?>
      <div class="about-content">
          <?php echo $content; ?>
      </div>
      <?php endif; ?>
      <?php if ($button) : ?>
        <a href="<?php echo $button['url']; ?>" class="the-button" target="<?php echo $button['target']; ?>" title="<?php echo $button['title']; ?>">
          <?php echo $button['title']; ?>
        </a>
      <?php endif; ?>
    </div>
</div>
