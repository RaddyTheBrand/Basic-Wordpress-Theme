<?php get_header(); ?>
<?php if (get_theme_mod('basic-author-callout-display') == 'Yes') { ?>
<div class="row row-padding author">
    <div class="col-6 author-image">
    <img src="<?php echo wp_get_attachment_url(get_theme_mod('basic-author-callout-image')) ?>" alt="Author Image">
    </div>
    <div class="col-6 author-content">
        <?php 

            $authorText = get_theme_mod('basic-author-callout-text');

            if ($authorText != '') {
                echo wpautop($authorText);
            }
            else {
                echo "Edit this by going to your Dashboard -> Appearance -> Customise -> Author Editor";
            }
            
        ?>
    </div>
</div> 
<?php } ?>
 

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
                <h2><?php the_title(); ?></h2>
                <p><?php echo get_excerpt(186); ?></p>
                <a class="button" href="<?php the_permalink();?>">More +</a>
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