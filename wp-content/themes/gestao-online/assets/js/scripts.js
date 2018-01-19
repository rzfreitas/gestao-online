jQuery(document).foundation();
/*
These functions make sure WordPress
and Foundation play nice together.
*/

jQuery(document).ready(function() {

    // Remove empty P tags created by WP inside of Accordion and Orbit
    jQuery('.accordion p:empty, .orbit p:empty').remove();

	 // Makes sure last grid item floats left
	jQuery('.archive-grid .columns').last().addClass( 'end' );

	// Adds Flex Video to YouTube and Vimeo Embeds
  jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').each(function() {
    if ( jQuery(this).innerWidth() / jQuery(this).innerHeight() > 1.5 ) {
      jQuery(this).wrap("<div class='widescreen flex-video'/>");
    } else {
      jQuery(this).wrap("<div class='flex-video'/>");
    }
  });

});

  jQuery(document).ready(function(){
   jQuery(window).scroll(function() { // check if scroll event happened
     if (jQuery(document).scrollTop() > 2) { // check if user scrolled more than 50 from top of the browser window
       jQuery(".navbar-inverse").css({"background-color": "rgba(25, 25, 25, .4)" , "border-bottom": "1px solid rgba(255,255,255,0.2)"}); // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
     } else {
       jQuery(".navbar-inverse").css("background-color", "transparent"); // if not, change it back to transparent
     }
   });
});

jQuery(document).ready(function() {
  function setHeight() {
    windowHeight = jQuery(window).innerHeight();
    jQuery('.fundo-home').css('min-height', windowHeight-'130');
  };
  setHeight();
  
  jQuery(window).resize(function() {
    setHeight();
  });
});

function scrollToElement(selector, offset){  
  jQuery("html, body").animate({  
    scrollTop: jQuery(selector).offset().top + offset + 'px'  
  }, 'slow');	  
}