"use strict";

!(function() {
  
  lightbox.option({
    'resizeDuration': 100,
    'fadeDuration': 100,
    'wrapAround': true
  });
  
  $('.upcoming-event').click(function () {
    $('.upcoming-event .map').css('pointer-events', 'auto');
    console.log("Clicked");
  });

  $( '.map' ).mouseleave(function() {
    $(this).css('pointer-events', 'none'); 
    console.log("mouseout");
  });
  
  $(window).resize(function() {
    var recaptcha = $(".g-recaptcha");
    if(recaptcha.css('margin') == '1px') {
        var newScaleFactor = recaptcha.parent().innerWidth() / 304;
        recaptcha.css('transform', 'scale(' + newScaleFactor + ')');
        recaptcha.css('transform-origin', '0 0');
    }
    else {
        recaptcha.css('transform', 'scale(1)');
        recaptcha.css('transform-origin', '0 0');
    }
  });
  
}());