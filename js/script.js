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


 

    jQuery(function($){

        // Set all variables to be used in scope
        var frame,
            metaBox = $('#meta-box-id.postbox'), // Your meta box id here
            addImgLink = metaBox.find('.upload-custom-img'),
            delImgLink = metaBox.find( '.delete-custom-img'),
            imgContainer = metaBox.find( '.custom-img-container'),
            imgIdInput = metaBox.find( '.custom-img-id' );
        
        // ADD IMAGE LINK
        addImgLink.on( 'click', function( event ){
          
          event.preventDefault();
          
          // If the media frame already exists, reopen it.
          if ( frame ) {
            frame.open();
            return;
          }
          
          // Create a new media frame
          frame = wp.media({
            title: 'Select or Upload Media Of Your Chosen Persuasion',
            button: {
              text: 'Use this media'
            },
            multiple: false  // Set to true to allow multiple files to be selected
          });
      
          
          // When an image is selected in the media frame...
          frame.on( 'select', function() {
            
            // Get media attachment details from the frame state
            var attachment = frame.state().get('selection').first().toJSON();
      
            // Send the attachment URL to our custom image input field.
            imgContainer.append( '<img src="'+attachment.url+'" alt="" style="max-width:100%;"/>' );
      
            // Send the attachment id to our hidden input
            imgIdInput.val( attachment.id );
      
            // Hide the add image link
            addImgLink.addClass( 'hidden' );
      
            // Unhide the remove image link
            delImgLink.removeClass( 'hidden' );
          });
      
          // Finally, open the modal on click
          frame.open();
        });
        
        
        // DELETE IMAGE LINK
        delImgLink.on( 'click', function( event ){
      
          event.preventDefault();
      
          // Clear out the preview image
          imgContainer.html( '' );
      
          // Un-hide the add image link
          addImgLink.removeClass( 'hidden' );
      
          // Hide the delete image link
          delImgLink.addClass( 'hidden' );
      
          // Delete the image id from the hidden input
          imgIdInput.val( '' );
      
        });
      
      });






});


