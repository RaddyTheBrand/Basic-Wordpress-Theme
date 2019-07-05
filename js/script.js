// A $( document ).ready() block.
jQuery( document ).ready(function() {

    // Menu Toggle
    // jQuery( ".mobile-menu" ).click(function() {
    //     jQuery( "#toggleMyMenu" ).slideToggle( "fast", function() {
    //     });
    // });

    const mobileNav = jQuery('#toggleMyMenu');
    const navToggle = jQuery('.mobile-menu');
    const openBurger = jQuery('.open__burger');
    const closeBurger = jQuery('.close__burger');
    var isOpen = 0;

    jQuery(navToggle).click(function(){

        if(isOpen == 0) {
            jQuery(mobileNav).slideToggle('fast');
            jQuery(openBurger).hide();
            jQuery(closeBurger).show();
            jQuery(closeBurger).css('display', 'block');
            console.log("isOpen");
            isOpen++;
        }
        else {
            jQuery(mobileNav).slideToggle('fast');
            jQuery(openBurger).show();
            jQuery(closeBurger).hide();
            isOpen--;
            console.log("isClosed");
        }
    });


    // Menu Toggle
    jQuery( "#search__button" ).click(function() {
        jQuery( "#search__popup" ).slideToggle( "fast" );
    });


 

// IE/Edge fallback for responsive images while 'object-fit' property is not supported
function ObjectFitIt() {
  jQuery('img.objFit').each(function(){
    var imgSrc = jQuery(this).attr('src');
    var fitType = 'cover';

    if(jQuery(this).data('fit-type')) {
      fitType = jQuery(this).data('fit-type');
    }

    jQuery(this).parent().css({ 'background' : 'transparent url("'+imgSrc+'") no-repeat center center/'+fitType, });
    jQuery('img.objFit').css('display','none'); });
    }

  if('objectFit' in document.documentElement.style === false) {
  ObjectFitIt();
}

 

});


