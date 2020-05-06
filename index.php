<?php get_header(); ?>
<?php if (get_theme_mod('basic-author-callout-display') == 'Yes') { ?>
<div class="row row-padding author">
    <div class="col-6 author-image">
    <img loading="lazy" src="<?php echo wp_get_attachment_url(get_theme_mod('basic-author-callout-image')) ?>" alt="Author Image">
    </div>
    <div class="col-6 author-content">
        <?php 
            $authorText = get_theme_mod('basic-author-callout-text');
            if ($authorText != '') {
                echo wpautop($authorText);
            } else {
                echo "Edit this by going to your Dashboard -> Appearance -> Customise -> Author Editor";
            }
        ?>
    </div>
</div> 
<?php } ?>
 
<main class="container"> 
<?php
    get_template_part( '/inc/social', 'social' );
    if(have_posts()) {
        while(have_posts()) : the_post();
?>

<article class="row row-padding"  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="col-6 thumbnail">
        <a href="<?php the_permalink();?>">
        <?php  
            if ( has_post_thumbnail() ) {
                the_post_thumbnail('medium_large', ['class' => 'objFit', 'loading' => 'lazy'], array('title' => get_the_title() ));
            } else {
            echo '<img src="' . get_stylesheet_directory_uri( 'stylesheet_directory' ) 
            . '/images/thumbnail-default.jpg" alt="Missing Image"/>';
            }
        ?>
        </a>
        <span class="date"><?php echo get_the_date(); ?></span>
    </div> 
    <div class="col-6 content">
        <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
        <p>
        <?php
            // Making an excerpt of the blog post content
            $excerpt = strip_tags($post->post_content);
            if (strlen($excerpt) > 180) {
                $excerpt = substr($excerpt, 0, 180);
                $excerpt = substr($excerpt, 0, strrpos($excerpt, ' '));
                $excerpt .= '...';
            }
            echo $excerpt;
        ?>
        </p>
        <a class="button" href="<?php the_permalink();?>">More +</a>
    </div>
</article>

<?php endwhile; } ?>
</main>

<?php if ( function_exists( 'paginate_links') !== '' ) { ?>
    <nav class="pagination"><?php echo paginate_links(); ?> </nav> 
    <?php
} else { /*Link to homepage */ } ?>

<?php get_footer(); ?>