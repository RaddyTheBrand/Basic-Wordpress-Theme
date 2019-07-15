<?php get_header(); ?>

<div class="row row-padding author">
    <div class="col-6 author-image"><img src="<?php echo get_template_directory_uri(); ?>/images/author.jpg" alt="Author Name"/></div>
    <div class="col-6 author-content">
        <?php 
            $optionAuthor = get_option('author');
            if($optionAuthor == "" || $optionAuthor == null) {
                $optionAuthor = "Hey, you need to edit this by going to your Dashboard -> Theme Options. Change the Author field and save.";
            }
            echo $optionAuthor;
        ?>
    </div>
</div> 
 

<main class="container"> 
<?php
    require_once( get_template_directory() . '/include/social.php' );

    if(have_posts()) {
        while(have_posts()) : the_post();
?>

<article class="row row-padding">
        <div class="col-6 thumbnail">
            <a href="<?php the_permalink();?>">
            <?php  
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail('medium', ['class' => 'objFit'], array('title' => get_the_title() ));
                }
                else {
                echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) 
                . '/images/thumbnail-default.jpg" alt="Missing Image"/>';
                }
            ?>

            </a>
        </div> 
        <div class="col-6 content">
            <a href="<?php the_permalink();?>">
                <h2><?php the_title(); ?></h2>
                <p><?php echo get_excerpt(186); ?></p>
                <span class="button" href="#">More +</span>
            </a>
        </div>
</article>

<?php endwhile; } ?>
</main>

<?php
if ( function_exists( 'paginate_links') !== '' ) {
    ?>
    <nav class="pagination"><?php echo paginate_links(); ?> </nav> 
    <?php
}
else {
    /*Link to homepage */ 
}
?>

<?php get_footer(); ?>