
<?php 
    $basicMailChimp = get_theme_mod('basic-social-callout-mailchimp');
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
    $socialDisplayed = 0;
    $arraySocialIcons = array();


    if($basicFacebook != "") {
        $arraySocialIcons[0] = "<a href='$basicFacebook' target='_blank'>
        <svg xmlns='http://www.w3.org/2000/svg' height='26' viewBox='0 0 32 32'><defs></defs><title>Facebook</title><g><g data-name='Layer 1'><path class='social-icon' d='M30.67,0H1.33A1.34,1.34,0,0,0,0,1.33V30.67A1.34,1.34,0,0,0,1.33,32H17V20H13V15h4V11c0-4.13,2.62-6.17,6.3-6.17A33.89,33.89,0,0,1,27,5V9.34H24.47c-2,0-2.47,1-2.47,2.36V15h5l-1,5H22l.08,12h8.59A1.34,1.34,0,0,0,32,30.67V1.33A1.34,1.34,0,0,0,30.67,0Z'/></g></g></svg>
        </a>";
        $socialDisplayed++;
    }
    if($basicInstagram != "") {
        $arraySocialIcons[1] = "<a href='$basicInstagram' target='_blank'>
        <svg xmlns='http://www.w3.org/2000/svg' height='26' viewBox='0 0 32 32'><defs></defs><title>Instagram</title><g><g id='Layer_1-2' data-name='Layer 1'><path class='social-icon' d='M28.2,0H3.8A3.8,3.8,0,0,0,0,3.8V28.2A3.8,3.8,0,0,0,3.8,32H28.2A3.8,3.8,0,0,0,32,28.2V3.8A3.8,3.8,0,0,0,28.2,0ZM24,4h3a1,1,0,0,1,1,1V8a1,1,0,0,1-1,1H24a1,1,0,0,1-1-1V5A1,1,0,0,1,24,4ZM16,9.9A6.14,6.14,0,1,1,9.88,16,6.14,6.14,0,0,1,16,9.9ZM28,29H4a1,1,0,0,1-1-1V13H7a6.13,6.13,0,0,0-.7,3,9.74,9.74,0,0,0,19.47,0A5.09,5.09,0,0,0,25,13h4V28A1,1,0,0,1,28,29Z'/></g></g></svg>
        </a>";
        $socialDisplayed++;
    }
    if($basicPinterest != "") {
        $arraySocialIcons[3] = "<a href='$basicPinterest' target='_blank'>
        <svg xmlns='http://www.w3.org/2000/svg' height='26' viewBox='0 0 31 31'><defs></defs><title>Pinterest</title><g><g><path class='social-icon' d='M15.5,0A15.5,15.5,0,0,0,9.85,29.93a14.74,14.74,0,0,1,.06-4.44c.28-1.21,1.81-7.71,1.81-7.71a5.64,5.64,0,0,1-.46-2.3c0-2.15,1.25-3.76,2.8-3.76a1.94,1.94,0,0,1,2,2.18c0,1.33-.84,3.32-1.28,5.16a2.25,2.25,0,0,0,2.3,2.8c2.75,0,4.87-2.9,4.87-7.1a6.12,6.12,0,0,0-6.48-6.3,6.7,6.7,0,0,0-7,6.72,6,6,0,0,0,1.15,3.54.49.49,0,0,1,.11.45l-.43,1.75c-.07.29-.23.35-.52.21-1.94-.9-3.15-3.73-3.15-6,0-4.89,3.55-9.38,10.24-9.38,5.38,0,9.56,3.83,9.56,9,0,5.34-3.37,9.64-8,9.64a4.17,4.17,0,0,1-3.56-1.78l-1,3.69a17.51,17.51,0,0,1-1.93,4.06A15.5,15.5,0,1,0,15.5,0Z'/></g></g></svg>
        </a>";
        $socialDisplayed++;
    }
    if($basicRSS != "") {
        $arraySocialIcons[4] = "<a href='$basicRSS' target='_blank'>
        <svg xmlns='http://www.w3.org/2000/svg' height='26' viewBox='0 0 28 28'><defs></defs><title>RSS</title><g><g><circle class='social-icon' cx='4' cy='24' r='4'/><path class='social-icon' d='M28,28H22.67A22.7,22.7,0,0,0,0,5.33V0A28,28,0,0,1,28,28Z'/><path class='social-icon' d='M18.67,28H13.33A13.35,13.35,0,0,0,0,14.67V9.33A18.7,18.7,0,0,1,18.67,28Z'/></g></g></svg>
        </a>";
        $socialDisplayed++;
    }

    if($basicSkype != "") {
        $arraySocialIcons[5] = "<a href='skype:$basicSkype?chat' target='_blank'>
        <svg xmlns='http://www.w3.org/2000/svg' height='26' viewBox='0 0 32 31.92'><defs></defs><title>Skype</title><g><g><path class='social-icon' d='M30.87,18.63l0,.17-.05-.33a1.19,1.19,0,0,0,.08.16,15.69,15.69,0,0,0,.25-2.74A15.15,15.15,0,0,0,21.89,2a15.25,15.25,0,0,0-8.74-.91h0l.16.08-.32,0,.16,0A8.94,8.94,0,0,0,0,9a8.85,8.85,0,0,0,1.13,4.33.88.88,0,0,1,0-.16l.06.31a.71.71,0,0,1-.08-.15A15.17,15.17,0,0,0,.9,15.89a15,15,0,0,0,1.19,5.88,15.11,15.11,0,0,0,8,8A15,15,0,0,0,16,31a14.67,14.67,0,0,0,2.65-.24l-.16-.08.32.06-.16,0A8.94,8.94,0,0,0,30.87,18.63Zm-14.8,6.51c-5.37,0-7.77-2.64-7.77-4.62a1.69,1.69,0,0,1,1.78-1.72c2.3,0,1.7,3.3,6,3.3,2.19,0,3.41-1.19,3.41-2.41,0-.74-.37-1.55-1.81-1.91l-4.78-1.19c-3.84-1-4.54-3-4.54-5C8.35,7.54,12.17,6,15.76,6c3.3,0,7.2,1.83,7.2,4.26A1.74,1.74,0,0,1,21,11.92c-2,0-1.6-2.71-5.55-2.71-2,0-3,.89-3,2.16s1.55,1.67,2.89,2l3.54.78c3.87.86,4.85,3.12,4.85,5.25C23.71,22.68,21.18,25.14,16.07,25.14Z'/></g></g></svg>
        </a>";
        $socialDisplayed++;
    }

    if($basicSnapchat != "") {
        $arraySocialIcons[6] = "<a href='https://www.snapchat.com/add/$basicSnapchat' target='_blank'>
        <svg xmlns='http://www.w3.org/2000/svg' height='26' viewBox='0 0 30.2 29.07'><defs></defs><title>snapchat</title><g><g><path class='social-icon' d='M29.08,20a4.48,4.48,0,0,0-.83-.31,5.19,5.19,0,0,1-3.83-3.8l1.42-.57a2.56,2.56,0,0,0,1.6-2.94,2.36,2.36,0,0,0-.84-1.32,2.31,2.31,0,0,0-1.43-.49,2.39,2.39,0,0,0-.53.06l-.47.11c0-.55,0-1.13,0-1.72a8.86,8.86,0,0,0-.72-3.51A9.25,9.25,0,0,0,18.59.72,8.77,8.77,0,0,0,15.09,0h0a8.86,8.86,0,0,0-3.51.72,9.14,9.14,0,0,0-2.86,2A9,9,0,0,0,6.79,5.54a8.86,8.86,0,0,0-.72,3.51c0,.59,0,1.17,0,1.72l-.47-.11A2.39,2.39,0,0,0,5,10.6a2.31,2.31,0,0,0-1.43.49,2.36,2.36,0,0,0-.84,1.32,2.56,2.56,0,0,0,1.6,2.94l1.42.57A5.19,5.19,0,0,1,2,19.72a4.48,4.48,0,0,0-.83.31A1.86,1.86,0,0,0,0,21.72,2.09,2.09,0,0,0,.87,23.4,3.57,3.57,0,0,0,1.94,24a13,13,0,0,0,1.83.43,4,4,0,0,0,.14.65,2.29,2.29,0,0,0,1.3,1.54,3,3,0,0,0,1.14.19c.28,0,.58,0,.89,0s.69,0,1,0a3.05,3.05,0,0,1,1.22.19c.39.18.8.42,1.24.68a8.5,8.5,0,0,0,4.36,1.53,8.5,8.5,0,0,0,4.36-1.53c.44-.26.85-.5,1.24-.68a3,3,0,0,1,1.22-.19c.35,0,.7,0,1,0s.61,0,.89,0A3,3,0,0,0,25,26.57,2.29,2.29,0,0,0,26.29,25a4,4,0,0,0,.14-.65A13,13,0,0,0,28.26,24a3.57,3.57,0,0,0,1.07-.55,2.09,2.09,0,0,0,.87-1.68A1.86,1.86,0,0,0,29.08,20Z'/></g></g></svg>
        </a>";
        $socialDisplayed++;
    }
    if($basicTwitter != "") {
        $arraySocialIcons[7] = "<a href='$basicTwitter' target='_blank'>
        <svg xmlns='http://www.w3.org/2000/svg' height='26' viewBox='0 0 32 26.01'><defs></defs><title>Twitter</title><g><g><path class='social-icon' d='M32,3.08a13.23,13.23,0,0,1-3.77,1A6.61,6.61,0,0,0,31.12.48,13.16,13.16,0,0,1,27,2.07a6.57,6.57,0,0,0-11.36,4.5,6.67,6.67,0,0,0,.17,1.49A18.63,18.63,0,0,1,2.23,1.2a6.49,6.49,0,0,0-.89,3.3A6.58,6.58,0,0,0,4.26,10a6.59,6.59,0,0,1-3-.82v.08a6.58,6.58,0,0,0,5.26,6.44,6.57,6.57,0,0,1-1.73.23,7.12,7.12,0,0,1-1.23-.12,6.57,6.57,0,0,0,6.13,4.56,13.19,13.19,0,0,1-8.15,2.81A13.51,13.51,0,0,1,0,23.06a18.62,18.62,0,0,0,10.06,3C22.14,26,28.74,16,28.74,7.33c0-.29,0-.57,0-.85A13.25,13.25,0,0,0,32,3.08Z'/></g></g></svg>
        </a>";
        $socialDisplayed++;
    }
    if($basicWeChat != "") {
        $arraySocialIcons[8] = "<a href='https://msng.link/wc/$basicWeChat' target='_blank'>
        <svg xmlns='http://www.w3.org/2000/svg' height='26' viewBox='0 0 35.07 30.68'><defs></defs><title>WeCjat</title><g><g><path class='social-icon' d='M13.15,0C5.89,0,0,4.91,0,11a10.39,10.39,0,0,0,5,8.59L3.29,23,8,21a15,15,0,0,0,3.19.79A9.36,9.36,0,0,1,11,19.72c0-6,5.9-10.95,13.15-10.95a15.7,15.7,0,0,1,1.95.13C24.9,3.83,19.57,0,13.15,0ZM8.77,8.22a1.65,1.65,0,1,1,1.64-1.65A1.65,1.65,0,0,1,8.77,8.22Zm8.76,0a1.65,1.65,0,1,1,1.65-1.65A1.65,1.65,0,0,1,17.53,8.22Z'/><path class='social-icon' d='M35.07,19.72c0-4.84-4.91-8.76-11-8.76s-11,3.92-11,8.76,4.91,8.77,11,8.77A13.4,13.4,0,0,0,27,28.15l5.9,2.53-2-4.08A8.26,8.26,0,0,0,35.07,19.72Zm-14.25-.54a1.65,1.65,0,1,1,1.64-1.65A1.64,1.64,0,0,1,20.82,19.18Zm6.58,0A1.65,1.65,0,1,1,29,17.53,1.65,1.65,0,0,1,27.4,19.18Z'/></g></g></svg>
        </a>";
        $socialDisplayed++;
    }
    if($basicWhatsApp != "") {
        $arraySocialIcons[9] = "<a href='https://api.whatsapp.com/send?phone=$basicWhatsApp' target='_blank'>
        <svg xmlns='http://www.w3.org/2000/svg' height='26' viewBox='0 0 30.02 30.15'><title>whatsapp</title><g><g><path class='social-icon' d='M0,30.15l2.12-7.74A15,15,0,0,1,15.07,0a14.95,14.95,0,1,1,0,29.89h0a15,15,0,0,1-7.15-1.82Zm8.29-4.78.45.27a12.44,12.44,0,0,0,6.33,1.73h0A12.43,12.43,0,0,0,27.49,15,12.43,12.43,0,0,0,15.08,2.52a12.43,12.43,0,0,0-10.53,19l.29.47L3.59,26.6Z'/><path class='social-icon' d='M11.34,8.69c-.31-.72-.62-.63-.84-.64H9.78a1.37,1.37,0,0,0-1,.47,4.17,4.17,0,0,0-1.3,3.11A7.31,7.31,0,0,0,9,15.48c.19.25,2.64,4,6.38,5.64a20,20,0,0,0,2.13.79,5.27,5.27,0,0,0,2.35.15,3.86,3.86,0,0,0,2.52-1.78,3.19,3.19,0,0,0,.22-1.78c-.09-.15-.34-.24-.71-.43S19.68,17,19.33,16.85s-.59-.18-.84.19-1,1.22-1.18,1.46-.43.29-.81.1a10.38,10.38,0,0,1-3-1.85,11.43,11.43,0,0,1-2.08-2.59c-.22-.37,0-.58.16-.76s.38-.44.57-.66a2.75,2.75,0,0,0,.37-.62.7.7,0,0,0,0-.65C12.39,11.28,11.65,9.44,11.34,8.69Z'/></g></g></svg>
        </a>";
        $socialDisplayed++;
    }
    if($basicYouTube != "") {
        $arraySocialIcons[10] = "<a href='$basicYouTube' target='_blank'>
        <svg xmlns='http://www.w3.org/2000/svg' height='26' viewBox='0 0 32 22.51'><defs></defs><title>youtube</title><g><g><path class='social-icon' d='M31.68,4.86a6.91,6.91,0,0,0-1.27-3.18A4.59,4.59,0,0,0,27.2.32C22.72,0,16,0,16,0h0S9.28,0,4.8.32A4.59,4.59,0,0,0,1.59,1.68,6.91,6.91,0,0,0,.32,4.86,48.11,48.11,0,0,0,0,10v2.43a48.41,48.41,0,0,0,.32,5.18,6.91,6.91,0,0,0,1.27,3.18,5.5,5.5,0,0,0,3.53,1.37c2.56.24,10.88.32,10.88.32s6.72,0,11.2-.34a4.57,4.57,0,0,0,3.21-1.35,6.91,6.91,0,0,0,1.27-3.18A48.41,48.41,0,0,0,32,12.46V10A48.11,48.11,0,0,0,31.68,4.86ZM12.7,15.4v-9l8.65,4.51Z'/></g></g></svg>
        </a>";
        $socialDisplayed++;
    }
    if($basicEmail != "") {
        $arraySocialIcons[11] = "<a href='mailto:$basicEmail' target='_blank'>
        <svg version='1.1' height='30' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'
        viewBox='0 0 25.9 25.9' style='enable-background:new 0 0 25.9 25.9;' xml:space='preserve'><g><g><path class='social-icon' d='M22.8,3.1H3.2C1.4,3.1,0,4.5,0,6.3v13.4c0,1.7,1.4,3.2,3.2,3.2h19.6c1.7,0,3.2-1.4,3.2-3.2V6.3
        C25.9,4.5,24.5,3.1,22.8,3.1z M24.5,19.7c0,0.9-0.8,1.7-1.7,1.7H3.2c-0.9,0-1.7-0.8-1.7-1.7V6.3c0-0.9,0.8-1.7,1.7-1.7h19.6
        c0.9,0,1.7,0.8,1.7,1.7L24.5,19.7L24.5,19.7z'/><path class='social-icon' d='M16.4,12.8l6.3-5.7c0.3-0.3,0.3-0.7,0.1-1c-0.3-0.3-0.7-0.3-1-0.1L13,13.9l-1.7-1.5c0,0,0,0,0,0
        c0,0-0.1-0.1-0.1-0.1L4.2,6c-0.3-0.3-0.8-0.2-1,0.1s-0.2,0.8,0.1,1l6.4,5.7l-6.4,6c-0.3,0.3-0.3,0.7,0,1c0.1,0.2,0.3,0.2,0.5,0.2
        c0.2,0,0.4-0.1,0.5-0.2l6.5-6.1l1.8,1.6c0.1,0.1,0.3,0.2,0.5,0.2s0.3-0.1,0.5-0.2l1.8-1.6l6.4,6.1c0.1,0.1,0.3,0.2,0.5,0.2
        c0.2,0,0.4-0.1,0.5-0.2c0.3-0.3,0.3-0.8,0-1L16.4,12.8z'/></g></g></svg></a>";
        $socialDisplayed++;
    }

    if ($socialDisplayed > 5) {
        $colSize = "col-12";
    }
    else {
        $colSize = "col-6";
    }
?>

    <?php if (get_theme_mod('basic-social-callout-display') == 'Yes') { ?>
    <div class="row social">

        <?php
        if($basicMailChimp != '') { ?>
    
            <div class="<?php echo $colSize;?> newsletter">
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

    <div class="<?php echo $colSize;?> networks">
        <?php   
            foreach ($arraySocialIcons as $value) {
                echo "$value <br>";
            }
        ?>
        <span id="search__button" onclick="toggleSearch()">
        <svg xmlns="http://www.w3.org/2000/svg" width="25.927" height="25.927" viewBox="0 0 25.927 25.927">
        <path class='social-icon' d="M25.292,22.228,19.66,16.6c-.03-.03-.065-.051-.1-.079a10.663,10.663,0,1,0-3.047,3.046c.028.031.049.066.079.1l5.633,5.633a2.167,2.167,0,0,0,3.064-3.064Zm-14.633-4.6a6.964,6.964,0,1,1,6.964-6.964A6.964,6.964,0,0,1,10.659,17.623Z"  fill-rule="evenodd"/>
        </svg>
        </span>
    </div>
        <div id="search_underlayer"></div>
        <div id="search__popup" style="display: none;"> 
                <form action="/" method="get" class="row">
                        <input  class="col-8" type="text" name="s" placeholder="Search..." id="search" value="<?php the_search_query(); ?>" />
                        <input class="col-4" type="submit" />
                </form>
        </div>  
    </div>
<?php } ?>