/**
 * File floatingbar.js.
 *
 * Creates a floating bar for the bottom of site
 * that can be used for CTA items.
 */

(function($) {
    this.randomtip = function(){
        var length = $("#tips li").length;
        var ran = Math.floor(Math.random()*length) + 1;
        $("#tips li:nth-child(" + ran + ")").show();
    };
     
    $(document).ready(function(){   
        randomtip();
    });
    })( jQuery );

//requires jQuery
$(window).scroll(function(){
    var threshold = 200; // number of pixels before bottom of page that you want to start fading
    var op = (($(document).height() - $(window).height()) - $(window).scrollTop()) / threshold;
      if( op <= 0 ){
          $("#fixedbar").hide();
      } else {
          $("#fixedbar").show();
      }
      //$("#fixedbar").css("opacity", op ); 
  }); ( jQuery );