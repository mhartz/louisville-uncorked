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