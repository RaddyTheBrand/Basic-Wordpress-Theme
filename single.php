<?php get_header(); ?>


<?php
    require_once( get_template_directory() . '/include/social.php' );

    if(have_posts()) {
        while(have_posts()) : the_post();
?>

<div>
<h1>Single.php</h1>
    <?php the_post_thumbnail('medium'); ?>
    <h1><?php the_title(); ?></h1>
    <?php the_content();?>
</div>

<?php endwhile; } ?>
<nav class="pagination"><?php echo paginate_links(); ?></nav>
<?php get_footer(); ?>
