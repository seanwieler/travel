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

(function($) {
    $(document).ready(function() {
         
        //init scrolling event handler
        $(document).scroll(function(){
         
          var docScroll = $(document).scrollTop(), 
              boxCntOfset = $("#fixedbar").offset().top - 100;
          
       
          //when rich top of boxex than fire
          if(docScroll >= boxCntOfset ) {
      
            $("#fixedbar").fadeOut(200)
          
          } else {
           $("#fixedbar").fadeIn(200)
          
          }
        })   
      })
    }) ( jQuery );