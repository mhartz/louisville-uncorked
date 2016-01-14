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
  
}());