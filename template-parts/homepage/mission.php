<?php

/**
 * Template part for displaying the mission on the homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Evoli
 */

$backgroundImage = get_field("mission_background_image")["url"];
$position = get_field("mission_content_position");
$header = get_field("mission_header");
$headerFaded = get_field("mission_header_faded");
$content = get_field("mission_content");
$button = get_field("mission_button");
$newShape = $args['shape'];
?>


<div class="mission-container<?php if($newShape != 'none'): echo " has-shape"; else: ""; endif;?>">
    <div class="mission-content-wrapper <?php echo $position; ?>">
      <?php if ($headerFaded) : ?>
        <div class="container">
          <div class="scrolling-text">
            <h1 class="mission-faded-header faded-header">
                <?php echo $headerFaded; ?>
            </h1>
          </div>
        </div>
      <?php endif; ?>
      <div class="mission-content-wrap">
      <?php if ($header) : ?>
        <h1 class="mission-header">
            <?php echo $header; ?>
        </h1>
      <?php endif; ?>
        <?php if ($content) : ?>
        <div class="mission-content">
            <?php echo $content; ?>
        </div>
        <?php endif; ?>
        <?php if ($button) : ?>
          <a href="<?php echo $button['url']; ?>" class="the-button" target="<?php echo $button['target']; ?>" title="<?php echo $button['title']; ?>">
            <?php echo $button['title']; ?>
        </a>
      </div>
      <?php endif; ?>
    </div>
    <div class="mission-image">
      <img src="<?php echo $backgroundImage; ?>" class="<?php if($newShape == 'squares'): echo 'squares'; elseif($newShape == 'lines'): echo 'lines';else:endif;?>">
      <?php if($newShape):?>
       <?php get_template_part("template-parts/homepage/svgs-circle/$newShape");?>
       <?php get_template_part("template-parts/homepage/svgs-circle/mini-$newShape");?>
      <?php endif;?>
    </div>
</div>
