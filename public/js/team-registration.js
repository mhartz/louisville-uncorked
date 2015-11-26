"use strict";

!(function() {
  
  $.validator.prototype.checkForm = function () {
    //overriden in a specific page
    this.prepareForm();
    for (var i = 0, elements = (this.currentElements = this.elements()); elements[i]; i++) {
      if (this.findByName(elements[i].name).length != undefined && this.findByName(elements[i].name).length > 1) {
        for (var cnt = 0; cnt < this.findByName(elements[i].name).length; cnt++) {
          this.check(this.findByName(elements[i].name)[cnt]);
        }
      } else {
        this.check(elements[i]);
      }
    }
    return this.valid();
  }
  
  /*
   * Click to add teammate
   */
  $('.teammate-add').on('click', function() {
    var clickAtt = $(this).attr('data-teammate-add');
    var nextAtt = parseInt(clickAtt) + 1;
    $('#team-registration-form .card-1').removeClass('card-1').addClass('card-collapsed');
    $('#team-registration-form').addClass('card-1');
    $('.participant-registration[data-teammate='+clickAtt+']').addClass('zoomed-in').removeClass('zoomed-out');
    $(this).addClass('zoomed-out');
  });
  
  $(function() {
    /*
     *  Validate Teammates before sending to server
     */
    $('input[type=text], input[type=email]').bind('focus blur', function() {
        $(this).val($.trim($(this).val()));
    });
    
    $("#team-registration-form").validate({
      rules: {
        'team_name': "required",
        'registrant_first_name' : "required",
        'registrant_last_name' : "required",
        'registrant_email' : "required"
      },
      messages: {
        'team_name': "Team Name is required",
        'registrant_first_name': "Registrant's First Name is required",
        'registrant_last_name': "Registrant's Last Name is required",
        'registrant_email': "Registrant's Email Address is required"
      },
    });

    $('#first_participant_first_name').rules("add", {
      required: {
        depends: function() {
          return $('#first_participant_last_name').val().length != 0;
        },
        messages: {
          required: "Teammate's first name is required"
        }
      }
    });

    $('#first_participant_last_name').rules("add", {
      required: {
        depends: function() {
          return $('#first_participant_first_name').val().length != 0;
        },
        messages: {
          required: "First teammate's last name is required"
        }
      }
    });

    $('#second_participant_first_name').rules("add", {
      required: {
        depends: function() {
          return $('#second_participant_last_name').val().length != 0;
        },
        messages: {
          required: "Second teammate's first name is required"
        }
      }
    });

    $('#second_participant_last_name').rules("add", {
      required: {
        depends: function() {
          return $('#second_participant_first_name').val().length != 0;
        },
        messages: {
          required: "Second teammate's last name is required"
        }
      }
    });
  });
  
}());