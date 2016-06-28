"use strict";

!(function() {
  
  lightbox.option({
    'resizeDuration': 100,
    'fadeDuration': 100,
    'wrapAround': true
  });
  
  $('.upcoming-event').click(function () {
    $('.upcoming-event .map').css('pointer-events', 'auto');
  });

  $( '.map' ).mouseleave(function() {
    $(this).css('pointer-events', 'none');
  });
  
  $('#mail-signup-trigger, #mail-signup-trigger-bottom').click(function() {
      $('#mailing-list-modal').addClass('show');
      $('#modal-overlay').addClass('show');
  });
  
  $('#close-modal').click(function() {
    $('#modal-overlay').removeClass('show');
    $('#mailing-list-modal').removeClass('show');
  });
}());