<footer>
    <p><a href="#">Privacy Policy</a> / <a href="#">Cookie Policy</a></p>
    <p><?php $optionFooter = get_option('footer'); 
        echo $optionFooter;
    ?>
</footer>

<?php wp_footer() ?>
