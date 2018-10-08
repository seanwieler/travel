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

    jQuery(document).ready(function(){
		jQuery(window).scroll(function() {
			if (jQuery('body').height() <= (jQuery(window).height() + jQuery(window).scrollTop())) {
				jQuery('.fixedbar').hide();
			}else{
				jQuery(".fixedbar").show();
			}
		});
	});