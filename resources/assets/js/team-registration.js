"use strict";

!(function() {
  /*
   * Click to add teammate
   */
  $('.teammate-add').on('click', function() {
    clickAtt = $(this).attr('data-teammate-add');
    $('.participant-registration[data-teammate='+clickAtt+']').addClass('show');
  });
  
  $(function() {
    /*
     *  Validate Teammates before sending to server
     */
    $("#team-registration-form").validate({
      rules: {
        'team_name': "required"
      },
      messages: {
        'team_name': "Team Name is required"
      },
    });
  });
  
}());