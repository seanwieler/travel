/**
 * File smoothscroll.js.
 *
 * Adds a scroll to top button on the website
 * allowing smooth scrolling back to the top of the page.
 */
jQuery(document).ready(function($){
    $(window).scroll(function(){
        if ($(this).scrollTop() < 200) {
            $('#smoothup') .fadeOut();
        } else {
            $('#smoothup') .fadeIn();
        }
    });
    $('#smoothup').on('click', function(){
        $('html, body').animate({scrollTop:0}, 'fast');
        return false;
        });
});