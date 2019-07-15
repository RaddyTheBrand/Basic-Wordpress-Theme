    <?php
        $optionMailChimp = get_option('mailChimp'); 
        if ($optionMailChimp == "" || $optionMailChimp == null) {
            $optionMailChimp = "Edit this by going to your Dashboard -> Theme Options -> MailChimp";
        }
        else {
            ?>
        <div class="row social">
            <div class="col-6 newsletter">
                <form action="<?php echo $optionMailChimp; ?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
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

    <div class="col-6 networks">
    <?php   
            $imgUrl = get_template_directory_uri();
            $optionFb = get_option('fb');
            $optionTwitter = get_option('twitter');
            $optionInsta = get_option('insta');
            $optionYoutube = get_option('youtube');
            $optionContactEmail = get_option('contactEmail');

            if($optionFb == "" || $optionFb == null) {
                $optionFb = "";
            }
            else {
                echo "<a href='$optionFb' target='_blank'><img src='$imgUrl/images/social/facebook.svg' alt='Facebook'/></a>";
            }
            if($optionTwitter == "" || $optionTwitter == null) {
                $optionTwitter = "";
            }
            else {
                echo "<a href='$optionTwitter' target='_blank'><img src='$imgUrl/images/social/twitter.svg' alt='Twitter'/></a>";
            }
            if($optionInsta == "" || $optionInsta == null) {
                $optionInsta = "";
            }
            else {
                echo "<a href='$optionInsta' target='_blank'><img src='$imgUrl/images/social/instagram.svg' alt='YouTube'/></a>";
            }
            if($optionYoutube == "" || $optionYoutube == null) {
                $optionYoutube = "";
            }
            else {
                echo "<a href='$optionYoutube' target='_blank'><img src='$imgUrl/images/social/youtube.svg' alt='YouTube'/></a>";
            }
            if($optionContactEmail == "" || $optionContactEmail == null) {
                $optionContactEmail = "";
            }
            else {
                echo "<a href='mailto:$optionContactEmail' target='_blank'><img src='$imgUrl/images/social/email.svg' alt='Email'/></a>";
            }  
    ?>
        <span id="search__button" onclick="toggleSearch()"><img src="<?php echo get_template_directory_uri(); ?>/images/social/search.svg" alt="Search"/></span>
    </div>

    <div id="search_underlayer"></div>
    <div id="search__popup" style="display: none;"> 
            <form action="/" method="get" class="row">
                    <input  class="col-8" type="text" name="s" placeholder="Search..." id="search" value="<?php the_search_query(); ?>" />
                    <input class="col-4" type="submit" alt="Search" />
            </form>
    </div>  

</div>