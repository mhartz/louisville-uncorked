"use strict";

!(function() {
    $(function() {
        $("li img").unveil(600, function() {
            $(this).load(function() {
                centerTallImage(430);
            });
        });
    });
}());