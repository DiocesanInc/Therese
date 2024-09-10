jQuery(document).ready(function ($) {

  var count = 0;
  $('.simcal-day > div').each(function(){
    $(this).attr('data-simcal', count);
    $(this).find('ul.simcal-events').attr('data-simcal', count);
    count++;
  });

  var today = new Date();
  var day = today.getDate();
  $('.simcal-day-label').each(function(){
    var checkDate = $(this).text().substr(0,2);
    if(day == checkDate){
      $(this).parent().addClass('simcal-today');
          var current = $(this).parent().attr('data-simcal');
          $('.calendar-inner ul.simcal-events').removeClass('simcal-visible');
          $('.calendar-inner ul.simcal-events[data-simcal=' + current + ']').addClass('simcal-visible');
    }
  });

  $('.simcal-day > div').on('click', function(){
    $('.simcal-day > div').each(function(){
      $(this).removeClass('simcal-current');
    });
    $(this).addClass('simcal-current');

    var current = $(this).attr('data-simcal');
    $('.calendar-inner ul.simcal-events').removeClass('simcal-visible');
    $('.calendar-inner ul.simcal-events[data-simcal=' + current + ']').addClass('simcal-visible');
  });

  $('ul.simcal-events').each(function(){
      $('.calendar-event-slick').append($(this));
  });

  $('.simcal-day:not(".simcal-day-void")').each(function(){
    var dayArray = new Array('SU','MO','TU','WE','TH','FR','SA');
    var i;
    for (i = 0; i < 7; i++) {
      if($(this).hasClass('simcal-weekday-' + i)) {
        $(this).find('.simcal-day-label').append(' ' + dayArray[i]);
      }
    }

    $('.calendar-weekday-slick').append($(this));
  });
});
