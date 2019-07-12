
<footer>
    <p>
        <?php 
            $optionPP = get_option('pp'); 
            if ($optionPP == "" || $optionPP == null) {
                $optionPP = "<a href='/privacy'>Privacy Policy</a> / <a href='/policy'>Cookie Policy</a>";
            }
            echo $optionPP;
        ?>
    </p>
    <p>
        <?php 
            $optionFooter = get_option('footer'); 
            if ($optionFooter == "" || $optionFooter == null) {
                $optionFooter = "Created by <a href='https://www.raddy.co.uk'>Raddy</a>";
            }
            echo $optionFooter;
        ?>
    </p>
</footer>

<?php wp_footer() ?>
