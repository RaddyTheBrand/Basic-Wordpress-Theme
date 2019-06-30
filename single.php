<?php get_header(); ?>
<?php   
    if ( have_posts() ) { 
    while ( have_posts() ) : the_post();
?>

<div class="single__article">
    <div class="thumbnail"><?php the_post_thumbnail( 'medium_large' ); ?></div>
    <div class="content">
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
    </div>
</div>

<?php
    endwhile;
    } 
?>

<div class="social">
    <div class="newsletter">
        <input type="text" placeholder="Email Newsletter" class="subscribeinput">
        <input type="submit" value="Submit" name="subscribe" class="subscribebutton">
    </div>
    <div class="networks">
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" alt="Facebook"/></a>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.svg" alt="Twitter"/></a>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram.svg" alt="Instagram"/></a>
        <span id="search__button" onclick="toggleSearch()"><img src="<?php echo get_template_directory_uri(); ?>/images/search.svg" alt="Search"/></span>
    </div>

    <div id="search__popup" style="display: none;"> 
            <form action="/" method="get">
                    <input type="text" name="s" placeholder="Search..." id="search" value="<?php the_search_query(); ?>" />
                    <input type="submit" alt="Search" />
            </form>
    </div>

</div>
<?php get_footer(); ?>