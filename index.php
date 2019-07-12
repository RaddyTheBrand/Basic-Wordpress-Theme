<?php get_header(); ?>
<div class="container"> 

<div class="author grid">
    <div class="author-image col1"><img class="objFit" src="<?php echo get_template_directory_uri(); ?>/images/author.jpg" alt="Author Name"/></div>
    <div class="author-content col2">
        <?php 
            $optionAuthor = get_option('author');
            if($optionAuthor == "" || $optionAuthor == null) {
                $optionAuthor = "Hey, you need to edit this by going to your Dashboard -> Theme Options. Change the Author field and save.";
            }
            echo $optionAuthor;
        ?>
    </div>
</div> 

<?php
    require_once( get_template_directory() . '/include/social.php' );

    if(have_posts()) {
        while(have_posts()) : the_post();
?>

<article class="grid">
        <div class="col1 thumbnail">
            <a href="<?php the_permalink();?>">
                <?php  
                  if ( has_post_thumbnail() ) {
                    the_post_thumbnail('medium');
                  }
                  else {
                  echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) 
                  . '/images/thumbnail-default.jpg" />';
                  }
            ?>
            </a>
        </div> 
        <div class="col2">
            <a href="<?php the_permalink();?>">
                <h2><?php the_title(); ?></h2>
                <p><?php echo get_excerpt(186); ?></p>
                <span class="button" href="#">More +</span>
            </a>
        </div>
</article>

<?php endwhile; } ?>
</div>

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