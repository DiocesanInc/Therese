jQuery(document).ready(function($) {
  $.fn.isInViewport = function() {
      var elementTop = $(this).offset().top;
      var elementBottom = elementTop + $(this).outerHeight();

      var viewportTop = $(window).scrollTop();
      var viewportBottom = viewportTop + $(window).height();

      return elementBottom > viewportTop && elementTop < viewportBottom;
  };

    var containers = $('.container');
    if (containers.length) {
        containers.each(function() {
          var container = $(this);

            // Support small text - copy to fill screen width
            if (container.find('.scrolling-text').outerWidth() < $(window).width()) {
                var windowToScrolltextRatio = Math.round($(window).width() / container.find('.scrolling-text').outerWidth()),
                    scrollTextContent = container.find('.scrolling-text .faded-header').text();
                    newScrollText = '';
                for (var i = 0; i < windowToScrolltextRatio; i++) {
                    newScrollText += ' ' + scrollTextContent;
                }
                container.find('.scrolling-text .faded-header').text(scrollTextContent);
            }

            // Init variables and config
            var scrollingText = container.find('.scrolling-text'),
                scrollingTextWidth = scrollingText.outerWidth(),
                scrollingTextHeight = scrollingText.outerHeight(true),
                startLetterIndent = parseInt(scrollingText.find('.faded-header').css('font-size'), 10) / 4.8,
                startLetterIndent = Math.round(startLetterIndent),
                scrollAmountBoundary = Math.abs($(window).width() - scrollingTextWidth),
                transformAmount = 0,
                leftBound = 0,
                rightBound = scrollAmountBoundary,
                transformDirection = container.hasClass('left-to-right') ? -1 : 1,
                transformSpeed = 4;

            // Read transform speed
            if (container.attr('speed')) {
                transformSpeed = container.attr('speed');
            }

            // Make scrolling text copy for scrolling infinity
            container.find('.scrolling-text').css({'position': 'absolute', 'left': 0});
            container.css('height', scrollingTextHeight);
            $('.news-container-wrapper').css('margin-top', '-' + scrollingTextHeight);

            var getActiveScrollingText = function(direction) {
                var firstScrollingText = container.find('.scrolling-text:nth-child(1)');
                var secondScrollingText = container.find('.scrolling-text:nth-child(2)');

                var firstScrollingTextLeft = parseInt(container.find('.scrolling-text:nth-child(1)').css("left"), 10);
                var secondScrollingTextLeft = parseInt(container.find('.scrolling-text:nth-child(2)').css("left"), 10);

                if (direction === 'left') {
                    return firstScrollingTextLeft < secondScrollingTextLeft ? secondScrollingText : firstScrollingText;
                } else if (direction === 'right') {
                    return firstScrollingTextLeft > secondScrollingTextLeft ? secondScrollingText : firstScrollingText;
                }
            }

            var count = 0;

              $(window).on('wheel', function(e) {
                if(container.isInViewport()/* && count == 0*/){
                  count = 1;
                } else {
                  count = 0;
                }
                if(container.isInViewport()){
                  var $win = $(window);
                  if (!($win.scrollTop() == 0) && !($win.height() + $win.scrollTop() == $(document).height())){
                    var delta = e.originalEvent.deltaY;
                    var viewportTop = $(window).scrollTop();
                    var viewportBottom = viewportTop + $(window).height();
                    var mission = $('.container').offset().top;
                    var missionB = mission + $('.container').outerHeight();

                    transformAmount += transformSpeed * transformDirection;
                    setTimeout(function(){
                        container.find('.scrolling-text').css('transform', 'translateX('+ transformAmount * -1 +'%)');
                    });
                  }
                } else {
                  transformAmount = 0;
                  setTimeout(function(){
                      container.find('.scrolling-text').css('transform', 'translateX('+ transformAmount * -1 +'%)');
                  });
                }
              });
        })
    }
});
