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
  
  $(function() {
    $('input[type=email]').bind('focus blur', function() {
        $(this).val($.trim($(this).val()));
    });
    
    $('#contact-form').validate({
      rules: {
        'contact-name': "required",
        'contact-email' : "required",
        'contact-message' : "required"
      },
      messages: {
        'contact-name': "Name is required",
        'contact-email': "Email is required",
        'contact-message': "Message is required"
      },
    });
  });
  
}());