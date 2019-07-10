<div class="social">
    <div class="newsletter">
        <input type="text" placeholder="Email Newsletter" class="subscribeinput">
        <input type="submit" value="Submit" name="subscribe" class="subscribebutton">
    </div>
    <div class="networks">

    <?php 
            $imgUrl = get_template_directory_uri();
            $optionFb = get_option('fb');
            $optionTwitter = get_option('twitter');
            $optionInsta = get_option('insta');
            if($optionFb == "" || $optionFb == null) {
                $optionFb = "";
            }
            else {
                echo "<a href='$optionFb'><img src='$imgUrl/images/facebook.svg' alt='Facebook'/></a>";
            }
            if($optionTwitter == "" || $optionTwitter == null) {
                $optionTwitter = "";
            }
            else {
                echo "<a href='$optionTwitter'><img src='$imgUrl/images/twitter.svg' alt='Twitter'/></a>";
            }
            if($optionInsta == "" || $optionInsta == null) {
                $optionInsta = "";
            }
            else {
                echo "<a href='$optionInsta'><img src='$imgUrl/images/instagram.svg' alt='Insta'/></a>";
            }
            
    ?>
        <span id="search__button" onclick="toggleSearch()"><img src="<?php echo get_template_directory_uri(); ?>/images/search.svg" alt="Search"/></span>
    </div>

    <div id="search__popup" style="display: none;"> 
            <form action="/" method="get">
                    <input type="text" name="s" placeholder="Search..." id="search" value="<?php the_search_query(); ?>" />
                    <input type="submit" alt="Search" />
            </form>
    </div>

</div>