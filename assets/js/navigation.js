/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */

window.addEventListener("scroll", () => stickyHeader());

var lastScrollTop = 0;

const stickyHeader = () => {
  if (!document.getElementById("masthead")) return;
  let header = document.getElementById("masthead");
  // let sticky = header.offsetTop;
  let hcl = header.classList;
  var st = window.pageYOffset || document.documentElement.scrollTop;

  if (st > lastScrollTop) {
    hcl.add("newsticky");
  } else if (st < lastScrollTop) {
    hcl.remove("newsticky");
  }
  lastScrollTop = st <= 0 ? 0 : st;
};
jQuery(document).ready(function ($) {
  $('#mega-menu-sticky').each(function(){
    $(this).prepend('<li class="back-button mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page"><a class="mega-menu-link" href="#">Back</a></li>');
    //$(this).append('<li class="mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page"><i class="header-search fa fa-search"></i><form role="search" class="search-form" method="GET" action="https://therese.diocesanweb.org"><label for="s"><span class="screen-reader-text">Search for:</span><input type="search" class="search-field" placeholder="Search..." name="s" title="Search for:"></label><button type="submit" class="search-submit" value="Search">Submit</button></form></li>');
  });
  $('#site-navigation').each(function(){
    $(this).append('<div class="mobile-header-search-container"><i class="mobile-header-search fas fa-search"></i></div>');
  });

  $('.back-button a').on('click', function(e){
    e.stopPropogation();
  });

	jQuery(function($) {
    $('#mega-menu-sticky li.mega-menu-item').on('open_panel', function() {
		    $('#mega-menu-sticky').toggleClass('submenu-open');
    });
    $('#mega-menu-sticky li.mega-menu-item').on('close_panel', function() {
		    $('#mega-menu-sticky').toggleClass('submenu-open');
    });
    $('.back-button').on('click', function(e) {
        e.preventDefault();
        $('.max-mega-menu').data('maxmegamenu').hideAllPanels();
    });
	});

  // var elementPosition = $('.news-content-wrapper').offset();
  // var elementBottom = $('.news-content-wrapper').innerHeight();
  // var headerHeight = parseInt(window.getComputedStyle(document.body).getPropertyValue('--max-logo-height').trim().replace('px','')) + 30;
  // var wrapperOffset = $('.news-content-wrapper-wrapper').offset();
  // var wrapperHeight = $('.news-content-wrapper-wrapper').outerHeight();
  // var wrapperBottom = wrapperHeight + wrapperOffset.top;
  //
  // if(window.innerWidth > 1024){
  //   $(window).scroll(function(){
  //     console.log($(window).scrollTop(), wrapperBottom, elementBottom,headerHeight);
  //       if(($(window).scrollTop() > elementPosition.top) && ($(window).scrollTop() < wrapperBottom - elementBottom - headerHeight)) {
  //             $('.news-content-wrapper').addClass('newsSticky').css({'position':'fixed','top':'0','width':'50%','bottom':'auto'});
  //       } else if($(window).scrollTop() >= wrapperBottom - elementBottom - headerHeight) {
  //           $('.news-content-wrapper').removeClass('newsSticky').css({'position':'absolute','top':'auto','width':'auto','bottom':'0'});
  //       } else {
  //           $('.news-content-wrapper').removeClass('newsSticky').css({'position':'relative','top':'auto','width':'auto','bottom':'auto'});
  //       }
  //   });
  // }
});
