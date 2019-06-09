<?php get_header(); ?>
<?php   
    if ( have_posts() ) { 
    while ( have_posts() ) : the_post();
?>
<div class="article1">
    <div class="thumbnail"><?php the_post_thumbnail( 'medium_large' ); ?></div>
    <div class="content">
        <h1><?php the_title(); ?></h1>
        <p><?php the_excerpt(); ?></p>
    </div>
</div>
<?php
    endwhile;
    } 
?>

    <div class="social">
        <div class="newsletter">
            <input type="text" placeholder="Email Newsletter" class="subscribeinput">
            <input type="submit" value="Submit" name="subscribe" id="mc-embedded-subscribe" class="subscribebutton">
        </div>
        <div class="networks"> 
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" alt="facebook" /></a>
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.svg" alt="Twitter" /></a>
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram.svg" alt="Instagram" /></a>
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/search.svg" alt="Search" /></a>
        </div>

    </div>

</div>
<?php get_footer(); ?>