<?php

/**
 * Template part for displaying the news on the homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Evoli
 */

$news = get_field("news_category");

$position = get_field("news_content_position");
$header = get_field("news_header");
$content = get_field("news_content");
$button = get_field("news_button");
$newShape = $args['shape'];
?>

<?php if ($news) : ?>
<div class="news-container<?php if($newShape == 'lines'): echo ' lines'; else: endif;?>">
    <?php if ($header) : ?>
      <div class="container left-to-right">
        <div class="scrolling-text">
          <h1 class="news-faded-header faded-header">
              <?php echo $header; ?>
          </h1>
        </div>
      </div>
    <?php endif; ?>
    <div class="news-container-wrapper-wrapper">
      <div class="news-container-wrapper equal-height">
        <?php
            $posts = get_posts(array(
                "category" => $news
            ));

            foreach ($posts as $post) :
                $bgImg = has_post_thumbnail($post) ? get_the_post_thumbnail_url($post, "full") : getDefaultFeaturedImage(true);

            ?>

        <div class="post-wrapper">
            <div class="post-content-wrapper">
                <img src='<?= $bgImg;?>'>

                <h2 class="post-heading">
                    <?php echo $post->post_title; ?>
                </h2>

                <div class="post-excerpt">
                    <?php echo $post->post_excerpt !== "" ? $post->post_excerpt : wp_trim_words($post->post_content, 45); ?>
                </div>

                <a href="<?php the_permalink($post->ID); ?>" class="post-read-more" title="Read more">
                    Read More >
                </a>

                <!-- <div class="slider-nav"></div> -->

                <!-- <a href="" class="the-button" title="View all Events">
                    View All
                </a> -->
            </div>

        </div>
        <?php endforeach;
            wp_reset_postdata();
            ?>
      </div>
      <?php if($newShape):?><div class="hidden-mobile"><?php get_template_part("template-parts/homepage/svgs-wavy/$newShape");?></div><?php endif;?>
      <div class="news-content-wrapper-wrapper">
        <div class="news-content-wrapper <?php echo $position; ?>">
          <?php if ($header) : ?>
          <h1 class="news-header">
              <?php echo $header; ?>
          </h1>
          <?php endif; ?>
          <?php if ($content) : ?>
          <div class="news-content">
              <?php echo $content; ?>
          </div>
          <?php endif; ?>
          <?php if ($button) : ?>
            <a href="<?php echo $button['url']; ?>" class="the-button" target="<?php echo $button['target']; ?>" title="<?php echo $button['title']; ?>">
              <?php echo $button['title']; ?>
            </a>
          <?php endif;?>
          <?php if($newShape):?>
            <?php get_template_part("template-parts/homepage/svgs-circle/white-$newShape");?>
            <?php get_template_part("template-parts/homepage/svgs-circle/mini-$newShape");?>
          <?php endif;?>
        </div>
      </div>
    </div>
</div>
<?php endif; ?>
