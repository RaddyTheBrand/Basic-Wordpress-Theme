<footer>
    <?php if (get_theme_mod('basic-footer-callout-display') == 'Yes') { ?>
    <p>
        <?php 
            $basicFooter = get_theme_mod('basic-footer-callout-copyright');
            $basicPrivacyPolicy = get_theme_mod('basic-footer-callout-privacy-policy');
            $basicCookiePolicy = get_theme_mod('basic-footer-callout-cookie-policy');

            if ($basicPrivacyPolicy == "" || $basicPrivacyPolicy == null) {
                echo "<a href='/privacy'>Privacy Policy</a> /";
            }
            else {
                echo "<a href='". $basicPrivacyPolicy ."'>Privacy Policy</a> / ";
            }
            if ($basicCookiePolicy == "" || $basicCookiePolicy == null) {
                echo "<a href='/policy'>Cookie Policy</a>";
            }
            else {
                echo "<a href='". $basicCookiePolicy ."'>Cookie Policy</a>";
            }

        ?>
    </p>
    <?php } ?>

    <p>
        <?php 
            $thisYear = date("Y");
            $blog_title = get_bloginfo();
            $basicFooter = get_theme_mod('basic-footer-callout-copyright');

            if ($basicFooter == "" || $basicFooter == null) {
                $basicFooter = "&copy; " . $thisYear . " " . $blog_title . " / Created by <a href='https://www.raddy.co.uk'>Raddy</a>";
            }
            echo $basicFooter;
        ?>
    </p>
</footer>

</div> 

<?php wp_footer() ?>
