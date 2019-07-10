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

  
    // var menuanim1 = TweenLite.to(mobileNav, 2.5, { ease: Elastic.easeOut.config(1, 0.3), y: -56 });
    // var menuanim = TweenLite.from(mobileNav, 0.5, {
    //   height: 0,
    //   paused: true,
    //   reversed: true
    // });

    jQuery(navToggle).click(function(){

      

        if(isOpen == 0) {
            // jQuery(mobileNav).slideToggle('fast');
            // TweenLite.to(mobileNav, 2.5, { display:'block', ease: Elastic.easeOut.config(1, 0.3), y: -46 });
            // menuanim.reversed() ? menuanim.play() : menuanim.reverse();

            TweenLite.to(mobileNav, 0.5, { display:'block', opacity: 1, ease: Elastic.easeOut.config(1, 0.3), y: -46 });
     
            jQuery(openBurger).hide();
            jQuery(closeBurger).show();
            jQuery(closeBurger).css('display', 'block');
            console.log("isOpen");
            isOpen++;
        } 
        else {
            // jQuery(mobileNav).slideToggle('fast');
            // menuanim.reversed() ? menuanim.play() : menuanim.reverse();
            TweenMax.fromTo(mobileNav, 0.5, { opacity: 1, y: -46 }, { opacity: 0, y: 0, display:'none' });





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


