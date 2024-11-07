jQuery(document).ready(function ($) {
  const tablet = 768;
  const laptop = 1025;
  const desktop = 1280;

  /** Hero Slider */
  $(".page-template-homepage .hero-slider").slick({
    autoplay: true,
    autoplaySpeed: 7000,
    arrows: false,
    cssEase: "linear",
    dots: false,
    fade: false,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    useTransform: false,
  });


  // $newsSlider.on("afterChange", function (e, slick, currentSlide) {
  //   let index = currentSlide + 1;
  //   $newsSlider.find(".slider-nav .slick-dots li").removeClass("slick-active");
  //
  //   $newsSlider
  //     .find(".slider-nav .slick-dots li:nth-child(" + index + ")")
  //     .addClass("slick-active");
  // });

  /**
   * add margin bottom to mobile news slider
   */
  function adjustMargin($el) {
    let height = window.innerWidth < laptop ? getPostHeight() : 0;
    $el.css("margin-bottom", height);
  }

  function getPostHeight() {
    return (
      $(".post-wrapper.slick-current")
        .find(".post-content-wrapper")
        .outerHeight() + 20
    );
  }

  function resizePosts() {
    $(".post-wrapper").each(function () {
      adjustMargin($(this));
    });
  }

  // $newsSlider.on("afterChange", resizePosts);
  $(window).on("resize", resizePosts);
  adjustMargin($(".post-wrapper"));

  $(".banner-items.slick-slider").slick({
    autoplay: false,
    arrows: true,
    cssEase: "linear",
    dots: false,
    fade: false,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    useTransform: false,
    responsive: [
      {
        breakpoint: laptop,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: desktop,
        settings: {
          dots: true,
          arrows: false,
          slidesToShow: 4,
          slidesToScroll: 4,
        },
      },
    ],
  });

  let $massTimes = $(".mass-times-container .mass-times-items");
  let $featuredButtons = $(".featured-content-container");
  let $gallery = $(".gallery-container .envira-gallery-public");
  let $newsSlider = $(".news-container-wrapper");

  $massTimes.slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
    mobileFirst: true,
    responsive: [
      {
        breakpoint: tablet,
        settings: {
          slidesToScroll: 2,
          slidesToShow: 2,
        },
      },
      {
        breakpoint: desktop,
        settings: {
          slidesToScroll: 4,
          slidesToShow: 4,
        },
      },
    ],
  });

  function featuredButtonsMobile() {
    $featuredButtons.slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      centerMode: true,
      dots: false,
      arrows: true,
      mobileFirst: true,
      responsive: [
        {
          breakpoint: tablet,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
          },
        },
      ],
    });
  }

  function galleryMobile() {
    $gallery.slick({
      infinite: true,
      //   slide: ".envira-gallery-item",
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: false,
      arrows: false,
      mobileFirst: true,
      responsive: [
        {
          breakpoint: tablet,
          settings: {
            slidesToScroll: 2,
            slidesToShow: 2,
          },
        },
      ],
    });
  }

  function newsMobile() {
    $newsSlider.slick({
      arrows: false,
      cssEase: "linear",
      dots: true,
      fade: false,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      useTransform: false,
      appendDots: $(".slider-nav"),
      slide: '.post-wrapper',
      responsive: [
        {
          breakpoint: laptop,
          settings: {
            arrows: true,
            variableWidth: true,
            centerMode: true
          },
        },
      ],
    });
  }

  function isMobile() {
    return window.innerWidth < laptop;
  }

  if (isMobile()) {
    featuredButtonsMobile();
    galleryMobile();
    newsMobile();
  }

  $(window).resize(function (e) {
    if (isMobile()) {
      if (!$featuredButtons.hasClass("slick-initialized")) {
        featuredButtonsMobile();
      }
      if (!$gallery.hasClass("slick-initialized")) {
        galleryMobile();
      }
      if (!$newsSlider.hasClass("slick-initialized")) {
        newsMobile();
      }
    } else {
      if ($featuredButtons.hasClass("slick-initialized")) {
        $featuredButtons.slick("unslick");
      }
      if ($gallery.hasClass("slick-initialized")) {
        $gallery.slick("unslick");
      }
      if ($newsSlider.hasClass("slick-initialized")) {
        $newsSlider.slick("unslick");
      }
    }
  });


  /** Ministry Slider */
  $(".ministries-container .ministry-slider .ministry-group").slick({
    autoplay: false,
    arrows: true,
    dots: false,
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    slide: ".ministry-wrapper",
    responsive: [
      {
        breakpoint: tablet,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: laptop,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: desktop,
        settings: {
          slidesToShow: 4,
        },
      },
    ],
  });

  $(".testimonials-container .slick-slider").slick({
    autoplay: false,
    arrows: true,
    cssEase: "linear",
    dots: false,
    fade: false,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    useTransform: false,
    centerPadding: "25%",
    responsive: [
      {
        breakpoint: laptop,
        settings: {
          centerMode: true,
        },
      },
    ],
  });

  /** Calendar Slider */
  // $(".page-template-homepage .simcal-events-list-container").slick({
  //   autoplay: false,
  //   arrows: true,
  //   cssEase: "linear",
  //   dots: false,
  //   fade: false,
  //   infinite: true,
  //   slidesToShow: 7,
  //   slidesToScroll: 1,
  //   useTransform: false,
  //   slide: ".simcal-day-label"
  // });

  var today = $('dt.simcal-today').index();

  $(".page-template-homepage .calendar-weekday-slick").slick({
    autoplay: false,
    arrows: true,
    cssEase: "linear",
    dots: false,
    fade: false,
    infinite: false,
    slidesToShow: 7,
    slidesToScroll: 1,
    useTransform: false,
    swipeToSlide: true,
    touchThreshold: 10,
    initialSlide: today
  });
  
  $(".page-template-homepage .parishButtons").slick({
    autoplay: false,
    dots: false,
    arrows: true,
    cssEase: "linear",
    slidesToShow: 5,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1360,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 1025,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 426,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      }
    ]
  });
});
