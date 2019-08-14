    <?php

        $basicMailChimp =   get_theme_mod('basic-social-callout-mailchimp');
    ?>

        <div class="row social">

        <?php
        if($basicMailChimp != '') { ?>
    
            <div class="col-6 newsletter">
                <form action="<?php echo $basicMailChimp; ?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <input type="email" placeholder="Email Address" value="" name="EMAIL" class="required email subscribeinput" id="mce-EMAIL">
                    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="subscribebutton">

                    <div id="mce-responses" class="clear">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>  
                </form>

                <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
                <script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='BIRTHDAY';ftypes[3]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
            </div>

            <?php
        }
 

    ?>

    <div class=" networks">
    <?php   

            $imgUrl =           get_template_directory_uri();
            
            $basicFacebook =    get_theme_mod('basic-social-callout-facebook');
            $basicInstagram =   get_theme_mod('basic-social-callout-instagram');
            $basicPinterest =   get_theme_mod('basic-social-callout-pinterest');
            $basicRSS =         get_theme_mod('basic-social-callout-rss');
            $basicSkype =       get_theme_mod('basic-social-callout-skype');
            $basicSnapchat =    get_theme_mod('basic-social-callout-snapchat');
            $basicTwitter =     get_theme_mod('basic-social-callout-twitter');
            $basicWeChat =      get_theme_mod('basic-social-callout-wechat');
            $basicWhatsApp =    get_theme_mod('basic-social-callout-whatsapp');
            $basicYouTube =     get_theme_mod('basic-social-callout-youtube');
            $basicEmail =       get_theme_mod('basic-social-callout-email');

            if($basicFacebook != "") {
                echo "<a href='$basicFacebook' target='_blank'><img src='$imgUrl/images/social/facebook.svg' alt='Facebook'/></a>";
            }
            if($basicInstagram != "") {
                echo "<a href='$basicInstagram' target='_blank'><img src='$imgUrl/images/social/instagram.svg' alt='Instagram'/></a>";
            }
            if($basicPinterest != "") {
                echo "<a href='$basicPinterest' target='_blank'><img src='$imgUrl/images/social/pinterest.svg' alt='Pinterest'/></a>";
            }
            if($basicRSS != "") {
                echo "<a href='$basicRSS' target='_blank'><img src='$imgUrl/images/social/rss.svg' alt='RSS'/></a>";
            }
            if($basicSkype != "") {
                echo "<a href='skype:$basicSkype?chat' target='_blank'><img src='$imgUrl/images/social/skype.svg' alt='Skype'/></a>";
            }
            if($basicSnapchat != "") {
                echo "<a href='https://www.snapchat.com/add/$basicSnapchat' target='_blank'><img src='$imgUrl/images/social/snapchat.svg' alt='Snapchat'/></a>";
            }
            if($basicTwitter != "") {
                echo "<a href='$basicTwitter' target='_blank'><img src='$imgUrl/images/social/twitter.svg' alt='RSS'/></a>";
            }
            if($basicWeChat != "") {
                echo "<a href='https://msng.link/wc/$basicWeChat' target='_blank'><img src='$imgUrl/images/social/wechat.svg' alt='WeChat'/></a>";
            }
            if($basicWhatsApp != "") {
                echo "<a href='https://api.whatsapp.com/send?phone=$basicWhatsApp' target='_blank'><img src='$imgUrl/images/social/whatsapp.svg' alt='WhatsApp'/></a>";
            }
            if($basicYouTube != "") {
                echo "<a href='$basicYouTube' target='_blank'><img src='$imgUrl/images/social/youtube.svg' alt='YouTube'/></a>";
            }
            if($basicEmail != "") {
                echo "<a href='mailto:$basicEmail' target='_blank'><img src='$imgUrl/images/social/email.svg' alt='Email'/></a>";
            }

    ?>
        <span id="search__button" onclick="toggleSearch()"><img src="<?php echo get_template_directory_uri(); ?>/images/social/search.svg" alt="Search"/></span>
    </div>

    <div id="search_underlayer"></div>
    <div id="search__popup" style="display: none;"> 
            <form action="/" method="get" class="row">
                    <input  class="col-8" type="text" name="s" placeholder="Search..." id="search" value="<?php the_search_query(); ?>" />
                    <input class="col-4" type="submit" />
            </form>
    </div>  

</div>