jQuery(document).ready(function ($) {
  
  //Links each day to its set of events
  var count = 0;
  $('.simcal-day-label').each(function(){
    $(this).attr('data-simcal', count);
    $(this).next('.simcal-day').find('ul.simcal-events').attr('data-simcal', count);
    count++;
  });

  //Add class to today's date
  $('.simcal-day-label[style*="border-bottom: 1px solid #dedede;"]').each(function(){
    $(this).addClass('simcal-today');
    $(this).find('> span').addClass('simcal-today');
    var current = $(this).attr('data-simcal');
    $('.calendar-inner ul.simcal-events').removeClass('simcal-visible');
    $('.calendar-inner ul.simcal-events[data-simcal=' + current + ']').addClass('simcal-visible');
  });

  //Moves active class to selected date
  $('.simcal-day-label > span').on('click', function(){
    $('.simcal-day-label > span').each(function(){
      $(this).removeClass('simcal-current');
    });
    $(this).addClass('simcal-current');

    var current = $(this).parent().attr('data-simcal');
    $('.calendar-inner ul.simcal-events').removeClass('simcal-visible');
    $('.calendar-inner ul.simcal-events[data-simcal=' + current + ']').addClass('simcal-visible');
  });

  //Shorthand day names to 2 letters, then move them to slider
  $('.simcal-day-label').each(function(){
    var dayArray = new Array('SU','MO','TU','WE','TH','FR','SA');
    var i;
    for (i = 0; i < 7; i++) {
      if($(this).next('.simcal-day').hasClass('simcal-weekday-' + i)) {
        $(this).find('.simcal-date-format').append(' ' + dayArray[i]);
      }
    }

    $('.calendar-weekday-slick').append($(this));
  });

  //Moves each date's events to the slick slider
  $('dd.simcal-day').each(function(){
      $('.calendar-event-slick').append($(this));
  });

});
