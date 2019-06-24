

// A $( document ).ready() block.
jQuery( document ).ready(function() {

    // Menu Toggle
    jQuery( ".mobile-menu" ).click(function() {
        jQuery( "#toggleMyMenu" ).slideToggle( "fast", function() {
        });
    });


    // Menu Toggle
    jQuery( "#search__button" ).click(function() {
        jQuery( "#search__popup" ).slideToggle( "fast" );
    });





});


