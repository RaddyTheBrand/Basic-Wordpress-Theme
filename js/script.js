jQuery( document ).ready(function() {
    const mobileNav = jQuery('#toggleMyMenu');
    const navToggle = jQuery('.mobile-menu');
    const openBurger = jQuery('.open__burger');
    const closeBurger = jQuery('.close__burger');
    let isOpen = 0;
    let isOpenSearch = 0;
   


    jQuery(navToggle).click(function(){
        if(isOpen == 0) {
            TweenLite.to(mobileNav, 0.5, { display:'block', opacity: 1, ease: Elastic.easeOut.config(1, 0.3), y: -46 });
            jQuery(openBurger).hide();
            jQuery(closeBurger).show();
            jQuery(closeBurger).css('display', 'block');
            console.log("isOpen");
            isOpen++;
        } 
        else {
            TweenMax.fromTo(mobileNav, 0.5, { opacity: 1, y: -46 }, { opacity: 0, y: 0, display:'none' });
            jQuery(openBurger).show();
            jQuery(closeBurger).hide();
            isOpen--;
            console.log("isClosed");
        }
    });



    jQuery('#search__button').click(function(){
      if(isOpenSearch == 0) {
        jQuery("#search_underlayer").show();
        TweenLite.to('#search__popup', 0.5, { display:'block', opacity: 1, ease: Elastic.easeOut.config(1, 0.3), y: -46 });
        isOpenSearch++;
      }
      else{
        jQuery("#search_underlayer").hide();
        TweenMax.fromTo('#search__popup', 0.5, { opacity: 1, y: -46 }, { opacity: 0, y: 0, display:'none' });
        isOpenSearch--;
      }
    });

    jQuery('#search_underlayer').click(function(){
        jQuery("#search_underlayer").hide();
        TweenMax.fromTo('#search__popup', 0.5, { opacity: 1, y: -46 }, { opacity: 0, y: 0, display:'none' });
        isOpenSearch--;
    });



    // // Menu Toggle
    // jQuery( "#search__button" ).click(function() {
    //     jQuery( "#search__popup" ).slideToggle( "fast" );
    // });


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


