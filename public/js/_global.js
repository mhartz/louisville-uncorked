"use strict";

var page = $('body').attr('id');

//Toggle click function
$.fn.toggleClick=function(){
    var functions=arguments;
    return this.click(function(){
        var iteration=$(this).data('iteration')||0;
        functions[iteration].apply(this,arguments);
        iteration= (iteration+1) %functions.length;
        $(this).data('iteration', iteration);
    });
};

/*
 Center large images
 */
function centerTallImage(maxHeight) {
    $('.photo-gallery-list img').each(function () {
        var height = $(this).height();

        if (height > maxHeight) {
            $(this).addClass('center-tall-image');
        }
    });
}

!(function() {
  
  $(function() {
    /*
        Show/Hide the navigation
     */
    $('#show-hide-nav').toggleClick(function() {
      $(this).html('Close').addClass('active');
      $('#main-nav, #main-nav > ul').addClass('active');
    }, function() {
      $(this).html('Menu').removeClass('active');
      $('#main-nav, #main-nav > ul').removeClass('active');
    });
    
    $('nav .' + page + '-navlink').addClass('active');
  });

}());