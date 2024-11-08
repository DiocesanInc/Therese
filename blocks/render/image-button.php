<?php
/**
 * Block Name: Image Banner
 *
 * This is the template that displays the testimonial block.
 */

// create id attribute for specific styling
$id = 'image-buttons-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

$shape = get_field('shape_selector','options');

if (get_field('is_manual')) {
    $bkgd   = get_field('bkgd')['url'] ?? '';
    $link   = get_field('link') ?? '';
    $target = $link['target'] ?? '';
    $title  = $link['title'] ?? '';
    $url    = $link['url'] ?? '';
} else {
    $page   = get_field('page');
    $bkgd   = get_the_post_thumbnail_url($page->ID) ? get_the_post_thumbnail_url($page->ID) : (getDefaultFeaturedImage(true) ? getDefaultFeaturedImage(true) : get_stylesheet_directory_uri() . "/assets/img/150_X_150.png");
    $target = '';
    $title  = get_the_title($page->ID);
    $url    = get_permalink($page->ID);
}
?>
<div id="<?php echo $id; ?>" class="imageButtons">
    <div class="buttons">
        <div class="pageContentButton">
                <a class="pageContentlink<?php echo $shape=="circles" ? " rounded" : ""; ?>" href="<?php echo $url; ?>" target="<?php echo $target; ?>" style="background-image:url(<?php echo $bkgd;?>);">
                    <h3><?php echo $title; ?></h3>
                </a>
        </div>
    </div>

</div>
<style type="text/css">
  #<?php echo $id; ?>{
    min-height:50px;
  }
	#<?php echo $id; ?> .buttons{
    display: flex;
    justify-content: center;
    flex-wrap:wrap;
	}
  #<?php echo $id; ?> .buttons .pageContentButton{
    width: 100%;
    text-align: center;
    height: 350px;
    margin: 30px 19px;
  }
  #<?php echo $id; ?> .buttons .pageContentlink {
    display: flex;
    align-items: center;
    justify-content: center;
    background-size: cover;
    background-position: center;
    height: 100%;
    text-decoration: none;
    position: relative;
  }
  #<?php echo $id; ?> .buttons .pageContentlink:after{
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0.3;
    transition: opacity .1s linear;
    background: linear-gradient(45deg, black, transparent);
  }
  #<?php echo $id; ?> .buttons .pageContentlink.rounded:after{
    border-radius: 10px;
  }
  #<?php echo $id; ?> .buttons .pageContentButton.buttonOne .pageContentlink:after{
    background-color: #000;
  }
  #<?php echo $id; ?> .buttons .pageContentButton.buttonTwo .pageContentlink:after{
    background-color: #000;
  }
  #<?php echo $id; ?> .buttons .pageContentButton .pageContentlink:hover:after{
    opacity: .59;
  }
  #<?php echo $id; ?> .buttons .pageContentlink h3 {
      font-weight: 700;
      text-transform: uppercase;
      bottom: 0;
      position: absolute;
      padding: 25px;
      margin: 0 auto;
      font-size: 26px;
      font-style: normal;
      line-height: 32px;
      border: none;
      color: #ffffff;
      z-index: 9;
      transition: padding .2s linear, color .2s linear;
  }
  @media screen and (max-width:1024px){
    #<?php echo $id; ?> .buttons .pageContentButton{
      width: 48%;
      text-align: center;
      height: 250px;
      margin:1%;
    }
    #<?php echo $id; ?> .buttons .pageContentlink h3{
      font-size:30px;
    }
  }
  @media screen and (max-width:768px){
    #<?php echo $id; ?> .buttons .pageContentButton{
      width: 100%;
      margin: 2% 0;
    }
  }
</style>
