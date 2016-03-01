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
  
  $('#mail-signup-trigger').click(function() {
    console.log("clicked")
      $('#mailing-list-modal').addClass('show');
      $('#modal-overlay').addClass('show');
  });
  
  $('#close-modal').click(function() {
    $('#modal-overlay').removeClass('show');
    $('#mailing-list-modal').removeClass('show');
  });
}());