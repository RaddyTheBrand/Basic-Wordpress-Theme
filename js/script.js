jQuery( document ).ready(function() {
    const mobileNav = jQuery('#toggleMyMenu');
    const navToggle = jQuery('.mobile-menu');
    const openBurger = jQuery('.open__burger');
    const closeBurger = jQuery('.close__burger');
    let isOpen = 0;
    let isOpenSearch = 0;

    // Menu Positioning depending on logo/header height
    let currentHeight = jQuery('header').innerHeight();
    console.log(currentHeight);  
    jQuery(mobileNav).css({ top: currentHeight + 47 });


    jQuery(navToggle).click(function(){
        if(isOpen == 0) {
            TweenLite.to(mobileNav, 0.5, { display:'block', opacity: 1, ease: " power2. inOut", y: -46 });
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
        TweenLite.to('#search__popup', 0.5, { display:'block', opacity: 1, ease: " power2. inOut", y: -46 });
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
 

// Comments

    jQuery('.comment-reply-link').click(function(e) {
      e.preventDefault();
  
      let commentId = jQuery( this ).attr('data-commentid');
      console.log(commentId);
  
      jQuery('.reply-commentform, #commentform').remove();
      jQuery( this ).append().after(`
      <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" class="reply-commentform">
        <?php if($user_ID) : ?>
          <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>
        <?php else : ?>
          <p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
          <label for="author"><small>Name <?php if($req) echo "(required)"; ?></small></label></p>
          <p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
          <label for="email"><small>Mail (will not be published) <?php if($req) echo "(required)"; ?></small></label></p>
          <p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
          <label for="url"><small>Website</small></label></p>
        <?php endif; ?>
        <p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>
        <p>
        <input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
        <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
        <input type="hidden" name="comment_parent" id="comment_parent" value="${commentId}">
        </p>
      </form>
      `);
  
    });



});


